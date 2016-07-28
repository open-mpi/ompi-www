<?
$subject_val = "Re: [OMPI users] Deadlock question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 27 01:23:49 2010" -->
<!-- isoreceived="20100527052349" -->
<!-- sent="Thu, 27 May 2010 07:23:41 +0200" -->
<!-- isosent="20100527052341" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock question" -->
<!-- id="E64FB4BC-C8E4-4632-8C8D-9BD890AF32EB_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BFAC51E.2030201_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock question<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-27 01:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2010, at 20:27 , Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Gijsbert Wiesenekker wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My MPI program consists of a number of processes that send 0 or more messages (using MPI_Isend) to 0 or more other processes. The processes check periodically if messages are available to be processed. It was running fine until I increased the message size, and I got deadlock problems. Googling learned I was running into a classic deadlock problem if (see for example <a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>). The workarounds suggested like changing the order of MPI_Send and MPI_Recv do not work in my case, as it could be that one processor does not send any message at all to the other processes, so MPI_Recv would wait indefinitely.
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions on how to avoid deadlock in this case?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; The problems you describe would seem to arise with blocking functions like MPI_Send and MPI_Recv.  With the non-blocking variants MPI_Isend/MPI_Irecv, there shouldn't be this problem.  There should be no requirement of ordering the functions in the way that web page describes... that workaround is suggested for the blocking calls.  It feels to me that something is missing from your description.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you know the maximum size any message will be, you can post an MPI_Irecv with wild card tags and source ranks.  You can post MPI_Isend calls for whatever messages you want to send.  You can use MPI_Test to check if any message has been received;  if so, process the received message and re-post the MPI_Irecv.  You can use MPI_Test to check if any send messages have completed;  if so, you can reuse those send buffers.  You need some signal to indicate to processes that no further messages will be arriving.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>My program was running fine using the methods you describe (MPI_Isend/MPI_Test/MPI_Irecv), until I increased the message size. My program was not running very efficient because of the MPI overhead associated with sending/receiving a large number of small messages. So I decided to combine messages before sending them, and then I got the deadlock problems: the MPI_Test calls never returned true, so the MPI_Isend calls never completed. As described on the link given above, the reason was that I exhausted the MPI system buffer space, in combination with the unsafe ordering of the send/receive calls (but I cannot see how I can change that order given the nature of my program).
<br>
See for example also <a href="http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/com.ibm.cluster.pe.doc/pe_422/am10600481.html">http://publib.boulder.ibm.com/infocenter/clresctr/vxrx/index.jsp?topic=/com.ibm.cluster.pe.doc/pe_422/am10600481.html</a>: 'Destination buffer space unavailability cannot cause a safe MPI program to fail, but could cause hangs in unsafe MPI programs. An unsafe program is one that assumes MPI can guarantee system buffering of sent data until the receive is posted.' 
<br>
<p>Gijsbert
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13170.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Previous message:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13148.php">Eugene Loh: "Re: [OMPI users] Deadlock question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13168.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
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
