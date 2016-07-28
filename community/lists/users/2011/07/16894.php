<?
$subject_val = "Re: [OMPI users] Mpirun only works when n&lt; 3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 08:29:51 2011" -->
<!-- isoreceived="20110712122951" -->
<!-- sent="Tue, 12 Jul 2011 08:29:42 -0400" -->
<!-- isosent="20110712122942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun only works when n&amp;lt; 3" -->
<!-- id="73554E17-6615-49FE-B189-675DC2686ACF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1310398306.50655.YahooMailClassic_at_web121002.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mpirun only works when n&lt; 3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 08:29:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>Previous message:</strong> <a href="16893.php">Denis: "[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>In reply to:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 11, 2011, at 11:31 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; There are no firewalls by default.  I can ssh between both nodes without a password so I assumed that all is good with the comms.
</span><br>
<p>FWIW, ssh'ing is different than &quot;comms&quot; (which I assume you mean opening random TCP sockets between two servers).
<br>
<p><span class="quotelev1">&gt; I can also get both nodes to participate in the ring program at the same time.
</span><br>
<span class="quotelev1">&gt; Its just that I am limited to inly 2 processes if they are split between the nodes
</span><br>
<span class="quotelev1">&gt; ie:
</span><br>
<span class="quotelev1">&gt; mpirun -H A,B ring                         (works)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,A,A,A,A,A,A  ring     (works)
</span><br>
<span class="quotelev1">&gt; mpirun -H B,B,B,B ring                 (works)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,B,A  ring                    (hangs)
</span><br>
<p>It is odd that A,B works and A,B,A does not.
<br>
<p><span class="quotelev1">&gt; I have discovered slightly more information:
</span><br>
<span class="quotelev1">&gt; When I replace node 'B' from the new cluster with node 'C' from the old cluster
</span><br>
<span class="quotelev1">&gt; I get the similar behavior but with an error message:
</span><br>
<span class="quotelev1">&gt; mpirun -H A,A,A,A,A,A,A  ring     (works from either node)
</span><br>
<span class="quotelev1">&gt; mpirun -H C,C,C  ring     (works from either node)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,C  ring     (Fails from either node:)
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev1">&gt; [C:23465] ***  An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [C:23465] ***  on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [C:23465] ***  MPI_ERRORS_ARE FATAL (your job will now abort)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 1
</span><br>
<span class="quotelev1">&gt; ----------------------------------
</span><br>
<span class="quotelev1">&gt; Running this on either node A or C produces the same result
</span><br>
<span class="quotelev1">&gt; Node C runs openMPI 1.4.1 and is an ordinary dual core on FC10 , not an i5 2400 like the others.
</span><br>
<span class="quotelev1">&gt; all the binaries are compiled on FC10 with gcc 4.3.2
</span><br>
<p><p>Are you sure that all the versions of Open MPI being used on all nodes are exactly the same?  I.e., are you finding/using Open MPI v1.4.1 on all nodes?
<br>
<p>Are the nodes homogeneous in terms of software?  If they're heterogeneous in terms of hardware, you *might* need to have separate OMPI installations on each machine (vs., for example, a network-filesystem-based install shared to all 3) because the compiler's optimizer may produce code tailored for one of the machines, and it may therefore fail in unexpected ways on the other(s).  The same is true for your executable.
<br>
<p>See this FAQ entry about heterogeneous setups:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p>...hmm.  I could have sworn we had more on the FAQ about heterogeneity, but perhaps not.  The old LAM/MPI FAQ on heterogeneity is somewhat outdated, but most of its concepts are directly relevant to Open MPI as well:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.lam-mpi.org/faq/category11.php3">http://www.lam-mpi.org/faq/category11.php3</a>
<br>
<p>I should probably copy most of that LAM/MPI heterogeneous FAQ to the Open MPI FAQ, but it'll be waaay down on my priority list.  :-(  If anyone could help out here, I'd be happy to point them in the right direction to convert the LAM/MPI FAQ PHP to Open MPI FAQ PHP...  
<br>
<p>To be clear: the PHP conversion will be pretty trivial; I stole heavily from the LAM/MPI FAQ PHP to create the Open MPI FAQ PHP -- but there are points where the LAM/MPI heterogeneity text needs to be updated; that'll take an hour or two to update all that content.
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
<li><strong>Next message:</strong> <a href="16895.php">Jeff Squyres: "Re: [OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>Previous message:</strong> <a href="16893.php">Denis: "[OMPI users] icc erroring when trying to use a directory as a source file (Catastrophic error: cannot open source file &quot;paddress.c&quot;: is a directory )"</a>
<li><strong>In reply to:</strong> <a href="16889.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<li><strong>Reply:</strong> <a href="16912.php">Randolph Pullen: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
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
