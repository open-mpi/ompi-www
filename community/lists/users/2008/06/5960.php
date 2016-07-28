<?
$subject_val = "Re: [OMPI users] OpenIB problem: error polling HP CQ...";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 21 09:38:01 2008" -->
<!-- isoreceived="20080621133801" -->
<!-- sent="Sat, 21 Jun 2008 09:37:53 -0400" -->
<!-- isosent="20080621133753" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB problem: error polling HP CQ..." -->
<!-- id="AAAC33D2-F5D1-4566-8CA4-ED9256989505_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="d105ee120806052251m6b660eaeqb8133785d3c23692_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-21 09:37:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5961.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>In reply to:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Errr...  That's not good.  :-(
<br>
<p>Do you have a small example that you can share that duplicates the  
<br>
problem?
<br>
<p><p><p>On Jun 6, 2008, at 1:51 AM, Matt Hughes wrote:
<br>
<p><span class="quotelev1">&gt; 2008/6/4 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Would it be possible for you to try a trunk nightly tarball snapshot,
</span><br>
<span class="quotelev2">&gt;&gt; perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attempted to use openmpi-1.3a1r18569.  After some pain getting
</span><br>
<span class="quotelev1">&gt; MPI_Comm_spawn to work (I will write about that in a separate
</span><br>
<span class="quotelev1">&gt; message), I was able to get my app started.  If segfaults in
</span><br>
<span class="quotelev1">&gt; btl_openib_handle_incoming() by dereferencing a null pointer:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x0000002a98059777 in btl_openib_handle_incoming  
</span><br>
<span class="quotelev1">&gt; (openib_btl=0xb8b900,
</span><br>
<span class="quotelev1">&gt;   ep=0xbecb70, frag=0xc8da80, byte_len=24) at btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 2129
</span><br>
<span class="quotelev1">&gt; #2  0x0000002a9805b674 in handle_wc (hca=0xb80670, cq=0,  
</span><br>
<span class="quotelev1">&gt; wc=0x7fbfffdfd0)
</span><br>
<span class="quotelev1">&gt;   at btl_openib_component.c:2397
</span><br>
<span class="quotelev1">&gt; #3  0x0000002a9805bbef in poll_hca (hca=0xb80670, count=1)
</span><br>
<span class="quotelev1">&gt;   at btl_openib_component.c:2508
</span><br>
<span class="quotelev1">&gt; #4  0x0000002a9805c1ac in progress_one_hca (hca=0xb80670)
</span><br>
<span class="quotelev1">&gt;   at btl_openib_component.c:2616
</span><br>
<span class="quotelev1">&gt; #5  0x0000002a9805c24f in btl_openib_component_progress ()
</span><br>
<span class="quotelev1">&gt;   at btl_openib_component.c:2641
</span><br>
<span class="quotelev1">&gt; #6  0x0000002a97f42308 in mca_bml_r2_progress () at bml_r2.c:93
</span><br>
<span class="quotelev1">&gt; #7  0x0000002a95a44c2c in opal_progress () at runtime/ 
</span><br>
<span class="quotelev1">&gt; opal_progress.c:187
</span><br>
<span class="quotelev1">&gt; #8  0x0000002a97d1f10c in opal_condition_wait (c=0x2a958b8b40,  
</span><br>
<span class="quotelev1">&gt; m=0x2a958b8bc0)
</span><br>
<span class="quotelev1">&gt;   at ../../../../opal/threads/condition.h:100
</span><br>
<span class="quotelev1">&gt; #9  0x0000002a97d1ef88 in ompi_request_wait_completion (req=0xbdfc80)
</span><br>
<span class="quotelev1">&gt;   at ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev1">&gt; #10 0x0000002a97d1ee64 in mca_pml_ob1_recv (addr=0xc52d14, count=1,
</span><br>
<span class="quotelev1">&gt;   datatype=0x2a958abe60, src=1, tag=-19, comm=0xbe0cf0, status=0x0)
</span><br>
<span class="quotelev1">&gt;   at pml_ob1_irecv.c:104
</span><br>
<span class="quotelev1">&gt; #11 0x0000002a98c1b182 in ompi_coll_tuned_gather_intra_basic_linear (
</span><br>
<span class="quotelev1">&gt;   sbuf=0x7fbfffe984, scount=1, sdtype=0x2a958abe60, rbuf=0xc52d10,
</span><br>
<span class="quotelev1">&gt;   rcount=1, rdtype=0x2a958abe60, root=0, comm=0xbe0cf0,  
</span><br>
<span class="quotelev1">&gt; module=0xda00e0)
</span><br>
<span class="quotelev1">&gt;   at coll_tuned_gather.c:408
</span><br>
<span class="quotelev1">&gt; #12 0x0000002a98c07fc1 in ompi_coll_tuned_gather_intra_dec_fixed (
</span><br>
<span class="quotelev1">&gt;   sbuf=0x7fbfffe984, scount=1, sdtype=0x2a958abe60, rbuf=0xc52d10,
</span><br>
<span class="quotelev1">&gt;   rcount=1, rdtype=0x2a958abe60, root=0, comm=0xbe0cf0,  
</span><br>
<span class="quotelev1">&gt; module=0xda00e0)
</span><br>
<span class="quotelev1">&gt;   at coll_tuned_decision_fixed.c:723
</span><br>
<span class="quotelev1">&gt; #13 0x0000002a95715f0f in PMPI_Gather (sendbuf=0x7fbfffe984,  
</span><br>
<span class="quotelev1">&gt; sendcount=1,
</span><br>
<span class="quotelev1">&gt;   sendtype=0x2a958abe60, recvbuf=0xc52d10, recvcount=1,
</span><br>
<span class="quotelev1">&gt;   recvtype=0x2a958abe60, root=0, comm=0xbe0cf0) at pgather.c:141
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This same build works fine with the TCP component and at least doesn't
</span><br>
<span class="quotelev1">&gt; crash with 1.2.6.  The only thing that may be unusual about my build
</span><br>
<span class="quotelev1">&gt; of openmpi 1.3 is that it is configured with --without-memory-manager
</span><br>
<span class="quotelev1">&gt; (it seems to cause crashes in another library I use).  I tried
</span><br>
<span class="quotelev1">&gt; rebuilding, omitting --without-memory-manager, but it failed in the
</span><br>
<span class="quotelev1">&gt; same way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mch
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 29, 2008, at 3:50 AM, Matt Hughes wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a program which uses MPI::Comm::Spawn to start processes on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes (c0-0, c0-1, etc).  The communication between the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute nodes consists of ISend and IRecv pairs, while communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the compute nodes consists of gather and bcast operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After executing ~80 successful loops (gather/bcast pairs), I get  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message from the head node process during a gather call:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0,1,0][btl_openib_component.c:1332:btl_openib_component_progress]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from headnode.local to: c0-0 error polling HP CQ with status WORK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; REQUEST FLUSHED ERROR status number 5 for wr_id 18504944 opcode 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The relevant environment variables:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_openib_rd_num=128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_openib_verbose=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_base_verbose=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_openib_rd_low=75
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_base_debug=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_openib_warn_no_hca_params_found=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl_openib_warn_default_gid_prefix=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI_MCA_btl=self,openib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If rd_low and rd_num are left at their default values, the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply hangs in the gather call after about 20 iterations (a gather
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and a bcast).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anyone shed any light on what this error message means or what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might be done about it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5961.php">Ralph Castain: "Re: [OMPI users] Displaying Selected MCA Modules"</a>
<li><strong>Previous message:</strong> <a href="5959.php">Jeff Squyres: "Re: [OMPI users] no reaction of remote hosts after ompi reinstall [follow up]"</a>
<li><strong>In reply to:</strong> <a href="5835.php">Matt Hughes: "Re: [OMPI users] OpenIB problem: error polling HP CQ..."</a>
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
