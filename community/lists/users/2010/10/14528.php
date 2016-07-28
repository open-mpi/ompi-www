<?
$subject_val = "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 21 10:11:26 2010" -->
<!-- isoreceived="20101021141126" -->
<!-- sent="Thu, 21 Oct 2010 10:10:40 -0400" -->
<!-- isosent="20101021141040" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)" -->
<!-- id="4CC049E0.6010300_at_oracle.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4CC01A2C.4090003_at_oracle.com" -->
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
<strong>Date:</strong> 2010-10-21 10:10:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14525.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;I've reproduced Siegmar's issue when I have the threads options on but 
<br>
it does not show up when they are off.  It is actually segv'ing in 
<br>
mca_btl_sm_component_close on an access at address 0 (obviously not a 
<br>
good thing).  I am going compile things with debug on and see if I can 
<br>
track this further but I think I am smelling the smoke of a bug...
<br>
<p>Siegmar, I was able to get stuff working with 32 bits when I removed 
<br>
-with-threads=posix and replaced &quot;-enable-mpi-threads&quot; with 
<br>
--disable-mpi-threads in your configure line.  I think your previous 
<br>
issue with things not building must be left over cruft.
<br>
<p>Note, my compiler hang disappeared on me.  So maybe there was an 
<br>
environmental issue on my side.
<br>
<p>--td
<br>
<p><p>On 10/21/2010 06:47 AM, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; On 10/21/2010 06:43 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Also, i'm not entirely sure what all the commands are that you are 
</span><br>
<span class="quotelev2">&gt;&gt; showing. Some of those warnings (eg in config.log) are normal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The 32 bit test failure is not, though. Terry - any idea there?
</span><br>
<span class="quotelev1">&gt; The test program is failing in MPI_Finalize which seems odd and the 
</span><br>
<span class="quotelev1">&gt; code itself looks pretty dead simple.  I am rebuilding a v1.5 
</span><br>
<span class="quotelev1">&gt; workspace without the different thread options.  Once that is done 
</span><br>
<span class="quotelev1">&gt; I'll try the test program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTW, when I tried to build with the original options Siegmar used the 
</span><br>
<span class="quotelev1">&gt; compiles looked like they hung, doh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 21, 2010, at 6:25 AM, &quot;Terry Dontje&quot; &lt;terry.dontje_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if the error below be due to crap being left over in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; source tree.  Can you do a &quot;make clean&quot;.  Note on a new checkout 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the v1.5 svn branch I was able to build 64 bit with the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; following configure line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../configure FC=f95 F77=f77 CC=cc CXX=CC --without-openib 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --without-udapl -enable-heterogeneous --enable-cxx-exceptions 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-shared --enable-orterun-prefix-by-default --with-sge 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-threads --enable-mpi-f90 --with-mpi-f90-size=small 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-progress-threads --prefix=/workspace/tdd/ctnext/v15 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/21/2010 05:38 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thank you very much for your reply.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Can you remove the -with-threads and -enable-mpi-threads options from
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the configure line and see if that helps your 32 bit problem any?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I cannot build the package when I remove these options.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 189 head -8 config.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was created by Open MPI configure 1.5, which was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated by GNU Autoconf 2.65.  Invocation command line was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $ ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CPPFLAGS= LDFLAGS=-m32 C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    OBJC_INCLUDE_PATH= MPICHHOME= CC=cc CXX=CC F77=f95 FC=f95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --without-udapl --enable-shared --enable-heterogeneous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --enable-cxx-exceptions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 190 head -8 ../*.old/config.log
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This file contains any messages produced by compilers while
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; running configure, to aid debugging if configure makes a mistake.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It was created by Open MPI configure 1.5, which was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated by GNU Autoconf 2.65.  Invocation command line was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    $ ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CFLAGS=-m32 CXXFLAGS=-m32 FFLAGS=-m32 FCFLAGS=-m32 CXXLDFLAGS=-m32
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CPPFLAGS= LDFLAGS=-m32 C_INCL_PATH= C_INCLUDE_PATH= CPLUS_INCLUDE_PATH=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    OBJC_INCLUDE_PATH= MPICHHOME= CC=cc CXX=CC F77=f95 FC=f95
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --without-udapl --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    --enable-shared --enable-heterogeneous --enable-cxx-exceptions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 194 dir log.* ../*.old/log.*
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... 132406 Oct 19 13:01
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../openmpi-1.5-Linux.x86_64.32_cc.old/log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... 195587 Oct 19 16:09
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../openmpi-1.5-Linux.x86_64.32_cc.old/log.make-check.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... 356672 Oct 19 16:07
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../openmpi-1.5-Linux.x86_64.32_cc.old/log.make-install.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... 280596 Oct 19 13:42
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../openmpi-1.5-Linux.x86_64.32_cc.old/log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... 132265 Oct 21 10:51 log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...  10890 Oct 21 10:51 log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 195 grep -i warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Corresponding Fortran 77 type (REAL*16) not supported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Skipping Fortran 90 type (REAL*16)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: valgrind.h not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: File locks may not work with NFS.  See the Installation and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING:  -xldscope=hidden has been added to CFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 196 grep -i warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../*.old/log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Did not find corresponding C type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: MPI_REAL16 and MPI_COMPLEX32 support have been disabled
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Corresponding Fortran 77 type (REAL*16) not supported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: *** Skipping Fortran 90 type (REAL*16)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: valgrind.h not found
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: Unknown architecture ... proceeding anyway
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING: File locks may not work with NFS.  See the Installation and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: WARNING:  -xldscope=hidden has been added to CFLAGS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 197 grep -i error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no libz found; check path for ZLIB package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no vtf3.h found; check path for VTF3 package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no BPatch.h found; check path for Dyninst package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no f2c.h found; check path for CLAPACK package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: MPI Correctness Checking support cannot be built inside Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no papi.h found; check path for PAPI package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no libcpc.h found; check path for CPC package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no ctool/ctool.h found; check path for CTool package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 198 grep -i error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../*.old/log.configure.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no libz found; check path for ZLIB package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no vtf3.h found; check path for VTF3 package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no BPatch.h found; check path for Dyninst package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no f2c.h found; check path for CLAPACK package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: MPI Correctness Checking support cannot be built inside Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no papi.h found; check path for PAPI package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no libcpc.h found; check path for CPC package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configure: error: no ctool/ctool.h found; check path for CTool package first...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 199
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 199 grep -i warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 200 grep -i warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../*.old/log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../opal/mca/crs/none/crs_none_module.c&quot;, line 136: warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    statement not reached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../orte/mca/errmgr/errmgr.h&quot;, line 135: warning: attribute
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    &quot;noreturn&quot; may not be applied to variable, ignored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... (much more warnings for errmgr.h, line 135)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 288: warning: initializer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../orte/tools/orte-ps/orte-ps.c&quot;, line 289: warning: initializer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    does not fit or is out of range: 0xfffffffe
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; f95: Warning: Option -rpath passed to ld, if ld is invoked,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ignored otherwise
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../ompi/mca/io/romio/romio/adio/common/ad_fstype.c&quot;, line 397:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    warning: statement not reached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 296:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    warning: statement not reached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../ompi/mca/osc/rdma/osc_rdma_data_move.c&quot;, line 678:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    warning: statement not reached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.../ompi/mca/pml/cm/pml_cm_cancel.c&quot;, line 65: warning:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    statement not reached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC: Warning: Specify a supported level of optimization when using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    -xopenmp, -xopenmp will not set an optimization level in a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    future release. Optimization level changed to 3 to support -xopenmp.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ... (a lot more of these warnings)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc: Warning: Optimizer level changed from 0 to 3 to support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    parallelized code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Above you have all different warnings if I didn't miss one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 201 grep -i error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    log.make.Linux.x86_64.32_cc cc1: error: unrecognized command line
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 202 grep -i error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    ../*.old/log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 203
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 205 tail -15
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    log.make.Linux.x86_64.32_cc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory `/.../opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/.../opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/.../opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CC     asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s &quot;.../opal/asm/generated/atomic-ia32-linux-nongas.s&quot; atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc1: error: unrecognized command line option &quot;-fno-directives-only&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cc: cpp failed for atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/.../opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/.../opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is the same error which I reported yesterday for &quot;Linux x86_64,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oracle/Sun C, 64-bit).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please let me know if you need anything else.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --td
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 10/20/2010 09:38 AM, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have built Open MPI 1.5 on Linux x86_64 with the Oracle/Sun Studio C
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; compiler. Unfortunately &quot;mpiexec&quot; breaks when I run a small propgram.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 106 cc -V
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cc: Sun C 5.10 Linux_i386 2009/06/03
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; usage: cc [ options] files.  Use 'cc -flags' for details
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 107 uname -a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Linux linpc4 2.6.27.45-0.1-default #1 SMP 2010-02-22 16:49:47 +0100 x86_64
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 108 mpicc -show
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cc -I/usr/local/openmpi-1.5_32_cc/include -mt
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     -L/usr/local/openmpi-1.5_32_cc/lib -lmpi -ldl -Wl,--export-dynamic -lnsl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 109 mpicc -m32 rank_size.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 110 mpiexec -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 0] [0xffffe410]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_base_components_close+0x8c) [0xf774ccd0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_btl_base_close+0xc5) [0xf76bd255]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_bml_base_close+0x32) [0xf76bd112]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     mca_pml_ob1.so [0xf73d971f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_base_components_close+0x8c) [0xf774ccd0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_pml_base_close+0xc1) [0xf76e4385]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     [0xf76889e6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (PMPI_Finalize+0x3c) [0xf769dd4c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [ 9] a.out(main+0x98) [0x8048a18]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf749c705]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] [11] a.out(_start+0x41) [0x8048861]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11564] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 0] [0xffffe410]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 1] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_base_components_close+0x8c) [0xf76bccd0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 2] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_btl_base_close+0xc5) [0xf762d255]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 3] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_bml_base_close+0x32) [0xf762d112]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 4] /usr/local/openmpi-1.5_32_cc/lib/openmpi/
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     mca_pml_ob1.so [0xf734971f]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 5] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_base_components_close+0x8c) [0xf76bccd0]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 6] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (mca_pml_base_close+0xc1) [0xf7654385]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 7] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     [0xf75f89e6]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 8] /usr/local/openmpi-1.5_32_cc/lib/libmpi.so.1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     (PMPI_Finalize+0x3c) [0xf760dd4c]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [ 9] a.out(main+0x98) [0x8048a18]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [10] /lib/libc.so.6(__libc_start_main+0xe5) [0xf740c705]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] [11] a.out(_start+0x41) [0x8048861]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; [linpc4:11565] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 11564 on node linpc4 exited
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 2 total processes killed (some possibly by mpiexec during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 111
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;make check&quot; shows that one test failed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 114 grep FAIL
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     log.make-check.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 115 grep PASS
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     log.make-check.Linux.x86_64.32_cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_spinlock
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_spinlock_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_math
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_cmpset
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: checksum
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: position
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: ddt_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: ddt_raw
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 openmpi-1.5-Linux.x86_64.32_cc 116
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I used the following command to build the package.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_cc \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     OBJC_INCLUDE_PATH=&quot;&quot; MPICHHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CC=&quot;cc&quot; CXX=&quot;CC&quot; F77=&quot;f95&quot; FC=&quot;f95&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --without-udapl --with-threads=posix --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --enable-shared --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     |&amp;   tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_cc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have also built the package with gcc-4.2.0 and it seems to work
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; although the nfs-test failed as well. Therefore I'm not sure if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the failing test is responsible for the failure with the cc-version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ../openmpi-1.5/configure --prefix=/usr/local/openmpi-1.5_32_gcc \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CFLAGS=&quot;-m32&quot; CXXFLAGS=&quot;-m32&quot; FFLAGS=&quot;-m32&quot; FCFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CXXLDFLAGS=&quot;-m32&quot; CPPFLAGS=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     LDFLAGS=&quot;-m32&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     C_INCL_PATH=&quot;&quot; C_INCLUDE_PATH=&quot;&quot; CPLUS_INCLUDE_PATH=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     OBJC_INCLUDE_PATH=&quot;&quot; MPIHOME=&quot;&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     CC=&quot;gcc&quot; CPP=&quot;cpp&quot; CXX=&quot;g++&quot; CXXCPP=&quot;cpp&quot; F77=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --without-udapl --with-threads=posix --enable-mpi-threads \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --enable-shared --enable-heterogeneous --enable-cxx-exceptions \
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     |&amp;   tee log.configure.$SYSTEM_ENV.$MACHINE_ENV.32_gcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 107 gcc -v
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Target: x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Configured with: ../gcc-4.2.0/configure --prefix=/usr/local/gcc-4.2.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --enable-languages=c,c++,java,fortran,objc --enable-java-gc=boehm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     --enable-nls --enable-libgcj --enable-threads=posix
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc version 4.2.0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 109 mpicc -show
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; gcc -I/usr/local/openmpi-1.5_32_gcc/include -fexceptions -pthread
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     -L/usr/local/openmpi-1.5_32_gcc/lib -lmpi -ldl -Wl,--export-dynamic
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 110 mpicc -m32 rank_size.c
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 111 mpiexec -np 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm process 0 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm process 1 of 2 available processes running on linpc4.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI standard 2.1 is supported.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 112 grep FAIL /.../log.make-check.Linux.x86_64.32_gcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 113 grep PASS /.../log.make-check.Linux.x86_64.32_gcc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: predefined_gap_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: dlopen_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_barrier
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_barrier_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_spinlock
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_spinlock_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_math
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_math_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_cmpset
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: atomic_cmpset_noinline
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: opal_datatype_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: checksum
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: position
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: ddt_test
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; decode [NOT PASSED]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PASS: ddt_raw
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; linpc4 small_prog 114
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I used the following small test program.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include&lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; int main (int argc, char *argv[])
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     int  ntasks,				/* number of parallel tasks	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          mytid,				/* my task id			
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          version, subversion,		/* version of MPI standard	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;          namelen;				/* length of processor name	
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; */
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     char processor_name[MPI_MAX_PROCESSOR_NAME];
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Init (&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Comm_rank (MPI_COMM_WORLD,&amp;mytid);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Comm_size (MPI_COMM_WORLD,&amp;ntasks);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Get_processor_name (processor_name,&amp;namelen);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     printf (&quot;I'm process %d of %d available processes running on %s.\n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 	  mytid, ntasks, processor_name);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Get_version (&amp;version,&amp;subversion);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     printf (&quot;MPI standard %d.%d is supported.\n&quot;, version, subversion);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;     return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you very much for any help to solve the problem with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Oracle/Sun Compiler in advance.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Best regards
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oracle
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Emailterry.dontje_at_[hidden]  &lt;mailto:terry.dontje_at_[hidden]&gt;  &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mime-attachment.gif&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14528/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14528/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Previous message:</strong> <a href="14527.php">Storm Zhang: "Re: [OMPI users] Question about MPI_Barrier"</a>
<li><strong>In reply to:</strong> <a href="14525.php">Terry Dontje: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
<li><strong>Reply:</strong> <a href="14529.php">Jeff Squyres: "Re: [OMPI users] segmentation fault in mpiexec (Linux, Oracle/Sun C)"</a>
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
