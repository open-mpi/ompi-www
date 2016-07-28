<?
$subject_val = "Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 10:58:26 2009" -->
<!-- isoreceived="20090305155826" -->
<!-- sent="Thu, 05 Mar 2009 08:58:12 -0700" -->
<!-- isosent="20090305155812" -->
<!-- name="Ganesh" -->
<!-- email="ganesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?" -->
<!-- id="49AFF694.1060105_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F274633B-E624-4924-A00C-BF2C201C9C6F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application heavily using	MPI_Barrier?<br>
<strong>From:</strong> Ganesh (<em>ganesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 10:58:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Thank you, Jeff and Ganesh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My current research is trying to rewrite some collective MPI 
</span><br>
<span class="quotelev1">&gt; operations to work with our system.  Barrier is my first step, maybe I 
</span><br>
<span class="quotelev1">&gt; will have bcast and reduce in the future.  I understand that some 
</span><br>
<span class="quotelev1">&gt; applications used too many unnecessary barriers.  But here what I want 
</span><br>
<span class="quotelev1">&gt; is just an application to measure the performance improvement versus 
</span><br>
<span class="quotelev1">&gt; normal MPI_Barrier.  And the improvement can only be measured if the 
</span><br>
<span class="quotelev1">&gt; barriers are executed many times.  I have done some synthetic tests, 
</span><br>
<span class="quotelev1">&gt; all I need now are real applications.
</span><br>
Looks like a useful project.
<br>
<p>BTW in our paper, we cite a paper by Rolf Rabenseifner. That paper is 
<br>
definitely worth reading. It provides interesting performance studies 
<br>
(the paper cited is old, so the studies are probably worth repeating).
<br>
<p>Then again, in our paper we cite a paper by Siegel et al. That is also 
<br>
definitely worth reading. In that paper, they mention a real-world 
<br>
experience story of a barrier that was thought to be useless and was 
<br>
removed... only to find, a year later, that it caused a communication 
<br>
race (a wildcard receive now could obtain an extra match that was not 
<br>
possible with the barrier present).
<br>
<p>Good luck in your studies, Shan.
<br>
<p>Ganesh
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shan
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8321.php">Durga Choudhury: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="8319.php">Shanyuan Gao: "Re: [OMPI users] Any scientific application heavily using MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
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
