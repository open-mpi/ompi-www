<?
$subject_val = "Re: [OMPI users] Deadlock question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 14:25:59 2010" -->
<!-- isoreceived="20100524182559" -->
<!-- sent="Mon, 24 May 2010 11:27:42 -0700" -->
<!-- isosent="20100524182742" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock question" -->
<!-- id="4BFAC51E.2030201_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5A68689B-5BC1-4D0A-9C61-8C9872F10AAC_at_gmail.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 14:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt;My MPI program consists of a number of processes that send 0 or more messages (using MPI_Isend) to 0 or more other processes. The processes check periodically if messages are available to be processed. It was running fine until I increased the message size, and I got deadlock problems. Googling learned I was running into a classic deadlock problem if (see for example <a href="http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html">http://www.cs.ucsb.edu/~hnielsen/cs140/mpi-deadlocks.html</a>). The workarounds suggested like changing the order of MPI_Send and MPI_Recv do not work in my case, as it could be that one processor does not send any message at all to the other processes, so MPI_Recv would wait indefinitely.
</span><br>
<span class="quotelev1">&gt;Any suggestions on how to avoid deadlock in this case?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
The problems you describe would seem to arise with blocking functions 
<br>
like MPI_Send and MPI_Recv.  With the non-blocking variants 
<br>
MPI_Isend/MPI_Irecv, there shouldn't be this problem.  There should be 
<br>
no requirement of ordering the functions in the way that web page 
<br>
describes... that workaround is suggested for the blocking calls.  It 
<br>
feels to me that something is missing from your description.
<br>
<p>If you know the maximum size any message will be, you can post an 
<br>
MPI_Irecv with wild card tags and source ranks.  You can post MPI_Isend 
<br>
calls for whatever messages you want to send.  You can use MPI_Test to 
<br>
check if any message has been received;  if so, process the received 
<br>
message and re-post the MPI_Irecv.  You can use MPI_Test to check if any 
<br>
send messages have completed;  if so, you can reuse those send buffers.  
<br>
You need some signal to indicate to processes that no further messages 
<br>
will be arriving.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13149.php">Dawid Laszuk: "Re: [OMPI users] mpirun: symbol lookup error: mpirun: undefinedsymbol:orte_xml_fp"</a>
<li><strong>Previous message:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<li><strong>In reply to:</strong> <a href="13147.php">Gijsbert Wiesenekker: "[OMPI users] Deadlock question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
<li><strong>Reply:</strong> <a href="13169.php">Gijsbert Wiesenekker: "Re: [OMPI users] Deadlock question"</a>
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
