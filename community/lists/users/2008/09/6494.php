<?
$subject_val = "[OMPI users] MPI_Alltoallv and unknown data send sizes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 08:46:25 2008" -->
<!-- isoreceived="20080910124625" -->
<!-- sent="Wed, 10 Sep 2008 14:46:19 +0200" -->
<!-- isosent="20080910124619" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Alltoallv and unknown data send sizes" -->
<!-- id="op.ug9m3hyihvmlko_at_auchentoshan.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Alltoallv and unknown data send sizes<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-10 08:46:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6495.php">Robert Kubrick: "[OMPI users] MPI_Comm_connect"</a>
<li><strong>Previous message:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Reply:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>First some background, the real question is at the end of this (longish)  
<br>
mail.
<br>
<p>I have a problem where I need to exchange data between all processes. The  
<br>
data is unevenly distributed and I thought at first I could use  
<br>
MPI_Alltoallv to transfer the data. However, in my case, the receivers do  
<br>
not know how many data items the senders will send, but it is relatively  
<br>
easy to set up so the receiver can figure out the maximum number of items  
<br>
the sender will send, so I set the recvcounts to the maximum possible, and  
<br>
the sendcounts to the actual number of elements (smaller than recvcounts).
<br>
<p>The mpi-forum description (from  
<br>
<a href="http://www.mpi-forum.org/docs/mpi21-report/node99.htm">http://www.mpi-forum.org/docs/mpi21-report/node99.htm</a>) describes the  
<br>
following:
<br>
<p>MPI_ALLTOALLV(sendbuf, sendcounts, sdispls, sendtype, recvbuf, recvcounts,  
<br>
rdispls, recvtype, comm)
<br>
IN sendbuf	starting address of send buffer (choice)
<br>
IN sendcounts	integer array equal to the group size specifying the number  
<br>
of elements to send to each processor
<br>
IN sdispls	integer array (of length group size). Entry j specifies the  
<br>
displacement (relative to sendbuf) from which to take the outgoing data  
<br>
destined for process j
<br>
IN sendtype	data type of send buffer elements (handle)
<br>
OUT recvbuf	address of receive buffer (choice)
<br>
IN recvcounts	integer array equal to the group size specifying the number  
<br>
of elements that can be received from each processor
<br>
IN rdispls	integer array (of length group size). Entry i specifies the  
<br>
displacement (relative to recvbuf) at which to place the incoming data  
<br>
&nbsp;from process i
<br>
IN recvtype	data type of receive buffer elements (handle)
<br>
IN comm	communicator (handle)
<br>
<p>In particular the wording is &quot;the number of elements that can be received  
<br>
&nbsp;from each processor&quot; for recvcounts, and does not say that this must be  
<br>
exactly the same as the number of elements sent.
<br>
<p>It also mentions that it should work similarly as a number of independent  
<br>
MPI_Send/MPI_Recv calls. The amount of data sent in such a case does not  
<br>
need to exactly match the amount of data received.
<br>
<p>I, unfortunately, missed the following:
<br>
<p>The type signature associated with sendcounts[j], sendtypes[j] at process  
<br>
i must be equal to the type signature associated with recvcounts[i],  
<br>
recvtypes[i] at process j. This implies that the amount of data sent must  
<br>
be equal to the amount of data received, pairwise between every pair of  
<br>
processes. Distinct type maps between sender and receiver are still  
<br>
allowed.
<br>
<p>And the openmpi man page shows
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When a pair of processes exchanges data, each may pass  different   
<br>
ele-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ment  count  and datatype arguments so long as the sender specifies  
<br>
the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;same amount of data to send (in  bytes)  as  the  receiver   
<br>
expects  to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;receive.
<br>
<p>I did test my program on different send/recv counts, and while it  
<br>
sometimes works, sometimes it does not. Even if it worked I would not be  
<br>
comfortable using it anyway.
<br>
<p><p>The question is: If there is no way of determining the length of the data  
<br>
sent by the sender on the receiving end, I see two options: Either always  
<br>
transmit too much data using MPI_Alltoall(v) or cook up my own routine  
<br>
based on PTP calls, probably MPI_Sendrecv is the best option. Am I missing  
<br>
something?
<br>
<p><pre>
-- 
Daniel Sp&#229;ngberg
Materials Chemistry
Uppsala University
Sweden
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6495.php">Robert Kubrick: "[OMPI users] MPI_Comm_connect"</a>
<li><strong>Previous message:</strong> <a href="6493.php">Jeff Squyres: "Re: [OMPI users] How can I pass my user limits (stacksize, etc.) to mpirun in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
<li><strong>Reply:</strong> <a href="6497.php">George Bosilca: "Re: [OMPI users] MPI_Alltoallv and unknown data send sizes"</a>
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
