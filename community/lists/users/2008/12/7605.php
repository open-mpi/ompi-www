<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 25 08:06:22 2008" -->
<!-- isoreceived="20081225130622" -->
<!-- sent="Thu, 25 Dec 2008 08:06:16 -0500" -->
<!-- isosent="20081225130616" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="CAA3A61D-917F-4301-8963-2D61B8CE267F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9247a3360812241952i27909a8dtbb16a58f8a537888_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-25 08:06:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7603.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: you might want to take an MPI tutorial; they're really helpful  
<br>
for learning MPI's capabilities and how to use the primitives.  The  
<br>
NCSA has 2 excellent MPI tutorials (intro and advanced); they both  
<br>
require free registration:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://ci-tutor.ncsa.uiuc.edu/login.php">http://ci-tutor.ncsa.uiuc.edu/login.php</a>
<br>
<p><p>On Dec 24, 2008, at 10:52 PM, Win Than Aung wrote:
<br>
<p><span class="quotelev1">&gt; I got the solution. I just need to set the appropriate tag to send  
</span><br>
<span class="quotelev1">&gt; and receive.
</span><br>
<span class="quotelev1">&gt; sorry for asking
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; winthan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 24, 2008 at 10:36 PM, Win Than Aung &lt;keshunli_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; thanks Eugene for your example, it helps me a lot.
</span><br>
<span class="quotelev1">&gt; I bump into one more problems
</span><br>
<span class="quotelev1">&gt; lets say I have the file content as follow
</span><br>
<span class="quotelev1">&gt; I have total of six files which all contain real and imaginary value.
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121  //0th
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121  //1st
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121  //2nd
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121  //3rd
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121  //4th
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121 //5th
</span><br>
<span class="quotelev1">&gt; 1.001212     1.0012121 //6th
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; char send_buffer[1000];
</span><br>
<span class="quotelev1">&gt; i use &quot;mpirun -np 6 a.out&quot; which mean i let each processor get  
</span><br>
<span class="quotelev1">&gt; access to one file
</span><br>
<span class="quotelev1">&gt; each processor will add &quot;0th and 2nd&quot;(even values) (those values  
</span><br>
<span class="quotelev1">&gt; will be sent to root processor and save as file_even_add.dat&quot; and  
</span><br>
<span class="quotelev1">&gt; also each processor will add &quot;1st and 3rd&quot;(odd values) (those values  
</span><br>
<span class="quotelev1">&gt; will be sent to root processor(here is 0) and saved as  
</span><br>
<span class="quotelev1">&gt; &quot;file_odd_add.dat&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; char recv_buffer[1000];
</span><br>
<span class="quotelev1">&gt; File* file_even_dat;
</span><br>
<span class="quotelev1">&gt; File* file_odd_dat;
</span><br>
<span class="quotelev1">&gt; if(mpi_my_id == root)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    filepteven = fopen(&quot;C:\\fileeven.dat&quot;);
</span><br>
<span class="quotelev1">&gt;    fileptodd = fopen(&quot;C:\\fileodd.dat&quot;);
</span><br>
<span class="quotelev1">&gt;      int peer =0;
</span><br>
<span class="quotelev1">&gt;     for(peer =0;peer&lt;mpi_total_size;peer++)
</span><br>
<span class="quotelev1">&gt;    {
</span><br>
<span class="quotelev1">&gt;               if(peer!=root)
</span><br>
<span class="quotelev1">&gt;               {
</span><br>
<span class="quotelev1">&gt;                                 
</span><br>
<span class="quotelev1">&gt; MPI_Recv 
</span><br>
<span class="quotelev1">&gt; (recv_buffer,MAX_STR_LEN,MPI_BYTE,MPI_ANY_TAG,MPI_COMM_WORLD,&amp;status);
</span><br>
<span class="quotelev1">&gt;               }
</span><br>
<span class="quotelev1">&gt;               fprintf(filepteven, &quot;%s \n&quot; ,recv_buffer);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is how do i know which sentbuffer has even add values  
</span><br>
<span class="quotelev1">&gt; and which sentbuffer has odd add values? in which order did they get  
</span><br>
<span class="quotelev1">&gt; sent?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; winthan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2008 at 3:53 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Win Than Aung wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your reply jeff
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so i tried following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;  int np, me, sbuf = -1, rbuf = -2,mbuf=1000;
</span><br>
<span class="quotelev2">&gt;&gt; int data[2];
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;  if ( np &lt; 2 ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  if ( me == 1 ) MPI_Send(&amp;sbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; if(me==2) MPI_Send( &amp;mbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt; if ( me == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Recv(data,2,MPI_INT,MPI_ANY_SOURCE, 
</span><br>
<span class="quotelev2">&gt;&gt; 344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it can successfuly receive the one sent from processor 1(me==1) but  
</span><br>
<span class="quotelev2">&gt;&gt; it failed to receive the one sent from processor 2(me==2)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 3 hello
</span><br>
<span class="quotelev1">&gt; There is only one receive, so it receives only one message.  When  
</span><br>
<span class="quotelev1">&gt; you specify the element count for the receive, you're only  
</span><br>
<span class="quotelev1">&gt; specifying the size of the buffer into which the message will be  
</span><br>
<span class="quotelev1">&gt; received.  Only after the message has been received can you inquire  
</span><br>
<span class="quotelev1">&gt; how big the message actually was.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is an example:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   int np, me, peer, value;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   value = me * me + 1;
</span><br>
<span class="quotelev1">&gt;   if ( me == 0 ) {
</span><br>
<span class="quotelev1">&gt;     for ( peer = 0; peer &lt; np; peer++ ) {
</span><br>
<span class="quotelev1">&gt;       if ( peer != 0 ) MPI_Recv(&amp;value,1,MPI_INT,peer, 
</span><br>
<span class="quotelev1">&gt; 343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;       printf(&quot;peer %d had value %d\n&quot;, peer, value);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   else MPI_Send(&amp;value,1,MPI_INT,0,343,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % mpirun -np 3 a.out
</span><br>
<span class="quotelev1">&gt; peer 0 had value 1
</span><br>
<span class="quotelev1">&gt; peer 1 had value 2
</span><br>
<span class="quotelev1">&gt; peer 2 had value 5
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define MAXNP 1024
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   int np, me, peer, value, values[MAXNP];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;   if ( np &gt; MAXNP ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev1">&gt;   value = me * me + 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Gather(&amp;value, 1, MPI_INT,
</span><br>
<span class="quotelev1">&gt;              values, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( me == 0 )
</span><br>
<span class="quotelev1">&gt;     for ( peer = 0; peer &lt; np; peer++ )
</span><br>
<span class="quotelev1">&gt;       printf(&quot;peer %d had value %d\n&quot;, peer, values[peer]);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; % mpirun -np 3 a.out
</span><br>
<span class="quotelev1">&gt; peer 0 had value 1
</span><br>
<span class="quotelev1">&gt; peer 1 had value 2
</span><br>
<span class="quotelev1">&gt; peer 2 had value 5
</span><br>
<span class="quotelev1">&gt; %
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which is better?  Up to you.  The collective routines (like  
</span><br>
<span class="quotelev1">&gt; MPI_Gather) do offer MPI implementors (like people developing Open  
</span><br>
<span class="quotelev1">&gt; MPI) the opportunity to perform special optimizations (e.g., gather  
</span><br>
<span class="quotelev1">&gt; using a binary tree instead of having the root process perform so  
</span><br>
<span class="quotelev1">&gt; many receives).
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7606.php">Jeff Squyres: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Previous message:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7603.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
