<?php

/*
    LambdaTest selenium automation sample example
    Configuration
    ----------
    username: Username can be found at automation dashboard
    accessToken:  AccessToken can be generated from automation dashboard or profile section

    Result
    -------
    Execute PHP Automation Tests on LambdaTest Distributed Selenium Grid 
*/

require 'vendor/autoload.php';

class LambdaTest{

  /*
      Setup remote driver
      Params
      ----------
      platform : Supported platform - (Windows 10, Windows 8.1, Windows 8, Windows 7, macOS High Sierra, macOS Sierra, OS X El Capitan, OS X Yosemite, OS X Mavericks)
      browserName : Supported platform - (chrome, firefox, Internet Explorer, MicrosoftEdge, Safari)
      version :  Supported list of version can be found at https://www.lambdatest.com/capabilities-generator/
  */
  protected static $driver;

  public function searchTextOnGoogle() {
    # username: Username can be found at automation dashboard		
    $LT_USERNAME = "<username>";
    
    # accessKey:  AccessKey can be generated from automation dashboard or profile section
    $LT_APPKEY = "<access key>";

    $LT_BROWSER = "chrome";
    $LT_BROWSER_VERSION ="63.0";
    $LT_PLATFORM = "windows 10";
    
    # URL: https://{username}:{accessToken}@hub.lambdatest.com/wd/hub
    $url = "https://". $LT_USERNAME .":" . $LT_APPKEY ."@hub.lambdatest.com/wd/hub";		
    
    # setting desired capabilities for the test
    
    try{
      $desired_capabilities = new DesiredCapabilities();
      $desired_capabilities->setCapability('browserName',$LT_BROWSER);
      $desired_capabilities->setCapability('version', $LT_BROWSER_VERSION);
      $desired_capabilities->setCapability('platform', $LT_PLATFORM);
      $desired_capabilities->setCapability('name', "Php");
      $desired_capabilities->setCapability('build', "Php Build");
      $desired_capabilities->setCapability('network', false);
      $desired_capabilities->setCapability('visual', false);
      $desired_capabilities->setCapability('video ', true);
      $desired_capabilities->setCapability('console', false);
      
      /*
          Setup remote driver
          Params
          ----------
          Execute test:  navigate google.com search LambdaTest
          Result
          -------
          print title
      */
      self::$driver = RemoteWebDriver::create($url, $desired_capabilities); 
          
      self::$driver->get("https://www.google.com/ncr");
  
      $element = self::$driver->findElement(WebDriverBy::name("q"));
      if($element) {
        $element->sendKeys("LambdaTest");
        $element->submit();
      }
      
      print self::$driver->getTitle();
    }catch(Exception $e){
      echo  "Test failed with reason ".$e->getMessage();
    }finally{
      // finally quit the driver
      self::$driver->quit();
    }
  }		
}

$lambdaTest = new LambdaTest();
$lambdaTest->searchTextOnGoogle();  

?>

