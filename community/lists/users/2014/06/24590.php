<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 17:53:22 2014" -->
<!-- isoreceived="20140606215322" -->
<!-- sent="Fri, 6 Jun 2014 17:53:22 -0400" -->
<!-- isosent="20140606215322" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAMsSzSAX041d7sb8AOMai5ws0FObxP76c17OXddWBEDGYBKL9A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMsSzSC+j8YC-_-EmPaoHKba5kgP6G1535JpvTrzr12Wdt6N_g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-06 17:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24591.php">E.O.: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24589.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>In reply to:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>I asked one of our more advanced users to add the &quot;-mca btl_openib_if_include
<br>
mlx4_0:1&quot; argument to his job script. Unfortunately, the same error
<br>
occurred as before.
<br>
<p>We'll keep digging on our end; if you have any other suggestions, please
<br>
let us know.
<br>
<p>Tim
<br>
<p><p>On Thu, Jun 5, 2014 at 7:32 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for attempting to sort this out. In answer to your questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Node allocation is done by TORQUE, however we don't use the TM API to
</span><br>
<span class="quotelev1">&gt; launch jobs (long story). Instead, we just pass a hostfile to mpirun, and
</span><br>
<span class="quotelev1">&gt; mpirun uses the ssh launcher to actually communicate and launch the
</span><br>
<span class="quotelev1">&gt; processes on remote nodes.
</span><br>
<span class="quotelev1">&gt; 2. We have only one port per HCA (the HCA silicon is integrated with the
</span><br>
<span class="quotelev1">&gt; motherboard on most of our nodes, including all that have this issue). They
</span><br>
<span class="quotelev1">&gt; are all configured to use InfiniBand (no IPoIB or other protocols).
</span><br>
<span class="quotelev1">&gt; 3. No, we don't explicitly ask for a device port pair. We will try your
</span><br>
<span class="quotelev1">&gt; suggestion and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 5, 2014 at 2:22 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Strange indeed. This info (remote adapter info) is passed around in the
</span><br>
<span class="quotelev2">&gt;&gt; modex and the struct is locally populated during add procs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. How do you launch jobs? Mpirun, srun, or something else?
</span><br>
<span class="quotelev2">&gt;&gt; 2. How many active ports do you have on each HCA? Are they all configured
</span><br>
<span class="quotelev2">&gt;&gt; to use IB?
</span><br>
<span class="quotelev2">&gt;&gt; 3. Do you explicitly ask for a device:port pair with the &quot;if include&quot; mca
</span><br>
<span class="quotelev2">&gt;&gt; param? If not, can you please add &quot;-mca btl_openib_if_include mlx4_0:1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; (assuming you have a ConnectX-3 HCA and port 1 is configured to run over
</span><br>
<span class="quotelev2">&gt;&gt; IB.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Jun 4, 2014 at 12:47 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to revive this thread, since I am still periodically getting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors of this type. I have built 1.8.1 with --enable-debug and run with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca btl_openib_verbose 10. Unfortunately, this doesn't seem to provide any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; additional information that I can find useful. I've gone ahead and attached
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a dump of the output under 1.8.1. The key lines are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Infiniband network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:            w1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:           w16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that the vendor and part IDs are the same. If I immediately run on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same two nodes using MVAPICH2, everything is fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm really very befuddled by this. OpenMPI sees that the two cards are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same and made by the same vendor, yet it thinks the transport types are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different (and one is unknown). I'm hoping someone with some experience
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with how the OpenIB BTL works can shed some light on this problem...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 9, 2014 at 7:39 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just wondering if you've tried with the latest stable OMPI, 1.8.1? I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wondering if this is an issue with the OOB. If you have a debug build, you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can run -mca btl_openib_verbose 10
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, May 9, 2014 at 6:26 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi, Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Run &quot;ibstat&quot; on each host:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1. Make sure the adapters are alive and active.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2. Look at the Link Layer settings for host w34. Does it match host
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; w4's?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand adapters,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and periodically our jobs abort at start-up with the following error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; same Infiniband network.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; MPI.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Local host:            w4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Remote host:           w34
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I've done a bit of googling and not found very much. We do not see
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; this issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any advice or thoughts would be very welcome, as I am stumped by what
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; causes this. The nodes are all running Scientific Linux 6 with Mellanox
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24591.php">E.O.: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24589.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>In reply to:</strong> <a href="24557.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>Reply:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
