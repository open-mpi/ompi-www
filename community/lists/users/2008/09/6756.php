<?
$subject_val = "Re: [OMPI users] MPI_THREAD_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 09:58:21 2008" -->
<!-- isoreceived="20080929135821" -->
<!-- sent="Mon, 29 Sep 2008 15:58:16 +0200" -->
<!-- isosent="20080929135816" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_INIT" -->
<!-- id="3a37617f0809290658h64e2b127u304623db0fac0185_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3a37617f0809290401j6d1a155dwc09e190466c0f66b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_THREAD_INIT<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 09:58:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another question about MPI_INIT_THREAD.
<br>
<p>At the moment, as said, my OpenMPi version supports only level 0:
<br>
MPI_THREAD_SINGLE. Suppose that i have this code:
<br>
<p>#pragma omp barrier
<br>
#pragma omp master
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf,...);
<br>
#pragma omp barrier
<br>
<p>Due my OpenMPI configuration, is it dangerous use this type of code? What
<br>
does it means that OpenMPI doesn't support all thread levels of
<br>
MPI_INIT_THREAD?
<br>
<p><p>2008/9/29 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev1">&gt; i've noted that OpenMPI 1.25 and 1.2.6 version doesn't supports  thread
</span><br>
<span class="quotelev1">&gt; initialization function shows below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Init_thread(int *argc, char *((*argv)[]), int required, int
</span><br>
<span class="quotelev1">&gt; *provided)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; used in hybrid programming MPI+OpenMP.  Returned vales provided is 0, so
</span><br>
<span class="quotelev1">&gt; the unique thread level supported is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whitch is the newest OpenMPI version that has full support for MPI_THREAD_SINGLE,
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_FUNNELED, MPI_THREAD_SERIALIZED and MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing  Group
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
<span class="quotelev1">&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
CINECA Systems &amp; Tecnologies Department
Supercomputing  Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6756/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6755.php">Gabriele Fatigati: "[OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
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
