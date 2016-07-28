<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 18:55:03 2013" -->
<!-- isoreceived="20130708225503" -->
<!-- sent="Mon, 8 Jul 2013 15:54:32 -0700 (PDT)" -->
<!-- isosent="20130708225432" -->
<!-- name="Tim Carlson" -->
<!-- email="tim.carlson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="alpine.LRH.2.00.1307081533180.2578_at_scorpion.emsl.pnl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB73281F9E2_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>From:</strong> Tim Carlson (<em>tim.carlson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-08 18:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22294.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22294.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 8 Jul 2013, Elken, Tom wrote:
<br>
<p>My mistake on the OFED bits. The host I was installing on did not have all 
<br>
of the MPSS software installed (my cluster admin node and not one of the 
<br>
compute nodes). Adding the intel-mic-ofed-card RPM fixed the problem with 
<br>
compiling the btl:openib bits with both the GNU and Intel compilers using 
<br>
the cross-compiler route (-mmic on the Intel side)
<br>
<p>Still working on getting the resulting mpicc wrapper working on the MIC 
<br>
side. When I get a working example I'll post the results.
<br>
<p>Thanks!
<br>
<p>Tim
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, in general and not on MIC I usually build the MPI stacks using the
</span><br>
<span class="quotelev1">&gt; Intel compiler set. Have you ran into s/w that requires GCC instead of Intel
</span><br>
<span class="quotelev1">&gt; compilers (beside Nvidia Cuda)? Did you try to use Intel compiler to produce
</span><br>
<span class="quotelev1">&gt; MIC native code (the OpenMPI stack for that matter)?&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Tom]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good idea Michael,&#160; With the Intel Compiler, I would use the -mmic flag to
</span><br>
<span class="quotelev1">&gt; build MIC code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim wrote: &#147;My first pass at doing a cross-compile with the GNU compilers
</span><br>
<span class="quotelev1">&gt; failed to produce something with OFED support (not surprising)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/linux-k1om-4.7/bin:$PATH
</span><br>
<span class="quotelev1">&gt; ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:openib can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regarding a Gnu cross compiler, this worked for one of our engineers
</span><br>
<span class="quotelev1">&gt; building for True Scale HCAs and PSM/infinipath.&#160; But it may give useful
</span><br>
<span class="quotelev1">&gt; tips for building for btl:openib as well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. How to configure/compile OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; a). untar the openmpi tarball.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; b). edit configure in top directory, add '-linfinipath' after
</span><br>
<span class="quotelev1">&gt; '-lpsm_infinipath &quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; &#160;&#160;&#160; but not necessary for messages, only for command lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; c). run the following script,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-mpi-f77=no --enable-mpi-f90=no \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --with-psm=/&#133;/psm-7.6 \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --prefix=/&#133;/openmpi \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CC=x86_64-k1om-linux-gcc&#160; CXX=x86_64-k1om-linux-g++ \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AR=x86_64-k1om-linux-ar RANLIB=x86_64-k1om-linux-ranlib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160; d). run 'make' and 'make install'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OK, I see that they did not configure for mpi-f77 &amp; mpif90, but perhaps this
</span><br>
<span class="quotelev1">&gt; is still helpful, if the AR and RANLIB flags are important.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Tom
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 4:30 PM, Tim Carlson &lt;tim.carlson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 8 Jul 2013, Elken, Tom wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It isn't quite so easy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Out of the box, there is no gcc on the Phi card. You can use the cross
</span><br>
<span class="quotelev1">&gt; compiler on the host, but you don't get gcc on the Phi by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See this post <a href="http://software.intel.com/en-us/forums/topic/382057">http://software.intel.com/en-us/forums/topic/382057</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I really think you would need to build and install gcc on the Phi first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My first pass at doing a cross-compile with the GNU compilers failed to
</span><br>
<span class="quotelev1">&gt; produce something with OFED support (not surprising)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/usr/linux-k1om-4.7/bin:$PATH
</span><br>
<span class="quotelev1">&gt; ./configure --build=x86_64-unknown-linux-gnu --host=x86_64-k1om-linux \
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking if MCA component btl:openib can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Thanks Tom, that sounds good. I will give it a try as soon as
</span><br>
<span class="quotelev1">&gt;       our Phi host
</span><br>
<span class="quotelev1">&gt;       here host gets installed.&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       I assume that all the prerequisite libs and bins on the Phi side
</span><br>
<span class="quotelev1">&gt;       are
</span><br>
<span class="quotelev1">&gt;       available when we download the Phi s/w stack from Intel's site,
</span><br>
<span class="quotelev1">&gt;       right ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       [Tom]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Right.&#160; When you install Intel&#146;s MPSS (Manycore Platform
</span><br>
<span class="quotelev1">&gt;       Software Stack),
</span><br>
<span class="quotelev1">&gt;       including following the section on &#147;OFED Support&#148; in the readme
</span><br>
<span class="quotelev1">&gt;       file, you
</span><br>
<span class="quotelev1">&gt;       should have all the prerequisite libs and bins.&#160; Note that I
</span><br>
<span class="quotelev1">&gt;       have not built
</span><br>
<span class="quotelev1">&gt;       Open MPI for Xeon Phi for your interconnect, but it seems to me
</span><br>
<span class="quotelev1">&gt;       that it
</span><br>
<span class="quotelev1">&gt;       should work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       -Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Cheers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Mon, Jul 8, 2013 at 12:10 PM, Elken, Tom
</span><br>
<span class="quotelev1">&gt;       &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Do you guys have any plan to support Intel Phi in the future?
</span><br>
<span class="quotelev1">&gt;       That is,
</span><br>
<span class="quotelev1">&gt;       running MPI code on the Phi cards or across the multicore and
</span><br>
<span class="quotelev1">&gt;       Phi, as Intel
</span><br>
<span class="quotelev1">&gt;       MPI does?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       [Tom]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Hi Michael,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Because a Xeon Phi card acts a lot like a Linux host with an x86
</span><br>
<span class="quotelev1">&gt;       architecture, you can build your own Open MPI libraries to serve
</span><br>
<span class="quotelev1">&gt;       this
</span><br>
<span class="quotelev1">&gt;       purpose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Our team has used existing (an older 1.4.3 version of) Open MPI
</span><br>
<span class="quotelev1">&gt;       source to
</span><br>
<span class="quotelev1">&gt;       build an Open MPI for running MPI code on Intel Xeon Phi cards
</span><br>
<span class="quotelev1">&gt;       over Intel&#146;s
</span><br>
<span class="quotelev1">&gt;       (formerly QLogic&#146;s) True Scale InfiniBand fabric, and it works
</span><br>
<span class="quotelev1">&gt;       quite well.&#160;
</span><br>
<span class="quotelev1">&gt;       We have not released a pre-built Open MPI as part of any Intel
</span><br>
<span class="quotelev1">&gt;       software
</span><br>
<span class="quotelev1">&gt;       release.&#160;&#160; But I think if you have a compiler for Xeon Phi
</span><br>
<span class="quotelev1">&gt;       (Intel Compiler
</span><br>
<span class="quotelev1">&gt;       or GCC) and an interconnect for it, you should be able to build
</span><br>
<span class="quotelev1">&gt;       an Open MPI
</span><br>
<span class="quotelev1">&gt;       that works on Xeon Phi.&#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Cheers,
</span><br>
<span class="quotelev1">&gt;       Tom Elken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       thanks...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;       wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Rolf will have to answer the question on level of support. The
</span><br>
<span class="quotelev1">&gt;       CUDA code is
</span><br>
<span class="quotelev1">&gt;       not in the 1.6 series as it was developed after that series went
</span><br>
<span class="quotelev1">&gt;       &quot;stable&quot;.
</span><br>
<span class="quotelev1">&gt;       It is in the 1.7 series, although the level of support will
</span><br>
<span class="quotelev1">&gt;       likely be
</span><br>
<span class="quotelev1">&gt;       incrementally increasing as that &quot;feature&quot; series continues to
</span><br>
<span class="quotelev1">&gt;       evolve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       On Jul 6, 2013, at 12:06 PM, Michael Thomadakis
</span><br>
<span class="quotelev1">&gt;       &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;       wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;       &gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt; I am wondering what level of support is there for CUDA and
</span><br>
<span class="quotelev1">&gt;       GPUdirect on
</span><br>
<span class="quotelev1">&gt;       OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ.
</span><br>
<span class="quotelev1">&gt;       However, it
</span><br>
<span class="quotelev1">&gt;       seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt; Can you identify GPU memory and send messages from it directly
</span><br>
<span class="quotelev1">&gt;       without
</span><br>
<span class="quotelev1">&gt;       copying to host memory first?
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt; Or in general, what level of CUDA support is there on 1.6.5
</span><br>
<span class="quotelev1">&gt;       and 1.7.2 ? Do
</span><br>
<span class="quotelev1">&gt;       you support SDK 5.0 and above?
</span><br>
<span class="quotelev2">&gt;       &gt;
</span><br>
<span class="quotelev2">&gt;       &gt; Cheers ...
</span><br>
<span class="quotelev2">&gt;       &gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;       &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;       &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;       &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;       &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       users mailing list
</span><br>
<span class="quotelev1">&gt;       users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       _______________________________________________
</span><br>
<span class="quotelev1">&gt;       users mailing list
</span><br>
<span class="quotelev1">&gt;       users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;       <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       &#160;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22296.php">Tomek Wlodarski: "[OMPI users] undefined reference to `MPI::Comm::Comm()"</a>
<li><strong>Previous message:</strong> <a href="22294.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>In reply to:</strong> <a href="22294.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22304.php">Tim Carlson: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
