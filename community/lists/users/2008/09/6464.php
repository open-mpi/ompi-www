<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 13:33:03 2008" -->
<!-- isoreceived="20080903173303" -->
<!-- sent="Wed, 03 Sep 2008 19:32:58 +0200" -->
<!-- isosent="20080903173258" -->
<!-- name="Vincent Rotival" -->
<!-- email="vincent.rotival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="48BECA4A.1070002_at_polytechnique.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DD26D2AA-CE48-4B79-8B61-BCF963BE62C1_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-09-03 13:32:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok let's take the simple example here, I might have use wrong terms and 
<br>
I apologize for it
<br>
<p>While the rank 0 process is sleeping the other ones are in bcast waiting 
<br>
for data
<br>
<p><p><p>program test
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer :: mpi_wsize, mpi_rank, mpi_err
<br>
&nbsp;&nbsp;integer :: data
<br>
<p>&nbsp;&nbsp;call mpi_init(mpi_err)
<br>
&nbsp;&nbsp;call mpi_comm_size(MPI_COMM_WORLD, mpi_wsize, mpi_err)
<br>
&nbsp;&nbsp;call mpi_comm_rank(MPI_COMM_WORLD, mpi_rank, mpi_err)
<br>
&nbsp;
<br>
&nbsp;&nbsp;if(mpi_rank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call sleep(100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data = 10
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;call mpi_bcast(data, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, mpi_err)
<br>
<p>&nbsp;&nbsp;print *, &quot;Done in #&quot;, mpi_rank, &quot; =&gt; data=&quot;, data
<br>
<p>end program test
<br>
<p><p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 3, 2008, at 6:11 PM, Vincent Rotival wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No what I'd like is that when doing something like
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the program continues AFTER the Bcast is completed (so no control 
</span><br>
<span class="quotelev2">&gt;&gt; returned to user), but while threads with rank &gt; 0 are waiting in 
</span><br>
<span class="quotelev2">&gt;&gt; Bcast they are not taking CPU resources
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Threads with rank &gt; 0 ? Now, this scares me !!! If all your threads 
</span><br>
<span class="quotelev1">&gt; are going in the bcast, then I guess the application is not correct 
</span><br>
<span class="quotelev1">&gt; from the MPI standard perspective (i.e. on each communicator there is 
</span><br>
<span class="quotelev1">&gt; only one collective at every moment). In MPI, each process (and not 
</span><br>
<span class="quotelev1">&gt; each thread) has a rank, and each process exists in each communicator 
</span><br>
<span class="quotelev1">&gt; only once. In other words, as each collective is bounded to a specific 
</span><br>
<span class="quotelev1">&gt; communicator, on each of your processes, only one thread should go in 
</span><br>
<span class="quotelev1">&gt; the MPI_Bcast, if you want only ONE collective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I hope it is more clear, I apologize for not being clear in the first 
</span><br>
<span class="quotelev2">&gt;&gt; place
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Vincent
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The solution I retained was for the main thread to isend data 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; separately to each other threads that are using Irecv + loop on 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works much better than using Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the clarification.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But this strikes me more as a question about the MPI standard than 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about the Open MPI implementation.  That is, what you really want is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for the MPI API to support a non-blocking form of collectives.  You 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want control to return to the user program before the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; barrier/bcast/etc. operation has completed.  That's an API change.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6463.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6465.php">George Bosilca: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Reply:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
