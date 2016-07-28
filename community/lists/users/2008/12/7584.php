<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:14:51 2008" -->
<!-- isoreceived="20081223191451" -->
<!-- sent="Tue, 23 Dec 2008 14:14:45 -0500" -->
<!-- isosent="20081223191445" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="A774B5FB-0B3B-4406-8F43-95CB5A399D52_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9247a3360812231104o69ca79fcm1711035d8e010cc7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] sending message to the source(0) from other processors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 14:14:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the example you cite below, it looks like you're mixing MPI_Gather  
<br>
and MPI_Send.
<br>
<p>MPI_Gather is a &quot;collective&quot; routine; it must be called by all  
<br>
processes in the communicator.  All processes will send a buffer/ 
<br>
message to the root; only the root process will receive all the  
<br>
buffers/messages (note that even the root sends to itself).
<br>
<p>MPI_Send is a point-to-point function, meaning that it is paired with  
<br>
some flavor of MPI_Recv (there's a few different variants of MPI_Recv,  
<br>
like MPI_Irecv, which is a non-blocking receive).
<br>
<p>Eugene's example is a good one -- it shows point-to-point only.  It  
<br>
doesn't mix Gather and Recv.
<br>
<p><p>On Dec 23, 2008, at 2:04 PM, Win Than Aung wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     thanks for your reply. let's say i have 3 processors. I sent msg  
</span><br>
<span class="quotelev1">&gt; from 1st,2nd processors and want to gather in processor 0 processor.  
</span><br>
<span class="quotelev1">&gt; so i tried like following. it couldn't receive msg sent from  
</span><br>
<span class="quotelev1">&gt; processor 1 and 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.nomorepasting.com/getpaste.php?pasteid=22985">http://www.nomorepasting.com/getpaste.php?pasteid=22985</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: is MPI_Recv is better to receive msg from multiple processors  
</span><br>
<span class="quotelev1">&gt; and gather in 1 processor? or MPI_Gather is better?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; winthan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2008 at 1:23 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Win Than Aung wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(....) &lt;&lt; is it possible to receive the message sent from  
</span><br>
<span class="quotelev1">&gt; other sources? I tried MPI_ANY_SOURCE in place of source but it  
</span><br>
<span class="quotelev1">&gt; doesn't work out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes of course.  Can you send a short example of what doesn't work?   
</span><br>
<span class="quotelev1">&gt; The example should presumably be less than about 20 lines.  Here is  
</span><br>
<span class="quotelev1">&gt; an example that works:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % cat a.c
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  int np, me, sbuf = -1, rbuf = -2;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;  if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  if ( me == 0 ) {
</span><br>
<span class="quotelev1">&gt;   MPI_Recv(&amp;rbuf,1,MPI_INT,MPI_ANY_SOURCE, 
</span><br>
<span class="quotelev1">&gt; 344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;   if ( rbuf == sbuf ) printf(&quot;Send/Recv self passed\n&quot;);
</span><br>
<span class="quotelev1">&gt;   else                printf(&quot;Send/Recv self FAILED\n&quot;);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % mpicc a.c
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt; Send/Recv self passed
</span><br>
<span class="quotelev1">&gt; %
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7582.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7583.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
