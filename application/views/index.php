<?php
$x = 0;
foreach ($listings as $listing) :
echo '<div data-role="collapsible" data-collapsed="true" data-theme="d">';
if ($listing->logo != "") { echo '<img src="./logos/'.$listing->logo .'" />'; } else { echo '<img src="./logos/logos.gif" />'; }
if ($listing['biz_name'] != "") echo '<h1>'.$listing['biz_name'].'</h1>';
echo '<p>';
if ($listing['first_name'] != "") echo '<strong>Member:</strong> '.$listing['last_name'].', '.$listing['first_name'].'<br>';
if ($listing['title'] != "") echo '<strong><em>'.$listing['title'].'</em></strong><br>';
if ($listing['addr1'] != "") echo '<em>Address: </em>'.$listing['addr1'].'<br>';
if ($listing['addr2'] != "") echo $listing['addr2'].'<br>';
echo $listing['city'].', '.$listing['state'].'  '.$listing['zip'].'<br>';
if ($listing['phone1'] != "") {
	//strips the first 10 numbers out of the phone number field to use as a link value for phones ex. <a href="tel:9795555555">(979) 555-5555 Ext. 2100</a>
	echo '<a href="tel:';
	echo $linkPhone = substr(preg_replace('/[^0-9]/s', '', $listing['phone1']), 0,10);
	echo '"><em>Phone:</em> ';
	echo $listing['phone1'];
	echo '</a><br>';
}
if ($listing['website'] != "") echo '<a href="http://'.$listing['website'].'" rel="external">Website</a>';
echo '</p></div>';

endforeach;