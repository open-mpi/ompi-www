<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 03:31:27 2010" -->
<!-- isoreceived="20100909073127" -->
<!-- sent="Thu, 09 Sep 2010 17:31:17 +1000" -->
<!-- isosent="20100909073117" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="1284017477.6667.84.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="6916E76B-E86B-470D-A5E8-B00282781A3A_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 03:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14193.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-09-09 at 01:24 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; As people have said, these time values are to be expected. All they
</span><br>
<span class="quotelev1">&gt; reflect is the time difference spent in reduce waiting for the slowest
</span><br>
<span class="quotelev1">&gt; process to catch up to everyone else. The barrier removes that factor
</span><br>
<span class="quotelev1">&gt; by forcing all processes to start from the same place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No mystery here - just a reflection of the fact that your processes
</span><br>
<span class="quotelev1">&gt; arrive at the MPI_Reduce calls at different times.
</span><br>
<p><p>Yes, however, it seems Gabriele is saying the total execution time
<br>
*drops* by ~500 s when the barrier is put *in*.  (Is that the right way
<br>
around, Gabriele?)
<br>
<p>That's harder to explain as a sync issue.
<br>
<p><p><p><span class="quotelev1">&gt; On Sep 9, 2010, at 1:14 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; More in depth,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; total execution time without Barrier is about 10000 sec.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Total execution time with Barrier+Reduce is 9453, with 128 procs.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2010/9/9 Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;         Gabriele,
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         Can you clarify... those timings are what is reported for
</span><br>
<span class="quotelev2">&gt; &gt;         the reduction
</span><br>
<span class="quotelev2">&gt; &gt;         call specifically, not the total execution time?
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         If so, then the difference is, to a first approximation, the
</span><br>
<span class="quotelev2">&gt; &gt;         time you
</span><br>
<span class="quotelev2">&gt; &gt;         spend sitting idly by doing absolutely nothing waiting at
</span><br>
<span class="quotelev2">&gt; &gt;         the barrier.
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         Ciao
</span><br>
<span class="quotelev2">&gt; &gt;         Terry
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         --
</span><br>
<span class="quotelev2">&gt; &gt;         Dr. Terry Frankcombe
</span><br>
<span class="quotelev2">&gt; &gt;         Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev2">&gt; &gt;         Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;         users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt;         
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Parallel programmer
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Supercomputing Group
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; g.fatigati [AT] cineca.it           
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14193.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Reply:</strong> <a href="14195.php">Ashley Pittman: "Re: [OMPI users] MPI_Reduce performance"</a>
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
