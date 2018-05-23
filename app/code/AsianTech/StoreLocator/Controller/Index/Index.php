<?php 
namespace AsianTech\StoreLocator\Controller\Index;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action{
	protected $_resultPageFactory;

	public function __construct(Context $context, PageFactory $resultPageFactory){
		parent::__construct($context);
		$this->_resultPageFactory = $resultPageFactory;
	}

	public function execute(){
		return $this->_resultPageFactory->create();
		// echo "string";
	}
}