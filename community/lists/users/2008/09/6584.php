<?
$subject_val = "Re: [OMPI users] Odd MPI_Bcast behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 12:21:30 2008" -->
<!-- isoreceived="20080917162130" -->
<!-- sent="Wed, 17 Sep 2008 09:24:19 -0700" -->
<!-- isosent="20080917162419" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Odd MPI_Bcast behavior" -->
<!-- id="48D12F33.1060903_at_sun.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF6A8C071E.BF875778-ON852574C7.004F0EFA-852574C7.005007F5_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Odd MPI_Bcast behavior<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-17 12:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
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
I guess this must depend on what BTL you're using.&nbsp; If I run all
processes on the same node, I get the behavior you expect.&nbsp; So, are you
running processes on the same node, or different nodes and, if
different, via TCP or IB?<br>
<br>
Gregory D Abram wrote:
<blockquote
 cite="midOF6A8C071E.BF875778-ON852574C7.004F0EFA-852574C7.005007F5@us.ibm.com"
 type="cite">
  <p>I have a little program which initializes, calls MPI_Bcast, prints
a message, waits five seconds, and finalized. I sure thought that each
participating process would print the message immediately, then all
would wait and exit - thats what happens with mvapich 1.0.0. On OpenMPI
1.2.5, though, I get the message immediately from proc 0, then 5
seconds later, from proc 1, and then 5 seconds later, it exits- as if
MPI_Finalize on proc 0 flushed the MPI_Bcast. If I add a MPI_Barrier
after the MPI_Bcast, it works as I'd expect. Is this behavior correct?
If so, I so I have a bunch of code to change in order to work correctly
on OpenMPI.<br>
  <br>
  <font color="#604200" face="Monaco">#include </font><font
 color="#c21212" face="Monaco">&lt;stdlib.h&gt;</font><br>
  <font color="#604200" face="Monaco">#include </font><font
 color="#c21212" face="Monaco">&lt;stdio.h&gt;</font><br>
  <font color="#604200" face="Monaco">#include </font><font
 color="#c21212" face="Monaco">&lt;mpi.h&gt;</font><br>
  <br>
  <font face="Monaco">main(</font><font color="#a1009f" face="Monaco">int</font><font
 face="Monaco"> argc, </font><font color="#a1009f" face="Monaco">char</font><font
 face="Monaco"> *argv[])</font><br>
  <font face="Monaco">{</font><br>
  <font face="Monaco"> </font><font color="#a1009f" face="Monaco">char</font><font
 face="Monaco"> hostname[</font><font color="#0000e0" face="Monaco">256</font><font
 face="Monaco">]; </font><font color="#a1009f" face="Monaco">int</font><font
 face="Monaco"> r, s;</font><br>
  <font face="Monaco"> MPI_Init(&amp;argc, &amp;argv);</font><br>
  <br>
  <font face="Monaco"> gethostname(hostname, </font><font
 color="#a1009f" face="Monaco">sizeof</font><font face="Monaco">(hostname));</font><br>
  <br>
  <font face="Monaco"> MPI_Comm_rank(MPI_COMM_WORLD, &amp;r);</font><br>
  <font face="Monaco"> MPI_Comm_size(MPI_COMM_WORLD, &amp;s);</font><br>
  <br>
  <font face="Monaco"> fprintf(stderr, </font><font color="#c21212"
 face="Monaco">"%d of %d: %s\n"</font><font face="Monaco">, r, s,
hostname);</font><br>
  <br>
  <font face="Monaco"> </font><font color="#a1009f" face="Monaco">int</font><font
 face="Monaco"> i = </font><font color="#0000e0" face="Monaco">99999</font><font
 face="Monaco">;</font><br>
  <font face="Monaco"> MPI_Bcast(&amp;i, </font><font color="#a1009f"
 face="Monaco">sizeof</font><font face="Monaco">(i), MPI_UNSIGNED_CHAR,
  </font><font color="#0000e0" face="Monaco">0</font><font face="Monaco">,
MPI_COMM_WORLD);</font><br>
  <font face="Monaco"> </font><font color="#008000" face="Monaco">//
MPI_Barrier(MPI_COMM_WORLD);</font><br>
  <br>
  <font face="Monaco"> fprintf(stderr, </font><font color="#c21212"
 face="Monaco">"%d: got it\n"</font><font face="Monaco">, r);</font><br>
  <br>
  <font face="Monaco"> sleep(</font><font color="#0000e0" face="Monaco">5</font><font
 face="Monaco">);</font><br>
  <br>
  <font face="Monaco"> MPI_Finalize();</font><br>
  <font face="Monaco">}</font><br>
  </p>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6585.php">Jeff Squyres: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6583.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6577.php">Gregory D Abram: "[OMPI users] Odd MPI_Bcast behavior"</a>
<!-- nextthread="start" -->
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
