<?php
namespace ctl\test\greg;

class LogIt
{
	public function logSomething($text)
	{
		echo $text . " greg " . get_called_class() ;
		
		$log = new \Monolog\Logger('name2');
		$log->pushHandler(new \Monolog\Handler\StreamHandler('../output/app.log', \Monolog\Logger::WARNING));
		$log->addWarning('Foo - $text');
		
	}
}

?>