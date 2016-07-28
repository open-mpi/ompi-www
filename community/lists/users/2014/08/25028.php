<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 14 15:14:50 2014" -->
<!-- isoreceived="20140814191450" -->
<!-- sent="Thu, 14 Aug 2014 15:14:50 -0400" -->
<!-- isosent="20140814191450" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53ED0AAA.3060004_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z9TPx=tB_LMeXkfGAeMFXFLkY1cP+bwMgQ+pCsBzVfAYA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-14 15:14:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes,
<br>
Everything has been built with GCC 4.8.x, although x might have changed 
<br>
between the OpenMPI 1.8.1 build and the gromacs build. For OpenMPI 
<br>
1.8.2rc4 however, it was the exact same compiler for everything.
<br>
<p>Maxime
<br>
<p>Le 2014-08-14 14:57, Joshua Ladd a &#233;crit :
<br>
<span class="quotelev1">&gt; Hmmm...weird. Seems like maybe a mismatch between libraries. Did you 
</span><br>
<span class="quotelev1">&gt; build OMPI with the same compiler as you did GROMACS/Charm++?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm stealing this suggestion from an old Gromacs forum with 
</span><br>
<span class="quotelev1">&gt; essentially the same symptom:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Did you compile Open MPI and Gromacs with the same compiler (i.e. 
</span><br>
<span class="quotelev1">&gt; both gcc and the same version)? You write you tried different OpenMPI 
</span><br>
<span class="quotelev1">&gt; versions and different GCC versions but it is unclear whether those 
</span><br>
<span class="quotelev1">&gt; match. Can you provide more detail how you compiled (including all 
</span><br>
<span class="quotelev1">&gt; options you specified)? Have you tested any other MPI program linked 
</span><br>
<span class="quotelev1">&gt; against those Open MPI versions? Please make sure (e.g. with ldd) that 
</span><br>
<span class="quotelev1">&gt; the MPI and pthread library you compiled against is also used for 
</span><br>
<span class="quotelev1">&gt; execution. If you compiled and run on different hosts, check whether 
</span><br>
<span class="quotelev1">&gt; the error still occurs when executing on the build host.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://redmine.gromacs.org/issues/1025">http://redmine.gromacs.org/issues/1025</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Aug 14, 2014 at 2:40 PM, Maxime Boissonneault 
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I just tried Gromacs with two nodes. It crashes, but with a
</span><br>
<span class="quotelev1">&gt;     different error. I get
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 0]
</span><br>
<span class="quotelev1">&gt;     /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 1]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 2]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 3]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 4]
</span><br>
<span class="quotelev1">&gt;     /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 5]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 6]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 7]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 8]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [ 9]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [10]
</span><br>
<span class="quotelev1">&gt;     /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [11] mdrunmpi(cmain+0x1cdb)[0x43b4bb]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [12]
</span><br>
<span class="quotelev1">&gt;     /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
</span><br>
<span class="quotelev1">&gt;     [gpu-k20-13:142156] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     mpiexec noticed that process rank 0 with PID 142156 on node
</span><br>
<span class="quotelev1">&gt;     gpu-k20-13 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We do not have MPI_THREAD_MULTIPLE enabled in our build, so
</span><br>
<span class="quotelev1">&gt;     Charm++ cannot be using this level of threading. The configure
</span><br>
<span class="quotelev1">&gt;     line for OpenMPI was
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=$PREFIX \
</span><br>
<span class="quotelev1">&gt;           --with-threads --with-verbs=yes --enable-shared
</span><br>
<span class="quotelev1">&gt;     --enable-static \
</span><br>
<span class="quotelev1">&gt;     --with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot; \
</span><br>
<span class="quotelev1">&gt;            --without-loadleveler --without-slurm --with-tm \
</span><br>
<span class="quotelev1">&gt;            --with-cuda=$(dirname $(dirname $(which nvcc)))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 2014-08-14 14:20, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     What about between nodes? Since this is coming from the OpenIB
</span><br>
<span class="quotelev2">&gt;&gt;     BTL, would be good to check this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Do you know what the MPI thread level is set to when used with
</span><br>
<span class="quotelev2">&gt;&gt;     the Charm++ runtime? Is it MPI_THREAD_MULTIPLE? The OpenIB BTL is
</span><br>
<span class="quotelev2">&gt;&gt;     not thread safe.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Aug 14, 2014 at 2:17 PM, Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hi,
</span><br>
<span class="quotelev2">&gt;&gt;         I ran gromacs successfully with OpenMPI 1.8.1 and Cuda 6.0.37
</span><br>
<span class="quotelev2">&gt;&gt;         on a single node, with 8 ranks and multiple OpenMP threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Le 2014-08-14 14:15, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi, Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Just curious, are you able to run a vanilla MPI program? Can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         you try one one of the example programs in the &quot;examples&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         subdirectory. Looks like a threading issue to me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________ users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mailing list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     ---------------------------------
</span><br>
<span class="quotelev1">&gt;     Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;     Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt;     Ph. D. en physique
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25026.php">http://www.open-mpi.org/community/lists/users/2014/08/25026.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25027.php">http://www.open-mpi.org/community/lists/users/2014/08/25027.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25028/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25027.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25029.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
