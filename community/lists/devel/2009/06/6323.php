<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 24 10:06:59 2009" -->
<!-- isoreceived="20090624140659" -->
<!-- sent="Wed, 24 Jun 2009 08:06:54 -0600" -->
<!-- isosent="20090624140654" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="71d2d8cc0906240706u31962154w7ecab63a4d810527_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="96E93B26-78FD-4D73-8AE4-ABBBB046FA34_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-24 10:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Maybe in reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid that this solution doesn't pass the acid test - our reproducers
<br>
still lock up if we set the #frags to 1K and fifo size to p*that. In other
<br>
words, adding:
<br>
<p>-mca btl_sm_free_list_max 1024 -mca btl_sm_fifo_size p*1024
<br>
<p>where p=ppn still causes our reproducers to hang.
<br>
<p>Sorry....sigh.
<br>
<p>*From: *George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; *Date: *June 24, 2009 12:46:28 AM MDT
</span><br>
<span class="quotelev1">&gt; *To: *Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject: **Re: [OMPI devel] trac ticket 1944 and pending sends*
</span><br>
<span class="quotelev1">&gt; *Reply-To: *Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In other words, as long as a queue is peer based (peer not peers), the
</span><br>
<span class="quotelev1">&gt; management of the pending send list was doing what it was supposed to, and
</span><br>
<span class="quotelev1">&gt; there was no possibility of deadlock. With the new code, as a third party
</span><br>
<span class="quotelev1">&gt; can fill up a remote queue, getting a fragment back [as you stated] became a
</span><br>
<span class="quotelev1">&gt; poor indicator for retry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see how the proposed solution will solve the issue without a
</span><br>
<span class="quotelev1">&gt; significant overhead. As we only call the MCA_BTL_SM_FIFO_WRITE once before
</span><br>
<span class="quotelev1">&gt; the fragment get into the pending list, reordering the fragments will not
</span><br>
<span class="quotelev1">&gt; solve the issue. When the peers is overloaded, the fragments will end-up in
</span><br>
<span class="quotelev1">&gt; the pending list, and there is nothing to get it out of there except a
</span><br>
<span class="quotelev1">&gt; message from the peer. In some cases, such a message might never be
</span><br>
<span class="quotelev1">&gt; delivered, simply because the peer doesn't have any data to send us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other solution is to always check all pending lists. While this might
</span><br>
<span class="quotelev1">&gt; work, it will certainly add undesirable overhead to the send path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You last patch was doing the right thing. Globally decreasing the size of
</span><br>
<span class="quotelev1">&gt; the memory used by the MPI library is _the right_ way to go. Unfortunately,
</span><br>
<span class="quotelev1">&gt; your patch only address this at the level of the shared memory file. Now,
</span><br>
<span class="quotelev1">&gt; instead of using less memory we use even more because we have to store that
</span><br>
<span class="quotelev1">&gt; data somewhere ... in the fragments returned by the btl_sm_alloc function.
</span><br>
<span class="quotelev1">&gt; These fragments are allocated on demand and by default there is no limit to
</span><br>
<span class="quotelev1">&gt; the number of such fragments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a simple fix for both problems. Enforce a reasonable limit on the
</span><br>
<span class="quotelev1">&gt; number of fragments in the BTL free list (1K should be more than enough),
</span><br>
<span class="quotelev1">&gt; and make sure the fifo has a size equal to p *
</span><br>
<span class="quotelev1">&gt; number_of_allowed_fragments_in_the_free_list, where p is the number of local
</span><br>
<span class="quotelev1">&gt; processes. While this solution will certainly increase again the size of the
</span><br>
<span class="quotelev1">&gt; mapped file, it will do it by a small margin compared with what is happening
</span><br>
<span class="quotelev1">&gt; today in the code. This is without talking about the fact that it will solve
</span><br>
<span class="quotelev1">&gt; the deadlock problem, by removing the inability to return a fragment. In
</span><br>
<span class="quotelev1">&gt; addition, the PML is capable of handing such situations, so we're getting
</span><br>
<span class="quotelev1">&gt; back to a deadlock free sm BTL.
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
<span class="quotelev1">&gt; The sm BTL used to have two mechanisms for dealing with congested FIFOs.
</span><br>
<span class="quotelev1">&gt;  One was to grow the FIFOs.  Another was to queue pending sends locally (on
</span><br>
<span class="quotelev1">&gt; the sender's side).  I think the grow-FIFO mechanism was typically invoked
</span><br>
<span class="quotelev1">&gt; and the pending-send mechanism used only under extreme circumstances (no
</span><br>
<span class="quotelev1">&gt; more memory).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the sm makeover of 1.3.2, we dropped the ability to grow FIFOs.  The
</span><br>
<span class="quotelev1">&gt; code added complexity and there seemed to be no need to have two mechanisms
</span><br>
<span class="quotelev1">&gt; to deal with congested FIFOs.  In ticket 1944, however, we see that repeated
</span><br>
<span class="quotelev1">&gt; collectives can produce hangs, and this seems to be due to the pending-send
</span><br>
<span class="quotelev1">&gt; code not adequately dealing with congested FIFOs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today, when a process tries to write to a remote FIFO and fails, it queues
</span><br>
<span class="quotelev1">&gt; the write as a pending send.  The only condition under which it retries
</span><br>
<span class="quotelev1">&gt; pending sends is when it gets a fragment back from a remote process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the logic must have been that the FIFO got congested because we
</span><br>
<span class="quotelev1">&gt; issued too many sends.  Getting a fragment back indicates that the remote
</span><br>
<span class="quotelev1">&gt; process has made progress digesting those sends.  In ticket 1944, we see
</span><br>
<span class="quotelev1">&gt; that a FIFO can also get congested from too many returning fragments.
</span><br>
<span class="quotelev1">&gt;  Further, with shared FIFOs, a FIFO could become congested due to the
</span><br>
<span class="quotelev1">&gt; activity of a third-party process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In sum, getting a fragment back from a remote process is a poor indicator
</span><br>
<span class="quotelev1">&gt; that it's time to retry pending sends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the real way to know when to retry pending sends is just to check if
</span><br>
<span class="quotelev1">&gt; there's room on the FIFO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by checking if
</span><br>
<span class="quotelev1">&gt; there are pending sends.  If so, it'll retry them before performing the
</span><br>
<span class="quotelev1">&gt; requested write.  This should also help preserve ordering a little better.
</span><br>
<span class="quotelev1">&gt;  I'm guessing this will not hurt our message latency in any meaningful way,
</span><br>
<span class="quotelev1">&gt; but I'll check this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meanwhile, I wanted to check in with y'all for any guidance you might have.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6323/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6322.php">Brian Barrett: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Maybe in reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
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
