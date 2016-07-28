<?
$subject_val = "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 19:39:34 2009" -->
<!-- isoreceived="20090922233934" -->
<!-- sent="Wed, 23 Sep 2009 09:39:22 +1000" -->
<!-- isosent="20090922233922" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?" -->
<!-- id="1253662762.5817.41.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="4AB90A42.9040604_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-22 19:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10729.php">Blesson Varghese: "[OMPI users] MPI Parent-Child process query"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you want all threads to communicate via MPI, and your initially
<br>
launching multiple parents, I don't really see the advantage of using
<br>
threads at all.  Why not launch 12 MPI processes?
<br>
<p>On Tue, 2009-09-22 at 10:32 -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; guosong wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for responding. I used a linux cluster. I think I would like
</span><br>
<span class="quotelev2">&gt; &gt; to create a model that is multithreaded and each thread can make MPI
</span><br>
<span class="quotelev2">&gt; &gt; calls. I attached test code as follow. It has two pthreads and there
</span><br>
<span class="quotelev2">&gt; &gt; are MPI calls in both of those two threads. In the main function,
</span><br>
<span class="quotelev2">&gt; &gt; there are also MPI calls. Should I use a full multithreading?
</span><br>
<span class="quotelev1">&gt; I guess so.  It seems like the created threads are expected to make
</span><br>
<span class="quotelev1">&gt; independent/concurrent message-passing calls.  Do read the link I
</span><br>
<span class="quotelev1">&gt; sent.  You need to convert from MPI_Init to MPI_Init_thread(), asking
</span><br>
<span class="quotelev1">&gt; for a full-multithreaded model and checking that you got it.  Also
</span><br>
<span class="quotelev1">&gt; note in main() that the MPI_Isend() calls should be matched with
</span><br>
<span class="quotelev1">&gt; MPI_Wait() or similar calls.  I guess the parent thread will sit in
</span><br>
<span class="quotelev1">&gt; such calls while the child threads do their own message passing.  Good
</span><br>
<span class="quotelev1">&gt; luck.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10729.php">Blesson Varghese: "[OMPI users] MPI Parent-Child process query"</a>
<li><strong>In reply to:</strong> <a href="10725.php">Eugene Loh: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
<li><strong>Reply:</strong> <a href="10731.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program	using	thread-safe send and recv?"</a>
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
