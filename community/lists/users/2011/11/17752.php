<?
$subject_val = "Re: [OMPI users] Process Migration";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 10 11:11:19 2011" -->
<!-- isoreceived="20111110161119" -->
<!-- sent="Thu, 10 Nov 2011 11:11:13 -0500" -->
<!-- isosent="20111110161113" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Process Migration" -->
<!-- id="CAANzjEm5zkfvRZMo60YCZZSf8iqbi9=KF-3rv8+AmQmh3rzCgQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8FC70F92-CD1F-40B7-8661-9A3843CCCF41_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-10 11:11:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that the &quot;migrate me from my current node to node &lt;foo&gt;&quot; scenario
<br>
is covered by the migration API exported by the C/R infrastructure, as
<br>
I noted earlier.
<br>
&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate">http://osl.iu.edu/research/ft/ompi-cr/api.php#api-cr_migrate</a>
<br>
<p>The &quot;move rank N to node &lt;foo&gt;&quot; scenario could probably be added as an
<br>
extension of this interface (since you can do that via the command
<br>
line now) if that is what you are looking for.
<br>
<p>-- Josh
<br>
<p>On Thu, Nov 10, 2011 at 11:03 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So what you are looking for is an MPI extension API that let's you say
</span><br>
<span class="quotelev1">&gt; &quot;migrate me from my current node to node &lt;foo&gt;&quot;? Or do you have a rank that
</span><br>
<span class="quotelev1">&gt; is the &quot;master&quot; that would order &quot;move rank N to node &lt;foo&gt;&quot;?
</span><br>
<span class="quotelev1">&gt; Either could be provided, I imagine - just want to ensure I understand what
</span><br>
<span class="quotelev1">&gt; you need. Can you pass along a brief description of the syntax and
</span><br>
<span class="quotelev1">&gt; functionality you would need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2011, at 8:27 AM, Mudassar Majeed wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your reply. In our previous publication, we have figured it
</span><br>
<span class="quotelev1">&gt; out that run more than one processes on cores and balancing the
</span><br>
<span class="quotelev1">&gt; computational load considerably reduces the total execution time. You know
</span><br>
<span class="quotelev1">&gt; the MPI_Graph_create function, we created another function MPI_Load_create
</span><br>
<span class="quotelev1">&gt; that maps the processes on cores such that balance of computational load can
</span><br>
<span class="quotelev1">&gt; be achieved on cores. We were having some issues with increase in
</span><br>
<span class="quotelev1">&gt; communication cost due to ranks rearrangements (due to MPI_Comm_split, with
</span><br>
<span class="quotelev1">&gt; color=0), so in this research work we will see how can we balance both
</span><br>
<span class="quotelev1">&gt; computation load on each core and communication load on each node. Those
</span><br>
<span class="quotelev1">&gt; processes that communicate more will reside on the same node keeping the
</span><br>
<span class="quotelev1">&gt; computational load balance over the cores. I solved this problem using ILP
</span><br>
<span class="quotelev1">&gt; but ILP takes time and can't be used in run time so I am thinking about an
</span><br>
<span class="quotelev1">&gt; heuristic. That's why I want to see if it is possible to migrate a process
</span><br>
<span class="quotelev1">&gt; from one core to another or not. Then I will see how good my heuristic will
</span><br>
<span class="quotelev1">&gt; be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Mudassar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
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
<span class="quotelev2">&gt;&gt; Thank you for your reply. I am implementing a load balancing function for
</span><br>
<span class="quotelev2">&gt;&gt; MPI, that will balance the computation load and the communication both at a
</span><br>
<span class="quotelev2">&gt;&gt; time. So my algorithm assumes that all the cores may at the end get
</span><br>
<span class="quotelev2">&gt;&gt; different number of processes to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you talking about over-subscribing cores?&#160; I.e., putting more than 1 MPI
</span><br>
<span class="quotelev1">&gt; process on each core?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, that's not a good idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the beginning (before that function will be called), each core will
</span><br>
<span class="quotelev2">&gt;&gt; have equal number of processes. So I am thinking either to start more
</span><br>
<span class="quotelev2">&gt;&gt; processes on each core (than needed) and run my function for load balancing
</span><br>
<span class="quotelev2">&gt;&gt; and then block the remaining processes (on each core). In this way I will be
</span><br>
<span class="quotelev2">&gt;&gt; able to achieve different number of processes per core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI spins aggressively looking for network progress.&#160; For example, if
</span><br>
<span class="quotelev1">&gt; you block in an MPI_RECV waiting for a message, Open MPI is actively banging
</span><br>
<span class="quotelev1">&gt; on the CPU looking for network progress.&#160; Because of this (and other
</span><br>
<span class="quotelev1">&gt; reasons), you probably do not want to over-subscribe your processors
</span><br>
<span class="quotelev1">&gt; (meaning: you probably don't want to put more than 1 process per core).
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Previous message:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<li><strong>In reply to:</strong> <a href="17751.php">Ralph Castain: "Re: [OMPI users] Process Migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
<li><strong>Reply:</strong> <a href="17753.php">Mudassar Majeed: "Re: [OMPI users] Process Migration"</a>
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
