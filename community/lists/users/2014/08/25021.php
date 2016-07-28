<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 11:51:31 2014" -->
<!-- isoreceived="20140814155131" -->
<!-- sent="Thu, 14 Aug 2014 11:51:36 -0400" -->
<!-- isosent="20140814155136" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53ECDB08.6070603_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5CF1622A-29B7-4993-BC3F-7420CDFE1E21_at_cisco.com" -->
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
<strong>Date:</strong> 2014-08-14 11:51:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25022.php">Matt Thompson: "[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I just did with 1.8.2rc4 and it does the same :
<br>
<p>[mboisson_at_helios-login1 simplearrayhello]$ ./hello
<br>
[helios-login1:11739] *** Process received signal ***
<br>
[helios-login1:11739] Signal: Segmentation fault (11)
<br>
[helios-login1:11739] Signal code: Address not mapped (1)
<br>
[helios-login1:11739] Failing at address: 0x30
<br>
[helios-login1:11739] [ 0] /lib64/libpthread.so.0[0x381c00f710]
<br>
[helios-login1:11739] [ 1] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xfa238)[0x7f7166a04238]
<br>
[helios-login1:11739] [ 2] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xfbad4)[0x7f7166a05ad4]
<br>
[helios-login1:11739] [ 3] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xcf)[0x7f71669ffddf]
<br>
[helios-login1:11739] [ 4] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xe4773)[0x7f71669ee773]
<br>
[helios-login1:11739] [ 5] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_btl_base_select+0x168)[0x7f71669e46a8]
<br>
[helios-login1:11739] [ 6] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_r2_component_init+0x11)[0x7f71669e3fd1]
<br>
[helios-login1:11739] [ 7] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_base_init+0x7f)[0x7f71669e275f]
<br>
[helios-login1:11739] [ 8] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0x1e602f)[0x7f7166af002f]
<br>
[helios-login1:11739] [ 9] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_pml_base_select+0x3b6)[0x7f7166aedc26]
<br>
[helios-login1:11739] [10] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_mpi_init+0x4e3)[0x7f7166988863]
<br>
[helios-login1:11739] [11] 
<br>
/software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib/libmpi.so.1(MPI_Init_thread+0x15d)[0x7f71669a86fd]
<br>
[helios-login1:11739] [12] ./hello(LrtsInit+0x72)[0x4fcf02]
<br>
[helios-login1:11739] [13] ./hello(ConverseInit+0x70)[0x4ff680]
<br>
[helios-login1:11739] [14] ./hello(main+0x27)[0x470767]
<br>
[helios-login1:11739] [15] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x381bc1ed1d]
<br>
[helios-login1:11739] [16] ./hello[0x470b71]
<br>
[helios-login1:11739] *** End of error message
<br>
<p><p><p>Maxime
<br>
<p>Le 2014-08-14 10:04, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; Can you try the latest 1.8.2 rc tarball?  (just released yesterday)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 14, 2014, at 8:39 AM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I compiled Charm++ 6.6.0rc3 using
</span><br>
<span class="quotelev2">&gt;&gt; ./build charm++ mpi-linux-x86_64 smp --with-production
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When compiling the simple example
</span><br>
<span class="quotelev2">&gt;&gt; mpi-linux-x86_64-smp/tests/charm++/simplearrayhello/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I get a segmentation fault that traces back to OpenMPI :
</span><br>
<span class="quotelev2">&gt;&gt; [mboisson_at_helios-login1 simplearrayhello]$ ./hello
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] Failing at address: 0x30
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 0] /lib64/libpthread.so.0[0x381c00f710]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 1] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf78f8)[0x7f2cd1f6b8f8]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 2] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xf8f64)[0x7f2cd1f6cf64]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 3] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_btl_openib_connect_base_select_for_local_port+0xcf)[0x7f2cd1f672af]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 4] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0xe1ad7)[0x7f2cd1f55ad7]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 5] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_btl_base_select+0x168)[0x7f2cd1f4bf28]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 6] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_r2_component_init+0x11)[0x7f2cd1f4b851]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 7] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_bml_base_init+0x7f)[0x7f2cd1f4a03f]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 8] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(+0x1e0d17)[0x7f2cd2054d17]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [ 9] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(mca_pml_base_select+0x3b6)[0x7f2cd20529d6]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [10] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(ompi_mpi_init+0x4e4)[0x7f2cd1ef0c14]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [11] /software-gpu/mpi/openmpi/1.8.1_gcc4.8_cuda6.0.37/lib/libmpi.so.1(MPI_Init_thread+0x15d)[0x7f2cd1f1065d]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [12] ./hello(LrtsInit+0x72)[0x4fcf02]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [13] ./hello(ConverseInit+0x70)[0x4ff680]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [14] ./hello(main+0x27)[0x470767]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [15] /lib64/libc.so.6(__libc_start_main+0xfd)[0x381bc1ed1d]
</span><br>
<span class="quotelev2">&gt;&gt; [helios-login1:01813] [16] ./hello[0x470b71]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone has a clue how to fix this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25014.php">http://www.open-mpi.org/community/lists/users/2014/08/25014.php</a>
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
<li><strong>Next message:</strong> <a href="25022.php">Matt Thompson: "[OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25020.php">Maxime Boissonneault: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>In reply to:</strong> <a href="25018.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25023.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
