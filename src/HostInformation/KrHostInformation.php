<?php namespace GameScan\WoW\HostInformation;

use GameScan\WoW\HostInformations;

class KrHostInformation extends HostInformations
{

    const HOST = "https://kr.api.battle.net/";
    protected $availableLocales = [
        'ko_KR',
    ];
}
