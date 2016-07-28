<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 10:53:58 2010" -->
<!-- isoreceived="20101124155358" -->
<!-- sent="Wed, 24 Nov 2010 15:53:47 +0000" -->
<!-- isosent="20101124155347" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="76097BB0C025054786EFAB631C4A2E3C094D4F58_at_MERCMBX02D.na.SAS.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="004201cb8b50$dfc11a50$9f434ef0$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_split<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 10:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14881.php">Bryan M Reese: "[OMPI users] openmpi 1.4.2 stalls starting IMB-MPI1 on 80 node cluster"</a>
<li><strong>Previous message:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In this case, creating all those communicators really doesn't buy you anything since you aren't using any collective operations across all the subgroups you would be creating.
<br>
<p>For this sort of course-grained parallelism, your best bet is probably a master/slave (producer/consumer, worker-pool) model.  Have one process (master) generate valid sets for your first X (of Y total) parameters.  The master then sends a unique set of these parameters to each slave process.  Each slave generates all possible sets of the remaining parameters, evaluates the function for those parameter sets, stores the local max/min and returns this value to the master.  Upon receiving the max/min from the slave, the master compares this to the global max/min and sends the slave a new set of the first X parameters.  Repeat until the master has sent all possible sets of X parameters and all slaves have processed all their work.
<br>
<p>Looking at it as a tree, the master process traverses the top of the tree, handing each slave a branch and letting the slave traverse the remainder of the tree.  For load balancing, you want a lot more branches than you want slaves so that each slave is always kept busy.  But you also want enough work for each slave to where they are not constantly communicating with the master asking for the next set of parameters.  This is done by adjusting the depth to which the master process traverses the parameter tree.
<br>
<p>Hope this helps.  Good luck.
<br>
<p>-b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Hicham Mouline
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, November 23, 2010 3:56 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users'
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_split
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt; &gt; Behalf Of Bill Rankin
</span><br>
<span class="quotelev2">&gt; &gt; Sent: 23 November 2010 19:32
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_Comm_split
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hicham:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I have a 256 mpi processes in 1 communicator, am I able to split
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that communicator, then again split the resulting 2 subgroups, then
</span><br>
<span class="quotelev3">&gt; &gt; &gt; again the resulting 4 subgroups and so on, until potentially having
</span><br>
<span class="quotelev2">&gt; &gt; 256
</span><br>
<span class="quotelev3">&gt; &gt; &gt; subgroups?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can.  But as the old saying goes: &quot;just because you *can* do
</span><br>
<span class="quotelev2">&gt; &gt; something doesn't necessarily mean you *should* do it.&quot; :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is your intent in creating all these communicators?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this insane in terms of performance?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, how much &quot;real&quot; work are you doing?  Operations on
</span><br>
<span class="quotelev1">&gt; communicators
</span><br>
<span class="quotelev2">&gt; &gt; are collectives, so they are expensive.  However if you do this only
</span><br>
<span class="quotelev2">&gt; &gt; once at the beginning of something like a three-week long simulation
</span><br>
<span class="quotelev2">&gt; &gt; run then you probably won't notice the impact.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In any case, I suspect there is a better way.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -bill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have need for a parallel parameter sweep. I have arguments x0 to x9
</span><br>
<span class="quotelev1">&gt; say of
</span><br>
<span class="quotelev1">&gt; a function.
</span><br>
<span class="quotelev1">&gt; I need to evaluate this function for every acceptable combination of
</span><br>
<span class="quotelev1">&gt; x0,...x9.
</span><br>
<span class="quotelev1">&gt; This list of acceptable combinations forms what I can view as a tree:
</span><br>
<span class="quotelev1">&gt; . under the root node, all possible values of x0 (say there are 10 of
</span><br>
<span class="quotelev1">&gt; them
</span><br>
<span class="quotelev1">&gt; x0_0 to x0_9)
</span><br>
<span class="quotelev1">&gt; . under each of these nodes, all possible values of x1 that agree with
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; args defined so far, for .e.g
</span><br>
<span class="quotelev1">&gt; if x1_0 is not possible with x0_0, then it's not part of the tree...
</span><br>
<span class="quotelev1">&gt; . and so on until reaching the leaf nodes. At those nodes, I evaluate
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; function and I want the global maximum and/or minimum.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the order of magnitude is 128 for the depth of the tree, and 100
</span><br>
<span class="quotelev1">&gt; possible
</span><br>
<span class="quotelev1">&gt; values for each x.
</span><br>
<span class="quotelev1">&gt; each eval takes a couple of ms though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought this facility of splitting communicators maps nicely the
</span><br>
<span class="quotelev1">&gt; nature of
</span><br>
<span class="quotelev1">&gt; my problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what do you think?
</span><br>
<span class="quotelev1">&gt; I'm actually not exactly sure how I'm gonna do it, but wished to have
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev1">&gt; opinion about whether it's just crazy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rds,
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
<li><strong>Next message:</strong> <a href="14881.php">Bryan M Reese: "[OMPI users] openmpi 1.4.2 stalls starting IMB-MPI1 on 80 node cluster"</a>
<li><strong>Previous message:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="14879.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14882.php">Hicham Mouline: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14914.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
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
