<?
$subject_val = "Re: [OMPI devel] openib btl and cq overflows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 18:05:41 2012" -->
<!-- isoreceived="20120702220541" -->
<!-- sent="Mon, 02 Jul 2012 17:05:34 -0500" -->
<!-- isosent="20120702220534" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib btl and cq overflows" -->
<!-- id="4FF21B2E.4030206_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1481620-CB77-4B0C-A104-D8D9DF4ED654_at_cisco.com" -->
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
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 18:05:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>Reply:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I use --mca btl_oepnib_cq_size and override the computed CQ depth, 
<br>
then I can indeed avoid the CQ overflows.
<br>
<p>On 7/2/2012 4:12 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; You know, I have the following in a few of my MTT configurations:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; # See if this makes the CQ overrun errors go away
</span><br>
<span class="quotelev1">&gt; cq_depth = &quot; --mca btl_openib_cq_size 65536 &quot;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And then I use that variable as an mpirun CLI option in a few places.  It looks like something left over from a long time ago that never got followed up on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So yes, I'm guessing there's some kind of incorrect CQ sizing issue going on.  Can someone point Steve to the right place to look in the openib BTL?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2012, at 11:24 AM, Steve Wise wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm debugging an issue with openmpi-1.4.5 and the openib btl over chelsio iwarp devices.   I am the iwarp driver developer for this device.  I have debug code that detects cq overflows, and I'm seeing rcq overflows during finalize for certain IMB runs with ompi.    So as the recv wrs are flushed, I am seeing an overflow in the rcq for that qp.  Note chelsio iwarp uses non-shared rqs and its default .ini is: receive_queues = P,65536,256,192,128
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's the job details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NP=16; mpirun -np ${NP} --host core96b1,core96b2,core96b3,core96b4 --mca btl openib,sm,self /opt/openmpi-1.4.5/tests/IMB-3.2/IMB-MPI1 -npmin ${NP} alltoall
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The nodes have 4 port iwarp adapters in them so there are rdma connections setup over each port.  As the alltoall IO size hits 256, we end up with 192 qps per node.  And that seems to be the stable qp count until the test finishes and we see the overflow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I added further debug code in my rdma provider library to track the total depth of all the qps bound to each cq to see if the application is oversubscribing the cqs.  I see that for these jobs, OMPI is in fact oversubscribing the cqs.  Here's a snipit of my debug output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
</span><br>
<span class="quotelev2">&gt;&gt; warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
</span><br>
<span class="quotelev2">&gt;&gt; warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
</span><br>
<span class="quotelev2">&gt;&gt; warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I realize that OMPI can in fact be flow controlling such that the cq won't overflow even if the total qp depths exceeds the cq depth. But I do see overflows.  And it seems that a cq depth of 1088 is quite small given the size of the sq or rq in the above debug output.  So it seems that ompi isn't scaling the CQ depth according to the job.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As an experiment, I overrode the cq depth by adding  '--mca btl_openib_cq_size 16000' to the mpirun line and I don't see the overflow anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can  all you openib btl experts out there describe the CQ sizing logic and point me to the code that I can dig into to see why we're overflowing the RCQ on finalize operations?  Also, does the cq depth of 1088 seem reasonable for this type of work load?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Steve.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11214.php">Steve Wise: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11212.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>In reply to:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>Reply:</strong> <a href="11218.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
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
