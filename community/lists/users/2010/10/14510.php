<?
$subject_val = "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 12:00:10 2010" -->
<!-- isoreceived="20101020160010" -->
<!-- sent="Wed, 20 Oct 2010 11:57:32 -0400" -->
<!-- isosent="20101020155732" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
<!-- id="4CBF116C.9000805_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010201338.o9KDc9Gr005132_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 11:57:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Previous message:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Can you remove the -with-threads and -enable-mpi-threads options from 
<br>
the configure line and see if that helps your 32 bit problem any?
<br>
<p>--td
<br>
On 10/20/2010 09:38 AM, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built Open MPI 1.5 on Linux x86_64 with the Oracle/Sun Studio C
</span><br>
<span class="quotelev1">&gt; compiler. Unfortunately &quot;mpiexec&quot; breaks when I run a small propgram.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 106 cc -V
</span><br>
<span class="quotelev1">&gt; cc: Sun C 5.10 Linux_i386 2009/06/03
</span><br>
<span class="quotelev1">&gt; usage: cc [ options] files.  Use 'cc -flags' for details
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 107 uname -a
</span><br>
<span class="quotelev1">&gt; Linux linpc4 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 108 mpicc -show
</span><br>
<span class="quotelev1">&gt; cc -I/usr/local/openmpi-1.5_32_cc/include -mt
</span><br>
<span class="quotelev1">&gt;    -L/usr/local/openmpi-1.5_32_cc/lib -lmpi -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev1">&gt;    -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 109 mpicc -m32 rank_size.c
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 110 mpiexec -np 2 a.out
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_base_components_close+0x8c) [0xf774ccd0]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_btl_base_close+0xc5) [0xf76bd255]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_bml_base_close+0x32) [0xf76bd112]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1.so [0xf73d971f]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_base_components_close+0x8c) [0xf774ccd0]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_pml_base_close+0xc1) [0xf76e4385]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    [0xf76889e6]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (PMPI_Finalize+0x3c) [0xf769dd4c]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [ 9] a.out(main+0x98) [0x8048a18]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf749c705]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] [11] a.out(_start+0x41) [0x8048861]
</span><br>
<span class="quotelev1">&gt; [linpc4:11564] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 0] [0xffffe410]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_base_components_close+0x8c) [0xf76bccd0]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_btl_base_close+0xc5) [0xf762d255]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_bml_base_close+0x32) [0xf762d112]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
</span><br>
<span class="quotelev1">&gt;    mca_pml_ob1.so [0xf734971f]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_base_components_close+0x8c) [0xf76bccd0]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (mca_pml_base_close+0xc1) [0xf7654385]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    [0xf75f89e6]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt;    (PMPI_Finalize+0x3c) [0xf760dd4c]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [ 9] a.out(main+0x98) [0x8048a18]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf740c705]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] [11] a.out(_start+0x41) [0x8048861]
</span><br>
<span class="quotelev1">&gt; [linpc4:11565] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 11564 on node linpc4 exited
</span><br>
<span class="quotelev1">&gt;    on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 2 total processes killed (some possibly by mpiexec during cleanup)
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 111
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;make check&quot; shows that one test failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 114 grep FAIL
</span><br>
<span class="quotelev1">&gt;    log.make-check.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 115 grep PASS
</span><br>
<span class="quotelev1">&gt;    log.make-check.Linux.x86_64.32_cc
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; PASS: dlopen_test
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev1">&gt; PASS: checksum
</span><br>
<span class="quotelev1">&gt; PASS: position
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_test
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_raw
</span><br>
<span class="quotelev1">&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 116
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following command to build the package.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f95&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev1">&gt;    --without-udapl --with-threads=posix --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;    --enable-shared --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have also built the package with gcc-4.2.0 and it seems to work
</span><br>
<span class="quotelev1">&gt; although the nfs-test failed as well. Therefore I'm not sure if
</span><br>
<span class="quotelev1">&gt; the failing test is responsible for the failure with the cc-version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_gcc \
</span><br>
<span class="quotelev1">&gt;    CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;    CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev1">&gt;    C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev1">&gt;    CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev1">&gt;    --without-udapl --with-threads=posix --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;    --enable-shared --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev1">&gt;    |&amp;  tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_gcc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 107 gcc -v
</span><br>
<span class="quotelev1">&gt; Using built-in specs.
</span><br>
<span class="quotelev1">&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configured with: ../gcc-4.2.0/configure --prefix=/usr/local/gcc-4.2.0
</span><br>
<span class="quotelev1">&gt;    --enable-languages=c,c++,java,fortran,objc --enable-java-gc=boehm
</span><br>
<span class="quotelev1">&gt;    --enable-nls --enable-libgcj --enable-threads=posix
</span><br>
<span class="quotelev1">&gt; Thread model: posix
</span><br>
<span class="quotelev1">&gt; gcc version 4.2.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 109 mpicc -show
</span><br>
<span class="quotelev1">&gt; gcc -I/usr/local/openmpi-1.5_32_gcc/include -fexceptions -pthread
</span><br>
<span class="quotelev1">&gt;    -L/usr/local/openmpi-1.5_32_gcc/lib -lmpi -ldl -Wl,--export-dynamic
</span><br>
<span class="quotelev1">&gt;    -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 110 mpicc -m32 rank_size.c
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 111 mpiexec -np 2 a.out
</span><br>
<span class="quotelev1">&gt; I'm process 0 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt; I'm process 1 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev1">&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 112 grep FAIL /.../log.make-check.Linux.x86_64.32_gcc
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 113 grep PASS /.../log.make-check.Linux.x86_64.32_gcc
</span><br>
<span class="quotelev1">&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev1">&gt; PASS: dlopen_test
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev1">&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock
</span><br>
<span class="quotelev1">&gt; PASS: atomic_spinlock_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev1">&gt; PASS: checksum
</span><br>
<span class="quotelev1">&gt; PASS: position
</span><br>
<span class="quotelev1">&gt; decode [PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_test
</span><br>
<span class="quotelev1">&gt; decode [NOT PASSED]
</span><br>
<span class="quotelev1">&gt; PASS: ddt_raw
</span><br>
<span class="quotelev1">&gt; linpc4 small_prog 114
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following small test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include&lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    int  ntasks,				/* number of parallel tasks	*/
</span><br>
<span class="quotelev1">&gt;         mytid,				/* my task id			*/
</span><br>
<span class="quotelev1">&gt;         version, subversion,		/* version of MPI standard	*/
</span><br>
<span class="quotelev1">&gt;         namelen;				/* length of processor name	*/
</span><br>
<span class="quotelev1">&gt;    char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank (MPI_COMM_WORLD,&amp;mytid);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_processor_name (processor_name,&amp;namelen);
</span><br>
<span class="quotelev1">&gt;    printf (&quot;I'm process %d of %d available processes running on %s.\n&quot;,
</span><br>
<span class="quotelev1">&gt; 	  mytid, ntasks, processor_name);
</span><br>
<span class="quotelev1">&gt;    MPI_Get_version (&amp;version,&amp;subversion);
</span><br>
<span class="quotelev1">&gt;    printf (&quot;MPI standard %d.%d is supported.\n&quot;, version, subversion);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;    return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for any help to solve the problem with the
</span><br>
<span class="quotelev1">&gt; Oracle/Sun Compiler in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14510/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14510/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Previous message:</strong> <a href="14509.php">Brian Budge: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="14506.php">Siegmar Gross: "[OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14520.php">Siegmar Gross: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
