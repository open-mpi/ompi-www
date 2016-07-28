<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 17:03:22 2012" -->
<!-- isoreceived="20120612210322" -->
<!-- sent="Tue, 12 Jun 2012 15:03:08 -0600" -->
<!-- isosent="20120612210308" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="4FD7AE8C.7040704_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57F62317-4E62-456A-BF77-44D18C2DA6DF_at_cisco.com" -->
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
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-12 17:03:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19514.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19512.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey guys, that &quot;Device or resource busy&quot; error looks suspiciously like 
<br>
an overzealous antivirus package.  That happens on Windows when linkers 
<br>
run and change the timestamps and sizes of exes and dlls (like, say, 
<br>
conftest.exe).  The antivirus software then chucks a hissy fit and locks 
<br>
the executable because it thinks it's a virus.  A few seconds later when 
<br>
nothing bad happens, it releases it again, but often too late for other 
<br>
users of the exe.
<br>
<p>If you're running antivirus software, turn it off or add an exception 
<br>
for your build directory, and try again.
<br>
<p>Damien
<br>
<p>On 12/06/2012 12:49 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Now I pass you off to Shiqing, our Windows guy...  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 12, 2012, at 2:44 PM,&lt;VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I ran OpenMPI_v1.6-1_win64.exe.
</span><br>
<span class="quotelev2">&gt;&gt; Now I get this message:
</span><br>
<span class="quotelev2">&gt;&gt; 	C9995799_at_SOUMIWHP5003567 ~/openmpi-1.6
</span><br>
<span class="quotelev2">&gt;&gt; 	$ mpicc hello.c -o hello
</span><br>
<span class="quotelev2">&gt;&gt; 	WARNING: mpicc expected to find liblammpio.* in /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt; 	WARNING: MPI-2 IO support will be disabled
</span><br>
<span class="quotelev2">&gt;&gt; 	gcc: hello.c: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; 	mpicc: No such file or directory
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
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, June 12, 2012 2:30 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Probably easier to just run the Open MPI binary installer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 12, 2012, at 2:24 PM,&lt;VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I simply download and run OpenMPI_v1.6-1_win64.exe?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is there a way to fix the Fortran compiler?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vimal
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, June 12, 2012 2:20 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It does not look like you successfully built Open MPI -- it looks like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI's configure script aborted because your Fortran compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wasn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; behaving:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if Fortran 77 compiler supports COMPLEX*16... yes checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; no checking for max Fortran MPI handle index... ( 0x7fffffff&lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for
</span><br>
<span class="quotelev2">&gt;&gt; .TRUE.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; logical type... configure: error: Could not determine value of Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .TRUE..  Aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anything that happened after that is somewhat irrelevant because Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI didn't configure properly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking in config.log, I see why:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44290: checking Fortran value for .TRUE. logical type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fno-strict-aliasing -I. -c conftest.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44393: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44403: gfortran  -o conftest conftest.o conftestf.f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reopening conftest.exe: Device or resource busy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final link failed: Device or resource busy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44410: $? = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:44427: error: Could not determine value of Fortran .TRUE..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aborting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All this may be irrelevant, though, because it looks like you're
</span><br>
<span class="quotelev3">&gt;&gt;&gt; building on Windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In that case, you might well want to just download the OMPI Windows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binaries.  I don't know offhand if we support building on Windows with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the normal configure / make methodology; we normally use cmake to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build from source on Windows.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 12, 2012, at 1:25 PM,&lt;VimalMathew_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was directed to the OpenMPI website from the Boost Libraries page
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; install an MPI Installation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've followed all the steps in the installation guide to configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build MPI. When I try to compile the hello.c program which contains
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpi.h&gt;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get an error message saying mpi.h does not exist I've attached the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; config.log, config.out, make.out , ompi_info all and make-install.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help will be greatly appreciated!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vimal Mathew
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19516.php">Shiqing Fan: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19514.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19511.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19512.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
