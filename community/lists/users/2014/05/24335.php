<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  9 18:44:32 2014" -->
<!-- isoreceived="20140509224432" -->
<!-- sent="Fri, 9 May 2014 18:44:31 -0400" -->
<!-- isosent="20140509224431" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAMsSzSBZR0_-ZwgNbTryzRbnOYEFXNFJY-=QmcfRKWr0V6u3VQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z_5xqanZf2QRBuA9iobwrMBqKSZCLbEsi7EYvt_D0E_Mg_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Miller (<em>btamiller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-09 18:44:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've checked the links repeatedly with &quot;ibstatus&quot; and they look OK. Both
<br>
nodes shoe a link layer of &quot;InfiniBand&quot;.
<br>
<p>As I stated, everything works well with MVAPICH2, so I don't suspect a
<br>
physical or link layer problem (but I could always be wrong on that).
<br>
<p>Tim
<br>
<p><p>On Fri, May 9, 2014 at 6:26 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run &quot;ibstat&quot; on each host:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Make sure the adapters are alive and active.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Look at the Link Layer settings for host w34. Does it match host w4's?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters, and
</span><br>
<span class="quotelev2">&gt;&gt; periodically our jobs abort at start-up with the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev2">&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev2">&gt;&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:            w4
</span><br>
<span class="quotelev2">&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev2">&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Remote host:           w34
</span><br>
<span class="quotelev2">&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev2">&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev2">&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've done a bit of googling and not found very much. We do not see this
</span><br>
<span class="quotelev2">&gt;&gt; issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any advice or thoughts would be very welcome, as I am stumped by what
</span><br>
<span class="quotelev2">&gt;&gt; causes this. The nodes are all running Scientific Linux 6 with Mellanox
</span><br>
<span class="quotelev2">&gt;&gt; drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24335/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Previous message:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24334.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
