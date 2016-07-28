<?
$subject_val = "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  6 10:39:55 2008" -->
<!-- isoreceived="20080506143955" -->
<!-- sent="Tue, 6 May 2008 10:39:23 -0400" -->
<!-- isosent="20080506143923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown" -->
<!-- id="00035C61-DF9A-40DC-B59E-398F0B58C88A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="481F89C2.2010308_at_opengridcomputing.com" -->
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
<strong>Date:</strong> 2008-05-06 10:39:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2008, at 6:27 PM, Steve Wise wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I am seeing some unusual behavior during the shutdown phase of ompi  
</span><br>
<span class="quotelev2">&gt;&gt; at the end of my testcase.  While running a IMB pingpong test over  
</span><br>
<span class="quotelev2">&gt;&gt; the rdmacm on openib, I get cq flush errors on my iWARP adapters.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This error is happening because the remote node is still polling  
</span><br>
<span class="quotelev2">&gt;&gt; the endpoint while the other one shutdown.  This occurs because  
</span><br>
<span class="quotelev2">&gt;&gt; iWARP puts the qps in error state when the channel is disconnected  
</span><br>
<span class="quotelev2">&gt;&gt; (IB does not do this).  Since the cq is still being polled when the  
</span><br>
<span class="quotelev2">&gt;&gt; event is received on the remote node, ompi thinks it hit an error  
</span><br>
<span class="quotelev2">&gt;&gt; and kills the run.  Since this is expected behavior on iWARP, this  
</span><br>
<span class="quotelev2">&gt;&gt; is not really an error case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The key here, I think is that when an iWARP QP moves out of RTS, all  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; RECVs and any pending SQ WRs get flushed.  Further, disconnecting the
</span><br>
<span class="quotelev1">&gt; iwarp connection forces the QP out of RTS.  This is probably different
</span><br>
<span class="quotelev1">&gt; than they way IB works.  IE &quot;disconnecting&quot; in IB is an out-of-band
</span><br>
<span class="quotelev1">&gt; exchange done by the IBCM.  For iWARP, &quot;disconnecting&quot; is an in-band
</span><br>
<span class="quotelev1">&gt; operation (a TCP close or abort) so the QP cannot remain in RTS during
</span><br>
<span class="quotelev1">&gt; this process.
</span><br>
<p>Let me make sure I understand:
<br>
<p>- proc A calls del_procs on proc B
<br>
- proc A calls ibv_destroy_qp() on QP to proc B
<br>
- this causes a local (proc A) flush on all pending receives and SQ WRs
<br>
- this then causes a FLUSH event to show up *in proc B*
<br>
&nbsp;&nbsp;&nbsp;--&gt; I'm not clear on this point from Jon's/Steve's text
<br>
- OMPI [currently] treats the FLUSH in proc B as an error
<br>
<p>Is that right?
<br>
<p>What is the purpose of the FLUSH event?
<br>
<p><span class="quotelev2">&gt;&gt; There is a larger question regarding why the remote node is still  
</span><br>
<span class="quotelev2">&gt;&gt; polling the hca and not shutting down, but my immediate question is  
</span><br>
<span class="quotelev2">&gt;&gt; if it is an acceptable fix to simply disregard this &quot;error&quot; if it  
</span><br>
<span class="quotelev2">&gt;&gt; is an iWARP adapter.
</span><br>
<p>If proc B is still polling the hca, it is likely because it simply has  
<br>
not yet stopped doing it.  I.e., a big problem in MPI implementations  
<br>
is that not all actions are exactly synchronous.  MPI disconnects are  
<br>
*effectively* synchronous, but we probably didn't *guarantee*  
<br>
synchronicity in this case because we didn't need it (perhaps until  
<br>
now).
<br>
<p><span class="quotelev2">&gt;&gt; Opinions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the openib btl (or the layers above) assume the &quot;disconnect&quot; will
</span><br>
<span class="quotelev1">&gt; notify the remote rank that the connection should be finalized, then  
</span><br>
<span class="quotelev1">&gt; we
</span><br>
<span class="quotelev1">&gt; must deal with FLUSHED WRs for the iwarp case.  If some sort of
</span><br>
<span class="quotelev1">&gt; &quot;finalizing&quot; is done by OMPI and then the connections disconnected,  
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt; that &quot;finalizing&quot; should include not polling the CQ anymore.  But  
</span><br>
<span class="quotelev1">&gt; that's
</span><br>
<span class="quotelev1">&gt; not what we observe.
</span><br>
<p><p>I'd have to check the exact shutdown sequence...
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
<li><strong>Next message:</strong> <a href="3839.php">Jeff Squyres: "Re: [OMPI devel] NO IP address found"</a>
<li><strong>Previous message:</strong> <a href="3837.php">Jeff Squyres: "Re: [OMPI devel] Intel MPI Benchmark(IMB) using OpenMPI - Segmentation-fault error message."</a>
<li><strong>In reply to:</strong> <a href="3835.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3840.php">Brian W. Barrett: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
<li><strong>Reply:</strong> <a href="3843.php">Steve Wise: "Re: [OMPI devel] Flush CQ error on iWARP/Out-of-sync shutdown"</a>
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
