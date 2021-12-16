<?php

class req {
	private $get="GET";
	private $post="POST";
	private static $map;

	public static function get($type) {
		if(empty($type)) {
			trigger_error(strtoupper("no specific type"));
			exit;
		}
		switch($type) {
			case "p":
			self::$map=new fm($_POST);
			break;
			case "g":
			self::$map=new fm($_GET);
			break;
			case "f":
			self::$map=new fm($_FILES);
			break;
							}
						return self::$map;
					}

					static function remove($type) {
						switch($type) {
							case "p":
								unset($_POST);
								break;
							case "g":
								unset($_GET);
								break;
							}
					}
				}
				?>