<?
$subject_val = "[OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 13 18:48:23 2009" -->
<!-- isoreceived="20090413224823" -->
<!-- sent="Mon, 13 Apr 2009 16:48:17 -0600" -->
<!-- isosent="20090413224817" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI users] PGI Fortran pthread support" -->
<!-- id="49E3C131.50703_at_cora.nwra.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-13 18:48:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8884.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8897.php">Prentice Bisbal: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seeing the following building openmpi 1.3.1 on CentOS 5.3 with PGI pgf90 
<br>
8.0-5 fortran compiler:
<br>
<p>checking if C compiler and POSIX threads work with -Kthread... no
<br>
checking if C compiler and POSIX threads work with -kthread... no
<br>
checking if C compiler and POSIX threads work with -pthread... yes
<br>
checking if C++ compiler and POSIX threads work with -Kthread... no
<br>
checking if C++ compiler and POSIX threads work with -kthread... no
<br>
checking if C++ compiler and POSIX threads work with -pthread... yes
<br>
checking if F77 compiler and POSIX threads work with -Kthread... no
<br>
checking if F77 compiler and POSIX threads work with -kthread... no
<br>
checking if F77 compiler and POSIX threads work with -pthread... no
<br>
checking if F77 compiler and POSIX threads work with -pthreads... no
<br>
checking if F77 compiler and POSIX threads work with -mt... no
<br>
checking if F77 compiler and POSIX threads work with -mthreads... no
<br>
checking if F77 compiler and POSIX threads work with -lpthreads... no
<br>
checking if F77 compiler and POSIX threads work with -llthread... no
<br>
checking if F77 compiler and POSIX threads work with -lpthread... no
<br>
checking for PTHREAD_MUTEX_ERRORCHECK_NP... yes
<br>
checking for PTHREAD_MUTEX_ERRORCHECK... yes
<br>
checking for working POSIX threads package... no
<br>
checking if C compiler and Solaris threads work... no
<br>
checking if C++ compiler and Solaris threads work... no
<br>
checking if F77 compiler and Solaris threads work... no
<br>
checking for working Solaris threads package... no
<br>
checking for type of thread support... none found
<br>
<p>************************************************************************
<br>
<p>Open MPI was unable to find threading support on your system.  The
<br>
OMPI development team is considering requiring threading support for
<br>
proper OMPI execution.  This is in part because we are not aware of
<br>
any OpenFabrics users that do not have thread support -- so we need
<br>
you to e-mail the Open MPI Users mailing list to tell us if this is a
<br>
problem for you.
<br>
<p>************************************************************************
<br>
<p><p>Is there any way to get the PGI Fortran compiler to support threads for 
<br>
openmpi?
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Previous message:</strong> <a href="8884.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8886.php">Jeff Squyres: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8888.php">Åke Sandgren: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>Reply:</strong> <a href="8897.php">Prentice Bisbal: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
