<?
$subject_val = "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 11:45:58 2008" -->
<!-- isoreceived="20080506154558" -->
<!-- sent="Tue, 06 May 2008 10:45:49 -0500" -->
<!-- isosent="20080506154549" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="48207D2D.6010906_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="00035C61-DF9A-40DC-B59E-398F0B58C88A_at_cisco.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-06 11:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On May 5, 2008, at 6:27 PM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am seeing some unusual behavior during the shutdown phase of ompi  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at the end of my testcase.  While running a IMB pingpong test over  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the rdmacm on openib, I get cq flush errors on my iWARP adapters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This error is happening because the remote node is still polling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the endpoint while the other one shutdown.  This occurs because  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; iWARP puts the qps in error state when the channel is disconnected  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (IB does not do this).  Since the cq is still being polled when the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; event is received on the remote node, ompi thinks it hit an error  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and kills the run.  Since this is expected behavior on iWARP, this  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not really an error case.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; The key here, I think is that when an iWARP QP moves out of RTS, all  
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; RECVs and any pending SQ WRs get flushed.  Further, disconnecting the
</span><br>
<span class="quotelev2">&gt;&gt; iwarp connection forces the QP out of RTS.  This is probably different
</span><br>
<span class="quotelev2">&gt;&gt; than they way IB works.  IE &quot;disconnecting&quot; in IB is an out-of-band
</span><br>
<span class="quotelev2">&gt;&gt; exchange done by the IBCM.  For iWARP, &quot;disconnecting&quot; is an in-band
</span><br>
<span class="quotelev2">&gt;&gt; operation (a TCP close or abort) so the QP cannot remain in RTS during
</span><br>
<span class="quotelev2">&gt;&gt; this process.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me make sure I understand:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - proc A calls del_procs on proc B
</span><br>
<span class="quotelev1">&gt; - proc A calls ibv_destroy_qp() on QP to proc B
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Actually proc A calls rdma_disconnect() on QP to proc B
<br>
<p><span class="quotelev1">&gt; - this causes a local (proc A) flush on all pending receives and SQ WRs
</span><br>
<span class="quotelev1">&gt; - this then causes a FLUSH event to show up *in proc B*
</span><br>
<span class="quotelev1">&gt;    --&gt; I'm not clear on this point from Jon's/Steve's text
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.  Once the connection is torn down the iwarp QPs will be flushed on 
<br>
both ends.
<br>
<span class="quotelev1">&gt; - OMPI [currently] treats the FLUSH in proc B as an error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the purpose of the FLUSH event?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>In general, I think it is to allow the application to recover any 
<br>
resources that are allocated and cannot be touched until the WRs 
<br>
complete.  For example, the buffers that were described in all the RECV 
<br>
WRs.  If the app is going to exit, this isn't very interesting since 
<br>
everything will get cleaned up in the exit path.  But if the process is 
<br>
long lived and setting up/tearing down connections, then these pending 
<br>
RECV buffers need to be reclaimed and put back into the buffer poll, as 
<br>
an example...
<br>
<p><span class="quotelev3">&gt;&gt;&gt; There is a larger question regarding why the remote node is still  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling the hca and not shutting down, but my immediate question is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it is an acceptable fix to simply disregard this &quot;error&quot; if it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is an iWARP adapter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If proc B is still polling the hca, it is likely because it simply has  
</span><br>
<span class="quotelev1">&gt; not yet stopped doing it.  I.e., a big problem in MPI implementations  
</span><br>
<span class="quotelev1">&gt; is that not all actions are exactly synchronous.  MPI disconnects are  
</span><br>
<span class="quotelev1">&gt; *effectively* synchronous, but we probably didn't *guarantee*  
</span><br>
<span class="quotelev1">&gt; synchronicity in this case because we didn't need it (perhaps until  
</span><br>
<span class="quotelev1">&gt; now).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes.
<br>
<p><p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Previous message:</strong> <a href="3842.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
