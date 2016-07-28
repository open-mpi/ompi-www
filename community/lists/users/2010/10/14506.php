<?
$subject_val = "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 09:46:02 2010" -->
<!-- isoreceived="20101020134602" -->
<!-- sent="Wed, 20 Oct 2010 15:38:09 +0200 (CEST)" -->
<!-- isosent="20101020133809" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
<!-- id="201010201338.o9KDc9Gr005132_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 09:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14507.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 in 64-bit mode (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe reply:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe reply:</strong> <a href="14530.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built Open MPI 1.5 on Linux x86_64 with the Oracle/Sun Studio C
<br>
compiler. Unfortunately &quot;mpiexec&quot; breaks when I run a small propgram.
<br>
<p>linpc4 small_prog 106 cc -V
<br>
cc: Sun C 5.10 Linux_i386 2009/06/03
<br>
usage: cc [ options] files.  Use 'cc -flags' for details
<br>
<p>linpc4 small_prog 107 uname -a
<br>
Linux linpc4 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64
<br>
x86_64 x86_64 GNU/Linux
<br>
<p>linpc4 small_prog 108 mpicc -show
<br>
cc -I/usr/local/openmpi-1.5_32_cc/include -mt
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_32_cc/lib -lmpi -ldl -Wl,--export-dynamic -lnsl
<br>
&nbsp;&nbsp;-lutil -lm -ldl
<br>
<p>linpc4 small_prog 109 mpicc -m32 rank_size.c 
<br>
linpc4 small_prog 110 mpiexec -np 2 a.out
<br>
I'm process 0 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 1 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
[linpc4:11564] *** Process received signal ***
<br>
[linpc4:11564] Signal: Segmentation fault (11)
<br>
[linpc4:11564] Signal code:  (128)
<br>
[linpc4:11564] Failing at address: (nil)
<br>
[linpc4:11565] *** Process received signal ***
<br>
[linpc4:11565] Signal: Segmentation fault (11)
<br>
[linpc4:11565] Signal code:  (128)
<br>
[linpc4:11565] Failing at address: (nil)
<br>
[linpc4:11564] [ 0] [0xffffe410]
<br>
[linpc4:11564] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_base_components_close+0x8c) [0xf774ccd0]
<br>
[linpc4:11564] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_btl_base_close+0xc5) [0xf76bd255]
<br>
[linpc4:11564] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_bml_base_close+0x32) [0xf76bd112]
<br>
[linpc4:11564] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
<br>
&nbsp;&nbsp;mca_pml_ob1.so [0xf73d971f]
<br>
[linpc4:11564] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_base_components_close+0x8c) [0xf774ccd0]
<br>
[linpc4:11564] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_pml_base_close+0xc1) [0xf76e4385]
<br>
[linpc4:11564] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;[0xf76889e6]
<br>
[linpc4:11564] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(PMPI_Finalize+0x3c) [0xf769dd4c]
<br>
[linpc4:11564] [ 9] a.out(main+0x98) [0x8048a18]
<br>
[linpc4:11564] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf749c705]
<br>
[linpc4:11564] [11] a.out(_start+0x41) [0x8048861]
<br>
[linpc4:11564] *** End of error message ***
<br>
[linpc4:11565] [ 0] [0xffffe410]
<br>
[linpc4:11565] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_base_components_close+0x8c) [0xf76bccd0]
<br>
[linpc4:11565] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_btl_base_close+0xc5) [0xf762d255]
<br>
[linpc4:11565] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_bml_base_close+0x32) [0xf762d112]
<br>
[linpc4:11565] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
<br>
&nbsp;&nbsp;mca_pml_ob1.so [0xf734971f]
<br>
[linpc4:11565] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_base_components_close+0x8c) [0xf76bccd0]
<br>
[linpc4:11565] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(mca_pml_base_close+0xc1) [0xf7654385]
<br>
[linpc4:11565] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;[0xf75f89e6]
<br>
[linpc4:11565] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
<br>
&nbsp;&nbsp;(PMPI_Finalize+0x3c) [0xf760dd4c]
<br>
[linpc4:11565] [ 9] a.out(main+0x98) [0x8048a18]
<br>
[linpc4:11565] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf740c705]
<br>
[linpc4:11565] [11] a.out(_start+0x41) [0x8048861]
<br>
[linpc4:11565] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 11564 on node linpc4 exited
<br>
&nbsp;&nbsp;on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
2 total processes killed (some possibly by mpiexec during cleanup)
<br>
linpc4 small_prog 111 
<br>
<p><p>&quot;make check&quot; shows that one test failed.
<br>
<p>linpc4 openmpi-1.5-Linux.x86_64.32_cc 114 grep FAIL
<br>
&nbsp;&nbsp;log.make-check.Linux.x86_64.32_cc  
<br>
FAIL: opal_path_nfs
<br>
linpc4 openmpi-1.5-Linux.x86_64.32_cc 115 grep PASS
<br>
&nbsp;&nbsp;log.make-check.Linux.x86_64.32_cc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset
<br>
PASS: atomic_cmpset_noinline
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test
<br>
PASS: checksum
<br>
PASS: position
<br>
decode [PASSED]
<br>
PASS: ddt_test
<br>
decode [PASSED]
<br>
PASS: ddt_raw
<br>
linpc4 openmpi-1.5-Linux.x86_64.32_cc 116 
<br>
<p>I used the following command to build the package.
<br>
<p>../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f95&quot; FC=&quot;f95&quot; \
<br>
&nbsp;&nbsp;--without-udapl --with-threads=posix --enable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-shared --enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
<br>
<p>I have also built the package with gcc-4.2.0 and it seems to work
<br>
although the nfs-test failed as well. Therefore I'm not sure if
<br>
the failing test is responsible for the failure with the cc-version.
<br>
<p>../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_gcc \
<br>
&nbsp;&nbsp;CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
<br>
&nbsp;&nbsp;LDFLAGS=&quot;-m32&quot; \
<br>
&nbsp;&nbsp;C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
<br>
&nbsp;&nbsp;OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
<br>
&nbsp;&nbsp;CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
<br>
&nbsp;&nbsp;--without-udapl --with-threads=posix --enable-mpi-threads \
<br>
&nbsp;&nbsp;--enable-shared --enable-heterogeneous --enable-cxx-exceptions \
<br>
&nbsp;&nbsp;|&amp; tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_gcc
<br>
<p>linpc4 small_prog 107 gcc -v
<br>
Using built-in specs.
<br>
Target: x86_64-unknown-linux-gnu
<br>
Configured with: ../gcc-4.2.0/configure --prefix=/usr/local/gcc-4.2.0
<br>
&nbsp;&nbsp;--enable-languages=c,c++,java,fortran,objc --enable-java-gc=boehm
<br>
&nbsp;&nbsp;--enable-nls --enable-libgcj --enable-threads=posix
<br>
Thread model: posix
<br>
gcc version 4.2.0
<br>
<p>linpc4 small_prog 109 mpicc -show
<br>
gcc -I/usr/local/openmpi-1.5_32_gcc/include -fexceptions -pthread
<br>
&nbsp;&nbsp;-L/usr/local/openmpi-1.5_32_gcc/lib -lmpi -ldl -Wl,--export-dynamic
<br>
&nbsp;&nbsp;-lnsl -lutil -lm -ldl
<br>
<p>linpc4 small_prog 110 mpicc -m32 rank_size.c 
<br>
linpc4 small_prog 111 mpiexec -np 2 a.out
<br>
I'm process 0 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
I'm process 1 of 2 available processes running on linpc4.
<br>
MPI standard 2.1 is supported.
<br>
<p>linpc4 small_prog 112 grep FAIL /.../log.make-check.Linux.x86_64.32_gcc
<br>
FAIL: opal_path_nfs
<br>
linpc4 small_prog 113 grep PASS /.../log.make-check.Linux.x86_64.32_gcc
<br>
PASS: predefined_gap_test
<br>
PASS: dlopen_test
<br>
PASS: atomic_barrier
<br>
PASS: atomic_barrier_noinline
<br>
PASS: atomic_spinlock
<br>
PASS: atomic_spinlock_noinline
<br>
PASS: atomic_math
<br>
PASS: atomic_math_noinline
<br>
PASS: atomic_cmpset
<br>
PASS: atomic_cmpset_noinline
<br>
decode [PASSED]
<br>
PASS: opal_datatype_test
<br>
PASS: checksum
<br>
PASS: position
<br>
decode [PASSED]
<br>
PASS: ddt_test
<br>
decode [NOT PASSED]
<br>
PASS: ddt_raw
<br>
linpc4 small_prog 114 
<br>
<p><p>I used the following small test program.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main (int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;int  ntasks,				/* number of parallel tasks	*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid,				/* my task id			*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;version, subversion,		/* version of MPI standard	*/
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;namelen;				/* length of processor name	*/
<br>
&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;mytid);
<br>
&nbsp;&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;ntasks);
<br>
&nbsp;&nbsp;MPI_Get_processor_name (processor_name, &amp;namelen);
<br>
&nbsp;&nbsp;printf (&quot;I'm process %d of %d available processes running on %s.\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mytid, ntasks, processor_name);
<br>
&nbsp;&nbsp;MPI_Get_version (&amp;version, &amp;subversion);
<br>
&nbsp;&nbsp;printf (&quot;MPI standard %d.%d is supported.\n&quot;, version, subversion);
<br>
&nbsp;&nbsp;MPI_Finalize ();
<br>
&nbsp;&nbsp;return EXIT_SUCCESS;
<br>
}
<br>
<p><p>Thank you very much for any help to solve the problem with the
<br>
Oracle/Sun Compiler in advance.
<br>
<p><p>Best regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14507.php">Siegmar Gross: "[OMPI users] cannot build Open MPI 1.5 in 64-bit mode (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14508.php">Ralph Castain: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14510.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe reply:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Maybe reply:</strong> <a href="14530.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
