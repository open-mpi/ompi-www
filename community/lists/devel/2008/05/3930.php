<?
$subject_val = "Re: [OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 19 10:08:33 2008" -->
<!-- isoreceived="20080519140833" -->
<!-- sent="Mon, 19 May 2008 17:08:17 +0300" -->
<!-- isosent="20080519140817" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Threaded progress for CPCs" -->
<!-- id="483189D1.40402_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20080519122555.GT21806_at_minantech.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-19 10:08:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; 1. When CM progress thread completes an incoming connection, it sends  
</span><br>
<span class="quotelev2">&gt;&gt; a command down a pipe to the main thread indicating that a new  
</span><br>
<span class="quotelev2">&gt;&gt; endpoint is ready to use.  The pipe message will be noticed by  
</span><br>
<span class="quotelev2">&gt;&gt; opal_progress() in the main thread and will run a function to do all  
</span><br>
<span class="quotelev2">&gt;&gt; necessary housekeeping (sets the endpoint state to CONNECTED, etc.).   
</span><br>
<span class="quotelev2">&gt;&gt; But it is possible that the receiver process won't dip into the MPI  
</span><br>
<span class="quotelev2">&gt;&gt; layer for a long time (and therefore not call opal_progress and the  
</span><br>
<span class="quotelev2">&gt;&gt; housekeeping function).  Therefore, it is possible that with an active  
</span><br>
<span class="quotelev2">&gt;&gt; sender and a slow receiver, the sender can overwhelm an SRQ.  On IB,  
</span><br>
<span class="quotelev2">&gt;&gt; this will just generate RNRs and be ok (we configure SRQs to have  
</span><br>
<span class="quotelev2">&gt;&gt; infinite RNRs), but I don't understand the semantics of what will  
</span><br>
<span class="quotelev2">&gt;&gt; happen on iWARP (it may terminate?  I sent an off-list question to  
</span><br>
<span class="quotelev2">&gt;&gt; Steve Wise to ask for detail -- we may have other issues with SRQ on  
</span><br>
<span class="quotelev2">&gt;&gt; iWARP if this is the case, but let's skip that discussion for now).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Is it possible to have sane SRQ implementation without HW flow control?
</span><br>
<span class="quotelev1">&gt; Anyway the described problem exists with SRQ right now too. If receiver
</span><br>
<span class="quotelev1">&gt; doesn't enter progress for a long time sender can overwhelm an SRQ.
</span><br>
<span class="quotelev1">&gt; I don't see how this can be fixed without progress thread (and I am not
</span><br>
<span class="quotelev1">&gt; even sure that this is the problem that has to be fixed).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
It may be resolved particularly by srq_limit_event (this event is 
<br>
generated when number posted receive buffer come down under predefined 
<br>
watermark )
<br>
But I'm not sure that we want to move the RNR problem from sender side 
<br>
to receiver.
<br>
<p>The full solution will be progress thread + srq_limit_event.
<br>
<p><span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Even if we can get the iWARP semantics to work, this feels kinda  
</span><br>
<span class="quotelev2">&gt;&gt; icky.  Perhaps I'm overreacting and this isn't a problem that needs to  
</span><br>
<span class="quotelev2">&gt;&gt; be fixed -- after all, this situation is no different than what  
</span><br>
<span class="quotelev2">&gt;&gt; happens after the initial connection, but it still feels icky.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; What is so icky about it? Sender is faster than a receiver so flow control
</span><br>
<span class="quotelev1">&gt; kicks in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 2. The CM progress thread posts its own receive buffers when creating  
</span><br>
<span class="quotelev2">&gt;&gt; a QP (which is a necessary step in both CMs).  However, this is  
</span><br>
<span class="quotelev2">&gt;&gt; problematic in two cases:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; [skip]
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't like 1,2 and 3. :(
</span><br>
<span class="quotelev1">&gt;   
</span><br>
If Iwarp may handle RNR , #1 - sounds ok for me, at least for 1.3.
<br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 4. Have a separate mpool for drawing initial receive buffers for the
</span><br>
<span class="quotelev2">&gt;&gt; CM-posted RQs.  We'd probably want this mpool to be always empty (or
</span><br>
<span class="quotelev2">&gt;&gt; close to empty) -- it's ok to be slow to allocate / register more
</span><br>
<span class="quotelev2">&gt;&gt; memory when a new connection request arrives.  The memory obtained
</span><br>
<span class="quotelev2">&gt;&gt; from this mpool should be able to be returned to the &quot;main&quot; mpool
</span><br>
<span class="quotelev2">&gt;&gt; after it is consumed.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is slightly better, but still...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 5. ...?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; What about moving posting of receive buffers into main thread. With
</span><br>
<span class="quotelev1">&gt; SRQ it is easy: don't post anything in CPC thread. Main thread will
</span><br>
<span class="quotelev1">&gt; prepost buffers automatically after first fragment received on the
</span><br>
<span class="quotelev1">&gt; endpoint (in btl_openib_handle_incoming()). 
</span><br>
It still doesn't guaranty that we will not see RNR (as I understand we 
<br>
trying to resolve this problem  for iwarp?!)
<br>
<p>So this solution will cost 1 buffer on each srq ... sounds acceptable 
<br>
for me. But I don't see too much
<br>
difference compared to #1, as I understand  we anyway will be need the 
<br>
pipe for communication with main thread.
<br>
so why don't use #1 ?
<br>
<span class="quotelev1">&gt; With PPRQ it's more
</span><br>
<span class="quotelev1">&gt; complicated. What if we'll prepost dummy buffers (not from free list)
</span><br>
<span class="quotelev1">&gt; during IBCM connection stage and will run another three way handshake
</span><br>
<span class="quotelev1">&gt; protocol using those buffers, but from the main thread. We will need to
</span><br>
<span class="quotelev1">&gt; prepost one buffer on the active side and two buffers on the passive side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>In reply to:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3931.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
