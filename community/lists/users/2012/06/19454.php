<?
$subject_val = "Re: [OMPI users] Directed to Undirected Graph";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 13:07:40 2012" -->
<!-- isoreceived="20120605170740" -->
<!-- sent="Tue, 05 Jun 2012 12:07:35 -0500" -->
<!-- isosent="20120605170735" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Directed to Undirected Graph" -->
<!-- id="4FCE3CD7.7070808_at_sgi.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 13:07:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>Previous message:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>In reply to:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;You need to use 2 calls. One option is an Allgather followed by an 
<br>
Allgatherv.
<br>
<p>Allgather() with one integer, which is the number of nodes the rank is 
<br>
linked to
<br>
Allgatherv() with a variable size array of integers where each entry is 
<br>
a connected to node
<br>
<p><p>On 06/05/2012 08:39 AM, Mudassar Majeed wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear people,
</span><br>
<span class="quotelev1">&gt; Let say there are N MPI processes. Each MPI process has to communicate
</span><br>
<span class="quotelev1">&gt; with some T processes, where T &lt; N. This information is a directed graph
</span><br>
<span class="quotelev1">&gt; (and every process knows only about its own). I need to convert it to
</span><br>
<span class="quotelev1">&gt; undirected graph, so that each process will inform T other processes
</span><br>
<span class="quotelev1">&gt; about it. Every process will update this information. (that may be
</span><br>
<span class="quotelev1">&gt; stored in an array of maximum size N). What can be the best way to
</span><br>
<span class="quotelev1">&gt; exchange this information among all MPI processes ? MPI_AllGather and
</span><br>
<span class="quotelev1">&gt; MPI_AllGatherv do not solve my problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Mudassar
</span><br>
<span class="quotelev1">&gt;
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
<p><pre>
-- 
Michael A. Raymond
SGI MPT Team Leader
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
<li><strong>Previous message:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>In reply to:</strong> <a href="19449.php">Mudassar Majeed: "[OMPI users] Directed to Undirected Graph"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19455.php">Reuti: "Re: [OMPI users] Directed to Undirected Graph"</a>
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
