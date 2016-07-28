<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other	processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 15:49:54 2008" -->
<!-- isoreceived="20081223204954" -->
<!-- sent="Tue, 23 Dec 2008 12:53:41 -0800" -->
<!-- isosent="20081223205341" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other	processors" -->
<!-- id="49514FD5.9050809_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9247a3360812231156m795ae044u49749b69f9ca2926_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending message to the source(0) from other	processors<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 15:53:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
Win Than Aung wrote:
<blockquote
 cite="mid9247a3360812231156m795ae044u49749b69f9ca2926@mail.gmail.com"
 type="cite">thanks for your reply jeff
  <div><br>
  </div>
  <div>so i tried following</div>
  <div><br>
  </div>
  <div><br>
  </div>
  <div><br>
  </div>
  <div><span class="Apple-style-span" style="border-collapse: collapse;">#include
&lt;stdio.h&gt;<br>
#include &lt;mpi.h&gt;<br>
  <br>
int main(int argc, char **argv) {<br>
&nbsp;int np, me, sbuf = -1, rbuf = -2,mbuf=1000;<br>
int data[2];<br>
&nbsp;MPI_Init(&amp;argc,&amp;argv);<br>
&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;np);<br>
&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);<br>
&nbsp;if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);<br>
  <br>
&nbsp;if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);<br>
if(me==2) MPI_Send( &amp;mbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);</span></div>
  <div><span class="Apple-style-span" style="border-collapse: collapse;">if
( me == 0 ) {<br>
&nbsp;
MPI_Recv(data,2,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);<br>
&nbsp;}<br>
  </span></div>
  <div><span class="Apple-style-span" style="border-collapse: collapse;"><br>
&nbsp;MPI_Finalize();<br>
  <br>
&nbsp;return 0;<br>
}</span><br>
  </div>
  <div><br>
it can successfuly receive the one sent from processor 1(me==1) but it
failed to receive the one sent from processor 2(me==2)</div>
  <div>mpirun -np 3 hello</div>
</blockquote>
There is only one receive, so it receives only one message.&nbsp; When you
specify the element count for the receive, you're only specifying the
size of the buffer into which the message will be received.&nbsp; Only after
the message has been received can you inquire how big the message
actually was.<br>
<br>
Here is an example:<br>
<br>
% cat a.c<br>
#include &lt;stdio.h&gt;<br>
#include &lt;mpi.h&gt;<br>
<br>
int main(int argc, char **argv) {<br>
&nbsp; int np, me, peer, value;<br>
<br>
&nbsp; MPI_Init(&amp;argc,&amp;argv);<br>
&nbsp; MPI_Comm_size(MPI_COMM_WORLD,&amp;np);<br>
&nbsp; MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);<br>
<br>
&nbsp; value = me * me + 1;<br>
&nbsp; if ( me == 0 ) {<br>
&nbsp;&nbsp;&nbsp; for ( peer = 0; peer &lt; np; peer++ ) {<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if ( peer != 0 )
MPI_Recv(&amp;value,1,MPI_INT,peer,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("peer %d had value %d\n", peer, value);<br>
&nbsp;&nbsp;&nbsp; }<br>
&nbsp; }<br>
&nbsp; else MPI_Send(&amp;value,1,MPI_INT,0,343,MPI_COMM_WORLD);<br>
<br>
&nbsp; MPI_Finalize();<br>
<br>
&nbsp; return 0;<br>
}<br>
% mpirun -np 3 a.out<br>
peer 0 had value 1<br>
peer 1 had value 2<br>
peer 2 had value 5<br>
%<br>
<br>
Alternatively,<br>
<br>
#include &lt;stdio.h&gt;<br>
#include &lt;mpi.h&gt;<br>
<br>
#define MAXNP 1024<br>
int main(int argc, char **argv) {<br>
&nbsp; int np, me, peer, value, values[MAXNP];<br>
<br>
&nbsp; MPI_Init(&amp;argc,&amp;argv);<br>
&nbsp; MPI_Comm_size(MPI_COMM_WORLD,&amp;np);<br>
&nbsp; if ( np &gt; MAXNP ) MPI_Abort(MPI_COMM_WORLD,-1);<br>
&nbsp; MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);<br>
&nbsp; value = me * me + 1;<br>
<br>
&nbsp; MPI_Gather(&amp;value, 1, MPI_INT,<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; values, 1, MPI_INT, 0, MPI_COMM_WORLD);<br>
<br>
&nbsp; if ( me == 0 )<br>
&nbsp;&nbsp;&nbsp; for ( peer = 0; peer &lt; np; peer++ )<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; printf("peer %d had value %d\n", peer, values[peer]);<br>
<br>
&nbsp; MPI_Finalize();<br>
&nbsp; return 0;<br>
}<br>
% mpirun -np 3 a.out<br>
peer 0 had value 1<br>
peer 1 had value 2<br>
peer 2 had value 5<br>
%<br>
<br>
Which is better?&nbsp; Up to you.&nbsp; The collective routines (like MPI_Gather)
do offer MPI implementors (like people developing Open MPI) the
opportunity to perform special optimizations (e.g., gather using a
binary tree instead of having the root process perform so many
receives).<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
