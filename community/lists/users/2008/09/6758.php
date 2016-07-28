<?
$subject_val = "Re: [OMPI users] MPI_THREAD_INIT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 11:03:06 2008" -->
<!-- isoreceived="20080929150306" -->
<!-- sent="Mon, 29 Sep 2008 17:03:02 +0200" -->
<!-- isosent="20080929150302" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_THREAD_INIT" -->
<!-- id="3a37617f0809290803y585ab19cy33969d5515e05d92_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7ADEA1EA-B603-481E-8D94-48B82CE3578B_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-09-29 11:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George.
<br>
So is it dangerous to use hybrid program ( MPI+OpenMP) without enable
<br>
threads support?
<br>
<p>2008/9/29 George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Gabriele,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The thread support has to be explicitly requested at build time, or it will
</span><br>
<span class="quotelev1">&gt; be disabled. Add --enable-mpi-threads (configure --help will give you more
</span><br>
<span class="quotelev1">&gt; info) to your configure. If you plan to use threads with Open MPI I strongly
</span><br>
<span class="quotelev1">&gt; suggest to update to the 1.3. This version is not yet released, but you can
</span><br>
<span class="quotelev1">&gt; download the source from the nightly build section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 29, 2008, at 9:58 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Another question about MPI_INIT_THREAD.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the moment, as said, my OpenMPi version supports only level 0:
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_SINGLE. Suppose that i have this code:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #pragma omp barrier
</span><br>
<span class="quotelev2">&gt;&gt; #pragma omp master
</span><br>
<span class="quotelev2">&gt;&gt;       MPI_Send(buf,...);
</span><br>
<span class="quotelev2">&gt;&gt; #pragma omp barrier
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Due my OpenMPI configuration, is it dangerous use this type of code? What
</span><br>
<span class="quotelev2">&gt;&gt; does it means that OpenMPI doesn't support all thread levels of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_INIT_THREAD?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2008/9/29 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPi developers,
</span><br>
<span class="quotelev2">&gt;&gt; i've noted that OpenMPI 1.25 and 1.2.6 version doesn't supports  thread
</span><br>
<span class="quotelev2">&gt;&gt; initialization function shows below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int MPI_Init_thread(int *argc, char *((*argv)[]), int required, int
</span><br>
<span class="quotelev2">&gt;&gt; *provided)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; used in hybrid programming MPI+OpenMP.  Returned vales provided is 0, so
</span><br>
<span class="quotelev2">&gt;&gt; the unique thread level supported is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Whitch is the newest OpenMPI version that has full support for
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_SINGLE, MPI_THREAD_FUNNELED, MPI_THREAD_SERIALIZED and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Supercomputing  Group
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; g.fatigati_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6758/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6759.php">Jeff Squyres: "Re: [OMPI users] qsub - mpirun problem"</a>
<li><strong>Previous message:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>In reply to:</strong> <a href="6757.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
<li><strong>Reply:</strong> <a href="6769.php">George Bosilca: "Re: [OMPI users] MPI_THREAD_INIT"</a>
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
