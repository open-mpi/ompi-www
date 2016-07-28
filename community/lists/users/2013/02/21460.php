<?
$subject_val = "[OMPI users] MPI_Abort under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 25 13:39:09 2013" -->
<!-- isoreceived="20130225183909" -->
<!-- sent="Mon, 25 Feb 2013 19:38:45 +0100" -->
<!-- isosent="20130225183845" -->
<!-- name="Bokassa" -->
<!-- email="bokassa_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Abort under slurm" -->
<!-- id="CAEgXUH=r8ap5SUJOXWWN69Yp+5idVKx-i4mgXXn=HNZx8VHv4A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Abort under slurm<br>
<strong>From:</strong> Bokassa (<em>bokassa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-25 13:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Maybe reply:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;I noticed that MPI_Abort() does not abort the tasks if the mpi program
<br>
is started using srun.
<br>
I call MPI_Abort() from rank 0, this process exit, but the other ranks keep
<br>
running or waiting for IO
<br>
on the other nodes. The only way to kill the job is to use scancel.
<br>
However if I use mpirun under a slurm allocation then MPI_Abort() works as
<br>
expected aborting
<br>
all tasks.
<br>
<p>Is this a known issue?
<br>
<p>Thanks, David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21460/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Previous message:</strong> <a href="21459.php">Dan Beatty: "Re: [OMPI users] uDAPL status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21461.php">Ralph Castain: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Reply:</strong> <a href="21463.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
<li><strong>Maybe reply:</strong> <a href="21478.php">Bokassa: "Re: [OMPI users] MPI_Abort under slurm"</a>
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
