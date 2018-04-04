<?php
namespace Movilizame\Queue;

use Illuminate\Queue\Queue; 

class HttpQueue extends Queue
{
    /**
     * @var string
     */

    protected $host;

    /**
     * @param  string  $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }

    /**
     * Push a new job onto the queue.
     *
     * @param string      $job
     * @param mixed       $data
     * @param string|null $queue
     *
     * @return int
     */
    public function push($job, $data = '', $queue = null)
    {
        $payload = $this->createPayload($job, $data);
        $client = new GuzzleHttp\Client();
        $res = $client->post($this->host, ['queue' => ($queue ? $queue : 'default'), 'data' => $payload] );
    }
    
    /**
     * Push a raw payload onto the queue.
     *
     * @param  string  $payload
     * @param  string  $queue
     * @param  array   $options
     * @return mixed
     */
    public function pushRaw($payload, $queue = null, array $options = array())
    {

    }
    
    /**
     * Push a new job onto the queue after a delay.
     *
     * @param \DateTime|int $delay
     * @param string        $job
     * @param mixed         $data
     * @param string|null   $queue
     *
     * @return int
     */
    public function later($delay, $job, $data = '', $queue = null)
    {

    }
 
}
