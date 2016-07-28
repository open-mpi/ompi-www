<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 08:50:54 2014" -->
<!-- isoreceived="20140814125054" -->
<!-- sent="Thu, 14 Aug 2014 08:50:53 -0400" -->
<!-- isosent="20140814125053" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53ECB0AD.4000305_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53ECADFF.1060608_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 08:50:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that if I do the same build with OpenMPI 1.6.5, it works flawlessly.
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-14 08:39, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I compiled Charm++ 6.6.0rc3 using
</span><br>
<span class="quotelev1">&gt; ./build charm++ mpi-linux-x86_64 smp --with-production
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When compiling the simple example
</span><br>
<span class="quotelev1">&gt; mpi-linux-x86_64-smp/tests/charm++/simplearrayhello/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get a segmentation fault that traces back to OpenMPI :
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 simplearrayhello]$ ./hello
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] Failing at address: 0x30
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 0] /lib64/libpthread.so.0[0x381c00f710]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 1] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf78f8)[0x7f2cd1f6b8f8]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 2] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf8f64)[0x7f2cd1f6cf64]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 3] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xcf)[0x7f2cd1f672af]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 4] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xe1ad7)[0x7f2cd1f55ad7]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 5] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_btl_base_select+0x168)[0x7f2cd1f4bf28]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 6] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_r2_component_init+0x11)[0x7f2cd1f4b851]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 7] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_base_init+0x7f)[0x7f2cd1f4a03f]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 8] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0x1e0d17)[0x7f2cd2054d17]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [ 9] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_pml_base_select+0x3b6)[0x7f2cd20529d6]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [10] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_mpi_init+0x4e4)[0x7f2cd1ef0c14]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [11] 
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(MPI_Init_thread+0x15d)[0x7f2cd1f1065d]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [12] ./hello(LrtsInit+0x72)[0x4fcf02]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [13] ./hello(ConverseInit+0x70)[0x4ff680]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [14] ./hello(main+0x27)[0x470767]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [15] 
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x381bc1ed1d]
</span><br>
<span class="quotelev1">&gt; [helios-login1:01813] [16] ./hello[0x470b71]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone has a clue how to fix this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="25016.php">Oscar Mojica: "[OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25014.php">Maxime Boissonneault: "[OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
