<?php

class Scraper {
	
	/*
	* function to get the htmlcontent of the passed url
	* @param url: page url's for which the html content is required
	* @return pageHtmlContent
	* */
	function getWholePage($url) {
		
		$handle = curl_init($url);
		curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
		$pageHtmlContent = curl_exec($handle);
		curl_close($handle);
		return $pageHtmlContent;

	}

	/*
	* function to get the filtered content from the full/partial page content
	* @param content: content from which filtered content is required
	* @param start_tag: starting html tag of the filtered content
	* @param end_tag: ending html tag of the filtered content
	* */
	function getFilteredContent($content, $start_tag, $end_tag) {
		
		$pos = strpos($content, $start_tag);
        if ($pos === false) {
            return '';
        } else {  
            $s = strpos( $content,$start_tag) + strlen( $start_tag);
            $e = strlen( $content);
            $content= substr($content, $s, $e);
            $s = 0;
            $e = strpos( $content,$end_tag);
            $content= substr($content, $s, $e);
            $content= substr($content, $s, $e);
            return  $content;
        }

	}

}

?>s