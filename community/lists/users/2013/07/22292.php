<?
$subject_val = "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  8 17:30:59 2013" -->
<!-- isoreceived="20130708213059" -->
<!-- sent="Mon, 8 Jul 2013 14:30:44 -0700 (PDT)" -->
<!-- isosent="20130708213044" -->
<!-- name="Tim Carlson" -->
<!-- email="tim.carlson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2" -->
<!-- id="alpine.LRH.2.00.1307081329320.2578_at_scorpion.emsl.pnl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="1182FB2B5679CE4B8BAD97725F014BB73281F8A9_at_FMSMSX104.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2013-07-08 17:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 8 Jul 2013, Elken, Tom wrote:
<br>
<p>It isn't quite so easy.
<br>
<p>Out of the box, there is no gcc on the Phi card. You can use the cross 
<br>
compiler on the host, but you don't get gcc on the Phi by default.
<br>
<p>See this post <a href="http://software.intel.com/en-us/forums/topic/382057">http://software.intel.com/en-us/forums/topic/382057</a>
<br>
<p>I really think you would need to build and install gcc on the Phi first.
<br>
<p>My first pass at doing a cross-compile with the GNU compilers failed to 
<br>
produce something with OFED support (not surprising)
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
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Tom, that sounds good. I will give it a try as soon as our Phi host
</span><br>
<span class="quotelev1">&gt; here host gets installed.&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that all the prerequisite libs and bins on the Phi side are
</span><br>
<span class="quotelev1">&gt; available when we download the Phi s/w stack from Intel's site, right ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Tom]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right.&#160; When you install Intel&#146;s MPSS (Manycore Platform Software Stack),
</span><br>
<span class="quotelev1">&gt; including following the section on &#147;OFED Support&#148; in the readme file, you
</span><br>
<span class="quotelev1">&gt; should have all the prerequisite libs and bins.&#160; Note that I have not built
</span><br>
<span class="quotelev1">&gt; Open MPI for Xeon Phi for your interconnect, but it seems to me that it
</span><br>
<span class="quotelev1">&gt; should work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
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
<span class="quotelev1">&gt; Cheers
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
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 8, 2013 at 12:10 PM, Elken, Tom &lt;tom.elken_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you guys have any plan to support Intel Phi in the future? That is,
</span><br>
<span class="quotelev1">&gt; running MPI code on the Phi cards or across the multicore and Phi, as Intel
</span><br>
<span class="quotelev1">&gt; MPI does?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Tom]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Michael,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because a Xeon Phi card acts a lot like a Linux host with an x86
</span><br>
<span class="quotelev1">&gt; architecture, you can build your own Open MPI libraries to serve this
</span><br>
<span class="quotelev1">&gt; purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our team has used existing (an older 1.4.3 version of) Open MPI source to
</span><br>
<span class="quotelev1">&gt; build an Open MPI for running MPI code on Intel Xeon Phi cards over Intel&#146;s
</span><br>
<span class="quotelev1">&gt; (formerly QLogic&#146;s) True Scale InfiniBand fabric, and it works quite well.&#160;
</span><br>
<span class="quotelev1">&gt; We have not released a pre-built Open MPI as part of any Intel software
</span><br>
<span class="quotelev1">&gt; release.&#160;&#160; But I think if you have a compiler for Xeon Phi (Intel Compiler
</span><br>
<span class="quotelev1">&gt; or GCC) and an interconnect for it, you should be able to build an Open MPI
</span><br>
<span class="quotelev1">&gt; that works on Xeon Phi.&#160;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Tom Elken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks...
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
<span class="quotelev1">&gt; On Sat, Jul 6, 2013 at 2:36 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf will have to answer the question on level of support. The CUDA code is
</span><br>
<span class="quotelev1">&gt; not in the 1.6 series as it was developed after that series went &quot;stable&quot;.
</span><br>
<span class="quotelev1">&gt; It is in the 1.7 series, although the level of support will likely be
</span><br>
<span class="quotelev1">&gt; incrementally increasing as that &quot;feature&quot; series continues to evolve.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 6, 2013, at 12:06 PM, Michael Thomadakis &lt;drmichaelt7777_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello OpenMPI,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am wondering what level of support is there for CUDA and GPUdirect on
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5 and 1.7.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I saw the ./configure --with-cuda=CUDA_DIR option in the FAQ. However, it
</span><br>
<span class="quotelev1">&gt; seems that with configure v1.6.5 it was ignored.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you identify GPU memory and send messages from it directly without
</span><br>
<span class="quotelev1">&gt; copying to host memory first?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or in general, what level of CUDA support is there on 1.6.5 and 1.7.2 ? Do
</span><br>
<span class="quotelev1">&gt; you support SDK 5.0 and above?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers ...
</span><br>
<span class="quotelev2">&gt; &gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22291.php">Michael Thomadakis: "Re: [OMPI users] Question on handling of memory for communications"</a>
<li><strong>In reply to:</strong> <a href="22288.php">Elken, Tom: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
<li><strong>Reply:</strong> <a href="22293.php">Michael Thomadakis: "Re: [OMPI users] Support for CUDA and GPU-direct with OpenMPI 1.6.5 an 1.7.2"</a>
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
