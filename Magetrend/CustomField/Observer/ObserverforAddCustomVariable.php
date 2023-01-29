<?php
namespace Magetrend\CustomField\Observer;
use Magento\Customer\Api\CustomerRepositoryInterface;
use Magento\Framework\Event\ObserverInterface;
class ObserverforAddCustomVariable implements ObserverInterface
{
    // protected $customerRepository;
    // public function __construct(CustomerRepositoryInterface $customerRepository)
    // {
    //     $this->customerRepository = $customerRepository;
    // }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /** @var \Magento\Framework\App\Action\Action $controller */
        $transport = $observer->getEvent()->getTransport();
        if ($transport->getOrder() != null) 
        {
            if($transport->getOrder()->getJobTitle() != ''){
                $transport['job_title'] = $transport->getOrder()->getJobTitle();
            }
        }
    }
}
