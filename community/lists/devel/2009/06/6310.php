<?
$subject_val = "Re: [OMPI devel] trac ticket 1944 and pending sends";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 12:57:55 2009" -->
<!-- isoreceived="20090623165755" -->
<!-- sent="Tue, 23 Jun 2009 12:57:51 -0400 (EDT)" -->
<!-- isosent="20090623165751" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trac ticket 1944 and pending sends" -->
<!-- id="alpine.DEB.1.10.0906231255270.30628_at_marvin.we-be-smart.org" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 12:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6311.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that sounds like a rational path forward.  Another, more long 
<br>
term, option would be to move from the FIFOs to a linked list (which can 
<br>
even be atomic), which is what MPICH does with nemesis.  In that case, 
<br>
there's never a queue to get backed up (although the receive queue for 
<br>
collectives is still a problem).  It would also solve the returning a 
<br>
fragment without space problem, as there's always space in a linked list.
<br>
<p>Brian
<br>
<p>On Tue, 23 Jun 2009, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; The sm BTL used to have two mechanisms for dealing with congested FIFOs.  One 
</span><br>
<span class="quotelev1">&gt; was to grow the FIFOs.  Another was to queue pending sends locally (on the 
</span><br>
<span class="quotelev1">&gt; sender's side).  I think the grow-FIFO mechanism was typically invoked and 
</span><br>
<span class="quotelev1">&gt; the pending-send mechanism used only under extreme circumstances (no more 
</span><br>
<span class="quotelev1">&gt; memory).
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
<span class="quotelev1">&gt; Today, when a process tries to write to a remote FIFO and fails, it queues 
</span><br>
<span class="quotelev1">&gt; the write as a pending send.  The only condition under which it retries 
</span><br>
<span class="quotelev1">&gt; pending sends is when it gets a fragment back from a remote process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the logic must have been that the FIFO got congested because we 
</span><br>
<span class="quotelev1">&gt; issued too many sends.  Getting a fragment back indicates that the remote 
</span><br>
<span class="quotelev1">&gt; process has made progress digesting those sends.  In ticket 1944, we see that 
</span><br>
<span class="quotelev1">&gt; a FIFO can also get congested from too many returning fragments.  Further, 
</span><br>
<span class="quotelev1">&gt; with shared FIFOs, a FIFO could become congested due to the activity of a 
</span><br>
<span class="quotelev1">&gt; third-party process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In sum, getting a fragment back from a remote process is a poor indicator 
</span><br>
<span class="quotelev1">&gt; that it's time to retry pending sends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe the real way to know when to retry pending sends is just to check if 
</span><br>
<span class="quotelev1">&gt; there's room on the FIFO.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, I'll try modifying MCA_BTL_SM_FIFO_WRITE.  It'll start by checking if 
</span><br>
<span class="quotelev1">&gt; there are pending sends.  If so, it'll retry them before performing the 
</span><br>
<span class="quotelev1">&gt; requested write.  This should also help preserve ordering a little better. 
</span><br>
<span class="quotelev1">&gt; I'm guessing this will not hurt our message latency in any meaningful way, 
</span><br>
<span class="quotelev1">&gt; but I'll check this out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Meanwhile, I wanted to check in with y'all for any guidance you might have.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6311.php">Eugene Loh: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>Previous message:</strong> <a href="6309.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
<li><strong>In reply to:</strong> <a href="6308.php">Eugene Loh: "[OMPI devel] trac ticket 1944 and pending sends"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6319.php">George Bosilca: "Re: [OMPI devel] trac ticket 1944 and pending sends"</a>
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
