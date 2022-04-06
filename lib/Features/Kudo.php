<?php
/**
 * Created by PhpStorm.
 * User: vincenzoruffa
 * Date: 09/04/2018
 * Time: 14:57
 */

namespace Features;

use Features;

class Kudo extends BaseFeature {

    const FEATURE_CODE = "kudo";

    public static $dependencies = [
            Features::TRANSLATION_VERSIONS,
            Features::REVIEW_EXTENDED
    ];

    /**
     * @see \Engines_MyMemory::get()
     *
     * @param $parameters
     *
     * @return mixed
     */
    public function filterMyMemoryGetParameters( $parameters ){

        $parameters[ 'cid' ] = self::FEATURE_CODE;

        return $parameters;

    }

}
