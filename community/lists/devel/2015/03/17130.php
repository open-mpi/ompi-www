<?
$subject_val = "Re: [OMPI devel] BML changes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 13:57:51 2015" -->
<!-- isoreceived="20150311175751" -->
<!-- sent="Wed, 11 Mar 2015 17:57:49 +0000" -->
<!-- isosent="20150311175749" -->
<!-- name="Atchley, Scott" -->
<!-- email="atchleyes_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML changes" -->
<!-- id="6BBBB820-1BA8-4BA3-915A-AF6D329863B8_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="CAF1Cqj7Zcz_xC0Yr6Avbjeurxp13kTLCC4ZHnmS4VWXmtN4CaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BML changes<br>
<strong>From:</strong> Atchley, Scott (<em>atchleyes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 13:57:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17131.php">Orion Poplawski: "[OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have some new Power8 nodes with dual-port FDR HCAs. I have not tested same-node Verbs throughput. Using Linux&#146;s Cross Memory Attach (CMA), I can get 30 GB/s for 2 MB messages between two cores and then it drops off to ~12 GB/s. The PCIe Gen3 x16 slots should max at ~15 GB/s. I agree that when there are more than two processes communicating, that shared memory will go higher while the PCIe link is capped at ~15 GB/s.
<br>
<p>Scott
<br>
<p>On Mar 11, 2015, at 1:41 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My experience with DMA engines located on the other side of a PCI-e 16x gen3 bus from the cpus is that for a couple of ranks doing large
</span><br>
<span class="quotelev1">&gt; transfers between each other on a node, using the DMA engine looks good.  But once there are multiple ranks exchanging data (like up to 32 ranks on a dual socket haswell node, not using HT),  using the DMA engine of the NIC is not such a good idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015-03-11 10:57 GMT-06:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Definitely a side-effect though it could be beneficial in some cases as
</span><br>
<span class="quotelev1">&gt; the RDMA engine in the HCA may be faster than using memcpy (larger than
</span><br>
<span class="quotelev1">&gt; a certain size). I don't know how to best fix this as I need all RDMA
</span><br>
<span class="quotelev1">&gt; capable BTLs to listed for RMA. I though about adding another list to
</span><br>
<span class="quotelev1">&gt; track BTLs that have both RMA and atomics but that would increase the
</span><br>
<span class="quotelev1">&gt; memory footprint of Open MPI by a factor of nranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 26, 2015 at 11:59:41PM +0000, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    This message is mostly for Nathan, but figured I would go with the wider
</span><br>
<span class="quotelev2">&gt; &gt;    distribution. I have noticed some different behaviour that I assume
</span><br>
<span class="quotelev2">&gt; &gt;    started with this change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04">https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am noticing that the openib BTL will also be used for on-node
</span><br>
<span class="quotelev2">&gt; &gt;    communication even though the sm (or smcuda) BTL is also available. I
</span><br>
<span class="quotelev2">&gt; &gt;    think with the aforementioned change that the openib BTL is listed as an
</span><br>
<span class="quotelev2">&gt; &gt;    available BTL that supports RDMA. While looking through the debugger and
</span><br>
<span class="quotelev2">&gt; &gt;    looking at the bml_endpoint, it appears that the sm BTL is listed as the
</span><br>
<span class="quotelev2">&gt; &gt;    eager and send BTL, but the openib is listed as the RDMA btl. Looking at
</span><br>
<span class="quotelev2">&gt; &gt;    the logic in pml_ob1_sendreq.h, it looks like we can end up selecting the
</span><br>
<span class="quotelev2">&gt; &gt;    openib btl for some of the communication. I ran with some various
</span><br>
<span class="quotelev2">&gt; &gt;    verbosity and saw that this was happening. With v1.8, we only appear to
</span><br>
<span class="quotelev2">&gt; &gt;    use the sm (or smcuda) btl.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am wondering if this was intentional with this change or maybe a side
</span><br>
<span class="quotelev2">&gt; &gt;    effect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Rolf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev2">&gt; &gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev2">&gt; &gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev2">&gt; &gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev2">&gt; &gt;    of the original message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17065.php">http://www.open-mpi.org/community/lists/devel/2015/02/17065.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">http://www.open-mpi.org/community/lists/devel/2015/03/17127.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17128.php">http://www.open-mpi.org/community/lists/devel/2015/03/17128.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17131.php">Orion Poplawski: "[OMPI devel] hangs/crashes with openmpi-1.8.4-99-20150228"</a>
<li><strong>Previous message:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
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
