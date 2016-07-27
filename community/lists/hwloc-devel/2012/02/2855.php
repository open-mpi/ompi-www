<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 14:04:51 2012" -->
<!-- isoreceived="20120210190451" -->
<!-- sent="Fri, 10 Feb 2012 14:04:46 -0500" -->
<!-- isosent="20120210190446" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)" -->
<!-- id="38471C9F-5D0C-4DAF-B957-42EC841CB504_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F355390.408_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 14:04:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What does nm say about libhwloc.so?  Are those symbols public or private?  Was everything properly built as 32 bit?
<br>
<p>It's kinda weird that icc supported the visibility stuff but gcc did not...
<br>
<p><p>On Feb 10, 2012, at 12:27 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have versions 8.1.032, 9.0.024 and 9.1.042 of the Intel compilers on a Linux/x86 (32-bit) host.
</span><br>
<span class="quotelev1">&gt; All three can configure and build hwloc-1.3.2rc1, but all are failing &quot;make check&quot; in the same way.
</span><br>
<span class="quotelev1">&gt; What I see is ton(ne)s of linker messages and every executable SEGVs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The linker messages look like:
</span><br>
<span class="quotelev2">&gt;&gt;  CC     hwloc_synthetic.o
</span><br>
<span class="quotelev2">&gt;&gt;  CCLD   hwloc_synthetic
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x1c): unresolvable relocation against symbol `hwloc_topology_init'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x2a): unresolvable relocation against symbol `hwloc_topology_set_synthetic'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x33): unresolvable relocation against symbol `hwloc_topology_load'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x3c): unresolvable relocation against symbol `hwloc_topology_check'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x46): unresolvable relocation against symbol `hwloc_topology_get_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x64): unresolvable relocation against symbol `hwloc_get_nbobjs_by_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x8a): unresolvable relocation against symbol `hwloc_get_obj_by_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0xc6): unresolvable relocation against symbol `hwloc_topology_destroy'
</span><br>
<span class="quotelev1">&gt; Where most tests have far more of these.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the moment, I am going to assume the SEGVs are a result of the linker problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As compared to gcc on the same system, the only difference in include/private/autogen/config.h is:
</span><br>
<span class="quotelev2">&gt;&gt; /* Whether C compiler supports symbol visibility or not */
</span><br>
<span class="quotelev2">&gt;&gt; -#define HWLOC_C_HAVE_VISIBILITY 1
</span><br>
<span class="quotelev2">&gt;&gt; +#define HWLOC_C_HAVE_VISIBILITY 0
</span><br>
<span class="quotelev1">&gt; Where the '1' is the build with the Intel compiler.
</span><br>
<span class="quotelev1">&gt; So, my current suspicion falls on the visibility crud.
</span><br>
<span class="quotelev1">&gt; I can confirm that &quot;HWLOC_CFLAGS = -fvisibility=hidden&quot; in Makefile.
</span><br>
<span class="quotelev1">&gt; Other then that, I don't know where to begin looking at this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2856.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2854.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Reply:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
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
