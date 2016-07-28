<?
$subject_val = "[OMPI devel] openib btl and cq overflows";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 11:24:34 2012" -->
<!-- isoreceived="20120702152434" -->
<!-- sent="Mon, 02 Jul 2012 10:24:27 -0500" -->
<!-- isosent="20120702152427" -->
<!-- name="Steve Wise" -->
<!-- email="swise_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl and cq overflows" -->
<!-- id="4FF1BD2B.5060806_at_opengridcomputing.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl and cq overflows<br>
<strong>From:</strong> Steve Wise (<em>swise_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 11:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>Reply:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm debugging an issue with openmpi-1.4.5 and the openib btl over 
<br>
chelsio iwarp devices.   I am the iwarp driver developer for this 
<br>
device.  I have debug code that detects cq overflows, and I'm seeing rcq 
<br>
overflows during finalize for certain IMB runs with ompi.    So as the 
<br>
recv wrs are flushed, I am seeing an overflow in the rcq for that qp.  
<br>
Note chelsio iwarp uses non-shared rqs and its default .ini is: 
<br>
receive_queues = P,65536,256,192,128
<br>
<p>Here's the job details:
<br>
<p>NP=16; mpirun -np ${NP} --host core96b1,core96b2,core96b3,core96b4 --mca 
<br>
btl openib,sm,self /opt/openmpi-1.4.5/tests/IMB-3.2/IMB-MPI1 -npmin 
<br>
${NP} alltoall
<br>
<p>The nodes have 4 port iwarp adapters in them so there are rdma 
<br>
connections setup over each port.  As the alltoall IO size hits 256, we 
<br>
end up with 192 qps per node.  And that seems to be the stable qp count 
<br>
until the test finishes and we see the overflow.
<br>
<p>I added further debug code in my rdma provider library to track the 
<br>
total depth of all the qps bound to each cq to see if the application is 
<br>
oversubscribing the cqs.  I see that for these jobs, OMPI is in fact 
<br>
oversubscribing the cqs.  Here's a snipit of my debug output:
<br>
<p>warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
<br>
warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
<br>
warning, potential SCQ overflow: total_qp_depth 3120 SCQ depth 1088
<br>
warning, potential RCQ overflow: total_qp_depth 3312 RCQ depth 1088
<br>
<p>I realize that OMPI can in fact be flow controlling such that the cq 
<br>
won't overflow even if the total qp depths exceeds the cq depth. But I 
<br>
do see overflows.  And it seems that a cq depth of 1088 is quite small 
<br>
given the size of the sq or rq in the above debug output.  So it seems 
<br>
that ompi isn't scaling the CQ depth according to the job.
<br>
<p>As an experiment, I overrode the cq depth by adding  '--mca 
<br>
btl_openib_cq_size 16000' to the mpirun line and I don't see the 
<br>
overflow anymore.
<br>
<p>Can  all you openib btl experts out there describe the CQ sizing logic 
<br>
and point me to the code that I can dig into to see why we're 
<br>
overflowing the RCQ on finalize operations?  Also, does the cq depth of 
<br>
1088 seem reasonable for this type of work load?
<br>
<p>Thanks in advance!
<br>
<p>Steve.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11203.php">TERRY DONTJE: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<li><strong>Previous message:</strong> <a href="11201.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r26707 - in trunk/ompi: config mca/btl/ofud mca/btl/openib mca/common/ofacm mca/common/ofautils mca/dpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
<li><strong>Reply:</strong> <a href="11209.php">Jeff Squyres: "Re: [OMPI devel] openib btl and cq overflows"</a>
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
