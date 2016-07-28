<?
$subject_val = "[OMPI users] cannot build Open MPI 1.5 in 64-bit mode (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 09:48:33 2010" -->
<!-- isoreceived="20101020134833" -->
<!-- sent="Wed, 20 Oct 2010 15:40:49 +0200 (CEST)" -->
<!-- isosent="20101020134049" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] cannot build Open MPI 1.5 in 64-bit mode (Linux, Oracle/Sun C)" -->
<!-- id="201010201340.o9KDenDo005141_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] cannot build Open MPI 1.5 in 64-bit mode (Linux, Oracle/Sun C)<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 09:40:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I tried to build Open MPI 1.5 on Linux x86_64 with the Oracle/Sun Studio C
<br>
compiler in 64-bit mode. Unfortunately &quot;make&quot; breaks.
<br>
<p><p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 107 cc -V
<br>
cc: Sun C 5.10 Linux_i386 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 108 uname -a
<br>
Linux linpc4 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64
<br>
&nbsp;&nbsp;x86_64 x86_64 GNU/Linux
<br>
<p>I used the following command to build the package.
<br>
<p>../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_64_cc \
<br>
&nbsp;&nbsp;--libdir=/usr/local/openmpi-1.5_64_cc/lib64 \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m64&quot; CPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m64&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f95&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;--without-udapl  --with-threads=posix --enable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-shared --enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.64_cc
<br>
<p><p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 110 grep -i warning:
<br>
&nbsp;&nbsp;log.configure.Linux.x86_64.64_cc 
<br>
configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
<br>
configure: WARNING: valgrind.h not found
<br>
configure: WARNING: Unknown architecture ... proceeding anyway
<br>
configure: WARNING: File locks may not work with NFS.  See the Installation and
<br>
configure: WARNING:  -xldscope=hidden has been added to CFLAGS
<br>
<p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 111 grep -i error:
<br>
&nbsp;&nbsp;log.configure.Linux.x86_64.64_cc
<br>
configure: error: no vtf3.h found; check path for VTF3 package first...
<br>
configure: error: no BPatch.h found; check path for Dyninst package first...
<br>
configure: error: no f2c.h found; check path for CLAPACK package first...
<br>
configure: error: MPI Correctness Checking support cannot be built inside Open 
<br>
MPI
<br>
configure: error: no papi.h found; check path for PAPI package first...
<br>
configure: error: no libcpc.h found; check path for CPC package first...
<br>
configure: error: no ctool/ctool.h found; check path for CTool package first...
<br>
<p><p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 112 grep -i warning:
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.64_cc 
<br>
<p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 113 grep -i error:
<br>
&nbsp;&nbsp;log.make.Linux.x86_64.64_cc 
<br>
cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
<br>
<p><p>linpc4 openmpi-1.5-Linux.x86_64.64_cc 118 tail -15 log.make.Linux.x86_64.64_cc
<br>
make[3]: Leaving directory `.../opal/libltdl'
<br>
make[2]: Leaving directory `.../opal/libltdl'
<br>
Making all in asm
<br>
make[2]: Entering directory `.../opal/asm'
<br>
&nbsp;&nbsp;CC     asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../../openmpi-1.5/opal/asm/generated/atomic-amd64-linux-nongas.s&quot;
<br>
&nbsp;&nbsp;atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS  atomic-asm.lo
<br>
cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
<br>
cc: cpp failed for atomic-asm.S
<br>
make[2]: *** [atomic-asm.lo] Error 1
<br>
make[2]: Leaving directory `.../opal/asm'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `.../opal'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>I have also built it with gcc-4.2.0 in 64-bit mode and it seems that
<br>
that version works.
<br>
<p>linpc4 small_prog 110 mpicc -show
<br>
gcc -I/usr/local/openmpi-1.5_64_gcc/include -fexceptions -pthread
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_64_gcc/lib64 -lmpi -ldl -Wl,--export-dynamic
<br>
&nbsp;&nbsp;-lnsl -lutil -lm -ldl
<br>
<p>linpc4 small_prog 111 mpicc -m64 rank_size.c
<br>
linpc4 small_prog 112 mpiexec -np 2 a.out
<br>
I'm process 0 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 1 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
<p><p><p>Thank you very much for any help to solve the problem with the
<br>
Oracle/Sun C compiler in advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
