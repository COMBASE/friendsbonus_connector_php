<?php
/**
 * FriendsBonusTerminalService class file
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */

/**
 * attendEvents class
 */
require_once 'attendEvents.php';
/**
 * attendEventsResponse class
 */
require_once 'attendEventsResponse.php';
/**
 * useFriendsBonusCard class
 */
require_once 'useFriendsBonusCard.php';
/**
 * useFriendsBonusCardResponse class
 */
require_once 'useFriendsBonusCardResponse.php';
/**
 * TerminalData class
 */
require_once 'TerminalData.php';
/**
 * EventUsageResponse class
 */
require_once 'EventUsageResponse.php';
/**
 * UsageResponse class
 */
require_once 'UsageResponse.php';
/**
 * AccountInformation class
 */
require_once 'AccountInformation.php';
/**
 * Address class
 */
require_once 'Address.php';
/**
 * GeoLocation class
 */
require_once 'GeoLocation.php';
/**
 * Order class
 */
require_once 'Order.php';
/**
 * OrderItem class
 */
require_once 'OrderItem.php';
/**
 * ValidationCode class
 */
require_once 'ValidationCode.php';
/**
 * Gender class
 */
require_once 'Gender.php';

/**
 * FriendsBonusTerminalService class
 * 
 *  
 * 
 * @author    {author}
 * @copyright {copyright}
 * @package   {package}
 */
class FriendsBonusTerminalService extends SoapClient {

  public function FriendsBonusTerminalService($wsdl = "http://friendsbonus.com/service/terminalService?wsdl", $options = array()) {
    parent::__construct($wsdl, $options);
  }

  /**
   *  
   *
   * @param attendEvents $parameters
   * @return attendEventsResponse
   */
  public function attendEvents(attendEvents $parameters) {
    return $this->__call('attendEvents', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://www.springframework.org/schema/beans',
            'soapaction' => ''
           )
      );
  }

  /**
   *  
   *
   * @param useFriendsBonusCard $parameters
   * @return useFriendsBonusCardResponse
   */
  public function useFriendsBonusCard(useFriendsBonusCard $parameters) {
    return $this->__call('useFriendsBonusCard', array(
            new SoapParam($parameters, 'parameters')
      ),
      array(
            'uri' => 'http://www.springframework.org/schema/beans',
            'soapaction' => ''
           )
      );
  }

}

?>
