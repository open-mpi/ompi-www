<?
$subject_val = "Re: [OMPI users] MPI_Bcast issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 11 09:53:23 2010" -->
<!-- isoreceived="20100811135323" -->
<!-- sent="Wed, 11 Aug 2010 09:54:36 -0400" -->
<!-- isosent="20100811135436" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast issue" -->
<!-- id="A2733DCD-105B-497C-97E4-FB068B1C793D_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="362208.37373.qm_at_web50807.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast issue<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-11 09:54:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13966.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2010, at 10:09 PM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; Jeff thanks for the clarification,
</span><br>
<span class="quotelev1">&gt; What I am trying to do is run N concurrent copies of a 1 to N data movement program to affect an N to N solution.  The actual mechanism I am using is to spawn N copies of mpirun from PVM across the cluster. So each 1 to N MPI application starts at the same time with a different node as root.
</span><br>
<p>You mentioned that each root has a large amount of data to broadcast.  How large?  
<br>
<p>Have you done back-of-the-envelope kinds of calculations to determine if you're hitting link contention kinds of limits -- e.g., would running a series of N/M broadcasts sequentially actually result in a net speedup (vs. running all N broadcasts simultaneously) because of lack of network congestion / contention?
<br>
<p>If the messages are as large as you imply, then link contention must be taken into account of overall performance, particularly if you're using more than just a handful of nodes.
<br>
<p><span class="quotelev1">&gt; Yes I know this is a bit odd&#226;&#128;&#166;  It was an attempt to be lazy and not re-write the code (again) and this appears to be a potential log N solution.
</span><br>
<p>I'm not sure I understand that statement -- why would this be a log(n) solution if everyone is broadcasting simultaneously? (and therefore each root is assumedly using most/all available send bandwidth from its link)
<br>
<p><span class="quotelev1">&gt; My thoughts are that the problem must be either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)    Some bug in my code that does not occur normally (this seems unlikely because it halts in Bcast and runs in the normal 1 to N manner)
</span><br>
<span class="quotelev1">&gt; 2)    Something in MPI is fouling the bcast call
</span><br>
<span class="quotelev1">&gt; 3)    Something in PVM is fouling the bcast call
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Obviously, this is not the PVM forum, but have I missed anything?
</span><br>
<p>A fourth possibility is that the network is dropping something that it shouldn't be (with high link contention, this is possible).  You haven't mentioned, but I'm assuming that you're running over ethernet -- perhaps you're running into TCP drops and therefore (very long) TCP retransmit timeouts.
<br>
<p>If you want to remove PVM from the equation, you could mpirun a trivial bootstrap application across all your nodes that, on each MCW rank process, calls MPI_COMM_SPAWN on MPI_COMM_SELF for the broadcast that is supposed to be rooted on that node.
<br>
<p><span class="quotelev1">&gt; BTW: Implementing Bcast with Multicast or a combination of both multicasts and p2p transfers is another option and described by Hoefler et. al. in their paper &#226;&#128;&#156;A practically constant-time MPI Broadcast Algorithm for large-scale In&#239;&#172;&#129;niBand Clusters with Multicast&#226;&#128;&#157;.
</span><br>
<p>Yep; I've read it.  Torsten's a smart guy.  :-)  I'd love to see a plugin contributed that implements this algorithm, or one of other reliable multicast algorithms.
<br>
<p>Keep in mind that if N (where N is large) roots are all transmitting very large multicast messages simultaneously, this is a situation where networks are free to drop.  In a pathological case like yours, N simultaneous multicasts may not perform as well as you would expect.
<br>
<p><span class="quotelev1">&gt; From here I need to decide to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1)    Generate a minimal example but given that this will require PVM, it is unlikely to see much use.
</span><br>
<p>I think if you can write a small MPI-only example, that would be most helpful.
<br>
<p><span class="quotelev1">&gt; 2)    Write a N to N transfer system in MPI using inter-communicators, however this may not scale with only p2p transfers and is probably N Log N at best.
</span><br>
<p>Intercommunicators are a red herring here.  They were mentioned earlier in the thread because people thought you were using the MPI accept/connect model of joining multiple MPI processes together.  If you aren't doing that, intercomms are likely unnecessary.
<br>
<p><span class="quotelev1">&gt; 3)    Write the N to N transfer system in PVM, Open Fabric calls or something that supports broadcast/multicast calls.
</span><br>
<p>I'm not sure if OpenFabrics verbs support multicast.  Mellanox ConnectX cards were supposed to do this eventually, but I don't know if that capability ever was finished (Cisco left the IB business a while ago, so I've stopped paying attention to IB developments).
<br>
<p><span class="quotelev1">&gt; My application must transfer a large (potentially huge) amount of tuples from a table distributed across the cluster to a table replicated on each node.  The similar (1 to N) system compresses tuples into 64k pages and sends these.  The same method would be used and the page size could be varied for efficiency.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are your thoughts?  Can OpenMPI do this in under N log N time?
</span><br>
<p>(Open) MPI is just a message passing library -- in terms of raw bandwidth transfer, it can pretty much do anything that your underlying network can do.  Whether MPI_BCAST or MPI_ALLGATHER is the right mechanism or not is a different issue.
<br>
<p>(I'll say that OMPI's ALLGATHER algorithm is probably not well optimized for massive data transfers like you describe)
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="13969.php">Richard Treumann: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>In reply to:</strong> <a href="13966.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Reply:</strong> <a href="13971.php">Jeff Squyres: "Re: [OMPI users] MPI_Bcast issue"</a>
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
