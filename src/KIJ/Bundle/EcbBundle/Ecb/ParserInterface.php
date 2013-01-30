<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;

    interface ParserInterface
    {
        function parse($rawData);
    }