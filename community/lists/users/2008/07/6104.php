<?
$subject_val = "[OMPI users] Parallel I/O with MPI-1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 05:51:46 2008" -->
<!-- isoreceived="20080723095146" -->
<!-- sent="Wed, 23 Jul 2008 11:51:37 +0200" -->
<!-- isosent="20080723095137" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] Parallel I/O with MPI-1" -->
<!-- id="3a37617f0807230251w4fc298cak7c0be211686d82da_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Parallel I/O with MPI-1<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 05:51:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6103.php">Josh Hursey: "Re: [OMPI users] Checkpoint and restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
i have a question about parallel i/o. In my application, actually i have
<br>
implemented a file lock with C system calls, like flock. But, is this the
<br>
right way to do concurrent write?
<br>
<p>In this cluster, every node has our operating system, so, the file lock
<br>
functions only on the processors of that node, not for all. I can have two
<br>
or more process of different nodes that writes concurrent in the file. Is
<br>
this dangerous or not? It's depends by file system? I'm using MPI-1 under
<br>
OpenMPI.
<br>
<p>Thanks.
<br>
<pre>
-- 
Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it Tel: +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6104/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6103.php">Josh Hursey: "Re: [OMPI users] Checkpoint and restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Reply:</strong> <a href="6105.php">George Bosilca: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
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
