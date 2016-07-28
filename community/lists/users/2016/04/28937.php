<?
$subject_val = "Re: [OMPI users] system call failed that shouldn't?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 12:28:41 2016" -->
<!-- isoreceived="20160414162841" -->
<!-- sent="Thu, 14 Apr 2016 09:27:47 -0700" -->
<!-- isosent="20160414162747" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] system call failed that shouldn't?" -->
<!-- id="570FC503.8070408_at_reachone.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="570EDF4A.7020208_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] system call failed that shouldn't?<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-14 12:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>In reply to:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Reply:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles,
<br>
<p>Yes, that solved the problem.  Thanks for the help.  I assume this fix 
<br>
will be in the next official release, i.e. 1.10.3?
<br>
<p>Tom Rosmond
<br>
<p><p><p>On 04/13/2016 05:07 PM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Tom,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i was able to reproduce the issue with an older v1.10 version, but not 
</span><br>
<span class="quotelev1">&gt; with current v1.10 from git.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; could you please give a try to 1.10.3rc1 available at 
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.3rc1.tar.bz2">https://www.open-mpi.org/software/ompi/v1.10/downloads/openmpi-1.10.3rc1.tar.bz2</a> 
</span><br>
<span class="quotelev1">&gt; ?
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
<span class="quotelev1">&gt; On 4/14/2016 4:05 AM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In this thread from the Open-MPI archives:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/community/lists/devel/2014/03/14416.php">https://www.open-mpi.org/community/lists/devel/2014/03/14416.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a strange problem with a system call is discussed, and claimed to be 
</span><br>
<span class="quotelev2">&gt;&gt; solved.  However, in running a simple test program with some new 
</span><br>
<span class="quotelev2">&gt;&gt; MPI-3 functions, the problem seems to be back:  Here is an example 
</span><br>
<span class="quotelev2">&gt;&gt; message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A system call failed during shared memory initialization that should
</span><br>
<span class="quotelev2">&gt;&gt; not have.  It is likely that your MPI job will now either abort or
</span><br>
<span class="quotelev2">&gt;&gt; experience performance degradation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Local host:  cedar.reachone.com
</span><br>
<span class="quotelev2">&gt;&gt;   System call: unlink(2) 
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/openmpi-sessions-rosmond_at_cedar_0/18624/1/shared_window_4.cedar
</span><br>
<span class="quotelev2">&gt;&gt;   Error:       No such file or directory (errno 2)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The same problem occurs on 2 different systems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. (Open MPI) 1.10.2 : gcc version 4.4.7 20120313 (Red Hat 4.4.7-16) 
</span><br>
<span class="quotelev2">&gt;&gt; (GCC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. (Open MPI) 1.8.4 : gcc version 4.7.2 (Debian 4.7.2-5)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached are
</span><br>
<span class="quotelev2">&gt;&gt; 1.  ompi_info from the first system above
</span><br>
<span class="quotelev2">&gt;&gt; 2. The source code of the test program (based on code downloaded from 
</span><br>
<span class="quotelev2">&gt;&gt; an Intel source)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I simply do
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpicc shared_mpi.c
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 8 a.out &gt; outp
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The program runs correctly on both system using Intel MPI, but 
</span><br>
<span class="quotelev2">&gt;&gt; returns the messages above with Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2016/04/28933.php">http://www.open-mpi.org/community/lists/users/2016/04/28933.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28936.php">http://www.open-mpi.org/community/lists/users/2016/04/28936.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Previous message:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>In reply to:</strong> <a href="28936.php">Gilles Gouaillardet: "Re: [OMPI users] system call failed that shouldn't?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
<li><strong>Reply:</strong> <a href="28938.php">Jeff Squyres (jsquyres): "Re: [OMPI users] system call failed that shouldn't?"</a>
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
