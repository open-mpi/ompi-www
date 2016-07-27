<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1385";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 23 09:20:50 2011" -->
<!-- isoreceived="20110223142050" -->
<!-- sent="Wed, 23 Feb 2011 09:20:45 -0500" -->
<!-- isosent="20110223142045" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1385" -->
<!-- id="FD73E6EE-55E9-425C-A2C0-10EBCF51E815_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201102231417.p1NEHogn006699_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1385<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-23 09:20:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/03/0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>This is not enough; you also need to close stdin, stdout, and stderr.  I also don't think we want to print something to stdout from the child -- it's a race condition.
<br>
<p><p><p>On Feb 23, 2011, at 9:17 AM, rusraink_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rusraink
</span><br>
<span class="quotelev1">&gt; Date: 2011-02-23 09:17:50 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 1385
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1385">https://svn.open-mpi.org/trac/mtt/changeset/1385</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; - Add --daemon parameter to fork mtt-relay into background.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/client/mtt-relay |    13 +++++++++++++                           
</span><br>
<span class="quotelev1">&gt;   1 files changed, 13 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/client/mtt-relay
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/client/mtt-relay	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/client/mtt-relay	2011-02-23 09:17:50 EST (Wed, 23 Feb 2011)
</span><br>
<span class="quotelev1">&gt; @@ -23,6 +23,7 @@
</span><br>
<span class="quotelev1">&gt; chomp $HOST;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my $PORT = &quot;8008&quot;;
</span><br>
<span class="quotelev1">&gt; +my $daemon = 0;
</span><br>
<span class="quotelev1">&gt; my $debug = 0;
</span><br>
<span class="quotelev1">&gt; my $quiet = 0;
</span><br>
<span class="quotelev1">&gt; my $url = '<a href="https://www.open-mpi.org/mtt/submit/index.php">https://www.open-mpi.org/mtt/submit/index.php</a>';
</span><br>
<span class="quotelev1">&gt; @@ -32,6 +33,7 @@
</span><br>
<span class="quotelev1">&gt; Getopt::Long::GetOptions(
</span><br>
<span class="quotelev1">&gt;     &quot;port|p=i&quot; =&gt; \$PORT,
</span><br>
<span class="quotelev1">&gt;     &quot;host|h=s&quot; =&gt; \$HOST,
</span><br>
<span class="quotelev1">&gt; +    &quot;daemon&quot;   =&gt; \$daemon,
</span><br>
<span class="quotelev1">&gt;     &quot;debug|d&quot;  =&gt; \$debug,
</span><br>
<span class="quotelev1">&gt;     &quot;url|u=s&quot;  =&gt; \$url,
</span><br>
<span class="quotelev1">&gt;     &quot;help&quot;     =&gt; \$help,
</span><br>
<span class="quotelev1">&gt; @@ -44,6 +46,7 @@
</span><br>
<span class="quotelev1">&gt;  --port|-p     Port that $0 listens on (default: $PORT)
</span><br>
<span class="quotelev1">&gt;  --host|-h     Specify $0's host (default: $HOST)
</span><br>
<span class="quotelev1">&gt;  --url|-u      MTT results submission URL (default: $url)
</span><br>
<span class="quotelev1">&gt; + --daemon      Daemon mode (fork into background)
</span><br>
<span class="quotelev1">&gt;  --debug|-d    Debug mode
</span><br>
<span class="quotelev1">&gt;  --help        This message
</span><br>
<span class="quotelev1">&gt; EOT
</span><br>
<span class="quotelev1">&gt; @@ -96,6 +99,16 @@
</span><br>
<span class="quotelev1">&gt;     print &quot;Set your proxy to &lt;URL:&quot; . $master-&gt;url . &quot;&gt;\n&quot;;
</span><br>
<span class="quotelev1">&gt;     my $slave;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +    if ($daemon) {
</span><br>
<span class="quotelev1">&gt; +        my $pid = fork();
</span><br>
<span class="quotelev1">&gt; +        if($pid) {
</span><br>
<span class="quotelev1">&gt; +            print &quot;# Daemon Parent exiting\n&quot;;
</span><br>
<span class="quotelev1">&gt; +            exit 0;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            print &quot;# Daemon Child process continuing\n&quot;;
</span><br>
<span class="quotelev1">&gt; +        }
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;     while (1) {
</span><br>
<span class="quotelev1">&gt;         while ($slave = $master-&gt;accept) {
</span><br>
<span class="quotelev1">&gt;             &amp;handle_connection($slave);
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-svn mailing list
</span><br>
<span class="quotelev1">&gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2011/03/0561.php">Abhishek Kulkarni: "[MTT devel] Patch to send MIME email."</a>
<li><strong>Previous message:</strong> <a href="0559.php">Jeff Squyres: "Re: [MTT devel] race condition in SCM module"</a>
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
