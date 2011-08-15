<?php

// Sprachdefinitionen, die in admin-groups.php verwendet werden
$lang_admin_groups = array(

'Must enter title message'		=>	'Du musst einen Gruppentitel eingeben.',
'Title already exists message'	=>	'Eine Gruppe mit dem Titel <strong>%s</strong> existiert bereits.',
'Default group redirect'		=>	'Voreingestellte Gruppe festgelegt. Leite weiter …',
'Cannot remove default message'	=>	'Die voreingestellte Gruppe kann nicht entfernt werden. Um diese Gruppe löschen zu können, musst Du zunächst eine andere Gruppe als voreingestellte Gruppe festlegen.',
'Group removed redirect'		=>	'Gruppe entfernt. Leite weiter …',
'Group added redirect'			=>	'Gruppe hinzugefügt. Leite weiter …',
'Group edited redirect'			=>	'Gruppe bearbeitet. Leite weiter …',

'Add groups head'				=>	'Gruppen hinzufügen/festlegen',
'Add group subhead'				=>	'Eine neue Gruppe hinzufügen',
'New group label'				=>	'Neue Gruppe basiert auf',
'New group help'				=>	'Wähle hier eine Mitgliedergruppe, auf deren Berechtigungseinstellungen die neue Gruppe basieren soll. Auf der nächsten Seite kannst Du dann die Einstellungen noch verfeinern.',
'Default group subhead'			=>	'Voreingestellte Gruppe festlegen',
'Default group label'			=>	'Voreingestellte Gruppe',
'Default group help'			=>	'Neu registrierte Mitglieder werden dieser Mitgliedergruppe zugeordnet. Aus Sicherheitsgründen können die Moderator- und die Administrator-Gruppe nicht als voreingestellte Gruppe ausgewählt werden.',
'Existing groups head'			=>	'Existierende Gruppen',
'Edit groups subhead'			=>	'Gruppen bearbeiten/entfernen',
'Edit groups info'				=>	'Die vordefinierten Gruppen Gäste, Administratoren, Moderatoren und Mitglieder können NICHT entfernt werden. Sie können jedoch bearbeitet werden. Bitte beachte außerdem, dass einige Optionen in einigen Gruppen nicht verfügbar sind (z.Bsp. die Berechtigung <em>Beiträge bearbeiten</em> für Gäste). Administratoren haben immer alle Berechtigungen.',
'Edit link'						=>	'Bearbeiten',
'Delete link'					=>	'Entfernen',
'Group delete head'				=>	'Gruppe löschen',
'Confirm delete subhead'		=>	'Löschen der Gruppe bestätigen',
'Confirm delete info'			=>	'Willst Du wirklich die Gruppe <strong>%s</strong> löschen?',
'Confirm delete warn'			=>	'WARNUNG! Nachdem eine Gruppe gelöscht wurde, kann sie NICHT wiederhergestellt werden.',
'Delete group head'				=>	'Gruppe entfernen',
'Move users subhead'			=>	'Aktuelle Mitglieder in eine andere Gruppen verschieben',
'Move users info'				=>	'Die Gruppe <strong>%s</strong> hat aktuell <strong>%s</strong> Mitglieder. Bitte wähle eine Gruppe aus, welcher diese Mitglieder nach Entfernung der Gruppe zugeordnet werden sollen.',
'Move users label'				=>	'Mitglieder verschieben nach',
'Delete group'					=>	'Gruppe löschen',

'Group settings head'			=>	'Gruppen-Einstellungen',
'Group settings subhead'		=>	'Einstellung der Gruppen-Optionen und Berechtigungen',
'Group settings info'			=>	'Unterhalb der Optionen und Berechtigungen siehst Du die voreingestellten Berechtigungen für diese Mitgliedergruppe. Diese Optionen werden nur dann wirksam, wenn keine Foren-spezifischen Berechtigungen gesetzt wurden.',
'Group title label'				=>	'Gruppentitel',
'User title label'				=>	'Mitgliedertitel',
'User title help'				=>	'Dieser Titel überschreibt den Mitgliederrang, der dieser Gruppe zugeordnet ist. Ohne Vorgabe wird der voreingestellte Titel oder Rang verwendet.',
'Mod privileges label'			=>	'Gibt Mitgliedern Moderator-Privilegien',
'Mod privileges help'			=>	'Damit ein Mitglied dieser Gruppe diese moderieren kann, muss ihm/ihr die Berechtigung zum Moderieren einer oder mehrerer Foren zugeordnet werden. Dies erfolgt in der Mitglieder-Administration in dessen Profil.',
'Edit profile label'			=>	'Erlaubt Moderatoren, Mitgliederprofile zu bearbeiten',
'Edit profile help'				=>	'Wenn die Moderator-Privilegien aktiviert sind, können Mitglieder dieser Gruppe Mitgliederprofile bearbeiten.',
'Rename users label'			=>	'Erlaubt Moderatoren, Mitglieder umzubenennen',
'Rename users help'				=>	'Wenn die Moderator-Privilegien aktiviert sind, können Mitglieder dieser Gruppe Mitglieder umbenennen.',
'Change passwords label'		=>	'Erlaubt Moderatoren, Passwörter zu ändern',
'Change passwords help'			=>	'Wenn die Moderator-Privilegien aktiviert sind, können Mitglieder dieser Gruppe Mitgliederpasswörter ändern.',
'Ban users label'				=>	'Erlaubt Moderatoren, Mitglieder zu sperren',
'Ban users help'				=>	'Wenn die Moderator-Privilegien aktiviert sind, können Mitglieder andere Mitglieder dieser Gruppe sperren.',
'Read board label'				=>	'Board lesen',
'Read board help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, das Board anzusehen. Diese Einstellung wirkt sich auf alle Aspekte des Boards aus und kann nicht durch Foren-spezifische Einstellungen überschrieben werden. Ist die Einstellung "Nein", können sich die Mitglieder dieser Gruppe nur an-/abmelden und registrieren.',
'View user info label'			=>	'Mitglieder-Information ansehen',
'View user info help'			=>	'Erlaubt Mitgliedern, die Mitgliederliste und die Mitgliederprofile anzusehen.',
'Post replies label'			=>	'Antworten posten',
'Post replies help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, auf Themen zu antworten.',
'Post topics label'				=>	'Themen posten',
'Post topics help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, neue Themen zu posten.',
'Edit posts label'				=>	'Antworten bearbeiten',
'Edit posts help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, ihre eigenen Antworten zu bearbeiten.',
'Delete posts label'			=>	'Antworten löschen',
'Delete posts help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, ihre eigenen Antworten zu löschen.',
'Delete topics label'			=>	'Themen löschen',
'Delete topics help'			=>	'Erlaubt den Mitgliedern dieser Gruppe, eigene Themen zu löschen (einschließlich aller Antworten).',
'Set own title label'			=>	'Eigenen Mitgliedstitel festlegen',
'Set own title help'			=>	'Erlaubt den Mitgliedern dieser Gruppe, einen eigenen Mitgliedstitel festzulegen.',
'User search label'				=>	'Suche verwenden',
'User search help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, die Suche zu verwenden.',
'User list search label'		=>	'Mitglieder suchen',
'User list search help'			=>	'Erlaubt den Mitgliedern dieser Gruppe, in den Mitgliederlisten nach anderen Mitgliedern zu suchen.',
'Send e-mails label'			=>	'Emails versenden',
'Send e-mails help'				=>	'Erlaubt den Mitgliedern dieser Gruppe, anderen Mitgliedern Emails zu senden.',
'Post flood label'				=>	'Antwort-Intervall',
'Post flood help'				=>	'Anzahl der Sekunden, die Mitglieder dieser Gruppe zwischen 2 Antworten warten müssen. Mit 0 wird dies deaktiviert.',
'Search flood label'			=>	'Such-Intervall',
'Search flood help'				=>	'Anzahl der Sekunden, die Mitglieder dieser Gruppe zwischen 2 Suchvorgängen warten müssen. Mit 0 wird dies deaktiviert.',
'E-mail flood label'			=>	'Email-Intervall',
'E-mail flood help'				=>	'Anzahl der Sekunden, die Mitglieder dieser Gruppe zwischen dem Versand von Emails warten müssen. Mit 0 wird dies deaktiviert.',
'Report flood label'			=>	'Meldungs-Intervall',
'Report flood help'				=>	'Anzahl der Sekunden, die Mitglieder dieser Gruppe zwischen dem Versand von Meldungen warten müssen. Mit 0 wird dies deaktiviert.',
'Moderator info'				=>	'Bitte beachten: Wenn ein Mitglied dieser Gruppe diese moderieren soll, muss ihm/ihr die Berechtigung zum Moderieren einer oder mehrerer Foren zugeordnet werden. Dies erfolgt in der Mitglieder-Administration in dessen Profil.',

);
