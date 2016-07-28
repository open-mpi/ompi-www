<?
$subject_val = "[OMPI users] Problem running simple application with g++ under FreeBSD 10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 15:30:59 2015" -->
<!-- isoreceived="20150605193059" -->
<!-- sent="Fri, 5 Jun 2015 21:30:41 +0200" -->
<!-- isosent="20150605193041" -->
<!-- name="rhannek_at_[hidden]" -->
<!-- email="rhannek_at_[hidden]" -->
<!-- subject="[OMPI users] Problem running simple application with g++ under FreeBSD 10.1" -->
<!-- id="20150605193041.GA57709_at_gmx.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem running simple application with g++ under FreeBSD 10.1<br>
<strong>From:</strong> <a href="mailto:rhannek_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Problem%20running%20simple%20application%20with%20g%2B%2B%20under%20FreeBSD%2010.1"><em>rhannek_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-06-05 15:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>Previous message:</strong> <a href="27043.php">George Bosilca: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>Reply:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>when trying to compile the attached program with mpiCC I get a
<br>
segmentation fault on executing. I compile it with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CXX=g++48 mpicxx -g test.cpp
<br>
<p>Output on running the compiled program:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;~&gt; ./a.out 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;zsh: segmentation fault (core dumped)  ./a.out
<br>
<p>I have no idea what's wrong with it. The code seems fine (to me) and
<br>
compiling c code or using clang works without problems. Any input on
<br>
that?
<br>
<p>Attached is the code that crashes and the backtrace of the crash.
<br>
<p>Regards,
<br>
Gideon Lang
<br>
<p><p>

<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27044/test.cpp">test.cpp</a>
</ul>
<!-- attachment="test.cpp" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27044/bt.txt">bt.txt</a>
</ul>
<!-- attachment="bt.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>Previous message:</strong> <a href="27043.php">George Bosilca: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
<li><strong>Reply:</strong> <a href="27045.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1"</a>
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
