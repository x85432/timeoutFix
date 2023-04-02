<x-app-layout>
    <div class="flex h-full max-w-7xl mx-auto py-2">
        <div class="bg-gray-800 text-white w-64 flex-shrink-0 relative rounded-l-lg overflow-hidden">
            <div class="p-3 h-full overflow-y-auto scrollbar">
                @php
                    $have = false;
                @endphp
                @foreach (App\Models\LLMs::where('enabled', false)->orderby('order')->orderby('created_at')->get() as $LLM)
                    @if (App\Models\Chats::where('user_id', Auth::user()->id)->where('llm_id', $LLM->id)->count() > 0)
                        <div class="mb-2 border border-white border-1 rounded-lg">
                            <a href="{{ $LLM->link }}" target="_blank"
                                class="inline-block menu-btn mt-2 w-auto ml-4 mr-auto h-6 transition duration-300 text-blue-300">{{ $LLM->name }}</a>
                            @foreach (App\Models\Chats::where('user_id', Auth::user()->id)->where('llm_id', $LLM->id)->orderby('updated_at')->get() as $chat)
                                <div class="m-2 border border-white border-1 rounded-lg overflow-hidden">
                                    <a class="flex menu-btn flex items-center justify-center overflow-y-auto scrollbar w-full h-12 hover:bg-gray-700 {{ request()->route('chat_id') == $chat->id ? 'bg-gray-700' : '' }} transition duration-300"
                                        href="{{ route('archives', $chat->id) }}">
                                        <p class="flex-1 text-center">{{ $chat->name }}</p>
                                    </a>
                                </div>
                                @php
                                    if (!$have) {
                                        $have = true;
                                    }
                                @endphp
                            @endforeach
                        </div>
                    @endif
                @endforeach

                @if (!$have)
                    <div
                        class="flex-1 h-full flex flex-col w-full text-center shadow-xl rounded-r-lg overflow-hidden justify-center items-center text-white">
                        No disabled LLM history found!
                    </div>
                @endif
            </div>
        </div>
        @if (!request()->route('chat_id') && !request()->route('llm_id'))
            <div id="histories_hint"
                class="flex-1 h-full flex flex-col text-center w-full bg-gray-600 shadow-xl rounded-r-lg overflow-hidden justify-center items-center text-white">
                This is where disabled LLM history located<br>
                They might back to online soon or just gone forever<br>
                You're still able to view the history or delete them
            </div>
        @else
            <div id="histories"
                class="flex-1 h-full flex flex-col w-full bg-gray-600 shadow-xl rounded-r-lg overflow-hidden">
                @if (request()->route('chat_id'))
                    <form id="deleteChat" action="{{ route('archive_delete_chat') }}" method="post" class="hidden">
                        @csrf
                        @method('delete')
                        <input name="id"
                            value="{{ App\Models\Chats::findOrFail(request()->route('chat_id'))->id }}" />
                    </form>

                    <form id="editChat" action="{{ route('archive_edit_chat') }}" method="post" class="hidden">
                        @csrf
                        <input name="id"
                            value="{{ App\Models\Chats::findOrFail(request()->route('chat_id'))->id }}" />
                        <input name="new_name" />
                    </form>
                @endif
                <div id="chatHeader" class="bg-gray-700 p-4 h-20 text-white flex">
                    @if (request()->route('llm_id'))
                        <p class="flex items-center">New Chat with
                            {{ App\Models\LLMs::findOrFail(request()->route('llm_id'))->name }}</p>
                    @elseif(request()->route('chat_id'))
                        <p class="flex-1 flex flex-wrap items-center mr-3 overflow-y-auto scrollbar">
                            {{ App\Models\Chats::findOrFail(request()->route('chat_id'))->name }}</p>

                        <div class="flex">
                            <button onclick="saveChat()"
                                class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-4 rounded flex items-center justify-center hidden">
                                <i class="fas fa-save"></i>
                            </button>
                            <button onclick="editChat()"
                                class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-3 px-4 rounded flex items-center justify-center">
                                <i class="fas fa-pen"></i>
                            </button>
                            <button onclick="deleteChat()"
                                class="bg-red-500 ml-3 hover:bg-red-600 text-white font-bold py-3 px-4 rounded flex items-center justify-center">
                                <i class="fas fa-trash"></i>
                            </button>
                        </div>
                    @endif
                </div>
                <div id="chatroom" class="flex-1 p-4 overflow-y-auto flex flex-col-reverse scrollbar">
                    @if (request()->route('chat_id'))
                        @php
                            $botimgurl = asset(Storage::url(App\Models\LLMs::findOrFail(App\Models\Chats::findOrFail(request()->route('chat_id'))->llm_id)->image));
                        @endphp
                        @foreach (App\Models\Histories::where('chat_id', request()->route('chat_id'))->orderby('updated_at', 'desc')->get() as $history)
                            <div class="flex w-full mt-2 space-x-3 {{ $history->isbot ? '' : 'ml-auto justify-end' }}">
                                @if ($history->isbot)
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center overflow-hidden">
                                        <img src="{{ $botimgurl }}">
                                    </div>
                                @endif
                                <div>
                                    <div
                                        class="p-3 {{ $history->isbot ? 'bg-gray-300 rounded-r-lg rounded-bl-lg' : 'bg-blue-600 text-white rounded-l-lg rounded-br-lg' }}">
                                        <p class="text-sm whitespace-pre-line">{{ $history->msg }}</p>
                                    </div>
                                </div>
                                @if (!$history->isbot)
                                    <div
                                        class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300 flex items-center justify-center overflow-hidden">
                                        User
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @if (request()->route('chat_id'))
                <script>
                    function deleteChat() {
                        $("#deleteChat").submit();
                    }

                    function editChat() {
                        $("#chatHeader button").find('.fa-pen').parent().addClass('hidden');
                        $("#chatHeader button").find('.fa-save').parent().removeClass('hidden');
                        name = $("#chatHeader >p:eq(0)").text().trim();
                        $("#chatHeader >p:eq(0)").html(
                            `<input type='text' class='form-input rounded-md w-full bg-gray-700' value='${name}' old='${name}'/>`)

                        $("#chatHeader >p >input:eq(0)").keypress(function(e) {
                            if (e.which == 13) saveChat();
                        });
                    }

                    function saveChat() {
                        input = $("#chatHeader >p >input:eq(0)")
                        if (input.val() != input.attr("old")) {
                            $("#editChat input:eq(2)").val(input.val())
                            $("#editChat").submit();
                        }
                        $("#chatHeader button").find('.fa-pen').parent().removeClass('hidden');
                        $("#chatHeader button").find('.fa-save').parent().addClass('hidden');
                        $("#chatHeader >p").text(input.val())
                    }
                </script>
            @endif
        @endif
    </div>
</x-app-layout>
