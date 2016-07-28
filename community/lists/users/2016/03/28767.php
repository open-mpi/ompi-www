<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 00:25:36 2016" -->
<!-- isoreceived="20160321042536" -->
<!-- sent="Mon, 21 Mar 2016 00:25:35 -0400" -->
<!-- isosent="20160321042535" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="CAHwLALMb7LpfUJd8Ajq8c=wTJ-fM82UM4+y3XSTQOacFzGRA=g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDg8vzmqUACb8nFOVbjOHwmMW1V1OUqniR7cj2+tHWis9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 00:25:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28768.php">dpchoudh .: "[OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28766.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28811.php">Sylvain Jeaugey: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Mar 20, 2016 at 10:37 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'd tend to agree with Gilles. I have written CUDA programs in pure C
</span><br>
<span class="quotelev1">&gt; (i.e. neither involving MPI nor C++) and a pure C based tool chain builds
</span><br>
<span class="quotelev1">&gt; the code successfully. So I don't see why CUDA should be intrinsically C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>nvcc calls the C++ compiler for the non-CUDA compilation steps:
<br>
<p><a href="http://docs.nvidia.com/cuda/cuda-compiler-driver-nvcc/">http://docs.nvidia.com/cuda/cuda-compiler-driver-nvcc/</a>
<br>
<p>So even if you don't have any C++ code, the host code is still compiled by
<br>
g++, which *usually* is free to insert calls to the C++ runtime.
<br>
<p>* A few years ago I worked on a C++ project but we were not allowed to link
<br>
against the C++ library... And there is actually a way to tell g++ not to
<br>
generate calls to the C++ runtime. However, it is not something as easy as
<br>
flipping a switch so you will just have to linked against the std++ lib. :-)
<br>
<p>Rayson
<br>
<p>==================================================
<br>
Open Grid Scheduler - The Official Open Source Grid Engine
<br>
<a href="http://gridscheduler.sourceforge.net/">http://gridscheduler.sourceforge.net/</a>
<br>
<a href="http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html">http://gridscheduler.sourceforge.net/GridEngine/GridEngineCloud.html</a>
<br>
<p><p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the Makefile (that I had attached in my previous mail) the only CUDA
</span><br>
<span class="quotelev1">&gt; library being linked against is this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/lib64/libcudart.so
</span><br>
<span class="quotelev1">&gt; and ldd on that shows this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI lib64]$ ldd libcudart.so
</span><br>
<span class="quotelev1">&gt;     linux-vdso.so.1 =&gt;  (0x00007ffe1e7f1000)
</span><br>
<span class="quotelev1">&gt;     libc.so.6 =&gt; /lib64/libc.so.6 (0x00007ff7e4493000)
</span><br>
<span class="quotelev1">&gt;     libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007ff7e428f000)
</span><br>
<span class="quotelev1">&gt;     libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007ff7e4072000)
</span><br>
<span class="quotelev1">&gt;     librt.so.1 =&gt; /lib64/librt.so.1 (0x00007ff7e3e6a000)
</span><br>
<span class="quotelev1">&gt;     /lib64/ld-linux-x86-64.so.2 (0x00007ff7e4af3000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see any C++ dependency here either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And finally, I don't think there is any version issue. This is a clean
</span><br>
<span class="quotelev1">&gt; CUDA 7.5 install directly from NVIDIA CUDA repo (for Redhat) and all
</span><br>
<span class="quotelev1">&gt; provided examples run fine with this installation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe there are NVIDIA employees in this list; hopefully one of them
</span><br>
<span class="quotelev1">&gt; will clarify.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 20, 2016 at 10:23 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am a bit puzzled...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if only cuda uses the c++ std libraries, then it should depend on them
</span><br>
<span class="quotelev2">&gt;&gt; (ldd libcudaxyz.so can be used to confirm that)
</span><br>
<span class="quotelev2">&gt;&gt; and then linking with cuda lib should pull the c++ libs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could there be a version issue ?
</span><br>
<span class="quotelev2">&gt;&gt; e.g. the missing symbol is not provided by the version of the c++
</span><br>
<span class="quotelev2">&gt;&gt; lib that is pulled.
</span><br>
<span class="quotelev2">&gt;&gt; that might occur if you are using cuda built for distro X on distro Y
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could you please double check this ?
</span><br>
<span class="quotelev2">&gt;&gt; if everything should work, then i recommend you report this to nvidia
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, March 21, 2016, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The Cuda libraries use the C++ std libraries.  That's the std::ios_base
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors.. You need the C++ linker to bring those in.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On March 20, 2016 9:15:47 AM &quot;dpchoudh .&quot; &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I downloaded some code samples from here:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and tried to build the subdirectory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; posts/cuda-aware-mpi-example/src
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in my CentOS 7 machine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had to make several changes to the Makefile before it would build.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The modified Makefile is attached (the make targets I am talking about are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the 3rd and 4th from the bottom). Most of the modifications can be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; explained as possible platform specific variations (such as path
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; differences betwen Ubuntu and CentOS), except the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had to use a C++ linker (mpic++) to link in the object files that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; were produced with C host compiler (mpicc) and CUDA compiler (nvcc). If I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; did not do this, (i.e. I stuck to mpicc for linking), I got the following
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; link error:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ../bin/jacobi_cuda_normal_mpi jacobi.o input.o host.o device.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cuda_normal_mpi.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; device.o: In function `__static_initialization_and_destruction_0(int,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int)':
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e): undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reference to `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d): undefined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone please explain why would I need a C++ linker for object
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; files that were generated using C compiler? Note that if I use mpic++ both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for compiling and linking, there are no errors either.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Life is complex. It has real and imaginary parts.
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
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28760.php">http://www.open-mpi.org/community/lists/users/2016/03/28760.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28762.php">http://www.open-mpi.org/community/lists/users/2016/03/28762.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28764.php">http://www.open-mpi.org/community/lists/users/2016/03/28764.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28767/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28768.php">dpchoudh .: "[OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>Previous message:</strong> <a href="28766.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28811.php">Sylvain Jeaugey: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
