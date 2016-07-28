<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 13:11:05 2008" -->
<!-- isoreceived="20080903171105" -->
<!-- sent="Wed, 03 Sep 2008 19:11:00 +0200" -->
<!-- isosent="20080903171100" -->
<!-- name="Vincent Rotival" -->
<!-- email="vincent.rotival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BEC524.70309_at_polytechnique.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48BEC4C8.1020001_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] CPU burning in Wait state<br>
<strong>From:</strong> Vincent Rotival (<em>vincent.rotival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 13:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene,
<br>
<p>No what I'd like is that when doing something like
<br>
<p>call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
<br>
<p>the program continues AFTER the Bcast is completed (so no control 
<br>
returned to user), but while threads with rank &gt; 0 are waiting in Bcast 
<br>
they are not taking CPU resources
<br>
<p>I hope it is more clear, I apologize for not being clear in the first place
<br>
<p>Vincent
<br>
<p><p><p>Eugene Loh wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The solution I retained was for the main thread to isend data 
</span><br>
<span class="quotelev2">&gt;&gt; separately to each other threads that are using Irecv + loop on 
</span><br>
<span class="quotelev2">&gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but 
</span><br>
<span class="quotelev2">&gt;&gt; works much better than using Bcast 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the clarification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But this strikes me more as a question about the MPI standard than 
</span><br>
<span class="quotelev1">&gt; about the Open MPI implementation.  That is, what you really want is 
</span><br>
<span class="quotelev1">&gt; for the MPI API to support a non-blocking form of collectives.  You 
</span><br>
<span class="quotelev1">&gt; want control to return to the user program before the 
</span><br>
<span class="quotelev1">&gt; barrier/bcast/etc. operation has completed.  That's an API change.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6461.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
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
