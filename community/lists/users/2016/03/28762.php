<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 20 22:23:32 2016" -->
<!-- isoreceived="20160321022332" -->
<!-- sent="Mon, 21 Mar 2016 11:23:30 +0900" -->
<!-- isosent="20160321022330" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="CAAkFZ5v_VfM0t59ZQrZcL2pGzsro8N_9Xd6KnAiQ4sB1nCABYQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="15394df1810.2772.3468b094e2fc4e8c14a5d446167e04d1_at_0x544745.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-20 22:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a bit puzzled...
<br>
<p>if only cuda uses the c++ std libraries, then it should depend on them
<br>
(ldd libcudaxyz.so can be used to confirm that)
<br>
and then linking with cuda lib should pull the c++ libs
<br>
<p>could there be a version issue ?
<br>
e.g. the missing symbol is not provided by the version of the c++ lib that
<br>
is pulled.
<br>
that might occur if you are using cuda built for distro X on distro Y
<br>
<p>could you please double check this ?
<br>
if everything should work, then i recommend you report this to nvidia
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, March 21, 2016, Damien Hocking &lt;damien_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Cuda libraries use the C++ std libraries.  That's the std::ios_base
</span><br>
<span class="quotelev1">&gt; errors.. You need the C++ linker to bring those in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On March 20, 2016 9:15:47 AM &quot;dpchoudh .&quot; &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','dpchoudh_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I downloaded some code samples from here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and tried to build the subdirectory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; posts/cuda-aware-mpi-example/src
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in my CentOS 7 machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had to make several changes to the Makefile before it would build. The
</span><br>
<span class="quotelev2">&gt;&gt; modified Makefile is attached (the make targets I am talking about are the
</span><br>
<span class="quotelev2">&gt;&gt; 3rd and 4th from the bottom). Most of the modifications can be explained as
</span><br>
<span class="quotelev2">&gt;&gt; possible platform specific variations (such as path differences betwen
</span><br>
<span class="quotelev2">&gt;&gt; Ubuntu and CentOS), except the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had to use a C++ linker (mpic++) to link in the object files that were
</span><br>
<span class="quotelev2">&gt;&gt; produced with C host compiler (mpicc) and CUDA compiler (nvcc). If I did
</span><br>
<span class="quotelev2">&gt;&gt; not do this, (i.e. I stuck to mpicc for linking), I got the following link
</span><br>
<span class="quotelev2">&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o
</span><br>
<span class="quotelev2">&gt;&gt; ../bin/jacobi_cuda_normal_mpi jacobi.o input.o host.o device.o
</span><br>
<span class="quotelev2">&gt;&gt; cuda_normal_mpi.o
</span><br>
<span class="quotelev2">&gt;&gt; device.o: In function `__static_initialization_and_destruction_0(int,
</span><br>
<span class="quotelev2">&gt;&gt; int)':
</span><br>
<span class="quotelev2">&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev2">&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d): undefined
</span><br>
<span class="quotelev2">&gt;&gt; reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev2">&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can someone please explain why would I need a C++ linker for object files
</span><br>
<span class="quotelev2">&gt;&gt; that were generated using C compiler? Note that if I use mpic++ both for
</span><br>
<span class="quotelev2">&gt;&gt; compiling and linking, there are no errors either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28760.php">http://www.open-mpi.org/community/lists/users/2016/03/28760.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28762/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
