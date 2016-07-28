<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 12:44:54 2010" -->
<!-- isoreceived="20100908164454" -->
<!-- sent="Wed, 8 Sep 2010 10:44:29 -0600" -->
<!-- isosent="20100908164429" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="AANLkTim71ZwaFhQQP7cjzpr++ZL5wi7GAJ_NqFkA2UmS_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTim=N1Ho_2CRd+2ACBELhuqzgnanEPfpZAW1VZXu_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 12:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doing Reduce without Barrier first allows one process to call Reduce and
<br>
exit immediately without waiting for other processes to call Reduce.
<br>
Therefore, this allows one process to advance faster than other processes.
<br>
I suspect the 2671 second result is the difference between the fastest and
<br>
slowest process.  Having Barrier reduce the time difference because it
<br>
forces the faster processes to go slower.
<br>
<p>On Wed, Sep 8, 2010 at 3:21 AM, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i'm using OpenMPI 1.3.3 on Infiniband 4x interconnnection network. My
</span><br>
<span class="quotelev1">&gt; parallel application use intensive MPI_Reduce communication over
</span><br>
<span class="quotelev1">&gt; communicator created with MPI_Comm_split.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've noted strange behaviour during execution. My code is instrumented with
</span><br>
<span class="quotelev1">&gt; Scalasca 1.3 to report subroutine execution time. First execution shows
</span><br>
<span class="quotelev1">&gt; elapsed time with 128 processors ( job_communicator is created with
</span><br>
<span class="quotelev1">&gt; MPI_Comm_split). In both cases is composed to the same ranks of
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(.....,job_communicator)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The elapsed time is 2671 sec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Second run use MPI_BARRIER before MPI_Reduce:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Barrier(job_communicator..)
</span><br>
<span class="quotelev1">&gt; MPI_Reduce(.....,job_communicator)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The elapsed time of Barrier+Reduce is 2167 sec, (about 8 minutes less).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, im my opinion, it is better put MPI_Barrier before any MPI_Reduce to
</span><br>
<span class="quotelev1">&gt; mitigate &quot;asynchronous&quot; behaviour of MPI_Reduce in OpenMPI. I suspect the
</span><br>
<span class="quotelev1">&gt; same for others collective communications. Someone can explaine me why
</span><br>
<span class="quotelev1">&gt; MPI_reduce has this strange behaviour?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14186/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14185.php">Gabriele Fatigati: "[OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14187.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
