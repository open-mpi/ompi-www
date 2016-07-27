<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 19:28:36 2012" -->
<!-- isoreceived="20120209002836" -->
<!-- sent="Wed, 08 Feb 2012 16:28:16 -0800" -->
<!-- isosent="20120209002816" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F331320.5050808_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32F27B.9000608_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-08 19:28:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 2:08 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; It seems that xlc dislikes some wchar constants (see below).
</span><br>
<span class="quotelev1">&gt; In a build w/ default CFLAGS they produce an &quot;(E)&quot; level message, but 
</span><br>
<span class="quotelev1">&gt; compilation continues to completion.
</span><br>
<span class="quotelev1">&gt; With the recommended CFLAGS=-qhalt=e these become fatal:
</span><br>
<span class="quotelev2">&gt;&gt;   CC     lstopo-lstopo-text.o
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0/hwloc-1.3.2rc1/include/hwloc.h&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; line 1203.34: 1506-1385 (W) The attribute &quot;pure&quot; is not a valid type 
</span><br>
<span class="quotelev2">&gt;&gt; attribute.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; line 450.12: 1506-077 (E) The wchar_t value 0x250c is not valid.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; line 451.12: 1506-077 (E) The wchar_t value 0x2510 is not valid.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev2">&gt;&gt; line 452.12: 1506-077 (E) The wchar_t value 0x2514 is not valid.
</span><br>
<span class="quotelev1">&gt; [followed by another error for each case in the switch statement].
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, now I am not sure what to recommend.  Options include:
</span><br>
<span class="quotelev1">&gt; + Don't worry about old xlc (which OMPI doesn't support since they 
</span><br>
<span class="quotelev1">&gt; can't build the opal atomics).
</span><br>
<span class="quotelev1">&gt; + Rig things to use -qhalt=e ONLY for configure, but not for make?
</span><br>
<span class="quotelev1">&gt; + Punt on 1.3 and revisit later 
</span><br>
<p>Option #4:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS='-qhalt=e -qsuppress=1506-077'
<br>
Appears to work for me for xlc-8.0 and xlc-9.0.
<br>
For xlc-7.0 the -qsuppress doesn't appear to be effective.
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
<li><strong>Next message:</strong> <a href="2830.php">Samuel Thibault: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
