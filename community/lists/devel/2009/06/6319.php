<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 02:46:38 2009" -->
<!-- isoreceived="20090624064638" -->
<!-- sent="Wed, 24 Jun 2009 02:46:28 -0400" -->
<!-- isosent="20090624064628" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="DB3590B4-E1AF-4181-9CB4-11747BCFBA5D_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A40EEEC.1070404_at_sun.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 02:46:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6320.php">Jeff Squyres: "Re: [OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>Previous message:</strong> <a href="6318.php">neeraj_at_[hidden]: "Re: [OMPI devel] OMPI performance competitiveness"</a>
<li><strong>In reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In other words, as long as a queue is peer based (peer not peers), the  
<br>
management of the pending send list was doing what it was supposed to,  
<br>
and there was no possibility of deadlock. With the new code, as a  
<br>
third party can fill up a remote queue, getting a fragment back [as  
<br>
you stated] became a poor indicator for retry.
<br>
<p>I don't see how the proposed solution will solve the issue without a  
<br>
significant overhead. As we only call the MCA_BTL_SM_FIFO_WRITE once  
<br>
before the fragment get into the pending list, reordering the  
<br>
fragments will not solve the issue. When the peers is overloaded, the  
<br>
fragments will end-up in the pending list, and there is nothing to get  
<br>
it out of there except a message from the peer. In some cases, such a  
<br>
message might never be delivered, simply because the peer doesn't have  
<br>
any data to send us.
<br>
<p>The other solution is to always check all pending lists. While this  
<br>
might work, it will certainly add undesirable overhead to the send path.
<br>
<p>You last patch was doing the right thing. Globally decreasing the size  
<br>
of the memory used by the MPI library is _the right_ way to go.  
<br>
Unfortunately, your patch only address this at the level of the shared  
<br>
memory file. Now, instead of using less memory we use even more  
<br>
because we have to store that data somewhere ... in the fragments  
<br>
returned by the btl_sm_alloc function. These fragments are allocated  
<br>
on demand and by default there is no limit to the number of such  
<br>
fragments.
<br>
<p>Here is a simple fix for both problems. Enforce a reasonable limit on  
<br>
the number of fragments in the BTL free list (1K should be more than  
<br>
enough), and make sure the fifo has a size equal to p *  
<br>
number_of_allowed_fragments_in_the_free_list, where p is the number of  
<br>
local processes. While this solution will certainly increase again the  
<br>
size of the mapped file, it will do it by a small margin compared with  
<br>
what is happening today in the code. This is without talking about the  
<br>
fact that it will solve the deadlock problem, by removing the  
<br>
inability to return a fragment. In addition, the PML is capable of  
<br>
handing such situations, so we're getting back to a deadlock free sm  
<br>
BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jun 23, 2009, at 11:04 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The sm BTL used to have two mechanisms for dealing with congested  
</span><br>
<span class="quotelev1">&gt; FIFOs.  One was to grow the FIFOs.  Another was to queue pending  
</span><br>
<span class="quotelev1">&gt; sends locally (on the sender's side).  I think the grow-FIFO  
</span><br>
<span class="quotelev1">&gt; mechanism was typically invoked and the pending-send mechanism used  
</span><br>
<span class="quotelev1">&gt; only under extreme circumstances (no more memory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the sm makeover of 1.3.2, we dropped the ability to grow  
</span><br>
<span class="quotelev1">&gt; FIFOs.  The code added complexity and there seemed to be no need to  
</span><br>
<span class="quotelev1">&gt; have two mechanisms to deal with congested FIFOs.  In ticket 1944,  
</span><br>
<span class="quotelev1">&gt; however, we see that repeated collectives can produce hangs, and  
</span><br>
<span class="quotelev1">&gt; this seems to be due to the pending-send code not adequately dealing  
</span><br>
<span class="quotelev1">&gt; with congested FIFOs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today, when a process tries to write to a remote FIFO and fails, it  
</span><br>
<span class="quotelev1">&gt; queues the write as a pending send.  The only condition under which  
</span><br>
<span class="quotelev1">&gt; it retries pending sends is when it gets a fragment back from a  
</span><br>
<span class="quotelev1">&gt; remote process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the logic must have been that the FIFO got congested because  
</span><br>
<span class="quotelev1">&gt; we issued too many sends.  Getting a fragment back indicates that  
</span><br>
<span class="quotelev1">&gt; the remote process has made progress digesting those sends.  In  
</span><br>
<span class="quotelev1">&gt; ticket 1944, we see that a FIFO can also get congested from too many  
</span><br>
<span class="quotelev1">&gt; returning fragments.  Further, with shared FIFOs, a FIFO could  
</span><br>
<span class="quotelev1">&gt; become congested due to the activity of a third-party process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In sum, getting a fragment back from a remote process is a poor  
</span><br>
<span class="quotelev1">&gt; indicator that it's time to retry pending sends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the real way to know when to retry pending sends is just to  
</span><br>
<span class="quotelev1">&gt; check if there's room on the FIFO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by  
</span><br>
<span class="quotelev1">&gt; checking if there are pending sends.  If so, it'll retry them before  
</span><br>
<span class="quotelev1">&gt; performing the requested write.  This should also help preserve  
</span><br>
<span class="quotelev1">&gt; ordering a little better.  I'm guessing this will not hurt our  
</span><br>
<span class="quotelev1">&gt; message latency in any meaningful way, but I'll check this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meanwhile, I wanted to check in with y'all for any guidance you  
</span><br>
<span class="quotelev1">&gt; might have.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6320.php">Jeff Squyres: "Re: [OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>Previous message:</strong> <a href="6318.php">neeraj_at_[hidden]: "Re: [OMPI devel] OMPI performance competitiveness"</a>
<li><strong>In reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6328.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6329.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
