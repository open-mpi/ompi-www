<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 19:46:19 2012" -->
<!-- isoreceived="20120209004619" -->
<!-- sent="Wed, 08 Feb 2012 16:45:58 -0800" -->
<!-- isosent="20120209004558" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F331746.2030800_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120209004356.GL4127_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-02-08 19:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 4:43 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Thu 09 Feb 2012 01:41:47 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; On 2/8/2012 4:31 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove, le Thu 09 Feb 2012 01:28:53 +0100, a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Option #4:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     CFLAGS='-qhalt=e -qsuppress=1506-077'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Appears to work for me for xlc-8.0 and xlc-9.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That still looks dangerous to me: we don't know whatever warning
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be added in the future. I'd rather add -qhalt=e only for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sched_setaffinity test.
</span><br>
<span class="quotelev2">&gt;&gt; I don't recommend adding -qsuppress automatically, just documenting it for
</span><br>
<span class="quotelev2">&gt;&gt; users that need xlc-8 or xlc-9.
</span><br>
<span class="quotelev1">&gt; I'm not actually talking about the -qsuppress, but about still using
</span><br>
<span class="quotelev1">&gt; -qhalt=e, which might make a lot more other warnings fatal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Right.
<br>
I realized that about 10 seconds after hitting SEND and was composing a 
<br>
retraction when the post above arrived.
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
<li><strong>Next message:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2833.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
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
