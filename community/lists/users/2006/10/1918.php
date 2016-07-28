<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 12:14:56 2006" -->
<!-- isoreceived="20061003161456" -->
<!-- sent="Tue, 03 Oct 2006 12:14:49 -0400" -->
<!-- isosent="20061003161449" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="C14804B9.294E1%jsquyres_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69DFE107-9F8F-4851-8CDE-1A68A65A81A8_at_ieee.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-03 12:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1919.php">Brian Barrett: "Re: [OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Michael -- I've updated ticket 356 with this info for v1.1, and
<br>
created ticket 464 for the trunk (v1.3) issue.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/356">https://svn.open-mpi.org/trac/ompi/ticket/356</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/464">https://svn.open-mpi.org/trac/ompi/ticket/464</a>
<br>
<p>On 10/3/06 10:53 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Summary:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1 and 1.3a1r11943 have different bugs with regards to
</span><br>
<span class="quotelev1">&gt; BLACS 1.1p3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1.3 fails where 1.1.1 passes and vice-versus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1.1.1): Integer, real, double precision SDRV tests fail cases 1 &amp;
</span><br>
<span class="quotelev1">&gt; 51, then lots of errors until Integer SUM test then all tests pass.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1.3): No errors until it crashes on the Complex AMX test (which is
</span><br>
<span class="quotelev1">&gt; after the Integer Sum test).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; System configuration: Debian 3.1r3 on dual opteron, gcc 3.3.5, Intel
</span><br>
<span class="quotelev1">&gt; ifort 9.1.032.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 3, 2006, at 2:44 AM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, 2006-10-02 at 18:39 -0400, Michael Kluskens wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI, BLACS, and blacstester built just fine.  Tester reports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors for integer and real cases #1 and #51 and more for the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>&gt; is an open ticket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; related to this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally someone else with the same problem!!!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried the suggested fix from ticket 356 but it didn't help.
</span><br>
<span class="quotelev2">&gt;&gt; I still get lots of errors in the blacstest.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm running on a dual-cpu opteron with Ubuntu dapper and gcc-4.0.
</span><br>
<span class="quotelev2">&gt;&gt; The tests also failed on our i386 Ubuntu breezy system with gcc-3.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details of my two tests:
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/intel9.1/openmpi/1.1.1 F77=ifort FC=ifort --
</span><br>
<span class="quotelev1">&gt; with-mpi-f90-size=medium
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BLACS 1.1 patch 3, Bmake.inc based on Bmake.MPI-LINUX with following
</span><br>
<span class="quotelev1">&gt; changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTOPdir = /opt/intel9.1/openmpi/1.1.1/BLACS
</span><br>
<span class="quotelev1">&gt; BLACSDBGLVL = 1
</span><br>
<span class="quotelev1">&gt; MPIdir = /opt/intel9.1/openmpi/1.1.1
</span><br>
<span class="quotelev1">&gt; MPILIB =
</span><br>
<span class="quotelev1">&gt; INTFACE = -DAdd_
</span><br>
<span class="quotelev1">&gt; F77            = $(MPIdir)/bin/mpif77
</span><br>
<span class="quotelev1">&gt; CC             = $(MPIdir)/bin/mpicc
</span><br>
<span class="quotelev1">&gt; CCFLAGS        = -O3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3a1r11943
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/intel9.1/openmpi/1.3 F77=ifort FC=ifort --
</span><br>
<span class="quotelev1">&gt; with-mpi-f90-size=medium
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; similar changes for Bmake.inc in BLACS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; test launched in BLACS/TESTING/EXE using:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /opt/intel9.1/openmpi/1.3 -np 4 xCbtest_MPI-LINUX-1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No errors works much better but eventually failures with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:128()
</span><br>
<span class="quotelev1">&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev1">&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev1">&gt; Failing at addr:0xb80000
</span><br>
<span class="quotelev1">&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev1">&gt; (opal_backtrace_print+0x1f) [0x2a95aa5c1f]
</span><br>
<span class="quotelev1">&gt; *** End of error message ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
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
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1919.php">Brian Barrett: "Re: [OMPI users] OpenMPI(1.1.1) and Xgrid"</a>
<li><strong>Previous message:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>In reply to:</strong> <a href="1917.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Reply:</strong> <a href="1925.php">Michael Kluskens: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
