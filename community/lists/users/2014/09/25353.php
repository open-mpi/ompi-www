<?
$subject_val = "Re: [OMPI users] How does binding option affect network traffic?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 18 09:46:19 2014" -->
<!-- isoreceived="20140918134619" -->
<!-- sent="Thu, 18 Sep 2014 13:46:16 +0000" -->
<!-- isosent="20140918134616" -->
<!-- name="McGrattan, Kevin B. Dr." -->
<!-- email="kevin.mcgrattan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does binding option affect network traffic?" -->
<!-- id="75d2b648ed374e0b85589405a0df1b5e_at_BY2PR09MB0231.namprd09.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7C12DE1A-B1B2-415D-B542-A810558DCA8C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does binding option affect network traffic?<br>
<strong>From:</strong> McGrattan, Kevin B. Dr. (<em>kevin.mcgrattan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-18 09:46:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25354.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes and no. When I ran a single job that uses 16 MPI processes, and I mapped by socket and used 8 nodes, 2 ppn, the job ran 30% faster than the same job mapped by core on 2 nodes. Each process was fairly CPU intensive compared to the communication, so I suspect that the speed up was due to the fact that 2 processes are going to run faster on a node than 8. 
<br>
<p>However, if I load up the whole cluster with these kinds of jobs, then I agree that mapping by core makes more sense because all the nodes have all their cores saturated and the network traffic is greatly reduced. 
<br>
<p>Now I need to figure out how to configure my PBS scripts to exploit relatively empty vs relatively full clusters.
<br>
<p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Thursday, September 18, 2014 9:29 AM
<br>
To: Open MPI User's List
<br>
Subject: Re: [OMPI users] How does binding option affect network traffic?
<br>
<p>On Sep 5, 2014, at 11:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; It would be about the worst thing you can do, to be honest. Reason is that each socket is typically a separate NUMA region, and so the shared memory system would be sub-optimized in that configuration. It would be much better to map-by core to avoid the NUMA issues.
</span><br>
<p>+1
<br>
<p>Also, per the pictures I posted, perhaps in your stress testing you're trying to add more network traffic, but in general, most apps benefit from shared memory communication, not network communication.  Regardless of your network, shared memory communication is almost always faster.  So for real jobs, you should a) consider mapping by core, especially if your individual MPI processes are single-threaded, and b) smush as many of them together on as few servers as possible in order to maximize shared memory communication and minimize network communication.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25351.php">http://www.open-mpi.org/community/lists/users/2014/09/25351.php</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25354.php">XingFENG: "Re: [OMPI users] About debugging and asynchronous communication"</a>
<li><strong>Previous message:</strong> <a href="25352.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mpirun 1.5.4 problems when request	&gt;	28	slots	(updated findings)"</a>
<li><strong>In reply to:</strong> <a href="25351.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How does binding option affect network traffic?"</a>
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
