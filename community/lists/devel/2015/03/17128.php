<?
$subject_val = "Re: [OMPI devel] BML changes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 13:41:01 2015" -->
<!-- isoreceived="20150311174101" -->
<!-- sent="Wed, 11 Mar 2015 11:41:00 -0600" -->
<!-- isosent="20150311174100" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML changes" -->
<!-- id="CAF1Cqj7Zcz_xC0Yr6Avbjeurxp13kTLCC4ZHnmS4VWXmtN4CaQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150311165722.GF14275_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 13:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17130.php">Atchley, Scott: "Re: [OMPI devel] BML changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My experience with DMA engines located on the other side of a PCI-e 16x
<br>
gen3 bus from the cpus is that for a couple of ranks doing large
<br>
transfers between each other on a node, using the DMA engine looks good.
<br>
But once there are multiple ranks exchanging data (like up to 32 ranks on a
<br>
dual socket haswell node, not using HT),  using the DMA engine of the NIC
<br>
is not such a good idea.
<br>
<p>Howard
<br>
<p><p>2015-03-11 10:57 GMT-06:00 Nathan Hjelm &lt;hjelmn_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt;
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
<span class="quotelev2">&gt; &gt;    This message is mostly for Nathan, but figured I would go with the
</span><br>
<span class="quotelev1">&gt; wider
</span><br>
<span class="quotelev2">&gt; &gt;    distribution. I have noticed some different behaviour that I assume
</span><br>
<span class="quotelev2">&gt; &gt;    started with this change.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04">https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am noticing that the openib BTL will also be used for on-node
</span><br>
<span class="quotelev2">&gt; &gt;    communication even though the sm (or smcuda) BTL is also available. I
</span><br>
<span class="quotelev2">&gt; &gt;    think with the aforementioned change that the openib BTL is listed as
</span><br>
<span class="quotelev1">&gt; an
</span><br>
<span class="quotelev2">&gt; &gt;    available BTL that supports RDMA. While looking through the debugger
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;    looking at the bml_endpoint, it appears that the sm BTL is listed as
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    eager and send BTL, but the openib is listed as the RDMA btl. Looking
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev2">&gt; &gt;    the logic in pml_ob1_sendreq.h, it looks like we can end up selecting
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt;    openib btl for some of the communication. I ran with some various
</span><br>
<span class="quotelev2">&gt; &gt;    verbosity and saw that this was happening. With v1.8, we only appear
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt; &gt;    use the sm (or smcuda) btl.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    I am wondering if this was intentional with this change or maybe a
</span><br>
<span class="quotelev1">&gt; side
</span><br>
<span class="quotelev2">&gt; &gt;    effect.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    Rolf
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    This email message is for the sole use of the intended recipient(s)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev2">&gt; &gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev2">&gt; &gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev2">&gt; &gt;    recipient, please contact the sender by reply email and destroy all
</span><br>
<span class="quotelev1">&gt; copies
</span><br>
<span class="quotelev2">&gt; &gt;    of the original message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
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
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17065.php">http://www.open-mpi.org/community/lists/devel/2015/02/17065.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17127.php">http://www.open-mpi.org/community/lists/devel/2015/03/17127.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17128/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>In reply to:</strong> <a href="17127.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17129.php">Nathan Hjelm: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17130.php">Atchley, Scott: "Re: [OMPI devel] BML changes"</a>
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
