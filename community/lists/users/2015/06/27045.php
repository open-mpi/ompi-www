<?
$subject_val = "Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  5 15:50:04 2015" -->
<!-- isoreceived="20150605195004" -->
<!-- sent="Fri, 5 Jun 2015 19:49:52 +0000" -->
<!-- isosent="20150605194952" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1" -->
<!-- id="784766C2-F57E-47E7-B5E5-CEB97FAE3D40_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150605193041.GA57709_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running simple application with g++ under	FreeBSD 10.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-05 15:49:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27044.php">rhannek_at_[hidden]: "[OMPI users] Problem running simple application with g++ under FreeBSD 10.1"</a>
<li><strong>In reply to:</strong> <a href="27044.php">rhannek_at_[hidden]: "[OMPI users] Problem running simple application with g++ under FreeBSD 10.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a reason you're specifying OMPI_CXX=g++48?
<br>
<p>I.e., did you compile OMPI with a different C++ compiler?  If so, that could be your issue -- try compiling OMPI with g++48 and then see if your app compiles and runs properly.
<br>
<p><p><span class="quotelev1">&gt; On Jun 5, 2015, at 3:30 PM, rhannek_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when trying to compile the attached program with mpiCC I get a
</span><br>
<span class="quotelev1">&gt; segmentation fault on executing. I compile it with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	OMPI_CXX=g++48 mpicxx -g test.cpp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output on running the compiled program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	~&gt; ./a.out 	zsh: segmentation fault (core dumped)  ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have no idea what's wrong with it. The code seems fine (to me) and
</span><br>
<span class="quotelev1">&gt; compiling c code or using clang works without problems. Any input on
</span><br>
<span class="quotelev1">&gt; that?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached is the code that crashes and the backtrace of the crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gideon Lang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;test.cpp&gt;&lt;bt.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27044.php">http://www.open-mpi.org/community/lists/users/2015/06/27044.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27046.php">Gilles Gouaillardet: "Re: [OMPI users] Bug: Disabled mpi_leave_pinned for GPUDirect and InfiniBand during run-time caused by GCC optimizations"</a>
<li><strong>Previous message:</strong> <a href="27044.php">rhannek_at_[hidden]: "[OMPI users] Problem running simple application with g++ under FreeBSD 10.1"</a>
<li><strong>In reply to:</strong> <a href="27044.php">rhannek_at_[hidden]: "[OMPI users] Problem running simple application with g++ under FreeBSD 10.1"</a>
<!-- nextthread="start" -->
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
