<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 17:07:35 2012" -->
<!-- isoreceived="20120209220735" -->
<!-- sent="Thu, 9 Feb 2012 17:07:29 -0500" -->
<!-- isosent="20120209220729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="3DB5FF30-A070-4B6F-B74C-2A52F53964F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F341E3F.6030806_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 17:07:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2012, at 2:27 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; What you have for the &quot;Make sure...&quot; is wrong in the same way as the one that was in rc1.
</span><br>
<span class="quotelev1">&gt; The problem is that the AC_COMPILE_IFELSE code tests too-few and too-many args together.
</span><br>
<span class="quotelev1">&gt; Since xlc makes too many an error by default, we don't notice its MISbehavior when given too few.
</span><br>
<span class="quotelev1">&gt; So, one needs to split the too-many and too-few tests as I did in the patch I sent.
</span><br>
<p>Ah.  I didn't change that section at all -- I just added the CFLAGS-amend-and-restore behavior.
<br>
<p>Hmm.  Somehow I totally missed the patch you sent; I see it now (sent last night at 8:53pm US Eastern).
<br>
<p>I'm not sure your patch was entirely right -- did you mean for it to ok if we fail the pass-too-many-args test?  hwloc_args_check_ok is really only checked as the result of the pass-too-few-args test.
<br>
<p>I slightly reworked your patch to check to ensure that *both* of them pass -- how's this?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2848/modified-paul.patch">modified-paul.patch</a>
</ul>
<!-- attachment="modified-paul.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2849.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
