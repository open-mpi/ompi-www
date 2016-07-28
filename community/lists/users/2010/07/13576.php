<?
$subject_val = "Re: [OMPI users] OpenMPI how large its buffer size ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 10 23:39:08 2010" -->
<!-- isoreceived="20100711033908" -->
<!-- sent="Sat, 10 Jul 2010 20:41:26 -0700" -->
<!-- isosent="20100711034126" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI how large its buffer size ?" -->
<!-- id="4C393D66.8020200_at_oracle.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-10 23:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>In reply to:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
I hope I understand the question properly.<br>
<br>
The "truncate error" means that the receive buffer provided by the user
was too small to receive the designated message.&nbsp; That's an error in
the user code.<br>
<br>
You're asking about some buffering sizes within the MPI
implementation.&nbsp; We can talk about that, but it probably first makes
sense to clarify what MPI is doing.&nbsp; If a sender posts a large send and
the receiver has not posted a reply, the MPI implementation is not
required to move any data.&nbsp; In particular, most MPI implementations
will use a "rendezvous" protocol in which the sender sends a short
portion and then waits for an acknowledgement from the receiver that it
is ready to receive the message (and knows into which user buffer to
place the received data).&nbsp; This protocol is used so that the MPI
implementation does not have to buffer internally arbitrarily large
messages.<br>
<br>
So, if you post a large send but no receive, the MPI implementation is
probably buffering very little data.&nbsp; The message won't advance until
the receive has been posted.&nbsp; This means that a blocking MPI_Send will
wait and a nonblocking MPI_Isend will return without having done much.<br>
<br>
Jack Bryan wrote:
<blockquote cite="midSNT134-w16D2D0D462A312DDAED282CBB70@phx.gbl"
 type="cite">
  <style><!--
.hmmessage P
{
margin:0px;
padding:0px
}
body.hmmessage
{
font-size: 10pt;
font-family:Verdana
}
--></style>Hi,&nbsp;
  <div><br>
  </div>
  <div>thanks for the program from Jody.&nbsp;</div>
  <div><br>
  </div>
  <div>David indicated the question that I want to ask.&nbsp;</div>
  <div><br>
  </div>
  <div>But, Jody's approach is ok when the MPI built-in&nbsp;buffer&nbsp;size is
large enough to hold the&nbsp;</div>
  <div>message such as&nbsp;<span class="Apple-style-span"
 style="font-size: 13.3333px;">100kB in the buffer.&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;"><br>
  </span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">In
asynchronous communication, when the sender posts a mpi_isend, the
message is put in&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">a
buffer provided by the MPI.&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;"><br>
  </span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">At
this point, the receiver may still not post its&nbsp;corresponding
mpi_irecv. So, the buffer size is&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">important
here.&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;"><br>
  </span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">Without
knowing the buffer size, I may get " truncate error " on Open MPI.&nbsp;</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;"><br>
  </span></div>
  <div>How to know the&nbsp;<span class="Apple-style-span"
 style="font-size: 13.3333px;">size of the&nbsp;</span><span
 class="Apple-style-span" style="font-size: 13.3333px;">buffer&nbsp;</span><span
 class="Apple-style-span" style="font-size: 13.3333px;">automatically
created by Open MPI in the&nbsp;</span><span class="Apple-style-span"
 style="font-size: 13.3333px;">background ?</span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;"><br>
  </span></div>
  <div><span class="Apple-style-span" style="font-size: 13.3333px;">Any
help is&nbsp;appreciated.&nbsp;</span></div>
  <div><br>
Jack,</div>
  <div><br>
  </div>
  <div>July 10 2010</div>
  <div><br>
  <hr id="stopSpelling">From: <a class="moz-txt-link-abbreviated" href="mailto:solarbikedz@gmail.com">solarbikedz@gmail.com</a><br>
Date: Sat, 10 Jul 2010 16:46:12 -0700<br>
To: <a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a><br>
Subject: Re: [OMPI users] OpenMPI how large its buffer size ?<br>
  <br>
I believe his question is regarding when under non-blocking send/recv,
how does MPI know how much memory to allocate to receive the message,
since the size is determined AFTER the irecv is posted.&nbsp; So if the send
post isend, but the receiver hasn't post irecv, what would the MPI do
with the message.<br>
  <br>
I believe MPI would automatically create a buffer in the background to
store the message.<br>
  <br>
  <div class="ecxgmail_quote">On Sat, Jul 10, 2010 at 1:55 PM, jody <span
 dir="ltr">&lt;<a href="mailto:jody.xha@gmail.com">jody.xha@gmail.com</a>&gt;</span>
wrote:<br>
  <blockquote class="ecxgmail_quote" style="padding-left: 1ex;">Perhaps
i misunderstand your question...<br>
Generally, it is the user's job to provide the buffers both to send and
receive.<br>
If you call MPI_Recv, you must pass a buffer that is large enough to<br>
hold the data sent by the<br>
corresponding MPI_Send. I.e., if you know your sender will send<br>
messages of 100kB,<br>
then you must provide a buffer of size 100kB to the receiver.<br>
If the message size is unknown at compile time, you may have to send<br>
two messages:<br>
first an integer which tells the receiver how large a buffer it has to<br>
allocate, and then<br>
the actual message (which then nicely fits into the freshly allocated
buffer)<br>
    <br>
#include &lt;stdio.h&gt;<br>
#include &lt;stdlib.h&gt;<br>
    <br>
#include &lt;time.h&gt;<br>
    <br>
    <br>
#include "mpi.h"<br>
    <br>
#define SENDER &nbsp; &nbsp; 1<br>
#define RECEIVER &nbsp; 0<br>
#define TAG_LEN &nbsp; 77<br>
#define TAG_DATA &nbsp;78<br>
#define MAX_MESSAGE 16<br>
    <br>
