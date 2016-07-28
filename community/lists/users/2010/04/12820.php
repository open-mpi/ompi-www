<?
$subject_val = "Re: [OMPI users] deadlock when calling MPI_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 27 10:05:08 2010" -->
<!-- isoreceived="20100427140508" -->
<!-- sent="Tue, 27 Apr 2010 10:04:59 -0400" -->
<!-- isosent="20100427140459" -->
<!-- name="Teng Lin" -->
<!-- email="teng.lin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock when calling MPI_gatherv" -->
<!-- id="D59CD225-F011-4B74-800C-836A3C078A55_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD6E52C.5010102_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock when calling MPI_gatherv<br>
<strong>From:</strong> Teng Lin (<em>teng.lin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-27 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Terry,
<br>
<p><p><span class="quotelev1">&gt; How does the stack for the non-SM BTL run look, I assume it probably is the same?  Also, can you dump the message queues for rank 1?  What's interesting is you have a bunch of pending receives, do you expect that to be the case when the MPI_Gatherv occurred?
</span><br>
<p>It turns out we have an unbalanced MPI_Bcast buried very deep in the application. After fixing that bug, the application behaves correctly.
<br>
Thank you all for the help, and sorry for the false alarm.
<br>
<p>Teng
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12821.php">Frederik Himpe: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>Previous message:</strong> <a href="12819.php">Ralph Castain: "Re: [OMPI users] OpenMPI &amp; SGE: bash errors at mpirun"</a>
<li><strong>In reply to:</strong> <a href="12817.php">Terry Dontje: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
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
