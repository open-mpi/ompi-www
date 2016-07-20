<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER["REQUEST_URI"])) {
    include("../../include/index-header.inc");
} else {
    include("include/index-header.inc");
}
?>
<div class="center">
<?
echo '
<hr />List of the ' . str_replace(" Archives", "", $title) .' mboxes: 
<hr />';

$result = array();
$cmd = "ls | grep mbox-";
exec( $cmd, &$result);
echo '<table>';
foreach ( $result as $v ){
    print "<tr><td><a href='$v'>$v</a></td></tr>\n";
}
echo '</table>';

?>
</div>
<? 
if (preg_match("/\/[12][0-9][0-9][0-9]\/[01][0-9]\//", $_SERVER{'REQUEST_URI'})) {
    include("../../include/index-footer.inc");
} else {
    include("include/index-footer.inc");
}
?>
