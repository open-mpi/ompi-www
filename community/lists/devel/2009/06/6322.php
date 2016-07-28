<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 08:50:45 2009" -->
<!-- isoreceived="20090624125045" -->
<!-- sent="Wed, 24 Jun 2009 06:50:30 -0600" -->
<!-- isosent="20090624125030" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="511EF2B1-753F-4183-A00E-25BEC73D896A_at_open-mpi.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 08:50:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6321.php">Ralph Castain: "Re: [OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or go to what I proposed and USE A LINKED LIST!  (as I said before,  
<br>
not an original idea, but one I think has merit)  Then you don't have  
<br>
to size the fifo, because there isn't a fifo.  Limit the number of  
<br>
send fragments any one proc can allocate and the only place memory can  
<br>
grow without bound is the OB1 unexpected list.  Then use SEND_COMPLETE  
<br>
instead of SEND_NORMAL in the collectives without barrier semantics  
<br>
(bcast, reduce, gather, scatter) and you effectively limit how far  
<br>
ahead any one proc can get to something that we can handle, with no  
<br>
performance hit.
<br>
<p>Brian
<br>
<p>On Jun 24, 2009, at 12:46 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; In other words, as long as a queue is peer based (peer not peers),  
</span><br>
<span class="quotelev1">&gt; the management of the pending send list was doing what it was  
</span><br>
<span class="quotelev1">&gt; supposed to, and there was no possibility of deadlock. With the new  
</span><br>
<span class="quotelev1">&gt; code, as a third party can fill up a remote queue, getting a  
</span><br>
<span class="quotelev1">&gt; fragment back [as you stated] became a poor indicator for retry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how the proposed solution will solve the issue without a  
</span><br>
<span class="quotelev1">&gt; significant overhead. As we only call the MCA_BTL_SM_FIFO_WRITE once  
</span><br>
<span class="quotelev1">&gt; before the fragment get into the pending list, reordering the  
</span><br>
<span class="quotelev1">&gt; fragments will not solve the issue. When the peers is overloaded,  
</span><br>
<span class="quotelev1">&gt; the fragments will end-up in the pending list, and there is nothing  
</span><br>
<span class="quotelev1">&gt; to get it out of there except a message from the peer. In some  
</span><br>
<span class="quotelev1">&gt; cases, such a message might never be delivered, simply because the  
</span><br>
<span class="quotelev1">&gt; peer doesn't have any data to send us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other solution is to always check all pending lists. While this  
</span><br>
<span class="quotelev1">&gt; might work, it will certainly add undesirable overhead to the send  
</span><br>
<span class="quotelev1">&gt; path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You last patch was doing the right thing. Globally decreasing the  
</span><br>
<span class="quotelev1">&gt; size of the memory used by the MPI library is _the right_ way to go.  
</span><br>
<span class="quotelev1">&gt; Unfortunately, your patch only address this at the level of the  
</span><br>
<span class="quotelev1">&gt; shared memory file. Now, instead of using less memory we use even  
</span><br>
<span class="quotelev1">&gt; more because we have to store that data somewhere ... in the  
</span><br>
<span class="quotelev1">&gt; fragments returned by the btl_sm_alloc function. These fragments are  
</span><br>
<span class="quotelev1">&gt; allocated on demand and by default there is no limit to the number  
</span><br>
<span class="quotelev1">&gt; of such fragments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a simple fix for both problems. Enforce a reasonable limit  
</span><br>
<span class="quotelev1">&gt; on the number of fragments in the BTL free list (1K should be more  
</span><br>
<span class="quotelev1">&gt; than enough), and make sure the fifo has a size equal to p *  
</span><br>
<span class="quotelev1">&gt; number_of_allowed_fragments_in_the_free_list, where p is the number  
</span><br>
<span class="quotelev1">&gt; of local processes. While this solution will certainly increase  
</span><br>
<span class="quotelev1">&gt; again the size of the mapped file, it will do it by a small margin  
</span><br>
<span class="quotelev1">&gt; compared with what is happening today in the code. This is without  
</span><br>
<span class="quotelev1">&gt; talking about the fact that it will solve the deadlock problem, by  
</span><br>
<span class="quotelev1">&gt; removing the inability to return a fragment. In addition, the PML is  
</span><br>
<span class="quotelev1">&gt; capable of handing such situations, so we're getting back to a  
</span><br>
<span class="quotelev1">&gt; deadlock free sm BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2009, at 11:04 , Eugene Loh wrote:
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
<span class="quotelev2">&gt;&gt; this seems to be due to the pending-send code not adequately  
</span><br>
<span class="quotelev2">&gt;&gt; dealing with congested FIFOs.
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
<span class="quotelev2">&gt;&gt; I think the logic must have been that the FIFO got congested  
</span><br>
<span class="quotelev2">&gt;&gt; because we issued too many sends.  Getting a fragment back  
</span><br>
<span class="quotelev2">&gt;&gt; indicates that the remote process has made progress digesting those  
</span><br>
<span class="quotelev2">&gt;&gt; sends.  In ticket 1944, we see that a FIFO can also get congested  
</span><br>
<span class="quotelev2">&gt;&gt; from too many returning fragments.  Further, with shared FIFOs, a  
</span><br>
<span class="quotelev2">&gt;&gt; FIFO could become congested due to the activity of a third-party  
</span><br>
<span class="quotelev2">&gt;&gt; process.
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
<span class="quotelev2">&gt;&gt; checking if there are pending sends.  If so, it'll retry them  
</span><br>
<span class="quotelev2">&gt;&gt; before performing the requested write.  This should also help  
</span><br>
<span class="quotelev2">&gt;&gt; preserve ordering a little better.  I'm guessing this will not hurt  
</span><br>
<span class="quotelev2">&gt;&gt; our message latency in any meaningful way, but I'll check this out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Meanwhile, I wanted to check in with y'all for any guidance you  
</span><br>
<span class="quotelev2">&gt;&gt; might have.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6323.php">Ralph Castain: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6321.php">Ralph Castain: "Re: [OMPI devel] Does open MPI support nodes behind NAT or Firewall"</a>
<li><strong>In reply to:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Reply:</strong> <a href="6325.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
