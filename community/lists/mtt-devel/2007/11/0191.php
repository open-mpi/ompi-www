<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 11:00:22 2007" -->
<!-- isoreceived="20071107160022" -->
<!-- sent="Wed, 7 Nov 2007 11:00:17 -0500" -->
<!-- isosent="20071107160017" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)" -->
<!-- id="E54822A2-8F5A-490C-B10C-28346E9B9B12_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071101193359.GA10950_at_sun.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-07 11:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Ethan Mallove: "[MTT devel] prepend_path propogating through phases"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Reply:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry it has taken me a while to get to this.
<br>
<p>I think the patch is generally fine. I don't think it will hurt  
<br>
anything. I haven't tested it though, but I trust if you have then it  
<br>
should be fine. Let me know when it happens and I'll try to watch a  
<br>
bit more closely the nightly submits.
<br>
<p>Thanks,
<br>
Josh
<br>
<p>On Nov 1, 2007, at 3:34 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Before this gets committed to the live submit.php, can you
</span><br>
<span class="quotelev1">&gt; look at this? It should only effect the &quot;environment&quot; field.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov/01/2007 03:30:26PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: emallove
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2007-11-01 15:30:26 EDT (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 1094
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1094">https://svn.open-mpi.org/trac/mtt/changeset/1094</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt;  * &quot;environment&quot; field was not getting inserted due to
</span><br>
<span class="quotelev2">&gt;&gt;    a faulty `isset()` check
</span><br>
<span class="quotelev2">&gt;&gt;  * Added a second MTT DB admin
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/server/php/submit/index.php |    28 ++++++++++++++++++ 
</span><br>
<span class="quotelev2">&gt;&gt; +---------
</span><br>
<span class="quotelev2">&gt;&gt;    1 files changed, 19 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/server/php/submit/index.php
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev2">&gt;&gt; =========
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/server/php/submit/index.php	(original)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/server/php/submit/index.php	2007-11-01 15:30:26 EDT  
</span><br>
<span class="quotelev2">&gt;&gt; (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -235,6 +235,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev2">&gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;          ########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: performance
</span><br>
<span class="quotelev2">&gt;&gt;          # Currently only support latency/bandwidth
</span><br>
<span class="quotelev2">&gt;&gt; @@ -363,7 +366,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          #########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev2">&gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev2">&gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -567,6 +570,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev2">&gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;          ########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: test_build_compiler -&gt; compiler
</span><br>
<span class="quotelev2">&gt;&gt; @@ -629,7 +635,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;          #########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev2">&gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev2">&gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1084,6 +1091,9 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev2">&gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev2">&gt;&gt; +
</span><br>
<span class="quotelev2">&gt;&gt;          ########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: compute_cluster
</span><br>
<span class="quotelev2">&gt;&gt;          $stmt_fields = array(&quot;platform_name&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1185,7 +1195,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;          #########
</span><br>
<span class="quotelev2">&gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev2">&gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev2">&gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev2">&gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev2">&gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1767,8 +1777,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      $php_auth_user = $_SERVER['PHP_AUTH_USER'];
</span><br>
<span class="quotelev2">&gt;&gt;      $user          = $_POST['email'];
</span><br>
<span class="quotelev2">&gt;&gt; -#JJH    $admin         = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev2">&gt;&gt; -    $admin         = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev2">&gt;&gt; +    $admin1        = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev2">&gt;&gt; +    $admin2        = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev2">&gt;&gt;      $date          = date('r');
</span><br>
<span class="quotelev2">&gt;&gt;      $phpversion    = phpversion();
</span><br>
<span class="quotelev2">&gt;&gt;      $boundary      = md5(time());
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1778,8 +1788,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      $attachment = chunk_split(base64_encode(file_get_contents 
</span><br>
<span class="quotelev2">&gt;&gt; ($filename)));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      $headers = &lt;&lt;&lt;END
</span><br>
<span class="quotelev2">&gt;&gt; -From: $admin
</span><br>
<span class="quotelev2">&gt;&gt; -Reply-To: $admin
</span><br>
<span class="quotelev2">&gt;&gt; +From: $admin1
</span><br>
<span class="quotelev2">&gt;&gt; +Reply-To: $admin1
</span><br>
<span class="quotelev2">&gt;&gt;  Date: $date
</span><br>
<span class="quotelev2">&gt;&gt;  X-Mailer: PHP v$phpversion
</span><br>
<span class="quotelev2">&gt;&gt;  MIME-Version: 1.0
</span><br>
<span class="quotelev2">&gt;&gt; @@ -1808,8 +1818,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;      if (preg_match(&quot;/\w+@\w+/&quot;, $user, $m))
</span><br>
<span class="quotelev2">&gt;&gt;          mail($user, &quot;MTT server error&quot;, $message, $headers);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -    # Email the MTT database administrator
</span><br>
<span class="quotelev2">&gt;&gt; -    mail($admin, &quot;MTT server error (user: $php_auth_user)&quot;,  
</span><br>
<span class="quotelev2">&gt;&gt; $message, $headers);
</span><br>
<span class="quotelev2">&gt;&gt; +    # Email the MTT database administrator(s)
</span><br>
<span class="quotelev2">&gt;&gt; +    mail(&quot;$admin1, $admin2&quot;, &quot;MTT server error (user:  
</span><br>
<span class="quotelev2">&gt;&gt; $php_auth_user)&quot;, $message, $headers);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      # Whack the temp file
</span><br>
<span class="quotelev2">&gt;&gt;      unlink($filename);
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0190.php">Ethan Mallove: "[MTT devel] prepend_path propogating through phases"</a>
<li><strong>In reply to:</strong> <a href="0185.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Reply:</strong> <a href="0192.php">Ethan Mallove: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
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
