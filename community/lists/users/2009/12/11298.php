<?
$subject_val = "[OMPI users] MPI Processes and Auto Vectorization";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  1 01:16:07 2009" -->
<!-- isoreceived="20091201061607" -->
<!-- sent="Tue, 1 Dec 2009 01:16:03 -0500" -->
<!-- isosent="20091201061603" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Processes and Auto Vectorization" -->
<!-- id="428810f20911302216i448625d1y66fc8eb5bc1fb6a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI Processes and Auto Vectorization<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-01 01:16:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11299.php">Vishal Shorrghar: "[OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11304.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11304.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Suppose we run a parallel MPI code with 64 processes on a cluster, say of 16
<br>
nodes. The cluster nodes has multicore CPU say 4 cores on each node.
<br>
<p>Now all the 64 cores on the cluster running a process. Program is SPMD,
<br>
means all processes has the same workload.
<br>
<p>Now if we had done auto-vectorization while compiling the code (for example
<br>
with Intel compilers); Will there be any benefit (efficiency/scalability
<br>
improvement) of having code with the auto-vectorization? Or we will get the
<br>
same performance as without Auto-vectorization in this example case?
<br>
MEANS THAT if we do not have free cpu cores in a PC or cluster (all cores
<br>
are running MPI processes), still the auto-vertorization is beneficial? Or
<br>
it is beneficial only if we have some free cpu cores locally?
<br>
<p><p>How can we really get benefit in performance improvement with
<br>
Auto-Vectorization?
<br>
<p>Thank you.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11298/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11299.php">Vishal Shorrghar: "[OMPI users] MTT trivial test is getting failed:"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11297.php">Jeff Squyres: "Re: [OMPI users] Programming help required in Interleavingcomputation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11304.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
<li><strong>Reply:</strong> <a href="11304.php">Tim Prince: "Re: [OMPI users] MPI Processes and Auto Vectorization"</a>
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
