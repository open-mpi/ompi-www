<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 19:58:01 2012" -->
<!-- isoreceived="20120201005801" -->
<!-- sent="Tue, 31 Jan 2012 16:57:38 -0800" -->
<!-- isosent="20120201005738" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss" -->
<!-- id="4F288E02.3000904_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 19:57:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2730.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This report is the flip-side of the problem w/ Solaris Studio compilers 
<br>
on x86-64.
<br>
With Solaris-10 on SPARC, I find I *can* build hwloc-1.3.1 w/ SS12.x, 
<br>
but instead am failing w/ gcc.
<br>
<p>Keep in mind that /usr/bin/gcc on this system is one from Sun, not the FSF:
<br>
<span class="quotelev1">&gt; -bash-3.00$ which gcc
</span><br>
<span class="quotelev1">&gt; /usr/bin/gcc
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ gcc --version
</span><br>
<span class="quotelev1">&gt; sparc-sun-solaris2.10-gcc (GCC) 4.0.4 (gccfss)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev1">&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev1">&gt; PURPOSE.
</span><br>
The key bit there is &quot;(gccfss)&quot; = &quot;GCC for SPARC Systems&quot;
<br>
<p>The problem is a load-time missing symbol when I &quot;gmake check&quot;:
<br>
<span class="quotelev1">&gt; $ gmake check V=1
</span><br>
<span class="quotelev1">&gt; Making check in src
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; gmake[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/utils'
</span><br>
<span class="quotelev1">&gt; ld.so.1: hwloc-calc: fatal: relocation error: file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: 
</span><br>
<span class="quotelev1">&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev1">&gt; ld.so.1: hwloc-distrib: fatal: relocation error: file 
</span><br>
<span class="quotelev1">&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: 
</span><br>
<span class="quotelev1">&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<p>Again I am sorry I didn't get a chance to discover this in 1.3.1rc2.
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
<li><strong>Next message:</strong> <a href="2730.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="2740.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
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
