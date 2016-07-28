<?
$subject_val = "[OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 23:59:39 2011" -->
<!-- isoreceived="20110817035939" -->
<!-- sent="Wed, 17 Aug 2011 11:59:13 +0800" -->
<!-- isosent="20110817035913" -->
<!-- name="Chen Kai" -->
<!-- email="remlostime_at_[hidden]" -->
<!-- subject="[OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost" -->
<!-- id="CA+B++9cc9G8Xo7qOaLiJ8teu3yZtKbzksoevvgGwjUDrMzVuEA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost<br>
<strong>From:</strong> Chen Kai (<em>remlostime_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 23:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17066.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<li><strong>Reply:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Environment: Boost1.47 + Microsoft HPC 2008 SDK
<br>
<p>I find Delta Stepping Dijkstra and Crauser Dijkstra in boost, and both of
<br>
them are slower than sequential dijkstra in boost. (About 10 times slower. I
<br>
used 10 graphs, the biggest graph contains 10 million nodes and 10 million
<br>
edges)
<br>
<p>Q1: I wonder why the parallel dijkstra is slower than sequential version?
<br>
Q2: Can I adjust the number of threads that Delta Stepping used? (For
<br>
exemple, I want it use 1, 2, 3, 4 threads respectively. And Can I make it
<br>
sequential version?)
<br>
<p>Thx
<br>
<p><pre>
---
Chen Kai
School of Computer Science, Fudan University
blog: <a href="http://www.cnblogs.com/remlostime/">http://www.cnblogs.com/remlostime/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17065/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17066.php">Simone Pellegrini: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<li><strong>Previous message:</strong> <a href="17064.php">Ralph Castain: "Re: [OMPI users] MPI_Spawn and process allocation policy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
<li><strong>Reply:</strong> <a href="17067.php">Jeff Squyres: "Re: [OMPI users] [MPI][Boost] Some Questions About Delta Stepping Dijkstra in Boost"</a>
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
