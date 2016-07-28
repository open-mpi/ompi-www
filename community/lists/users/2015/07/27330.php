<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 26 03:17:42 2015" -->
<!-- isoreceived="20150726071742" -->
<!-- sent="Sun, 26 Jul 2015 09:17:38 +0200" -->
<!-- isosent="20150726071738" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="6A43A5E6-61A4-42A6-949E-BC05B8AF87C2_at_rutgers.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADKQjjfgrrHXytDezgLUOQ+3m9AdKRBsEfrANUEBoApeKX1UeQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building OpenMPI 1.8.7 on XC30<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-26 03:17:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, dont know about that, would have to pass that on to others.
<br>
<p><span class="quotelev1">&gt; On 26 Jul 2015, at 5:25 , Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it doesn't need to be 1.8.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just tried v2.x-dev-96-g918650a. This leads to run-time warnings on OS X; I see messages such as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] select: Bad file descriptor
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are these important? If not, how can I suppress them?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 25, 2015 at 7:49 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Erik,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you really want 1.8.7, otherwise you might want to give latest master a try. Other including myself had more luck with that on Cray's, including Edison.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On 25 Jul 2015, at 1:35 , Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at NERSC). I've tried various configuration options, but I am always encountering either OpenMPI build errors, application build errors, or run-time errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm currently looking at &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;, which seems to describe my case. I'm now configuring OpenMPI without any options, except setting compilers to clang/gfortran and pointing it to a self-built hwloc. For completeness, here are my configure options as recorded by config.status:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; '/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'  '--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7' '--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0' '--disable-vt' 'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang' 'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++' 'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran' 'CFLAGS=-I/opt/ofed/include -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include' 'CXXFLAGS=-I/opt/ofed/include -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include' 'LDFLAGS=-L/opt/ofed/lib64 -L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib' 'LIBS=-lhwloc -lpthread -lpthread' '--with-wrapper-ldflags=-L/project/projectdirs/
</span><br>
<span class="quotelev1">&gt;  m152/schnette/edison/software/hwloc-1.11.0/lib -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib' '--with-wrapper-libs=-lhwloc -lpthread'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This builds and installs fine, and works when running on a single node. However, multi-node runs are stalling: The queue starts the job, but mpirun produces no output. The &quot;-v&quot; option to mpirun doesn't help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I use aprun instead of mpirun to start my application, then all processes think they are rank 0.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you have any pointers for how to debug this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -erik
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27324.php">http://www.open-mpi.org/community/lists/users/2015/07/27324.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27327.php">http://www.open-mpi.org/community/lists/users/2015/07/27327.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27329.php">http://www.open-mpi.org/community/lists/users/2015/07/27329.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27331.php">Davide Cesari: "Re: [OMPI users] NUMA: Non-local memory access and performance	effects on OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
