<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 18:07:40 2007" -->
<!-- isoreceived="20070330220740" -->
<!-- sent="Fri, 30 Mar 2007 18:06:30 -0400" -->
<!-- isosent="20070330220630" -->
<!-- name="de Almeida, Valmor F." -->
<!-- email="dealmeidav_at_[hidden]" -->
<!-- subject="[OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20" -->
<!-- id="D2D7D9FE2492524A925313E2D82E1B5304E9EBA7_at_ORNLEXCHANGE.ornl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Date:</strong> 2007-03-30 18:06:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Rohit_Singh_at_[hidden]: "[OMPI users] OpenMPI for Windows?"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Geoff Galitz: "[OMPI users] migration FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<li><strong>Reply:</strong> <a href="2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am getting this error any time the number of processes requested per
<br>
machine is greater than the number of cpus. I suspect it is something on
<br>
the configuration of mx / ompi that I am missing since another machine I
<br>
have without mx installed runs ompi correctly with oversubscription.
<br>
<p>Thanks for any help.
<br>
<p><pre>
--
Valmor
-&gt;mpirun -np 3 --machinefile mymachines-1 a.out
[x1:23624] mca_btl_mx_init: mx_open_endpoint() failed with status=20
[x1:23624] *** Process received signal *** [x1:23624] Signal:
Segmentation fault (11) [x1:23624] Signal code: Address not mapped (1)
[x1:23624] Failing at address: 0x20 [x1:23624] [ 0] [0xb7f7f440]
[x1:23624] [ 1]
/opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_finalize+0x25)
[0xb7aca825] [x1:23624] [ 2]
/opt/openmpi-1.2/lib/openmpi/mca_btl_mx.so(mca_btl_mx_component_init+0x6
f8) [0xb7acc658] [x1:23624] [ 3]
/opt/ompi/lib/libmpi.so.0(mca_btl_base_select+0x1a0) [0xb7f41900]
[x1:23624] [ 4]
/opt/openmpi-1.2/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x2
6) [0xb7ad1006] [x1:23624] [ 5]
/opt/ompi/lib/libmpi.so.0(mca_bml_base_init+0x78) [0xb7f41198]
[x1:23624] [ 6]
/opt/openmpi-1.2/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_component_init+0
x7d) [0xb7af866d] [x1:23624] [ 7]
/opt/ompi/lib/libmpi.so.0(mca_pml_base_select+0x176) [0xb7f49b56]
[x1:23624] [ 8] /opt/ompi/lib/libmpi.so.0(ompi_mpi_init+0x4cf)
[0xb7f0fe2f] [x1:23624] [ 9] /opt/ompi/lib/libmpi.so.0(MPI_Init+0xab)
[0xb7f3204b] [x1:23624] [10] a.out(_ZN3MPI4InitERiRPPc+0x18) [0x8052cbe]
[x1:23624] [11] a.out(main+0x21) [0x804f4a7] [x1:23624] [12]
/lib/libc.so.6(__libc_start_main+0xdc) [0xb7be9824]
content of mymachines-1 file
x1  max_slots=4
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2963.php">Rohit_Singh_at_[hidden]: "[OMPI users] OpenMPI for Windows?"</a>
<li><strong>Previous message:</strong> <a href="2961.php">Geoff Galitz: "[OMPI users] migration FAQ"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
<li><strong>Reply:</strong> <a href="2964.php">Tim Prins: "Re: [OMPI users] mca_btl_mx_init: mx_open_endpoint() failed with status=20"</a>
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
