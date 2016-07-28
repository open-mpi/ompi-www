<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 17:39:01 2014" -->
<!-- isoreceived="20140815213901" -->
<!-- sent="Fri, 15 Aug 2014 17:39:00 -0400" -->
<!-- isosent="20140815213900" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53EE7DF4.10501_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAG4F6z_7gF9Sa-feCvkTBZcybwXExgyiMRt3TZ19YPaEi9TkWg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-08-15 17:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25040.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25040.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct.
<br>
<p>Can it be because torque (pbs_mom) is not running on the head node and 
<br>
mpiexec attempts to contact it ?
<br>
<p>Maxime
<br>
<p>Le 2014-08-15 17:31, Joshua Ladd a &#233;crit :
<br>
<span class="quotelev1">&gt; But OMPI 1.8.x does run the ring_c program successfully on your 
</span><br>
<span class="quotelev1">&gt; compute node, right? The error only happens on the front-end login 
</span><br>
<span class="quotelev1">&gt; node if I understood you correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 15, 2014 at 5:20 PM, Maxime Boissonneault 
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here are the requested files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In the archive, you will find the output of configure, make, make
</span><br>
<span class="quotelev1">&gt;     install as well as the config.log, the environment when running
</span><br>
<span class="quotelev1">&gt;     ring_c and the ompi_info --all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Just for a reminder, the ring_c example compiled and ran, but
</span><br>
<span class="quotelev1">&gt;     produced no output when running and exited with code 65.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 2014-08-14 15:26, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     One more, Maxime, can you please make sure you've covered
</span><br>
<span class="quotelev2">&gt;&gt;     everything here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Aug 14, 2014 at 3:18 PM, Joshua Ladd
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;jladd.mlnx_at_[hidden] &lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         And maybe include your LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         On Thu, Aug 14, 2014 at 3:16 PM, Joshua Ladd
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;jladd.mlnx_at_[hidden] &lt;mailto:jladd.mlnx_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Can you try to run the example code &quot;ring_c&quot; across nodes?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             On Thu, Aug 14, 2014 at 3:14 PM, Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;             &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Yes,
</span><br>
<span class="quotelev2">&gt;&gt;                 Everything has been built with GCC 4.8.x, although x
</span><br>
<span class="quotelev2">&gt;&gt;                 might have changed between the OpenMPI 1.8.1 build
</span><br>
<span class="quotelev2">&gt;&gt;                 and the gromacs build. For OpenMPI 1.8.2rc4 however,
</span><br>
<span class="quotelev2">&gt;&gt;                 it was the exact same compiler for everything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Le 2014-08-14 14:57, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Hmmm...weird. Seems like maybe a mismatch between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 libraries. Did you build OMPI with the same compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 as you did GROMACS/Charm++?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 I'm stealing this suggestion from an old Gromacs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 forum with essentially the same symptom:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 &quot;Did you compile Open MPI and Gromacs with the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 compiler (i.e. both gcc and the same version)? You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 write you tried different OpenMPI versions and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 different GCC versions but it is unclear whether
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 those match. Can you provide more detail how you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 compiled (including all options you specified)? Have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 you tested any other MPI program linked against
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 those Open MPI versions? Please make sure (e.g. with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ldd) that the MPI and pthread library you compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 against is also used for execution. If you compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 and run on different hosts, check whether the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 still occurs when executing on the build host.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://redmine.gromacs.org/issues/1025">http://redmine.gromacs.org/issues/1025</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 On Thu, Aug 14, 2014 at 2:40 PM, Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Boissonneault &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     I just tried Gromacs with two nodes. It crashes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     but with a different error. I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] Signal code: Address not
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] Failing at address: 0x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [11]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     mdrunmpi(cmain+0x1cdb)[0x43b4bb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     [gpu-k20-13:142156] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     mpiexec noticed that process rank 0 with PID
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     142156 on node gpu-k20-13 exited on signal 11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     We do not have MPI_THREAD_MULTIPLE enabled in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     our build, so Charm++ cannot be using this level
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     of threading. The configure line for OpenMPI was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     ./configure --prefix=$PREFIX \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --with-threads --with-verbs=yes --enable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --enable-static \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --without-loadleveler --without-slurm --with-tm \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     --with-cuda=$(dirname $(dirname $(which nvcc)))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Le 2014-08-14 14:20, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     What about between nodes? Since this is coming
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     from the OpenIB BTL, would be good to check this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Do you know what the MPI thread level is set to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     when used with the Charm++ runtime? Is it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     MPI_THREAD_MULTIPLE? The OpenIB BTL is not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     thread safe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     On Thu, Aug 14, 2014 at 2:17 PM, Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         I ran gromacs successfully with OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         1.8.1 and Cuda 6.0.37 on a single node,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         with 8 ranks and multiple OpenMP threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Le 2014-08-14 14:15, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Hi, Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Just curious, are you able to run a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         vanilla MPI program? Can you try one one
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         of the example programs in the &quot;examples&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         subdirectory. Looks like a threading issue
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         users mailing list users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;                         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     users mailing list users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25026.php">http://www.open-mpi.org/community/lists/users/2014/08/25026.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 users mailing list users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25027.php">http://www.open-mpi.org/community/lists/users/2014/08/25027.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 -- 
</span><br>
<span class="quotelev2">&gt;&gt;                 ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;                 Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;                 Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt;                 Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;                 users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;                 users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Subscription:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;                 Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;                 <a href="http://www.open-mpi.org/community/lists/users/2014/08/25028.php">http://www.open-mpi.org/community/lists/users/2014/08/25028.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25031.php">http://www.open-mpi.org/community/lists/users/2014/08/25031.php</a>
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25039.php">http://www.open-mpi.org/community/lists/users/2014/08/25039.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25040.php">http://www.open-mpi.org/community/lists/users/2014/08/25040.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="25040.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25040.php">Joshua Ladd: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>Reply:</strong> <a href="25042.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
