<?
$subject_val = "Re: [OMPI users] Memory leak in my code";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 10:33:21 2009" -->
<!-- isoreceived="20090226153321" -->
<!-- sent="Thu, 26 Feb 2009 07:32:40 -0800" -->
<!-- isosent="20090226153240" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory leak in my code" -->
<!-- id="49A6B618.5020006_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="290882.75340.qm_at_web27101.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Memory leak in my code<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-26 10:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
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
Mark Allan wrote:
<blockquote cite="mid290882.75340.qm@web27101.mail.ukl.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">
        <div id="yiv1252175949">Dear all,<br>
        <br>
With this simple code I find I am getting a memory leak when I run on 2
processors.&nbsp; Can anyone advise why?<br>
        <br>
I'm fairly new to MPI (have only done very simple things in the past).&nbsp;
I'm trying to do a non-blocking send/recv (from any proc to any proc)
but the receiving processor doesn't know how much data it is going to
be sent, hence the the blocking recv of the size in order to allocate
the buffer.&nbsp; Is there a better way of doing this?<br>
        <br>
Thanks,<br>
        <br>
Mark<br>
        <br>
#include &lt;mpi.h&gt;<br>
        <br>
MPI_Request<br>
nonBlockingSend(int *t, int size, const int tag, const int
destinationRank)<br>
{<br>
&nbsp;&nbsp;&nbsp; MPI_Request request1;<br>
&nbsp;&nbsp;&nbsp;
MPI_Isend(&amp;size,1,MPI_INT,destinationRank,0,MPI_COMM_WORLD,&amp;request1);<br>
        </div>
        </td>
      </tr>
    </tbody>
  </table>
</blockquote>
After this non-blocking send, you need an MPI call to complete the
operation.&nbsp; So, you're launching a bunch of non-blocking sends without
completing them.<br>
<br>
Another approach is to use MPI_Probe on the receive side.&nbsp; You can then
just send a message (without first sending its size).&nbsp; On the receive
side, you MPI_Probe the message first to get its size, then allocate
the buffer, and then MPI_Recv that same message into the allocated
buffer.<br>
<blockquote cite="mid290882.75340.qm@web27101.mail.ukl.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">
        <div id="yiv1252175949">&nbsp;&nbsp;&nbsp; MPI_Request request;<br>
&nbsp;&nbsp;&nbsp;
MPI_Isend(t,size,MPI_INT,destinationRank,tag,MPI_COMM_WORLD,&amp;request);<br>
&nbsp;&nbsp;&nbsp; return request;<br>
}<br>
        <br>
MPI_Request<br>
nonBlockingRecv(int *&amp;t, int &amp;size, const int tag, const int
senderRank)<br>
{<br>
&nbsp;&nbsp;&nbsp; MPI_Status s1;<br>
&nbsp;&nbsp;&nbsp; MPI_Recv(&amp;size,1,MPI_INT,senderRank,0,MPI_COMM_WORLD,&amp;s1);<br>
&nbsp;&nbsp;&nbsp; t = (int *) malloc(size*sizeof(int));<br>
&nbsp;&nbsp;&nbsp; MPI_Request request;<br>
&nbsp;&nbsp;&nbsp;
MPI_Irecv(t,size,MPI_INT,senderRank,tag,MPI_COMM_WORLD,&amp;request);<br>
&nbsp;&nbsp;&nbsp; return request;<br>
}<br>
        <br>
void<br>
communicationComplete(MPI_Request &amp;r)<br>
{<br>
&nbsp;&nbsp;&nbsp; MPI_Status status;<br>
&nbsp;&nbsp;&nbsp; MPI_Wait(&amp;r,&amp;status);<br>
}<br>
        <br>
void<br>
barrier()<br>
{<br>
&nbsp;&nbsp;&nbsp; MPI_Barrier(MPI_COMM_WORLD);<br>
}<br>
        <br>
int main(int argc, char *argv[])<br>
{<br>
&nbsp;&nbsp;&nbsp; MPI_Init(&amp;argc,&amp;argv);<br>
&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp; int numProcs,rank;<br>
&nbsp;&nbsp;&nbsp; MPI_Comm_size(MPI_COMM_WORLD,&amp;numProcs);<br>
&nbsp;&nbsp;&nbsp; MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);<br>
        <br>
&nbsp;&nbsp;&nbsp; int numIts = 10000000;<br>
&nbsp;&nbsp;&nbsp; int bufSize = 10;<br>
        <br>
&nbsp;&nbsp;&nbsp; // Setup send buffers<br>
&nbsp;&nbsp;&nbsp; int *sendData = (int *) malloc(bufSize*sizeof(int));<br>
&nbsp;&nbsp;&nbsp; for(int i=0;i&lt;bufSize;i++)<br>
&nbsp;&nbsp;&nbsp; sendData[i] = i;<br>
&nbsp;&nbsp;&nbsp; <br>
&nbsp;&nbsp;&nbsp; // Perform send and recvs<br>
&nbsp;&nbsp;&nbsp; for(int i=0;i&lt;numIts;i++)<br>
&nbsp;&nbsp;&nbsp; {<br>
&nbsp;&nbsp;&nbsp; if(rank==0)<br>
&nbsp;&nbsp;&nbsp; {<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; for(int proc = 1; proc&lt;numProcs;proc++)<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; {<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; MPI_Request r = nonBlockingSend(sendData,bufSize,proc,proc);<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; communicationComplete(r);<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; }<br>
&nbsp;&nbsp;&nbsp; }<br>
&nbsp;&nbsp;&nbsp; else<br>
&nbsp;&nbsp;&nbsp; {<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; int *recvData;<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; int size;<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; MPI_Request r = nonBlockingRecv(recvData,size,rank,0);<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; communicationComplete(r);<br>
&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; free(recvData);<br>
&nbsp;&nbsp;&nbsp; }<br>
&nbsp;&nbsp;&nbsp; barrier();<br>
&nbsp;&nbsp;&nbsp; }<br>
&nbsp;&nbsp;&nbsp; free(sendData);<br>
        <br>
&nbsp;&nbsp;&nbsp; MPI_Finalize();<br>
        <br>
&nbsp;&nbsp;&nbsp; return 1;<br>
}<br>
        <br>
        </div>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <pre wrap="">
<hr size="4" width="90%">
_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
<a class="moz-txt-link-freetext" href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
  </pre>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
<li><strong>Previous message:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<li><strong>In reply to:</strong> <a href="8214.php">Mark Allan: "[OMPI users] Memory leak in my code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8216.php">doriankrause: "Re: [OMPI users] Memory leak in my code"</a>
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
