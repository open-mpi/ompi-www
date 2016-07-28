<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 16:55:36 2010" -->
<!-- isoreceived="20100710205536" -->
<!-- sent="Sat, 10 Jul 2010 22:55:30 +0200" -->
<!-- isosent="20100710205530" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="AANLkTinuy4zLONCEPJrb3eWDgO5xMrsQNjXIsOBIPLvN_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w34E58F0A7467B5DF48B5CBCBB60_at_phx.gbl" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 16:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13565.php">Jack Bryan: "[OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perhaps i misunderstand your question...
<br>
Generally, it is the user's job to provide the buffers both to send and receive.
<br>
If you call MPI_Recv, you must pass a buffer that is large enough to
<br>
hold the data sent by the
<br>
corresponding MPI_Send. I.e., if you know your sender will send
<br>
messages of 100kB,
<br>
then you must provide a buffer of size 100kB to the receiver.
<br>
If the message size is unknown at compile time, you may have to send
<br>
two messages:
<br>
first an integer which tells the receiver how large a buffer it has to
<br>
allocate, and then
<br>
the actual message (which then nicely fits into the freshly allocated buffer)
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#include &lt;time.h&gt;
<br>
<p><p>#include &quot;mpi.h&quot;
<br>
<p>#define SENDER     1
<br>
#define RECEIVER   0
<br>
#define TAG_LEN   77
<br>
#define TAG_DATA  78
<br>
#define MAX_MESSAGE 16
<br>
<p>int main(int argc, char *argv[]) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int num_procs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *send_buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *recv_buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int send_message_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int recv_message_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status st;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* initialize random numbers */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;srand(time(NULL));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;num_procs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (rank == RECEIVER) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* the receiver */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for message length */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;recv_message_size, 1, MPI_INT, SENDER, TAG_LEN,
<br>
MPI_COMM_WORLD, &amp;st);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a buffer of the required size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recv_buf = (int*) malloc(recv_message_size*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* get data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(recv_buf, recv_message_size, MPI_INT, SENDER,
<br>
TAG_DATA, MPI_COMM_WORLD, &amp;st);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Receiver got %d integers:&quot;, recv_message_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; recv_message_size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, recv_buf[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* clean up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(recv_buf);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} else if (rank == SENDER) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* the sender */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* random message size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_message_size = (int)((1.0*MAX_MESSAGE*rand())/(1.0*RAND_MAX));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create a buffer of the required size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf = (int*) malloc(send_message_size*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* create random message */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; send_message_size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf[i] = rand();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sender has %d integers:&quot;, send_message_size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; send_message_size; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; %d&quot;, send_buf[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send message size to receiver */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;send_message_size,  1, MPI_INT, RECEIVER, TAG_LEN,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* now send messagge */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(send_buf, send_message_size, MPI_INT, RECEIVER,
<br>
TAG_DATA, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* clean up */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(send_buf);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>I hope this helps
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Sat, Jul 10, 2010 at 7:12 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear All:
</span><br>
<span class="quotelev1">&gt; How to find the buffer size of OpenMPI ?
</span><br>
<span class="quotelev1">&gt; I need to transfer large data between nodes on a cluster with OpenMPI 1.3.4.
</span><br>
<span class="quotelev1">&gt; Many nodes need to send data to the same node .
</span><br>
<span class="quotelev1">&gt; Workers use mpi_isend, the receiver node use&#160;&#160;mpi_irecv.
</span><br>
<span class="quotelev1">&gt; because they are non-blocking, the messages are stored in buffers of
</span><br>
<span class="quotelev1">&gt; senders.
</span><br>
<span class="quotelev1">&gt; And then, the receiver collect messages from its buffer.
</span><br>
<span class="quotelev1">&gt; If the receiver's buffer is too small, there will be truncate error.
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; July 9 &#160;2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev1">&gt; inbox. See how.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>In reply to:</strong> <a href="13565.php">Jack Bryan: "[OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13572.php">David Zhang: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13669.php">Anton Shterenlikht: "[OMPI users] do all processors have to execute MPI_Bcast?"</a>
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
