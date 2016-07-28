<?
$subject_val = "Re: [OMPI devel] 1.4.5rc4 is out";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 15:51:17 2012" -->
<!-- isoreceived="20120131205117" -->
<!-- sent="Tue, 31 Jan 2012 15:51:13 -0500" -->
<!-- isosent="20120131205113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.5rc4 is out" -->
<!-- id="1D35957C-BF1A-4F3E-B853-72E2568AE0FE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F2853AF.8080405_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.5rc4 is out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 15:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 3:48 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev2">&gt;&gt; 2) Must --disable-io-romio on OpenBSD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nobody has yet told me to shutup about that one, so I mention it here for completeness.
</span><br>
<span class="quotelev1">&gt; Having looked only briefly at the failure, I see that it is in ROMIO's equivalent of opal_path_nfs().
</span><br>
<span class="quotelev1">&gt; So, there could be logic in opal/util/path.c to fix ROMIO for OpenBSD.
</span><br>
<span class="quotelev1">&gt; Of course, that is assuming no errors then pop up later in the build.
</span><br>
<p>Oops -- Brad was supposed to put that in README, too.
<br>
<p>We're not excited about making changes to such an old version of ROMIO.
<br>
<p>1.5.x is about to transition to v1.6, meaning that it will replace the 1.4 series.  So we want to have a &quot;near perfect&quot; 1.4.5 release, but that doesn't necessarily mean making a heroic effort to update/fix some old software packages when a newer, stable version (that hopefully fixes the problem!) is around the corner.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Previous message:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>In reply to:</strong> <a href="10292.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
<li><strong>Reply:</strong> <a href="10294.php">Paul H. Hargrove: "Re: [OMPI devel] 1.4.5rc4 is out"</a>
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
