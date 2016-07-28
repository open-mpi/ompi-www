<?
$subject_val = "Re: [OMPI users] OPENIB unknown transport errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 12 17:53:48 2014" -->
<!-- isoreceived="20140612215348" -->
<!-- sent="Thu, 12 Jun 2014 17:53:47 -0400" -->
<!-- isosent="20140612215347" -->
<!-- name="Tim Miller" -->
<!-- email="btamiller_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENIB unknown transport errors" -->
<!-- id="CAMsSzSAt=cfd-Ua3DzziQc3K=-btyH+90by7KZDUAGz9X8-ugg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAAO1KyZMd4AN=ktueViNEQ=xDSBsGpF-r2T6wdiaFhNQmibk9w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-06-12 17:53:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24650.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24648.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Aha ... looking at &quot;ibv_devinfo -v&quot; got me my first concrete hint of what's
<br>
going on. On a node that's working fine (w2), under port 1 there is a line:
<br>
<p>LinkLayer: InfiniBand
<br>
<p>On a node that is having trouble (w3), that line is not present. The
<br>
question is why this inconsistency occurs.
<br>
<p>I don't seem to have ofed_info installed on my system -- not sure what
<br>
magical package Red Hat decided to hide that in. The InfiniBand stack I am
<br>
running is stock with our version of Scientific Linux (6.2). I am beginning
<br>
to wonder if this isn't some bug with the Red Hat/SL-provided InfiniBand
<br>
stack. I'll do some more poking, but at least now I've got something
<br>
semi-solid to poke at. Thanks for all of your help; I've attached the
<br>
results of &quot;ibv_devinfo -v&quot; for both systems, so if you see anything else
<br>
that jumps at you, please let me know.
<br>
<p>Tim
<br>
<p><p><p><p>On Sat, Jun 7, 2014 at 2:21 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; could you please attach output of &quot;ibv_devinfo -v&quot; and &quot;ofed_info -s&quot;
</span><br>
<span class="quotelev1">&gt; Thx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jun 7, 2014 at 12:53 AM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I asked one of our more advanced users to add the &quot;-mca btl_openib_if_include
</span><br>
<span class="quotelev2">&gt;&gt; mlx4_0:1&quot; argument to his job script. Unfortunately, the same error
</span><br>
<span class="quotelev2">&gt;&gt; occurred as before.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We'll keep digging on our end; if you have any other suggestions, please
</span><br>
<span class="quotelev2">&gt;&gt; let us know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 5, 2014 at 7:32 PM, Tim Miller &lt;btamiller_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Josh,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for attempting to sort this out. In answer to your questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. Node allocation is done by TORQUE, however we don't use the TM API to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; launch jobs (long story). Instead, we just pass a hostfile to mpirun, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun uses the ssh launcher to actually communicate and launch the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes on remote nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. We have only one port per HCA (the HCA silicon is integrated with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; motherboard on most of our nodes, including all that have this issue). They
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are all configured to use InfiniBand (no IPoIB or other protocols).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. No, we don't explicitly ask for a device port pair. We will try your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestion and report back.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jun 5, 2014 at 2:22 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Strange indeed. This info (remote adapter info) is passed around in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; modex and the struct is locally populated during add procs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. How do you launch jobs? Mpirun, srun, or something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. How many active ports do you have on each HCA? Are they all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configured to use IB?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. Do you explicitly ask for a device:port pair with the &quot;if include&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca param? If not, can you please add &quot;-mca btl_openib_if_include mlx4_0:1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (assuming you have a ConnectX-3 HCA and port 1 is configured to run over
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; IB.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jun 4, 2014 at 12:47 PM, Tim Miller &lt;btamiller_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'd like to revive this thread, since I am still periodically getting
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; errors of this type. I have built 1.8.1 with --enable-debug and run with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -mca btl_openib_verbose 10. Unfortunately, this doesn't seem to provide any
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; additional information that I can find useful. I've gone ahead and attached
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a dump of the output under 1.8.1. The key lines are:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; same Infiniband network.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Local host:            w1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Remote host:           w16
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note that the vendor and part IDs are the same. If I immediately run
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; on the same two nodes using MVAPICH2, everything is fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm really very befuddled by this. OpenMPI sees that the two cards are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the same and made by the same vendor, yet it thinks the transport types are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different (and one is unknown). I'm hoping someone with some experience
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with how the OpenIB BTL works can shed some light on this problem...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Fri, May 9, 2014 at 7:39 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Just wondering if you've tried with the latest stable OMPI, 1.8.1?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I'm wondering if this is an issue with the OOB. If you have a debug build,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; you can run -mca btl_openib_verbose 10
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, May 9, 2014 at 6:26 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi, Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Run &quot;ibstat&quot; on each host:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 1. Make sure the adapters are alive and active.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 2. Look at the Link Layer settings for host w34. Does it match host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; w4's?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Fri, May 9, 2014 at 1:18 PM, Tim Miller &lt;btamiller_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; We're using OpenMPI 1.7.3 with Mellanox ConnectX InfiniBand
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; adapters, and periodically our jobs abort at start-up with the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Open MPI detected two different OpenFabrics transport types in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; same Infiniband network.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Such mixed network trasport configuration is not supported by Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local host:            w4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local adapter:         mlx4_0 (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Local transport type:  MCA_BTL_OPENIB_TRANSPORT_IB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Remote host:           w34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Remote Adapter:        (vendor 0x2c9, part ID 26428)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Remote transport type: MCA_BTL_OPENIB_TRANSPORT_UNKNOWN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ===
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I've done a bit of googling and not found very much. We do not see
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this issue when we run with MVAPICH2 on the same sets of nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any advice or thoughts would be very welcome, as I am stumped by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; what causes this. The nodes are all running Scientific Linux 6 with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Mellanox drivers installed via the SL-provided RPMs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tim
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24649/w2-ibvdevinfo.txt">w2-ibvdevinfo.txt</a>
</ul>
<!-- attachment="w2-ibvdevinfo.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24649/w3-ibvdevinfo.txt">w3-ibvdevinfo.txt</a>
</ul>
<!-- attachment="w3-ibvdevinfo.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24650.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24648.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="24595.php">Mike Dubman: "Re: [OMPI users] OPENIB unknown transport errors"</a>
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
