<?php

namespace Movilizame\Queue\Connectors;

use Movilizame\Queue\HttpQueue;
use Illuminate\Queue\Connectors\ConnectorInterface;

class HttpConnector implements ConnectorInterface
{

    /**
     * Establish a queue connection.
     *
     * @param array $config
     *
     * @return \Illuminate\Contracts\Queue\Queue
     */
    public function connect(array $config)
    {
        return new HttpQueue(
			$config['host'],
		);
    }
}
