<?
$subject_val = "Re: [OMPI users] MPI_THREAD_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 10:25:53 2008" -->
<!-- isoreceived="20080929142553" -->
<!-- sent="Mon, 29 Sep 2008 10:25:43 -0400" -->
<!-- isosent="20080929142543" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_INIT" -->
<!-- id="7ADEA1EA-B603-481E-8D94-48B82CE3578B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3a37617f0809290658h64e2b127u304623db0fac0185_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-29 10:25:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gabriele,
<br>
<p>The thread support has to be explicitly requested at build time, or it  
<br>
will be disabled. Add --enable-mpi-threads (configure --help will give  
<br>
you more info) to your configure. If you plan to use threads with Open  
<br>
MPI I strongly suggest to update to the 1.3. This version is not yet  
<br>
released, but you can download the source from the nightly build  
<br>
section.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Sep 29, 2008, at 9:58 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Another question about MPI_INIT_THREAD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment, as said, my OpenMPi version supports only level 0:  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE. Suppose that i have this code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #pragma omp barrier
</span><br>
<span class="quotelev1">&gt; #pragma omp master
</span><br>
<span class="quotelev1">&gt;        MPI_Send(buf,...);
</span><br>
<span class="quotelev1">&gt; #pragma omp barrier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Due my OpenMPI configuration, is it dangerous use this type of code?  
</span><br>
<span class="quotelev1">&gt; What does it means that OpenMPI doesn't support all thread levels of  
</span><br>
<span class="quotelev1">&gt; MPI_INIT_THREAD?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2008/9/29 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev1">&gt; i've noted that OpenMPI 1.25 and 1.2.6 version doesn't supports   
</span><br>
<span class="quotelev1">&gt; thread initialization function shows below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int MPI_Init_thread(int *argc, char *((*argv)[]), int required, int  
</span><br>
<span class="quotelev1">&gt; *provided)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; used in hybrid programming MPI+OpenMP.  Returned vales provided is  
</span><br>
<span class="quotelev1">&gt; 0, so the unique thread level supported is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Whitch is the newest OpenMPI version that has full support for  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_SINGLE, MPI_THREAD_FUNNELED, MPI_THREAD_SERIALIZED and  
</span><br>
<span class="quotelev1">&gt; MPI_THREAD_MULTIPLE?
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Previous message:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6756.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6758.php">Gabriele Fatigati: "Re: [OMPI users] MPI_THREAD_INIT"</a>
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
