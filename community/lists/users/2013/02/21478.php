<?
$subject_val = "Re: [OMPI users] MPI_Abort under slurm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 10:14:24 2013" -->
<!-- isoreceived="20130228151424" -->
<!-- sent="Thu, 28 Feb 2013 16:14:00 +0100" -->
<!-- isosent="20130228151400" -->
<!-- name="Bokassa" -->
<!-- email="bokassa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Abort under slurm" -->
<!-- id="CAEgXUHkfXpLydjPUE5_kC+9qWYmocya77jGyVJDAu469OpRWiw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] MPI_Abort under slurm" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Abort under slurm<br>
<strong>From:</strong> Bokassa (<em>bokassa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-28 10:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<li><strong>Previous message:</strong> <a href="21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Maybe in reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph, you were right I was not aware of --kill-on-bad-exit
<br>
and KillOnBadExit, setting it to 1 shuts down
<br>
the entire MPI job when MPI_Abort() is called. I was thinking this MPI
<br>
protocol message was just transported
<br>
by slurm and then each task would exit. Oh well I should not guess the
<br>
implementation. :-)
<br>
<p>Thanks again.
<br>
<p>&nbsp;&nbsp;David
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21479.php">Bokassa: "[OMPI users] High cpu usage"</a>
<li><strong>Previous message:</strong> <a href="21477.php">Pradeep Jha: "[OMPI users] Calling MPI_send MPI_recv from a fortran subroutine"</a>
<li><strong>Maybe in reply to:</strong> <a href="21460.php">Bokassa: "[OMPI users] MPI_Abort under slurm"</a>
<!-- nextthread="start" -->
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
