<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 08:26:05 2008" -->
<!-- isoreceived="20080519122605" -->
<!-- sent="Mon, 19 May 2008 15:25:56 +0300" -->
<!-- isosent="20080519122556" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="20080519122555.GT21806_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="31A874F3-3B0B-43E9-BD33-18AC5E0D46D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Threaded progress for CPCs<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 08:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, May 18, 2008 at 11:38:36AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; ==&gt; Remember that the goal for this work was to have a separate  
</span><br>
<span class="quotelev1">&gt; progress thread *without* all the heavyweight OMPI thread locks.   
</span><br>
<span class="quotelev1">&gt; Specifically: make it work in a build without --enable-progress- 
</span><br>
<span class="quotelev1">&gt; threads or --enable-mpi-threads (we did some preliminary testing with  
</span><br>
<span class="quotelev1">&gt; that stuff enabled and it had a big performance impact).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. When CM progress thread completes an incoming connection, it sends  
</span><br>
<span class="quotelev1">&gt; a command down a pipe to the main thread indicating that a new  
</span><br>
<span class="quotelev1">&gt; endpoint is ready to use.  The pipe message will be noticed by  
</span><br>
<span class="quotelev1">&gt; opal_progress() in the main thread and will run a function to do all  
</span><br>
<span class="quotelev1">&gt; necessary housekeeping (sets the endpoint state to CONNECTED, etc.).   
</span><br>
<span class="quotelev1">&gt; But it is possible that the receiver process won't dip into the MPI  
</span><br>
<span class="quotelev1">&gt; layer for a long time (and therefore not call opal_progress and the  
</span><br>
<span class="quotelev1">&gt; housekeeping function).  Therefore, it is possible that with an active  
</span><br>
<span class="quotelev1">&gt; sender and a slow receiver, the sender can overwhelm an SRQ.  On IB,  
</span><br>
<span class="quotelev1">&gt; this will just generate RNRs and be ok (we configure SRQs to have  
</span><br>
<span class="quotelev1">&gt; infinite RNRs), but I don't understand the semantics of what will  
</span><br>
<span class="quotelev1">&gt; happen on iWARP (it may terminate?  I sent an off-list question to  
</span><br>
<span class="quotelev1">&gt; Steve Wise to ask for detail -- we may have other issues with SRQ on  
</span><br>
<span class="quotelev1">&gt; iWARP if this is the case, but let's skip that discussion for now).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Is it possible to have sane SRQ implementation without HW flow control?
<br>
Anyway the described problem exists with SRQ right now too. If receiver
<br>
doesn't enter progress for a long time sender can overwhelm an SRQ.
<br>
I don't see how this can be fixed without progress thread (and I am not
<br>
even sure that this is the problem that has to be fixed).
<br>
<p><span class="quotelev1">&gt; Even if we can get the iWARP semantics to work, this feels kinda  
</span><br>
<span class="quotelev1">&gt; icky.  Perhaps I'm overreacting and this isn't a problem that needs to  
</span><br>
<span class="quotelev1">&gt; be fixed -- after all, this situation is no different than what  
</span><br>
<span class="quotelev1">&gt; happens after the initial connection, but it still feels icky.
</span><br>
What is so icky about it? Sender is faster than a receiver so flow control
<br>
kicks in.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. The CM progress thread posts its own receive buffers when creating  
</span><br>
<span class="quotelev1">&gt; a QP (which is a necessary step in both CMs).  However, this is  
</span><br>
<span class="quotelev1">&gt; problematic in two cases:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
[skip]
<br>
&nbsp;
<br>
I don't like 1,2 and 3. :(
<br>
<p><span class="quotelev1">&gt; 4. Have a separate mpool for drawing initial receive buffers for the
</span><br>
<span class="quotelev1">&gt; CM-posted RQs.  We'd probably want this mpool to be always empty (or
</span><br>
<span class="quotelev1">&gt; close to empty) -- it's ok to be slow to allocate / register more
</span><br>
<span class="quotelev1">&gt; memory when a new connection request arrives.  The memory obtained
</span><br>
<span class="quotelev1">&gt; from this mpool should be able to be returned to the &quot;main&quot; mpool
</span><br>
<span class="quotelev1">&gt; after it is consumed.
</span><br>
<p>This is slightly better, but still...
<br>
<p><span class="quotelev1">&gt; 5. ...?
</span><br>
What about moving posting of receive buffers into main thread. With
<br>
SRQ it is easy: don't post anything in CPC thread. Main thread will
<br>
prepost buffers automatically after first fragment received on the
<br>
endpoint (in btl_openib_handle_incoming()). With PPRQ it's more
<br>
complicated. What if we'll prepost dummy buffers (not from free list)
<br>
during IBCM connection stage and will run another three way handshake
<br>
protocol using those buffers, but from the main thread. We will need to
<br>
prepost one buffer on the active side and two buffers on the passive side.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3928.php">Jeff Squyres: "[OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3930.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3934.php">Jeff Squyres: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
