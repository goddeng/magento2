<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017-11-13
 * Time: 17:33
 * Mail: jason@boxintheship.com
 */

namespace Jason\HelloWorld\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $resultPageFactory;

    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }
}