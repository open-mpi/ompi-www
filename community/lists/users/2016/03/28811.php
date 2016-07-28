<?
$subject_val = "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 13:28:48 2016" -->
<!-- isoreceived="20160323172848" -->
<!-- sent="Wed, 23 Mar 2016 10:28:37 -0700" -->
<!-- isosent="20160323172837" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sjeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?" -->
<!-- id="56F2D245.8000804_at_nvidia.com" -->
<!-- charset="windows-1252" -->
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
<strong>From:</strong> Sylvain Jeaugey (<em>sjeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-23 13:28:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28810.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Durga,
<br>
<p>Sorry for the late reply and thanks for reporting that issue. As Rayson 
<br>
mentioned, CUDA is intrinsically C++ and indeed uses the host C++ 
<br>
compiler. Hence linking MPI + CUDA code may need to use mpic++.
<br>
<p>It happens to work with mpicc on various platforms where the libstdc++ 
<br>
is linked anyway but in your case it wasn't. We fixed the Makefile on 
<br>
github to use mpic++ as linker.
<br>
<p>Sylvain
<br>
<p>On 03/20/2016 07:37 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; I'd tend to agree with Gilles. I have written CUDA programs in pure C 
</span><br>
<span class="quotelev1">&gt; (i.e. neither involving MPI nor C++) and a pure C based tool chain 
</span><br>
<span class="quotelev1">&gt; builds the code successfully. So I don't see why CUDA should be 
</span><br>
<span class="quotelev1">&gt; intrinsically C++.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the Makefile (that I had attached in my previous mail) the only 
</span><br>
<span class="quotelev1">&gt; CUDA library being linked against is this:
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
<span class="quotelev1">&gt; I believe there are NVIDIA employees in this list; hopefully one of 
</span><br>
<span class="quotelev1">&gt; them will clarify.
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
<span class="quotelev1">&gt; On Sun, Mar 20, 2016 at 10:23 PM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am a bit puzzled...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if only cuda uses the c++ std libraries, then it should depend on them
</span><br>
<span class="quotelev1">&gt;     (ldd libcudaxyz.so can be used to confirm that)
</span><br>
<span class="quotelev1">&gt;     and then linking with cuda lib should pull the c++ libs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     could there be a version issue ?
</span><br>
<span class="quotelev1">&gt;     e.g. the missing symbol is not provided by the version of the c++
</span><br>
<span class="quotelev1">&gt;     lib that is pulled.
</span><br>
<span class="quotelev1">&gt;     that might occur if you are using cuda built for distro X on distro Y
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     could you please double check this ?
</span><br>
<span class="quotelev1">&gt;     if everything should work, then i recommend you report this to nvidia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Monday, March 21, 2016, Damien Hocking &lt;damien_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:damien_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The Cuda libraries use the C++ std libraries.  That's the
</span><br>
<span class="quotelev1">&gt;         std::ios_base errors.. You need the C++ linker to bring those in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On March 20, 2016 9:15:47 AM &quot;dpchoudh .&quot; &lt;dpchoudh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I downloaded some code samples from here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="https://github.com/parallel-forall/code-samples/">https://github.com/parallel-forall/code-samples/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         and tried to build the subdirectory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         posts/cuda-aware-mpi-example/src
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         in my CentOS 7 machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I had to make several changes to the Makefile before it would
</span><br>
<span class="quotelev2">&gt;&gt;         build. The modified Makefile is attached (the make targets I
</span><br>
<span class="quotelev2">&gt;&gt;         am talking about are the 3rd and 4th from the bottom). Most
</span><br>
<span class="quotelev2">&gt;&gt;         of the modifications can be explained as possible platform
</span><br>
<span class="quotelev2">&gt;&gt;         specific variations (such as path differences betwen Ubuntu
</span><br>
<span class="quotelev2">&gt;&gt;         and CentOS), except the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         I had to use a C++ linker (mpic++) to link in the object
</span><br>
<span class="quotelev2">&gt;&gt;         files that were produced with C host compiler (mpicc) and
</span><br>
<span class="quotelev2">&gt;&gt;         CUDA compiler (nvcc). If I did not do this, (i.e. I stuck to
</span><br>
<span class="quotelev2">&gt;&gt;         mpicc for linking), I got the following link error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         mpicc -L/usr/local/cuda/lib64 -lcudart -lm -o
</span><br>
<span class="quotelev2">&gt;&gt;         ../bin/jacobi_cuda_normal_mpi jacobi.o input.o host.o
</span><br>
<span class="quotelev2">&gt;&gt;         device.o  cuda_normal_mpi.o
</span><br>
<span class="quotelev2">&gt;&gt;         device.o: In function
</span><br>
<span class="quotelev2">&gt;&gt;         `__static_initialization_and_destruction_0(int, int)':
</span><br>
<span class="quotelev2">&gt;&gt;         tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd1e):
</span><br>
<span class="quotelev2">&gt;&gt;         undefined reference to `std::ios_base::Init::Init()'
</span><br>
<span class="quotelev2">&gt;&gt;         tmpxft_00004651_00000000-4_Device.cudafe1.cpp:(.text+0xd2d):
</span><br>
<span class="quotelev2">&gt;&gt;         undefined reference to `std::ios_base::Init::~Init()'
</span><br>
<span class="quotelev2">&gt;&gt;         collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Can someone please explain why would I need a C++ linker for
</span><br>
<span class="quotelev2">&gt;&gt;         object files that were generated using C compiler? Note that
</span><br>
<span class="quotelev2">&gt;&gt;         if I use mpic++ both for compiling and linking, there are no
</span><br>
<span class="quotelev2">&gt;&gt;         errors either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt;         Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/03/28760.php">http://www.open-mpi.org/community/lists/users/2016/03/28760.php</a>
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28762.php">http://www.open-mpi.org/community/lists/users/2016/03/28762.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28764.php">http://www.open-mpi.org/community/lists/users/2016/03/28764.php</a>
</span><br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28812.php">Elio Physics: "[OMPI users] Problems in compiling a code  with dynamic linking"</a>
<li><strong>Previous message:</strong> <a href="28810.php">Ronald Cohen: "Re: [OMPI users] terrible infiniband performance for"</a>
<li><strong>In reply to:</strong> <a href="28764.php">dpchoudh .: "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
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
