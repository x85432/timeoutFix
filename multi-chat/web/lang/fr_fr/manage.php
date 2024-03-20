<?php

return [
    'route' => 'Gestion',
    'interface.header' => 'Interface de gestion des administrateurs',
    'button.delete' => 'Supprimer',
    'button.update' => 'Mettre à jour',
    'button.create' => 'Créer',
    'button.save' => 'Enregistrer',
    'button.yes' => 'Oui, je confirme',
    'button.no' => 'Non, annuler',
    'button.cancel' => 'Annuler',
    'button.close' => 'Fermer',
    'button.accept' => 'J\'accepte',

    //Tabs
    'tab.groups' => 'Groupes',
    'tab.users' => 'Utilisateurs',
    'tab.llms' => 'Modèles',
    'tab.settings' => 'Paramètres système',

    //Groups
    'button.new_group' => 'Nouveau groupe',
    'header.create_group' => 'Créer un nouveau groupe',
    'label.tab_permissions' => 'Permissions de la page',
    'label.invite_code' => 'Code d\'invitation',
    'label.group_name' => 'Nom',
    'label.invite_code' => 'Code d\'invitation',
    'placeholder.invite_code' => 'Code d\'invitation',
    'label.describe' => 'Description',
    'placeholder.group_name' => 'Nom du groupe',
    'placeholder.group_detail' => 'Détails du groupe',
    'label.read' => 'Lire',
    'label.delete' => 'Supprimer',
    'label.update' => 'Mettre à jour',
    'label.llm_permission.disabled' => 'Permissions d\'utilisation du modèle (modèle désactivé)',
    'label.llm_permission.enabled' => 'Permissions d\'utilisation du modèle (modèle activé)',
    'header.edit_group' => 'Modifier le groupe',
    'hint.group_updated' => 'Groupe mis à jour avec succès !',
    'hint.group_created' => 'Groupe créé avec succès !',
    'modal.delete_group.header' => 'Êtes-vous sûr de vouloir supprimer ce groupe ?',

    //Users
    'header.menu' => 'Menu principal',
    'header.group_selector' => 'Sélecteur de groupe',
    'header.fuzzy_search' => 'Recherche floue',
    'header.create_user' => 'Créer un utilisateur',
    'label.group_selector' => 'Commencer la recherche à partir du groupe',
    'label.fuzzy_search' => 'Rechercher par nom ou par e-mail',
    'label.create_user' => 'Créer un profil utilisateur',

    'create_user.header' => 'Créer un nouveau compte',
    'create_user.joined_group' => 'Groupes rejoint',
    'label.members' => 'Membres',
    'label.other_users' => 'Autres utilisateurs sans groupe',
    'button.return_group_list' => 'Retour à la liste des groupes',
    'placeholder.search_user' => 'Rechercher par e-mail ou par nom',
    'hint.enter_to_search' => 'Appuyez sur Entrée pour rechercher',

    'group_selector.header' => 'Modifier l\'utilisateur',
    'placeholder.email' => 'E-mail de l\'utilisateur',
    'placeholder.username' => 'Nom d\'utilisateur',
    'label.name' => 'Nom',
    'modal.delete_user.header' => 'Voulez-vous vraiment supprimer cet utilisateur ?',
    'button.cancel' => 'Annuler',
    'label.email' => 'E-mail',
    'label.password' => 'Mot de passe',
    'label.update_password' => 'Mettre à jour le mot de passe',
    'label.detail' => 'Détails',
    'placeholder.new_password' => 'Nouveau mot de passe',
    'label.require_change_password' => 'Changer le mot de passe lors de la prochaine connexion',
    'label.extra_setting' => 'Paramètres supplémentaires',
    'label.created_at' => 'Créé le',
    'label.updated_at' => 'Mis à jour le',

    //LLMs
    'button.new_model' => 'Nouveau modèle',
    'label.enabled_models' => 'Modèles activés',
    'label.disabled_models' => 'Modèles désactivés',
    'header.create_model' => 'Créer un fichier de configuration de modèle',
    'modal.create_model.header' => 'Êtes-vous sûr de vouloir créer ce fichier de configuration ?',
    'label.model_image' => 'Image du modèle',
    'label.model_name' => 'Nom du modèle',
    'label.order' => 'Ordre d\'affichage',
    'label.link' => 'Lien externe',
    'placeholder.description' => 'Description du modèle',
    'label.version' => 'Version',
    'label.access_code' => 'Code d\'accès',
    'placeholder.link' => 'Lien externe pertinent pour ce modèle',
    'header.update_model' => 'Modifier le fichier de configuration du modèle',
    'label.description' => 'Description',
    'modal.update_model.header' => 'Êtes-vous sûr de vouloir mettre à jour ce fichier de configuration de modèle ?',
    'modal.delete_model.header' => 'Êtes-vous sûr de vouloir supprimer ce fichier de configuration de modèle ?',

    //setting
    'header.settings' => 'Paramètres système',
    'label.settings' => 'Tous les paramètres système peuvent être ajustés ici',
    'label.agent_API' => 'Emplacement de la connexion API de l\'agent',
    'label.allow_register' => 'Autoriser l\'inscription',
    'button.reset_redis' => 'Réinitialiser le cache Redis',
    'hint.saved' => 'Enregistré',
    'hint.redis_cache_cleared' => 'Cache Redis vidé',
    'label.need_invite' => 'L\'inscription nécessite un code d\'invitation',
    'label.footer_warning' => 'Avertissement en bas de page',
    'label.safety_guard_API' => 'Emplacement de la connexion au filtre de sécurité',
    'label.anno' => 'Annonce système',
    'label.tos' => 'Conditions d\'utilisation',

    //Permissions
    'perm.Room_update_import_chat' => 'Importer la conversation',
    'perm.Room_update_new_chat' => 'Créer une nouvelle conversation',
    'perm.Room_update_feedback' => 'Donner un retour',
    'perm.Room_update_send_message' => 'Envoyer un message',
    'perm.Room_update_react_message' => 'Bouton d\'action supplémentaire',
    'perm.Room_read_export_chat' => 'Exporter la conversation',
    'perm.Room_delete_chatroom' => 'Supprimer la conversation',
    'perm.Chat_update_react_message' => 'Bouton d\'action supplémentaire',
    'perm.Dashboard_read_statistics' => 'Statistiques',
    'perm.Dashboard_read_blacklist' => 'Liste noire',
    'perm.Dashboard_read_feedbacks' => 'Rétroactions',
    'perm.Dashboard_read_logs' => 'Journaux système',
    'perm.Dashboard_read_safetyguard' => 'Filtre de sécurité',
    'perm.Dashboard_read_inspect' => 'Navigateur de messages',
    'perm.Chat_update_detail_feedback' => 'Détails du retour',
    'perm.Room_update_detail_feedback' => 'Détails du retour',
    'perm.Chat_update_send_message' => 'Envoyer un message',
    'perm.Chat_update_new_chat' => 'Créer une nouvelle conversation',
    'perm.Chat_update_upload_file' => 'Téléverser un fichier',
    'perm.Chat_update_feedback' => 'Donner un retour',
    'perm.Chat_update_import_chat' => 'Importer la conversation',
    'perm.Chat_read_access_to_api' => 'Accéder à l\'API du site',
    'perm.Chat_read_export_chat' => 'Exporter la conversation',
    'perm.Chat_delete_chatroom' => 'Supprimer la conversation',
    'perm.Profile_update_api_token' => 'Mettre à jour la clé API du site',
    'perm.Profile_update_name' => 'Modifier le nom d\'utilisateur',
    'perm.Profile_update_email' => 'Modifier l\'adresse e-mail',
    'perm.Profile_update_password' => 'Modifier le mot de passe',
    'perm.Profile_update_openai_token' => 'Modifier la clé OpenAI',
    'perm.Profile_read_api_token' => 'Lire la clé API du site',
    'perm.Profile_delete_account' => 'Supprimer le compte',

    'perm.Chat_update_detail_feedback.describe' => 'Ajouter des détails à un retour',
    'perm.Room_update_detail_feedback.describe' => 'Ajouter des détails à un retour',
    'perm.Profile_update_name.describe' => 'Mettre à jour le nom d\'utilisateur',
    'perm.Profile_update_email.describe' => 'Mettre à jour l\'adresse e-mail',
    'perm.Profile_update_password.describe' => 'Mettre à jour le mot de passe',
    'perm.Profile_update_openai_token.describe' => 'Mettre à jour la clé OpenAI',
    'perm.Profile_read_api_token.describe' => 'Lire la clé API du site',
    'perm.Profile_delete_account.describe' => 'Supprimer le compte',
    'perm.Profile_update_api_token.describe' => 'Mettre à jour la clé API du site',
    'perm.Chat_read_access_to_api.describe' => 'Accéder à l\'API du site',
    'perm.Chat_update_send_message.describe' => 'Envoyer des messages dans une conversation (sans créer)',
    'perm.Room_update_send_message.describe' => 'Envoyer des messages dans une conversation (sans créer)',
    'perm.Chat_update_new_chat.describe' => 'Créer une conversation',
    'perm.Room_update_new_chat.describe' => 'Créer une conversation',
    'perm.Chat_update_upload_file.describe' => 'Téléverser un fichier (nécessite le droit de créer une conversation)',
    'perm.Chat_update_feedback.describe' => 'Donner un retour sur l\'utilisation du modèle',
    'perm.Room_update_feedback.describe' => 'Donner un retour sur l\'utilisation du modèle',
    'perm.Room_delete_chatroom.describe' => 'Supprimer une conversation',
    'perm.Chat_delete_chatroom.describe' => 'Supprimer une conversation',
    'perm.Chat_read_export_chat.describe' => 'Exporter des conversations',
    'perm.Room_read_export_chat.describe' => 'Exporter des conversations',
    'perm.Chat_update_import_chat.describe' => 'Importer des conversations (nécessite le droit de créer une conversation)',
    'perm.Room_update_import_chat.describe' => 'Importer des conversations (nécessite le droit de créer une conversation)',
    'perm.Chat_update_react_message.describe' => 'Utiliser les boutons d\'action supplémentaires (comme citer, traduire, etc.)',
    'perm.Room_update_react_message.describe' => 'Utiliser les boutons d\'action supplémentaires (comme citer, traduire, etc.)',
    'perm.Dashboard_read_statistics.describe' => 'Accéder aux statistiques',
    'perm.Dashboard_read_blacklist.describe' => 'Accéder à la liste noire',
    'perm.Dashboard_read_feedbacks.describe' => 'Accéder aux rétroactions',
    'perm.Dashboard_read_logs.describe' => 'Accéder aux journaux système',
    'perm.Dashboard_read_safetyguard.describe' => 'Accéder au filtre de sécurité',
    'perm.Dashboard_read_inspect.describe' => 'Accéder au navigateur de messages',
];
