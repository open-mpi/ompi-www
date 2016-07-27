<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 19:41:29 2012" -->
<!-- isoreceived="20120209004129" -->
<!-- sent="Wed, 08 Feb 2012 16:41:10 -0800" -->
<!-- isosent="20120209004110" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F331626.50500_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120209003103.GK4127_at_type.famille.thibault.fr" -->
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
<strong>Date:</strong> 2012-02-08 19:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 4:31 PM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Thu 09 Feb 2012 01:28:53 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Option #4:
</span><br>
<span class="quotelev2">&gt;&gt;     CFLAGS='-qhalt=e -qsuppress=1506-077'
</span><br>
<span class="quotelev2">&gt;&gt; Appears to work for me for xlc-8.0 and xlc-9.0.
</span><br>
<span class="quotelev1">&gt; That still looks dangerous to me: we don't know whatever warning
</span><br>
<span class="quotelev1">&gt; might be added in the future. I'd rather add -qhalt=e only for the
</span><br>
<span class="quotelev1">&gt; sched_setaffinity test.
</span><br>
<p>I don't recommend adding -qsuppress automatically, just documenting it 
<br>
for users that need xlc-8 or xlc-9.
<br>
If nothing else, this &quot;work-around&quot; is now in the hwloc-devel archives 
<br>
for the search engines.
<br>
Sorry that I wasn't clear on what I meant to do with those CFLAGS.
<br>
<p>Regarding &quot;we don't know whatever warning might be added in the future.&quot;:
<br>
&quot;1506-077&quot; is the number for this particular warning about invalid 
<br>
wchar_t constants.
<br>
So this suppresses ONLY the one message and should be pretty safe.
<br>
Based on looking at the constants, this message is being issued 
<br>
ERRONEOUSLY by these compilers.
<br>
<p>I do agree w/ Samuel that the BEST solution is to apply &quot;-qhalt=e&quot; ONLY 
<br>
to the test(s) where one expects the compiler to through errors (rather 
<br>
than warnings) for function calls with argument counts which don't match 
<br>
the prototypes.  At the moment, I am 90% certain that the &quot;old 
<br>
sched_setaffinity()&quot; probe is the only one fitting that description.
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
<li><strong>Next message:</strong> <a href="2832.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
