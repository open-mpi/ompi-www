<?
$subject_val = "[hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 21:51:20 2012" -->
<!-- isoreceived="20120201025120" -->
<!-- sent="Tue, 31 Jan 2012 18:51:01 -0800" -->
<!-- isosent="20120201025101" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.4 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss" -->
<!-- id="4F28A895.8070801_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F288E02.3000904_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I described below is ALSO present in hwloc-1.4
<br>
-Paul
<br>
<p>On 1/31/2012 4:57 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; This report is the flip-side of the problem w/ Solaris Studio 
</span><br>
<span class="quotelev1">&gt; compilers on x86-64.
</span><br>
<span class="quotelev1">&gt; With Solaris-10 on SPARC, I find I *can* build hwloc-1.3.1 w/ SS12.x, 
</span><br>
<span class="quotelev1">&gt; but instead am failing w/ gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that /usr/bin/gcc on this system is one from Sun, not the 
</span><br>
<span class="quotelev1">&gt; FSF:
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.00$ which gcc
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev2">&gt;&gt; -bash-3.00$ gcc --version
</span><br>
<span class="quotelev2">&gt;&gt; sparc-sun-solaris2.10-gcc (GCC) 4.0.4 (gccfss)
</span><br>
<span class="quotelev2">&gt;&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There 
</span><br>
<span class="quotelev2">&gt;&gt; is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR 
</span><br>
<span class="quotelev2">&gt;&gt; PURPOSE.
</span><br>
<span class="quotelev1">&gt; The key bit there is &quot;(gccfss)&quot; = &quot;GCC for SPARC Systems&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is a load-time missing symbol when I &quot;gmake check&quot;:
</span><br>
<span class="quotelev2">&gt;&gt; $ gmake check V=1
</span><br>
<span class="quotelev2">&gt;&gt; Making check in src
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; gmake[2]: Entering directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/utils'
</span><br>
<span class="quotelev2">&gt;&gt; ld.so.1: hwloc-calc: fatal: relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: 
</span><br>
<span class="quotelev2">&gt;&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev2">&gt;&gt; ld.so.1: hwloc-distrib: fatal: relocation error: file 
</span><br>
<span class="quotelev2">&gt;&gt; /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: 
</span><br>
<span class="quotelev2">&gt;&gt; symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev2">&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev2">&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt; ========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again I am sorry I didn't get a chance to discover this in 1.3.1rc2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="2741.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2739.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
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
