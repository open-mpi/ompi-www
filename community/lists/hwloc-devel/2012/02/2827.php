<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 18:02:44 2012" -->
<!-- isoreceived="20120208230244" -->
<!-- sent="Wed, 08 Feb 2012 15:02:22 -0800" -->
<!-- isosent="20120208230222" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F32FEFE.8050306_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F32ECD3.1080407_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-08 18:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 1:44 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, we need to use $hwloc_c_vendor instead. That's where's
</span><br>
<span class="quotelev1">&gt; $hwloc_check_compiler_vendor_result ends up before being cleared.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It looks like something is very wrong here:
<br>
Examining the 1.3.2rc1 tarball I seem to see $hwloc_c_vendor is read but 
<br>
NOT written!
<br>
<span class="quotelev1">&gt; $ grep hwloc_c_vendor configure
</span><br>
<span class="quotelev1">&gt;     case &quot;$hwloc_c_vendor&quot; in
</span><br>
<span class="quotelev1">&gt;     case &quot;$hwloc_c_vendor&quot; in
</span><br>
<span class="quotelev1">&gt;     case &quot;$hwloc_c_vendor&quot; in
</span><br>
<span class="quotelev1">&gt;     case &quot;$hwloc_c_vendor&quot; in
</span><br>
<span class="quotelev1">&gt;         case &quot;$hwloc_c_vendor&quot; in
</span><br>
<p>If this is really the case, then I can imagine visibility and other 
<br>
things going quite wrong with various compilers.
<br>
<p>The file config/hwloc_check_vendor.m4 that is present in trunk, is 
<br>
ABSENT in the 1.3.2rc1 tarball.
<br>
There is, correspondingly, no call to _HWLOC_C_COMPILER_VENDOR in hwloc.m4.
<br>
Am I correct here, or have I missed something?
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
<li><strong>Next message:</strong> <a href="2828.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
