<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 07:01:02 2012" -->
<!-- isoreceived="20120201120102" -->
<!-- sent="Wed, 01 Feb 2012 13:00:57 +0100" -->
<!-- isosent="20120201120057" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 &amp;quot;gmake check&amp;quot; failure on	Solaris-10/SPARC/gccfss" -->
<!-- id="4F292979.1000602_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="35683F4E-3946-441A-9C54-FBBA5DBF9266_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 07:00:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2753.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>In reply to:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The bitmap code uses ffs*() to find the first bit set.
<br>
Brice
<br>
<p><p>Le 01/02/2012 11:58, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Paul -- any idea what library that symbol actually lives in?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I can't find that symbol -- or anything like it -- in the hwloc code base.  Is it being pulled in by some dependent library?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 31, 2012, at 7:57 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This report is the flip-side of the problem w/ Solaris Studio compilers on x86-64.
</span><br>
<span class="quotelev2">&gt;&gt; With Solaris-10 on SPARC, I find I *can* build hwloc-1.3.1 w/ SS12.x, but instead am failing w/ gcc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that /usr/bin/gcc on this system is one from Sun, not the FSF:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-3.00$ which gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/bin/gcc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -bash-3.00$ gcc --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sparc-sun-solaris2.10-gcc (GCC) 4.0.4 (gccfss)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Copyright (C) 2006 Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
</span><br>
<span class="quotelev2">&gt;&gt; The key bit there is &quot;(gccfss)&quot; = &quot;GCC for SPARC Systems&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is a load-time missing symbol when I &quot;gmake check&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ gmake check V=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making check in src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gmake[2]: Entering directory `/home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/utils'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld.so.1: hwloc-calc: fatal: relocation error: file /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld.so.1: hwloc-distrib: fatal: relocation error: file /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: test-hwloc-distrib.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 of 2 tests failed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ========================================================
</span><br>
<span class="quotelev2">&gt;&gt; Again I am sorry I didn't get a chance to discover this in 1.3.1rc2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2753.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>In reply to:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
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
