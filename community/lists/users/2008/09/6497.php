<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 11:10:20 2008" -->
<!-- isoreceived="20080910151020" -->
<!-- sent="Wed, 10 Sep 2008 16:10:06 +0100" -->
<!-- isosent="20080910151006" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv and unknown data send sizes" -->
<!-- id="C1425FC4-79F4-4AEE-92CC-52D328A17EA0_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="op.ug9m3hyihvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoallv and unknown data send sizes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 11:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Previous message:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6494.php">Daniel Sp&#229;ngberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Reply:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Daniel,
<br>
<p>Your understanding of he MPI standard requirement with regard to  
<br>
MPI_Alltoallv is now 100% accurate. The send count and datatype should  
<br>
match what the receiver expect. You can always use an MPI_Alltoall  
<br>
before the MPI_Alltoallv to exchange the lengths that you expect.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 10, 2008, at 1:46 PM, Daniel Sp&#229;ngberg wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First some background, the real question is at the end of this  
</span><br>
<span class="quotelev1">&gt; (longish) mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem where I need to exchange data between all  
</span><br>
<span class="quotelev1">&gt; processes. The data is unevenly distributed and I thought at first I  
</span><br>
<span class="quotelev1">&gt; could use MPI_Alltoallv to transfer the data. However, in my case,  
</span><br>
<span class="quotelev1">&gt; the receivers do not know how many data items the senders will send,  
</span><br>
<span class="quotelev1">&gt; but it is relatively easy to set up so the receiver can figure out  
</span><br>
<span class="quotelev1">&gt; the maximum number of items the sender will send, so I set the  
</span><br>
<span class="quotelev1">&gt; recvcounts to the maximum possible, and the sendcounts to the actual  
</span><br>
<span class="quotelev1">&gt; number of elements (smaller than recvcounts).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The mpi-forum description (from <a href="http://www.mpi-forum.org/docs/mpi21-report/node99.htm">http://www.mpi-forum.org/docs/mpi21-report/node99.htm</a>) 
</span><br>
<span class="quotelev1">&gt;  describes the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ALLTOALLV(sendbuf, sendcounts, sdispls, sendtype, recvbuf,  
</span><br>
<span class="quotelev1">&gt; recvcounts, rdispls, recvtype, comm)
</span><br>
<span class="quotelev1">&gt; IN sendbuf	starting address of send buffer (choice)
</span><br>
<span class="quotelev1">&gt; IN sendcounts	integer array equal to the group size specifying the  
</span><br>
<span class="quotelev1">&gt; number of elements to send to each processor
</span><br>
<span class="quotelev1">&gt; IN sdispls	integer array (of length group size). Entry j specifies  
</span><br>
<span class="quotelev1">&gt; the displacement (relative to sendbuf) from which to take the  
</span><br>
<span class="quotelev1">&gt; outgoing data destined for process j
</span><br>
<span class="quotelev1">&gt; IN sendtype	data type of send buffer elements (handle)
</span><br>
<span class="quotelev1">&gt; OUT recvbuf	address of receive buffer (choice)
</span><br>
<span class="quotelev1">&gt; IN recvcounts	integer array equal to the group size specifying the  
</span><br>
<span class="quotelev1">&gt; number of elements that can be received from each processor
</span><br>
<span class="quotelev1">&gt; IN rdispls	integer array (of length group size). Entry i specifies  
</span><br>
<span class="quotelev1">&gt; the displacement (relative to recvbuf) at which to place the  
</span><br>
<span class="quotelev1">&gt; incoming data from process i
</span><br>
<span class="quotelev1">&gt; IN recvtype	data type of receive buffer elements (handle)
</span><br>
<span class="quotelev1">&gt; IN comm	communicator (handle)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In particular the wording is &quot;the number of elements that can be  
</span><br>
<span class="quotelev1">&gt; received from each processor&quot; for recvcounts, and does not say that  
</span><br>
<span class="quotelev1">&gt; this must be exactly the same as the number of elements sent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It also mentions that it should work similarly as a number of  
</span><br>
<span class="quotelev1">&gt; independent MPI_Send/MPI_Recv calls. The amount of data sent in such  
</span><br>
<span class="quotelev1">&gt; a case does not need to exactly match the amount of data received.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I, unfortunately, missed the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The type signature associated with sendcounts[j], sendtypes[j] at  
</span><br>
<span class="quotelev1">&gt; process i must be equal to the type signature associated with  
</span><br>
<span class="quotelev1">&gt; recvcounts[i], recvtypes[i] at process j. This implies that the  
</span><br>
<span class="quotelev1">&gt; amount of data sent must be equal to the amount of data received,  
</span><br>
<span class="quotelev1">&gt; pairwise between every pair of processes. Distinct type maps between  
</span><br>
<span class="quotelev1">&gt; sender and receiver are still allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the openmpi man page shows
</span><br>
<span class="quotelev1">&gt;       When a pair of processes exchanges data, each may pass   
</span><br>
<span class="quotelev1">&gt; different  ele-
</span><br>
<span class="quotelev1">&gt;       ment  count  and datatype arguments so long as the sender  
</span><br>
<span class="quotelev1">&gt; specifies the
</span><br>
<span class="quotelev1">&gt;       same amount of data to send (in  bytes)  as  the  receiver   
</span><br>
<span class="quotelev1">&gt; expects  to
</span><br>
<span class="quotelev1">&gt;       receive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did test my program on different send/recv counts, and while it  
</span><br>
<span class="quotelev1">&gt; sometimes works, sometimes it does not. Even if it worked I would  
</span><br>
<span class="quotelev1">&gt; not be comfortable using it anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is: If there is no way of determining the length of the  
</span><br>
<span class="quotelev1">&gt; data sent by the sender on the receiving end, I see two options:  
</span><br>
<span class="quotelev1">&gt; Either always transmit too much data using MPI_Alltoall(v) or cook  
</span><br>
<span class="quotelev1">&gt; up my own routine based on PTP calls, probably MPI_Sendrecv is the  
</span><br>
<span class="quotelev1">&gt; best option. Am I missing something?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev1">&gt; Materials Chemistry
</span><br>
<span class="quotelev1">&gt; Uppsala University
</span><br>
<span class="quotelev1">&gt; Sweden
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
<li><strong>Next message:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Previous message:</strong> <a href="6496.php">Amidu Oloso: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6494.php">Daniel Sp&#229;ngberg: "[OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Reply:</strong> <a href="6498.php">Daniel Spångberg: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
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
