<?
$subject_val = "Re: [OMPI users] OpenIB BTL broken on ompi-trunk?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  3 17:10:11 2007" -->
<!-- isoreceived="20071203221011" -->
<!-- sent="Mon, 3 Dec 2007 16:10:07 -0600" -->
<!-- isosent="20071203221007" -->
<!-- name="Jon Mason" -->
<!-- email="jon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenIB BTL broken on ompi-trunk?" -->
<!-- id="20071203221007.GE11990_at_opengridcomputing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20071203204437.GC11990_at_opengridcomputing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenIB BTL broken on ompi-trunk?<br>
<strong>From:</strong> Jon Mason (<em>jon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-03 17:10:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4584.php">Jeffrey M Ceason: "[OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>In reply to:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 03, 2007 at 02:44:37PM -0600, Jon Mason wrote:
<br>
<span class="quotelev1">&gt; I'm seeing a crash in the openib btl on ompi-trunk when running any
</span><br>
<span class="quotelev1">&gt; tests (whether running my own programs or generic ones).  For example,
</span><br>
<span class="quotelev1">&gt; when running IMB pingpong I get the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --n 2 --host vic12,vic20 -mca btl openib,self
</span><br>
<span class="quotelev1">&gt; # /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1 pingpong
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No HCA parameters were found for the HCA that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hostname:           vic20
</span><br>
<span class="quotelev1">&gt;     HCA vendor ID:      0x1425
</span><br>
<span class="quotelev1">&gt;     HCA vendor part ID: 48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default HCA parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_hca_param_files MCA parameter to set values for your HCA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_hca_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: No HCA parameters were found for the HCA that Open MPI
</span><br>
<span class="quotelev1">&gt; detected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Hostname:           vic12
</span><br>
<span class="quotelev1">&gt;     HCA vendor ID:      0x1425
</span><br>
<span class="quotelev1">&gt;     HCA vendor part ID: 48
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Default HCA parameters will be used, which may result in lower
</span><br>
<span class="quotelev1">&gt; performance.  You can edit any of the files specified by the
</span><br>
<span class="quotelev1">&gt; btl_openib_hca_param_files MCA parameter to set values for your HCA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: You can turn off this warning by setting the MCA parameter
</span><br>
<span class="quotelev1">&gt;       btl_openib_warn_no_hca_params_found to 0.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [vic20:04339] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vic12:04539] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [vic12:04539] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vic12:04539] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vic12:04539] Failing at address: 0xffffffffffffffea
</span><br>
<span class="quotelev1">&gt; [vic20:04339] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [vic20:04339] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [vic20:04339] Failing at address: 0xffffffffffffffea
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 0] /lib64/libpthread.so.0 [0x35db80dd40]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 1] /usr/lib64/libibverbs.so.1(ibv_create_srq+0x3e)
</span><br>
<span class="quotelev1">&gt; [0x32b7e083be]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0bdc27]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0be07e]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0x857)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0bd97c]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x37d)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaeeb399e]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x15c)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaec9036b]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(ompi_mpi_init+0xb2b)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab03817]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(MPI_Init+0x15d)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab44dc9]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1(main+0x29) [0x402df9]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x35dac1d8a4]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] [11] /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [0x402d39]
</span><br>
<span class="quotelev1">&gt; [vic20:04339] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 0] /lib64/libpthread.so.0 [0x3a7dc0dd40]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 1] /usr/lib64/libibverbs.so.1(ibv_create_srq+0x3e)
</span><br>
<span class="quotelev1">&gt; [0x3e82e083be]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0bdc27]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0be07e]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_btl_openib.so(mca_btl_openib_add_procs+0x857)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaf0bd97c]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 5]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_bml_r2.so(mca_bml_r2_add_procs+0x37d)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaeeb399e]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 6]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_add_procs+0x15c)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaec9036b]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 7]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(ompi_mpi_init+0xb2b)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab03817]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 8]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/lib64/libmpi.so.0(MPI_Init+0x15d)
</span><br>
<span class="quotelev1">&gt; [0x2aaaaab44dc9]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [ 9]
</span><br>
<span class="quotelev1">&gt; /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1(main+0x29) [0x402df9]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [10] /lib64/libc.so.6(__libc_start_main+0xf4)
</span><br>
<span class="quotelev1">&gt; [0x3a7d01d8a4]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] [11] /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt; [0x402d39]
</span><br>
<span class="quotelev1">&gt; [vic12:04539] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 4339 on
</span><br>
<span class="quotelev1">&gt; node vic20 calling &quot;abort&quot;. This will have caused other processes
</span><br>
<span class="quotelev1">&gt; in the application to be terminated by signals sent by mpirun
</span><br>
<span class="quotelev1">&gt; (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not having any problems running this test with the openib btl on
</span><br>
<span class="quotelev1">&gt; the ompi-1.2 branch, and I can run this test successfully with the udapl
</span><br>
<span class="quotelev1">&gt; and tcp btls on ompi-trunk.  Is anyone else seeing this problem?
</span><br>
<p>To answer my own question (with help from Jeff), the problem is caused
<br>
by OMPI trying to use the iwarp interfaces (which currently do not
<br>
work in openib).  In previous versions, it only tried the IB
<br>
interfaces (which do work).  When I limited my tests to only use the
<br>
IB interface, the test ran successfully.
<br>
<p>For the lazy,
<br>
# mpirun --n 2 --host vic12,vic20 -mca btl openib,self --mca btl_openib_if_include mthca0 /usr/mpi/gcc/openmpi-trunk/tests/IMB-2.3/IMB-MPI1 pingpong 
<br>
<p>Much thanks to Jeff,
<br>
Jon
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jon
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
<li><strong>Next message:</strong> <a href="4584.php">Jeffrey M Ceason: "[OMPI users] Using mtrace with openmpi segfaults"</a>
<li><strong>Previous message:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
<li><strong>In reply to:</strong> <a href="4582.php">Jon Mason: "[OMPI users] OpenIB BTL broken on ompi-trunk?"</a>
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
