<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 14:05:12 2012" -->
<!-- isoreceived="20120210190512" -->
<!-- sent="Fri, 10 Feb 2012 11:04:54 -0800" -->
<!-- isosent="20120210190454" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)" -->
<!-- id="4F356A56.2000100_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 14:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/10/2012 9:27 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have versions 8.1.032, 9.0.024 and 9.1.042 of the Intel compilers on 
</span><br>
<span class="quotelev1">&gt; a Linux/x86 (32-bit) host.
</span><br>
<span class="quotelev1">&gt; All three can configure and build hwloc-1.3.2rc1, but all are failing 
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot; in the same way.
</span><br>
<span class="quotelev1">&gt; What I see is ton(ne)s of linker messages and every executable SEGVs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The linker messages look like:
</span><br>
<span class="quotelev2">&gt;&gt;   CC     hwloc_synthetic.o
</span><br>
<span class="quotelev2">&gt;&gt;   CCLD   hwloc_synthetic
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x1c): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_init'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x2a): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_set_synthetic'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x33): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_load'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x3c): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_check'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x46): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_get_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x64): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_get_nbobjs_by_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0x8a): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_get_obj_by_depth'
</span><br>
<span class="quotelev2">&gt;&gt; ld: hwloc_synthetic.o(.text+0xc6): unresolvable relocation against 
</span><br>
<span class="quotelev2">&gt;&gt; symbol `hwloc_topology_destroy'
</span><br>
<span class="quotelev1">&gt; Where most tests have far more of these.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the moment, I am going to assume the SEGVs are a result of the 
</span><br>
<span class="quotelev1">&gt; linker problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As compared to gcc on the same system, the only difference in 
</span><br>
<span class="quotelev1">&gt; include/private/autogen/config.h is:
</span><br>
<span class="quotelev2">&gt;&gt;  /* Whether C compiler supports symbol visibility or not */
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
<p>For comparison, tried building the OMPI 1.4.5rc5 with these Intel compilers.
<br>
icc-9.1.042: caused assertion failure in ld - let not consider this one
<br>
icc-9.0.024: PASSed &quot;make all install check clean&quot;
<br>
icc-8.1.032: PASSed &quot;make all install check clean&quot;
<br>
<p>So, I believe that the two PASS results shows that the correct 
<br>
visibility logic is &quot;known&quot; in ompi.
<br>
The key difference appears to be that ompi has decided NOT to use 
<br>
-fvisibility with these compilers:
<br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; == Symbol Visibility Feature
</span><br>
<span class="quotelev1">&gt; ============================================================================
</span><br>
<span class="quotelev1">&gt; checking if icc supports -fvisibility... no
</span><br>
<span class="quotelev1">&gt; checking enable symbol visibility... no
</span><br>
And from the ompi-1.4.5rc5 config.log:
<br>
<span class="quotelev1">&gt; configure:164594: checking if icc supports -fvisibility
</span><br>
<span class="quotelev1">&gt; configure:164624: icc -o conftest -O3 -DNDEBUG -finline-functions 
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -restrict -pthread -fvisibility=hidden     
</span><br>
<span class="quotelev1">&gt; conftest.c -lnsl -lutil &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; /tmp/iccFBKDBg.o: In function `bar':
</span><br>
<span class="quotelev1">&gt; conftest.c:(.text+0x26): undefined reference to `fputs'
</span><br>
<span class="quotelev1">&gt; ld: conftest: hidden symbol `fputs' isn't defined
</span><br>
<span class="quotelev1">&gt; ld: final link failed: Nonrepresentable section on output
</span><br>
<span class="quotelev1">&gt; configure:164631: $? = 1
</span><br>
<p>As compared to hwloc-1.3.2rc1:
<br>
<span class="quotelev1">&gt; configure:8253: checking if icc supports -fvisibility
</span><br>
<span class="quotelev1">&gt; configure:8268: icc -o conftest  -fvisibility=hidden -Werror   
</span><br>
<span class="quotelev1">&gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:8268: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:8279: result: yes
</span><br>
<p>So, my educated guess is that one needs to (back)port the configure 
<br>
logic for visibility support.
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
<li><strong>Next message:</strong> <a href="2857.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>Previous message:</strong> <a href="2855.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<li><strong>In reply to:</strong> <a href="2853.php">Paul H. Hargrove: "[hwloc-devel] 1.3.2rc1 failures w/ icc on x86 (visibility?)"</a>
<!-- nextthread="start" -->
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
