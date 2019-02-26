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

// not to be confused with a B-Tree (>= 2 children)
class bTree {
	var $left;
	var $right;
	var $data;

	function BTree($data, $left=NULL, $right=NULL) {
		$this->$data = $data;
		$this->$left = $left;
		$this->$right = $right;
	}
}

