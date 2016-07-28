<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:24:39 2012" -->
<!-- isoreceived="20120612182439" -->
<!-- sent="Tue, 12 Jun 2012 14:24:33 -0400" -->
<!-- isosent="20120612182433" -->
<!-- name="VimalMathew_at_[hidden]" -->
<!-- email="VimalMathew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="DE2CB86A93428A408B1E6BE8E73DCCB40187A48E_at_CLEOHSMB13.napa.ad.etn.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5AC23443-CEF1-4FC0-B4E7-723302AA43F9_at_cisco.com" -->
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
<strong>Date:</strong> 2012-06-12 14:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I simply download and run OpenMPI_v1.6-1_win64.exe?
<br>
Or is there a way to fix the Fortran compiler?
<br>
<p><pre>
--
Vimal
-----Original Message-----
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
Behalf Of Jeff Squyres
Sent: Tuesday, June 12, 2012 2:20 PM
To: Open MPI Users
Subject: Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)
It does not look like you successfully built Open MPI -- it looks like
Open MPI's configure script aborted because your Fortran compiler wasn't
behaving:
-----
checking if Fortran 77 compiler supports COMPLEX*16... yes checking size
of Fortran 77 COMPLEX*16... 16 checking alignment of Fortran
COMPLEX*16... 8 checking if Fortran 77 compiler supports COMPLEX*32...
no checking for max Fortran MPI handle index... ( 0x7fffffff &lt;
2147483647 ? 0x7fffffff : 2147483647 ) checking Fortran value for .TRUE.
logical type... configure: error: Could not determine value of Fortran
.TRUE..  Aborting.
-----
Anything that happened after that is somewhat irrelevant because Open
MPI didn't configure properly.
Looking in config.log, I see why:
-----
configure:44290: checking Fortran value for .TRUE. logical type
configure:44386: gcc -DNDEBUG -g -O2 -finline-functions
-fno-strict-aliasing -I. -c conftest.c
configure:44393: $? = 0
configure:44403: gfortran  -o conftest conftest.o conftestf.f
/usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
reopening conftest.exe: Device or resource busy
/usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld:
final link failed: Device or resource busy
collect2: ld returned 1 exit status
configure:44410: $? = 1
configure:44427: error: Could not determine value of Fortran .TRUE..
Aborting.
-----
All this may be irrelevant, though, because it looks like you're
building on Windows.
In that case, you might well want to just download the OMPI Windows
binaries.  I don't know offhand if we support building on Windows with
the normal configure / make methodology; we normally use cmake to build
from source on Windows.
On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
&gt; Hi,
&gt;  
&gt; I was directed to the OpenMPI website from the Boost Libraries page to
install an MPI Installation.
&gt; I've followed all the steps in the installation guide to configure and
build MPI. When I try to compile the hello.c program which contains
&lt;mpi.h&gt;.
&gt; I get an error message saying mpi.h does not exist I've attached the 
&gt; config.log, config.out, make.out , ompi_info all and make-install.out
files.
&gt;  
&gt; Any help will be greatly appreciated!
&gt;  
&gt; Thanks,
&gt; Vimal Mathew
&gt;  
&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19507.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19509.php">Jeff Squyres: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
