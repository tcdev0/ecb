<?php

    namespace KIJ\Bundle\EcbBundle\Ecb;
    use Guzzle\Http\ClientInterface;

    class MockAdapter implements AdapterInterface
    {
        /**
         * @{inheritdoc}
         */
        public function getRawData()
        {
            return <<< EOF
<?xml version="1.0" encoding="UTF-8"?>
<gesmes:Envelope xmlns:gesmes="http://www.gesmes.org/xml/2002-08-01" xmlns="http://www.ecb.int/vocabulary/2002-08-01/eurofxref">
    <gesmes:subject>Reference rates</gesmes:subject>
    <gesmes:Sender>
        <gesmes:name>European Central Bank</gesmes:name>
    </gesmes:Sender>
    <Cube>
        <Cube time='2013-02-01'>
			<Cube currency='USD' rate='1.3644'/>
			<Cube currency='JPY' rate='125.78'/>
			<Cube currency='BGN' rate='1.9558'/>
			<Cube currency='CZK' rate='25.638'/>
			<Cube currency='DKK' rate='7.4602'/>
			<Cube currency='GBP' rate='0.86170'/>
			<Cube currency='HUF' rate='292.37'/>
			<Cube currency='LTL' rate='3.4528'/>
			<Cube currency='LVL' rate='0.7003'/>
			<Cube currency='PLN' rate='4.1792'/>
			<Cube currency='RON' rate='4.3750'/>
			<Cube currency='SEK' rate='8.6022'/>
			<Cube currency='CHF' rate='1.2351'/>
			<Cube currency='NOK' rate='7.4275'/>
			<Cube currency='HRK' rate='7.5915'/>
			<Cube currency='RUB' rate='40.9094'/>
			<Cube currency='TRY' rate='2.3936'/>
			<Cube currency='AUD' rate='1.3132'/>
			<Cube currency='BRL' rate='2.7089'/>
			<Cube currency='CAD' rate='1.3637'/>
			<Cube currency='CNY' rate='8.4965'/>
			<Cube currency='HKD' rate='10.5847'/>
			<Cube currency='IDR' rate='13251.54'/>
			<Cube currency='ILS' rate='5.0492'/>
			<Cube currency='INR' rate='72.5830'/>
			<Cube currency='KRW' rate='1493.94'/>
			<Cube currency='MXN' rate='17.3704'/>
			<Cube currency='MYR' rate='4.2452'/>
			<Cube currency='NZD' rate='1.6191'/>
			<Cube currency='PHP' rate='55.502'/>
			<Cube currency='SGD' rate='1.6934'/>
			<Cube currency='THB' rate='40.659'/>
			<Cube currency='ZAR' rate='12.2120'/>
		</Cube>
    </Cube>
</gesmes:Envelope>
EOF;
        }
    }


