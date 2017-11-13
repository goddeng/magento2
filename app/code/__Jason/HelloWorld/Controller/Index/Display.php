<?php
/**
 * Created by PhpStorm.
 * User: Jason
 * Date: 2017-11-13
 * Time: 14:35
 * Mail: jason@boxintheship.com
 */

namespace Jason\HelloWorld\Controller\Index;


class Display extends \Magento\Framework\App\Action\Action
{
    public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
    public function execute()
    {
        echo 'Hello World';
        exit;
    }
}