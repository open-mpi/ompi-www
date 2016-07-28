<?
$subject_val = "[MTT devel] fix zombie commit";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 24 06:09:50 2013" -->
<!-- isoreceived="20130224110950" -->
<!-- sent="Sun, 24 Feb 2013 11:09:45 +0000" -->
<!-- isosent="20130224110945" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] fix zombie commit" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F55CD3_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130224064432.31B1515F67C_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [MTT devel] fix zombie commit<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-24 06:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/01/0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike --
<br>
<p>Please protect this code better; MTT is also run on Solaris and OS X.
<br>
<p>Also, can you describe more fully the case where zombies are being left behind by MTT?
<br>
<p><p>On Feb 24, 2013, at 1:44 AM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-02-24 01:44:31 EST (Sun, 24 Feb 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 1589
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1589">https://svn.open-mpi.org/trac/mtt/changeset/1589</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; * fix: fork leaves zombie processes sometimes. temp fix: detect zombie and proceed with tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/DoCommand.pm |     6 ++++++                                  
</span><br>
<span class="quotelev1">&gt;   1 files changed, 6 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/DoCommand.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/DoCommand.pm	Wed Feb 20 12:41:12 2013	(r1588)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/DoCommand.pm	2013-02-24 01:44:31 EST (Sun, 24 Feb 2013)	(r1589)
</span><br>
<span class="quotelev1">&gt; @@ -641,6 +641,12 @@
</span><br>
<span class="quotelev1">&gt;         if (!$pid_exists) {
</span><br>
<span class="quotelev1">&gt;             Verbose(&quot;--&gt; Process completed somehow at &quot; . time() . &quot;, proceeding with tests\n&quot;);
</span><br>
<span class="quotelev1">&gt;             $resume_tests++;
</span><br>
<span class="quotelev1">&gt; +        } else {
</span><br>
<span class="quotelev1">&gt; +            my $matches = MTT::Files::Grep(&quot;zombie&quot;, &quot;/proc/$pid/status&quot;);
</span><br>
<span class="quotelev1">&gt; +            if (@$matches) {
</span><br>
<span class="quotelev1">&gt; +                Verbose(&quot;--&gt; Process become Zombie at &quot; . time() . &quot;, proceeding with tests\n&quot;);
</span><br>
<span class="quotelev1">&gt; +                $resume_tests++;
</span><br>
<span class="quotelev1">&gt; +            }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         # Remove the timeout sentinel file, if a timeout notify timeout value is set
</span><br>
<span class="quotelev1">&gt;         if (defined($end_time) and time() &gt; $end_time) {
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/01/0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
<li><strong>Reply:</strong> <a href="0600.php">Mike Dubman: "Re: [MTT devel] fix zombie commit"</a>
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
