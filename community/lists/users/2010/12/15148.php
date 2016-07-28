<?
$subject_val = "[OMPI users] MPI-IO problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 16:21:10 2010" -->
<!-- isoreceived="20101215212110" -->
<!-- sent="Wed, 15 Dec 2010 13:21:35 -0800" -->
<!-- isosent="20101215212135" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-IO problem" -->
<!-- id="1292448095.4708.26.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI-IO problem<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 16:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15147.php">David Mathog: "[OMPI users] Valgrind suppression not so suppressed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Reply:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to implement an MPI-IO solution for some of the IO in a large
<br>
atmospheric data assimilation system.  Years ago I got some small
<br>
demonstration Fortran programs ( I think from Bill Gropp) that seem to
<br>
be good candidate prototypes for what I need.  Two of them are attached
<br>
as part of simple shell script wrappers (writea, writeb).  Both programs
<br>
are doing equivalent things to write a small test file, but using
<br>
different MPI functions.  Specifically, 'writea' does multiple writes
<br>
into the file using the 'MPI_FILE_SEEK', while 'writeb' does one write
<br>
call using 'MPI_TYPE_CREATE_SUBARRAY', and 'MPI_FILE_SET_VIEW'.  My
<br>
problem is that while 'writea' works correctly, ' writeb' fails with an
<br>
IO_ERROR error code returned from the final 'MPI_FILE_WRITE' call.  I
<br>
have look at the code carefully and studied the MPI standard for the
<br>
functions used, and can't see what is wrong with the failing call, but I
<br>
must be missing something.  I seem to remember the program running
<br>
correctly years ago, but that was on another platform and MPI
<br>
environment.
<br>
<p>My test environment is 64 bit Linux (Scientific Linux 5.5), Intel
<br>
fortran 12.0.0, and OpenMPI 1.4.3.  I have attached gzipped output from
<br>
'ompi_info' along with the two scripts.  I would appreciate any advice
<br>
or corrections.
<br>
<p>T. Rosmond
<br>
<p><p><p>


<br><p>
<p><hr>
<ul>
<li>application/x-csh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15148/writea">writea</a>
</ul>
<!-- attachment="writea" -->
<hr>
<ul>
<li>application/x-csh attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15148/writeb">writeb</a>
</ul>
<!-- attachment="writeb" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15148/ompiinfo.gz">ompiinfo.gz</a>
</ul>
<!-- attachment="ompiinfo.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15149.php">Vaz, Guilherme: "[OMPI users] segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="15147.php">David Mathog: "[OMPI users] Valgrind suppression not so suppressed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
<li><strong>Reply:</strong> <a href="15192.php">Rob Latham: "Re: [OMPI users] MPI-IO problem"</a>
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
