<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 21:35:54 2015" -->
<!-- isoreceived="20150729013554" -->
<!-- sent="Tue, 28 Jul 2015 20:35:53 -0500" -->
<!-- isosent="20150729013553" -->
<!-- name="Erik Schnetter" -->
<!-- email="schnetter_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="CADKQjjcQys-FafNuKBQkU6NaZP8kv8ciOS8WjAyOtwF6s+bRGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5tQW-+1qYi9JGpw6aaeKY1du_WkyeUC0AgbRoxN4+aHUQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-07-28 21:35:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27352.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for all the pointers. I was able to
<br>
build openmpi-v2.x-dev-96-g918650a without problems on Edison, and also on
<br>
other systems.
<br>
<p>I'm circumventing the OS X warning by ignoring it via &quot;grep -v&quot;; the other
<br>
suggestion (--mca oob ^usock) did not work for me. I've
<br>
tried openmpi-v2.x-dev-100-g26c3f03, but it still leads to the same warning.
<br>
<p>-erik
<br>
<p><p>On Mon, Jul 27, 2015 at 10:17 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; these warnings are not important and you can simply ignore them.
</span><br>
<span class="quotelev1">&gt; fwiw, this is a race condition evidenced by recent &quot;asynchrousity&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will push a fix tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the mean time, you can
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob ^tcp ...
</span><br>
<span class="quotelev1">&gt; (if you run on one node only)
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; mpirun --mca oob ^usock
</span><br>
<span class="quotelev1">&gt; (if you have an OS X cluster ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, July 26, 2015, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, it doesn't need to be 1.8.7.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just tried v2.x-dev-96-g918650a. This leads to run-time warnings on OS
</span><br>
<span class="quotelev2">&gt;&gt; X; I see messages such as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [warn] select: Bad file descriptor
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are these important? If not, how can I suppress them?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -erik
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Jul 25, 2015 at 7:49 AM, Mark Santcroos &lt;
</span><br>
<span class="quotelev2">&gt;&gt; mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Erik,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you really want 1.8.7, otherwise you might want to give latest master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a try. Other including myself had more luck with that on Cray's, including
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edison.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mark
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On 25 Jul 2015, at 1:35 , Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at NERSC). I've
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried various configuration options, but I am always encountering either
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI build errors, application build errors, or run-time errors.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I'm currently looking at &lt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;, which
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to describe my case. I'm now configuring OpenMPI without any options,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; except setting compilers to clang/gfortran and pointing it to a self-built
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc. For completeness, here are my configure options as recorded by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; config.status:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--disable-vt'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'CFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'CXXFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'LDFLAGS=-L/opt/ofed/lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'LIBS=-lhwloc -lpthread -lpthread'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--with-wrapper-ldflags=-L/project/projectdirs/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '--with-wrapper-libs=-lhwloc -lpthread'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This builds and installs fine, and works when running on a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node. However, multi-node runs are stalling: The queue starts the job, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun produces no output. The &quot;-v&quot; option to mpirun doesn't help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; When I use aprun instead of mpirun to start my application, then all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes think they are rank 0.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Do you have any pointers for how to debug this?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -erik
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27324.php">http://www.open-mpi.org/community/lists/users/2015/07/27324.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27327.php">http://www.open-mpi.org/community/lists/users/2015/07/27327.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27334.php">http://www.open-mpi.org/community/lists/users/2015/07/27334.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27352.php">Gilles Gouaillardet: "Re: [OMPI users] File coherence issues with OpenMPI/torque/NFS (?)"</a>
<li><strong>In reply to:</strong> <a href="27334.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27354.php">Gilles Gouaillardet: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
