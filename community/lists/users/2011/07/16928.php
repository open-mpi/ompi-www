<?
$subject_val = "Re: [OMPI users] MPI_Isend delay";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 21:37:27 2011" -->
<!-- isoreceived="20110715013727" -->
<!-- sent="Thu, 14 Jul 2011 21:37:22 -0400" -->
<!-- isosent="20110715013722" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend delay" -->
<!-- id="962C6242-11E1-41B8-A3EC-C1AF80B308E1_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E1F8ADA.3010109_at_otter-rsch.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Isend delay<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 21:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2011, at 8:33 PM, dave fournier wrote:
<br>
<p><span class="quotelev1">&gt; Sorry I should have said it doesn't get sent until the *master* encounters an MPI_recv.
</span><br>
<span class="quotelev1">&gt; Then suddenly the slave finally gets the message and carries on its task.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I know that the slave is waiting because:
</span><br>
<span class="quotelev1">&gt; 1.) it doesn't print anything
</span><br>
<span class="quotelev1">&gt; 2.) I have attached to it with gdb previously to monitor the behaviour.
</span><br>
<p>Ah -- so you're saying that the master does something like this:
<br>
<p>Time = A: Master calls MPI_Isend(msg, ..., &amp;req);
<br>
Time = B: Master goes off and does other things
<br>
Time = C: Slave calls MPI_Recv(msg, ...);
<br>
Time = D: more time passes
<br>
Time = E: Master calls MPI_Recv(some_other_msg, ...);
<br>
<p>And you're saying that the slave should be getting the message (more or less) instantly at Time=C, but instead gets it at Time=E, right?
<br>
<p>If so, it's because Open MPI does not do background progress on non-blocking sends in all cases.  Specifically, if you're sending over TCP and the message is &quot;long&quot;, the OMPI layer in the master doesn't actually send the whole message immediately because it doesn't want to unexpectedly consume a lot of resources in the slave.  So the master only sends a small fragment of the message and the communicator,tag tuple suitable for matching at the receiver. When the receiver posts a corresponding MPI_Recv (time=C), it sends back an ACK to the master, enabling the master to send the rest of the message.
<br>
<p>However, since OMPI doesn't support background progress in all situations, the master doesn't see this ACK until it goes into the MPI progression engine -- i.e., when you call MPI_Recv() at Time=E.  Then the OMPI layer in the master sees the ACK and sends the rest of the message.
<br>
<p>Make sense?
<br>
<p>You can make quick dips into the OMPI progression engine by calling MPI_Test() on the request that you got back from MPI_Isend() -- e.g., you can do this at Time=B,C,D.  This is not as intrusive as calling MPI_Recv(), and may allow your message to be transferred earlier.
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
<li><strong>Next message:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Previous message:</strong> <a href="16927.php">Jeff Squyres: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>In reply to:</strong> <a href="16925.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>Reply:</strong> <a href="16929.php">dave fournier: "Re: [OMPI users] MPI_Isend delay"</a>
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
