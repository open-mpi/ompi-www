<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:29:50 2012" -->
<!-- isoreceived="20120612182950" -->
<!-- sent="Tue, 12 Jun 2012 14:29:43 -0400" -->
<!-- isosent="20120612182943" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="C490F17A-DB1A-4C19-B900-7702A28555E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB40187A48E_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 14:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19513.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Probably easier to just run the Open MPI binary installer.
<br>
<p><p>On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev1">&gt; Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Vimal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It does not look like you successfully built Open MPI -- it looks like
</span><br>
<span class="quotelev1">&gt; Open MPI's configure script aborted because your Fortran compiler wasn't
</span><br>
<span class="quotelev1">&gt; behaving:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; checking if Fortran 77 compiler supports COMPLEX*16... yes checking size
</span><br>
<span class="quotelev1">&gt; of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
</span><br>
<span class="quotelev1">&gt; COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
</span><br>
<span class="quotelev1">&gt; no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
</span><br>
<span class="quotelev1">&gt; 2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for .TRUE.
</span><br>
<span class="quotelev1">&gt; logical type... configure: error: Could not determine value of Fortran
</span><br>
<span class="quotelev1">&gt; .TRUE..  Aborting.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anything that happened after that is somewhat irrelevant because Open
</span><br>
<span class="quotelev1">&gt; MPI didn't configure properly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking in config.log, I see why:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev1">&gt; configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; configure:44393: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt; reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev1">&gt; final link failed: Device or resource busy
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; configure:44410: $? = 1
</span><br>
<span class="quotelev1">&gt; configure:44427: error: Could not determine value of Fortran .TRUE..
</span><br>
<span class="quotelev1">&gt; Aborting.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev1">&gt; building on Windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In that case, you might well want to just download the OMPI Windows
</span><br>
<span class="quotelev1">&gt; binaries.  I don't know offhand if we support building on Windows with
</span><br>
<span class="quotelev1">&gt; the normal configure / make methodology; we normally use cmake to build
</span><br>
<span class="quotelev1">&gt; from source on Windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was directed to the OpenMPI website from the Boost Libraries page to
</span><br>
<span class="quotelev1">&gt; install an MPI Installation.
</span><br>
<span class="quotelev2">&gt;&gt; I've followed all the steps in the installation guide to configure and
</span><br>
<span class="quotelev1">&gt; build MPI. When I try to compile the hello.c program which contains
</span><br>
<span class="quotelev1">&gt; &lt;mpi.h&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; I get an error message saying mpi.h does not exist I've attached the 
</span><br>
<span class="quotelev2">&gt;&gt; config.log, config.out, make.out , ompi_info all and make-install.out
</span><br>
<span class="quotelev1">&gt; files.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any help will be greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Vimal Mathew
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
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
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19513.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
