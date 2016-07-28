<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 15:26:42 2014" -->
<!-- isoreceived="20140814192642" -->
<!-- sent="Thu, 14 Aug 2014 15:26:41 -0400" -->
<!-- isosent="20140814192641" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="CAG4F6z9R+AcQM7Qc_miqOkJNVSwZ2Psv4-YtDf9c+wVA6KoGJw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG4F6z_QwgZ+8RA6BobXrnboBJrOc3P9SNPt=6F9rafeZJAVZQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-14 15:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25030.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25030.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25039.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25039.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One more, Maxime, can you please make sure you've covered everything here:
<br>
<p><a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>Josh
<br>
<p><p>On Thu, Aug 14, 2014 at 3:18 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; And maybe include your LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 14, 2014 at 3:16 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you try to run the example code &quot;ring_c&quot; across nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Aug 14, 2014 at 3:14 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev2">&gt;&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Yes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything has been built with GCC 4.8.x, although x might have changed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between the OpenMPI 1.8.1 build and the gromacs build. For OpenMPI 1.8.2rc4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however, it was the exact same compiler for everything.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2014-08-14 14:57, Joshua Ladd a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hmmm...weird. Seems like maybe a mismatch between libraries. Did you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build OMPI with the same compiler as you did GROMACS/Charm++?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm stealing this suggestion from an old Gromacs forum with essentially
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same symptom:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Did you compile Open MPI and Gromacs with the same compiler (i.e. both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gcc and the same version)? You write you tried different OpenMPI versions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and different GCC versions but it is unclear whether those match. Can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide more detail how you compiled (including all options you specified)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you tested any other MPI program linked against those Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions? Please make sure (e.g. with ldd) that the MPI and pthread library
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you compiled against is also used for execution. If you compiled and run on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different hosts, check whether the error still occurs when executing on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; build host.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://redmine.gromacs.org/issues/1025">http://redmine.gromacs.org/issues/1025</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Aug 14, 2014 at 2:40 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I just tried Gromacs with two nodes. It crashes, but with a different
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error. I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] Failing at address: 0x8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 3]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 4]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 6]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 7]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 8]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [ 9]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [10]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [11] mdrunmpi(cmain+0x1cdb)[0x43b4bb]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [12]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gpu-k20-13:142156] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpiexec noticed that process rank 0 with PID 142156 on node gpu-k20-13
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We do not have MPI_THREAD_MULTIPLE enabled in our build, so Charm++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cannot be using this level of threading. The configure line for OpenMPI was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ./configure --prefix=$PREFIX \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-threads --with-verbs=yes --enable-shared --enable-static \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       --with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot; \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        --without-loadleveler --without-slurm --with-tm \
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        --with-cuda=$(dirname $(dirname $(which nvcc)))
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 2014-08-14 14:20, Joshua Ladd a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   What about between nodes? Since this is coming from the OpenIB BTL,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be good to check this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do you know what the MPI thread level is set to when used with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Charm++ runtime? Is it MPI_THREAD_MULTIPLE? The OpenIB BTL is not thread
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; safe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Aug 14, 2014 at 2:17 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I ran gromacs successfully with OpenMPI 1.8.1 and Cuda 6.0.37 on a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; single node, with 8 ranks and multiple OpenMP threads.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 2014-08-14 14:15, Joshua Ladd a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   Hi, Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Just curious, are you able to run a vanilla MPI program? Can you try
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; one one of the example programs in the &quot;examples&quot; subdirectory. Looks like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a threading issue to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25026.php">http://www.open-mpi.org/community/lists/users/2014/08/25026.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25027.php">http://www.open-mpi.org/community/lists/users/2014/08/25027.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph. D. en physique
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25028.php">http://www.open-mpi.org/community/lists/users/2014/08/25028.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25032.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25030.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25030.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25039.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25039.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
