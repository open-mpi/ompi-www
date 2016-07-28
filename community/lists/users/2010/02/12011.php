<?
$subject_val = "Re: [OMPI users] Progress in MPI_Win_unlock";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 17:18:22 2010" -->
<!-- isoreceived="20100204221822" -->
<!-- sent="Thu, 4 Feb 2010 15:18:09 -0700" -->
<!-- isosent="20100204221809" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Progress in MPI_Win_unlock" -->
<!-- id="254D16EC-5C2A-4941-B6F5-29771A24A066_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B6B0A8F.1070109_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Progress in MPI_Win_unlock<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-04 17:18:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12010.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 02/13/2010)"</a>
<li><strong>In reply to:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dorian -
<br>
<p>Your observation is correct - Open MPI will only make progress on a passive target communication if the target enters the MPI library in some meaningful way (tests on a request which hasn't completed, makes a one-sided call, starts communication, etc.).
<br>
<p>I'm the author of the onesided code in Open MPI and believe that it's behavior is likely outside the parameters intended in the standard with regards to progress.  The intent of the code was to leverage the existing progress thread options in the lowest level of the interface to asynchronously progress the one-sided messages.  However, the community has been slow to properly support threaded progress, so my plan was thwarted.
<br>
<p>Asynchronous progress of passive target communication over a variety of networks without lower-level asynchronous progress is a difficult task.  Unfortunately, I've since moved on to other projects and certainly don't have the time to work on such an implementation.
<br>
<p>Brian
<br>
<p><p>On Feb 4, 2010, at 10:57 AM, Dorian Krause wrote:
<br>
<p><span class="quotelev1">&gt; Hi Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your answer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The question to me is: Is an MPI process supposed to eventually exit or 
</span><br>
<span class="quotelev1">&gt; can it be a server process running for eternity?
</span><br>
<span class="quotelev1">&gt; In the later case, no progress will be made ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it might be helpful to users to give a clarification in the 
</span><br>
<span class="quotelev1">&gt; standard (e.g. in an &quot;advice to users.&quot;), especially because obviously 
</span><br>
<span class="quotelev1">&gt; the target in passive target communication is not allowed to be quite so 
</span><br>
<span class="quotelev1">&gt; passive ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the finalize requirement, see MPI-2.2 page 291, lines 36-38:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------8&lt;------
</span><br>
<span class="quotelev2">&gt;&gt; This routine cleans up all MPI state. Each process must call 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FINALIZE before it exits. Unless there has been a call to 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT, each process must ensure that all pending nonblocking 
</span><br>
<span class="quotelev2">&gt;&gt; communications are (locally) complete before calling MPI_FINALIZE.
</span><br>
<span class="quotelev2">&gt;&gt; ------8&lt;------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI is intentionally vague on progress issues and leaves lots of room 
</span><br>
<span class="quotelev2">&gt;&gt; for implementation choices.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll let the Open MPI folks answer the questions about their 
</span><br>
<span class="quotelev2">&gt;&gt; implementation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12012.php">Peter C. Lichtner: "[OMPI users] libtool compile error"</a>
<li><strong>Previous message:</strong> <a href="12010.php">Jeffrey M Ceason: "[OMPI users] AUTO: Jeffrey M Ceason is out of the office. (returning 02/13/2010)"</a>
<li><strong>In reply to:</strong> <a href="12008.php">Dorian Krause: "Re: [OMPI users] Progress in MPI_Win_unlock"</a>
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
