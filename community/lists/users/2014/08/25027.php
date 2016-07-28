<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 14:57:38 2014" -->
<!-- isoreceived="20140814185738" -->
<!-- sent="Thu, 14 Aug 2014 14:57:37 -0400" -->
<!-- isosent="20140814185737" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="CAG4F6z9TPx=tB_LMeXkfGAeMFXFLkY1cP+bwMgQ+pCsBzVfAYA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53ED0297.7060807_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2014-08-14 14:57:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25026.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25026.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...weird. Seems like maybe a mismatch between libraries. Did you build
<br>
OMPI with the same compiler as you did GROMACS/Charm++?
<br>
<p>I'm stealing this suggestion from an old Gromacs forum with essentially the
<br>
same symptom:
<br>
<p>&quot;Did you compile Open MPI and Gromacs with the same compiler (i.e. both gcc
<br>
and the same version)? You write you tried different OpenMPI versions and
<br>
different GCC versions but it is unclear whether those match. Can you
<br>
provide more detail how you compiled (including all options you specified)?
<br>
Have you tested any other MPI program linked against those Open MPI
<br>
versions? Please make sure (e.g. with ldd) that the MPI and pthread library
<br>
you compiled against is also used for execution. If you compiled and run on
<br>
different hosts, check whether the error still occurs when executing on the
<br>
build host.&quot;
<br>
<p><a href="http://redmine.gromacs.org/issues/1025">http://redmine.gromacs.org/issues/1025</a>
<br>
<p>Josh
<br>
<p><p><p><p>On Thu, Aug 14, 2014 at 2:40 PM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  I just tried Gromacs with two nodes. It crashes, but with a different
</span><br>
<span class="quotelev1">&gt; error. I get
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 5]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 6]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 7]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 8]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [ 9]
</span><br>
<span class="quotelev1">&gt; /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [10]
</span><br>
<span class="quotelev1">&gt; /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [11] mdrunmpi(cmain+0x1cdb)[0x43b4bb]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-13:142156] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 0 with PID 142156 on node gpu-k20-13
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We do not have MPI_THREAD_MULTIPLE enabled in our build, so Charm++ cannot
</span><br>
<span class="quotelev1">&gt; be using this level of threading. The configure line for OpenMPI was
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;       --with-threads --with-verbs=yes --enable-shared --enable-static \
</span><br>
<span class="quotelev1">&gt;       --with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot; \
</span><br>
<span class="quotelev1">&gt;        --without-loadleveler --without-slurm --with-tm \
</span><br>
<span class="quotelev1">&gt;        --with-cuda=$(dirname $(dirname $(which nvcc)))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-08-14 14:20, Joshua Ladd a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What about between nodes? Since this is coming from the OpenIB BTL,
</span><br>
<span class="quotelev1">&gt; would be good to check this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what the MPI thread level is set to when used with the Charm++
</span><br>
<span class="quotelev1">&gt; runtime? Is it MPI_THREAD_MULTIPLE? The OpenIB BTL is not thread safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 14, 2014 at 2:17 PM, Maxime Boissonneault &lt;
</span><br>
<span class="quotelev1">&gt; maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I ran gromacs successfully with OpenMPI 1.8.1 and Cuda 6.0.37 on a single
</span><br>
<span class="quotelev2">&gt;&gt; node, with 8 ranks and multiple OpenMP threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-08-14 14:15, Joshua Ladd a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Hi, Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Just curious, are you able to run a vanilla MPI program? Can you try one
</span><br>
<span class="quotelev2">&gt;&gt; one of the example programs in the &quot;examples&quot; subdirectory. Looks like a
</span><br>
<span class="quotelev2">&gt;&gt; threading issue to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25026.php">http://www.open-mpi.org/community/lists/users/2014/08/25026.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25027/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25026.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25026.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25028.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
