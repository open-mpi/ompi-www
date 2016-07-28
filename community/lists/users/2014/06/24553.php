<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 14:22:43 2014" -->
<!-- isoreceived="20140605182243" -->
<!-- sent="Thu, 5 Jun 2014 14:22:42 -0400" -->
<!-- isosent="20140605182242" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAG4F6z9X9bYrrDKf17z+Z9Mr=g-E2yMs-nwOZP4rnK9O4LdtJA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMsSzSBVsHAZHCOKJ_2DEf=egsTu3=mvZUFYjeMt_tTANeS69g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-05 14:22:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="24535.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange indeed. This info (remote adapter info) is passed around in the
<br>
modex and the struct is locally populated during add procs.
<br>
<p>1. How do you launch jobs? Mpirun, srun, or something else?
<br>
2. How many active ports do you have on each HCA? Are they all configured
<br>
to use IB?
<br>
3. Do you explicitly ask for a device:port pair with the &quot;if include&quot; mca
<br>
param? If not, can you please add &quot;-mca btl_openib_if_include mlx4_0:1&quot;
<br>
(assuming you have a ConnectX-3 HCA and port 1 is configured to run over
<br>
IB.)
<br>
<p>Josh
<br>
<p><p>On Wed, Jun 4, 2014 at 12:47 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to revive this thread, since I am still periodically getting
</span><br>
<span class="quotelev1">&gt; errors of this type. I have built 1.8.1 with --enable-debug and run with
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_verbose 10. Unfortunately, this doesn't seem to provide any
</span><br>
<span class="quotelev1">&gt; additional information that I can find useful. I've gone ahead and attached
</span><br>
<span class="quotelev1">&gt; a dump of the output under 1.8.1. The key lines are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev1">&gt; Infiniband network.
</span><br>
<span class="quotelev1">&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:            w1
</span><br>
<span class="quotelev1">&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Remote host:           w16
</span><br>
<span class="quotelev1">&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the vendor and part IDs are the same. If I immediately run on
</span><br>
<span class="quotelev1">&gt; the same two nodes using MVAPICH2, everything is fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm really very befuddled by this. OpenMPI sees that the two cards are the
</span><br>
<span class="quotelev1">&gt; same and made by the same vendor, yet it thinks the transport types are
</span><br>
<span class="quotelev1">&gt; different (and one is unknown). I'm hoping someone with some experience
</span><br>
<span class="quotelev1">&gt; with how the OpenIB BTL works can shed some light on this problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 9, 2014 at 7:39 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just wondering if you've tried with the latest stable OMPI, 1.8.1? I'm
</span><br>
<span class="quotelev2">&gt;&gt; wondering if this is an issue with the OOB. If you have a debug build, you
</span><br>
<span class="quotelev2">&gt;&gt; can run -mca btl_openib_verbose 10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 9, 2014 at 6:26 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Run &quot;ibstat&quot; on each host:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Make sure the adapters are alive and active.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Look at the Link Layer settings for host w34. Does it match host
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w4's?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and periodically our jobs abort at start-up with the following error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local host:            w4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Remote host:           w34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've done a bit of googling and not found very much. We do not see this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any advice or thoughts would be very welcome, as I am stumped by what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; causes this. The nodes are all running Scientific Linux 6 with Mellanox
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24553/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24554.php">Fischer, Greg A.: "[OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24552.php">George Bosilca: "Re: [OMPI users] OpenMPI Compilation Error"</a>
<li><strong>In reply to:</strong> <a href="24535.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
