<?
$subject_val = "[OMPI devel] F90 open-mpi module bug";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 23:40:38 2011" -->
<!-- isoreceived="20110521034038" -->
<!-- sent="Fri, 20 May 2011 20:40:33 -0700" -->
<!-- isosent="20110521034033" -->
<!-- name="Dan Reynolds" -->
<!-- email="dannoryan_at_[hidden]" -->
<!-- subject="[OMPI devel] F90 open-mpi module bug" -->
<!-- id="SNT136-w258D9916BE40BC208360DFA1700_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] F90 open-mpi module bug<br>
<strong>From:</strong> Dan Reynolds (<em>dannoryan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 23:40:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've noticed a persistent bug in at least the last few versions of open-mpi.  I'm currently trying to use version 1.5.3 (os-x 10.6, macports installation).
<br>
The problem is that the open-mpi module for Fortran 90 is missing functionality that is included in the main library, specifically the MPI_Abort function.  I've attached a very short, simple, test code that will not compile using the openmpi-installed mpif90 script.  In compiling, it gives the error message:
<br>
<span class="quotelev2">&gt;&gt;  mpif90 test_driver.F90
</span><br>
./test_driver.F90:12.39:  call mpi_abort(MPI_COMM_WORLD, -1, 0)                                       1Error: There is no specific subroutine for the generic 'mpi_abort' at (1)
<br>
I am using gfortran version 4.4.6, if that makes any difference, though I anticipate that the problem is that the MPI_Abort function was never included in the F90 openmpi module.  This is currently a show-stopper for me to use openmpi for my research, so until this is fixed, I'll continue to install mpich2 on all of my workstations and clusters.
<br>
Thanks for the hard work, and thanks in advance for the continued openmpi development and support,-Dan
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9281/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9281/test_driver.F90">test_driver.F90</a>
</ul>
<!-- attachment="test_driver.F90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Previous message:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
<li><strong>Reply:</strong> <a href="9282.php">N.M. Maclaren: "Re: [OMPI devel] F90 open-mpi module bug"</a>
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
