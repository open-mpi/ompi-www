<?
$subject_val = "[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 10:51:41 2013" -->
<!-- isoreceived="20130211155141" -->
<!-- sent="Mon, 11 Feb 2013 16:51:34 +0100" -->
<!-- isosent="20130211155134" -->
<!-- name="Stefan Mauerberger" -->
<!-- email="stefan.mauerberger_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception" -->
<!-- id="1360597894.24401.0.camel_at_WMS005" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception<br>
<strong>From:</strong> Stefan Mauerberger (<em>stefan.mauerberger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 10:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone!
<br>
<p>Playing around with MPI_FILE_READ() puzzles me a little. To catch all
<br>
errors I set the error-handler - the one which is related to file I/O -
<br>
to MPI_ERRORS_ARE_FATAL. 
<br>
However, when reading from a file which has not the necessary size
<br>
MPI_FILE_READ(...) returns 'MPI_SUCCESS: no errors'. Well, read values
<br>
are just a mess. 
<br>
Does anyone have an idea how to catch such an error? 
<br>
<p>Cheers, 
<br>
Stefan 
<br>
<p>Btw.: Attached, there is a minimal example in Fortran. 
<br>
<p><p><p><p>
<br><p>
<p><hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21367/mpi_read_test.f90">mpi_read_test.f90</a>
</ul>
<!-- attachment="mpi_read_test.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21368.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21366.php">Reuti: "Re: [OMPI users] newbie: Submitting Open MPI jobs to SGE ( `qsh, -pe	orte 4` fails)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22998.php">Rob Latham: "Re: [OMPI users] MPI_FILE_READ: wrong file-size does not raise an exception"</a>
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
