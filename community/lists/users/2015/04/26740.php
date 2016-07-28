<?
$subject_val = "Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 11:44:00 2015" -->
<!-- isoreceived="20150415154400" -->
<!-- sent="Wed, 15 Apr 2015 08:43:56 -0700" -->
<!-- isosent="20150415154356" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?" -->
<!-- id="819BD291-77D4-4D6C-BBED-EB3C8DA1CA91_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC46AED565_at_ALPMBAPA12.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why 3 threads per MPI task in pure MPI job?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-15 11:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Previous message:</strong> <a href="26739.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>In reply to:</strong> <a href="26739.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those are async progress threads - they block unless something requires doing
<br>
<p><p><span class="quotelev1">&gt; On Apr 15, 2015, at 8:36 AM, Sasso, John (GE Power &amp; Water, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I stumbled upon something while using &#226;&#128;&#152;ps &#226;&#128;&#147;eFL&#226;&#128;&#153; to view threads of processes, and Google searches have failed to answer my question.  This question holds for OpenMPI 1.6.x and even OpenMPI 1.4.x.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For a program which is pure MPI (built and run using OpenMPI) and does not implement Pthreads or OpenMP, why is it that each MPI task appears as having 3 threads:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; UID      PID  PPID   LWP  C NLWP    SZ   RSS PSR STIME TTY          TIME CMD
</span><br>
<span class="quotelev1">&gt; sasso  20512 20493 20512 99    3 187849 582420 14 11:01 ?       00:26:37 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt; sasso  20512 20493 20588  0    3 187849 582420 11 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt; sasso  20512 20493 20599  0    3 187849 582420 12 11:01 ?       00:00:00 /home/sasso/mpi_example.exe
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; whereas if I compile and run a non-MPI program, &#226;&#128;&#152;ps &#226;&#128;&#147;eFL&#226;&#128;&#153; shows it running as a single thread?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Granted the CPU utilization (C) for 2 of the 3 threads is zero, but the threads are bound to different processors (11,12,14).   I am curious as to why this is, and no complaining that there is a problem.  Thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26739.php">http://www.open-mpi.org/community/lists/users/2015/04/26739.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26739.php">http://www.open-mpi.org/community/lists/users/2015/04/26739.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26741.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_Init() time"</a>
<li><strong>Previous message:</strong> <a href="26739.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
<li><strong>In reply to:</strong> <a href="26739.php">Sasso, John (GE Power &amp; Water, Non-GE): "[OMPI users] Why 3 threads per MPI task in pure MPI job?"</a>
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
