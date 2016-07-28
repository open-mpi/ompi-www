<?
$subject_val = "[OMPI users] Supporting OpenMPI compiled for multiple compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 10 12:04:51 2009" -->
<!-- isoreceived="20090210170451" -->
<!-- sent="Tue, 10 Feb 2009 12:04:47 -0500" -->
<!-- isosent="20090210170447" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="[OMPI users] Supporting OpenMPI compiled for multiple compilers" -->
<!-- id="4991B3AF.7040306_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] Supporting OpenMPI compiled for multiple compilers<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-10 12:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to support multiple compilers: Portland, Intel and GCC, so I've
<br>
been compiling OpenMPI with each compiler, to avoid the Fortran symbol
<br>
naming problems. When compiling, I'd use the --prefix and -exec-prefix
<br>
switches like so:
<br>
<p>GCC:
<br>
../configure CC=gcc CXX=g++ F77=gfortran FC=gfortran
<br>
--prefix=/usr/local/openmpi-1.2.8
<br>
--exec-prefix=/usr/local/openmpi-1.2.8/gcc-4.1.2/x86
<br>
<p>PGI:
<br>
../configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
<br>
--prefix=/usr/local/openmpi-1.2.8
<br>
--exec-prefix=/usr/local/openmpi-1.2.8/pgi-8.0/x86_64
<br>
<p>Intel:
<br>
../configure CC=pgcc CXX=pgCC F77=pgf77 FC=pgf90
<br>
--prefix=/usr/local/openmpi-1.2.8
<br>
--exec-prefix=/usr/local/openmpi-1.2.8/pgi-8.0/x86_6
<br>
<p>I compiled my versions of OpenMPI in the order above. Now when I try to
<br>
compile using pgcc, I get this error:
<br>
<p>mpicc o mpihello mpihello.c
<br>
pgcc-Error-Unknown switch: -pthread
<br>
<p>Clearly, the -pthread switch works with the Intel compilers, but not the
<br>
PGI compilers. I know I can edit files mpi*-wrapper-data.txt, but this
<br>
seems less than optimal. I'd like my users to be able to not need to
<br>
specify any additional compiler args if I can avoid it.
<br>
<p>Also, since the previous mpi*-wrapper-data.txt files were overwritten
<br>
when I did 'make install' for the Intel compilers, is there anyway to
<br>
figure what those files contained for the GCC and PGI compilers w/o
<br>
recompiling.
<br>
<p>Does each compiler need a completely separate tree under --prefix?
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8009.php">Champagne, Nathan J. (JSC-EV)[ESCG]: "[OMPI users] Problem redirecting standard input"</a>
<li><strong>Previous message:</strong> <a href="8007.php">Ralph Castain: "Re: [OMPI users] undefined symbol: tm_init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
<li><strong>Reply:</strong> <a href="8011.php">Douglas Guptill: "Re: [OMPI users] Supporting OpenMPI compiled for multiple compilers"</a>
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