int main(int argc, char *argv[]) {<br>
    <br>
&nbsp; &nbsp;int num_procs;<br>
&nbsp; &nbsp;int rank;<br>
&nbsp; &nbsp;int *send_buf;<br>
&nbsp; &nbsp;int *recv_buf;<br>
&nbsp; &nbsp;int send_message_size;<br>
&nbsp; &nbsp;int recv_message_size;<br>
&nbsp; &nbsp;MPI_Status st;<br>
&nbsp; &nbsp;int i;<br>
    <br>
&nbsp; &nbsp;/* initialize random numbers */<br>
&nbsp; &nbsp;srand(time(NULL));<br>
&nbsp; &nbsp;MPI_Init(&amp;argc, &amp;argv);<br>
&nbsp; &nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;num_procs);<br>
&nbsp; &nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);<br>
    <br>
&nbsp; &nbsp;if (rank == RECEIVER) {<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* the receiver */<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* wait for message length */<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Recv(&amp;recv_message_size, 1, MPI_INT, SENDER, TAG_LEN,<br>
MPI_COMM_WORLD, &amp;st);<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* create a buffer of the required size */<br>
&nbsp; &nbsp; &nbsp; &nbsp;recv_buf = (int*) malloc(recv_message_size*sizeof(int));<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* get data */<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Recv(recv_buf, recv_message_size, MPI_INT, SENDER,<br>
TAG_DATA, MPI_COMM_WORLD, &amp;st);<br>
    <br>
&nbsp; &nbsp; &nbsp; &nbsp;printf("Receiver got %d integers:", recv_message_size);<br>
&nbsp; &nbsp; &nbsp; &nbsp;for (i = 0; i &lt; recv_message_size; i++) {<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;printf(" %d", recv_buf[i]);<br>
&nbsp; &nbsp; &nbsp; &nbsp;}<br>
&nbsp; &nbsp; &nbsp; &nbsp;printf("\n");<br>
    <br>
&nbsp; &nbsp; &nbsp; &nbsp;/* clean up */<br>
&nbsp; &nbsp; &nbsp; &nbsp;free(recv_buf);<br>
    <br>
&nbsp; &nbsp;} else if (rank == SENDER) {<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* the sender */<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* random message size */<br>
&nbsp; &nbsp; &nbsp; &nbsp;send_message_size =
(int)((1.0*MAX_MESSAGE*rand())/(1.0*RAND_MAX));<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* create a buffer of the required size */<br>
&nbsp; &nbsp; &nbsp; &nbsp;send_buf = (int*) malloc(send_message_size*sizeof(int));<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* create random message */<br>
&nbsp; &nbsp; &nbsp; &nbsp;for (i = 0; i &lt; send_message_size; i++) {<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;send_buf[i] = rand();<br>
&nbsp; &nbsp; &nbsp; &nbsp;}<br>
    <br>
&nbsp; &nbsp; &nbsp; &nbsp;printf("Sender has %d integers:", send_message_size);<br>
&nbsp; &nbsp; &nbsp; &nbsp;for (i = 0; i &lt; send_message_size; i++) {<br>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;printf(" %d", send_buf[i]);<br>
&nbsp; &nbsp; &nbsp; &nbsp;}<br>
&nbsp; &nbsp; &nbsp; &nbsp;printf("\n");<br>
    <br>
&nbsp; &nbsp; &nbsp; &nbsp;/* send message size to receiver */<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Send(&amp;send_message_size, &nbsp;1, MPI_INT, RECEIVER, TAG_LEN,<br>
MPI_COMM_WORLD);<br>
&nbsp; &nbsp; &nbsp; &nbsp;/* now send messagge */<br>
&nbsp; &nbsp; &nbsp; &nbsp;MPI_Send(send_buf, send_message_size, MPI_INT, RECEIVER,<br>
TAG_DATA, MPI_COMM_WORLD);<br>
    <br>
&nbsp; &nbsp; &nbsp; &nbsp;/* clean up */<br>
&nbsp; &nbsp; &nbsp; &nbsp;free(send_buf);<br>
    <br>
&nbsp; &nbsp;}<br>
    <br>
&nbsp; &nbsp;MPI_Finalize();<br>
}<br>
    <br>
I hope this helps<br>
&nbsp;Jody<br>
    <div>
    <div class="h5"><br>
    <br>
On Sat, Jul 10, 2010 at 7:12 AM, Jack Bryan &lt;<a
 href="mailto:dtustudy68@hotmail.com">dtustudy68@hotmail.com</a>&gt;
wrote:<br>
&gt; Dear All:<br>
&gt; How to find the buffer size of OpenMPI ?<br>
&gt; I need to transfer large data between nodes on a cluster with
OpenMPI 1.3.4.<br>
&gt; Many nodes need to send data to the same node .<br>
&gt; Workers use mpi_isend, the receiver node use&nbsp;&nbsp;mpi_irecv.<br>
&gt; because they are non-blocking, the messages are stored in buffers
of<br>
&gt; senders.<br>
&gt; And then, the receiver collect messages from its buffer.<br>
&gt; If the receiver's buffer is too small, there will be truncate
error.<br>
&gt; Any help is appreciated.<br>
    </div>
    </div>
  </blockquote>
  </div>
  </div>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Previous message:</strong> <a href="13575.php">Harchand M V: "Re: [OMPI users] mpirun hang up randomly"</a>
<li><strong>In reply to:</strong> <a href="13573.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
<li><strong>Reply:</strong> <a href="13577.php">Jack Bryan: "Re: [OMPI users] OpenMPI how large its buffer size ?"</a>
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
