<?php

namespace MediaWiki\Skin\Bouquet;

class BouquetHooks
{
    public static function onRegistration() {
        Compat::init();
    }
}
