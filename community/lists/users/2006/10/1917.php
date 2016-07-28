<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 10:54:08 2006" -->
<!-- isoreceived="20061003145408" -->
<!-- sent="Tue, 3 Oct 2006 10:53:58 -0400" -->
<!-- isosent="20061003145358" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="69DFE107-9F8F-4851-8CDE-1A68A65A81A8_at_ieee.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1159857893.8078.42.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Michael Kluskens (<em>mklus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-03 10:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1916.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1916.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Summary:
<br>
<p>OpenMPI 1.1.1 and 1.3a1r11943 have different bugs with regards to  
<br>
BLACS 1.1p3.
<br>
<p>1.3 fails where 1.1.1 passes and vice-versus.
<br>
<p>(1.1.1): Integer, real, double precision SDRV tests fail cases 1 &amp;  
<br>
51, then lots of errors until Integer SUM test then all tests pass.
<br>
<p>(1.3): No errors until it crashes on the Complex AMX test (which is  
<br>
after the Integer Sum test).
<br>
<p>System configuration: Debian 3.1r3 on dual opteron, gcc 3.3.5, Intel  
<br>
ifort 9.1.032.
<br>
<p>On Oct 3, 2006, at 2:44 AM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, 2006-10-02 at 18:39 -0400, Michael Kluskens wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI, BLACS, and blacstester built just fine.  Tester reports
</span><br>
<span class="quotelev2">&gt;&gt; errors for integer and real cases #1 and #51 and more for the other
</span><br>
<span class="quotelev2">&gt;&gt; types..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>&gt; is an open ticket
</span><br>
<span class="quotelev2">&gt;&gt; related to this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally someone else with the same problem!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried the suggested fix from ticket 356 but it didn't help.
</span><br>
<span class="quotelev1">&gt; I still get lots of errors in the blacstest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running on a dual-cpu opteron with Ubuntu dapper and gcc-4.0.
</span><br>
<span class="quotelev1">&gt; The tests also failed on our i386 Ubuntu breezy system with gcc-3.4
</span><br>
<p>More details of my two tests:
<br>
--------------------------------
<br>
OpenMPI 1.1.1
<br>
./configure --prefix=/opt/intel9.1/openmpi/1.1.1 F77=ifort FC=ifort -- 
<br>
with-mpi-f90-size=medium
<br>
<p>BLACS 1.1 patch 3, Bmake.inc based on Bmake.MPI-LINUX with following  
<br>
changes:
<br>
<p>BTOPdir = /opt/intel9.1/openmpi/1.1.1/BLACS
<br>
BLACSDBGLVL = 1
<br>
MPIdir = /opt/intel9.1/openmpi/1.1.1
<br>
MPILIB =
<br>
INTFACE = -DAdd_
<br>
F77            = $(MPIdir)/bin/mpif77
<br>
CC             = $(MPIdir)/bin/mpicc
<br>
CCFLAGS        = -O3
<br>
<p>--------------------------------
<br>
OpenMPI 1.3a1r11943
<br>
./configure --prefix=/opt/intel9.1/openmpi/1.3 F77=ifort FC=ifort -- 
<br>
with-mpi-f90-size=medium
<br>
<p>similar changes for Bmake.inc in BLACS.
<br>
<p>test launched in BLACS/TESTING/EXE using:
<br>
<p>mpirun --prefix /opt/intel9.1/openmpi/1.3 -np 4 xCbtest_MPI-LINUX-1
<br>
<p>No errors works much better but eventually failures with:
<br>
<p>COMPLEX AMX TESTS: BEGIN.
<br>
Signal:11 info.si_errno:0(Success) si_code:128()
<br>
Failing at addr:(nil)
<br>
Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:0xb80000
<br>
[0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0 
<br>
(opal_backtrace_print+0x1f) [0x2a95aa5c1f]
<br>
*** End of error message ***
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1916.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="1916.php">&#197;ke Sandgren: "Re: [OMPI users] BLACS &amp; OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="1936.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
