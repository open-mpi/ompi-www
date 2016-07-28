<?
$subject_val = "[OMPI users] Algorithms used in MPI_BCast";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 20 20:13:27 2012" -->
<!-- isoreceived="20120921001327" -->
<!-- sent="Fri, 21 Sep 2012 02:13:21 +0200" -->
<!-- isosent="20120921001321" -->
<!-- name="Mohammed El Mehdi DIOURI" -->
<!-- email="mehdi.diouri_at_[hidden]" -->
<!-- subject="[OMPI users] Algorithms used in MPI_BCast" -->
<!-- id="74FBF747-3291-4F17-BB61-74D108354A87_at_ens-lyon.fr" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Algorithms used in MPI_BCast<br>
<strong>From:</strong> Mohammed El Mehdi DIOURI (<em>mehdi.diouri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-20 20:13:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20253.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I would like to know what are the algorithms used in MPI_BCast() in the OpenMPI implementation. 
<br>
<p>For example, in MPICH2, depending on the number of processes and the size of data to broadcast, the broadcasting algorithm used can be different : a binomial tree if the message is short or MPI_Scatter followed by MPI_AllGather if the message to broadcast is long.
<br>
<p>Is it the same for OpenMPI ? 
<br>
It doesn't seem to be the case since the broadcasting time is different when I use OpenMPI or MPICH2.
<br>
<p>Thanks for your help,
<br>
<p>Mehdi.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Previous message:</strong> <a href="20253.php">Ralph Castain: "Re: [OMPI users] static, standalone mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20255.php">George Bosilca: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
<li><strong>Reply:</strong> <a href="20256.php">Iliev, Hristo: "Re: [OMPI users] Algorithms used in MPI_BCast"</a>
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
