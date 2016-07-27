<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 17:27:02 2012" -->
<!-- isoreceived="20120209222702" -->
<!-- sent="Thu, 09 Feb 2012 14:26:53 -0800" -->
<!-- isosent="20120209222653" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F34482D.6020503_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3DB5FF30-A070-4B6F-B74C-2A52F53964F4_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 17:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/9/2012 2:07 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 9, 2012, at 2:27 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What you have for the &quot;Make sure...&quot; is wrong in the same way as the one that was in rc1.
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that the AC_COMPILE_IFELSE code tests too-few and too-many args together.
</span><br>
<span class="quotelev2">&gt;&gt; Since xlc makes too many an error by default, we don't notice its MISbehavior when given too few.
</span><br>
<span class="quotelev2">&gt;&gt; So, one needs to split the too-many and too-few tests as I did in the patch I sent.
</span><br>
<span class="quotelev1">&gt; Ah.  I didn't change that section at all -- I just added the CFLAGS-amend-and-restore behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  Somehow I totally missed the patch you sent; I see it now (sent last night at 8:53pm US Eastern).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure your patch was entirely right -- did you mean for it to ok if we fail the pass-too-many-args test?  hwloc_args_check_ok is really only checked as the result of the pass-too-few-args test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I slightly reworked your patch to check to ensure that *both* of them pass -- how's this?
</span><br>
<p>Sorry, I can't quite parse the diff and can't apply it at the moment (no 
<br>
ssh).
<br>
The intent is to FAIL the compiler if EITHER test were to pass.
<br>
So, I think your check for *both* is probably incorrect.
<br>
<p>Perhaps this will clarify:
<br>
The *intent* was that we run 2 tests via AC_COMPILE_IFELSE().
<br>
One tries to pass too many arguments to a function.
<br>
The other tries to pass too few.
<br>
With an &quot;acceptable&quot; compiler BOTH must FAIL
<br>
So the commands-if-success portion of each AC_COMPILE_IFELSE set a 
<br>
variable (no need to increment).
<br>
NOTE: the variable is set on SUCCESS of the AC_COMPILE_IFELSE, not on 
<br>
failure.
<br>
We then test if *either* set the variable.
<br>
Sort of a double-negative.
<br>
<p>If that was still not clear, let me know and I'll take a look again when 
<br>
I can apply the patch.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2848.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2850.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
