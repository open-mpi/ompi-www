<?
$subject_val = "[OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 05:21:55 2010" -->
<!-- isoreceived="20100908092155" -->
<!-- sent="Wed, 8 Sep 2010 11:21:49 +0200" -->
<!-- isosent="20100908092149" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Reduce performance" -->
<!-- id="AANLkTim=N1Ho_2CRd+2ACBELhuqzgnanEPfpZAW1VZXu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 05:21:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users,
<br>
<p>i'm using OpenMPI 1.3.3 on Infiniband 4x interconnnection network. My
<br>
parallel application use intensive MPI_Reduce communication over
<br>
communicator created with MPI_Comm_split.
<br>
<p>I've noted strange behaviour during execution. My code is instrumented with
<br>
Scalasca 1.3 to report subroutine execution time. First execution shows
<br>
elapsed time with 128 processors ( job_communicator is created with
<br>
MPI_Comm_split). In both cases is composed to the same ranks of
<br>
MPI_COMM_WORLD:
<br>
<p>MPI_Reduce(.....,job_communicator)
<br>
<p>The elapsed time is 2671 sec.
<br>
<p>Second run use MPI_BARRIER before MPI_Reduce:
<br>
<p>MPI_Barrier(job_communicator..)
<br>
MPI_Reduce(.....,job_communicator)
<br>
<p>The elapsed time of Barrier+Reduce is 2167 sec, (about 8 minutes less).
<br>
<p>So, im my opinion, it is better put MPI_Barrier before any MPI_Reduce to
<br>
mitigate &quot;asynchronous&quot; behaviour of MPI_Reduce in OpenMPI. I suspect the
<br>
same for others collective communications. Someone can explaine me why
<br>
MPI_reduce has this strange behaviour?
<br>
<p>Thanks in advance.
<br>
<p><p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14185/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14184.php">Allen Zhao: "[OMPI users] What will happen if a non-MPI executible loaded a MPI enabled shared library?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14186.php">David Zhang: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
