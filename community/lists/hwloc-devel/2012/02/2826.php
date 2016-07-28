<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 17:09:19 2012" -->
<!-- isoreceived="20120208220919" -->
<!-- sent="Wed, 08 Feb 2012 14:08:59 -0800" -->
<!-- isosent="20120208220859" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F32F27B.9000608_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32E4CC.7060303_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-08 17:08:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2827.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2829.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2829.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 1:10 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/8/2012 8:58 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; * Detect when a compiler such as xlc may not report compile errors
</span><br>
<span class="quotelev2">&gt;&gt;    properly, causing some configure checks to be wrong. Thanks to
</span><br>
<span class="quotelev2">&gt;&gt;    Paul H. Hargrove for reporting the problem and providing a patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like I botched this one!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have added two Linux/ppc64 machines the xlc-7.0, xlc-8.0 and xlc-9.0 
</span><br>
<span class="quotelev1">&gt; to my testing.
</span><br>
<span class="quotelev1">&gt; These are NOT running on the odd virtual node that caused assertion 
</span><br>
<span class="quotelev1">&gt; failures when testing xlc-11.1. 
</span><br>
<p>ARGH!!!
<br>
<p>I've applied the patches I included, and tested on the xlc-11.1 system 
<br>
where auto tools are new enough.
<br>
Everything looked fine.
<br>
<p>Now I've had a chance to retest earlier xlc (8 and 9, which are on 2 
<br>
different machines), with the explict CFLAGS=-qhalt=e.
<br>
The result was NOT good.
<br>
<p>It seems that xlc dislikes some wchar constants (see below).
<br>
In a build w/ default CFLAGS they produce an &quot;(E)&quot; level message, but 
<br>
compilation continues to completion.
<br>
With the recommended CFLAGS=-qhalt=e these become fatal:
<br>
<span class="quotelev1">&gt;   CC     lstopo-lstopo-text.o
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0/hwloc-1.3.2rc1/include/hwloc.h&quot;, 
</span><br>
<span class="quotelev1">&gt; line 1203.34: 1506-1385 (W) The attribute &quot;pure&quot; is not a valid type 
</span><br>
<span class="quotelev1">&gt; attribute.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 450.12: 1506-077 (E) The wchar_t value 0x250c is not valid.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 451.12: 1506-077 (E) The wchar_t value 0x2510 is not valid.
</span><br>
<span class="quotelev1">&gt; &quot;/home/hargrove/OMPI/hwloc-1.3.2rc1-linux-ppc64-xlc-9.0//hwloc-1.3.2rc1/utils/lstopo-text.c&quot;, 
</span><br>
<span class="quotelev1">&gt; line 452.12: 1506-077 (E) The wchar_t value 0x2514 is not valid.
</span><br>
[followed by another error for each case in the switch statement].
<br>
<p>So, now I am not sure what to recommend.  Options include:
<br>
+ Don't worry about old xlc (which OMPI doesn't support since they can't 
<br>
build the opal atomics).
<br>
+ Rig things to use -qhalt=e ONLY for configure, but not for make?
<br>
+ Punt on 1.3 and revisit later
<br>
<p>By the way:
<br>
xlc-11.1 on Linux doesn't make these complaints on lstopo-lstopo-text.
<br>
Nor does xlc-6.0 on MacOS-10.3 (honest, I am not making this up).
<br>
[And, YES, both platforms define HAVE_PUTWC]
<br>
<p><p>-Paul
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2827.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2825.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2820.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2829.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2829.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
