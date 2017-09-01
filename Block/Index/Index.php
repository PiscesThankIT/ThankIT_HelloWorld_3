<?php
namespace ThankIT\HelloWorld\Block\Index;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    protected $_postFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \ThankIT\HelloWorld\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {

        /* case 1
         * @return string 'ThankIT\HelloWorld\Model\PostFactory' (length=36)
         */
        // var_dump(
        //     get_class($this->_postFactory)
        // );
        // exit;

        /* case 2
         * 插入数据
         */
        // $post = $this->_postFactory->create();
        // $post->setData('name', 'fist post name')
        //     ->setUrlKey('fist')
        //     ->setPostContent('fist post content')
        //     ->save();
        // var_dump('Done');
        // exit;

        /* case 3
         * load ID 为 1 的 model
         */
        // $post = $this->_postFactory->create();
        // $post = $post->load(1);
        // var_dump($post->getData());
        // var_dump($post->getName());
        // var_dump($post->getData('url_key'));
        // var_dump($post->getNoExist()); //return null
        // exit;

        /* case 4
         * use collection
         */
        // $post = $this->_postFactory->create();
        // $post->setData('name', 'name')
        //     ->setUrlKey('url')
        //     ->setPostContent('post content')
        //     ->save();
        // $collection = $post->getCollection();
        // foreach ($collection as $item) {
        //     var_dump($item->getData());
        // }
        // exit;

        /* case 5
         * update
         */
        // $post = $this->_postFactory->create();
        // $post = $post->load(1);
        // var_dump($post->getData());
        // $post->setName('now update')->save();
        // var_dump($post->getData());
        // exit;

        /* case 6
         * delete
         */
        // $post = $this->_postFactory->create();
        // $collection = $post->getCollection();
        // foreach ($collection as $item) {
        //     var_dump($item->getData());
        // }
        // $post = $post->load(2)->delete();
        // var_dump('after delete');
        // foreach ($collection as $item) {
        //     var_dump($item->getData());
        // }
        // exit();

        /* case 7
         * collection count
         */
        // $post = $this->_postFactory->create();
        // $collection = $post->getCollection();
        // var_dump($collection->count());
        // var_dump($collection->getFirstItem()->getData());
        // exit;

        /* case 8
         * collection filter
         */
        // $post = $this->_postFactory->create();
        // $collection = $post->getCollection();
        // $post = $collection->addFieldToFilter('url_key', 'fist')->getFirstItem();
        // var_dump($post->getData());
        // exit;
    }
}
