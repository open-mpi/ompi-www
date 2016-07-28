<?
$subject_val = "Re: [OMPI users] Directed to Undirected Graph";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 13:13:37 2012" -->
<!-- isoreceived="20120605171337" -->
<!-- sent="Tue, 5 Jun 2012 19:13:26 +0200" -->
<!-- isosent="20120605171326" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Directed to Undirected Graph" -->
<!-- id="5A29F2F3-7948-4E4E-9CF7-7B75C09A3EEE_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1338903572.90353.YahooMailNeo_at_web121705.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Directed to Undirected Graph<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 13:13:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Previous message:</strong> <a href="19454.php">Michael Raymond: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>In reply to:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 05.06.2012 um 15:39 schrieb Mudassar Majeed:
<br>
<p><span class="quotelev1">&gt;                        Let say there are N MPI processes. Each MPI process has to communicate with some T processes, where T &lt; N. This information is a directed graph (and every process knows only about its own). I need to convert it to undirected graph, so that each process will inform T other processes about it. Every process will update this information. (that may be stored in an array of maximum size N). What can be the best way to exchange this information among all MPI processes ? MPI_AllGather and MPI_AllGatherv do not solve my problem. 
</span><br>
<p>I'm not sure whether I understand the problem in the correct way: in principle you want to gather all information maybe to the rank 0 process from each process, and then broadcast the complete information to all processes.
<br>
<p>Why is MPI_AllGather not working for you then? Each element needs to be a vector with the index of the targeted T processes flagged. Each of the T processes have to look then into the received vectors (from all processes) whether they are mentioned there. Each of the T processes can be targeted by more than one of the N processes?
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19456.php">Siegmar Gross: "[OMPI users] &quot;-library=stlport4&quot; neccessary for Sun C"</a>
<li><strong>Previous message:</strong> <a href="19454.php">Michael Raymond: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>In reply to:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
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
