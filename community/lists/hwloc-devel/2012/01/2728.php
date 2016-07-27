<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 19:48:37 2012" -->
<!-- isoreceived="20120201004837" -->
<!-- sent="Tue, 31 Jan 2012 16:48:17 -0800" -->
<!-- isosent="20120201004817" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers" -->
<!-- id="4F288BD1.8010504_at_lbl.gov" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 19:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2727.php">Brice Goglin: "Re: [hwloc-devel] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When Jeff Squyres indicated that ompi-1.5.5 will use hwloc-1.3.x, I 
<br>
started putting hwloc-1.3.1 through my testing gauntlet.
<br>
I am sorry I didn't find this in the 1.3.1rc2, but when it came out Dec 
<br>
15 I wasn't setup as well for testing as I am now.
<br>
<p>What I have found is that with the Solaris Studio 12.2 and 12.3 
<br>
compilers I see link failures in util/ from &quot;make all&quot;.
<br>
This has been seen on both Solaris/x86-64 and Linux/x86-64, but 
<br>
Solaris/SPARC seems to be OK.
<br>
<p>Here is what I see with &quot;make V=1&quot; on Solaris:
<br>
<span class="quotelev1">&gt; /bin/sh ../libtool  --tag=CC   --mode=link cc  -m32 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include 
</span><br>
<span class="quotelev1">&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src  -o 
</span><br>
<span class="quotelev1">&gt; hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/libhwloc.la 
</span><br>
<span class="quotelev1">&gt; -lkstat -llgrp
</span><br>
<span class="quotelev1">&gt; libtool: link: cc -m32 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/hwloc-1.3.1/include 
</span><br>
<span class="quotelev1">&gt; -o .libs/hwloc-calc hwloc-calc.o  
</span><br>
<span class="quotelev1">&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so 
</span><br>
<span class="quotelev1">&gt; -lkstat -llgrp 
</span><br>
<span class="quotelev1">&gt; -R/home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/INST/lib
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;  symbol                             in file
</span><br>
<span class="quotelev1">&gt; fabsf                               
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-solaris11-x86-ib-ss12u2/BLD/src/.libs/libhwloc.so
</span><br>
<span class="quotelev1">&gt; ld: fatal: symbol referencing errors. No output written to 
</span><br>
<span class="quotelev1">&gt; .libs/hwloc-calc
</span><br>
<p>Here is Linux:
<br>
<span class="quotelev1">&gt; /bin/bash ../libtool  --tag=CC   --mode=link cc  
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include 
</span><br>
<span class="quotelev1">&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src  -o 
</span><br>
<span class="quotelev1">&gt; hwloc-calc hwloc-calc.o 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/libhwloc.la
</span><br>
<span class="quotelev1">&gt; libtool: link: cc 
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/hwloc-1.3.1/include 
</span><br>
<span class="quotelev1">&gt; -o .libs/hwloc-calc hwloc-calc.o  
</span><br>
<span class="quotelev1">&gt; -L/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src 
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so 
</span><br>
<span class="quotelev1">&gt; -lpci -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/INST/lib
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/hwloc-1.3.1-linux-x86_64-ss12u3/BLD/src/.libs/libhwloc.so: 
</span><br>
<span class="quotelev1">&gt; undefined reference to `fabsf'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<p>The problem in both cases appears to be that libhwloc.so needs libm for 
<br>
fabsf(), but the library dependency is not resolved.
<br>
Though the Solaris build above was configured w/ CFLAGS=-m32, setting 
<br>
CFLAGS=-m64 fails in the same way.
<br>
<p>I *can* build hwloc-1.3.1 w/ gcc on the hosts where the SS12.x compilers 
<br>
fail.
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
<li><strong>Next message:</strong> <a href="2729.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2727.php">Brice Goglin: "Re: [hwloc-devel] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
<li><strong>Reply:</strong> <a href="2737.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.4 build failure w/ Solaris Studio compilers"</a>
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
