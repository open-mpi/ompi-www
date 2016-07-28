<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 23:25:32 2015" -->
<!-- isoreceived="20150726032532" -->
<!-- sent="Sat, 25 Jul 2015 22:25:22 -0500" -->
<!-- isosent="20150726032522" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="CADKQjjfgrrHXytDezgLUOQ+3m9AdKRBsEfrANUEBoApeKX1UeQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="552DC09D-6E91-4B37-A6F3-8774BB4DB4CB_at_rutgers.edu" -->
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
<strong>From:</strong> Erik Schnetter (<em>schnetter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-25 23:25:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark
<br>
<p>No, it doesn't need to be 1.8.7.
<br>
<p>I just tried v2.x-dev-96-g918650a. This leads to run-time warnings on OS X;
<br>
I see messages such as
<br>
<p>[warn] select: Bad file descriptor
<br>
<p>Are these important? If not, how can I suppress them?
<br>
<p>-erik
<br>
<p><p>On Sat, Jul 25, 2015 at 7:49 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Erik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you really want 1.8.7, otherwise you might want to give latest master a
</span><br>
<span class="quotelev1">&gt; try. Other including myself had more luck with that on Cray's, including
</span><br>
<span class="quotelev1">&gt; Edison.
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
<span class="quotelev2">&gt; &gt; I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at NERSC). I've
</span><br>
<span class="quotelev1">&gt; tried various configuration options, but I am always encountering either
</span><br>
<span class="quotelev1">&gt; OpenMPI build errors, application build errors, or run-time errors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm currently looking at &lt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;, which
</span><br>
<span class="quotelev1">&gt; seems to describe my case. I'm now configuring OpenMPI without any options,
</span><br>
<span class="quotelev1">&gt; except setting compilers to clang/gfortran and pointing it to a self-built
</span><br>
<span class="quotelev1">&gt; hwloc. For completeness, here are my configure options as recorded by
</span><br>
<span class="quotelev1">&gt; config.status:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; '/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'
</span><br>
<span class="quotelev1">&gt; '--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7'
</span><br>
<span class="quotelev1">&gt; '--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0'
</span><br>
<span class="quotelev1">&gt; '--disable-vt'
</span><br>
<span class="quotelev1">&gt; 'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang'
</span><br>
<span class="quotelev1">&gt; 'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++'
</span><br>
<span class="quotelev1">&gt; 'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran'
</span><br>
<span class="quotelev1">&gt; 'CFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev1">&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev1">&gt; 'CXXFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev1">&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev1">&gt; 'LDFLAGS=-L/opt/ofed/lib64
</span><br>
<span class="quotelev1">&gt; -L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev1">&gt; 'LIBS=-lhwloc -lpthread -lpthread'
</span><br>
<span class="quotelev1">&gt; '--with-wrapper-ldflags=-L/project/projectdirs/
</span><br>
<span class="quotelev1">&gt;  m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev1">&gt; '--with-wrapper-libs=-lhwloc -lpthread'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This builds and installs fine, and works when running on a single node.
</span><br>
<span class="quotelev1">&gt; However, multi-node runs are stalling: The queue starts the job, but mpirun
</span><br>
<span class="quotelev1">&gt; produces no output. The &quot;-v&quot; option to mpirun doesn't help.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I use aprun instead of mpirun to start my application, then all
</span><br>
<span class="quotelev1">&gt; processes think they are rank 0.
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
<span class="quotelev2">&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27324.php">http://www.open-mpi.org/community/lists/users/2015/07/27324.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27327.php">http://www.open-mpi.org/community/lists/users/2015/07/27327.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Erik Schnetter &lt;schnetter_at_[hidden]&gt;
<a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27328.php">Ralph Castain: "Re: [OMPI users] Invalid read of size 4 (Valgrind error) with OpenMPI 1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27327.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27330.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
