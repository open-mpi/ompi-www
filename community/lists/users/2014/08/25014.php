<?
$subject_val = "[OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 08:39:29 2014" -->
<!-- isoreceived="20140814123929" -->
<!-- sent="Thu, 14 Aug 2014 08:39:27 -0400" -->
<!-- isosent="20140814123927" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53ECADFF.1060608_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 08:39:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I compiled Charm++ 6.6.0rc3 using
<br>
./build charm++ mpi-linux-x86_64 smp --with-production
<br>
<p>When compiling the simple example
<br>
mpi-linux-x86_64-smp/tests/charm++/simplearrayhello/
<br>
<p>I get a segmentation fault that traces back to OpenMPI :
<br>
[mboisson_at_helios-login1 simplearrayhello]$ ./hello
<br>
[helios-login1:01813] *** Process received signal ***
<br>
[helios-login1:01813] Signal: Segmentation fault (11)
<br>
[helios-login1:01813] Signal code: Address not mapped (1)
<br>
[helios-login1:01813] Failing at address: 0x30
<br>
[helios-login1:01813] [ 0] /lib64/libpthread.so.0[0x381c00f710]
<br>
[helios-login1:01813] [ 1] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf78f8)[0x7f2cd1f6b8f8]
<br>
[helios-login1:01813] [ 2] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf8f64)[0x7f2cd1f6cf64]
<br>
[helios-login1:01813] [ 3] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xcf)[0x7f2cd1f672af]
<br>
[helios-login1:01813] [ 4] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xe1ad7)[0x7f2cd1f55ad7]
<br>
[helios-login1:01813] [ 5] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_btl_base_select+0x168)[0x7f2cd1f4bf28]
<br>
[helios-login1:01813] [ 6] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_r2_component_init+0x11)[0x7f2cd1f4b851]
<br>
[helios-login1:01813] [ 7] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_base_init+0x7f)[0x7f2cd1f4a03f]
<br>
[helios-login1:01813] [ 8] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0x1e0d17)[0x7f2cd2054d17]
<br>
[helios-login1:01813] [ 9] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_pml_base_select+0x3b6)[0x7f2cd20529d6]
<br>
[helios-login1:01813] [10] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_mpi_init+0x4e4)[0x7f2cd1ef0c14]
<br>
[helios-login1:01813] [11] 
<br>
/software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(MPI_Init_thread+0x15d)[0x7f2cd1f1065d]
<br>
[helios-login1:01813] [12] ./hello(LrtsInit+0x72)[0x4fcf02]
<br>
[helios-login1:01813] [13] ./hello(ConverseInit+0x70)[0x4ff680]
<br>
[helios-login1:01813] [14] ./hello(main+0x27)[0x470767]
<br>
[helios-login1:01813] [15] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x381bc1ed1d]
<br>
[helios-login1:01813] [16] ./hello[0x470b71]
<br>
<p><p>Anyone has a clue how to fix this ?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25013.php">Christoph Niethammer: "Re: [OMPI users] GCC 4.9 and MPI_F08?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25015.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
