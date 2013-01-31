<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;

    class ExchangeRates
    {
        private $adapter;
        private $parser;
        private $data;

        /**
         * @param AdapterInterface $adapter
         * @param ParserInterface $parser
         */
        public function __construct(AdapterInterface $adapter, ParserInterface $parser)
        {
            $this->adapter = $adapter;
            $this->parser  = $parser;
            $this->data    = null;
        }

        /**
         * @return null
         */
        public function getRates()
        {
            $this->loadData();

            return $this->data;
        }

        /**
         * @param $currency
         * @return mixed
         * @throws \InvalidArgumentException
         */
        public function getRate($currency)
        {
            $this->loadData();

            if(!isset($this->data[$currency]))
            {
                throw new \InvalidArgumentException(sprintf('No data for currency %s', $currency));
            }

            return $this->data[$currency];
        }

        private function loadData()
        {
            if(null === $this->data)
            {
                $xml = $this->adapter->getRawData();
                $this->data = $this->parser->parse($xml);
            }
        }

    }