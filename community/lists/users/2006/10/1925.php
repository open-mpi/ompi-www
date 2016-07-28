<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  3 17:44:07 2006" -->
<!-- isoreceived="20061003214407" -->
<!-- sent="Tue, 3 Oct 2006 17:43:56 -0400" -->
<!-- isosent="20061003214356" -->
<!-- name="Michael Kluskens" -->
<!-- email="mklus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp;amp; 1.3" -->
<!-- id="1FB5C68C-6414-4A3C-B920-BFA807B7EB6D_at_ieee.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C14804B9.294E1%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-10-03 17:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1924.php">Caird, Andrew J: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Additional note on the the BLACS vs. OpenMPI 1.1.1 &amp; 1.3 problems:
<br>
<p>The BLACS install program xtc_CsameF77  says to not use -DCsameF77  
<br>
with OpenMPI; however, because of an oversight I used it in my first  
<br>
tests -- for OpenMPI 1.1.1 the errors are the same with and without  
<br>
this setting; however, without it the tester program is very slow  
<br>
with OpenMPI 1.1.1 or hangs at &quot;RUNNING REPEATABLE SUM TEST&quot; near the  
<br>
end.   OpenMPI 1.1.2rc1 behaved nearly identically.
<br>
<p>With regards to OpenMPI 1.3, not using -DCsameF77 (that is setting  
<br>
TRANSCOMM blank), prevents the crash I observed earlier; however,  
<br>
massive errors begin at the &quot;DOUBLE COMPLEX AMX&quot; tests and then the  
<br>
auxiliary tests at the end are very slow or hangs at &quot;RUNNING  
<br>
REPEATABLE SUM TEST&quot;.
<br>
<p>I don't know enough about the internals of OpenMPI to understand the  
<br>
following discussion or to understand if the install program  
<br>
xtc_CsameF77 works correctly with OpenMPI:
<br>
<p>#  If you know that your MPI uses the same handles for fortran and C
<br>
#  communicators, you can replace the empty macro definition below with
<br>
#  the macro definition on the following line.
<br>
&nbsp;&nbsp;&nbsp;TRANSCOMM = -DCSameF77
<br>
<p><p>The complete details are below:
<br>
<p># If you know something about your system, you may make it easier for  
<br>
the
<br>
#  BLACS to translate between C and fortran communicators.  If the empty
<br>
#  macro defininition is left alone, this translation will cause the C
<br>
#  BLACS to globally block for MPI_COMM_WORLD on calls to BLACS_GRIDINIT
<br>
#  and BLACS_GRIDMAP.  If you choose one of the options for translating
<br>
#  the context, neither the C or fortran calls will globally block.
<br>
#  If you are using MPICH, or a derivitive system, you can replace the
<br>
#  empty macro definition below with the following (note that if you let
<br>
#  MPICH do the translation between C and fortran, you must also  
<br>
indicate
<br>
#  here if your system has pointers that are longer than integers.   
<br>
If so,
<br>
#  define -DPOINTER_64_BITS=1.)  For help on setting TRANSCOMM, you can
<br>
#  run BLACS/INSTALL/xtc_CsameF77 and BLACS/INSTALL/xtc_UseMpich as
<br>
#  explained in BLACS/INSTALL/README.
<br>
#   TRANSCOMM = -DUseMpich
<br>
#
<br>
#  If you know that your MPI uses the same handles for fortran and C
<br>
#  communicators, you can replace the empty macro definition below with
<br>
#  the macro definition on the following line.
<br>
&nbsp;&nbsp;&nbsp;TRANSCOMM = -DCSameF77
<br>
#   
<br>
-----------------------------------------------------------------------
<br>
#  TRANSCOMM =
<br>
<p>Michael
<br>
<p>ps. I have successfully tested MPICH2 1.0.4p1 with BLACS 1.1p3 on the  
<br>
same machine with same compilers.
<br>
<p><p>On Oct 3, 2006, at 12:14 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Michael -- I've updated ticket 356 with this info for v1.1, and
</span><br>
<span class="quotelev1">&gt; created ticket 464 for the trunk (v1.3) issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/356">https://svn.open-mpi.org/trac/ompi/ticket/356</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/464">https://svn.open-mpi.org/trac/ompi/ticket/464</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 10/3/06 10:53 AM, &quot;Michael Kluskens&quot; &lt;mklus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.1 and 1.3a1r11943 have different bugs with regards to
</span><br>
<span class="quotelev2">&gt;&gt; BLACS 1.1p3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.3 fails where 1.1.1 passes and vice-versus.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1.1.1): Integer, real, double precision SDRV tests fail cases 1 &amp;
</span><br>
<span class="quotelev2">&gt;&gt; 51, then lots of errors until Integer SUM test then all tests pass.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (1.3): No errors until it crashes on the Complex AMX test (which is
</span><br>
<span class="quotelev2">&gt;&gt; after the Integer Sum test).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; System configuration: Debian 3.1r3 on dual opteron, gcc 3.3.5, Intel
</span><br>
<span class="quotelev2">&gt;&gt; ifort 9.1.032.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2006, at 2:44 AM, &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, 2006-10-02 at 18:39 -0400, Michael Kluskens wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI, BLACS, and blacstester built just fine.  Tester reports
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; errors for integer and real cases #1 and #51 and more for the other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; types..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://svn.open-mpi.org/trac/ompi/ticket/356">http://svn.open-mpi.org/trac/ompi/ticket/356</a>&gt; is an open ticket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; related to this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Finally someone else with the same problem!!!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried the suggested fix from ticket 356 but it didn't help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I still get lots of errors in the blacstest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running on a dual-cpu opteron with Ubuntu dapper and gcc-4.0.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tests also failed on our i386 Ubuntu breezy system with gcc-3.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More details of my two tests:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/intel9.1/openmpi/1.1.1 F77=ifort  
</span><br>
<span class="quotelev2">&gt;&gt; FC=ifort --
</span><br>
<span class="quotelev2">&gt;&gt; with-mpi-f90-size=medium
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BLACS 1.1 patch 3, Bmake.inc based on Bmake.MPI-LINUX with following
</span><br>
<span class="quotelev2">&gt;&gt; changes:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTOPdir = /opt/intel9.1/openmpi/1.1.1/BLACS
</span><br>
<span class="quotelev2">&gt;&gt; BLACSDBGLVL = 1
</span><br>
<span class="quotelev2">&gt;&gt; MPIdir = /opt/intel9.1/openmpi/1.1.1
</span><br>
<span class="quotelev2">&gt;&gt; MPILIB =
</span><br>
<span class="quotelev2">&gt;&gt; INTFACE = -DAdd_
</span><br>
<span class="quotelev2">&gt;&gt; F77            = $(MPIdir)/bin/mpif77
</span><br>
<span class="quotelev2">&gt;&gt; CC             = $(MPIdir)/bin/mpicc
</span><br>
<span class="quotelev2">&gt;&gt; CCFLAGS        = -O3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.3a1r11943
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/intel9.1/openmpi/1.3 F77=ifort FC=ifort --
</span><br>
<span class="quotelev2">&gt;&gt; with-mpi-f90-size=medium
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; similar changes for Bmake.inc in BLACS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; test launched in BLACS/TESTING/EXE using:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --prefix /opt/intel9.1/openmpi/1.3 -np 4 xCbtest_MPI-LINUX-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No errors works much better but eventually failures with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX AMX TESTS: BEGIN.
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:128()
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:(nil)
</span><br>
<span class="quotelev2">&gt;&gt; Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
</span><br>
<span class="quotelev2">&gt;&gt; Failing at addr:0xb80000
</span><br>
<span class="quotelev2">&gt;&gt; [0] func:/opt/intel9.1/openmpi/1.3/lib/libopal.so.0
</span><br>
<span class="quotelev2">&gt;&gt; (opal_backtrace_print+0x1f) [0x2a95aa5c1f]
</span><br>
<span class="quotelev2">&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Michael
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
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<li><strong>Previous message:</strong> <a href="1924.php">Caird, Andrew J: "Re: [OMPI users] IB HCA support"</a>
<li><strong>In reply to:</strong> <a href="1918.php">Jeff Squyres: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1926.php">Harald Forbert: "Re: [OMPI users] BLACS vs. OpenMPI 1.1.1 &amp; 1.3"</a>
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
