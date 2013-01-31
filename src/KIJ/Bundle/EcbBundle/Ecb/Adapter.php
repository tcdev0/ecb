<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;
    use Guzzle\Http\ClientInterface;

    class Adapter implements AdapterInterface
    {
        private $httpAdapter;
        private $endpointUrl;

        /**
         * @param \Guzzle\Http\ClientInterface $httpAdapter
         * @param $endpointUrl
         */
        public function __construct(ClientInterface $httpAdapter, $endpointUrl)
        {
            $this->httpAdapter = $httpAdapter;
            $this->endpointUrl = $endpointUrl;
        }

        /**
         * @return \Guzzle\Http\EntityBodyInterface|string
         */
        public function getRawData()
        {
            $request = $this->httpAdapter->get($this->endpointUrl);
            $response = $request->send();

            return $response->getBody(true);
        }

    }