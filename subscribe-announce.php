<?php
$topdir = ".";
$project = $_POST['project'];
$list_name = $_POST['list_name'];
$title = "$project: Signing up for announcement notices";
include_once("$topdir/includes/header.inc");

# Constants

$url = "https://www.open-mpi.org/mailman/subscribe.cgi/$list_name";
$method = "POST";
$data = "email=" . $_POST['email'] . "&email-button=Subscribe";

# Check to ensure that we received an e-mail address.

if ($_POST['email'] == "") {
    print("<p> You must specify an e-mail address in order to receive
announcements of new $project releases.\n\n");
    include_once("$topdir/includes/subscribe-announce.inc");
    include("$topdir/includes/footer.inc"); 
    exit(0);    
}

# Make a random password
$pw = "";
for ($i = 0; $i < 8; ++$i) {
    $pw .= chr(rand(ord('a'), ord('z')));
}

# Use curl to proxy a request to the back-end mailman CGI web page.  
# PHP has everything!
$ch = curl_init();

# Set URL for the post form
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

# Setting CURLOPT_RETURNTRANSFER variable to 1 will force curl not to
# print out the results of its query.  Instead, it will return the
# results as a string return value from curl_exec() instead of the
# usual true/false.
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);

# Execute the request and get the output
$store = curl_exec ($ch);

# Check to see if we got success
if (curl_errno($ch)) {
?>
<p>Unfortunately, something went wrong with your request; please <a href=\"$url\">visit this URL</a> to subscribe for Open MPI announcements.
<?php
} else {
?>

<p>You will shortly receive an e-mail asking you to confirm the fact
that you want to receive announcements about <?php print($project); ?> 
(i.e., confirm that you want to be on the "<?php print($list_name);
?>" mailing list on <code>open-mpi.org</code>).  Once you click on the
link included in the mail (or reply to the mail), you'll receive an
announcement e-mail whenever a new version of <?php print($project);
?> is available.

<P>Thanks for your interest in <?php print($project); ?>!
<?php
    print("<p>Return to $project <a href=\"" . $_POST['prev_url'] . "\">" .
          $_POST['prev_describe'] . "</A>.\n\n");
}

# All done
curl_close ($ch);

include("$topdir/includes/footer.inc"); 
