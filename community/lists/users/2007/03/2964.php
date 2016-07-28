<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 22:49:02 2007" -->
<!-- isoreceived="20070331024902" -->
<!-- sent="Fri, 30 Mar 2007 21:48:54 -0500" -->
<!-- isosent="20070331024854" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20" -->
<!-- id="200703302148.55033.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2D7D9FE2492524A925313E2D82E1B5304E9EBA7_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Date:</strong> 2007-03-30 22:48:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2965.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2963.php">Rohit_Singh_at_[hidden]: "[OMPI users] OpenMPI for Windows?"</a>
<li><strong>In reply to:</strong> <a href="2962.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2967.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2967.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Valmor,
<br>
<p>What is happening here is that when Open MPI tries to create MX endpoint for 
<br>
communication, mx returns code 20, which is MX_BUSY.
<br>
<p>At this point we should gracefully move on, but there is a bug in Open MPI 1.2 
<br>
which causes a segmentation fault in case of this type of error. This will be 
<br>
fixed in 1.2.1, and the fix is available now in the 1.2 nightly tarballs. 
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>On Friday 30 March 2007 05:06 pm, de Almeida, Valmor F. wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting this error any time the number of processes requested per
</span><br>
<span class="quotelev1">&gt; machine is greater than the number of cpus. I suspect it is something on
</span><br>
<span class="quotelev1">&gt; the configuration of mx / ompi that I am missing since another machine I
</span><br>
<span class="quotelev1">&gt; have without mx installed runs ompi correctly with oversubscription.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -&gt;mpirun -np 3 --machinefile mymachines-1 a.out
</span><br>
<span class="quotelev1">&gt; [x1:23624] mca_btl_mx_init: mx_open_endpoint() failed with status=20
</span><br>
<span class="quotelev1">&gt; [x1:23624] *** Process received signal *** [x1:23624] Signal:
</span><br>
<span class="quotelev1">&gt; Segmentation fault (11) [x1:23624] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [x1:23624] Failing at address: 0x20 [x1:23624] [ 0] [0xb7f7f440]
</span><br>
<span class="quotelev1">&gt; [x1:23624] [ 1]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_finalize+0x25)
</span><br>
<span class="quotelev1">&gt; [0xb7aca825] [x1:23624] [ 2]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_component_init+0x6
</span><br>
<span class="quotelev1">&gt; f8) [0xb7acc658] [x1:23624] [ 3]
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libmpi.so.0(mca_btl_base_select+0x1a0) [0xb7f41900]
</span><br>
<span class="quotelev1">&gt; [x1:23624] [ 4]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x2
</span><br>
<span class="quotelev1">&gt; 6) [0xb7ad1006] [x1:23624] [ 5]
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libmpi.so.0(mca_bml_base_init+0x78) [0xb7f41198]
</span><br>
<span class="quotelev1">&gt; [x1:23624] [ 6]
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-1.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_init+0
</span><br>
<span class="quotelev1">&gt; x7d) [0xb7af866d] [x1:23624] [ 7]
</span><br>
<span class="quotelev1">&gt; /opt/ompi/lib/libmpi.so.0(mca_pml_base_select+0x176) [0xb7f49b56]
</span><br>
<span class="quotelev1">&gt; [x1:23624] [ 8] /opt/ompi/lib/libmpi.so.0(ompi_mpi_init+0x4cf)
</span><br>
<span class="quotelev1">&gt; [0xb7f0fe2f] [x1:23624] [ 9] /opt/ompi/lib/libmpi.so.0(MPI_Init+0xab)
</span><br>
<span class="quotelev1">&gt; [0xb7f3204b] [x1:23624] [10] a.out(_ZN3MPI4InitERiRPPc+0x18) [0x8052cbe]
</span><br>
<span class="quotelev1">&gt; [x1:23624] [11] a.out(main+0x21) [0x804f4a7] [x1:23624] [12]
</span><br>
<span class="quotelev1">&gt; /lib/libc.so.6(__libc_start_main+0xdc) [0xb7be9824]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; content of mymachines-1 file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; x1  max_slots=4
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2965.php">Barry Evans: "[OMPI users] Torque/OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2963.php">Rohit_Singh_at_[hidden]: "[OMPI users] OpenMPI for Windows?"</a>
<li><strong>In reply to:</strong> <a href="2962.php">de Almeida, Valmor F.: "[OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2967.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2967.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/2971.php">de Almeida, Valmor F.: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed withstatus=20"</a>
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
