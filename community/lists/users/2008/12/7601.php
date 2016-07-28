<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 22:32:27 2008" -->
<!-- isoreceived="20081225033227" -->
<!-- sent="Wed, 24 Dec 2008 22:32:22 -0500" -->
<!-- isosent="20081225033222" -->
<!-- name="Win Than Aung" -->
<!-- email="keshunli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="9247a3360812241932n4a1d0761i9ebfe7a10a564315_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49514FD5.9050809_at_sun.com" -->
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
<strong>From:</strong> Win Than Aung (<em>keshunli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 22:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks Eugene for your example, it helps me a lot.I bump into one more
<br>
problems
<br>
lets say I have the file content as follow
<br>
I have total of six files which all contain real and imaginary value.
<br>
&quot;
<br>
1.001212     1.0012121  //0th
<br>
1.001212     1.0012121  //1st
<br>
1.001212     1.0012121  //2nd
<br>
1.001212     1.0012121  //3rd
<br>
1.001212     1.0012121  //4th
<br>
1.001212     1.0012121 //5th
<br>
1.001212     1.0012121 //6th
<br>
&quot;
<br>
char send_buffer[1000];
<br>
i use &quot;mpirun -np 6 a.out&quot; which mean i let each processor get access to one
<br>
file
<br>
each processor will add &quot;0th and 2nd&quot;(even values) (those values will be
<br>
sent to root processor and save as file_even_add.dat&quot; and also each
<br>
processor will add &quot;1st and 3rd&quot;(odd values) (those values will be sent to
<br>
root processor(here is 0) and saved as &quot;file_odd_add.dat&quot;.
<br>
<p>if(mpi_my_id == root)
<br>
{
<br>
<p>}
<br>
<p><p><p><p><p><p>On Tue, Dec 23, 2008 at 3:53 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Win Than Aung wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for your reply jeff
</span><br>
<span class="quotelev1">&gt;  so i tried following
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;  int np, me, sbuf = -1, rbuf = -2,mbuf=1000;
</span><br>
<span class="quotelev1">&gt; int data[2];
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
<span class="quotelev1">&gt; if(me==2) MPI_Send( &amp;mbuf,1,MPI_INT,0,344,MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; if ( me == 0 ) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Recv(data,2,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it can successfuly receive the one sent from processor 1(me==1) but it
</span><br>
<span class="quotelev1">&gt; failed to receive the one sent from processor 2(me==2)
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is only one receive, so it receives only one message.  When you
</span><br>
<span class="quotelev1">&gt; specify the element count for the receive, you're only specifying the size
</span><br>
<span class="quotelev1">&gt; of the buffer into which the message will be received.  Only after the
</span><br>
<span class="quotelev1">&gt; message has been received can you inquire how big the message actually was.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is an example:
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
<span class="quotelev1">&gt;       if ( peer != 0 )
</span><br>
<span class="quotelev1">&gt; MPI_Recv(&amp;value,1,MPI_INT,peer,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
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
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define MAXNP 1024
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;   int np, me, peer, value, values[MAXNP];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev1">&gt;   if ( np &gt; MAXNP ) MPI_Abort(MPI_COMM_WORLD,-1);
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
<span class="quotelev1">&gt; Which is better?  Up to you.  The collective routines (like MPI_Gather) do
</span><br>
<span class="quotelev1">&gt; offer MPI implementors (like people developing Open MPI) the opportunity to
</span><br>
<span class="quotelev1">&gt; perform special optimizations (e.g., gather using a binary tree instead of
</span><br>
<span class="quotelev1">&gt; having the root process perform so many receives).
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7588.php">Eugene Loh: "Re: [OMPI users] sending message to the source(0) from other	processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
