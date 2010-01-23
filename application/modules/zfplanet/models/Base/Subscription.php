<?php

/**
 * Zfplanet_Model_Base_Subscription
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $id
 * @property string $topic_url
 * @property string $hub_url
 * @property timestamp $created_time
 * @property integer $lease_seconds
 * @property string $verify_token
 * @property string $secret
 * @property timestamp $expiration_time
 * @property string $subscription_state
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class Zfplanet_Model_Base_Subscription extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('subscription');
        $this->hasColumn('id', 'string', 32, array(
             'type' => 'string',
             'primary' => true,
             'length' => '32',
             ));
        $this->hasColumn('topic_url', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('hub_url', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('created_time', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('lease_seconds', 'integer', 6, array(
             'type' => 'integer',
             'length' => '6',
             ));
        $this->hasColumn('verify_token', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('secret', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('expiration_time', 'timestamp', null, array(
             'type' => 'timestamp',
             ));
        $this->hasColumn('subscription_state', 'string', 12, array(
             'type' => 'string',
             'length' => '12',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}