<?php

/**
 * Zfplanet_Model_Base_FeedMeta
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $feedId
 * @property string $title
 * @property string $description
 * @property string $link
 * @property string $feedLink
 * @property Zfplanet_Model_Feed $Feed
 * 
 * @package    ##PACKAGE##
 * @subpackage ##SUBPACKAGE##
 * @author     ##NAME## <##EMAIL##>
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class Zfplanet_Model_Base_FeedMeta extends Doctrine_Record
{
    public function setTableDefinition()
    {
        $this->setTableName('feed_meta');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('feedId', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('title', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('description', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('link', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('feedLink', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Zfplanet_Model_Feed as Feed', array(
             'local' => 'feedId',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             'created' => 
             array(
              'name' => 'dateCreated',
             ),
             'updated' => 
             array(
              'name' => 'dateModified',
             ),
             ));
        $this->actAs($timestampable0);
    }
}