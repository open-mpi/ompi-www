<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 17:51:08 2013" -->
<!-- isoreceived="20130708215108" -->
<!-- sent="Mon, 8 Jul 2013 21:51:01 +0000" -->
<!-- isosent="20130708215101" -->
<!-- name="Elken, Tom" -->
<!-- email="tom.elken_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="1182FB2B5679CE4B8BAD97725F014BB73281F9E2_at_FMSMSX104.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+OO3AUFH3nYGZ6JjmAD0T_Cb=nT6FCN4fOhUsAe1Ri93h_+fg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2<br>
<strong>From:</strong> Elken, Tom (<em>tom.elken_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 17:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p><p>Well, in general and not on MIC I usually build the MPI stacks using the Intel compiler set. Have you ran into s/w that requires GCC instead of Intel compilers (beside Nvidia Cuda)? Did you try to use Intel compiler to produce MIC native code (the OpenMPI stack for that matter)?
<br>
[Tom]
<br>
Good idea Michael,  With the Intel Compiler, I would use the -mmic flag to build MIC code.
<br>
<p>Tim wrote: &quot;My first pass at doing a cross-compile with the GNU compilers failed to produce something with OFED support (not surprising)
<br>
<p>export PATH=/usr/linux-k1om-4.7/bin:$PATH
<br>
./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
<br>
--disable-mpi-f77
<br>
<p>checking if MCA component btl:openib can compile... no
<br>
<p>Regarding a Gnu cross compiler, this worked for one of our engineers building for True Scale HCAs and PSM/infinipath.  But it may give useful tips for building for btl:openib as well:
<br>
<p>3. How to configure/compile OpenMPI:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a). untar the openmpi tarball.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b). edit configure in top directory, add '-linfinipath' after '-lpsm_infinipath &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;but not necessary for messages, only for command lines.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c). run the following script,
<br>
#!/bin/sh
<br>
<p>./configure \
<br>
--host=x86_64-k1om-linux \
<br>
--enable-mpi-f77=no --enable-mpi-f90=no \
<br>
--with-psm=/.../psm-7.6 \
<br>
--prefix=/.../openmpi \
<br>
CC=x86_64-k1om-linux-gcc  CXX=x86_64-k1om-linux-g++ \
<br>
AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d). run 'make' and 'make install'
<br>
<p>OK, I see that they did not configure for mpi-f77 &amp; mpif90, but perhaps this is still helpful, if the AR and RANLIB flags are important.
<br>
-Tom
<br>
<p><p><p>regards
<br>
Michael
<br>
<p>On Mon, Jul 8, 2013 at 4:30 PM, Tim Carlson &lt;tim.carlson_at_[hidden]&lt;mailto:tim.carlson_at_[hidden]&gt;&gt; wrote:
<br>
On Mon, 8 Jul 2013, Elken, Tom wrote:
<br>
<p>It isn't quite so easy.
<br>
<p>Out of the box, there is no gcc on the Phi card. You can use the cross compiler on the host, but you don't get gcc on the Phi by default.
<br>
<p>See this post <a href="http://software.intel.com/en-us/forums/topic/382057">http://software.intel.com/en-us/forums/topic/382057</a>
<br>
<p>I really think you would need to build and install gcc on the Phi first.
<br>
<p>My first pass at doing a cross-compile with the GNU compilers failed to produce something with OFED support (not surprising)
<br>
<p>export PATH=/usr/linux-k1om-4.7/bin:$PATH
<br>
./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
<br>
--disable-mpi-f77
<br>
<p>checking if MCA component btl:openib can compile... no
<br>
<p><p>Tim
<br>
<p><p><p><p>Thanks Tom, that sounds good. I will give it a try as soon as our Phi host
<br>
here host gets installed.
<br>
<p><p><p>I assume that all the prerequisite libs and bins on the Phi side are
<br>
available when we download the Phi s/w stack from Intel's site, right ?
<br>
<p>[Tom]
<br>
<p>Right.  When you install Intel's MPSS (Manycore Platform Software Stack),
<br>
including following the section on &quot;OFED Support&quot; in the readme file, you
<br>
should have all the prerequisite libs and bins.  Note that I have not built
<br>
Open MPI for Xeon Phi for your interconnect, but it seems to me that it
<br>
should work.
<br>
<p><p><p>-Tom
<br>
<p><p><p>Cheers
<br>
<p>Michael
<br>
<p><p><p><p><p><p><p>On Mon, Jul 8, 2013 at 12:10 PM, Elken, Tom &lt;tom.elken_at_[hidden]&lt;mailto:tom.elken_at_[hidden]&gt;&gt; wrote:
<br>
<p>Do you guys have any plan to support Intel Phi in the future? That is,
<br>
running MPI code on the Phi cards or across the multicore and Phi, as Intel
<br>
MPI does?
<br>
<p>[Tom]
<br>
<p>Hi Michael,
<br>
<p>Because a Xeon Phi card acts a lot like a Linux host with an x86
<br>
architecture, you can build your own Open MPI libraries to serve this
<br>
purpose.
<br>
<p>Our team has used existing (an older 1.4.3 version of) Open MPI source to
<br>
build an Open MPI for running MPI code on Intel Xeon Phi cards over Intel's
<br>
(formerly QLogic's) True Scale InfiniBand fabric, and it works quite well.
<br>
We have not released a pre-built Open MPI as part of any Intel software
<br>
release.   But I think if you have a compiler for Xeon Phi (Intel Compiler
<br>
or GCC) and an interconnect for it, you should be able to build an Open MPI
<br>
that works on Xeon Phi.
<br>
<p>Cheers,
<br>
Tom Elken
<br>
<p>thanks...
<br>
<p>Michael
<br>
<p><p><p>On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
<p>Rolf will have to answer the question on level of support. The CUDA code is
<br>
not in the 1.6 series as it was developed after that series went &quot;stable&quot;.
<br>
It is in the 1.7 series, although the level of support will likely be
<br>
incrementally increasing as that &quot;feature&quot; series continues to evolve.
<br>
<p><p><p>On Jul 6, 2013, at 12:06 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&lt;mailto:drmichaelt7777_at_[hidden]&gt;&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am wondering what level of support is there for CUDA and GPUdirect on
</span><br>
OpenMPI 1.6.5 and 1.7.2.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ. However, it
</span><br>
seems that with configure v1.6.5 it was ignored.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you identify GPU memory and send messages from it directly without
</span><br>
copying to host memory first?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or in general, what level of CUDA support is there on 1.6.5 and 1.7.2 ? Do
</span><br>
you support SDK 5.0 and above?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers ...
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22295.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
