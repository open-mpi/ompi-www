<?
$subject_val = "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 11 06:55:07 2011" -->
<!-- isoreceived="20111211115507" -->
<!-- sent="Sun, 11 Dec 2011 11:56:07 -0000" -->
<!-- isosent="20111211115607" -->
<!-- name="MM" -->
<!-- email="finjulhich_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?" -->
<!-- id="000601ccb7fb$df24d8b0$9d6e8a10$_at_com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+bTOHrpMx3+++acN1X3F2f2M3UXMoBvUtS_ypD4a4wwHJ63MA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?<br>
<strong>From:</strong> MM (<em>finjulhich_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-11 06:56:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17926.php">christophe petit: "[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR"</a>
<li><strong>Previous message:</strong> <a href="17924.php">Ralph Castain: "[OMPI users] Process mapping and affinity on the devel trunk"</a>
<li><strong>In reply to:</strong> <a href="17923.php">amjad ali: "[OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess, on a multicore machine, openmp/pthread code will always run faster
<br>
than MPI code on the same box, even if the MPI implementation is efficient
<br>
and uses a shared memory tool whereby the data is actually shared across the
<br>
different process, though it's in a different way than it is shared across
<br>
the threads in the same process.
<br>
<p>&nbsp;
<br>
<p>I'd be curious to see some timing comparisons.
<br>
<p>MM
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of amjad ali
<br>
Sent: 10 December 2011 20:22
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] How to justify the use MPI codes on multicore
<br>
systems/PCs?
<br>
<p>&nbsp;
<br>
<p>Hello All,
<br>
<p>&nbsp;
<br>
<p>I developed my MPI based parallel code for clusters, but now I use it on
<br>
multicore/manycore computers (PCs) as well. How to justify (in some
<br>
thesis/publication) the use of a distributed memory code (in MPI) on a
<br>
shared memory (multicore) machine. I guess to explain two reasons:
<br>
<p>&nbsp;
<br>
<p>(1) Plan is to use several hunderds processes in future. So MPI like stuff
<br>
is necessary. To maintain code uniformity and save cost/time for developing
<br>
shared memory solution (using OpenMP, pthreads etc), I use the same MPI code
<br>
on shared memory systems (like multicore PCs). MPI based codes give
<br>
reasonable performance on multicore PCs, if not the best.
<br>
<p>&nbsp;
<br>
<p>(2) The latest MPI implementations are intelligent enough that they use some
<br>
efficient mechanism while executing MPI based codes on shared memory
<br>
(multicore) machines.  (please tell me any reference to quote this fact).
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>Please help me in formally justifying this and comment/modify above two
<br>
justifications. Better if I you can suggent me to quote some reference of
<br>
any suitable publication in this regard. 
<br>
<p>&nbsp;
<br>
<p>best regards,
<br>
<p>Amjad Ali
<br>
<p>&nbsp;
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17925/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17926.php">christophe petit: "[OMPI users] Problem on 3D contiguous array with MPI_TYPE_VECTOR"</a>
<li><strong>Previous message:</strong> <a href="17924.php">Ralph Castain: "[OMPI users] Process mapping and affinity on the devel trunk"</a>
<li><strong>In reply to:</strong> <a href="17923.php">amjad ali: "[OMPI users] How to justify the use MPI codes on multicore systems/PCs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
<li><strong>Reply:</strong> <a href="17927.php">Andreas Schäfer: "Re: [OMPI users] How to justify the use MPI codes on multicore	systems/PCs?"</a>
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
