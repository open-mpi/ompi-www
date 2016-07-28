<?
$subject_val = "[OMPI devel] Infiniband memory usage with XRC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 09:12:49 2010" -->
<!-- isoreceived="20100517131249" -->
<!-- sent="Mon, 17 May 2010 15:15:07 +0200 (CEST)" -->
<!-- isosent="20100517131507" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="[OMPI devel] Infiniband memory usage with XRC" -->
<!-- id="alpine.DEB.2.00.1005171439180.3698_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> [OMPI devel] Infiniband memory usage with XRC<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 09:15:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>We did some testing on memory taken by Infiniband queues in Open MPI using 
<br>
the XRC protocol, which is supposed to reduce the needed memory for 
<br>
Infiniband connections.
<br>
<p>When using XRC queues, Open MPI is indeed creating only one XRC queue per 
<br>
node (instead of per-host). The problem is that the number of send 
<br>
elements in this queue is multiplied by the number of processes on the 
<br>
remote host.
<br>
<p>So, what are we getting from this ? Not much, except that we can reduce 
<br>
the sd_max parameter to 1 element, and still have 8 elements in the send 
<br>
queue (on 8 cores machines), which may still be ok on the performance 
<br>
side.
<br>
<p>Send queues are created lazily, so having a lot of memory for send queues 
<br>
is not necessary blocking. What's blocking is the receive queues, because 
<br>
they are created during MPI_Init, so in a way, they are the &quot;basic fare&quot; 
<br>
of MPI.
<br>
<p>The XRC protocol seems to create shared receive queues, which is a good 
<br>
thing. However, comparing memory used by an &quot;X&quot; queue versus and &quot;S&quot; 
<br>
queue, we can see a large difference. Digging a bit into the code, we 
<br>
found some strange things, like the completion queue size not being the 
<br>
same as &quot;S&quot; queues (the patch below would fix it, but the root of the 
<br>
problem may be elsewhere).
<br>
<p>Is anyone able to comment on this ?
<br>
<p>Thanks,
<br>
Sylvain
<br>
<p><p>diff -r eeaa1548ddaf ompi/mca/btl/openib/btl_openib.c
<br>
--- a/ompi/mca/btl/openib/btl_openib.c  Fri May 14 01:08:00 2010 +0000
<br>
+++ b/ompi/mca/btl/openib/btl_openib.c  Mon May 17 14:34:46 2010 +0200
<br>
@@ -379,7 +379,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* figure out reasonable sizes for completion queues */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(qp = 0; qp &lt; mca_btl_openib_component.num_qps; qp++) {
<br>
-        if(BTL_OPENIB_QP_TYPE_SRQ(qp)) {
<br>
+        if(BTL_OPENIB_QP_TYPE_SRQ(qp) || BTL_OPENIB_QP_TYPE_XRC(qp)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_cqes = 
<br>
mca_btl_openib_component.qp_infos[qp].u.srq_qp.sd_max;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv_cqes = mca_btl_openib_component.qp_infos[qp].rd_num;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7944.php">Jeff Squyres: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7942.php">Sylvain Jeaugey: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
<li><strong>Reply:</strong> <a href="7946.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Infiniband memory usage with XRC"</a>
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
