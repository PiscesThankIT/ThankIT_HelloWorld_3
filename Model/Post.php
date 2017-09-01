<?php
namespace ThankIT\HelloWorld\Model;

/**
 * @method Post setName($name)
 * @method Post setUrlKey($urlKey)
 * @method Post setPostContent($postContent)
 * @method Post setTags($tags)
 * @method Post setStatus($status)
 * @method Post setFeaturedImage($featuredImage)
 * @method Post setSampleCountrySelection($sampleCountrySelection)
 * @method Post setSampleUploadFile($sampleUploadFile)
 * @method Post setSampleMultiselect($sampleMultiselect)
 * @method mixed getName()
 * @method mixed getUrlKey()
 * @method mixed getPostContent()
 * @method mixed getTags()
 * @method mixed getStatus()
 * @method mixed getFeaturedImage()
 * @method mixed getSampleCountrySelection()
 * @method mixed getSampleUploadFile()
 * @method mixed getSampleMultiselect()
 * @method Post setCreatedAt(\string $createdAt)
 * @method string getCreatedAt()
 * @method Post setUpdatedAt(\string $updatedAt)
 * @method string getUpdatedAt()
 */
class Post extends \Magento\Framework\Model\AbstractModel
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('ThankIT\HelloWorld\Model\ResourceModel\Post');
    }
}
