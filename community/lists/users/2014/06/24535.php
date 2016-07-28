<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 12:47:27 2014" -->
<!-- isoreceived="20140604164727" -->
<!-- sent="Wed, 4 Jun 2014 12:47:27 -0400" -->
<!-- isosent="20140604164727" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAMsSzSBVsHAZHCOKJ_2DEf=egsTu3=mvZUFYjeMt_tTANeS69g_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAG4F6z8r5yvitC5B_6v=QU1pWyN9ysz=tWmq8dEfgniJ4i1WiQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-04 12:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24534.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'd like to revive this thread, since I am still periodically getting
<br>
errors of this type. I have built 1.8.1 with --enable-debug and run with
<br>
-mca btl_openib_verbose 10. Unfortunately, this doesn't seem to provide any
<br>
additional information that I can find useful. I've gone ahead and attached
<br>
a dump of the output under 1.8.1. The key lines are:
<br>
<p>--------------------------------------------------------------------------
<br>
Open MPI detected two different OpenFabrics transport types in the same
<br>
Infiniband network.
<br>
Such mixed network trasport configuration is not supported by Open MPI.
<br>
<p>&nbsp;&nbsp;Local host:            w1
<br>
&nbsp;&nbsp;Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
<br>
<p>&nbsp;&nbsp;Remote host:           w16
<br>
&nbsp;&nbsp;Remote Adapter:        (vendor 0x2c9, part ID 26428)
<br>
&nbsp;&nbsp;Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
<br>
-------------------------------------------------------------------------
<br>
<p>Note that the vendor and part IDs are the same. If I immediately run on the
<br>
same two nodes using MVAPICH2, everything is fine.
<br>
<p>I'm really very befuddled by this. OpenMPI sees that the two cards are the
<br>
same and made by the same vendor, yet it thinks the transport types are
<br>
different (and one is unknown). I'm hoping someone with some experience
<br>
with how the OpenIB BTL works can shed some light on this problem...
<br>
<p>Tim
<br>
<p><p>On Fri, May 9, 2014 at 7:39 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just wondering if you've tried with the latest stable OMPI, 1.8.1? I'm
</span><br>
<span class="quotelev1">&gt; wondering if this is an issue with the OOB. If you have a debug build, you
</span><br>
<span class="quotelev1">&gt; can run -mca btl_openib_verbose 10
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 9, 2014 at 6:26 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Run &quot;ibstat&quot; on each host:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Make sure the adapters are alive and active.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Look at the Link Layer settings for host w34. Does it match host w4's?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and periodically our jobs abort at start-up with the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:            w4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:           w34
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ===
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've done a bit of googling and not found very much. We do not see this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any advice or thoughts would be very welcome, as I am stumped by what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causes this. The nodes are all running Scientific Linux 6 with Mellanox
</span><br>
<span class="quotelev3">&gt;&gt;&gt; drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24535/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24535/openmpi-err-new.txt">openmpi-err-new.txt</a>
</ul>
<!-- attachment="openmpi-err-new.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24536.php">Gus Correa: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>Previous message:</strong> <a href="24534.php">Ralph Castain: "Re: [OMPI users] intermittent segfaults with openib on ring_c.c"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24336.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24553.php">Joshua Ladd: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
