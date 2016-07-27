<?
$subject_val = "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 12:27:55 2012" -->
<!-- isoreceived="20120210172755" -->
<!-- sent="Fri, 10 Feb 2012 09:27:44 -0800" -->
<!-- isosent="20120210172744" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)" -->
<!-- id="4F355390.408_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0E93E1E1-BBB3-46E8-9452-9A90D2F1D51D_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 12:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2854.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2852.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc2r4285)"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "[hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have versions 8.1.032, 9.0.024 and 9.1.042 of the Intel compilers on a 
<br>
Linux/x86 (32-bit) host.
<br>
All three can configure and build hwloc-1.3.2rc1, but all are failing 
<br>
&quot;make check&quot; in the same way.
<br>
What I see is ton(ne)s of linker messages and every executable SEGVs.
<br>
<p>The linker messages look like:
<br>
<span class="quotelev1">&gt;   CC     hwloc_synthetic.o
</span><br>
<span class="quotelev1">&gt;   CCLD   hwloc_synthetic
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x1c): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_init'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x2a): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_set_synthetic'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x33): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_load'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x3c): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_check'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x46): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_get_depth'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x64): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_get_nbobjs_by_depth'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0x8a): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_get_obj_by_depth'
</span><br>
<span class="quotelev1">&gt; ld: hwloc_synthetic.o(.text+0xc6): unresolvable relocation against 
</span><br>
<span class="quotelev1">&gt; symbol `hwloc_topology_destroy'
</span><br>
Where most tests have far more of these.
<br>
<p>For the moment, I am going to assume the SEGVs are a result of the 
<br>
linker problems.
<br>
<p>As compared to gcc on the same system, the only difference in 
<br>
include/private/autogen/config.h is:
<br>
<span class="quotelev1">&gt;  /* Whether C compiler supports symbol visibility or not */
</span><br>
<span class="quotelev1">&gt; -#define HWLOC_C_HAVE_VISIBILITY 1
</span><br>
<span class="quotelev1">&gt; +#define HWLOC_C_HAVE_VISIBILITY 0
</span><br>
Where the '1' is the build with the Intel compiler.
<br>
So, my current suspicion falls on the visibility crud.
<br>
I can confirm that &quot;HWLOC_CFLAGS = -fvisibility=hidden&quot; in Makefile.
<br>
Other then that, I don't know where to begin looking at this problem.
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
<li><strong>Next message:</strong> <a href="2854.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2852.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc2r4285)"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "[hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
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
