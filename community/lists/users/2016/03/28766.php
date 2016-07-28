<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 00:23:56 2016" -->
<!-- isoreceived="20160321042356" -->
<!-- sent="Mon, 21 Mar 2016 13:23:54 +0900" -->
<!-- isosent="20160321042354" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="CAAkFZ5vqNdcQ36mVLen+VhdDmeP584rqHUHTrq=TyNWGNm-hzA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADKQjjcycbxpxnY8WXNWNRhiDoi=h5MePogrAnf+9y8F_wKR4w_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-21 00:23:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28767.php">Rayson Ho: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28765.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Eric,
<br>
<p>that makes sense now.
<br>
<p>Durga,
<br>
<p>since the MPI c++ bindings are not required, you might want to
<br>
mpicc ... -lstd++
<br>
instead of
<br>
mpicxx ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Monday, March 21, 2016, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; According to the error message, &quot;device.o&quot; is the file that causes the
</span><br>
<span class="quotelev1">&gt; error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to the source code to which you point, this file is
</span><br>
<span class="quotelev1">&gt; generated from a Cuda file, not from a C file. Cuda is close to C++,
</span><br>
<span class="quotelev1">&gt; and apparently nvcc makes use of C++ features. Thus you need the C++
</span><br>
<span class="quotelev1">&gt; run-time libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;*.o&quot; files do not automatically pull in libraries, only shared
</span><br>
<span class="quotelev1">&gt; libraries (&quot;*.so&quot;) can do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 20, 2016 at 10:23 PM, Gilles Gouaillardet
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I am a bit puzzled...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if only cuda uses the c++ std libraries, then it should depend on them
</span><br>
<span class="quotelev2">&gt; &gt; (ldd libcudaxyz.so can be used to confirm that)
</span><br>
<span class="quotelev2">&gt; &gt; and then linking with cuda lib should pull the c++ libs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could there be a version issue ?
</span><br>
<span class="quotelev2">&gt; &gt; e.g. the missing symbol is not provided by the version of the c++ lib
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev2">&gt; &gt; is pulled.
</span><br>
<span class="quotelev2">&gt; &gt; that might occur if you are using cuda built for distro X on distro Y
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; could you please double check this ?
</span><br>
<span class="quotelev2">&gt; &gt; if everything should work, then i recommend you report this to nvidia
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Monday, March 21, 2016, Damien Hocking &lt;damien_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Durga,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The Cuda libraries use the C++ std libraries.  That's the std::ios_base
</span><br>
<span class="quotelev3">&gt; &gt;&gt; errors.. You need the C++ linker to bring those in.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Damien
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On March 20, 2016 9:15:47 AM &quot;dpchoudh .&quot; &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I downloaded some code samples from here:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; and tried to build the subdirectory
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; posts/cuda-aware-mpi-example/src
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; in my CentOS 7 machine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I had to make several changes to the Makefile before it would build.
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; modified Makefile is attached (the make targets I am talking about are
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3rd and 4th from the bottom). Most of the modifications can be
</span><br>
<span class="quotelev1">&gt; explained as
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; possible platform specific variations (such as path differences betwen
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ubuntu and CentOS), except the following:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I had to use a C++ linker (mpic++) to link in the object files that
</span><br>
<span class="quotelev1">&gt; were
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; produced with C host compiler (mpicc) and CUDA compiler (nvcc). If I
</span><br>
<span class="quotelev1">&gt; did not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; do this, (i.e. I stuck to mpicc for linking), I got the following link
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; error:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ../bin/jacobi_cuda_normal_mpi jacobi.o input.o host.o device.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; cuda_normal_mpi.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; device.o: In function `__static_initialization_and_destruction_0(int,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; int)':
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e): undefined
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; reference to `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d): undefined
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Can someone please explain why would I need a C++ linker for object
</span><br>
<span class="quotelev1">&gt; files
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; that were generated using C compiler? Note that if I use mpic++ both
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; compiling and linking, there are no errors either.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Durga
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28760.php">http://www.open-mpi.org/community/lists/users/2016/03/28760.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28762.php">http://www.open-mpi.org/community/lists/users/2016/03/28762.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;javascript:;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28763.php">http://www.open-mpi.org/community/lists/users/2016/03/28763.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28766/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28767.php">Rayson Ho: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28765.php">Husen R: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28763.php">Erik Schnetter: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Reply:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
