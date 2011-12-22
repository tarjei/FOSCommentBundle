<?php

/**
 * This file is part of the FOSCommentBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace FOS\CommentBundle\Model;

use Symfony\Component\HttpFoundation\ParameterBag;

/**
 * Interface to be implemented by comment thread managers. This adds an additional level
 * of abstraction between your application, and the actual repository.
 *
 * All changes to comment threads should happen through this interface.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
interface ThreadManagerInterface
{
    /**
     * @param string $id
     * @return ThreadInterface
     */
    function findThreadById($id);

    /**
     * Finds one comment thread by the given criteria
     *
     * @param array $criteria
     * @return ThreadInterface
     */
    function findThreadBy(array $criteria);

    /**
     * Finds all threads.
     *
     * @return array of ThreadInterface
     */
    function findAllThreads();

    /**
     * Creates an empty comment thread instance
     *
     * @param bool $id
     * @return Thread
     */
    function createThread($id = null);

    /**
     * Creates a thread from the request parameters.
     *
     * @param string $id The id for the thread.
     * @param ParameterBag $query The query parameters.
     *
     * @return ThreadInterface
     */
    function createThreadFromQuery($id, ParameterBag $query);

    /**
     * Saves a thread
     *
     * @param ThreadInterface $thread
     */
    function saveThread(ThreadInterface $thread);

    /**
     * Returns the comment thread fully qualified class name
     *
     * @return string
     */
    function getClass();
}
