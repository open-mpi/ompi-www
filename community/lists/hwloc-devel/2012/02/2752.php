<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 05:58:35 2012" -->
<!-- isoreceived="20120201105835" -->
<!-- sent="Wed, 1 Feb 2012 05:58:08 -0500" -->
<!-- isosent="20120201105808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 &amp;quot;gmake check&amp;quot; failure on Solaris-10/SPARC/gccfss" -->
<!-- id="35683F4E-3946-441A-9C54-FBBA5DBF9266_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 05:58:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2753.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -- any idea what library that symbol actually lives in?
<br>
<p>FWIW, I can't find that symbol -- or anything like it -- in the hwloc code base.  Is it being pulled in by some dependent library?
<br>
<p><p>On Jan 31, 2012, at 7:57 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; This report is the flip-side of the problem w/ Solaris Studio compilers on x86-64.
</span><br>
<span class="quotelev1">&gt; With Solaris-10 on SPARC, I find I *can* build hwloc-1.3.1 w/ SS12.x, but instead am failing w/ gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep in mind that /usr/bin/gcc on this system is one from Sun, not the FSF:
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
<span class="quotelev2">&gt;&gt; This is free software; see the source for copying conditions.  There is NO
</span><br>
<span class="quotelev2">&gt;&gt; warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
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
<span class="quotelev2">&gt;&gt; gmake[2]: Entering directory `/home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/utils'
</span><br>
<span class="quotelev2">&gt;&gt; ld.so.1: hwloc-calc: fatal: relocation error: file /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: symbol __ffssi2: referenced symbol not found
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: test-hwloc-calc.sh
</span><br>
<span class="quotelev2">&gt;&gt; ld.so.1: hwloc-distrib: fatal: relocation error: file /home/hargrove/OMPI/hwloc-1.3.1-solaris10-sparcT2-gccfss404/BLD/src/.libs/libhwloc.so.4: symbol __ffssi2: referenced symbol not found
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
<li><strong>Next message:</strong> <a href="2753.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<li><strong>Previous message:</strong> <a href="2751.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Reply:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
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
