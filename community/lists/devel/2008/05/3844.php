<?
$subject_val = "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 13:00:28 2008" -->
<!-- isoreceived="20080506170028" -->
<!-- sent="Tue, 6 May 2008 13:00:17 -0400" -->
<!-- isosent="20080506170017" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="1F0019B1-B585-415D-AF6A-6ADE504FE4B6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48207D2D.6010906_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 13:00:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In addition to Steve's comments, we discussed this on the call today  
<br>
and decided that the patch is fine.
<br>
<p>Jon and I will discuss further because this is the first instance of  
<br>
calling some form of &quot;disconnect&quot; on one side causes events to occur  
<br>
on the other side without the involvement from the remote OMPI (e.g.,  
<br>
the remote side's OMPI layer simply hasn't called its &quot;disconnect&quot;  
<br>
flavor yet, but the kernel level transport/network stack will cause  
<br>
things to happen on the remote side anyway).
<br>
<p><p>On May 6, 2008, at 11:45 AM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On May 5, 2008, at 6:27 PM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am seeing some unusual behavior during the shutdown phase of ompi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at the end of my testcase.  While running a IMB pingpong test over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the rdmacm on openib, I get cq flush errors on my iWARP adapters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This error is happening because the remote node is still polling
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the endpoint while the other one shutdown.  This occurs because
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; iWARP puts the qps in error state when the channel is disconnected
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (IB does not do this).  Since the cq is still being polled when the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; event is received on the remote node, ompi thinks it hit an error
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and kills the run.  Since this is expected behavior on iWARP, this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is not really an error case.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The key here, I think is that when an iWARP QP moves out of RTS, all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RECVs and any pending SQ WRs get flushed.  Further, disconnecting  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iwarp connection forces the QP out of RTS.  This is probably  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different
</span><br>
<span class="quotelev3">&gt;&gt;&gt; than they way IB works.  IE &quot;disconnecting&quot; in IB is an out-of-band
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exchange done by the IBCM.  For iWARP, &quot;disconnecting&quot; is an in-band
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation (a TCP close or abort) so the QP cannot remain in RTS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me make sure I understand:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - proc A calls del_procs on proc B
</span><br>
<span class="quotelev2">&gt;&gt; - proc A calls ibv_destroy_qp() on QP to proc B
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually proc A calls rdma_disconnect() on QP to proc B
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - this causes a local (proc A) flush on all pending receives and SQ  
</span><br>
<span class="quotelev2">&gt;&gt; WRs
</span><br>
<span class="quotelev2">&gt;&gt; - this then causes a FLUSH event to show up *in proc B*
</span><br>
<span class="quotelev2">&gt;&gt;   --&gt; I'm not clear on this point from Jon's/Steve's text
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  Once the connection is torn down the iwarp QPs will be flushed  
</span><br>
<span class="quotelev1">&gt; on
</span><br>
<span class="quotelev1">&gt; both ends.
</span><br>
<span class="quotelev2">&gt;&gt; - OMPI [currently] treats the FLUSH in proc B as an error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is the purpose of the FLUSH event?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In general, I think it is to allow the application to recover any
</span><br>
<span class="quotelev1">&gt; resources that are allocated and cannot be touched until the WRs
</span><br>
<span class="quotelev1">&gt; complete.  For example, the buffers that were described in all the  
</span><br>
<span class="quotelev1">&gt; RECV
</span><br>
<span class="quotelev1">&gt; WRs.  If the app is going to exit, this isn't very interesting since
</span><br>
<span class="quotelev1">&gt; everything will get cleaned up in the exit path.  But if the process  
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev1">&gt; long lived and setting up/tearing down connections, then these pending
</span><br>
<span class="quotelev1">&gt; RECV buffers need to be reclaimed and put back into the buffer poll,  
</span><br>
<span class="quotelev1">&gt; as
</span><br>
<span class="quotelev1">&gt; an example...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is a larger question regarding why the remote node is still
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; polling the hca and not shutting down, but my immediate question is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; if it is an acceptable fix to simply disregard this &quot;error&quot; if it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is an iWARP adapter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If proc B is still polling the hca, it is likely because it simply  
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev2">&gt;&gt; not yet stopped doing it.  I.e., a big problem in MPI implementations
</span><br>
<span class="quotelev2">&gt;&gt; is that not all actions are exactly synchronous.  MPI disconnects are
</span><br>
<span class="quotelev2">&gt;&gt; *effectively* synchronous, but we probably didn't *guarantee*
</span><br>
<span class="quotelev2">&gt;&gt; synchronicity in this case because we didn't need it (perhaps until
</span><br>
<span class="quotelev2">&gt;&gt; now).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Steve.
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3845.php">Josh Hursey: "[OMPI devel] [RFC] mca_base_open() NULL"</a>
<li><strong>Previous message:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>In reply to:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
