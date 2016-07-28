<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 16:20:03 2012" -->
<!-- isoreceived="20120201212003" -->
<!-- sent="Wed, 01 Feb 2012 13:19:46 -0800" -->
<!-- isosent="20120201211946" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers" -->
<!-- id="4F29AC72.8070509_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29345D.1010606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 16:19:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2765.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can confirm this appears to be fixed in the &quot;1.5a1r4236M&quot; tarball 
<br>
which Jeff provided off-list.
<br>
-Paul
<br>
<p>On 2/1/2012 4:47 AM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Thanks, this should be fixed in trunk&gt;= r4230, I'll backport in other
</span><br>
<span class="quotelev1">&gt; branches soon. We didn't need add -lm for fabs() because gcc uses an
</span><br>
<span class="quotelev1">&gt; intrinsics, and libxml2 depends on libm, quite lucky.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/02/2012 03:48, Paul H. Hargrove a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/31/2012 4:48 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When Jeff Squyres indicated that ompi-1.5.5 will use hwloc-1.3.x, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started putting hwloc-1.3.1 through my testing gauntlet.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am sorry I didn't find this in the 1.3.1rc2, but when it came out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dec 15 I wasn't setup as well for testing as I am now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I have found is that with the Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers I see link failures in util/ from &quot;make all&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This has been seen on both Solaris/x86-64 and Linux/x86-64, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris/SPARC seems to be OK.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is what I see with &quot;make V=1&quot; on Solaris:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ../libtool  --tag=CC   --mode=link cc  -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/libhwloc.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lkstat -llgrp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: cc -m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lkstat -llgrp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -R/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/INST/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   symbol                             in file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; fabsf
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ld: fatal: symbol referencing errors. No output written to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/hwloc-calc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is Linux:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/bash ../libtool  --tag=CC   --mode=link cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src  -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/libhwloc.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lpci -Wl,-rpath
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Wl,/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/INST/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; undefined reference to `fabsf'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem in both cases appears to be that libhwloc.so needs libm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for fabsf(), but the library dependency is not resolved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though the Solaris build above was configured w/ CFLAGS=-m32, setting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-m64 fails in the same way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I *can* build hwloc-1.3.1 w/ gcc on the hosts where the SS12.x
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers fail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
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
<li><strong>Next message:</strong> <a href="2767.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 install failures on Solaris-10"</a>
<li><strong>Previous message:</strong> <a href="2765.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>In reply to:</strong> <a href="2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
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
