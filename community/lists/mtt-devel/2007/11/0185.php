<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 15:34:05 2007" -->
<!-- isoreceived="20071101193405" -->
<!-- sent="Thu, 1 Nov 2007 15:34:00 -0400" -->
<!-- isosent="20071101193400" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)" -->
<!-- id="20071101193359.GA10950_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200711011930.lA1JUQbM022981_at_sourcehaven.osl.iu.edu" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 15:34:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Reply:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>Before this gets committed to the live submit.php, can you
<br>
look at this? It should only effect the &quot;environment&quot; field.
<br>
<p>Thanks,
<br>
Ethan
<br>
<p><p>On Thu, Nov/01/2007 03:30:26PM, emallove_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: emallove
</span><br>
<span class="quotelev1">&gt; Date: 2007-11-01 15:30:26 EDT (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev1">&gt; New Revision: 1094
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1094">https://svn.open-mpi.org/trac/mtt/changeset/1094</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt;  * &quot;environment&quot; field was not getting inserted due to
</span><br>
<span class="quotelev1">&gt;    a faulty `isset()` check
</span><br>
<span class="quotelev1">&gt;  * Added a second MTT DB admin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/server/php/submit/index.php |    28 +++++++++++++++++++---------            
</span><br>
<span class="quotelev1">&gt;    1 files changed, 19 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/server/php/submit/index.php
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/server/php/submit/index.php	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/server/php/submit/index.php	2007-11-01 15:30:26 EDT (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev1">&gt; @@ -235,6 +235,9 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev1">&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          ########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: performance
</span><br>
<span class="quotelev1">&gt;          # Currently only support latency/bandwidth
</span><br>
<span class="quotelev1">&gt; @@ -363,7 +366,7 @@
</span><br>
<span class="quotelev1">&gt;          #########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev1">&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev1">&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev1">&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev1">&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              $stmt_values = array(get_scalar($param_set['environment'], $i) );
</span><br>
<span class="quotelev1">&gt; @@ -567,6 +570,9 @@
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev1">&gt; +        
</span><br>
<span class="quotelev1">&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev1">&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;          ########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: test_build_compiler -&gt; compiler
</span><br>
<span class="quotelev1">&gt; @@ -629,7 +635,8 @@
</span><br>
<span class="quotelev1">&gt;          #########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev1">&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev1">&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev1">&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              $stmt_values = array(get_scalar($param_set['environment'], $i) );
</span><br>
<span class="quotelev1">&gt; @@ -1084,6 +1091,9 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev1">&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;          ########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: compute_cluster
</span><br>
<span class="quotelev1">&gt;          $stmt_fields = array(&quot;platform_name&quot;,
</span><br>
<span class="quotelev1">&gt; @@ -1185,7 +1195,7 @@
</span><br>
<span class="quotelev1">&gt;          #########
</span><br>
<span class="quotelev1">&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev1">&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev1">&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev1">&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev1">&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;              $stmt_values = array(get_scalar($param_set['environment'], $i) );
</span><br>
<span class="quotelev1">&gt; @@ -1767,8 +1777,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      $php_auth_user = $_SERVER['PHP_AUTH_USER'];
</span><br>
<span class="quotelev1">&gt;      $user          = $_POST['email'];
</span><br>
<span class="quotelev1">&gt; -#JJH    $admin         = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev1">&gt; -    $admin         = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev1">&gt; +    $admin1        = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev1">&gt; +    $admin2        = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev1">&gt;      $date          = date('r');
</span><br>
<span class="quotelev1">&gt;      $phpversion    = phpversion();
</span><br>
<span class="quotelev1">&gt;      $boundary      = md5(time());
</span><br>
<span class="quotelev1">&gt; @@ -1778,8 +1788,8 @@
</span><br>
<span class="quotelev1">&gt;      $attachment = chunk_split(base64_encode(file_get_contents($filename)));
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      $headers = &lt;&lt;&lt;END
</span><br>
<span class="quotelev1">&gt; -From: $admin
</span><br>
<span class="quotelev1">&gt; -Reply-To: $admin
</span><br>
<span class="quotelev1">&gt; +From: $admin1
</span><br>
<span class="quotelev1">&gt; +Reply-To: $admin1
</span><br>
<span class="quotelev1">&gt;  Date: $date
</span><br>
<span class="quotelev1">&gt;  X-Mailer: PHP v$phpversion
</span><br>
<span class="quotelev1">&gt;  MIME-Version: 1.0
</span><br>
<span class="quotelev1">&gt; @@ -1808,8 +1818,8 @@
</span><br>
<span class="quotelev1">&gt;      if (preg_match(&quot;/\w+@\w+/&quot;, $user, $m))
</span><br>
<span class="quotelev1">&gt;          mail($user, &quot;MTT server error&quot;, $message, $headers);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -    # Email the MTT database administrator
</span><br>
<span class="quotelev1">&gt; -    mail($admin, &quot;MTT server error (user: $php_auth_user)&quot;, $message, $headers);
</span><br>
<span class="quotelev1">&gt; +    # Email the MTT database administrator(s)
</span><br>
<span class="quotelev1">&gt; +    mail(&quot;$admin1, $admin2&quot;, &quot;MTT server error (user: $php_auth_user)&quot;, $message, $headers);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      # Whack the temp file
</span><br>
<span class="quotelev1">&gt;      unlink($filename);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0186.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: sun)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2007/10/0184.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: ibm)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Reply:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
