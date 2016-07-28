<?
$subject_val = "[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 30 00:52:52 2008" -->
<!-- isoreceived="20080930045252" -->
<!-- sent="Tue, 30 Sep 2008 00:52:48 -0400" -->
<!-- isosent="20080930045248" -->
<!-- name="arun dhakne" -->
<!-- email="arundhakne_at_[hidden]" -->
<!-- subject="[OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes" -->
<!-- id="838cb4200809292152m4386c47dx5d02b0297a7b9355_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ompi-restart issue : ompi-restart doesn't work across nodes<br>
<strong>From:</strong> arun dhakne (<em>arundhakne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-30 00:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6785.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I had gone through some previous ompi-restart issues but i couldn't
<br>
find anything similar to this problem.
<br>
<p>I have installed blcr, and configured open-mpi 'openmpi-1.3a1r19645'
<br>
<p>i) If the sample mpi program say ( np 4 on single machine that is
<br>
without any hostfile )is ran and I try to checkpoint it, it happens
<br>
successfully and even ompi-restart works in this case.
<br>
<p>ii) If the sample mpi program is ran across say 2 different nodes and
<br>
checkpoint happens successfully BUT ompi-restart throws following
<br>
error:
<br>
<p>[audhakne_at_acl-cadi-pentd-1 ~]$ ompi-restart ompi_global_snapshot_7604.ckpt
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 3 with PID 9590 on node
<br>
acl-cadi-pentd-1.cse.buffalo.edu exited on signal 11 (Segmentation
<br>
fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Please let me know if more information is needed.
<br>
<p><pre>
-- 
Thanks and Regards,
Arun U. Dhakne
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6787.php">Roberto Fichera: "[OMPI users] Running application with MPI_Comm_spawn() in multithreaded environment"</a>
<li><strong>Previous message:</strong> <a href="6785.php">Zhiliang Hu: "Re: [OMPI users] qsub - mpirun problem"</a>
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
