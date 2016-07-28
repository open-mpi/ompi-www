<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 11:18:10 2015" -->
<!-- isoreceived="20150727151810" -->
<!-- sent="Tue, 28 Jul 2015 00:17:59 +0900" -->
<!-- isosent="20150727151759" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="CAAkFZ5tQW-+1qYi9JGpw6aaeKY1du_WkyeUC0AgbRoxN4+aHUQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 11:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27335.php">Dhirendra Kumar: "[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5"</a>
<li><strong>Previous message:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eric,
<br>
<p>these warnings are not important and you can simply ignore them.
<br>
fwiw, this is a race condition evidenced by recent &quot;asynchrousity&quot;.
<br>
<p>i will push a fix tomorrow.
<br>
<p>in the mean time, you can
<br>
mpirun --mca oob ^tcp ...
<br>
(if you run on one node only)
<br>
or
<br>
mpirun --mca oob ^usock
<br>
(if you have an OS X cluster ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, July 26, 2015, Erik Schnetter &lt;schnetter_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it doesn't need to be 1.8.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried v2.x-dev-96-g918650a. This leads to run-time warnings on OS
</span><br>
<span class="quotelev1">&gt; X; I see messages such as
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
<span class="quotelev1">&gt; On Sat, Jul 25, 2015 at 7:49 AM, Mark Santcroos &lt;
</span><br>
<span class="quotelev1">&gt; mark.santcroos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','mark.santcroos_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Erik,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you really want 1.8.7, otherwise you might want to give latest master
</span><br>
<span class="quotelev2">&gt;&gt; a try. Other including myself had more luck with that on Cray's, including
</span><br>
<span class="quotelev2">&gt;&gt; Edison.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 25 Jul 2015, at 1:35 , Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','schnetter_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at NERSC). I've
</span><br>
<span class="quotelev2">&gt;&gt; tried various configuration options, but I am always encountering either
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI build errors, application build errors, or run-time errors.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm currently looking at &lt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;, which
</span><br>
<span class="quotelev2">&gt;&gt; seems to describe my case. I'm now configuring OpenMPI without any options,
</span><br>
<span class="quotelev2">&gt;&gt; except setting compilers to clang/gfortran and pointing it to a self-built
</span><br>
<span class="quotelev2">&gt;&gt; hwloc. For completeness, here are my configure options as recorded by
</span><br>
<span class="quotelev2">&gt;&gt; config.status:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt; '/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'
</span><br>
<span class="quotelev2">&gt;&gt; '--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7'
</span><br>
<span class="quotelev2">&gt;&gt; '--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0'
</span><br>
<span class="quotelev2">&gt;&gt; '--disable-vt'
</span><br>
<span class="quotelev2">&gt;&gt; 'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang'
</span><br>
<span class="quotelev2">&gt;&gt; 'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++'
</span><br>
<span class="quotelev2">&gt;&gt; 'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran'
</span><br>
<span class="quotelev2">&gt;&gt; 'CFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev2">&gt;&gt; 'CXXFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev2">&gt;&gt; 'LDFLAGS=-L/opt/ofed/lib64
</span><br>
<span class="quotelev2">&gt;&gt; -L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev2">&gt;&gt; 'LIBS=-lhwloc -lpthread -lpthread'
</span><br>
<span class="quotelev2">&gt;&gt; '--with-wrapper-ldflags=-L/project/projectdirs/
</span><br>
<span class="quotelev2">&gt;&gt;  m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev2">&gt;&gt; '--with-wrapper-libs=-lhwloc -lpthread'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This builds and installs fine, and works when running on a single node.
</span><br>
<span class="quotelev2">&gt;&gt; However, multi-node runs are stalling: The queue starts the job, but mpirun
</span><br>
<span class="quotelev2">&gt;&gt; produces no output. The &quot;-v&quot; option to mpirun doesn't help.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; When I use aprun instead of mpirun to start my application, then all
</span><br>
<span class="quotelev2">&gt;&gt; processes think they are rank 0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Do you have any pointers for how to debug this?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -erik
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','schnetter_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27324.php">http://www.open-mpi.org/community/lists/users/2015/07/27324.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/07/27327.php">http://www.open-mpi.org/community/lists/users/2015/07/27327.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','schnetter_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27334/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27335.php">Dhirendra Kumar: "[OMPI users] Help: configure flags and dependencies installation for REGCM-4.4.5.5"</a>
<li><strong>Previous message:</strong> <a href="27333.php">John Hearns: "Re: [OMPI users] NUMA: Non-local memory access and performance effects on OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="27329.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Reply:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
