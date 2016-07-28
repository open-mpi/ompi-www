<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  7 13:13:04 2007" -->
<!-- isoreceived="20071107181304" -->
<!-- sent="Wed, 7 Nov 2007 13:12:59 -0500" -->
<!-- isosent="20071107181259" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)" -->
<!-- id="20071107181259.GA5072_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E54822A2-8F5A-490C-B10C-28346E9B9B12_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-11-07 13:12:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0193.php">Jeff Squyres: "[MTT devel] Fwd: JpGraph Comment [Other]: Redistributing jpgraph"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Patch committed.
<br>
<p>I used it on a nightly run, and it was fine. I'm assuming
<br>
the issue has only affected me because nobody else uses the
<br>
*pend_path and *setenv INI params. 
<br>
<p>-Ethan
<br>
<p><p>On Wed, Nov/07/2007 11:00:17AM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Sorry it has taken me a while to get to this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the patch is generally fine. I don't think it will hurt  
</span><br>
<span class="quotelev1">&gt; anything. I haven't tested it though, but I trust if you have then it  
</span><br>
<span class="quotelev1">&gt; should be fine. Let me know when it happens and I'll try to watch a  
</span><br>
<span class="quotelev1">&gt; bit more closely the nightly submits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 1, 2007, at 3:34 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Josh,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Before this gets committed to the live submit.php, can you
</span><br>
<span class="quotelev2">&gt; &gt; look at this? It should only effect the &quot;environment&quot; field.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Ethan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Nov/01/2007 03:30:26PM, emallove_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Author: emallove
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Date: 2007-11-01 15:30:26 EDT (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; New Revision: 1094
</span><br>
<span class="quotelev3">&gt; &gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1094">https://svn.open-mpi.org/trac/mtt/changeset/1094</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Log:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * &quot;environment&quot; field was not getting inserted due to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    a faulty `isset()` check
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  * Added a second MTT DB admin
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Text files modified:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    trunk/server/php/submit/index.php |    28 ++++++++++++++++++ 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +---------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    1 files changed, 19 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Modified: trunk/server/php/submit/index.php
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ===================================================================== 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; =========
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --- trunk/server/php/submit/index.php	(original)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +++ trunk/server/php/submit/index.php	2007-11-01 15:30:26 EDT  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Thu, 01 Nov 2007)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -235,6 +235,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          ########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: performance
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Currently only support latency/bandwidth
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -363,7 +366,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          #########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -567,6 +570,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          ########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: test_build_compiler -&gt; compiler
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -629,7 +635,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          #########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1084,6 +1091,9 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      for($i = 0; $i &lt; $n; $i++) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        # The POST fields are enumerated starting at 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        $j = $i + 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          ########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: compute_cluster
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $stmt_fields = array(&quot;platform_name&quot;,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1185,7 +1195,7 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          #########
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          # Select/Insert: Environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          $results_idxs_hash['environment_id'] = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -        if( isset($_POST['environment']) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +        if( isset($_POST[&quot;environment_$j&quot;]) ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_fields = array(&quot;environment&quot;);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;              $stmt_values = array(get_scalar($param_set 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ['environment'], $i) );
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1767,8 +1777,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $php_auth_user = $_SERVER['PHP_AUTH_USER'];
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $user          = $_POST['email'];
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -#JJH    $admin         = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    $admin         = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    $admin1        = 'jjhursey_at_[hidden]';
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    $admin2        = 'ethan.mallove_at_[hidden]';
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $date          = date('r');
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $phpversion    = phpversion();
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $boundary      = md5(time());
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1778,8 +1788,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $attachment = chunk_split(base64_encode(file_get_contents 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ($filename)));
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      $headers = &lt;&lt;&lt;END
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -From: $admin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Reply-To: $admin
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +From: $admin1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +Reply-To: $admin1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  Date: $date
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  X-Mailer: PHP v$phpversion
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  MIME-Version: 1.0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; @@ -1808,8 +1818,8 @@
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      if (preg_match(&quot;/\w+@\w+/&quot;, $user, $m))
</span><br>
<span class="quotelev3">&gt; &gt;&gt;          mail($user, &quot;MTT server error&quot;, $message, $headers);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    # Email the MTT database administrator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -    mail($admin, &quot;MTT server error (user: $php_auth_user)&quot;,  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $message, $headers);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    # Email the MTT database administrator(s)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; +    mail(&quot;$admin1, $admin2&quot;, &quot;MTT server error (user:  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $php_auth_user)&quot;, $message, $headers);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      # Whack the temp file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      unlink($filename);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-svn mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="0193.php">Jeff Squyres: "[MTT devel] Fwd: JpGraph Comment [Other]: Redistributing jpgraph"</a>
<li><strong>Previous message:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>In reply to:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<!-- nextthread="start" -->
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
