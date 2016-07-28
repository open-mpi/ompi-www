<?
$subject_val = "[OMPI users] MPI one-sided passive synchronization.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 14:31:47 2011" -->
<!-- isoreceived="20110413183147" -->
<!-- sent="Wed, 13 Apr 2011 14:31:23 -0400" -->
<!-- isosent="20110413183123" -->
<!-- name="Abhishek Kulkarni" -->
<!-- email="abbyzcool_at_[hidden]" -->
<!-- subject="[OMPI users] MPI one-sided passive synchronization." -->
<!-- id="BANLkTi=-TGW-aTY9iEhtNCbTePMepPk11Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI one-sided passive synchronization.<br>
<strong>From:</strong> Abhishek Kulkarni (<em>abbyzcool_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 14:31:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16232.php">kishor kharbas: "[OMPI users] Process to resource mapping in ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to better understand the semantics of passive synchronization in
<br>
one-sided communication calls. Doesn't MPI_Win_unlock()
<br>
block to ensure that all the preceeding RMA calls in that epoch have been
<br>
synced?
<br>
In that case, why is an undefined value returned when trying to load from a
<br>
local window? (see below)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Alloc_mem(128, MPI_INFO_NULL, &amp;ptr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_create(ptr, 128, 1, MPI_INFO_NULL, MPI_COMM_WORLD, &amp;win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// write to the target window of the head node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (rank == (size - 1)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in = 10;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Put(&amp;in, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(0, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// busy wait
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;start = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while ((end - start) &lt; 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;// read from the head node's window
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_lock(MPI_LOCK_EXCLUSIVE, 0, 0, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get(&amp;out, 1, MPI_INT, 0, 0, 1, MPI_INT, win);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Win_unlock(0, win);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;R%d: %d\n&quot;, rank, out);
<br>
<p>The output of the above program with 1.5.3rc1 (and also with MPICH2 1.4rc2)
<br>
is:
<br>
R2: 10
<br>
R1: 10
<br>
R0: 0
<br>
<p>whereas I expect to see:
<br>
R2: 10
<br>
R1: 10
<br>
R0: 10
<br>
<p>Thanks,
<br>
Abhishek
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16233/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Previous message:</strong> <a href="16232.php">kishor kharbas: "[OMPI users] Process to resource mapping in ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
<li><strong>Reply:</strong> <a href="16234.php">Barrett, Brian W: "Re: [OMPI users] MPI one-sided passive synchronization."</a>
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
