<?
$subject_val = "[OMPI devel] MPI_Com_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 10:33:58 2008" -->
<!-- isoreceived="20081028143358" -->
<!-- sent="Tue, 28 Oct 2008 10:33:49 -0400" -->
<!-- isosent="20081028143349" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Com_spawn" -->
<!-- id="4C3A450D-0858-4417-87C2-DAD393ACF027_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Com_spawn<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 10:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I run in troubles with the new IO framework when I spawn a new  
<br>
process. The following error message is dumped and the job is aborted.
<br>
<p>--------------------------------------------------------------------------
<br>
The requested stdin target is out of range for this job - it points
<br>
to a process rank that is greater than the number of process in the
<br>
job.
<br>
<p>Specified target: INVALID
<br>
Number of procs: 2
<br>
<p>This could be caused by specifying a negative number for the stdin
<br>
target, or by mistyping the desired rank. Please correct the cmd line
<br>
and try again.
<br>
--------------------------------------------------------------------------
<br>
<p>Is the new IO framework supposed to support MPI2 dynamics ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4817/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Previous message:</strong> <a href="4816.php">Ralph Castain: "Re: [OMPI devel] Comm_spawn limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
<li><strong>Reply:</strong> <a href="4818.php">Ralph Castain: "Re: [OMPI devel] MPI_Com_spawn"</a>
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
