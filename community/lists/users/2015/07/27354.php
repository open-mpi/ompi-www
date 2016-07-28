<?
$subject_val = "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 21:57:23 2015" -->
<!-- isoreceived="20150729015723" -->
<!-- sent="Wed, 29 Jul 2015 10:57:15 +0900" -->
<!-- isosent="20150729015715" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building OpenMPI 1.8.7 on XC30" -->
<!-- id="55B832FB.8060600_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CADKQjjcQys-FafNuKBQkU6NaZP8kv8ciOS8WjAyOtwF6s+bRGg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 21:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Erik,
<br>
<p>the OS X warning (which should not be OS X specific) is fixed in 
<br>
<a href="https://github.com/open-mpi/ompi-release/pull/430">https://github.com/open-mpi/ompi-release/pull/430</a>
<br>
it will land into the v2.x series once reviewed
<br>
in the mean time, feel free to manually apply the patch on the tarball
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/29/2015 10:35 AM, Erik Schnetter wrote:
<br>
<span class="quotelev1">&gt; Thank you for all the pointers. I was able to 
</span><br>
<span class="quotelev1">&gt; build openmpi-v2.x-dev-96-g918650a without problems on Edison, and 
</span><br>
<span class="quotelev1">&gt; also on other systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm circumventing the OS X warning by ignoring it via &quot;grep -v&quot;; the 
</span><br>
<span class="quotelev1">&gt; other suggestion (--mca oob ^usock) did not work for me. I've 
</span><br>
<span class="quotelev1">&gt; tried openmpi-v2.x-dev-100-g26c3f03, but it still leads to the same 
</span><br>
<span class="quotelev1">&gt; warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Jul 27, 2015 at 10:17 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev1">&gt; &lt;gilles.gouaillardet_at_[hidden] &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Eric,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     these warnings are not important and you can simply ignore them.
</span><br>
<span class="quotelev1">&gt;     fwiw, this is a race condition evidenced by recent &quot;asynchrousity&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i will push a fix tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     in the mean time, you can
</span><br>
<span class="quotelev1">&gt;     mpirun --mca oob ^tcp ...
</span><br>
<span class="quotelev1">&gt;     (if you run on one node only)
</span><br>
<span class="quotelev1">&gt;     or
</span><br>
<span class="quotelev1">&gt;     mpirun --mca oob ^usock
</span><br>
<span class="quotelev1">&gt;     (if you have an OS X cluster ...)
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
<span class="quotelev1">&gt;     On Sunday, July 26, 2015, Erik Schnetter &lt;schnetter_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:schnetter_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         No, it doesn't need to be 1.8.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I just tried v2.x-dev-96-g918650a. This leads to run-time
</span><br>
<span class="quotelev1">&gt;         warnings on OS X; I see messages such as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         [warn] select: Bad file descriptor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Are these important? If not, how can I suppress them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -erik
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Sat, Jul 25, 2015 at 7:49 AM, Mark Santcroos
</span><br>
<span class="quotelev1">&gt;         &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi Erik,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Do you really want 1.8.7, otherwise you might want to give
</span><br>
<span class="quotelev1">&gt;             latest master a try. Other including myself had more luck
</span><br>
<span class="quotelev1">&gt;             with that on Cray's, including Edison.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;             &gt; On 25 Jul 2015, at 1:35 , Erik Schnetter
</span><br>
<span class="quotelev1">&gt;             &lt;schnetter_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I want to build OpenMPI 1.8.7 on a Cray XC30 (Edison at
</span><br>
<span class="quotelev1">&gt;             NERSC). I've tried various configuration options, but I am
</span><br>
<span class="quotelev1">&gt;             always encountering either OpenMPI build errors,
</span><br>
<span class="quotelev1">&gt;             application build errors, or run-time errors.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; I'm currently looking at &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/06/27230.php">http://www.open-mpi.org/community/lists/users/2015/06/27230.php</a>&gt;,
</span><br>
<span class="quotelev1">&gt;             which seems to describe my case. I'm now configuring
</span><br>
<span class="quotelev1">&gt;             OpenMPI without any options, except setting compilers to
</span><br>
<span class="quotelev1">&gt;             clang/gfortran and pointing it to a self-built hwloc. For
</span><br>
<span class="quotelev1">&gt;             completeness, here are my configure options as recorded by
</span><br>
<span class="quotelev1">&gt;             config.status:
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev1">&gt;             '/project/projectdirs/m152/schnette/edison/software/src/openmpi-1.8.7/src/openmpi-1.8.7/configure'
</span><br>
<span class="quotelev1">&gt;             '--prefix=/project/projectdirs/m152/schnette/edison/software/openmpi-1.8.7'
</span><br>
<span class="quotelev1">&gt;             '--with-hwloc=/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0'
</span><br>
<span class="quotelev1">&gt;             '--disable-vt'
</span><br>
<span class="quotelev1">&gt;             'CC=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang'
</span><br>
<span class="quotelev1">&gt;             'CXX=/project/projectdirs/m152/schnette/edison/software/llvm-3.6.2/bin/wrap-clang++'
</span><br>
<span class="quotelev1">&gt;             'FC=/project/projectdirs/m152/schnette/edison/software/gcc-5.2.0/bin/wrap-gfortran'
</span><br>
<span class="quotelev1">&gt;             'CFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev1">&gt;             -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev1">&gt;             'CXXFLAGS=-I/opt/ofed/include
</span><br>
<span class="quotelev1">&gt;             -I/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/include'
</span><br>
<span class="quotelev1">&gt;             'LDFLAGS=-L/opt/ofed/lib64
</span><br>
<span class="quotelev1">&gt;             -L/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev1">&gt;             -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev1">&gt;             'LIBS=-lhwloc -lpthread -lpthread'
</span><br>
<span class="quotelev1">&gt;             '--with-wrapper-ldflags=-L/project/projectdirs/
</span><br>
<span class="quotelev1">&gt;              m152/schnette/edison/software/hwloc-1.11.0/lib
</span><br>
<span class="quotelev1">&gt;             -Wl,-rpath,/project/projectdirs/m152/schnette/edison/software/hwloc-1.11.0/lib'
</span><br>
<span class="quotelev1">&gt;             '--with-wrapper-libs=-lhwloc -lpthread'
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; This builds and installs fine, and works when running on
</span><br>
<span class="quotelev1">&gt;             a single node. However, multi-node runs are stalling: The
</span><br>
<span class="quotelev1">&gt;             queue starts the job, but mpirun produces no output. The
</span><br>
<span class="quotelev1">&gt;             &quot;-v&quot; option to mpirun doesn't help.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; When I use aprun instead of mpirun to start my
</span><br>
<span class="quotelev1">&gt;             application, then all processes think they are rank 0.
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; Do you have any pointers for how to debug this?
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; -erik
</span><br>
<span class="quotelev2">&gt;             &gt;
</span><br>
<span class="quotelev2">&gt;             &gt; --
</span><br>
<span class="quotelev2">&gt;             &gt; Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
</span><br>
<span class="quotelev2">&gt;             &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;             &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;             &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;             &gt; Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;             &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/07/27324.php">http://www.open-mpi.org/community/lists/users/2015/07/27324.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2015/07/27327.php">http://www.open-mpi.org/community/lists/users/2015/07/27327.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Erik Schnetter &lt;schnetter_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
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
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/07/27334.php">http://www.open-mpi.org/community/lists/users/2015/07/27334.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Erik Schnetter &lt;schnetter_at_[hidden] &lt;mailto:schnetter_at_[hidden]&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.perimeterinstitute.ca/personal/eschnetter/">http://www.perimeterinstitute.ca/personal/eschnetter/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27353.php">http://www.open-mpi.org/community/lists/users/2015/07/27353.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>Previous message:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<li><strong>In reply to:</strong> <a href="27353.php">Erik Schnetter: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27355.php">Mark Santcroos: "Re: [OMPI users] Building OpenMPI 1.8.7 on XC30"</a>
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
