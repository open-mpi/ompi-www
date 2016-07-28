<?
$subject_val = "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 12:58:02 2014" -->
<!-- isoreceived="20140815165802" -->
<!-- sent="Fri, 15 Aug 2014 12:58:05 -0400" -->
<!-- isosent="20140815165805" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1" -->
<!-- id="53EE3C1D.9040105_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53EE2E09.50101_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2014-08-15 12:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I solved the warning that appeared with OpenMPI 1.6.5 on the login node. 
<br>
I increased the registrable memory.
<br>
<p>Now, with OpenMPI 1.6.5, it does not give any warning. Yet, with OpenMPI 
<br>
1.8.1 and OpenMPI 1.8.2rc4, it still exits with error code 65 and does 
<br>
not produce the normal output.
<br>
<p>I will recompile it from scratch and provide all the information 
<br>
requested on the help webpage.
<br>
<p>Cheers,
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-15 11:58, Maxime Boissonneault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Josh,
</span><br>
<span class="quotelev1">&gt; The ring_c example does not work on our login node :
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ mpiexec -np 10 ring_c
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ echo $?
</span><br>
<span class="quotelev1">&gt; 65
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /software-gpu/mpi/openmpi/1.8.2rc4_gcc4.8_cuda6.0.37/lib:/usr/lib64/nvidia:/software-gpu/cuda/6.0.37/lib64:/software-gpu/cuda/6.0.37/lib:/software6/compilers/gcc/4.8/lib64:/software6/compilers/gcc/4.8/lib:/software6/apps/buildtools/20140527/lib64:/software6/apps/buildtools/20140527/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does work on our compute nodes however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I compile and run this with OpenMPI 1.6.5, it gives a warning, but 
</span><br>
<span class="quotelev1">&gt; it does work on our login note :
</span><br>
<span class="quotelev1">&gt; [mboisson_at_helios-login1 examples]$ mpiexec ring_c
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt; allow registering part of your physical memory.  This can cause MPI 
</span><br>
<span class="quotelev1">&gt; jobs to
</span><br>
<span class="quotelev1">&gt; run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be caused by your OpenFabrics vendor limiting the amount of
</span><br>
<span class="quotelev1">&gt; physical memory that can be registered.  You should investigate the
</span><br>
<span class="quotelev1">&gt; relevant Linux kernel module parameters that control how much physical
</span><br>
<span class="quotelev1">&gt; memory can be registered, and increase them to allow registering all
</span><br>
<span class="quotelev1">&gt; physical memory on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See this Open MPI FAQ item for more information on these Linux kernel 
</span><br>
<span class="quotelev1">&gt; module
</span><br>
<span class="quotelev1">&gt; parameters:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:              helios-login1
</span><br>
<span class="quotelev1">&gt;   Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;   Total memory:            65457 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job will continue, but may be behave poorly and/or hang.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Process 0 sending 10 to 0, tag 201 (1 processes in ring)
</span><br>
<span class="quotelev1">&gt; Process 0 sent to 0
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 9
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 8
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 7
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 6
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 5
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 4
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 3
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 2
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 1
</span><br>
<span class="quotelev1">&gt; Process 0 decremented value: 0
</span><br>
<span class="quotelev1">&gt; Process 0 exiting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could the warning be causing a failure with OpenMPI 1.8.x ?
</span><br>
<span class="quotelev1">&gt; I suspect it does work on our compute nodes because they are 
</span><br>
<span class="quotelev1">&gt; configured to allow more locked pages. I do not understand however how 
</span><br>
<span class="quotelev1">&gt; a simple ring test should require that much memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-08-14 15:16, Joshua Ladd a &#233;crit :
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
<span class="quotelev2">&gt;&gt; On Thu, Aug 14, 2014 at 3:14 PM, Maxime Boissonneault 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;maxime.boissonneault_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Yes,
</span><br>
<span class="quotelev2">&gt;&gt;     Everything has been built with GCC 4.8.x, although x might have
</span><br>
<span class="quotelev2">&gt;&gt;     changed between the OpenMPI 1.8.1 build and the gromacs build.
</span><br>
<span class="quotelev2">&gt;&gt;     For OpenMPI 1.8.2rc4 however, it was the exact same compiler for
</span><br>
<span class="quotelev2">&gt;&gt;     everything.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Maxime
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Le 2014-08-14 14:57, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Hmmm...weird. Seems like maybe a mismatch between libraries. Did
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     you build OMPI with the same compiler as you did GROMACS/Charm++?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I'm stealing this suggestion from an old Gromacs forum with
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     essentially the same symptom:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &quot;Did you compile Open MPI and Gromacs with the same compiler
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (i.e. both gcc and the same version)? You write you tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     different OpenMPI versions and different GCC versions but it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     unclear whether those match. Can you provide more detail how you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     compiled (including all options you specified)? Have you tested
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     any other MPI program linked against those Open MPI versions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Please make sure (e.g. with ldd) that the MPI and pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     library you compiled against is also used for execution. If you
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     compiled and run on different hosts, check whether the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     still occurs when executing on the build host.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://redmine.gromacs.org/issues/1025">http://redmine.gromacs.org/issues/1025</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Thu, Aug 14, 2014 at 2:40 PM, Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I just tried Gromacs with two nodes. It crashes, but with a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         different error. I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] Failing at address: 0x8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /lib64/libpthread.so.0(+0xf710)[0x2ac5d070c710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac5ddfbcacf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac5ddf82a83]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac5ddeb42da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac5ddea0933]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac5d0930965]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac5d0930a0a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac5d0930a3b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaDriverGetVersion+0x4a)[0x2ac5d094602a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [ 9]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_print_version_info_gpu+0x55)[0x2ac5cf9a90b5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [10]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /software-gpu/apps/gromacs/4.6.5_gcc/lib/libgmxmpi.so.8(gmx_log_open+0x17e)[0x2ac5cf54b9be]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [11] mdrunmpi(cmain+0x1cdb)[0x43b4bb]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [12]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac5d1534d1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] [13] mdrunmpi[0x407be1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [gpu-k20-13:142156] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpiexec noticed that process rank 0 with PID 142156 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         gpu-k20-13 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         We do not have MPI_THREAD_MULTIPLE enabled in our build, so
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Charm++ cannot be using this level of threading. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         configure line for OpenMPI was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./configure --prefix=$PREFIX \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               --with-threads --with-verbs=yes --enable-shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --enable-static \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --with-io-romio-flags=&quot;--with-file-system=nfs+lustre&quot; \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                --without-loadleveler --without-slurm --with-tm \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                --with-cuda=$(dirname $(dirname $(which nvcc)))
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Le 2014-08-14 14:20, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         What about between nodes? Since this is coming from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         OpenIB BTL, would be good to check this.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Do you know what the MPI thread level is set to when used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         with the Charm++ runtime? Is it MPI_THREAD_MULTIPLE? The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         OpenIB BTL is not thread safe.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On Thu, Aug 14, 2014 at 2:17 PM, Maxime Boissonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             I ran gromacs successfully with OpenMPI 1.8.1 and Cuda
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             6.0.37 on a single node, with 8 ranks and multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             OpenMP threads.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Le 2014-08-14 14:15, Joshua Ladd a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Hi, Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Just curious, are you able to run a vanilla MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             program? Can you try one one of the example programs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             in the &quot;examples&quot; subdirectory. Looks like a threading
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             issue to me.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             _______________________________________________ users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             mailing list users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             &lt;mailto:users_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;             Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25023.php">http://www.open-mpi.org/community/lists/users/2014/08/25023.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             <a href="http://www.open-mpi.org/community/lists/users/2014/08/25024.php">http://www.open-mpi.org/community/lists/users/2014/08/25024.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         _______________________________________________ users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mailing list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25025.php">http://www.open-mpi.org/community/lists/users/2014/08/25025.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2014/08/25026.php">http://www.open-mpi.org/community/lists/users/2014/08/25026.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________ users mailing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     list users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25027.php">http://www.open-mpi.org/community/lists/users/2014/08/25027.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;     Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt;     Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt;     Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/08/25028.php">http://www.open-mpi.org/community/lists/users/2014/08/25028.php</a>
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
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2014/08/25029.php">http://www.open-mpi.org/community/lists/users/2014/08/25029.php</a>
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
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25036/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25037.php">Oscar Mojica: "Re: [OMPI users] Running a hybrid MPI+openMP program"</a>
<li><strong>Previous message:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
<li><strong>In reply to:</strong> <a href="25035.php">Maxime Boissonneault: "Re: [OMPI users] Segmentation fault in OpenMPI 1.8.1"</a>
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
