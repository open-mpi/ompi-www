<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 13:40:29 2013" -->
<!-- isoreceived="20130115184029" -->
<!-- sent="Tue, 15 Jan 2013 18:40:24 +0000" -->
<!-- isosent="20130115184024" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380BA3AE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kybr5jZqG+Bm7kLo6BAx0MaCfnSHK8X7fBu_Agdkn97D4w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-01-15 13:40:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/02/0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow!  Icky.  That should be reported upstream.
<br>
<p><p>On Jan 15, 2013, at 1:28 PM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; there is a die&quot;&quot; in the MongoDB.connect :(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 14, 2013 at 4:47 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; That's weird.  Why would an &quot;eval&quot; fix this situation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2013, at 8:15 AM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: miked (Mike Dubman)
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2013-01-14 08:15:54 EST (Mon, 14 Jan 2013)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 1575
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/mtt/changeset/1575">https://svn.open-mpi.org/trac/mtt/changeset/1575</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; fixes #1696
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;   trunk/lib/MTT/Reporter/MTTMongodb.pm |     2 +-
</span><br>
<span class="quotelev2">&gt; &gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Modified: trunk/lib/MTT/Reporter/MTTMongodb.pm
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Reporter/MTTMongodb.pm      Fri Jan  4 14:39:57 2013        (r1574)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/MTTMongodb.pm      2013-01-14 08:15:54 EST (Mon, 14 Jan 2013)      (r1575)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -117,7 +117,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if($enable_mongo == 1)
</span><br>
<span class="quotelev2">&gt; &gt;       {
</span><br>
<span class="quotelev2">&gt; &gt; -             eval &quot;$conn = MongoDB::Connection-&gt;new(host =&gt; $url);&quot;;
</span><br>
<span class="quotelev2">&gt; &gt; +             $conn = MongoDB::Connection-&gt;new(host =&gt; $url);
</span><br>
<span class="quotelev2">&gt; &gt;               if(defined($conn))
</span><br>
<span class="quotelev2">&gt; &gt;               {
</span><br>
<span class="quotelev2">&gt; &gt;                       $db = $conn-&gt;mlnx_mtt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn mailing list
</span><br>
<span class="quotelev2">&gt; &gt; mtt-svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/02/0599.php">Jeff Squyres (jsquyres): "[MTT devel] fix zombie commit"</a>
<li><strong>Previous message:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0597.php">Mike Dubman: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
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
