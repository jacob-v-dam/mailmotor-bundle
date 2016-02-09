<?php

namespace MailMotor\Bundle\MailMotorBundle\Component;

/**
 * Gateway
 *
 * @author Jeroen Desloovere <info@jeroendesloovere.be>
 */
interface Gateway
{
    /**
     * Get
     *
     * @param string $email
     * @param string $listId
     * @return mixed Returns the item if in database, otherwise false
     */
    public function get($email, $listId);

    /**
     * Has status
     *
     * @param string $email
     * @param string $listId
     * @param string $status
     * @return mixed Returns the item if in database, otherwise false
     */
    public function hasStatus($email, $listId, $status);

    /**
     * Subscribe
     *
     * @param string $email
     * @param string $listId
     * @param array $mergeFields
     * @param string $language
     * @return boolean
     */
    public function subscribe($email, $listId, $mergeFields, $language);

    /**
     * Unsubscribe
     *
     * @param string $email
     * @param string $listId
     * @return boolean
     */
    public function unsubscribe($email, $listId);
}