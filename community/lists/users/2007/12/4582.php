<?
$subject_val = "[OMPI users] OpenIB BTL broken on ompi-trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 15:44:42 2007" -->
<!-- isoreceived="20071203204442" -->
<!-- sent="Mon, 3 Dec 2007 14:44:37 -0600" -->
<!-- isosent="20071203204437" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB BTL broken on ompi-trunk?" -->
<!-- id="20071203204437.GC11990_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB BTL broken on ompi-trunk?<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 15:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Previous message:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Reply:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm seeing a crash in the openib btl on ompi-trunk when running any
<br>
tests (whether running my own programs or generic ones).  For example,
<br>
when running IMB pingpong I get the following:
<br>
<p>$ mpirun --n 2 --host vic12,vic20 -mca btl openib,self
<br>
# /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1 pingpong
<br>
--------------------------------------------------------------------------
<br>
WARNING: No HCA parameters were found for the HCA that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Hostname:           vic20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor ID:      0x1425
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor part ID: 48
<br>
<p>Default HCA parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_hca_param_files MCA parameter to set values for your HCA.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_hca_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
WARNING: No HCA parameters were found for the HCA that Open MPI
<br>
detected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Hostname:           vic12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor ID:      0x1425
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HCA vendor part ID: 48
<br>
<p>Default HCA parameters will be used, which may result in lower
<br>
performance.  You can edit any of the files specified by the
<br>
btl_openib_hca_param_files MCA parameter to set values for your HCA.
<br>
<p>NOTE: You can turn off this warning by setting the MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;btl_openib_warn_no_hca_params_found to 0.
<br>
--------------------------------------------------------------------------
<br>
[vic20:04339] *** Process received signal ***
<br>
[vic12:04539] *** Process received signal ***
<br>
[vic12:04539] Signal: Segmentation fault (11)
<br>
[vic12:04539] Signal code: Address not mapped (1)
<br>
[vic12:04539] Failing at address: 0xffffffffffffffea
<br>
[vic20:04339] Signal: Segmentation fault (11)
<br>
[vic20:04339] Signal code: Address not mapped (1)
<br>
[vic20:04339] Failing at address: 0xffffffffffffffea
<br>
[vic20:04339] [ 0] /lib64/libpthread.so.0 [0x35db80dd40]
<br>
[vic20:04339] [ 1] /usr/lib64/libibverbs.so.1(ibv_create_srq+0x3e)
<br>
[0x32b7e083be]
<br>
[vic20:04339] [ 2]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
<br>
[0x2aaaaf0bdc27]
<br>
[vic20:04339] [ 3]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
<br>
[0x2aaaaf0be07e]
<br>
[vic20:04339] [ 4]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0x857)
<br>
[0x2aaaaf0bd97c]
<br>
[vic20:04339] [ 5]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x37d)
<br>
[0x2aaaaeeb399e]
<br>
[vic20:04339] [ 6]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x15c)
<br>
[0x2aaaaec9036b]
<br>
[vic20:04339] [ 7]
<br>
/usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(ompi_mpi_init+0xb2b)
<br>
[0x2aaaaab03817]
<br>
[vic20:04339] [ 8]
<br>
/usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(MPI_Init+0x15d)
<br>
[0x2aaaaab44dc9]
<br>
[vic20:04339] [ 9]
<br>
/usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1(main+0x29) [0x402df9]
<br>
[vic20:04339] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x35dac1d8a4]
<br>
[vic20:04339] [11] /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1
<br>
[0x402d39]
<br>
[vic20:04339] *** End of error message ***
<br>
[vic12:04539] [ 0] /lib64/libpthread.so.0 [0x3a7dc0dd40]
<br>
[vic12:04539] [ 1] /usr/lib64/libibverbs.so.1(ibv_create_srq+0x3e)
<br>
[0x3e82e083be]
<br>
[vic12:04539] [ 2]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
<br>
[0x2aaaaf0bdc27]
<br>
[vic12:04539] [ 3]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
<br>
[0x2aaaaf0be07e]
<br>
[vic12:04539] [ 4]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0x857)
<br>
[0x2aaaaf0bd97c]
<br>
[vic12:04539] [ 5]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x37d)
<br>
[0x2aaaaeeb399e]
<br>
[vic12:04539] [ 6]
<br>
/usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x15c)
<br>
[0x2aaaaec9036b]
<br>
[vic12:04539] [ 7]
<br>
/usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(ompi_mpi_init+0xb2b)
<br>
[0x2aaaaab03817]
<br>
[vic12:04539] [ 8]
<br>
/usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(MPI_Init+0x15d)
<br>
[0x2aaaaab44dc9]
<br>
[vic12:04539] [ 9]
<br>
/usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1(main+0x29) [0x402df9]
<br>
[vic12:04539] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3a7d01d8a4]
<br>
[vic12:04539] [11] /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1
<br>
[0x402d39]
<br>
[vic12:04539] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 4339 on
<br>
node vic20 calling &quot;abort&quot;. This will have caused other processes
<br>
in the application to be terminated by signals sent by mpirun
<br>
(as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>I am not having any problems running this test with the openib btl on
<br>
the ompi-1.2 branch, and I can run this test successfully with the udapl
<br>
and tcp btls on ompi-trunk.  Is anyone else seeing this problem?
<br>
<p>Thanks,
<br>
Jon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Previous message:</strong> <a href="4581.php">Rolf vandeVaart: "Re: [OMPI users] large number of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>Reply:</strong> <a href="4583.php">Jon Mason: "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
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
