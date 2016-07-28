<?
$subject_val = "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 12 14:19:55 2012" -->
<!-- isoreceived="20120612181955" -->
<!-- sent="Tue, 12 Jun 2012 14:19:45 -0400" -->
<!-- isosent="20120612181945" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)" -->
<!-- id="5AC23443-CEF1-4FC0-B4E7-723302AA43F9_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="DE2CB86A93428A408B1E6BE8E73DCCB40187A3D9_at_CLEOHSMB13.napa.ad.etn.com" -->
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
<strong>Date:</strong> 2012-06-12 14:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19506.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It does not look like you successfully built Open MPI -- it looks like Open MPI's configure script aborted because your Fortran compiler wasn't behaving:
<br>
<p>-----
<br>
checking if Fortran 77 compiler supports COMPLEX*16... yes
<br>
checking size of Fortran 77 COMPLEX*16... 16
<br>
checking alignment of Fortran COMPLEX*16... 8
<br>
checking if Fortran 77 compiler supports COMPLEX*32... no
<br>
checking for max Fortran MPI handle index... ( 0x7fffffff &lt; 2147483647 ? 0x7fffffff : 2147483647 )
<br>
checking Fortran value for .TRUE. logical type... configure: error: Could not determine value of Fortran .TRUE..  Aborting.
<br>
-----
<br>
<p>Anything that happened after that is somewhat irrelevant because Open MPI didn't configure properly.
<br>
<p>Looking in config.log, I see why:
<br>
<p>-----
<br>
configure:44290: checking Fortran value for .TRUE. logical type
<br>
configure:44386: gcc -DNDEBUG -g -O2 -finline-functions -fno-strict-aliasing -I. -c conftest.c
<br>
configure:44393: $? = 0
<br>
configure:44403: gfortran  -o conftest conftest.o conftestf.f  
<br>
/usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld: reopening conftest.exe: Device or resource busy
<br>
<p>/usr/lib/gcc/i686-pc-cygwin/4.5.3/../../../../i686-pc-cygwin/bin/ld: final link failed: Device or resource busy
<br>
collect2: ld returned 1 exit status
<br>
configure:44410: $? = 1
<br>
configure:44427: error: Could not determine value of Fortran .TRUE..  Aborting.
<br>
-----
<br>
<p>All this may be irrelevant, though, because it looks like you're building on Windows.
<br>
<p>In that case, you might well want to just download the OMPI Windows binaries.  I don't know offhand if we support building on Windows with the normal configure / make methodology; we normally use cmake to build from source on Windows.
<br>
<p><p><p>On Jun 12, 2012, at 1:25 PM, &lt;VimalMathew_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I was directed to the OpenMPI website from the Boost Libraries page to install an MPI Installation.
</span><br>
<span class="quotelev1">&gt; I&#146;ve followed all the steps in the installation guide to configure and build MPI. When I try to compile the hello.c program which contains &lt;mpi.h&gt;.
</span><br>
<span class="quotelev1">&gt; I get an error message saying mpi.h does not exist
</span><br>
<span class="quotelev1">&gt; I&#146;ve attached the config.log, config.out, make.out , ompi_info all and make-install.out files.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Any help will be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Vimal Mathew
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; &lt;openmpi-1.6.7z&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Previous message:</strong> <a href="19506.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>In reply to:</strong> <a href="19504.php">VimalMathew_at_[hidden]: "[OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
<li><strong>Reply:</strong> <a href="19508.php">VimalMathew_at_[hidden]: "Re: [OMPI users] Help with buidling MPI(Error: mpi.h not found)"</a>
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
