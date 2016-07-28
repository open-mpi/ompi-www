<?
$subject_val = "[OMPI users] remote spawned process hangs at MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 14:25:21 2011" -->
<!-- isoreceived="20111015182521" -->
<!-- sent="Sat, 15 Oct 2011 11:25:16 -0700" -->
<!-- isosent="20111015182516" -->
<!-- name="dave fournier" -->
<!-- email="davef_at_[hidden]" -->
<!-- subject="[OMPI users] remote spawned process hangs at MPI_Init" -->
<!-- id="4E99D00C.9080100_at_otter-rsch.com" -->
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
<strong>Subject:</strong> [OMPI users] remote spawned process hangs at MPI_Init<br>
<strong>From:</strong> dave fournier (<em>davef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-15 14:25:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17552.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I found that if I inovke the master process
<br>
<p>with  mpirun as in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun ./orange -master
<br>
<p><p>Then the remote process is successful in the  MPI_Init call.
<br>
I would like to avoid using mpirun if possible.  It seems to
<br>
be responsible for setting up communication between the
<br>
two machines in some way. Can I do that programatically
<br>
at run time.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="17552.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>Reply:</strong> <a href="17554.php">Ralph Castain: "Re: [OMPI users] remote spawned process hangs at MPI_Init"</a>
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
