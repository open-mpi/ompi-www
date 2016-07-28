<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  2 06:13:37 2007" -->
<!-- isoreceived="20070402101337" -->
<!-- sent="Mon, 02 Apr 2007 06:12:20 -0400" -->
<!-- isosent="20070402101220" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304E9EC41_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200703302148.55033.tprins_at_open-mpi.org" -->
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
<strong>From:</strong> de Almeida, Valmor F. (<em>dealmeidav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-02 06:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2972.php">Jeff Squyres: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Previous message:</strong> <a href="2970.php">Rainer Keller: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2982.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="2982.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>I installed the openmpi-1.2.1a0r14178 tarball (took this opportunity to
<br>
use the intel fortran compiler instead gfortran). With a simple test it
<br>
seems to work but note the same messages
<br>
<p>-&gt;mpirun -np 8 -machinefile mymachines a.out 
<br>
[x1:25417] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
[x1:25418] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
[x2:31983] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
[x2:31982] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
[x2:31980] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
Hello, world! I am 4 of 7
<br>
Hello, world! I am 0 of 7
<br>
Hello, world! I am 1 of 7
<br>
Hello, world! I am 5 of 7
<br>
Hello, world! I am 2 of 7
<br>
Hello, world! I am 7 of 7
<br>
Hello, world! I am 6 of 7
<br>
Hello, world! I am 3 of 7
<br>
<p>and the machinefile is
<br>
<p>x1  slots=4 max_slots=4
<br>
x2  slots=4 max_slots=4
<br>
<p>However with a realistic code, it starts fine (same messages as above)
<br>
and somewhere later:
<br>
<p>[x1:25947] *** Process received signal ***
<br>
[x1:25947] Signal: Segmentation fault (11)
<br>
[x1:25947] Signal code: Address not mapped (1)
<br>
[x1:25947] Failing at address: 0x14
<br>
[x1:25947] [ 0] [0xb7f00440]
<br>
[x1:25947] [ 1]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_r
<br>
equest_start_copy+0x13e) [0xb7a80e6e]
<br>
[x1:25947] [ 2]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_send_r
<br>
equest_process_pending+0x1e3) [0xb7a82463]
<br>
[x1:25947] [ 3] /opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_pml_ob1.so
<br>
[0xb7a7ebf8]
<br>
[x1:25947] [ 4]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_btl_sm.so(mca_btl_sm_componen
<br>
t_progress+0x1813) [0xb7a41923]
<br>
[x1:25947] [ 5]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_bml_r2.so(mca_bml_r2_progress
<br>
+0x36) [0xb7a4fdd6]
<br>
[x1:25947] [ 6] /opt/ompi/lib/libopen-pal.so.0(opal_progress+0x79)
<br>
[0xb7dc41a9]
<br>
[x1:25947] [ 7] /opt/ompi/lib/libmpi.so.0(ompi_request_wait_all+0xb5)
<br>
[0xb7e90145]
<br>
[x1:25947] [ 8]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned
<br>
_sendrecv_actual+0xc9) [0xb7a167a9]
<br>
[x1:25947] [ 9]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned
<br>
_barrier_intra_recursivedoubling+0xe4) [0xb7a1bfb4]
<br>
[x1:25947] [10]
<br>
/opt/openmpi-1.2.1a0r14178/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned
<br>
_barrier_intra_dec_fixed+0x48) [0xb7a16a18]
<br>
[x1:25947] [11] /opt/ompi/lib/libmpi.so.0(PMPI_Barrier+0x69)
<br>
[0xb7ea4059]
<br>
[x1:25947] [12] driver0(_ZNK3MPI4Comm7BarrierEv+0x20) [0x806baf4]
<br>
[x1:25947] [13] driver0(_ZN3gms12PartitionSet14ReadData_Case2Ev+0xc92)
<br>
[0x808bb78]
<br>
[x1:25947] [14] driver0(_ZN3gms12PartitionSet8ReadDataESsSsSst+0xbc)
<br>
[0x8086f96]
<br>
[x1:25947] [15] driver0(main+0x181) [0x8068c7f]
<br>
[x1:25947] [16] /lib/libc.so.6(__libc_start_main+0xdc) [0xb7b6a824]
<br>
[x1:25947] [17] driver0(__gxx_personality_v0+0xb9) [0x8068991]
<br>
[x1:25947] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 25945 on node x1 exited on
<br>
signal 15 (Terminated). 
<br>
7 additional processes aborted (not shown)
<br>
<p><p>This code does run to completion using ompi-1.2 if I use only 2 slots
<br>
per machine.
<br>
<p>Thanks for any help.
<br>
<p><pre>
--
Valmor
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
On
&gt; Behalf Of Tim Prins
&gt; Sent: Friday, March 30, 2007 10:49 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed
&gt; withstatus=20
&gt; 
&gt; Hi Valmor,
&gt; 
&gt; What is happening here is that when Open MPI tries to create MX
endpoint
&gt; for
&gt; communication, mx returns code 20, which is MX_BUSY.
&gt; 
&gt; At this point we should gracefully move on, but there is a bug in Open
MPI
&gt; 1.2
&gt; which causes a segmentation fault in case of this type of error. This
will
&gt; be
&gt; fixed in 1.2.1, and the fix is available now in the 1.2 nightly
tarballs.
&gt; 
&gt; Hope this helps,
&gt; 
&gt; Tim
&gt; 
&gt; On Friday 30 March 2007 05:06 pm, de Almeida, Valmor F. wrote:
&gt; &gt; Hello,
&gt; &gt;
&gt; &gt; I am getting this error any time the number of processes requested
per
&gt; &gt; machine is greater than the number of cpus. I suspect it is
something on
&gt; &gt; the configuration of mx / ompi that I am missing since another
machine I
&gt; &gt; have without mx installed runs ompi correctly with oversubscription.
&gt; &gt;
&gt; &gt; Thanks for any help.
&gt; &gt;
&gt; &gt; --
&gt; &gt; Valmor
&gt; &gt;
&gt; &gt;
&gt; &gt; -&gt;mpirun -np 3 --machinefile mymachines-1 a.out
&gt; &gt; [x1:23624] mca_btl_mx_init: mx_open_endpoint() failed with status=20
&gt; &gt; [x1:23624] *** Process received signal *** [x1:23624] Signal:
&gt; &gt; Segmentation fault (11) [x1:23624] Signal code: Address not mapped
(1)
&gt; &gt; [x1:23624] Failing at address: 0x20 [x1:23624] [ 0] [0xb7f7f440]
&gt; &gt; [x1:23624] [ 1]
&gt; &gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_finalize+0x25)
&gt; &gt; [0xb7aca825] [x1:23624] [ 2]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_component_init+0x6
&gt; &gt; f8) [0xb7acc658] [x1:23624] [ 3]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_btl_base_select+0x1a0) [0xb7f41900]
&gt; &gt; [x1:23624] [ 4]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x2
&gt; &gt; 6) [0xb7ad1006] [x1:23624] [ 5]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_bml_base_init+0x78) [0xb7f41198]
&gt; &gt; [x1:23624] [ 6]
&gt; &gt;
/opt/openmpi-1.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_init+0
&gt; &gt; x7d) [0xb7af866d] [x1:23624] [ 7]
&gt; &gt; /opt/ompi/lib/libmpi.so.0(mca_pml_base_select+0x176) [0xb7f49b56]
&gt; &gt; [x1:23624] [ 8] /opt/ompi/lib/libmpi.so.0(ompi_mpi_init+0x4cf)
&gt; &gt; [0xb7f0fe2f] [x1:23624] [ 9]
/opt/ompi/lib/libmpi.so.0(MPI_Init+0xab)
&gt; &gt; [0xb7f3204b] [x1:23624] [10] a.out(_ZN3MPI4InitERiRPPc+0x18)
[0x8052cbe]
&gt; &gt; [x1:23624] [11] a.out(main+0x21) [0x804f4a7] [x1:23624] [12]
&gt; &gt; /lib/libc.so.6(__libc_start_main+0xdc) [0xb7be9824]
&gt; &gt;
&gt; &gt; content of mymachines-1 file
&gt; &gt;
&gt; &gt; x1  max_slots=4
&gt; &gt;
&gt; &gt;
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2972.php">Jeff Squyres: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>Previous message:</strong> <a href="2970.php">Rainer Keller: "Re: [OMPI users] experiences with gfortran and ompi"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/03/2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2982.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="2982.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
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
