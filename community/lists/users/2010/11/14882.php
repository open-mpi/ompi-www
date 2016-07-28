<?
$subject_val = "Re: [OMPI users] MPI_Comm_split";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 16:56:11 2010" -->
<!-- isoreceived="20101124215611" -->
<!-- sent="Wed, 24 Nov 2010 21:55:58 -0000" -->
<!-- isosent="20101124215558" -->
<!-- name="Hicham Mouline" -->
<!-- email="hicham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_split" -->
<!-- id="002801cb8c22$615f8de0$241ea9a0$_at_org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="76097BB0C025054786EFAB631C4A2E3C094D4F58_at_MERCMBX02D.na.SAS.com" -->
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
<strong>From:</strong> Hicham Mouline (<em>hicham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 16:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14881.php">Bryan M Reese: "[OMPI users] openmpi 1.4.2 stalls starting IMB-MPI1 on 80 node cluster"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Bill Rankin
</span><br>
<span class="quotelev1">&gt; Sent: 24 November 2010 15:54
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_split
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, creating all those communicators really doesn't buy you
</span><br>
<span class="quotelev1">&gt; anything since you aren't using any collective operations across all
</span><br>
<span class="quotelev1">&gt; the subgroups you would be creating.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For this sort of course-grained parallelism, your best bet is probably
</span><br>
<span class="quotelev1">&gt; a master/slave (producer/consumer, worker-pool) model.  Have one
</span><br>
<span class="quotelev1">&gt; process (master) generate valid sets for your first X (of Y total)
</span><br>
<span class="quotelev1">&gt; parameters.  The master then sends a unique set of these parameters to
</span><br>
<span class="quotelev1">&gt; each slave process.  Each slave generates all possible sets of the
</span><br>
<span class="quotelev1">&gt; remaining parameters, evaluates the function for those parameter sets,
</span><br>
<span class="quotelev1">&gt; stores the local max/min and returns this value to the master.  Upon
</span><br>
<span class="quotelev1">&gt; receiving the max/min from the slave, the master compares this to the
</span><br>
<span class="quotelev1">&gt; global max/min and sends the slave a new set of the first X parameters.
</span><br>
<span class="quotelev1">&gt; Repeat until the master has sent all possible sets of X parameters and
</span><br>
<span class="quotelev1">&gt; all slaves have processed all their work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at it as a tree, the master process traverses the top of the
</span><br>
<span class="quotelev1">&gt; tree, handing each slave a branch and letting the slave traverse the
</span><br>
<span class="quotelev1">&gt; remainder of the tree.  For load balancing, you want a lot more
</span><br>
<span class="quotelev1">&gt; branches than you want slaves so that each slave is always kept busy.
</span><br>
<span class="quotelev1">&gt; But you also want enough work for each slave to where they are not
</span><br>
<span class="quotelev1">&gt; constantly communicating with the master asking for the next set of
</span><br>
<span class="quotelev1">&gt; parameters.  This is done by adjusting the depth to which the master
</span><br>
<span class="quotelev1">&gt; process traverses the parameter tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope this helps.  Good luck.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
It does very much, thanks a lot.
<br>
<p>The tree is not symmetrical in that the valid values for the 10th parameter
<br>
depends on the values selected in the 0th to 9th parameter (all the ancestry
<br>
in the tree), for e.g., we may have a lot of nodes in the left of the tree
<br>
than in the right, see attachment ( I hope they're allowed ) 
<br>
<p>The depth of the tree of course is the same everywhere, but not all nodes at
<br>
some level have the same number of children.
<br>
Is it better to just list vertically all the possible branches (n-tuples) at
<br>
the master level and split that list uniformly over the slaves?
<br>
<p>regards,
<br>
<p>
<br><p>
<p><hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14882/tree-param-sweep.JPG" alt="tree-param-sweep.JPG">
<!-- attachment="tree-param-sweep.JPG" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14883.php">Jesse Ziser: "[OMPI users] SIGPIPE handling?"</a>
<li><strong>Previous message:</strong> <a href="14881.php">Bryan M Reese: "[OMPI users] openmpi 1.4.2 stalls starting IMB-MPI1 on 80 node cluster"</a>
<li><strong>In reply to:</strong> <a href="14880.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14928.php">Jeff Squyres: "Re: [OMPI users] MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="14953.php">Bill Rankin: "Re: [OMPI users] MPI_Comm_split"</a>
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
