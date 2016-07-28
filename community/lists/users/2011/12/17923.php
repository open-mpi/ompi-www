<?
$subject_val = "[OMPI users] How to justify the use MPI codes on multicore systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 10 15:21:59 2011" -->
<!-- isoreceived="20111210202159" -->
<!-- sent="Sat, 10 Dec 2011 15:21:55 -0500" -->
<!-- isosent="20111210202155" -->
<!-- name="amjad ali" -->
<!-- email="amjad11_at_[hidden]" -->
<!-- subject="[OMPI users] How to justify the use MPI codes on multicore systems/PCs?" -->
<!-- id="CA+bTOHrpMx3+++acN1X3F2f2M3UXMoBvUtS_ypD4a4wwHJ63MA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+bTOHr2Yyo0yNpU+0s7JQbKst9kx9uJidFSXY9R-PsDA=6EQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] How to justify the use MPI codes on multicore systems/PCs?<br>
<strong>From:</strong> amjad ali (<em>amjad11_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-10 15:21:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17924.php">Ralph Castain: "[OMPI users] Process mapping and affinity on the devel trunk"</a>
<li><strong>Previous message:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;Hello All,
<br>
<p>I developed my MPI based parallel code for clusters, but now I use it on
<br>
multicore/manycore computers (PCs) as well. How to justify (in some
<br>
thesis/publication) the use of a distributed memory code (in MPI) on a
<br>
shared memory (multicore) machine. I guess to explain two reasons:
<br>
<p>(1) Plan is to use several hunderds processes in future. So MPI like stuff
<br>
is necessary. To maintain code uniformity and save cost/time for developing
<br>
shared memory solution (using OpenMP, pthreads etc), I use the same MPI
<br>
code on shared memory systems (like multicore PCs). MPI based codes give
<br>
reasonable performance on multicore PCs, if not the best.
<br>
<p>(2) The latest MPI implementations are intelligent enough that they use
<br>
some efficient mechanism while executing MPI based codes on shared memory
<br>
(multicore) machines.  (please tell me any reference to quote this fact).
<br>
<p><p>Please help me in formally justifying this and comment/modify above two
<br>
justifications. Better if I you can suggent me to quote some reference of
<br>
any suitable publication in this regard.
<br>
<p>best regards,
<br>
Amjad Ali
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17923/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17924.php">Ralph Castain: "[OMPI users] Process mapping and affinity on the devel trunk"</a>
<li><strong>Previous message:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17925.php">MM: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
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
