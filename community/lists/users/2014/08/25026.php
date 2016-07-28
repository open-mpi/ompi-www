<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 14:40:15 2014" -->
<!-- isoreceived="20140814184015" -->
<!-- sent="Thu, 14 Aug 2014 14:40:23 -0400" -->
<!-- isosent="20140814184023" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53ED0297.7060807_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z-RpVNQWd=UQ_xp8L1e-LECY_M5XxwCdki1OJ3GRORgJg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-14 14:40:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25025.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25025.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just tried Gromacs with two nodes. It crashes, but with a different 
<br>
error. I get
<br>
[gpu-k20-13:142156] *** Process received signal ***
<br>
[gpu-k20-13:142156] Signal: Segmentation fault (11)
<br>
[gpu-k20-13:142156] Signal code: Address not mapped (1)
<br>
[gpu-k20-13:142156] Failing at address: 0x8
<br>
[gpu-k20-13:142156] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
<br>
[gpu-k20-13:142156] [ 1] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
<br>
[gpu-k20-13:142156] [ 2] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
<br>
[gpu-k20-13:142156] [ 3] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
<br>
[gpu-k20-13:142156] [ 4] 
<br>
/usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
<br>
[gpu-k20-13:142156] [ 5] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
<br>
[gpu-k20-13:142156] [ 6] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
<br>
[gpu-k20-13:142156] [ 7] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
<br>
[gpu-k20-13:142156] [ 8] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
<br>
[gpu-k20-13:142156] [ 9] 
<br>
/software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
<br>
[gpu-k20-13:142156] [10] 
<br>
/software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
<br>
[gpu-k20-13:142156] [11] mdrunmpi(cmain+0x1cdb)[0x43b4bb]
<br>
[gpu-k20-13:142156] [12] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
<br>
[gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
<br>
[gpu-k20-13:142156] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 0 with PID 142156 on node gpu-k20-13 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p>We do not have MPI_THREAD_MULTIPLE enabled in our build, so Charm++ 
<br>
cannot be using this level of threading. The configure line for OpenMPI was
<br>
./configure --prefix=$PREFIX \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-threads --with-verbs=yes --enable-shared --enable-static \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--without-loadleveler --without-slurm --with-tm \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-cuda=$(dirname $(dirname $(which nvcc)))
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-14 14:20, Joshua Ladd a &#233;crit :
<br>
<span class="quotelev1">&gt; What about between nodes? Since this is coming from the OpenIB BTL, 
</span><br>
<span class="quotelev1">&gt; would be good to check this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you know what the MPI thread level is set to when used with the 
</span><br>
<span class="quotelev1">&gt; Charm++ runtime? Is it MPI_THREAD_MULTIPLE? The OpenIB BTL is not 
</span><br>
<span class="quotelev1">&gt; thread safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 14, 2014 at 2:17 PM, Maxime Boissonneault 
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi,
</span><br>
<span class="quotelev1">&gt;     I ran gromacs successfully with OpenMPI 1.8.1 and Cuda 6.0.37 on a
</span><br>
<span class="quotelev1">&gt;     single node, with 8 ranks and multiple OpenMP threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 2014-08-14 14:15, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hi, Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Just curious, are you able to run a vanilla MPI program? Can you
</span><br>
<span class="quotelev2">&gt;&gt;     try one one of the example programs in the &quot;examples&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     subdirectory. Looks like a threading issue to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev2">&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25026/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25025.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25025.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
