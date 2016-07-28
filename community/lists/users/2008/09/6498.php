<?
$subject_val = "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 12:30:35 2008" -->
<!-- isoreceived="20080910163035" -->
<!-- sent="Wed, 10 Sep 2008 18:30:29 +0200" -->
<!-- isosent="20080910163029" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoallv and unknown data send sizes" -->
<!-- id="op.ug9xg314hvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C1425FC4-79F4-4AEE-92CC-52D328A17EA0_at_eecs.utk.edu" -->
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
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 12:30:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6499.php">Kamaraju Kusumanchi: "[OMPI users] prepend the standard output with rank of the process"</a>
<li><strong>Previous message:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>In reply to:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George, thanks for the quick answer!
<br>
<p>I thought about using alltoall before the alltoallv, but it &quot;feels&quot; like  
<br>
this might end up slow having two alltoall, at least doubling the latency.  
<br>
Might still be faster than a large bunch of sendrecvs of course. I'll  
<br>
simply have to do some short tests, anyway if it turns out the  
<br>
alltoall/alltoallv combo is too slow.
<br>
<p>Thanks again!
<br>
Daniel
<br>
<p>Den 2008-09-10 17:10:06 skrev George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Daniel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your understanding of he MPI standard requirement with regard to  
</span><br>
<span class="quotelev1">&gt; MPI_Alltoallv is now 100% accurate. The send count and datatype should  
</span><br>
<span class="quotelev1">&gt; match what the receiver expect. You can always use an MPI_Alltoall  
</span><br>
<span class="quotelev1">&gt; before the MPI_Alltoallv to exchange the lengths that you expect.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2008, at 1:46 PM, Daniel Sp&#229;ngberg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First some background, the real question is at the end of this  
</span><br>
<span class="quotelev2">&gt;&gt; (longish) mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have a problem where I need to exchange data between all processes.  
</span><br>
<span class="quotelev2">&gt;&gt; The data is unevenly distributed and I thought at first I could use  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Alltoallv to transfer the data. However, in my case, the receivers  
</span><br>
<span class="quotelev2">&gt;&gt; do not know how many data items the senders will send, but it is  
</span><br>
<span class="quotelev2">&gt;&gt; relatively easy to set up so the receiver can figure out the maximum  
</span><br>
<span class="quotelev2">&gt;&gt; number of items the sender will send, so I set the recvcounts to the  
</span><br>
<span class="quotelev2">&gt;&gt; maximum possible, and the sendcounts to the actual number of elements  
</span><br>
<span class="quotelev2">&gt;&gt; (smaller than recvcounts).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpi-forum description (from  
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi21-report/node99.htm">http://www.mpi-forum.org/docs/mpi21-report/node99.htm</a>) describes the  
</span><br>
<span class="quotelev2">&gt;&gt; following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ALLTOALLV(sendbuf, sendcounts, sdispls, sendtype, recvbuf,  
</span><br>
<span class="quotelev2">&gt;&gt; recvcounts, rdispls, recvtype, comm)
</span><br>
<span class="quotelev2">&gt;&gt; IN sendbuf	starting address of send buffer (choice)
</span><br>
<span class="quotelev2">&gt;&gt; IN sendcounts	integer array equal to the group size specifying the  
</span><br>
<span class="quotelev2">&gt;&gt; number of elements to send to each processor
</span><br>
<span class="quotelev2">&gt;&gt; IN sdispls	integer array (of length group size). Entry j specifies the  
</span><br>
<span class="quotelev2">&gt;&gt; displacement (relative to sendbuf) from which to take the outgoing data  
</span><br>
<span class="quotelev2">&gt;&gt; destined for process j
</span><br>
<span class="quotelev2">&gt;&gt; IN sendtype	data type of send buffer elements (handle)
</span><br>
<span class="quotelev2">&gt;&gt; OUT recvbuf	address of receive buffer (choice)
</span><br>
<span class="quotelev2">&gt;&gt; IN recvcounts	integer array equal to the group size specifying the  
</span><br>
<span class="quotelev2">&gt;&gt; number of elements that can be received from each processor
</span><br>
<span class="quotelev2">&gt;&gt; IN rdispls	integer array (of length group size). Entry i specifies the  
</span><br>
<span class="quotelev2">&gt;&gt; displacement (relative to recvbuf) at which to place the incoming data  
</span><br>
<span class="quotelev2">&gt;&gt; from process i
</span><br>
<span class="quotelev2">&gt;&gt; IN recvtype	data type of receive buffer elements (handle)
</span><br>
<span class="quotelev2">&gt;&gt; IN comm	communicator (handle)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In particular the wording is &quot;the number of elements that can be  
</span><br>
<span class="quotelev2">&gt;&gt; received from each processor&quot; for recvcounts, and does not say that  
</span><br>
<span class="quotelev2">&gt;&gt; this must be exactly the same as the number of elements sent.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It also mentions that it should work similarly as a number of  
</span><br>
<span class="quotelev2">&gt;&gt; independent MPI_Send/MPI_Recv calls. The amount of data sent in such a  
</span><br>
<span class="quotelev2">&gt;&gt; case does not need to exactly match the amount of data received.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I, unfortunately, missed the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The type signature associated with sendcounts[j], sendtypes[j] at  
</span><br>
<span class="quotelev2">&gt;&gt; process i must be equal to the type signature associated with  
</span><br>
<span class="quotelev2">&gt;&gt; recvcounts[i], recvtypes[i] at process j. This implies that the amount  
</span><br>
<span class="quotelev2">&gt;&gt; of data sent must be equal to the amount of data received, pairwise  
</span><br>
<span class="quotelev2">&gt;&gt; between every pair of processes. Distinct type maps between sender and  
</span><br>
<span class="quotelev2">&gt;&gt; receiver are still allowed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And the openmpi man page shows
</span><br>
<span class="quotelev2">&gt;&gt;       When a pair of processes exchanges data, each may pass   
</span><br>
<span class="quotelev2">&gt;&gt; different  ele-
</span><br>
<span class="quotelev2">&gt;&gt;       ment  count  and datatype arguments so long as the sender  
</span><br>
<span class="quotelev2">&gt;&gt; specifies the
</span><br>
<span class="quotelev2">&gt;&gt;       same amount of data to send (in  bytes)  as  the  receiver   
</span><br>
<span class="quotelev2">&gt;&gt; expects  to
</span><br>
<span class="quotelev2">&gt;&gt;       receive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did test my program on different send/recv counts, and while it  
</span><br>
<span class="quotelev2">&gt;&gt; sometimes works, sometimes it does not. Even if it worked I would not  
</span><br>
<span class="quotelev2">&gt;&gt; be comfortable using it anyway.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is: If there is no way of determining the length of the  
</span><br>
<span class="quotelev2">&gt;&gt; data sent by the sender on the receiving end, I see two options: Either  
</span><br>
<span class="quotelev2">&gt;&gt; always transmit too much data using MPI_Alltoall(v) or cook up my own  
</span><br>
<span class="quotelev2">&gt;&gt; routine based on PTP calls, probably MPI_Sendrecv is the best option.  
</span><br>
<span class="quotelev2">&gt;&gt; Am I missing something?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Daniel Sp&#229;ngberg
</span><br>
<span class="quotelev2">&gt;&gt; Materials Chemistry
</span><br>
<span class="quotelev2">&gt;&gt; Uppsala University
</span><br>
<span class="quotelev2">&gt;&gt; Sweden
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
<p><p><p><pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6499.php">Kamaraju Kusumanchi: "[OMPI users] prepend the standard output with rank of the process"</a>
<li><strong>Previous message:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>In reply to:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
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
