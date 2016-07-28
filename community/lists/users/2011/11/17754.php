<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 12:59:22 2011" -->
<!-- isoreceived="20111110175922" -->
<!-- sent="Thu, 10 Nov 2011 12:59:17 -0500" -->
<!-- isosent="20111110175917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="811FFDFC-C3B6-4BF7-9E53-95C0B572FD74_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1320942644.34147.YahooMailNeo_at_web121703.mail.ne1.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 12:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17755.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2011, at 11:30 AM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; For example there are 10 nodes, and each node contains 20 cores. We will have 200 cores in total and let say there are 2000 MPI processes. We start the application with 10 MPI on each core.
</span><br>
<p>Is this just to be able to simulate very large MPI jobs, or are you thinking that people will actually run that way (heavily over-subscribing cores)?
<br>
<p><span class="quotelev1">&gt; Let say Comm(Pi, Pj) denotes how much communication Pi and Pj make with each other and let say each process Pi has to communicate with few other processes Pj, Pk, Pl, Pm..... Pz. Secondly let say Load(Pi) denotes the computational load of process Pi. 
</span><br>
<p>Depending on how you define Load(Pi), this really only matters if you're over-subscribing processors.  Meaning: if you have only one MPI process per processor core, then Load(Pi) is probably irrelevant (excluding other effects, like cache thrashing, memory and PCI bandwidth usage, etc.).
<br>
<p>Right?
<br>
<p><span class="quotelev1">&gt; Now, we know that sending a message between two nodes is more expensive then sending a message within a node (two processes that communicate reside on the cores that exist in the same node). This is true atleast in my supercomputing centers that I use. In my previous work I only consider Load[ ] and not Comm[ ]. In that work, all the MPI processes calculate their new ranks and then call MPI_Comm_split with key = new_rank and color = 0. So all the processes get the new rank and then the actual data is provided to each process for computation. We have found that the total execution time decreases.
</span><br>
<p>In an oversubscribed case, I'm still not sure how this works.  Do you have some MPI processes doing work and some not?  (e.g., blocking in sleep() or something)
<br>
<p>I think the reason for my confusion is that MPI processes are generally designed to run 1 per core (or perhaps 1 MPI process per more-than-1-core, if the MPI process is multi-threaded).  MPI processes are generally assumed to aggressively use the entire computational resource that is given to them -- sharing computational resources (e.g., cores) between multiple MPI processes would seem to violate that assumption, and therefore result in bad overall performance.
<br>
<p>I feel like I must be missing something in what you're trying to describe...
<br>
<p><span class="quotelev1">&gt; Now we need to consider the communications as well. We will bring the computational load balance but those MPI which communicate more will be mapped to the same node (not necessarily same cores). I have solved this optimization problem using ILP and that shows good results. But the thing is, in the solution I have found that after applying ILP or my heuristic, the cores (on all nodes) will no longer contain same number of MPI processes (load and communications are balanced instead of count of MPI processes per core). So this means either I use process migration for few processes or I run more than 2000 (means at every core I run few more processes) so that at the end imbalance in the number or MPI processes per core can be achieved (to achieve balance in load and communications). I need your suggestions in these regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks and best regards,
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt; From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, November 10, 2011 5:11 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Process Migration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the &quot;migrate me from my current node to node &lt;foo&gt;&quot; scenario
</span><br>
<span class="quotelev1">&gt; is covered by the migration API exported by the C/R infrastructure, as
</span><br>
<span class="quotelev1">&gt; I noted earlier.
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;move rank N to node &lt;foo&gt;&quot; scenario could probably be added as an
</span><br>
<span class="quotelev1">&gt; extension of this interface (since you can do that via the command
</span><br>
<span class="quotelev1">&gt; line now) if that is what you are looking for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 10, 2011 at 11:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; So what you are looking for is an MPI extension API that let's you say
</span><br>
<span class="quotelev2">&gt; &gt; &quot;migrate me from my current node to node &lt;foo&gt;&quot;? Or do you have a rank that
</span><br>
<span class="quotelev2">&gt; &gt; is the &quot;master&quot; that would order &quot;move rank N to node &lt;foo&gt;&quot;?
</span><br>
<span class="quotelev2">&gt; &gt; Either could be provided, I imagine - just want to ensure I understand what
</span><br>
<span class="quotelev2">&gt; &gt; you need. Can you pass along a brief description of the syntax and
</span><br>
<span class="quotelev2">&gt; &gt; functionality you would need?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 10, 2011, at 8:27 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your reply. In our previous publication, we have figured it
</span><br>
<span class="quotelev2">&gt; &gt; out that run more than one processes on cores and balancing the
</span><br>
<span class="quotelev2">&gt; &gt; computational load considerably reduces the total execution time. You know
</span><br>
<span class="quotelev2">&gt; &gt; the MPI_Graph_create function, we created another function MPI_Load_create
</span><br>
<span class="quotelev2">&gt; &gt; that maps the processes on cores such that balance of computational load can
</span><br>
<span class="quotelev2">&gt; &gt; be achieved on cores. We were having some issues with increase in
</span><br>
<span class="quotelev2">&gt; &gt; communication cost due to ranks rearrangements (due to MPI_Comm_split, with
</span><br>
<span class="quotelev2">&gt; &gt; color=0), so in this research work we will see how can we balance both
</span><br>
<span class="quotelev2">&gt; &gt; computation load on each core and communication load on each node. Those
</span><br>
<span class="quotelev2">&gt; &gt; processes that communicate more will reside on the same node keeping the
</span><br>
<span class="quotelev2">&gt; &gt; computational load balance over the cores. I solved this problem using ILP
</span><br>
<span class="quotelev2">&gt; &gt; but ILP takes time and can't be used in run time so I am thinking about an
</span><br>
<span class="quotelev2">&gt; &gt; heuristic. That's why I want to see if it is possible to migrate a process
</span><br>
<span class="quotelev2">&gt; &gt; from one core to another or not. Then I will see how good my heuristic will
</span><br>
<span class="quotelev2">&gt; &gt; be.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Mudassar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, November 10, 2011 2:19 PM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Process Migration
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you for your reply. I am implementing a load balancing function for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI, that will balance the computation load and the communication both at a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; time. So my algorithm assumes that all the cores may at the end get
</span><br>
<span class="quotelev3">&gt; &gt;&gt; different number of processes to run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Are you talking about over-subscribing cores?  I.e., putting more than 1 MPI
</span><br>
<span class="quotelev2">&gt; &gt; process on each core?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In general, that's not a good idea.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In the beginning (before that function will be called), each core will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have equal number of processes. So I am thinking either to start more
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes on each core (than needed) and run my function for load balancing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and then block the remaining processes (on each core). In this way I will be
</span><br>
<span class="quotelev3">&gt; &gt;&gt; able to achieve different number of processes per core.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI spins aggressively looking for network progress.  For example, if
</span><br>
<span class="quotelev2">&gt; &gt; you block in an MPI_RECV waiting for a message, Open MPI is actively banging
</span><br>
<span class="quotelev2">&gt; &gt; on the CPU looking for network progress.  Because of this (and other
</span><br>
<span class="quotelev2">&gt; &gt; reasons), you probably do not want to over-subscribe your processors
</span><br>
<span class="quotelev2">&gt; &gt; (meaning: you probably don't want to put more than 1 process per core).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li><strong>Next message:</strong> <a href="17755.php">amosleff_at_[hidden]: "Re: [OMPI users] Problems compiling and running openmpi-1.4.4"</a>
<li><strong>Previous message:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
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
