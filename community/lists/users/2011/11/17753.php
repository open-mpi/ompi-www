<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 11:30:50 2011" -->
<!-- isoreceived="20111110163050" -->
<!-- sent="Thu, 10 Nov 2011 08:30:44 -0800 (PST)" -->
<!-- isosent="20111110163044" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="1320942644.34147.YahooMailNeo_at_web121703.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAANzjEm5zkfvRZMo60YCZZSf8iqbi9=KF-3rv8+AmQmh3rzCgQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 11:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For example there are 10 nodes, and each node contains 20 cores. We will have 200 cores in total and let say there are 2000 MPI processes. We start the application with 10 MPI on each core. Let say Comm(Pi, Pj) denotes how much communication Pi and Pj make with each other and let say each process Pi has to communicate with few other processes Pj, Pk, Pl, Pm..... Pz. Secondly let say Load(Pi) denotes the computational load of process Pi. 

Now, we know that sending a message between two nodes is more expensive then sending a message within a node (two processes that communicate reside on the cores that exist in the same node). This is true atleast in my supercomputing centers that I use. In my previous work I only consider Load[ ] and not Comm[ ]. In that work, all the MPI processes calculate their new ranks and then call MPI_Comm_split with key = new_rank and color = 0. So all the processes get the new rank and then the actual data is provided to each process for computation. We have found that the total execution time decreases. Now we need to consider the communications as well. We will bring the computational load balance but those MPI which communicate more will be mapped to the same node (not necessarily same cores). I have solved this optimization problem using ILP and that shows good results. But the thing is, in the solution I have found that after applying ILP or my heuristic,
<br>
&nbsp;the cores (on all nodes) will no longer contain same number of MPI processes (load and communications are balanced instead of count of MPI processes per core). So this means either I use process migration for few processes or I run more than 2000 (means at every core I run few more processes) so that at the end imbalance in the number or MPI processes per core can be achieved (to achieve balance in load and communications). I need your suggestions in these regards,

thanks and best regards,
Mudassar


________________________________
From: Josh Hursey &lt;jjhursey_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt;
Cc: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;
Sent: Thursday, November 10, 2011 5:11 PM
Subject: Re: [OMPI users] Process Migration

Note that the &quot;migrate me from my current node to node &lt;foo&gt;&quot; scenario
is covered by the migration API exported by the C/R infrastructure, as
I noted earlier.
&#160; <a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate</a>

The &quot;move rank N to node &lt;foo&gt;&quot; scenario could probably be added as an
extension of this interface (since you can do that via the command
line now) if that is what you are looking for.

-- Josh

On Thu, Nov 10, 2011 at 11:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; So what you are looking for is an MPI extension API that let's you say
&gt; &quot;migrate me from my current node to node &lt;foo&gt;&quot;? Or do you have a rank that
&gt; is the &quot;master&quot; that would order &quot;move rank N to node &lt;foo&gt;&quot;?
&gt; Either could be provided, I imagine - just want to ensure I understand what
&gt; you need. Can you pass along a brief description of the syntax and
&gt; functionality you would need?
&gt;
&gt; On Nov 10, 2011, at 8:27 AM, Mudassar Majeed wrote:
&gt;
&gt; Thank you for your reply. In our previous publication, we have figured it
&gt; out that run more than one processes on cores and balancing the
&gt; computational load considerably reduces the total execution time. You know
&gt; the MPI_Graph_create function, we created another function MPI_Load_create
&gt; that maps the processes on cores such that balance of computational load can
&gt; be achieved on cores. We were having some issues with increase in
&gt; communication cost due to ranks rearrangements (due to MPI_Comm_split, with
&gt; color=0), so in this research work we will see how can we balance both
&gt; computation load on each core and communication load on each node. Those
&gt; processes that communicate more will reside on the same node keeping the
&gt; computational load balance over the cores. I solved this problem using ILP
&gt; but ILP takes time and can't be used in run time so I am thinking about an
&gt; heuristic. That's why I want to see if it is possible to migrate a process
&gt; from one core to another or not. Then I will see how good my heuristic will
&gt; be.
&gt;
&gt; thanks
&gt; Mudassar
&gt;
&gt; ________________________________
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users
&gt; &lt;users_at_[hidden]&gt;
&gt; Cc: Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; Sent: Thursday, November 10, 2011 2:19 PM
&gt; Subject: Re: [OMPI users] Process Migration
&gt;
&gt; On Nov 10, 2011, at 8:11 AM, Mudassar Majeed wrote:
&gt;
&gt;&gt; Thank you for your reply. I am implementing a load balancing function for
&gt;&gt; MPI, that will balance the computation load and the communication both at a
&gt;&gt; time. So my algorithm assumes that all the cores may at the end get
&gt;&gt; different number of processes to run.
&gt;
&gt; Are you talking about over-subscribing cores?&#160; I.e., putting more than 1 MPI
&gt; process on each core?
&gt;
&gt; In general, that's not a good idea.
&gt;
&gt;&gt; In the beginning (before that function will be called), each core will
&gt;&gt; have equal number of processes. So I am thinking either to start more
&gt;&gt; processes on each core (than needed) and run my function for load balancing
&gt;&gt; and then block the remaining processes (on each core). In this way I will be
&gt;&gt; able to achieve different number of processes per core.
&gt;
&gt; Open MPI spins aggressively looking for network progress.&#160; For example, if
&gt; you block in an MPI_RECV waiting for a message, Open MPI is actively banging
&gt; on the CPU looking for network progress.&#160; Because of this (and other
&gt; reasons), you probably do not want to over-subscribe your processors
&gt; (meaning: you probably don't want to put more than 1 process per core).
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;



-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17752.php">Josh Hursey: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17754.php">Jeff Squyres: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17759.php">Ioannis Papadopoulos: "Re: [OMPI users] Process Migration"</a>
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
