<?
$subject_val = "[OMPI users] MPI_COMM_WORLD Error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 19:29:13 2009" -->
<!-- isoreceived="20090526232913" -->
<!-- sent="Tue, 26 May 2009 23:29:09 +0000" -->
<!-- isosent="20090526232909" -->
<!-- name="mtcreekmore_at_[hidden]" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMM_WORLD Error" -->
<!-- id="COL117-W164EA384CBC32A6EBBA870E9520_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] MPI_COMM_WORLD Error<br>
<strong>From:</strong> <a href="mailto:mtcreekmore_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_COMM_WORLD%20Error"><em>mtcreekmore_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-05-26 19:29:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I and new to OpenMPI and  have looked for this, but not getting anywhere.
<br>
<p>I got an example program off this site:
<br>
The compute PI in Fortran example. 
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi/examples/simplempi/main.htm</a>
<br>
<p>Compiled it with &quot;mpif90&quot; and no errors.Then used the qsub -I and tried both executing directly and &quot;mpirun&quot; and still receive these errors:
<br>
[MGT-2-1:02994] *** An error occurred in MPI_Comm_rank[MGT-2-1:02994] *** on communicator MPI_COMM_WORLD[MGT-2-1:02994] *** MPI_ERR_COMM: invalid communicator[MGT-2-1:02994] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
Any guidance in the right direction would be appreciated.
<br>
Thanks
<br>
Trent
<br>
<p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9427/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Previous message:</strong> <a href="9426.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9428.php">Doug Reeder: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
<li><strong>Reply:</strong> <a href="9429.php">Eugene Loh: "Re: [OMPI users] MPI_COMM_WORLD Error"</a>
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
