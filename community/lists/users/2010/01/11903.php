<?
$subject_val = "Re: [OMPI users] How to start MPI_Spawn child processes early?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 27 21:10:58 2010" -->
<!-- isoreceived="20100128021058" -->
<!-- sent="Thu, 28 Jan 2010 13:10:46 +1100" -->
<!-- isosent="20100128021046" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to start MPI_Spawn child processes early?" -->
<!-- id="1264644646.5851.105.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="7679_1264630173_o0RM9Rar016238_4B60BD1D.7070401_at_cs.anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to start MPI_Spawn child processes early?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-27 21:10:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11904.php">Fawzi Mohamed: "[OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11902.php">Lee Manko: "[OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11882.php">Jeff Squyres: "Re: [OMPI users] Searching the FAQ"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My question is why?  If you are willing to reserve a chunk of your
<br>
machine for yet-to-exist tasks, why not just create them all at mpirun
<br>
time and slice and dice your communicators as appropriate?
<br>
<p><p>On Thu, 2010-01-28 at 09:24 +1100, Jaison Paul wrote:
<br>
<span class="quotelev1">&gt; Hi, I am just reposting my early query once again. If anyone one can 
</span><br>
<span class="quotelev1">&gt; give some hint, that would be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Jaison
</span><br>
<span class="quotelev1">&gt; ANU
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison Paul wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to use MPI for scientific High Performance (hpc) 
</span><br>
<span class="quotelev2">&gt; &gt; applications. I use MPI_Spawn to create child processes. Is there a 
</span><br>
<span class="quotelev2">&gt; &gt; way to start child processes early than the parent process, using 
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Spawn?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want this because, my experiments showed that the time to spawn the 
</span><br>
<span class="quotelev2">&gt; &gt; children by parent is too long for HPC apps which slows down the whole 
</span><br>
<span class="quotelev2">&gt; &gt; process. If the children are ready when parent application process 
</span><br>
<span class="quotelev2">&gt; &gt; seeks for them, that initial delay can be avoided. Is there a way to 
</span><br>
<span class="quotelev2">&gt; &gt; do that?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jaison
</span><br>
<span class="quotelev2">&gt; &gt; Australian National University
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
<li><strong>Next message:</strong> <a href="11904.php">Fawzi Mohamed: "[OMPI users] mpirun links wrong library with BLACS tester"</a>
<li><strong>Previous message:</strong> <a href="11902.php">Lee Manko: "[OMPI users] Non-homogeneous Cluster Implementation"</a>
<li><strong>In reply to:</strong> <a href="11898.php">Jaison Paul: "Re: [OMPI users] How to start MPI_Spawn child processes early?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11882.php">Jeff Squyres: "Re: [OMPI users] Searching the FAQ"</a>
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
