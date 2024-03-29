<?php
/*
Copyright 2011,2012 Ricardo Ramirez, The ClickPro.com LLC

This file is part of Bledo Framework.

Bledo Framework is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Bledo Framework is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Bledo Framework.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace bledo\mvc\response;

class Json extends AbstractResponse
{
	public $json;
	public function __construct($arr=array())
	{
		$this->json = $arr;
	}

	public function respond(\bledo\mvc\Request $request)
	{
		$this->setHeader('Content-Type: application/json');
		$this->_sendHeaders();
		echo json_encode($this->json);
	}
}
