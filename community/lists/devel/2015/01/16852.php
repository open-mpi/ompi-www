<?
$subject_val = "Re: [OMPI devel] Great meeting!";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 07:01:13 2015" -->
<!-- isoreceived="20150130120113" -->
<!-- sent="Fri, 30 Jan 2015 12:01:11 +0000" -->
<!-- isosent="20150130120111" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Great meeting!" -->
<!-- id="DAE3A5F8-91F1-4A01-B155-4A75911C4367_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54CB4B98.3010705_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Great meeting!<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-30 07:01:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah!
<br>
<p>I added this note because I could have sworn that I ran &quot;./configure --help | grep thread&quot; and still saw the --with-threads option.
<br>
<p>I must have accidentally ran that on a v1.8 checkout, not a master checkout.
<br>
<p>Thanks - I'll remove that note from the wiki.
<br>
<p><p><p><span class="quotelev1">&gt; On Jan 30, 2015, at 3:15 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; let me update the --with-threads configure option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it has been removed from the master :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 7a55d49ca78bcc157749c04027515f12b026ec33
</span><br>
<span class="quotelev1">&gt; Author: Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Tue Oct 21 19:13:19 2014 +0900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    configury: per RFC, remove the --with-threads option
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i did not think it was appropriate to remove this option from the v1.8
</span><br>
<span class="quotelev1">&gt; series (e.g. do not &quot;break&quot; configure command line), so i did not make a PR.
</span><br>
<span class="quotelev1">&gt; but if there is a consensus --with-threads can be safely removed from
</span><br>
<span class="quotelev1">&gt; the v1.8 series, i ll be happy to do the backport and make a PR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2015/01/30 6:20, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you all who traveled and/or showed up on a webex this week for the OMPI developer's meeting.  We discussed a zillion things and made much forward progress.  The wiki with a summary of discussed/decided things is here:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="https://github.com/open-mpi/ompi/wiki/Meeting-2015-01">https://github.com/open-mpi/ompi/wiki/Meeting-2015-01</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The major agenda item for next Tuesday's call will be to go through these items and answer any questions for people who weren't here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16850.php">http://www.open-mpi.org/community/lists/devel/2015/01/16850.php</a>
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
<li><strong>Next message:</strong> <a href="16853.php">Paul Hargrove: "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>Previous message:</strong> <a href="16851.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove embedded libltdl"</a>
<li><strong>In reply to:</strong> <a href="16850.php">Gilles Gouaillardet: "Re: [OMPI devel] Great meeting!"</a>
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
