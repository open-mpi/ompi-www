<?
$subject_val = "[OMPI devel] Threaded progress for CPCs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 18 11:38:48 2008" -->
<!-- isoreceived="20080518153848" -->
<!-- sent="Sun, 18 May 2008 11:38:36 -0400" -->
<!-- isosent="20080518153836" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Threaded progress for CPCs" -->
<!-- id="31A874F3-3B0B-43E9-BD33-18AC5E0D46D1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Threaded progress for CPCs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-18 11:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3927.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Maybe reply:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the length of this mail.  It's a complex issue.  :-\
<br>
<p>I did everything needed to enable the IB and RDMA CM's to have their  
<br>
own progress threads to handle incoming CM traffic (which is important  
<br>
because both CM's have timeouts for all their communications) and it  
<br>
seems to be working fine for simple examples.  I posted an hg of this  
<br>
work (regularly kept in sync with the trunk):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/openib-fd</a>- 
<br>
progress/
<br>
<p>But in talking to Pasha today, we realized that there are big problems  
<br>
which will undoubtedly show up when running more than trivial examples.
<br>
<p>==&gt; Remember that the goal for this work was to have a separate  
<br>
progress thread *without* all the heavyweight OMPI thread locks.   
<br>
Specifically: make it work in a build without --enable-progress- 
<br>
threads or --enable-mpi-threads (we did some preliminary testing with  
<br>
that stuff enabled and it had a big performance impact).
<br>
<p>1. When CM progress thread completes an incoming connection, it sends  
<br>
a command down a pipe to the main thread indicating that a new  
<br>
endpoint is ready to use.  The pipe message will be noticed by  
<br>
opal_progress() in the main thread and will run a function to do all  
<br>
necessary housekeeping (sets the endpoint state to CONNECTED, etc.).   
<br>
But it is possible that the receiver process won't dip into the MPI  
<br>
layer for a long time (and therefore not call opal_progress and the  
<br>
housekeeping function).  Therefore, it is possible that with an active  
<br>
sender and a slow receiver, the sender can overwhelm an SRQ.  On IB,  
<br>
this will just generate RNRs and be ok (we configure SRQs to have  
<br>
infinite RNRs), but I don't understand the semantics of what will  
<br>
happen on iWARP (it may terminate?  I sent an off-list question to  
<br>
Steve Wise to ask for detail -- we may have other issues with SRQ on  
<br>
iWARP if this is the case, but let's skip that discussion for now).
<br>
<p>Even if we can get the iWARP semantics to work, this feels kinda  
<br>
icky.  Perhaps I'm overreacting and this isn't a problem that needs to  
<br>
be fixed -- after all, this situation is no different than what  
<br>
happens after the initial connection, but it still feels icky.
<br>
<p>2. The CM progress thread posts its own receive buffers when creating  
<br>
a QP (which is a necessary step in both CMs).  However, this is  
<br>
problematic in two cases:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- If posting to an SRQ, the main thread may also be [re-]posting  
<br>
to the SRQ at the same time.  Those endpoint data structures therefore  
<br>
need to be protected.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- All receive buffers come from the mpool, and therefore those  
<br>
data structures need to be protected.  Specifically: both threads may  
<br>
post to the SRQ simultaneously, but the CM will always be the first to  
<br>
post to a PPRQ.  So although there's no race in the PPRQ endpoint data  
<br>
structures, there is a potential for race issues in the mpool data  
<br>
structures in both cases.
<br>
<p>This is all a problem because we explicitly do not want to enable  
<br>
*all* the heavyweight threading infrastructure for OMPI.  I see a few  
<br>
options, none of which seem attractive:
<br>
<p>1. Somehow make it so only mpool and select other portions of OMPI can  
<br>
have threading/lock support (although this seems like a slippery slope  
<br>
-- I can foresee implications that would make it completely  
<br>
meaningless to only have some thread locks enabled and not others).   
<br>
This is probably the least attractive option.
<br>
<p>2. Make the IB and RDMA CM requests be tolerant of timing out (and  
<br>
just restarting).  This is actually a lot of work; for example, the  
<br>
IBCM CPC would then need to be tolerant of timing out anywhere in its  
<br>
3-way handshake and starting over again.  This could have serious  
<br>
implications for when a connection will be able to actually complete  
<br>
if a receiver rarely dips into the MPI layer (much worse than RDMA  
<br>
CM's 2-way handshake).
<br>
<p>3. Have locks around the critical areas described in #1 that can be  
<br>
enabled without --enable-&lt;foo&gt;-threads support (perhaps disabled at  
<br>
run time if we're not using a CM progress thread?).
<br>
<p>4. Have a separate mpool for drawing initial receive buffers for the  
<br>
CM-posted RQs.  We'd probably want this mpool to be always empty (or  
<br>
close to empty) -- it's ok to be slow to allocate / register more  
<br>
memory when a new connection request arrives.  The memory obtained  
<br>
from this mpool should be able to be returned to the &quot;main&quot; mpool  
<br>
after it is consumed.
<br>
<p>5. ...?
<br>
<p>Thoughts?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Previous message:</strong> <a href="3927.php">Gleb Natapov: "Re: [OMPI devel] openib btl code review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Reply:</strong> <a href="3929.php">Gleb Natapov: "Re: [OMPI devel] Threaded progress for CPCs"</a>
<li><strong>Maybe reply:</strong> <a href="3932.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Threaded progress for CPCs"</a>
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
