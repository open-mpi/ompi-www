<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 12:42:08 2009" -->
<!-- isoreceived="20090624164208" -->
<!-- sent="Wed, 24 Jun 2009 09:42:11 -0700" -->
<!-- isosent="20090624164211" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="4A425763.4020205_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DB3590B4-E1AF-4181-9CB4-11747BCFBA5D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trac ticket 1944 and pending sends<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 12:42:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In other words, as long as a queue is peer based (peer not peers), 
</span><br>
<span class="quotelev1">&gt; the  management of the pending send list was doing what it was 
</span><br>
<span class="quotelev1">&gt; supposed to,  and there was no possibility of deadlock.
</span><br>
<p>I disagree.  It is true that I can fill up a remote FIFO with sends.  In 
<br>
such a case, when the remote process receives a fragment and returns it 
<br>
to me, I have an indication that the remote FIFO has cleared up a little 
<br>
bit and I can retry a pending send.  But even for dedicated FIFOs, this 
<br>
is not the only possibility.  It is also possible that I have filled the 
<br>
remote FIFO up with fragments I was returning to the remote process.  In 
<br>
that case, the remote process can drain its FIFO without my getting 
<br>
anything back.  And, that's what was happening in my test case.  
<br>
Specifically, my test4.c was np=2;  there were no third-party processes 
<br>
to interfere.  The remote FIFO was congested, I posted a pending send, 
<br>
the remote FIFO cleared up, and I never knew to retry a pending send.  
<br>
Broken.
<br>
<p><span class="quotelev1">&gt; With the new code, as a  third party can fill up a remote queue, 
</span><br>
<span class="quotelev1">&gt; getting a fragment back [as  you stated] became a poor indicator for 
</span><br>
<span class="quotelev1">&gt; retry.
</span><br>
<p>I agree that shared queues add another dimension to the problem.
<br>
<p><span class="quotelev1">&gt; I don't see how the proposed solution will solve the issue without a  
</span><br>
<span class="quotelev1">&gt; significant overhead. As we only call the MCA_BTL_SM_FIFO_WRITE once  
</span><br>
<span class="quotelev1">&gt; before the fragment get into the pending list, reordering the  
</span><br>
<span class="quotelev1">&gt; fragments will not solve the issue. When the peers is overloaded, the  
</span><br>
<span class="quotelev1">&gt; fragments will end-up in the pending list, and there is nothing to 
</span><br>
<span class="quotelev1">&gt; get  it out of there except a message from the peer. In some cases, 
</span><br>
<span class="quotelev1">&gt; such a  message might never be delivered, simply because the peer 
</span><br>
<span class="quotelev1">&gt; doesn't have  any data to send us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other solution is to always check all pending lists. While this  
</span><br>
<span class="quotelev1">&gt; might work, it will certainly add undesirable overhead to the send path.
</span><br>
<p>The approach I was working on was twofold:
<br>
<p>1) Even if I'm only sending messages, occasionally I should check my 
<br>
in-bound FIFO for returning fragments.  That's mom-and-apple-pie stuff, 
<br>
right?  I *NEED* something like this if I'm going to support unilateral 
<br>
sends (a process generating lots of sends with no corresponding 
<br>
receives).  The overhead can be managed since we poll the FIFO only 
<br>
&quot;occasionally&quot;.
<br>
<p>2) I need to retry pending sends more aggressively -- even if there are 
<br>
dedicated FIFOs and certainly if there are shared FIFOs.  I don't need 
<br>
to check *all* pending queues.  I can keep a counter of all pending 
<br>
sends.  If there are none (typical case), this should be a quick check.  
<br>
If there are some, I can do the more expensive work of finding which 
<br>
queue has the pending sends.
<br>
<p><span class="quotelev1">&gt; You last patch was doing the right thing. Globally decreasing the 
</span><br>
<span class="quotelev1">&gt; size  of the memory used by the MPI library is _the right_ way to go.  
</span><br>
<span class="quotelev1">&gt; Unfortunately, your patch only address this at the level of the 
</span><br>
<span class="quotelev1">&gt; shared  memory file. Now, instead of using less memory we use even 
</span><br>
<span class="quotelev1">&gt; more  because we have to store that data somewhere ... in the 
</span><br>
<span class="quotelev1">&gt; fragments  returned by the btl_sm_alloc function. These fragments are 
</span><br>
<span class="quotelev1">&gt; allocated  on demand and by default there is no limit to the number of 
</span><br>
<span class="quotelev1">&gt; such  fragments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a simple fix for both problems. Enforce a reasonable limit on  
</span><br>
<span class="quotelev1">&gt; the number of fragments in the BTL free list (1K should be more than  
</span><br>
<span class="quotelev1">&gt; enough), and make sure the fifo has a size equal to p *  
</span><br>
<span class="quotelev1">&gt; number_of_allowed_fragments_in_the_free_list, where p is the number 
</span><br>
<span class="quotelev1">&gt; of  local processes. While this solution will certainly increase again 
</span><br>
<span class="quotelev1">&gt; the  size of the mapped file, it will do it by a small margin compared 
</span><br>
<span class="quotelev1">&gt; with  what is happening today in the code. This is without talking 
</span><br>
<span class="quotelev1">&gt; about the  fact that it will solve the deadlock problem, by removing 
</span><br>
<span class="quotelev1">&gt; the  inability to return a fragment. In addition, the PML is capable 
</span><br>
<span class="quotelev1">&gt; of  handing such situations, so we're getting back to a deadlock free 
</span><br>
<span class="quotelev1">&gt; sm  BTL.
</span><br>
<p>I'm open to this approach.  How do you come up with your &quot;reasonable 
<br>
limit on the number of fragments&quot;?  E.g., should it depend on the number 
<br>
of peers?  1K sounds generous for np=2, but less so for np=512.
<br>
<p>I don't see how the overall memory consumption will be reduced.  We push 
<br>
the problem from the shared memory area to the BTL's pending sends and 
<br>
now to the PML's pending sends.  The fact remains that if the 
<br>
application is stuffing a lot of messages into the system, either MPI 
<br>
has to buffer them or the application sees less progress.  The only 
<br>
exception is if OMPI is not reclaiming returned fragments, but we need 
<br>
to fix that problem anyhow.
<br>
<p>Still, I like the solution because it pushes this problem up to the PML 
<br>
(which is not my responsibility!).  It makes sense to manage all these 
<br>
issues in one place (like the PML) rather than in multiple places.  
<br>
Further, it appears that the PML is doing The Right Thing today 
<br>
(retrying pending sends aggressively and calling the progress engine 
<br>
when sends stall).
<br>
<p>I'll play around with your proposal.  I like it.
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2009, at 11:04 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The sm BTL used to have two mechanisms for dealing with congested  
</span><br>
<span class="quotelev2">&gt;&gt; FIFOs.  One was to grow the FIFOs.  Another was to queue pending  
</span><br>
<span class="quotelev2">&gt;&gt; sends locally (on the sender's side).  I think the grow-FIFO  
</span><br>
<span class="quotelev2">&gt;&gt; mechanism was typically invoked and the pending-send mechanism used  
</span><br>
<span class="quotelev2">&gt;&gt; only under extreme circumstances (no more memory).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the sm makeover of 1.3.2, we dropped the ability to grow  
</span><br>
<span class="quotelev2">&gt;&gt; FIFOs.  The code added complexity and there seemed to be no need to  
</span><br>
<span class="quotelev2">&gt;&gt; have two mechanisms to deal with congested FIFOs.  In ticket 1944,  
</span><br>
<span class="quotelev2">&gt;&gt; however, we see that repeated collectives can produce hangs, and  
</span><br>
<span class="quotelev2">&gt;&gt; this seems to be due to the pending-send code not adequately dealing  
</span><br>
<span class="quotelev2">&gt;&gt; with congested FIFOs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Today, when a process tries to write to a remote FIFO and fails, it  
</span><br>
<span class="quotelev2">&gt;&gt; queues the write as a pending send.  The only condition under which  
</span><br>
<span class="quotelev2">&gt;&gt; it retries pending sends is when it gets a fragment back from a  
</span><br>
<span class="quotelev2">&gt;&gt; remote process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think the logic must have been that the FIFO got congested because  
</span><br>
<span class="quotelev2">&gt;&gt; we issued too many sends.  Getting a fragment back indicates that  
</span><br>
<span class="quotelev2">&gt;&gt; the remote process has made progress digesting those sends.  In  
</span><br>
<span class="quotelev2">&gt;&gt; ticket 1944, we see that a FIFO can also get congested from too many  
</span><br>
<span class="quotelev2">&gt;&gt; returning fragments.  Further, with shared FIFOs, a FIFO could  
</span><br>
<span class="quotelev2">&gt;&gt; become congested due to the activity of a third-party process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In sum, getting a fragment back from a remote process is a poor  
</span><br>
<span class="quotelev2">&gt;&gt; indicator that it's time to retry pending sends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe the real way to know when to retry pending sends is just to  
</span><br>
<span class="quotelev2">&gt;&gt; check if there's room on the FIFO.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by  
</span><br>
<span class="quotelev2">&gt;&gt; checking if there are pending sends.  If so, it'll retry them before  
</span><br>
<span class="quotelev2">&gt;&gt; performing the requested write.  This should also help preserve  
</span><br>
<span class="quotelev2">&gt;&gt; ordering a little better.  I'm guessing this will not hurt our  
</span><br>
<span class="quotelev2">&gt;&gt; message latency in any meaningful way, but I'll check this out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I wanted to check in with y'all for any guidance you  
</span><br>
<span class="quotelev2">&gt;&gt; might have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6327.php">Brian W. Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
