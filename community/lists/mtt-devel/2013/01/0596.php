<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 14 09:47:44 2013" -->
<!-- isoreceived="20130114144744" -->
<!-- sent="Mon, 14 Jan 2013 14:47:39 +0000" -->
<!-- isosent="20130114144739" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B6EC7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130114131554.932A81605D5_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-14 09:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/10/0595.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1535 - trunk/lib/MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's weird.  Why would an &quot;eval&quot; fix this situation?
<br>
<p><p>On Jan 14, 2013, at 8:15 AM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev1">&gt; Date: 2013-01-14 08:15:54 EST (Mon, 14 Jan 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 1575
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1575">https://svn.open-mpi.org/trac/mtt/changeset/1575</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; fixes #1696
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/lib/MTT/Reporter/MTTMongodb.pm |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/lib/MTT/Reporter/MTTMongodb.pm
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/lib/MTT/Reporter/MTTMongodb.pm	Fri Jan  4 14:39:57 2013	(r1574)
</span><br>
<span class="quotelev1">&gt; +++ trunk/lib/MTT/Reporter/MTTMongodb.pm	2013-01-14 08:15:54 EST (Mon, 14 Jan 2013)	(r1575)
</span><br>
<span class="quotelev1">&gt; @@ -117,7 +117,7 @@
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	if($enable_mongo == 1)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; -		eval &quot;$conn = MongoDB::Connection-&gt;new(host =&gt; $url);&quot;;
</span><br>
<span class="quotelev1">&gt; +		$conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev1">&gt; 		if(defined($conn))
</span><br>
<span class="quotelev1">&gt; 		{
</span><br>
<span class="quotelev1">&gt; 			$db = $conn-&gt;mlnx_mtt;
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
<li><strong>Next message:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2012/10/0595.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1535 - trunk/lib/MTT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
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
