<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 11 04:13:19 2010" -->
<!-- isoreceived="20100711081319" -->
<!-- sent="Sun, 11 Jul 2010 02:13:14 -0600" -->
<!-- isosent="20100711081314" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="SNT134-w31E88FF4557FCF3CED7C60CBB70_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C3960E1.5060208_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI how large its buffer size ?<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-11 04:13:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13578.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks for your reply. 
<br>
The message size is 72 bytes. 
<br>
The master sends out the message package to each 51 nodes. 
<br>
Then, after doing their local work, the worker node send back the same-size message to the master. 
<br>
Master use vector.push_back(new messageType) to receive each message from workers. 
<br>
Master use thempi_irecv(workerNodeID, messageTag, bufferVector[row][column])
<br>
to receive the worker message. 
<br>
the row is the rankID of each worker, the column is index for  message from worker.Each worker may send multiple messages to master. 
<br>
when the worker node size is large, i got MPI_ERR_TRUNCATE error.
<br>
Any help is appreciated. 
<br>
JACK
<br>
July 10  2010
<br>
<p>Date: Sat, 10 Jul 2010 23:12:49 -0700
<br>
From: eugene.loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OpenMPI how large its buffer size ?
<br>
<p><p><p><p><p><p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p><p>Jack Bryan wrote:
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;The master node can receive message ( the same size)  from 50
<br>
worker nodes. 
<br>
&nbsp;&nbsp;But, it cannot receive message from 51 nodes. It caused
<br>
&quot;truncate error&quot;.
<br>
<p>How big was the buffer that the program specified in the receive call? 
<br>
How big was the message that was sent?
<br>
<p><p><p>MPI_ERR_TRUNCATE means that you posted a receive with an application
<br>
buffer that turned out to be too small to hold the message that was
<br>
received.  It's a user application error that has nothing to do with
<br>
MPI's internal buffers.  MPI's internal buffers don't need to be big
<br>
enough to hold that message.  MPI could require the sender and receiver
<br>
to coordinate so that only part of the message is moved at a time.
<br>
<p><p>&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;I used the same buffer to get the message in 50 node case. 
<br>
&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;
<br>
&nbsp;&nbsp;About &quot;&quot;rendezvous&quot; protocol&quot;, what is the meaning of &quot;the
<br>
sender sends a short portion &quot;?
<br>
&nbsp;&nbsp;What is the &quot;short portion&quot;, is it a small mart of the message
<br>
of the sender ?
<br>
<p>It's at least the message header (communicator, tag, etc.) so that the
<br>
receiver can figure out if this is the expected message or not.  In
<br>
practice, there is probably also some data in there as well.  The
<br>
amount of that portion depends on the MPI implementation and, in
<br>
practice, the interconnect the message traveled over,
<br>
MPI-implementation-dependent environment variables set by the user,
<br>
etc.  E.g., with OMPI over shared memory by default it's about 4Kbytes
<br>
(if I remember correctly).
<br>
<p><p>&nbsp;&nbsp;This &quot;rendezvous&quot; protocol&quot; can work automatically in background
<br>
without programmer
<br>
&nbsp;&nbsp;indicates in his program ?
<br>
<p>Right.  MPI actually allows you to force such synchronization with
<br>
MPI_Ssend, but typically MPI implementations use it automatically for
<br>
&quot;plain&quot; long sends as well even if the user didn't not use MPI_Ssend.
<br>
<p><p>&nbsp;&nbsp;The &quot;acknowledgement &quot; can be generated by the receiver only
<br>
when the
<br>
&nbsp;&nbsp;corresponding mpi_irecv is posted by the receiver ? 
<br>
<p>Right.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. 
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13580/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13581.php">jody: "[OMPI users] hpw to log output of spawned processes"</a>
<li><strong>Previous message:</strong> <a href="13579.php">jody: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13578.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13585.php">jody: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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
