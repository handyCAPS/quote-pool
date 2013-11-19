<?php

function insert_new_quote() {
	global $wpdb;
	$author = $_REQUEST['author'];
	$quote = $_REQUEST['quote'];
	$tablename = $wpdb->prefix . 'quote_pool';

	$wpdb->insert($tablename, array('author' => $author, 'quote' => $quote));
}

if (insert_new_quote()) {
	header('Location: ' . plugins_url(dirname(__FILE__) ));
} else {
	header('Location: http://localhost/wordpress_nl');
}