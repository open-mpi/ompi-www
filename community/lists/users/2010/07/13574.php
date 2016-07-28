<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 23:21:53 2010" -->
<!-- isoreceived="20100711032153" -->
<!-- sent="Sat, 10 Jul 2010 20:21:48 -0700" -->
<!-- isosent="20100711032148" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="AANLkTinOk5kfrKWpc1m_NU-LRobvp1h3x5zS8I58WGsn_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w16D2D0D462A312DDAED282CBB70_at_phx.gbl" -->
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
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 23:21:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Previous message:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13576.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe what you are eluding to is &quot; what is the maximum temperary
<br>
holding buffer size created automatically by MPI&quot;. For that I don't
<br>
know the answer to, althogh I have sent data array of mpi_real8 of
<br>
size over 15000 with isend and irecv without problems.
<br>
<p>On 7/10/10, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; thanks for the program from Jody.
</span><br>
<span class="quotelev1">&gt; David indicated the question that I want to ask.
</span><br>
<span class="quotelev1">&gt; But, Jody's approach is ok when the MPI built-in buffer size is large enough
</span><br>
<span class="quotelev1">&gt; to hold the message such as 100kB in the buffer.
</span><br>
<span class="quotelev1">&gt; In asynchronous communication, when the sender posts a mpi_isend, the
</span><br>
<span class="quotelev1">&gt; message is put in a buffer provided by the MPI.
</span><br>
<span class="quotelev1">&gt; At this point, the receiver may still not post its corresponding mpi_irecv.
</span><br>
<span class="quotelev1">&gt; So, the buffer size is important here.
</span><br>
<span class="quotelev1">&gt; Without knowing the buffer size, I may get &quot; truncate error &quot; on Open MPI.
</span><br>
<span class="quotelev1">&gt; How to know the size of the buffer automatically created by Open MPI in the
</span><br>
<span class="quotelev1">&gt; background ?
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt; Jack,
</span><br>
<span class="quotelev1">&gt; July 10 2010
</span><br>
<span class="quotelev1">&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sat, 10 Jul 2010 16:46:12 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI how large its buffer size ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe his question is regarding when under non-blocking send/recv, how
</span><br>
<span class="quotelev1">&gt; does MPI know how much memory to allocate to receive the message, since the
</span><br>
<span class="quotelev1">&gt; size is determined AFTER the irecv is posted.  So if the send post isend,
</span><br>
<span class="quotelev1">&gt; but the receiver hasn't post irecv, what would the MPI do with the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe MPI would automatically create a buffer in the background to store
</span><br>
<span class="quotelev1">&gt; the message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 10, 2010 at 1:55 PM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps i misunderstand your question...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, it is the user's job to provide the buffers both to send and
</span><br>
<span class="quotelev1">&gt; receive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you call MPI_Recv, you must pass a buffer that is large enough to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hold the data sent by the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; corresponding MPI_Send. I.e., if you know your sender will send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; messages of 100kB,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then you must provide a buffer of size 100kB to the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the message size is unknown at compile time, you may have to send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; two messages:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; first an integer which tells the receiver how large a buffer it has to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; allocate, and then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the actual message (which then nicely fits into the freshly allocated
</span><br>
<span class="quotelev1">&gt; buffer)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;time.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define SENDER     1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define RECEIVER   0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define TAG_LEN   77
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define TAG_DATA  78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define MAX_MESSAGE 16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int num_procs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int *send_buf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int *recv_buf;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int send_message_size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int recv_message_size;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Status st;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     /* initialize random numbers */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     srand(time(NULL));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(MPI_COMM_WORLD, &amp;num_procs);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (rank == RECEIVER) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* the receiver */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* wait for message length */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(&amp;recv_message_size, 1, MPI_INT, SENDER, TAG_LEN,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* create a buffer of the required size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         recv_buf = (int*) malloc(recv_message_size*sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* get data */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Recv(recv_buf, recv_message_size, MPI_INT, SENDER,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TAG_DATA, MPI_COMM_WORLD, &amp;st);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Receiver got %d integers:&quot;, recv_message_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; recv_message_size; i++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot; %d&quot;, recv_buf[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* clean up */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(recv_buf);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     } else if (rank == SENDER) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* the sender */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* random message size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         send_message_size = (int)((1.0*MAX_MESSAGE*rand())/(1.0*RAND_MAX));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* create a buffer of the required size */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         send_buf = (int*) malloc(send_message_size*sizeof(int));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* create random message */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; send_message_size; i++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             send_buf[i] = rand();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Sender has %d integers:&quot;, send_message_size);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (i = 0; i &lt; send_message_size; i++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             printf(&quot; %d&quot;, send_buf[i]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* send message size to receiver */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Send(&amp;send_message_size,  1, MPI_INT, RECEIVER, TAG_LEN,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* now send messagge */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Send(send_buf, send_message_size, MPI_INT, RECEIVER,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TAG_DATA, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /* clean up */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         free(send_buf);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jul 10, 2010 at 7:12 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How to find the buffer size of OpenMPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I need to transfer large data between nodes on a cluster with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; 1.3.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many nodes need to send data to the same node .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Workers use mpi_isend, the receiver node use  mpi_irecv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; because they are non-blocking, the messages are stored in buffers of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; senders.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And then, the receiver collect messages from its buffer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If the receiver's buffer is too small, there will be truncate error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; July 9  2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hotmail is redefining busy with tools for the New Busy. Get more from your
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; inbox. See how.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;  		 	   		
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; Hotmail has tools for the New Busy. Search, chat and e-mail from your inbox.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_1</a>
</span><br>
<p><pre>
-- 
Sent from my mobile device
David Zhang
University of California, San Diego
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>Previous message:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>In reply to:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13576.php">Eugene Loh: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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
