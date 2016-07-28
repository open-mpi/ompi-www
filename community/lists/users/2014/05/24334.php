<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 18:26:45 2014" -->
<!-- isoreceived="20140509222645" -->
<!-- sent="Fri, 9 May 2014 18:26:44 -0400" -->
<!-- isosent="20140509222644" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAG4F6z_5xqanZf2QRBuA9iobwrMBqKSZCLbEsi7EYvt_D0E_Mg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMsSzSC6fnB2RGmMSSLSRHfs4=DCf5f9mmnAE_MxhObvvf01Bg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENIB unknown transport errors<br>
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 18:26:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Tim
<br>
<p>Run &quot;ibstat&quot; on each host:
<br>
<p>1. Make sure the adapters are alive and active.
<br>
<p>2. Look at the Link Layer settings for host w34. Does it match host w4's?
<br>
<p><p>Josh
<br>
<p><p>On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters, and
</span><br>
<span class="quotelev1">&gt; periodically our jobs abort at start-up with the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev1">&gt; Infiniband network.
</span><br>
<span class="quotelev1">&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            w4
</span><br>
<span class="quotelev1">&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Remote host:           w34
</span><br>
<span class="quotelev1">&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev1">&gt; ===
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've done a bit of googling and not found very much. We do not see this
</span><br>
<span class="quotelev1">&gt; issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice or thoughts would be very welcome, as I am stumped by what
</span><br>
<span class="quotelev1">&gt; causes this. The nodes are all running Scientific Linux 6 with Mellanox
</span><br>
<span class="quotelev1">&gt; drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24333.php">Tim Miller: "[OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24335.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
