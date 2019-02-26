<?php

class Tree {
	var $data;
	var $children;

	function __construct() {
		$children = Array();
	}

	function Tree($data) {
		$this->$data = $data;
	}
}

class BTree {
	var $left;
	var $right;
	var $data;

	function BTree($data, $left=NULL, $right=NULL) {
		$this->$data = $data;
		$this->$left = $left;
		$this->$right = $right;
	}
}

