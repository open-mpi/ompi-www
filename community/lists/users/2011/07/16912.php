<?
$subject_val = "Re: [OMPI users] Mpirun only works when n&lt; 3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 08:29:35 2011" -->
<!-- isoreceived="20110713122935" -->
<!-- sent="Wed, 13 Jul 2011 05:29:30 -0700 (PDT)" -->
<!-- isosent="20110713122930" -->
<!-- name="Randolph Pullen" -->
<!-- email="randolph_pullen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mpirun only works when n&amp;lt; 3" -->
<!-- id="1310560170.7436.YahooMailClassic_at_web121020.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="73554E17-6615-49FE-B189-675DC2686ACF_at_cisco.com" -->
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
<strong>From:</strong> Randolph Pullen (<em>randolph_pullen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-13 08:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16913.php">Markus Schmidberger: "[OMPI users] Running your MPI application on a Computer Cluster in the Cloud - cloudnumbers.com"</a>
<li><strong>Previous message:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it. &#160;&#160;Building a new openMPI solved it.
<br>
<p>I don't know if the standard Ubuntu install was the problem or if it just didn't like the slightly later kernel.
<br>
Seems to be reason to be suspicious of Ubuntu 10.10 OpenMPI builds if you have anything unusual in your system.
<br>
Thanks.
<br>
--- On Tue, 12/7/11, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p>From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Mpirun only works when n&lt; 3
<br>
To: randolph_pullen_at_[hidden]
<br>
Cc: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Received: Tuesday, 12 July, 2011, 10:29 PM
<br>
<p>On Jul 11, 2011, at 11:31 AM, Randolph Pullen wrote:
<br>
<p><span class="quotelev1">&gt; There are no firewalls by default.&#160; I can ssh between both nodes without a password so I assumed that all is good with the comms.
</span><br>
<p>FWIW, ssh'ing is different than &quot;comms&quot; (which I assume you mean opening random TCP sockets between two servers).
<br>
<p><span class="quotelev1">&gt; I can also get both nodes to participate in the ring program at the same time.
</span><br>
<span class="quotelev1">&gt; Its just that I am limited to inly 2 processes if they are split between the nodes
</span><br>
<span class="quotelev1">&gt; ie:
</span><br>
<span class="quotelev1">&gt; mpirun -H A,B ring&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;(works)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,A,A,A,A,A,A&#160; ring&#160; &#160;&#160;&#160;(works)
</span><br>
<span class="quotelev1">&gt; mpirun -H B,B,B,B ring&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;(works)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,B,A&#160; ring&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; (hangs)
</span><br>
<p>It is odd that A,B works and A,B,A does not.
<br>
<p><span class="quotelev1">&gt; I have discovered slightly more information:
</span><br>
<span class="quotelev1">&gt; When I replace node 'B' from the new cluster with node 'C' from the old cluster
</span><br>
<span class="quotelev1">&gt; I get the similar behavior but with an error message:
</span><br>
<span class="quotelev1">&gt; mpirun -H A,A,A,A,A,A,A&#160; ring&#160; &#160;&#160;&#160;(works from either node)
</span><br>
<span class="quotelev1">&gt; mpirun -H C,C,C&#160; ring&#160; &#160;&#160;&#160;(works from either node)
</span><br>
<span class="quotelev1">&gt; mpirun -H A,C&#160; ring&#160; &#160;&#160;&#160;(Fails from either node:)
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 1, tag 201 (3 processes in ring)
</span><br>
<span class="quotelev1">&gt; [C:23465] ***&#160; An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [C:23465] ***&#160; on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [C:23465] ***&#160; MPI_ERRORS_ARE FATAL (your job will now abort)
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
<p><p>Are you sure that all the versions of Open MPI being used on all nodes are exactly the same?&#160; I.e., are you finding/using Open MPI v1.4.1 on all nodes?
<br>
<p>Are the nodes homogeneous in terms of software?&#160; If they're heterogeneous in terms of hardware, you *might* need to have separate OMPI installations on each machine (vs., for example, a network-filesystem-based install shared to all 3) because the compiler's optimizer may produce code tailored for one of the machines, and it may therefore fail in unexpected ways on the other(s).&#160; The same is true for your executable.
<br>
<p>See this FAQ entry about heterogeneous setups:
<br>
<p>&#160; &#160; <a href="http://www.open-mpi.org/faq/?category=building#where-to-install">http://www.open-mpi.org/faq/?category=building#where-to-install</a>
<br>
<p>...hmm.&#160; I could have sworn we had more on the FAQ about heterogeneity, but perhaps not.&#160; The old LAM/MPI FAQ on heterogeneity is somewhat outdated, but most of its concepts are directly relevant to Open MPI as well:
<br>
<p>&#160; &#160; <a href="http://www.lam-mpi.org/faq/category11.php3">http://www.lam-mpi.org/faq/category11.php3</a>
<br>
<p>I should probably copy most of that LAM/MPI heterogeneous FAQ to the Open MPI FAQ, but it'll be waaay down on my priority list.&#160; :-(&#160; If anyone could help out here, I'd be happy to point them in the right direction to convert the LAM/MPI FAQ PHP to Open MPI FAQ PHP...&#160; 
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16912/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16913.php">Markus Schmidberger: "[OMPI users] Running your MPI application on a Computer Cluster in the Cloud - cloudnumbers.com"</a>
<li><strong>Previous message:</strong> <a href="16911.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16894.php">Jeff Squyres: "Re: [OMPI users] Mpirun only works when n&lt; 3"</a>
<!-- nextthread="start" -->
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
