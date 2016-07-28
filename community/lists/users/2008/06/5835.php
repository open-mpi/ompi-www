<?
$subject_val = "Re: [OMPI users] OpenIB problem: error polling HP CQ...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 01:52:02 2008" -->
<!-- isoreceived="20080606055202" -->
<!-- sent="Thu, 5 Jun 2008 23:51:53 -0600" -->
<!-- isosent="20080606055153" -->
<!-- name="Matt Hughes" -->
<!-- email="matt.c.hughes+ompi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problem: error polling HP CQ..." -->
<!-- id="d105ee120806052251m6b660eaeqb8133785d3c23692_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1B3C2EFA-E2BE-44FC-9596-50BE583BD4C8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB problem: error polling HP CQ...<br>
<strong>From:</strong> Matt Hughes (<em>matt.c.hughes+ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-06 01:51:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5834.php">Doug Reeder: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2008/6/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Would it be possible for you to try a trunk nightly tarball snapshot,
</span><br>
<span class="quotelev1">&gt; perchance?
</span><br>
<p>I have attempted to use openmpi-1.3a1r18569.  After some pain getting
<br>
MPI_Comm_spawn to work (I will write about that in a separate
<br>
message), I was able to get my app started.  If segfaults in
<br>
btl_openib_handle_incoming() by dereferencing a null pointer:
<br>
<p>#0  0x0000000000000000 in ?? ()
<br>
#1  0x0000002a98059777 in btl_openib_handle_incoming (openib_btl=0xb8b900,
<br>
&nbsp;&nbsp;&nbsp;ep=0xbecb70, frag=0xc8da80, byte_len=24) at btl_openib_component.c:2129
<br>
#2  0x0000002a9805b674 in handle_wc (hca=0xb80670, cq=0, wc=0x7fbfffdfd0)
<br>
&nbsp;&nbsp;&nbsp;at btl_openib_component.c:2397
<br>
#3  0x0000002a9805bbef in poll_hca (hca=0xb80670, count=1)
<br>
&nbsp;&nbsp;&nbsp;at btl_openib_component.c:2508
<br>
#4  0x0000002a9805c1ac in progress_one_hca (hca=0xb80670)
<br>
&nbsp;&nbsp;&nbsp;at btl_openib_component.c:2616
<br>
#5  0x0000002a9805c24f in btl_openib_component_progress ()
<br>
&nbsp;&nbsp;&nbsp;at btl_openib_component.c:2641
<br>
#6  0x0000002a97f42308 in mca_bml_r2_progress () at bml_r2.c:93
<br>
#7  0x0000002a95a44c2c in opal_progress () at runtime/opal_progress.c:187
<br>
#8  0x0000002a97d1f10c in opal_condition_wait (c=0x2a958b8b40, m=0x2a958b8bc0)
<br>
&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:100
<br>
#9  0x0000002a97d1ef88 in ompi_request_wait_completion (req=0xbdfc80)
<br>
&nbsp;&nbsp;&nbsp;at ../../../../ompi/request/request.h:381
<br>
#10 0x0000002a97d1ee64 in mca_pml_ob1_recv (addr=0xc52d14, count=1,
<br>
&nbsp;&nbsp;&nbsp;datatype=0x2a958abe60, src=1, tag=-19, comm=0xbe0cf0, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:104
<br>
#11 0x0000002a98c1b182 in ompi_coll_tuned_gather_intra_basic_linear (
<br>
&nbsp;&nbsp;&nbsp;sbuf=0x7fbfffe984, scount=1, sdtype=0x2a958abe60, rbuf=0xc52d10,
<br>
&nbsp;&nbsp;&nbsp;rcount=1, rdtype=0x2a958abe60, root=0, comm=0xbe0cf0, module=0xda00e0)
<br>
&nbsp;&nbsp;&nbsp;at coll_tuned_gather.c:408
<br>
#12 0x0000002a98c07fc1 in ompi_coll_tuned_gather_intra_dec_fixed (
<br>
&nbsp;&nbsp;&nbsp;sbuf=0x7fbfffe984, scount=1, sdtype=0x2a958abe60, rbuf=0xc52d10,
<br>
&nbsp;&nbsp;&nbsp;rcount=1, rdtype=0x2a958abe60, root=0, comm=0xbe0cf0, module=0xda00e0)
<br>
&nbsp;&nbsp;&nbsp;at coll_tuned_decision_fixed.c:723
<br>
#13 0x0000002a95715f0f in PMPI_Gather (sendbuf=0x7fbfffe984, sendcount=1,
<br>
&nbsp;&nbsp;&nbsp;sendtype=0x2a958abe60, recvbuf=0xc52d10, recvcount=1,
<br>
&nbsp;&nbsp;&nbsp;recvtype=0x2a958abe60, root=0, comm=0xbe0cf0) at pgather.c:141
<br>
<p>This same build works fine with the TCP component and at least doesn't
<br>
crash with 1.2.6.  The only thing that may be unusual about my build
<br>
of openmpi 1.3 is that it is configured with --without-memory-manager
<br>
(it seems to cause crashes in another library I use).  I tried
<br>
rebuilding, omitting --without-memory-manager, but it failed in the
<br>
same way.
<br>
<p>mch
<br>
<p><p><p><p><span class="quotelev1">&gt; On May 29, 2008, at 3:50 AM, Matt Hughes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a program which uses MPI::Comm::Spawn to start processes on
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes (c0-0, c0-1, etc).  The communication between the
</span><br>
<span class="quotelev2">&gt;&gt; compute nodes consists of ISend and IRecv pairs, while communication
</span><br>
<span class="quotelev2">&gt;&gt; between the compute nodes consists of gather and bcast operations.
</span><br>
<span class="quotelev2">&gt;&gt; After executing ~80 successful loops (gather/bcast pairs), I get this
</span><br>
<span class="quotelev2">&gt;&gt; error message from the head node process during a gather call:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [0,1,0][btl_openib_component.c:1332:btl_openib_component_progress]
</span><br>
<span class="quotelev2">&gt;&gt; from headnode.local to: c0-0 error polling HP CQ with status WORK
</span><br>
<span class="quotelev2">&gt;&gt; REQUEST FLUSHED ERROR status number 5 for wr_id 18504944 opcode 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The relevant environment variables:
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_rd_num=128
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_verbose=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_base_verbose=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_rd_low=75
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_base_debug=1
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_warn_no_hca_params_found=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl_openib_warn_default_gid_prefix=0
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_btl=self,openib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If rd_low and rd_num are left at their default values, the program
</span><br>
<span class="quotelev2">&gt;&gt; simply hangs in the gather call after about 20 iterations (a gather
</span><br>
<span class="quotelev2">&gt;&gt; and a bcast).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone shed any light on what this error message means or what
</span><br>
<span class="quotelev2">&gt;&gt; might be done about it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; mch
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5836.php">Gabriele Fatigati: "Re: [OMPI users] Question about RDMA"</a>
<li><strong>Previous message:</strong> <a href="5834.php">Doug Reeder: "Re: [OMPI users] Open MPI instructional videos"</a>
<li><strong>In reply to:</strong> <a href="5809.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<li><strong>Reply:</strong> <a href="5960.php">Jeff Squyres: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
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
