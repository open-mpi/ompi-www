<?
$subject_val = "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 19 09:48:05 2008" -->
<!-- isoreceived="20080619134805" -->
<!-- sent="Thu, 19 Jun 2008 09:47:57 -0400 (EDT)" -->
<!-- isosent="20080619134757" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress" -->
<!-- id="Pine.LNX.4.64.0806190944500.21058_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="485A627A.8040803_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-19 09:47:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>In reply to:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 19 Jun 2008, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; But my concern is not the raw performance of MPI_Iprobe in this case but more 
</span><br>
<span class="quotelev1">&gt; of an interaction between MPI and an application.  The concern is if it takes 
</span><br>
<span class="quotelev1">&gt; 2 MPI_Iprobes to get to the real message (instead of one) then could this 
</span><br>
<span class="quotelev1">&gt; induce a synchronization delay in an application?   That is by the 
</span><br>
<span class="quotelev1">&gt; application not receiving the &quot;real&quot; message in the first MPI_Iprobe  it may 
</span><br>
<span class="quotelev1">&gt; decide to do other work while the other processes are  potentially blocked 
</span><br>
<span class="quotelev1">&gt; waiting for it to do some communications.
</span><br>
<p>I'd have to agree, which is why I proposed calling opal_progres at the 
<br>
start of every iProbe.  By the way, the 40us time hit sounds high, but 
<br>
really should only happen if you have the TCP BTL actively talking to a 
<br>
peer.   Or you've hit the high water mark and are checking TCP 
<br>
communication on the OOB connection.
<br>
<p><span class="quotelev2">&gt;&gt; In fact TCP has the potential to exhibit the same behavior. However, TCP 
</span><br>
<span class="quotelev2">&gt;&gt; after each successful poll it empty the socket, so it might read more than 
</span><br>
<span class="quotelev2">&gt;&gt; one message. As we have to empty the temporary buffer, we interpret most of 
</span><br>
<span class="quotelev2">&gt;&gt; the messages inside, and this is why TCP exhibit a different behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; I guess this difference in behavior between the SM BTL and TCP BTL is 
</span><br>
<span class="quotelev1">&gt; disturbing to me.  Does just processing one fifo entry per sm_progress call 
</span><br>
<span class="quotelev1">&gt; per connection buying us performance?  Would draining the acks be detrimental 
</span><br>
<span class="quotelev1">&gt; to performance?  Wouldn't providing the messages at the time they arrived 
</span><br>
<span class="quotelev1">&gt; meet the rule of obviousness to application writers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know there is a slippery slope here of saying ok you've read one message 
</span><br>
<span class="quotelev1">&gt; should read more until there is none on the fifo.   I believe that is really 
</span><br>
<span class="quotelev1">&gt; debatable and could go either way depending on the application.  But ack 
</span><br>
<span class="quotelev1">&gt; messages are not visible to the users.  Which is why I was only asking about 
</span><br>
<span class="quotelev1">&gt; draining the ack packets.
</span><br>
<p>Galen could say better than I, but I thought the IB BTL did basically what 
<br>
you propose -- drain until you have a &quot;real&quot; message.  That seems to make 
<br>
the most sense to me and actually seemed to make IB run better for real 
<br>
jobs, but what do I know?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4163.php">Leonardo Fialho: "[OMPI devel] autogen error"</a>
<li><strong>Previous message:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
<li><strong>In reply to:</strong> <a href="4161.php">Terry Dontje: "Re: [OMPI devel] MPI_Iprobe and mca_btl_sm_component_progress"</a>
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
