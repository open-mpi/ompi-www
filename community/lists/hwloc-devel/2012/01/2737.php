<?
$subject_val = "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 21:49:11 2012" -->
<!-- isoreceived="20120201024911" -->
<!-- sent="Tue, 31 Jan 2012 18:48:51 -0800" -->
<!-- isosent="20120201024851" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers" -->
<!-- id="4F28A813.5050307_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F288BD1.8010504_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 21:48:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2736.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4225)"</a>
<li><strong>In reply to:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The problem I described below is ALSO present in hwloc-1.4
<br>
-Paul
<br>
<p>On 1/31/2012 4:48 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; When Jeff Squyres indicated that ompi-1.5.5 will use hwloc-1.3.x, I 
</span><br>
<span class="quotelev1">&gt; started putting hwloc-1.3.1 through my testing gauntlet.
</span><br>
<span class="quotelev1">&gt; I am sorry I didn't find this in the 1.3.1rc2, but when it came out 
</span><br>
<span class="quotelev1">&gt; Dec 15 I wasn't setup as well for testing as I am now.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I have found is that with the Solaris Studio 12.2 and 12.3 
</span><br>
<span class="quotelev1">&gt; compilers I see link failures in util/ from &quot;make all&quot;.
</span><br>
<span class="quotelev1">&gt; This has been seen on both Solaris/x86-64 and Linux/x86-64, but 
</span><br>
<span class="quotelev1">&gt; Solaris/SPARC seems to be OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what I see with &quot;make V=1&quot; on Solaris:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../libtool  --tag=CC   --mode=link cc  -m32 
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src  -o 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/libhwloc.la 
</span><br>
<span class="quotelev2">&gt;&gt; -lkstat -llgrp
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: cc -m32 
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include 
</span><br>
<span class="quotelev2">&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o  
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src 
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so 
</span><br>
<span class="quotelev2">&gt;&gt; -lkstat -llgrp 
</span><br>
<span class="quotelev2">&gt;&gt; -R/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; Undefined                       first referenced
</span><br>
<span class="quotelev2">&gt;&gt;  symbol                             in file
</span><br>
<span class="quotelev2">&gt;&gt; fabsf                               
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev2">&gt;&gt; ld: fatal: symbol referencing errors. No output written to 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/hwloc-calc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is Linux:
</span><br>
<span class="quotelev2">&gt;&gt; /bin/bash ../libtool  --tag=CC   --mode=link cc  
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src  -o 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/libhwloc.la
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: cc 
</span><br>
<span class="quotelev2">&gt;&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include 
</span><br>
<span class="quotelev2">&gt;&gt; -o .libs/hwloc-calc hwloc-calc.o  
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src 
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so 
</span><br>
<span class="quotelev2">&gt;&gt; -lpci -Wl,-rpath 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/INST/lib
</span><br>
<span class="quotelev2">&gt;&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so: 
</span><br>
<span class="quotelev2">&gt;&gt; undefined reference to `fabsf'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem in both cases appears to be that libhwloc.so needs libm 
</span><br>
<span class="quotelev1">&gt; for fabsf(), but the library dependency is not resolved.
</span><br>
<span class="quotelev1">&gt; Though the Solaris build above was configured w/ CFLAGS=-m32, setting 
</span><br>
<span class="quotelev1">&gt; CFLAGS=-m64 fails in the same way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I *can* build hwloc-1.3.1 w/ gcc on the hosts where the SS12.x 
</span><br>
<span class="quotelev1">&gt; compilers fail.
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
<li><strong>Next message:</strong> <a href="2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2736.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3.2rc1r4225)"</a>
<li><strong>In reply to:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2756.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
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
