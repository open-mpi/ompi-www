<?
$subject_val = "[OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQ when	ibv_resize_cq() has failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 23 10:17:21 2009" -->
<!-- isoreceived="20091023141721" -->
<!-- sent="Fri, 23 Oct 2009 16:10:03 +0200" -->
<!-- isosent="20091023141003" -->
<!-- name="Nadia Derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQ when	ibv_resize_cq() has failed" -->
<!-- id="1256307003.10740.58.camel_at_frecb000730" -->
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
<strong>Subject:</strong> [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQ when	ibv_resize_cq() has failed<br>
<strong>From:</strong> Nadia Derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-23 10:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7020.php">Ralph Castain: "[OMPI devel] Change in 1.3 Gatekeeper for 10/24-11/9"</a>
<li><strong>Previous message:</strong> <a href="7018.php">Jeff Squyres: "[OMPI devel] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Yesterdays I had to analyze a SIGSEV occuring after the following
<br>
message had been output:
<br>
[.... adjust_cq] cannot resize completion queue, error: 22
<br>
<p><p>What I found is the following:
<br>
<p>When ibv_resize_cq() fails to resize a CQ (in my case it returned
<br>
EINVAL), adjust_cq() returns an error and create_srq() is not called by
<br>
mca_btl_openib_size_queues().
<br>
<p>Note: One of our infiniband specialists told me that EINVAL was returned
<br>
in that case because we were asking for more CQ entries than the max
<br>
available.
<br>
<p>mca_bml_r2_add_btls() goes on executing.
<br>
<p>Then qp_create_all() is called (connect/btl_openib_connect_oob.c).
<br>
ibv_create_qp() succeeds even though init_attr.srq is a NULL pointer
<br>
(remember that create_srq() has not been previously called).
<br>
<p>Since all the QPs have been successfully created, qp_create_all() then
<br>
calls:
<br>
mca_btl_openib_endpoint_post_recvs()
<br>
&nbsp;&nbsp;--&gt; mca_btl_openib_post_srr()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--&gt; ibv_post_srq_recv() on a NULL SRQ
<br>
==&gt; SIGSEGV
<br>
<p><p>If I'm not wrong in the analysis above, we have the choice between 2
<br>
solutions to fix this problem:
<br>
<p>1. if EINVAL is returned by ibv_resize_cq() in adjust_cq(), treat this
<br>
as the ENOSYS case: do not return an error, since the CQ has
<br>
successfully been created may be with less entries than needed, but it
<br>
is there.
<br>
<p>Doing this we assume that EINVAL will always be the symptom of a &quot;too
<br>
many entries asked for&quot; error from the IB stack. I don't have the
<br>
answer...
<br>
+ I don't know if this won't imply a degraded mode in terms of
<br>
performances.
<br>
<p>2. Fix mca_bml_r2_add_btls() to cleanly exit if an error occurs during 
<br>
btl_add_procs().
<br>
<p>FYI I tested solution #1 and it worked...
<br>
<p>Any suggestion or comment would be welcome.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
Nadia Derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7020.php">Ralph Castain: "[OMPI devel] Change in 1.3 Gatekeeper for 10/24-11/9"</a>
<li><strong>Previous message:</strong> <a href="7018.php">Jeff Squyres: "[OMPI devel] MPI-3 Fortran feedback"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
<li><strong>Reply:</strong> <a href="7035.php">Jeff Squyres: "Re: [OMPI devel] mca_btl_openib_post_srr() posts to an uncreated SRQwhen	ibv_resize_cq() has failed"</a>
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
