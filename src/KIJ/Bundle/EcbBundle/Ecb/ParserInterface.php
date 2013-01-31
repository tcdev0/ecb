<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;

    interface ParserInterface
    {
        /**
         * @param $rawData
         * @return mixed
         */
        function parse($rawData);
    }