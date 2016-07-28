<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 20 12:33:06 2016" -->
<!-- isoreceived="20160320163306" -->
<!-- sent="Sun, 20 Mar 2016 10:33:02 -0600" -->
<!-- isosent="20160320163302" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="15394df1810.2772.3468b094e2fc4e8c14a5d446167e04d1_at_0x544745.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDhwX-0PZD_jKKmkJ0pkgkSAFShq38P3B4Jn3b0bYNDpRQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-20 12:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28760.php">dpchoudh .: "[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28760.php">dpchoudh .: "[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>The Cuda libraries use the C++ std libraries.  That's the std::ios_base 
<br>
errors.. You need the C++ linker to bring those in.
<br>
<p>Damien
<br>
<p><p>On March 20, 2016 9:15:47 AM &quot;dpchoudh .&quot; &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I downloaded some code samples from here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and tried to build the subdirectory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; posts/cuda-aware-mpi-example/src
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in my CentOS 7 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to make several changes to the Makefile before it would build. The
</span><br>
<span class="quotelev1">&gt; modified Makefile is attached (the make targets I am talking about are the
</span><br>
<span class="quotelev1">&gt; 3rd and 4th from the bottom). Most of the modifications can be explained as
</span><br>
<span class="quotelev1">&gt; possible platform specific variations (such as path differences betwen
</span><br>
<span class="quotelev1">&gt; Ubuntu and CentOS), except the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had to use a C++ linker (mpic++) to link in the object files that were
</span><br>
<span class="quotelev1">&gt; produced with C host compiler (mpicc) and CUDA compiler (nvcc). If I did
</span><br>
<span class="quotelev1">&gt; not do this, (i.e. I stuck to mpicc for linking), I got the following link
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o ../bin/jacobi_cuda_normal_mpi
</span><br>
<span class="quotelev1">&gt; jacobi.o input.o host.o device.o  cuda_normal_mpi.o
</span><br>
<span class="quotelev1">&gt; device.o: In function `__static_initialization_and_destruction_0(int, int)':
</span><br>
<span class="quotelev1">&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e): undefined
</span><br>
<span class="quotelev1">&gt; reference to `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev1">&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d): undefined
</span><br>
<span class="quotelev1">&gt; reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev1">&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can someone please explain why would I need a C++ linker for object files
</span><br>
<span class="quotelev1">&gt; that were generated using C compiler? Note that if I use mpic++ both for
</span><br>
<span class="quotelev1">&gt; compiling and linking, there are no errors either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28760.php">http://www.open-mpi.org/community/lists/users/2016/03/28760.php</a>
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28761/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28760.php">dpchoudh .: "[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>In reply to:</strong> <a href="28760.php">dpchoudh .: "[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28762.php">Gilles Gouaillardet: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
