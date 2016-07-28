<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun 11 13:10:26 2007" -->
<!-- isoreceived="20070611171026" -->
<!-- sent="Mon, 11 Jun 2007 12:10:22 -0500" -->
<!-- isosent="20070611171022" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="[OMPI users] f90 support not built with gfortran?" -->
<!-- id="466D81FE.20307_at_uark.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-11 13:10:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3456.php">Kelley, Sean: "[OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3454.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings all,
<br>
<p>I downloaded and configured v1.2.2 this morning on an Opteron cluster 
<br>
using the following configure directives...
<br>
<p>./configure --prefix=/share/apps CC=gcc CXX=g++ F77=g77 FC=gfortran 
<br>
CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64
<br>
<p>Compilation seemed to go OK and there IS an mpif90 option in 
<br>
/bin......but it gives me the following error when I try to compile my 
<br>
source file:
<br>
<p>/share/apps/bin/mpif90 -c -I/share/apps/include -O3 ft.f
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
<p>I am certain that gfortran is installed and working correctly as I 
<br>
tested compilation of a small piece of serial code with it.
<br>
<p>Something I am doing wrong?
<br>
<p><pre>
-- 
Jeff F. Pummill
Senior Linux Cluster Administrator
University of Arkansas
Fayetteville, Arkansas 72701
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3455/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3456.php">Kelley, Sean: "[OMPI users] mpirun hanging when processes started on head node"</a>
<li><strong>Previous message:</strong> <a href="3454.php">George Bosilca: "Re: [OMPI users] mixing MX and TCP"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
<li><strong>Reply:</strong> <a href="3469.php">Terry Frankcombe: "Re: [OMPI users] f90 support not built with gfortran?"</a>
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
