<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:52:03 2012" -->
<!-- isoreceived="20120612185203" -->
<!-- sent="Tue, 12 Jun 2012 14:51:57 -0400" -->
<!-- isosent="20120612185157" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="2E1ABF1F-49E3-4E6F-BBFD-02DAB0D7EA09_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB40187A4DF_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Date:</strong> 2012-06-12 14:51:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19513.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to be sure, though, you saw this, right?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/ms-windows.php">http://www.open-mpi.org/software/ompi/v1.6/ms-windows.php</a>
<br>
<p>There's also the README.WINDOWS.txt file in the Open MPI distribution:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/README.WINDOWS.txt">https://svn.open-mpi.org/trac/ompi/browser/trunk/README.WINDOWS.txt</a>
<br>
<p><p>On Jun 12, 2012, at 2:44 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev1">&gt; Now I get this message:
</span><br>
<span class="quotelev1">&gt; 	C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev1">&gt; 	$ mpicc hello.c -o hello
</span><br>
<span class="quotelev1">&gt; 	WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev1">&gt; 	WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev1">&gt; 	gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev1">&gt; 	mpicc: No such file or directory
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
<span class="quotelev1">&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev2">&gt;&gt; Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Vimal
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not 
</span><br>
<span class="quotelev2">&gt;&gt; found)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It does not look like you successfully built Open MPI -- it looks like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI's configure script aborted because your Fortran compiler 
</span><br>
<span class="quotelev2">&gt;&gt; wasn't
</span><br>
<span class="quotelev2">&gt;&gt; behaving:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; checking if Fortran 77 compiler supports COMPLEX*16... yes checking 
</span><br>
<span class="quotelev2">&gt;&gt; size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran 
</span><br>
<span class="quotelev2">&gt;&gt; COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
</span><br>
<span class="quotelev2">&gt;&gt; no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
</span><br>
<span class="quotelev2">&gt;&gt; 2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
</span><br>
<span class="quotelev1">&gt; .TRUE.
</span><br>
<span class="quotelev2">&gt;&gt; logical type... configure: error: Could not determine value of Fortran
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; .TRUE..  Aborting.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anything that happened after that is somewhat irrelevant because Open 
</span><br>
<span class="quotelev2">&gt;&gt; MPI didn't configure properly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking in config.log, I see why:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev2">&gt;&gt; configure:44386: gcc -DNDEBUG -g -O2 -finline-functions 
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev2">&gt;&gt; configure:44393: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev2">&gt;&gt; final link failed: Device or resource busy
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; configure:44410: $? = 1
</span><br>
<span class="quotelev2">&gt;&gt; configure:44427: error: Could not determine value of Fortran .TRUE..
</span><br>
<span class="quotelev2">&gt;&gt; Aborting.
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; All this may be irrelevant, though, because it looks like you're 
</span><br>
<span class="quotelev2">&gt;&gt; building on Windows.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In that case, you might well want to just download the OMPI Windows 
</span><br>
<span class="quotelev2">&gt;&gt; binaries.  I don't know offhand if we support building on Windows with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the normal configure / make methodology; we normally use cmake to 
</span><br>
<span class="quotelev2">&gt;&gt; build from source on Windows.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was directed to the OpenMPI website from the Boost Libraries page 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; install an MPI Installation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've followed all the steps in the installation guide to configure 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt; build MPI. When I try to compile the hello.c program which contains 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi.h&gt;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get an error message saying mpi.h does not exist I've attached the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.log, config.out, make.out , ompi_info all and make-install.out
</span><br>
<span class="quotelev2">&gt;&gt; files.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any help will be greatly appreciated!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vimal Mathew
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="19513.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19510.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
