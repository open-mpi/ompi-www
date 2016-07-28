<?
$subject_val = "Re: [OMPI devel] BML changes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 12:57:23 2015" -->
<!-- isoreceived="20150311165723" -->
<!-- sent="Wed, 11 Mar 2015 10:57:22 -0600" -->
<!-- isosent="20150311165722" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BML changes" -->
<!-- id="20150311165722.GF14275_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0e70024fc6a347a1a5c147c268ff074a_at_HQMAIL102.nvidia.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-11 12:57:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Definitely a side-effect though it could be beneficial in some cases as
<br>
the RDMA engine in the HCA may be faster than using memcpy (larger than
<br>
a certain size). I don't know how to best fix this as I need all RDMA
<br>
capable BTLs to listed for RMA. I though about adding another list to
<br>
track BTLs that have both RMA and atomics but that would increase the
<br>
memory footprint of Open MPI by a factor of nranks.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 26, 2015 at 11:59:41PM +0000, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt;    This message is mostly for Nathan, but figured I would go with the wider
</span><br>
<span class="quotelev1">&gt;    distribution. I have noticed some different behaviour that I assume
</span><br>
<span class="quotelev1">&gt;    started with this change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04">https://github.com/open-mpi/ompi/commit/4bf7a207e90997e75ba1c60d9d191d9d96402d04</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am noticing that the openib BTL will also be used for on-node
</span><br>
<span class="quotelev1">&gt;    communication even though the sm (or smcuda) BTL is also available. I
</span><br>
<span class="quotelev1">&gt;    think with the aforementioned change that the openib BTL is listed as an
</span><br>
<span class="quotelev1">&gt;    available BTL that supports RDMA. While looking through the debugger and
</span><br>
<span class="quotelev1">&gt;    looking at the bml_endpoint, it appears that the sm BTL is listed as the
</span><br>
<span class="quotelev1">&gt;    eager and send BTL, but the openib is listed as the RDMA btl. Looking at
</span><br>
<span class="quotelev1">&gt;    the logic in pml_ob1_sendreq.h, it looks like we can end up selecting the
</span><br>
<span class="quotelev1">&gt;    openib btl for some of the communication. I ran with some various
</span><br>
<span class="quotelev1">&gt;    verbosity and saw that this was happening. With v1.8, we only appear to
</span><br>
<span class="quotelev1">&gt;    use the sm (or smcuda) btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I am wondering if this was intentional with this change or maybe a side
</span><br>
<span class="quotelev1">&gt;    effect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This email message is for the sole use of the intended recipient(s) and
</span><br>
<span class="quotelev1">&gt;    may contain confidential information.  Any unauthorized review, use,
</span><br>
<span class="quotelev1">&gt;    disclosure or distribution is prohibited.  If you are not the intended
</span><br>
<span class="quotelev1">&gt;    recipient, please contact the sender by reply email and destroy all copies
</span><br>
<span class="quotelev1">&gt;    of the original message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ----------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17065.php">http://www.open-mpi.org/community/lists/devel/2015/02/17065.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17127/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<li><strong>Previous message:</strong> <a href="17126.php">Nathan Hjelm: "Re: [OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17065.php">Rolf vandeVaart: "[OMPI devel] BML changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
<li><strong>Reply:</strong> <a href="17128.php">Howard Pritchard: "Re: [OMPI devel] BML changes"</a>
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
