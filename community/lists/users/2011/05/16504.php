<?
$subject_val = "[OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 19:13:48 2011" -->
<!-- isoreceived="20110510231348" -->
<!-- sent="Tue, 10 May 2011 16:14:46 -0700" -->
<!-- isosent="20110510231446" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with MPI-IO" -->
<!-- id="1305069286.4359.57.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with MPI-IO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-10 19:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would appreciate someone with experience with MPI-IO look at the
<br>
simple fortran program gzipped and attached to this note.  It is
<br>
imbedded in a script so that all that is necessary to run it is do:
<br>
'testio' from the command line.  The program generates a small 2-D input
<br>
array, sets up an MPI-IO environment, and write a 2-D output array
<br>
twice, with the only difference being the displacement arrays used to
<br>
construct the indexed datatype.  For the first write, simple
<br>
monotonically increasing displacements are used, for the second the
<br>
displacements are 'shuffled' in one dimension.  They are printed during
<br>
the run.
<br>
<p>For the first case the file is written properly, but for the second the
<br>
program hangs on MPI_FILE_WRITE_AT_ALL and must be aborted manually.
<br>
Although the program is compiled as an mpi program, I am running on a
<br>
single processor, which makes the problem more puzzling.
<br>
<p>The program should be relatively self-explanatory, but if more
<br>
information is needed, please ask.  I am on an 8 core Xeon based Dell
<br>
workstation running Scientific Linux 5.5, Intel fortran 12.0.3, and
<br>
OpenMPI 1.5.3.  I have also attached output from 'ompi_info'.
<br>
<p>T. Rosmond
<br>
<p><p><p>

<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16504/testio.gz">testio.gz</a>
</ul>
<!-- attachment="testio.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16504/info_ompi.gz">info_ompi.gz</a>
</ul>
<!-- attachment="info_ompi.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16505.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16503.php">George Bosilca: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16585.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
