<?
$subject_val = "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 15 13:28:46 2013" -->
<!-- isoreceived="20130115182846" -->
<!-- sent="Tue, 15 Jan 2013 20:28:40 +0200" -->
<!-- isosent="20130115182840" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter" -->
<!-- id="CAAO1Kybr5jZqG+Bm7kLo6BAx0MaCfnSHK8X7fBu_Agdkn97D4w_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC380B6EC7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-15 13:28:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
there is a die&quot;&quot; in the MongoDB.connect :(
<br>
<p>On Mon, Jan 14, 2013 at 4:47 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; That's weird.  Why would an &quot;eval&quot; fix this situation?
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- trunk/lib/MTT/Reporter/MTTMongodb.pm      Fri Jan  4 14:39:57 2013
</span><br>
<span class="quotelev1">&gt;      (r1574)
</span><br>
<span class="quotelev2">&gt; &gt; +++ trunk/lib/MTT/Reporter/MTTMongodb.pm      2013-01-14 08:15:54 EST
</span><br>
<span class="quotelev1">&gt; (Mon, 14 Jan 2013)      (r1575)
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Previous message:</strong> <a href="0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>In reply to:</strong> <a href="0596.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
<li><strong>Reply:</strong> <a href="0598.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1575 - trunk/lib/MTT/Reporter"</a>
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
