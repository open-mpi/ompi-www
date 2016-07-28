<?
$subject_val = "Re: [OMPI users] MPI_Isend delay";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 14 21:46:11 2011" -->
<!-- isoreceived="20110715014611" -->
<!-- sent="Thu, 14 Jul 2011 18:46:06 -0700" -->
<!-- isosent="20110715014606" -->
<!-- name="dave fournier" -->
<!-- email="davef_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Isend delay" -->
<!-- id="4E1F9BDE.6080100_at_otter-rsch.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="962C6242-11E1-41B8-A3EC-C1AF80B308E1_at_cisco.com" -->
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
<strong>From:</strong> dave fournier (<em>davef_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-14 21:46:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>In reply to:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11-07-14 06:37 PM, Jeff Squyres wrote:
<br>
<p>OK, Thanks, that is exactly what I needed to know.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dave
<br>
<p><span class="quotelev1">&gt; On Jul 14, 2011, at 8:33 PM, dave fournier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry I should have said it doesn't get sent until the *master* encounters an MPI_recv.
</span><br>
<span class="quotelev2">&gt;&gt; Then suddenly the slave finally gets the message and carries on its task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know that the slave is waiting because:
</span><br>
<span class="quotelev2">&gt;&gt; 1.) it doesn't print anything
</span><br>
<span class="quotelev2">&gt;&gt; 2.) I have attached to it with gdb previously to monitor the behaviour.
</span><br>
<span class="quotelev1">&gt; Ah -- so you're saying that the master does something like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Time = A: Master calls MPI_Isend(msg, ...,&amp;req);
</span><br>
<span class="quotelev1">&gt; Time = B: Master goes off and does other things
</span><br>
<span class="quotelev1">&gt; Time = C: Slave calls MPI_Recv(msg, ...);
</span><br>
<span class="quotelev1">&gt; Time = D: more time passes
</span><br>
<span class="quotelev1">&gt; Time = E: Master calls MPI_Recv(some_other_msg, ...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And you're saying that the slave should be getting the message (more or less) instantly at Time=C, but instead gets it at Time=E, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, it's because Open MPI does not do background progress on non-blocking sends in all cases.  Specifically, if you're sending over TCP and the message is &quot;long&quot;, the OMPI layer in the master doesn't actually send the whole message immediately because it doesn't want to unexpectedly consume a lot of resources in the slave.  So the master only sends a small fragment of the message and the communicator,tag tuple suitable for matching at the receiver. When the receiver posts a corresponding MPI_Recv (time=C), it sends back an ACK to the master, enabling the master to send the rest of the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, since OMPI doesn't support background progress in all situations, the master doesn't see this ACK until it goes into the MPI progression engine -- i.e., when you call MPI_Recv() at Time=E.  Then the OMPI layer in the master sees the ACK and sends the rest of the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can make quick dips into the OMPI progression engine by calling MPI_Test() on the request that you got back from MPI_Isend() -- e.g., you can do this at Time=B,C,D.  This is not as intrusive as calling MPI_Recv(), and may allow your message to be transferred earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16930.php">Mudassar Majeed: "Re: [OMPI users] Urgent Question regarding, MPI_ANY_SOURCE."</a>
<li><strong>Previous message:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
<li><strong>In reply to:</strong> <a href="16928.php">Jeff Squyres: "Re: [OMPI users] MPI_Isend delay"</a>
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
