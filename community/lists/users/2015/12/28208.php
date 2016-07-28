<?
$subject_val = "[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 15:33:37 2015" -->
<!-- isoreceived="20151231203337" -->
<!-- sent="Thu, 31 Dec 2015 20:33:33 +0000" -->
<!-- isosent="20151231203333" -->
<!-- name="Ilias Miroslav" -->
<!-- email="Miroslav.Ilias_at_[hidden]" -->
<!-- subject="[OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers" -->
<!-- id="0d9a1836eb0a4e7fb5badca9af6a262a_at_MAILBOX2.umb.sk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers<br>
<strong>From:</strong> Ilias Miroslav (<em>Miroslav.Ilias_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-31 15:33:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28207.php">anil maurya: "[OMPI users] OpenMPI Profiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear experts,
<br>
<p>while I have succeeded to build fully statically linked OpenMPI with Intel compilers:
<br>
<p><p>./configure --prefix=/home/ilias/bin/openmpi-1.10.1_intel_static --without-memory-manager CXX=icpc CC=icc F77=ifort FC=ifort LDFLAGS=--static --disable-shared --enable-static
<br>
<p><p>ilias_at_[hidden]:~/bin/openmpi-1.10.1_intel_static/bin/.ldd mpif90; ldd mpicc; ldd mpirun
<br>
not a dynamic executable
<br>
not a dynamic executable
<br>
not a dynamic executable
<br>
<p>?
<br>
I have not succeeded with PGI compilers:
<br>
<p>&nbsp;&nbsp;$ ./configure --prefix=/home/ilias/bin/openmpi-1.10.1_pgi_static CXX=pgCC CC=pgcc F77=pgf77 FC=pgf90 CPP=cpp LDFLAGS=-Bstatic_pgi --disable-shared --enable-static --without-memory-manager
<br>
<p>ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.ldd mpif90
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffc75da000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f2f0820e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f2f07f89000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so =&gt; /opt/pgi/linux86-64/13.10/lib/libnuma.so (0x00007f2f07e88000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f2f07c80000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f2f07a7c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f2f0785f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f2f074cb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f2f0842a000)
<br>
ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.ldd mpirun
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffe75ed000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007f4f264b3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x00007f4f2622e000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnuma.so =&gt; /opt/pgi/linux86-64/13.10/lib/libnuma.so (0x00007f4f2612d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x00007f4f25f25000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007f4f25d21000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007f4f25b04000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x00007f4f25770000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x00007f4f266cf000)
<br>
ilias_at_[hidden]:~/bin/openmpi-1.10.1_pgi_static/bin/.
<br>
<p><p>Any help, please ?
<br>
<p>?Miro
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28207.php">anil maurya: "[OMPI users] OpenMPI Profiling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
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
