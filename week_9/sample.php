<?php

class Sample
{
	
	private $output = "Hello World!";
	
	public function Sample()
	{
		
	}
	
	public function setOutput($str)
	{
		$this->output = $str;
	}
	
	public function printIt()
	{
		print $this->output."<br />";
	}
}