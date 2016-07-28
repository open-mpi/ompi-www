<?
$subject_val = "Re: [OMPI users] CPU burning in Wait state";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 13:48:04 2008" -->
<!-- isoreceived="20080903174804" -->
<!-- sent="Wed, 3 Sep 2008 18:47:52 +0100" -->
<!-- isosent="20080903174752" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU burning in Wait state" -->
<!-- id="3B4704EF-1719-4BD3-9879-E466C7A54D89_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48BECA4A.1070002_at_polytechnique.org" -->
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
<strong>Date:</strong> 2008-09-03 13:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This program is 100% correct from MPI perspective. However, in Open  
<br>
MPI (and I think most of the others MPI), a collective communication  
<br>
is something that will drain most of the resources, similar to all  
<br>
blocking functions.
<br>
<p>Now I will answer to your original post. Using non blocking  
<br>
communications in this particular case, will give you a benefit as the  
<br>
data involved in the communications is small enough to achieve a  
<br>
perfect overlap. In the case you're trying to do exactly the same with  
<br>
larger data, using non blocking communications will negatively impact  
<br>
the performances, as MPI is not supposed to communicate when the user  
<br>
application is not in an MPI call.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 3, 2008, at 6:32 PM, Vincent Rotival wrote:
<br>
<p><span class="quotelev1">&gt; Ok let's take the simple example here, I might have use wrong terms  
</span><br>
<span class="quotelev1">&gt; and I apologize for it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the rank 0 process is sleeping the other ones are in bcast  
</span><br>
<span class="quotelev1">&gt; waiting for data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; integer :: mpi_wsize, mpi_rank, mpi_err
</span><br>
<span class="quotelev1">&gt; integer :: data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_init(mpi_err)
</span><br>
<span class="quotelev1">&gt; call mpi_comm_size(MPI_COMM_WORLD, mpi_wsize, mpi_err)
</span><br>
<span class="quotelev1">&gt; call mpi_comm_rank(MPI_COMM_WORLD, mpi_rank, mpi_err)
</span><br>
<span class="quotelev1">&gt; if(mpi_rank.eq.0) then
</span><br>
<span class="quotelev1">&gt;    call sleep(100)
</span><br>
<span class="quotelev1">&gt;    data = 10
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, mpi_err)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; print *, &quot;Done in #&quot;, mpi_rank, &quot; =&gt; data=&quot;, data
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2008, at 6:11 PM, Vincent Rotival wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No what I'd like is that when doing something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call mpi_bcast(data, 1, MPI_INTEGER, 0, .....)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program continues AFTER the Bcast is completed (so no control  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; returned to user), but while threads with rank &gt; 0 are waiting in  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bcast they are not taking CPU resources
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Threads with rank &gt; 0 ? Now, this scares me !!! If all your threads  
</span><br>
<span class="quotelev2">&gt;&gt; are going in the bcast, then I guess the application is not correct  
</span><br>
<span class="quotelev2">&gt;&gt; from the MPI standard perspective (i.e. on each communicator there  
</span><br>
<span class="quotelev2">&gt;&gt; is only one collective at every moment). In MPI, each process (and  
</span><br>
<span class="quotelev2">&gt;&gt; not each thread) has a rank, and each process exists in each  
</span><br>
<span class="quotelev2">&gt;&gt; communicator only once. In other words, as each collective is  
</span><br>
<span class="quotelev2">&gt;&gt; bounded to a specific communicator, on each of your processes, only  
</span><br>
<span class="quotelev2">&gt;&gt; one thread should go in the MPI_Bcast, if you want only ONE  
</span><br>
<span class="quotelev2">&gt;&gt; collective.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I hope it is more clear, I apologize for not being clear in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first place
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Vincent
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Vincent Rotival wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The solution I retained was for the main thread to isend data  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; separately to each other threads that are using Irecv + loop on  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi_test to test the  finish of the Irecv. It mught be dirty but  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; works much better than using Bcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the clarification.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But this strikes me more as a question about the MPI standard  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than about the Open MPI implementation.  That is, what you really  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want is for the MPI API to support a non-blocking form of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; collectives.  You want control to return to the user program  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; before the barrier/bcast/etc. operation has completed.  That's an  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; API change.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6465/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6466.php">Richard Treumann: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>Previous message:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<li><strong>In reply to:</strong> <a href="6464.php">Vincent Rotival: "Re: [OMPI users] CPU burning in Wait state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6467.php">Eugene Loh: "Re: [OMPI users] CPU burning in Wait state"</a>
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
