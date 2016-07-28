<?
$subject_val = "Re: [OMPI users] sharing memory between processes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 28 15:11:50 2009" -->
<!-- isoreceived="20090428191150" -->
<!-- sent="Tue, 28 Apr 2009 12:11:15 -0700" -->
<!-- isosent="20090428191115" -->
<!-- name="Shaun Jackman" -->
<!-- email="sjackman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sharing memory between processes" -->
<!-- id="49F754D3.5080005_at_bcgsc.ca" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9b0da5ce0904280746i14b39fd2tcae7591dff423f1d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sharing memory between processes<br>
<strong>From:</strong> Shaun Jackman (<em>sjackman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-28 15:11:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9131.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9129.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For what it's worth, the genome assembly software ABySS uses exactly 
<br>
this system that Jody is describing to represent a directed graph.
<br>
<a href="http://www.bcgsc.ca/platform/bioinfo/software/abyss">http://www.bcgsc.ca/platform/bioinfo/software/abyss</a>
<br>
<p>Cheers,
<br>
Shaun
<br>
<p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi Barnabas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as i know, Open-MPI is not a shared memory system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using Open-MPI to attack your problem on N processors, i would poceed
</span><br>
<span class="quotelev1">&gt; as follows:
</span><br>
<span class="quotelev1">&gt; - processor 0 reads the table and then splits it into N parts
</span><br>
<span class="quotelev1">&gt; (Table_0,...Table_N)
</span><br>
<span class="quotelev1">&gt; - processor 0 sends Table_i to processor i (for all i &gt; 0) using MPI functions
</span><br>
<span class="quotelev1">&gt; - if processor k needs info from Table_j, processor k sends a request
</span><br>
<span class="quotelev1">&gt; to processor j
</span><br>
<span class="quotelev1">&gt; - processor j sends requested information to processor k
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course you'd need some scheme to find out on which Table_i a particular
</span><br>
<span class="quotelev1">&gt; entry can be found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This solution will work as well if your processors sit on several hosts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 28, 2009 at 3:28 PM, Barnabas Debreczeni &lt;keo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to this list and to parallel programming in general. I am
</span><br>
<span class="quotelev2">&gt;&gt; writing a trading simulator for the forex market and I am using
</span><br>
<span class="quotelev2">&gt;&gt; genetic algorithms to breed trading parameters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using PGAPack as a GA library, and it uses MPI to parallelize
</span><br>
<span class="quotelev2">&gt;&gt; optimization runs. This is how I got to Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am stuck at some point mainly because my lack of parallel
</span><br>
<span class="quotelev2">&gt;&gt; programming knowledge. What I'd like to achieve is: (I am doing it the
</span><br>
<span class="quotelev2">&gt;&gt; serial way right now)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Load price data from files, and compute a few tables (right now this
</span><br>
<span class="quotelev2">&gt;&gt; takes up ~4 GB of memory)
</span><br>
<span class="quotelev2">&gt;&gt; - Repeat...
</span><br>
<span class="quotelev2">&gt;&gt; -- Create new offsprings in the master process for the GA
</span><br>
<span class="quotelev2">&gt;&gt; -- Evaluate them in parallel (on 4 local CPUs but maybe more on LAN if
</span><br>
<span class="quotelev2">&gt;&gt; i need it)
</span><br>
<span class="quotelev2">&gt;&gt; - Until I get a satisfactory result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is, I'd like to share that 2 GB table (computed once at the
</span><br>
<span class="quotelev2">&gt;&gt; beginning, and is read-only after) between processes so I don't have
</span><br>
<span class="quotelev2">&gt;&gt; to use up 16 gigs of memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you share data between processes locally?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Later I will need to use other hosts too in the calculation. Will the
</span><br>
<span class="quotelev2">&gt;&gt; slaves on other hosts need to calculate their own tables on go on from
</span><br>
<span class="quotelev2">&gt;&gt; there and share them locally, or can I share these tables on the
</span><br>
<span class="quotelev2">&gt;&gt; master host with them?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How do you usually solve these kinds of problems?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you point me to some docs or keywords what should I learn about?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barnabas
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
<li><strong>Next message:</strong> <a href="9131.php">Ralph Castain: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>Previous message:</strong> <a href="9129.php">Hugh Dickinson: "Re: [OMPI users] ORTE_ERROR_LOG: Timeout in file"</a>
<li><strong>In reply to:</strong> <a href="9121.php">jody: "Re: [OMPI users] sharing memory between processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9126.php">Eugene Loh: "Re: [OMPI users] sharing memory between processes"</a>
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
