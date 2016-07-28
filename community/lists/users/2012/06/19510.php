<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:44:53 2012" -->
<!-- isoreceived="20120612184453" -->
<!-- sent="Tue, 12 Jun 2012 14:44:42 -0400" -->
<!-- isosent="20120612184442" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB40187A4DF_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C490F17A-DB1A-4C19-B900-7702A28555E1_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:VimalMathew_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Help%20with%20buidling%20MPI(Error:%20mpi.h%20not%20found)"><em>VimalMathew_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-06-12 14:44:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19512.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran OpenMPI_v1.6-1_win64.exe.
<br>
&nbsp;Now I get this message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ mpicc hello.c -o hello
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: MPI-2 IO support will be disabled
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc: hello.c: No such file or directory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpicc: No such file or directory
<br>
<pre>
--
Vimal
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Jeff Squyres
Sent: Tuesday, June 12, 2012 2:30 PM
To: Open MPI Users
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
Probably easier to just run the Open MPI binary installer.
On Jun 12, 2012, at 2:24 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
&gt; So I simply download and run OpenMPI_v1.6-1_win64.exe?
&gt; Or is there a way to fix the Fortran compiler?
&gt; 
&gt; --
&gt; Vimal
&gt; 
&gt; 
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
&gt; On Behalf Of Jeff Squyres
&gt; Sent: Tuesday, June 12, 2012 2:20 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not 
&gt; found)
&gt; 
&gt; It does not look like you successfully built Open MPI -- it looks like
&gt; Open MPI's configure script aborted because your Fortran compiler 
&gt; wasn't
&gt; behaving:
&gt; 
&gt; -----
&gt; checking if Fortran 77 compiler supports COMPLEX*16... yes checking 
&gt; size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran 
&gt; COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
&gt; no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
&gt; 2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
.TRUE.
&gt; logical type... configure: error: Could not determine value of Fortran
&gt; .TRUE..  Aborting.
&gt; -----
&gt; 
&gt; Anything that happened after that is somewhat irrelevant because Open 
&gt; MPI didn't configure properly.
&gt; 
&gt; Looking in config.log, I see why:
&gt; 
&gt; -----
&gt; configure:44290: checking Fortran value for .TRUE. logical type
&gt; configure:44386: gcc -DNDEBUG -g -O2 -finline-functions 
&gt; -fno-strict-aliasing -I. -c conftest.c
&gt; configure:44393: $? = 0
&gt; configure:44403: gfortran  -o conftest conftest.o conftestf.f
&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
&gt; reopening conftest.exe: Device or resource busy
&gt; 
&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
&gt; final link failed: Device or resource busy
&gt; collect2: ld returned 1 exit status
&gt; configure:44410: $? = 1
&gt; configure:44427: error: Could not determine value of Fortran .TRUE..
&gt; Aborting.
&gt; -----
&gt; 
&gt; All this may be irrelevant, though, because it looks like you're 
&gt; building on Windows.
&gt; 
&gt; In that case, you might well want to just download the OMPI Windows 
&gt; binaries.  I don't know offhand if we support building on Windows with
&gt; the normal configure / make methodology; we normally use cmake to 
&gt; build from source on Windows.
&gt; 
&gt; 
&gt; 
&gt; On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; Hi,
&gt;&gt; 
&gt;&gt; I was directed to the OpenMPI website from the Boost Libraries page 
&gt;&gt; to
&gt; install an MPI Installation.
&gt;&gt; I've followed all the steps in the installation guide to configure 
&gt;&gt; and
&gt; build MPI. When I try to compile the hello.c program which contains 
&gt; &lt;mpi.h&gt;.
&gt;&gt; I get an error message saying mpi.h does not exist I've attached the 
&gt;&gt; config.log, config.out, make.out , ompi_info all and make-install.out
&gt; files.
&gt;&gt; 
&gt;&gt; Any help will be greatly appreciated!
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; Vimal Mathew
&gt;&gt; 
&gt;&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19512.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
