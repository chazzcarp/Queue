<?php
/**
 * This file is part of PMG\Queue
 *
 * Copyright (c) 2013 PMG Worldwide
 *
 * @package     PMGQueue
 * @copyright   2013 PMG Worldwide
 * @license     http://opensource.org/licenses/MIT MIT
 */

namespace PMG\Queue;

/**
 * Consumer take jobs from the task queue and work with them.
 *
 * Jobs MUST be "whitelisted" with the consumer using the `whitelistJob` method.
 *
 * @since   0.1
 * @author  Christopher Davis <chris@pmg.co>
 */
interface ConsumerInterface
{
    /**
     * Whitelist a job for use. Non-whitelisted jobs will simply be discarded.
     *
     * @since   0.1
     * @access  public
     * @param   string $name The job name (the $name argument
     *          from ProducerInterface::addJob)
     * @param   string $job_class A class that implements JobInterface to be
     *          instantiated to run the job.
     * @return  void
     */
    public function whitelistJob();

    /**
     * Run the consumer.
     *
     * Example:
     *      $consumer = new Consumer;
     *      try {
     *          $consumer->run();
     *      } catch (\PMG\Queue\Exception\ConsumerException $e) {
     *          // we had to exit. Try to recover or alert admins or whatever
     *      }
     *
     * @since   0.1
     * @access  public
     * @throws  PMG\Queue\Exception\ConsumerException if something goes wrong
     * @return  void
     */
    public function run();
}
