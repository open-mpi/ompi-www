<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 13:56:52 2007" -->
<!-- isoreceived="20070402175652" -->
<!-- sent="Mon, 2 Apr 2007 13:56:50 -0400" -->
<!-- isosent="20070402175650" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20" -->
<!-- id="676EA691-CF55-434A-9C99-BEDD89A492BE_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5304E9EC41_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 13:56:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Previous message:</strong> <a href="2981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, only the first segfault is fixed in the nightly builds. You can  
<br>
run mx_endpoint_info to see how many endpoints are available and if  
<br>
any are in use.
<br>
<p>As far as the segfault you are seeing now, I am unsure what is  
<br>
causing it. Hopefully someone who knows more about that area of the  
<br>
code than me can help.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>On Apr 2, 2007, at 6:12 AM, de Almeida, Valmor F. wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I installed the openmpi-1.2.1a0r14178 tarball (took this  
</span><br>
<span class="quotelev1">&gt; opportunity to
</span><br>
<span class="quotelev1">&gt; use the intel fortran compiler instead gfortran). With a simple  
</span><br>
<span class="quotelev1">&gt; test it
</span><br>
<span class="quotelev1">&gt; seems to work but note the same messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;mpirun -np 8 -machinefile mymachines a.out
</span><br>
<span class="quotelev1">&gt; [x1:25417] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; [x1:25418] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; [x2:31983] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; [x2:31982] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; [x2:31980] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 4 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 0 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 1 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 5 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 2 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 7 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 6 of 7
</span><br>
<span class="quotelev1">&gt; Hello, world! I am 3 of 7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the machinefile is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; x1  slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt; x2  slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However with a realistic code, it starts fine (same messages as above)
</span><br>
<span class="quotelev1">&gt; and somewhere later:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [x1:25947] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [x1:25947] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [x1:25947] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [x1:25947] Failing at address: 0x14
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 0] [0xb7f00440]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_r
</span><br>
<span class="quotelev1">&gt; equest_start_copy+0x13e) [0xb7a80e6e]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_send_r
</span><br>
<span class="quotelev1">&gt; equest_process_pending+0x1e3) [0xb7a82463]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 3] /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so
</span><br>
<span class="quotelev1">&gt; [0xb7a7ebf8]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_btl_sm.so 
</span><br>
<span class="quotelev1">&gt; (mca_btl_sm_componen
</span><br>
<span class="quotelev1">&gt; t_progress+0x1813) [0xb7a41923]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_bml_r2.so 
</span><br>
<span class="quotelev1">&gt; (mca_bml_r2_progress
</span><br>
<span class="quotelev1">&gt; +0x36) [0xb7a4fdd6]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 6] /opt/ompi/lib/libopen-pal.so.0(opal_progress+0x79)
</span><br>
<span class="quotelev1">&gt; [0xb7dc41a9]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 7] /opt/ompi/lib/libmpi.so.0(ompi_request_wait_all+0xb5)
</span><br>
<span class="quotelev1">&gt; [0xb7e90145]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 8]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned
</span><br>
<span class="quotelev1">&gt; _sendrecv_actual+0xc9) [0xb7a167a9]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [ 9]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned
</span><br>
<span class="quotelev1">&gt; _barrier_intra_recursivedoubling+0xe4) [0xb7a1bfb4]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [10]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so 
</span><br>
<span class="quotelev1">&gt; (ompi_coll_tuned
</span><br>
<span class="quotelev1">&gt; _barrier_intra_dec_fixed+0x48) [0xb7a16a18]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [11] /opt/ompi/lib/libmpi.so.0(PMPI_Barrier+0x69)
</span><br>
<span class="quotelev1">&gt; [0xb7ea4059]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [12] driver0(_ZNK3MPI4Comm7BarrierEv+0x20) [0x806baf4]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [13] driver0(_ZN3gms12PartitionSet14ReadData_Case2Ev+0xc92)
</span><br>
<span class="quotelev1">&gt; [0x808bb78]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [14] driver0(_ZN3gms12PartitionSet8ReadDataESsSsSst+0xbc)
</span><br>
<span class="quotelev1">&gt; [0x8086f96]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [15] driver0(main+0x181) [0x8068c7f]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [16] /lib/libc.so.6(__libc_start_main+0xdc) [0xb7b6a824]
</span><br>
<span class="quotelev1">&gt; [x1:25947] [17] driver0(__gxx_personality_v0+0xb9) [0x8068991]
</span><br>
<span class="quotelev1">&gt; [x1:25947] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 25945 on node x1 exited on
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 7 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This code does run to completion using ompi-1.2 if I use only 2 slots
</span><br>
<span class="quotelev1">&gt; per machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Valmor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Tim Prins
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, March 30, 2007 10:49 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed
</span><br>
<span class="quotelev2">&gt;&gt; withstatus=20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Valmor,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What is happening here is that when Open MPI tries to create MX
</span><br>
<span class="quotelev1">&gt; endpoint
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; communication, mx returns code 20, which is MX_BUSY.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At this point we should gracefully move on, but there is a bug in  
</span><br>
<span class="quotelev2">&gt;&gt; Open
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.2
</span><br>
<span class="quotelev2">&gt;&gt; which causes a segmentation fault in case of this type of error. This
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev2">&gt;&gt; be
</span><br>
<span class="quotelev2">&gt;&gt; fixed in 1.2.1, and the fix is available now in the 1.2 nightly
</span><br>
<span class="quotelev1">&gt; tarballs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Friday 30 March 2007 05:06 pm, de Almeida, Valmor F. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am getting this error any time the number of processes requested
</span><br>
<span class="quotelev1">&gt; per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine is greater than the number of cpus. I suspect it is
</span><br>
<span class="quotelev1">&gt; something on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configuration of mx / ompi that I am missing since another
</span><br>
<span class="quotelev1">&gt; machine I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have without mx installed runs ompi correctly with oversubscription.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Valmor
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -&gt;mpirun -np 3 --machinefile mymachines-1 a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] *** Process received signal *** [x1:23624] Signal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault (11) [x1:23624] Signal code: Address not mapped
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] Failing at address: 0x20 [x1:23624] [ 0] [0xb7f7f440]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_finalize+0x25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xb7aca825] [x1:23624] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_component_init 
</span><br>
<span class="quotelev1">&gt; +0x6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f8) [0xb7acc658] [x1:23624] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/ompi/lib/libmpi.so.0(mca_btl_base_select+0x1a0) [0xb7f41900]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init 
</span><br>
<span class="quotelev1">&gt; +0x2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6) [0xb7ad1006] [x1:23624] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/ompi/lib/libmpi.so.0(mca_bml_base_init+0x78) [0xb7f41198]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_pml_ob1.so 
</span><br>
<span class="quotelev1">&gt; (mca_pml_ob1_component_init+0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x7d) [0xb7af866d] [x1:23624] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /opt/ompi/lib/libmpi.so.0(mca_pml_base_select+0x176) [0xb7f49b56]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] [ 8] /opt/ompi/lib/libmpi.so.0(ompi_mpi_init+0x4cf)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xb7f0fe2f] [x1:23624] [ 9]
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libmpi.so.0(MPI_Init+0xab)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0xb7f3204b] [x1:23624] [10] a.out(_ZN3MPI4InitERiRPPc+0x18)
</span><br>
<span class="quotelev1">&gt; [0x8052cbe]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [x1:23624] [11] a.out(main+0x21) [0x804f4a7] [x1:23624] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib/libc.so.6(__libc_start_main+0xdc) [0xb7be9824]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; content of mymachines-1 file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; x1  max_slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2983.php">de Almeida, Valmor F.: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Previous message:</strong> <a href="2981.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
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
