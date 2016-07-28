<?
$subject_val = "Re: [OMPI users] Regarding the Pthreads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 08:03:12 2012" -->
<!-- isoreceived="20120906120312" -->
<!-- sent="Thu, 6 Sep 2012 08:03:06 -0400" -->
<!-- isosent="20120906120306" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the Pthreads" -->
<!-- id="7FD0702A-4A29-4FF6-A80A-170D2002F862_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAJ_xm3AYtMt22NgjtY67TuwOpZxev0ZYSW4fEYGxKA=2yVdG9Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the Pthreads<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 08:03:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>Previous message:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your question is somewhat outside the scope of this list.  Perhaps people may chime in with some suggestions, but that's more of a threading question than an MPI question.
<br>
<p>Be warned that you need to call MPI_Init_thread (not MPI_Init) with MPI_THREAD_MULTIPLE in order to get true multi-threaded support in Open MPI.  And we only support that on the TCP and shared memory transports if you built Open MPI with threading support enabled.
<br>
<p><p>On Sep 5, 2012, at 2:23 PM, seshendra seshu wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am learning pthreads and trying to implement the pthreads in my quicksort program. 
</span><br>
<span class="quotelev1">&gt; My problem is iam unable to understand how to implement the pthreads at data received at a node from the master (In detail: In my program Master will divide the data and send to the slaves and each slave will do the sorting independently of The received data and send back to master after sorting is done. Now Iam having a problem in Implementing the pthreads at the slaves,i.e how to implement the pthreads in order to share data among the cores in each slave and sort the data and send it back to master. 
</span><br>
<span class="quotelev1">&gt; So could anyone help in solving this problem by providing some suggestions and clues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanking you very much.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  WITH REGARDS
</span><br>
<span class="quotelev1">&gt; M.L.N.Seshendra
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20140.php">Jeff Squyres: "Re: [OMPI users] python-mrmpi() failed"</a>
<li><strong>Previous message:</strong> <a href="20138.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV in OMPI 1.6.x"</a>
<li><strong>In reply to:</strong> <a href="20133.php">seshendra seshu: "[OMPI users] Regarding the Pthreads"</a>
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
