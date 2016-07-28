<?
$subject_val = "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 13:21:51 2009" -->
<!-- isoreceived="20090330172151" -->
<!-- sent="Mon, 30 Mar 2009 13:21:41 -0400" -->
<!-- isosent="20090330172141" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
<!-- id="49D0FFA5.2050406_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Linux opteron infiniband sunstudio configure, problem" -->
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
<strong>Subject:</strong> Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 13:21:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8643.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Maybe reply:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also was unable to reproduce the configure error with the latest 1.3 
<br>
tarball.  I was on a SLES distribution.  What distribution are you on 
<br>
and can you possibly try and configure using gcc instead of Sun Studio?  
<br>
I have a feeling this issue is a larger configure issue and not Sun 
<br>
Studio specific.
<br>
<p>thanks,
<br>
<p>--td
<br>
<span class="quotelev1">&gt; Date: Mon, 30 Mar 2009 16:02:11 +0100
</span><br>
<span class="quotelev1">&gt; From: Kevin McManus &lt;k.mcmanus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Linux opteron infiniband sunstudio	configure
</span><br>
<span class="quotelev1">&gt; 	problem
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;20090330150211.GO13818_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Mar 30, 2009 at 09:04:26AM -0500, Ethan Mallove wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Mar/26/2009 04:52:28PM, Kevin McManus wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Hi All,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; As a complete beginner (to OpenMPI) I am attempting to build on
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; a Linux opteron infiniband platform using SunStudio compilers.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; My build script looks like...
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ../configure x86_64 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         CC=cc CXX=CC F77=f77 FC=f90 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         CFLAGS=-m64 CXXFLAGS=-m64 FFLAGS=-m64 FCFLAGS=-m64 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         --enable-static \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         --enable-orterun-prefix-by-default \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         --enable-mpi-f90 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         --enable-mpi-threads \
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;         --with-psm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; We configure with --disable-mpi-threads, and have not tested
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --with-psm and --with-static. Do you provide --with-psm a DIR
</span><br>
<span class="quotelev3">&gt;&gt; &gt; argument? &quot;configure --help&quot; shows: 
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure: error: unrecognized option: --diable-mpi-threads
</span><br>
<span class="quotelev1">&gt; Try `../configure --help' for more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   ...
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   --with-psm(=DIR)        Build PSM (QLogic InfiniPath PSM) support, searching
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           for libraries in DIR
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   --with-psm-libdir=DIR   Search for PSM (QLogic InfiniPath PSM) libraries in
</span><br>
<span class="quotelev3">&gt;&gt; &gt;                           DIR
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not sure how to phrase the --with-psm(=DIR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can find psm libs at...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/lib/libpsm_infinipath.so.1.0
</span><br>
<span class="quotelev1">&gt; /usr/lib/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1.0
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so maybe I should use
</span><br>
<span class="quotelev1">&gt; 	--with-psm
</span><br>
<span class="quotelev1">&gt; 	--with-psm-libdir=/usr/lib64
</span><br>
<span class="quotelev1">&gt; but even if I remove --with-psm I hit the same problem with the MCA bucket
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I will try to reproduce the problem.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help  :-) 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8643.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Reply:</strong> <a href="8645.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Maybe reply:</strong> <a href="8654.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
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
