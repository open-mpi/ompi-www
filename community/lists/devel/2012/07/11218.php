<?
$subject_val = "Re: [OMPI devel] openib btl and cq overflows";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 12:36:19 2012" -->
<!-- isoreceived="20120703163619" -->
<!-- sent="Tue, 3 Jul 2012 12:36:13 -0400" -->
<!-- isosent="20120703163613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl and cq overflows" -->
<!-- id="24CBFF5A-1A3E-41FE-930E-4C196959DEEA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FF21B2E.4030206_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openib btl and cq overflows<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 12:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11217.php">Jeff Squyres: "[OMPI devel] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>In reply to:</strong> <a href="11213.php">Steve Wise: "Re: [OMPI devel] openib btl and cq overflows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the weekly call today.  Conclusions:
<br>
<p>1. Looks like we just goofed on the CQ default size values.  Doh!
<br>
2. There does not appear to be any reason we're not using the device CQ max size by default.  Ticket #3152 changes the trunk to do this (and we'll CMR to v1.6 and v1.7).
<br>
<p><p>On Jul 2, 2012, at 6:05 PM, Steve Wise wrote:
<br>
<p><span class="quotelev1">&gt; If I use --mca btl_oepnib_cq_size and override the computed CQ depth, then I can indeed avoid the CQ overflows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 7/2/2012 4:12 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You know, I have the following in a few of my MTT configurations:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; # See if this makes the CQ overrun errors go away
</span><br>
<span class="quotelev2">&gt;&gt; cq_depth = &quot; --mca btl_openib_cq_size 65536 &quot;
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And then I use that variable as an mpirun CLI option in a few places.  It looks like something left over from a long time ago that never got followed up on...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So yes, I'm guessing there's some kind of incorrect CQ sizing issue going on.  Can someone point Steve to the right place to look in the openib BTL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2012, at 11:24 AM, Steve Wise wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm debugging an issue with openmpi-1.4.5 and the openib btl over chelsio iwarp devices.   I am the iwarp driver developer for this device.  I have debug code that detects cq overflows, and I'm seeing rcq overflows during finalize for certain IMB runs with ompi.    So as the recv wrs are flushed, I am seeing an overflow in the rcq for that qp.  Note chelsio iwarp uses non-shared rqs and its default .ini is: receive_queues = P,65536,256,192,128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the job details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NP=16; mpirun -np ${NP} --host core96b1,core96b2,core96b3,core96b4 --mca btl openib,sm,self /opt/openmpi-1.4.5/tests/IMB-3.2/IMB-MPI1 -npmin ${NP} alltoall
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The nodes have 4 port iwarp adapters in them so there are rdma connections setup over each port.  As the alltoall IO size hits 256, we end up with 192 qps per node.  And that seems to be the stable qp count until the test finishes and we see the overflow.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I added further debug code in my rdma provider library to track the total depth of all the qps bound to each cq to see if the application is oversubscribing the cqs.  I see that for these jobs, OMPI is in fact oversubscribing the cqs.  Here's a snipit of my debug output:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I realize that OMPI can in fact be flow controlling such that the cq won't overflow even if the total qp depths exceeds the cq depth. But I do see overflows.  And it seems that a cq depth of 1088 is quite small given the size of the sq or rq in the above debug output.  So it seems that ompi isn't scaling the CQ depth according to the job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As an experiment, I overrode the cq depth by adding  '--mca btl_openib_cq_size 16000' to the mpirun line and I don't see the overflow anymore.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can  all you openib btl experts out there describe the CQ sizing logic and point me to the code that I can dig into to see why we're overflowing the RCQ on finalize operations?  Also, does the cq depth of 1088 seem reasonable for this type of work load?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Steve.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11219.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11217.php">Jeff Squyres: "[OMPI devel] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>In reply to:</strong> <a href="11213.php">Steve Wise: "Re: [OMPI devel] openib btl and cq overflows"</a>
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
