<?
$subject_val = "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 13:16:40 2009" -->
<!-- isoreceived="20090825171640" -->
<!-- sent="Tue, 25 Aug 2009 10:16:24 -0700" -->
<!-- isosent="20090825171624" -->
<!-- name="Jason Palmer" -->
<!-- email="jason_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors" -->
<!-- id="00e801ca25a7$ca542a00$5efc7e00$_at_ucsd.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="00b801ca2582$0f3cf5f0$2db6e1d0$_at_ucsd.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors<br>
<strong>From:</strong> Jason Palmer (<em>jason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-25 13:16:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Previous message:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Reply:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I seem to have fixed the problem using the miracle of LD_LIBRARY_PATH.  I
<br>
probably should have known about the importance of that environment variable
<br>
already, and I imagine no knowing about it has caused me problems in the
<br>
past.
<br>
<p>&nbsp;
<br>
<p>So besides the important environment variables listed in the openmpi docs,
<br>
like LDFLAGS, perhaps something about the variable LD_LIBRARY_PATH should be
<br>
mentioned as well.
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jason Palmer
<br>
Sent: Tuesday, August 25, 2009 5:46 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile
<br>
errors
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>&nbsp;
<br>
<p>I'm trying to build openmpi with gcc4.2. I built gcc with thread support in
<br>
order to use OpenMP. I have been able to compile and run a threaded OpenMP
<br>
program with gfortran from gcc4.2, so the gfortran program itself seems to
<br>
be working.
<br>
<p>&nbsp;
<br>
<p>However, when I try to configure OpenMPI 1.3.3, setting the FC, F77, and F90
<br>
environment variables to the gfortran I built, and thd CC to the gcc, it
<br>
fails to &quot;run a simple Fortran 77 program&quot; and exits the configure script
<br>
saying Fortran doesn't work. But I know the gfortran I'm specifying does
<br>
work.
<br>
<p>&nbsp;
<br>
<p>I have tried specifying -m64 in the flags, and specifying the gcc4.2 library
<br>
directory (for libgfortran etc.) but it still fails on the simple Fortran
<br>
test.
<br>
<p>&nbsp;
<br>
<p>I'm using Fedora Redhat Linux, gcc 4.2, and openmpi 1.3.3. Has anyone gotten
<br>
OpenMPI to configure and build with a gcc with OpenMP (thread) support?
<br>
<p>&nbsp;
<br>
<p>The configure output and config.log are attached.
<br>
<p>&nbsp;
<br>
<p>Thanks!
<br>
<p>&nbsp;
<br>
<p>Jason
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10484/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Previous message:</strong> <a href="10483.php">Jayanta Roy: "[OMPI users] explicit routing for multiple network interfaces"</a>
<li><strong>In reply to:</strong> <a href="10480.php">Jason Palmer: "[OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
<li><strong>Reply:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI users] gfortran, gcc4.2, openmpi 1.3.3, fortran compile errors"</a>
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
