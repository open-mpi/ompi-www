<?
$subject_val = "[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 20 11:15:36 2016" -->
<!-- isoreceived="20160320151536" -->
<!-- sent="Sun, 20 Mar 2016 11:15:35 -0400" -->
<!-- isosent="20160320151535" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="CAHXxYDhwX-0PZD_jKKmkJ0pkgkSAFShq38P3B4Jn3b0bYNDpRQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-20 11:15:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I downloaded some code samples from here:
<br>
<p><a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
<br>
<p>and tried to build the subdirectory
<br>
<p>posts/cuda-aware-mpi-example/src
<br>
<p>in my CentOS 7 machine.
<br>
<p>I had to make several changes to the Makefile before it would build. The
<br>
modified Makefile is attached (the make targets I am talking about are the
<br>
3rd and 4th from the bottom). Most of the modifications can be explained as
<br>
possible platform specific variations (such as path differences betwen
<br>
Ubuntu and CentOS), except the following:
<br>
<p>I had to use a C++ linker (mpic++) to link in the object files that were
<br>
produced with C host compiler (mpicc) and CUDA compiler (nvcc). If I did
<br>
not do this, (i.e. I stuck to mpicc for linking), I got the following link
<br>
error:
<br>
<p>mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o ../bin/jacobi_cuda_normal_mpi
<br>
jacobi.o input.o host.o device.o  cuda_normal_mpi.o
<br>
device.o: In function `__static_initialization_and_destruction_0(int, int)':
<br>
tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e): undefined
<br>
reference to `std::ios_base::Init::Init()'
<br>
tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d): undefined
<br>
reference to `std::ios_base::Init::~Init()'
<br>
collect2: error: ld returned 1 exit status
<br>
<p>Can someone please explain why would I need a C++ linker for object files
<br>
that were generated using C compiler? Note that if I use mpic++ both for
<br>
compiling and linking, there are no errors either.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>Life is complex. It has real and imaginary parts.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28760/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28760/Makefile">Makefile</a>
</ul>
<!-- attachment="Makefile" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28759.php">Xavier Besseron: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28761.php">Damien Hocking: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
