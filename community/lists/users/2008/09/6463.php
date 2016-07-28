<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 13:22:56 2008" -->
<!-- isoreceived="20080903172256" -->
<!-- sent="Wed, 3 Sep 2008 18:22:46 +0100" -->
<!-- isosent="20080903172246" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="DD26D2AA-CE48-4B79-8B61-BCF963BE62C1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48BEC524.70309_at_polytechnique.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-03 13:22:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 3, 2008, at 6:11 PM, Vincent Rotival wrote:
<br>
<p><span class="quotelev1">&gt; Eugene,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No what I'd like is that when doing something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the program continues AFTER the Bcast is completed (so no control  
</span><br>
<span class="quotelev1">&gt; returned to user), but while threads with rank &gt; 0 are waiting in  
</span><br>
<span class="quotelev1">&gt; Bcast they are not taking CPU resources
</span><br>
<p>Threads with rank &gt; 0 ? Now, this scares me !!! If all your threads  
<br>
are going in the bcast, then I guess the application is not correct  
<br>
from the MPI standard perspective (i.e. on each communicator there is  
<br>
only one collective at every moment). In MPI, each process (and not  
<br>
each thread) has a rank, and each process exists in each communicator  
<br>
only once. In other words, as each collective is bounded to a specific  
<br>
communicator, on each of your processes, only one thread should go in  
<br>
the MPI_Bcast, if you want only ONE collective.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope it is more clear, I apologize for not being clear in the  
</span><br>
<span class="quotelev1">&gt; first place
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vincent
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The solution I retained was for the main thread to isend data  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately to each other threads that are using Irecv + loop on  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works much better than using Bcast
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the clarification.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But this strikes me more as a question about the MPI standard than  
</span><br>
<span class="quotelev2">&gt;&gt; about the Open MPI implementation.  That is, what you really want  
</span><br>
<span class="quotelev2">&gt;&gt; is for the MPI API to support a non-blocking form of collectives.   
</span><br>
<span class="quotelev2">&gt;&gt; You want control to return to the user program before the barrier/ 
</span><br>
<span class="quotelev2">&gt;&gt; bcast/etc. operation has completed.  That's an API change.
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6463/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6462.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
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
