<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 11:03:19 2011" -->
<!-- isoreceived="20111110160319" -->
<!-- sent="Thu, 10 Nov 2011 09:03:10 -0700" -->
<!-- isosent="20111110160310" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="8FC70F92-CD1F-40B7-8661-9A3843CCCF41_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1320938832.68451.YahooMailNeo_at_web121701.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Process Migration<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 11:03:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17750.php">Eugene Loh: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So what you are looking for is an MPI extension API that let's you say &quot;migrate me from my current node to node &lt;foo&gt;&quot;? Or do you have a rank that is the &quot;master&quot; that would order &quot;move rank N to node &lt;foo&gt;&quot;?
<br>
<p>Either could be provided, I imagine - just want to ensure I understand what you need. Can you pass along a brief description of the syntax and functionality you would need?
<br>
<p><p>On Nov 10, 2011, at 8:27 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. In our previous publication, we have figured it out that run more than one processes on cores and balancing the computational load considerably reduces the total execution time. You know the MPI_Graph_create function, we created another function MPI_Load_create that maps the processes on cores such that balance of computational load can be achieved on cores. We were having some issues with increase in communication cost due to ranks rearrangements (due to MPI_Comm_split, with color=0), so in this research work we will see how can we balance both computation load on each core and communication load on each node. Those processes that communicate more will reside on the same node keeping the computational load balance over the cores. I solved this problem using ILP but ILP takes time and can't be used in run time so I am thinking about an heuristic. That's why I want to see if it is possible to migrate a process from one core to another or not. Then I will see how good my heuristic will be.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 10, 2011 2:19 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Process Migration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your reply. I am implementing a load balancing function for MPI, that will balance the computation load and the communication both at a time. So my algorithm assumes that all the cores may at the end get different number of processes to run.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you talking about over-subscribing cores?  I.e., putting more than 1 MPI process on each core?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general, that's not a good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In the beginning (before that function will be called), each core will have equal number of processes. So I am thinking either to start more processes on each core (than needed) and run my function for load balancing and then block the remaining processes (on each core). In this way I will be able to achieve different number of processes per core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI spins aggressively looking for network progress.  For example, if you block in an MPI_RECV waiting for a message, Open MPI is actively banging on the CPU looking for network progress.  Because of this (and other reasons), you probably do not want to over-subscribe your processors (meaning: you probably don't want to put more than 1 process per core).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17750.php">Eugene Loh: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17749.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
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
