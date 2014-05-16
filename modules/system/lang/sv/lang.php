<?php

return [
    'app' => [
        'name' => 'October CMS',
        'motto' => 'Getting back to basics',
    ],
    'directory' => [
        'create_fail' => "Kunde inte skapa mapp: :name",
    ],
    'file' => [
        'create_fail' => "Kunde inte skapa fil: :name",
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
    ],
    'plugin' => [
        'unnamed' => 'Namnlöst plugin',
        'name' => [
            'label' => 'Plugin-namn',
            'help' => 'Namnge pluginet efter dess unika kod. Exempelvis RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Ägare',
        'id' => [
            'label' => 'Projekt-ID',
            'help' => 'Hur du hittar ditt Projekt-ID',
            'missing' => 'Var god välj ett Projekt-ID',
        ],
        'unbind_success' => 'Projektet har blivit avlänkat',
    ],
    'settings' => [
        'menu_label' => 'Inställningar',
        'missing_model' => 'Inställningssidan saknar en modell-definition',
        'update_success' => 'Inställningar för :name har uppdaterats',
    ],
    'install' => [
        'project_label' => 'Länka till Projekt',
        'plugin_label' => 'Installera Plugin',
        'missing_plugin_name' => 'Välj ett plugin-namn att installera',
        'install_completing' => 'Installationen är klar',
        'install_success' => 'Pluginet har installerats',
    ],
    'updates' => [
        'name' => 'Uppdatera mjukvara',
        'menu_label' => 'Uppdateringar',
        'check_label' => 'Kontrollera uppdateringar',
        'retry_label' => 'Försök igen',
        'core_build' => 'Nuvarande build',
        'core_build_old' => 'Nuvarande build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Senaste build är tillgänglig.',
        'core_downloading' => 'Laddar ner applikationsfiler',
        'core_extracting' => 'Packar upp applikationsfiler',
        'plugin_downloading' => 'Laddar ner plugin: :name',
        'plugin_extracting' => 'Packar upp plugin: :name',
        'plugin_version_none' => 'Nytt plugin',
        'plugin_version_old' => 'Nuvarande v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Updatera mjukvara',
        'update_completing' => 'Slutför uppdatering',
        'update_loading' => 'Laddar tillgängliga uppdateringar...',
        'update_success' => 'Uppdateringen är slutförd.',
        'update_failed_label' => 'Updateringen misslyckades',
        'force_label' => 'Tvinga uppdatering',
        'found' => [
            'label' => 'Hittade nya uppdateringar!',
            'help' => 'Klicka på Uppdatera mjukvara för att påbörja uppdateringen.',
        ],
        'none' => [
            'label' => 'Inga uppdateringar',
            'help' => 'Inga nya uppdateringar hittades.',
        ],
    ],
    'server' => [
        'connect_error' => 'Ett fel uppstod vid anslutning till servern.',
        'response_not_found' => 'Uppdateringsserver kunde ej hittas.',
        'response_invalid' => 'Felaktigt svar från servern.',
        'response_empty' => 'Tomt svar från servern.',
        'file_error' => 'Servern kunde inte leverera paketet.',
        'file_corrupt' => 'Filen från servern är korrupt.',
    ],
    'behavior' => [
        'missing_property' => 'Klassen :class måste definera egenskapen $:property som används av :behavior -egenskapen',
    ],
    'config' => [
        'not_found' => 'Kunde inte hitta konfigurationsfilen :file definerad för :location',
        'required' => 'Konfigurationen som används i :location måste sända med ett värde :property',
    ],
    'zip' => [
        'extract_failed' => "Kunde inte packa upp core-fil ':file'.",
    ],
];