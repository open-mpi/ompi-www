<?
$subject_val = "Re: [OMPI devel] RFC: DL / DSO functionality";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 25 11:45:01 2015" -->
<!-- isoreceived="20150225164501" -->
<!-- sent="Wed, 25 Feb 2015 16:45:00 +0000" -->
<!-- isosent="20150225164500" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: DL / DSO functionality" -->
<!-- id="4A74CA4C-3747-4674-A415-A9125BBA322C_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17FE_Q+ivbfBTYwjVc11kxvGy-K3A19L7v7ORiKF9Lmog_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: DL / DSO functionality<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-25 11:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17032.php">Joshua Ladd: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17035.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2015, at 5:44 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FIRST:
</span><br>
<span class="quotelev1">&gt; I believe that *something* should have occurred when no dl component could be built.
</span><br>
<span class="quotelev1">&gt; Either the build should have been aborted or it could/should have switched to building everything static.
</span><br>
<span class="quotelev1">&gt; However, the failure at runtime should not have been the eventual outcome.
</span><br>
<p>Yes, it looks like I missed this case.
<br>
<p>This is a good question: what should we do here?
<br>
<p>1. Abort the configure (e.g., insist that the user install libltdl or --disable-dlopen)
<br>
2. Fall back to a --disable-dlopen build
<br>
<p>--&gt; I looked into #2; at first blush, it looks kinda hard to do.  :-\  I.e., by the time we figure out that neither dl component will build, all the &quot;whether dl functionality will be available or not&quot; decisions have been made (and are difficult to un-make).  It would require some re-structuring -- e.g., deferring the &quot;whether dl functionality will be available or not&quot; decisions.
<br>
<p><span class="quotelev1">&gt; SECOND:
</span><br>
<span class="quotelev1">&gt; On {Free,Net,Open}BSD dlopen() appears in libc, not in libdl.
</span><br>
<span class="quotelev1">&gt; So, I suspect one *should* be able to compile dl:dlopen on all these systems with the proper configure tests.
</span><br>
<p>Cool; I'll fix this.   ...done.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Previous message:</strong> <a href="17032.php">Joshua Ladd: "Re: [OMPI devel] OMPI devel] RoCE plus QDR IB tunable parameters"</a>
<li><strong>In reply to:</strong> <a href="17030.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17034.php">Dave Goodell (dgoodell): "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
<li><strong>Reply:</strong> <a href="17035.php">Paul Hargrove: "Re: [OMPI devel] RFC: DL / DSO functionality"</a>
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
