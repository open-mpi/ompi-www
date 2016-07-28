<?
$subject_val = "[OMPI users] busy wait in MPI_Recv";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 21:43:31 2010" -->
<!-- isoreceived="20101020014331" -->
<!-- sent="Tue, 19 Oct 2010 18:43:27 -0700" -->
<!-- isosent="20101020014327" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="[OMPI users] busy wait in MPI_Recv" -->
<!-- id="AANLkTimbLQ+ZCi17kzvnJQv3v1Bc8rMXFEDwPRoCXjy5_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] busy wait in MPI_Recv<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 21:43:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="14501.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I just ran a small test to find out the overhead of an MPI_Recv call
<br>
when no communication is occurring.   It seems quite high.  I noticed
<br>
during my google excursions that openmpi does busy waiting.  I also
<br>
noticed that the option to -mca mpi_yield_when_idle seems not to help
<br>
much (in fact, turning on the yield seems only to slow down the
<br>
program).  What is the best way to reduce this polling cost during
<br>
low-communication invervals?  Should I write my own recv loop that
<br>
sleeps for short periods?  I don't want to go write someone that is
<br>
possibly already done much better in the library :)
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="14501.php">Brian Budge: "Re: [OMPI users] my leak or OpenMPI's leak?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14503.php">Eugene Loh: "Re: [OMPI users] busy wait in MPI_Recv"</a>
<li><strong>Reply:</strong> <a href="14505.php">Richard Treumann: "Re: [OMPI users] busy wait in MPI_Recv"</a>
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
