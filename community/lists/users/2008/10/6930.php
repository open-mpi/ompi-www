<?
$subject_val = "[OMPI users] --enable-static --enable-shared using intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  9 19:56:10 2008" -->
<!-- isoreceived="20081009235610" -->
<!-- sent="Thu, 09 Oct 2008 23:56:03 +0000" -->
<!-- isosent="20081009235603" -->
<!-- name="Rene Salmon" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="[OMPI users] --enable-static --enable-shared using intel compilers" -->
<!-- id="1223596563.23963.45.camel_at_holwrs01.amoco.com" -->
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
<strong>Subject:</strong> [OMPI users] --enable-static --enable-shared using intel compilers<br>
<strong>From:</strong> Rene Salmon (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-09 19:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Reply:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to compile openmpi-1.2.7 and get both the static and shared
<br>
mpi libs using the intel compilers.  Here is my configure line:
<br>
<p>./configure CFLAGS=&quot;-static-intel&quot; CXXFLAGS=&quot;-static-intel&quot;
<br>
FFLAGS=&quot;-static-intel&quot; FCFLAGS=&quot;-static-intel&quot; CC=icc CXX=icpc F77=ifort
<br>
FC=ifort --enable-shared --enable-static --with-mx=/usr/local/mx
<br>
--with-openib=/usr --with-sge --prefix=/hpc/soft/openmpi/x86_64/1.2.7
<br>
<p>Once things get installed I do have both the static and dynamic openmpi
<br>
libs in ompi/lib dir.  The problem I am having is with the openmpi
<br>
executables in ompi/bin.
<br>
<p>For example if I do an ldd on ompi/bin/ompi_info
<br>
<p>default/bin&gt; ldd ompi_info 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /hpc/soft/openmpi/x86_64/1.2.7/lib/libmpi.so.0
<br>
(0x00002ab
<br>
7e90a5000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib64/libibverbs.so.1
<br>
(0x00002ab7e934f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00002ab7e945b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmyriexpress.so =&gt; /usr/local/mx/lib64/libmyriexpress.so
<br>
(0x00002ab7e9
<br>
565000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0
<br>
=&gt; /hpc/soft/openmpi/x86_64/1.2.7/lib/libopen-rte.so.0 
<br>
(0x00002ab7e968c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0
<br>
=&gt; /hpc/soft/openmpi/x86_64/1.2.7/lib/libopen-pal.so.0 
<br>
(0x00002ab7e9898000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00002ab7e9a0e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002ab7e9b13000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00002ab7e9c17000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00002ab7e9d2e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00002ab7e9e31000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x00002ab7e9f86000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00002ab7ea185000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00002ab7ea292000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00002ab7ea3a9000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so
<br>
=&gt; /hpc/soft/intel/x86_64/ict-3.1.1//fce/10.1.015/lib/libimf.s
<br>
o (0x00002ab7ea5db000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so
<br>
=&gt; /hpc/soft/intel/x86_64/ict-3.1.1//fce/10.1.015/lib/libsvml
<br>
.so (0x00002ab7ea93d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5
<br>
=&gt; /hpc/soft/intel/x86_64/ict-3.1.1//fce/10.1.015/lib/libi
<br>
ntlc.so.5 (0x00002ab7eaac4000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00002ab7e8f89000)
<br>
<p><p><p>on my configure line I specified &quot;-static-intel&quot; so why are the openmpi
<br>
binaries not linking these in statically?  
<br>
<p>If I run configure with --disable-static --enabled-shared (the default)
<br>
the &quot;-static-intel&quot; flag sees to work and all the intel libs get
<br>
statically linked into the openmpi executables.
<br>
<p>Also why does ompi_info dynamically link in libibverbs.so.1 and
<br>
libmyriexpress.so?  On nodes that do not have IB or MX installed
<br>
ompi_info exists immediately stating it can't find the IB or MX libs.
<br>
<p>Thanks
<br>
Rene
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6931.php">arun dhakne: "Re: [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes - possible installation problem or environment setting problem??"</a>
<li><strong>Previous message:</strong> <a href="6929.php">Jeff Squyres: "Re: [OMPI users] build failed using intel compilers on mac os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>Reply:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
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
