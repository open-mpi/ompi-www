<?
$subject_val = "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 17 08:12:47 2011" -->
<!-- isoreceived="20110817121247" -->
<!-- sent="Wed, 17 Aug 2011 08:12:42 -0400" -->
<!-- isosent="20110817121242" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost" -->
<!-- id="E2003408-82F5-4C92-96F7-C2EA351C5303_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+B++9cc9G8Xo7qOaLiJ8teu3yZtKbzksoevvgGwjUDrMzVuEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-17 08:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17066.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17065.php">Chen Kai: "[OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you CC the boost list?  You might want to ask them this question.  Plus, we can't answer any questions about the Microsoft HPC/MPI implementation -- this list is for support of the Open MPI software package, not Microsoft's.  Sorry.
<br>
<p>I suspect that it probably has something to do with how much work you give to boost to do.  Parallelization generally does best when you throw enough work at it that overcomes the overhead of parallelization (e.g., network latency and bandwidth, etc.).
<br>
<p><p><p>On Aug 16, 2011, at 11:59 PM, Chen Kai wrote:
<br>
<p><span class="quotelev1">&gt; Environment: Boost1.47 + Microsoft HPC 2008 SDK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I find Delta Stepping Dijkstra and Crauser Dijkstra in boost, and both of them are slower than sequential dijkstra in boost. (About 10 times slower. I used 10 graphs, the biggest graph contains 10 million nodes and 10 million edges)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Q1: I wonder why the parallel dijkstra is slower than sequential version?
</span><br>
<span class="quotelev1">&gt; Q2: Can I adjust the number of threads that Delta Stepping used? (For exemple, I want it use 1, 2, 3, 4 threads respectively. And Can I make it sequential version?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Chen Kai
</span><br>
<span class="quotelev1">&gt; School of Computer Science, Fudan University
</span><br>
<span class="quotelev1">&gt; blog: <a href="http://www.cnblogs.com/remlostime/">http://www.cnblogs.com/remlostime/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17068.php">pascal.deveze_at_[hidden]: "[OMPI users] Bindings not detected with slurm (srun)"</a>
<li><strong>Previous message:</strong> <a href="17066.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>In reply to:</strong> <a href="17065.php">Chen Kai: "[OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<!-- nextthread="start" -->
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
