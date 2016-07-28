<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 22:19:06 2010" -->
<!-- isoreceived="20100711021906" -->
<!-- sent="Sat, 10 Jul 2010 20:19:01 -0600" -->
<!-- isosent="20100711021901" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="SNT134-w16D2D0D462A312DDAED282CBB70_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTikbt_Ivqy3-x19WJN8Vefm5d8brBwURvnS1NzWB_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-07-10 22:19:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13576.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
thanks for the program from Jody. 
<br>
David indicated the question that I want to ask. 
<br>
But, Jody's approach is ok when the MPI built-in buffer size is large enough to hold the message such as 100kB in the buffer. 
<br>
In asynchronous communication, when the sender posts a mpi_isend, the message is put in a buffer provided by the MPI. 
<br>
At this point, the receiver may still not post its corresponding mpi_irecv. So, the buffer size is important here. 
<br>
Without knowing the buffer size, I may get &quot; truncate error &quot; on Open MPI. 
<br>
How to know the size of the buffer automatically created by Open MPI in the background ?
<br>
Any help is appreciated. 
<br>
Jack,
<br>
July 10 2010
<br>
From: solarbikedz_at_[hidden]
<br>
Date: Sat, 10 Jul 2010 16:46:12 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] OpenMPI how large its buffer size ?
<br>
<p>I believe his question is regarding when under non-blocking send/recv, how does MPI know how much memory to allocate to receive the message, since the size is determined AFTER the irecv is posted.  So if the send post isend, but the receiver hasn't post irecv, what would the MPI do with the message.
<br>
<p><p><p>I believe MPI would automatically create a buffer in the background to store the message.
<br>
<p>On Sat, Jul 10, 2010 at 1:55 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><p>Perhaps i misunderstand your question...
<br>
<p>Generally, it is the user's job to provide the buffers both to send and receive.
<br>
<p>If you call MPI_Recv, you must pass a buffer that is large enough to
<br>
<p>hold the data sent by the
<br>
<p>corresponding MPI_Send. I.e., if you know your sender will send
<br>
<p>messages of 100kB,
<br>
<p>then you must provide a buffer of size 100kB to the receiver.
<br>
<p>If the message size is unknown at compile time, you may have to send
<br>
<p>two messages:
<br>
<p>first an integer which tells the receiver how large a buffer it has to
<br>
<p>allocate, and then
<br>
<p>the actual message (which then nicely fits into the freshly allocated buffer)
<br>
<p><p><p>#include &lt;stdio.h&gt;
<br>
<p>#include &lt;stdlib.h&gt;
<br>
<p><p><p>#include &lt;time.h&gt;
<br>
<p><p><p><p><p>#include &quot;mpi.h&quot;
<br>
<p><p><p>#define SENDER     1
<br>
<p>#define RECEIVER   0
<br>
<p>#define TAG_LEN   77
<br>
<p>#define TAG_DATA  78
<br>
<p>#define MAX_MESSAGE 16
<br>
<p><p><p>int main(int argc, char *argv[]) {
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;int num_procs;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int *send_buf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int *recv_buf;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int send_message_size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int recv_message_size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status st;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;/* initialize random numbers */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;srand(time(NULL));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;num_procs);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == RECEIVER) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* the receiver */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for message length */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;recv_message_size, 1, MPI_INT, SENDER, TAG_LEN,
<br>
<p>MPI_COMM_WORLD, &amp;st);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a buffer of the required size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv_buf = (int*) malloc(recv_message_size*sizeof(int));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get data */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(recv_buf, recv_message_size, MPI_INT, SENDER,
<br>
<p>TAG_DATA, MPI_COMM_WORLD, &amp;st);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Receiver got %d integers:&quot;, recv_message_size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; recv_message_size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, recv_buf[i]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* clean up */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(recv_buf);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;} else if (rank == SENDER) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* the sender */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* random message size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_message_size = (int)((1.0*MAX_MESSAGE*rand())/(1.0*RAND_MAX));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a buffer of the required size */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf = (int*) malloc(send_message_size*sizeof(int));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create random message */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; send_message_size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf[i] = rand();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sender has %d integers:&quot;, send_message_size);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; send_message_size; i++) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, send_buf[i]);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send message size to receiver */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;send_message_size,  1, MPI_INT, RECEIVER, TAG_LEN,
<br>
<p>MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* now send messagge */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(send_buf, send_message_size, MPI_INT, RECEIVER,
<br>
<p>TAG_DATA, MPI_COMM_WORLD);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* clean up */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(send_buf);
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>}
<br>
<p><p><p>I hope this helps
<br>
<p>&nbsp;&nbsp;Jody
<br>
<p><p><p><p><p>On Sat, Jul 10, 2010 at 7:12 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All:
</span><br>
<p><span class="quotelev1">&gt; How to find the buffer size of OpenMPI ?
</span><br>
<p><span class="quotelev1">&gt; I need to transfer large data between nodes on a cluster with OpenMPI 1.3.4.
</span><br>
<p><span class="quotelev1">&gt; Many nodes need to send data to the same node .
</span><br>
<p><span class="quotelev1">&gt; Workers use mpi_isend, the receiver node use  mpi_irecv.
</span><br>
<p><span class="quotelev1">&gt; because they are non-blocking, the messages are stored in buffers of
</span><br>
<p><span class="quotelev1">&gt; senders.
</span><br>
<p><span class="quotelev1">&gt; And then, the receiver collect messages from its buffer.
</span><br>
<p><span class="quotelev1">&gt; If the receiver's buffer is too small, there will be truncate error.
</span><br>
<p><span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<p><span class="quotelev1">&gt; Jack
</span><br>
<p><span class="quotelev1">&gt; July 9  2010
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; ________________________________
</span><br>
<p><span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<p><span class="quotelev1">&gt; inbox. See how.
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<p><span class="quotelev1">&gt; users mailing list
</span><br>
<p><span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
 		 	   		  
_________________________________________________________________
Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13573/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13574.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13576.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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
