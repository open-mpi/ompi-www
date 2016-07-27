<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 07:47:32 2012" -->
<!-- isoreceived="20120201124732" -->
<!-- sent="Wed, 01 Feb 2012 13:47:25 +0100" -->
<!-- isosent="20120201124725" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers" -->
<!-- id="4F29345D.1010606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28A813.5050307_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 07:47:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, this should be fixed in trunk &gt;= r4230, I'll backport in other
<br>
branches soon. We didn't need add -lm for fabs() because gcc uses an
<br>
intrinsics, and libxml2 depends on libm, quite lucky.
<br>
Brice
<br>
<p><p><p>Le 01/02/2012 03:48, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 4:48 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; When Jeff Squyres indicated that ompi-1.5.5 will use hwloc-1.3.x, I
</span><br>
<span class="quotelev2">&gt;&gt; started putting hwloc-1.3.1 through my testing gauntlet.
</span><br>
<span class="quotelev2">&gt;&gt; I am sorry I didn't find this in the 1.3.1rc2, but when it came out
</span><br>
<span class="quotelev2">&gt;&gt; Dec 15 I wasn't setup as well for testing as I am now.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I have found is that with the Solaris Studio 12.2 and 12.3
</span><br>
<span class="quotelev2">&gt;&gt; compilers I see link failures in util/ from &quot;make all&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; This has been seen on both Solaris/x86-64 and Linux/x86-64, but
</span><br>
<span class="quotelev2">&gt;&gt; Solaris/SPARC seems to be OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is what I see with &quot;make V=1&quot; on Solaris:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh ../libtool  --tag=CC   --mode=link cc  -m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -o hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/libhwloc.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lkstat -llgrp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: cc -m32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lkstat -llgrp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -R/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/INST/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  symbol                             in file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fabsf                              
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ld: fatal: symbol referencing errors. No output written to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .libs/hwloc-calc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is Linux:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/bash ../libtool  --tag=CC   --mode=link cc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src  -o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-calc hwloc-calc.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/libhwloc.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool: link: cc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -lpci -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/INST/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; undefined reference to `fabsf'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem in both cases appears to be that libhwloc.so needs libm
</span><br>
<span class="quotelev2">&gt;&gt; for fabsf(), but the library dependency is not resolved.
</span><br>
<span class="quotelev2">&gt;&gt; Though the Solaris build above was configured w/ CFLAGS=-m32, setting
</span><br>
<span class="quotelev2">&gt;&gt; CFLAGS=-m64 fails in the same way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I *can* build hwloc-1.3.1 w/ gcc on the hosts where the SS12.x
</span><br>
<span class="quotelev2">&gt;&gt; compilers fail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2757.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>Previous message:</strong> <a href="2755.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="2766.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
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
