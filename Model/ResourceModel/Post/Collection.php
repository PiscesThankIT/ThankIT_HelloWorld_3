<?php
namespace ThankIT\HelloWorld\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * resource collection initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ThankIT\HelloWorld\Model\Post', 'ThankIT\HelloWorld\Model\ResourceModel\Post');
    }
}
