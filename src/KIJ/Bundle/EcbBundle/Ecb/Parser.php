<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;

    class Parser implements ParserInterface
    {

        /**
         * @param $rawData
         * @return array|mixed
         */
        public function parse ($rawData)
        {
            $xml = new \SimpleXMLElement($rawData);
            $rates = array();

            foreach($xml->Cube->Cube->Cube as $node) {
                $rates[(string) $node['currency']] = (float) $node['rate'];
            }

            return $rates;
        }

    }