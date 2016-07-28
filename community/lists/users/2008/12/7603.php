<?
$subject_val = "Re: [OMPI users] sending message to the source(0) from other processors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 22:52:57 2008" -->
<!-- isoreceived="20081225035257" -->
<!-- sent="Wed, 24 Dec 2008 22:52:52 -0500" -->
<!-- isosent="20081225035252" -->
<!-- name="Win Than Aung" -->
<!-- email="keshunli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sending message to the source(0) from other processors" -->
<!-- id="9247a3360812241952i27909a8dtbb16a58f8a537888_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9247a3360812241936r45e36876x582205b601e525f1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-12-24 22:52:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I got the solution. I just need to set the appropriate tag to send and
<br>
receive.sorry for asking
<br>
thanks
<br>
winthan
<br>
<p>On Wed, Dec 24, 2008 at 10:36 PM, Win Than Aung &lt;keshunli_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; thanks Eugene for your example, it helps me a lot.I bump into one more
</span><br>
<span class="quotelev1">&gt; problems
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
<span class="quotelev1">&gt; i use &quot;mpirun -np 6 a.out&quot; which mean i let each processor get access to
</span><br>
<span class="quotelev1">&gt; one file
</span><br>
<span class="quotelev1">&gt; each processor will add &quot;0th and 2nd&quot;(even values) (those values will be
</span><br>
<span class="quotelev1">&gt; sent to root processor and save as file_even_add.dat&quot; and also each
</span><br>
<span class="quotelev1">&gt; processor will add &quot;1st and 3rd&quot;(odd values) (those values will be sent to
</span><br>
<span class="quotelev1">&gt; root processor(here is 0) and saved as &quot;file_odd_add.dat&quot;.
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
<span class="quotelev1">&gt; MPI_Recv(recv_buffer,MAX_STR_LEN,MPI_BYTE,MPI_ANY_TAG,MPI_COMM_WORLD,&amp;status);
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
<span class="quotelev1">&gt; My question is how do i know which sentbuffer has even add values and which
</span><br>
<span class="quotelev1">&gt; sentbuffer has odd add values? in which order did they get sent?
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; winthan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 23, 2008 at 3:53 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Win Than Aung wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your reply jeff
</span><br>
<span class="quotelev2">&gt;&gt;  so i tried following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  #include &lt;stdio.h&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv(data,2,MPI_INT,MPI_ANY_SOURCE,344,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
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
<span class="quotelev2">&gt;&gt; it can successfuly receive the one sent from processor 1(me==1) but it
</span><br>
<span class="quotelev2">&gt;&gt; failed to receive the one sent from processor 2(me==2)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 3 hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is only one receive, so it receives only one message.  When you
</span><br>
<span class="quotelev2">&gt;&gt; specify the element count for the receive, you're only specifying the size
</span><br>
<span class="quotelev2">&gt;&gt; of the buffer into which the message will be received.  Only after the
</span><br>
<span class="quotelev2">&gt;&gt; message has been received can you inquire how big the message actually was.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is an example:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % cat a.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   int np, me, peer, value;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   value = me * me + 1;
</span><br>
<span class="quotelev2">&gt;&gt;   if ( me == 0 ) {
</span><br>
<span class="quotelev2">&gt;&gt;     for ( peer = 0; peer &lt; np; peer++ ) {
</span><br>
<span class="quotelev2">&gt;&gt;       if ( peer != 0 )
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Recv(&amp;value,1,MPI_INT,peer,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;peer %d had value %d\n&quot;, peer, value);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   else MPI_Send(&amp;value,1,MPI_INT,0,343,MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 3 a.out
</span><br>
<span class="quotelev2">&gt;&gt; peer 0 had value 1
</span><br>
<span class="quotelev2">&gt;&gt; peer 1 had value 2
</span><br>
<span class="quotelev2">&gt;&gt; peer 2 had value 5
</span><br>
<span class="quotelev2">&gt;&gt; %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Alternatively,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #define MAXNP 1024
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv) {
</span><br>
<span class="quotelev2">&gt;&gt;   int np, me, peer, value, values[MAXNP];
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD,&amp;np);
</span><br>
<span class="quotelev2">&gt;&gt;   if ( np &gt; MAXNP ) MPI_Abort(MPI_COMM_WORLD,-1);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
</span><br>
<span class="quotelev2">&gt;&gt;   value = me * me + 1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Gather(&amp;value, 1, MPI_INT,
</span><br>
<span class="quotelev2">&gt;&gt;              values, 1, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   if ( me == 0 )
</span><br>
<span class="quotelev2">&gt;&gt;     for ( peer = 0; peer &lt; np; peer++ )
</span><br>
<span class="quotelev2">&gt;&gt;       printf(&quot;peer %d had value %d\n&quot;, peer, values[peer]);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 3 a.out
</span><br>
<span class="quotelev2">&gt;&gt; peer 0 had value 1
</span><br>
<span class="quotelev2">&gt;&gt; peer 1 had value 2
</span><br>
<span class="quotelev2">&gt;&gt; peer 2 had value 5
</span><br>
<span class="quotelev2">&gt;&gt; %
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which is better?  Up to you.  The collective routines (like MPI_Gather) do
</span><br>
<span class="quotelev2">&gt;&gt; offer MPI implementors (like people developing Open MPI) the opportunity to
</span><br>
<span class="quotelev2">&gt;&gt; perform special optimizations (e.g., gather using a binary tree instead of
</span><br>
<span class="quotelev2">&gt;&gt; having the root process perform so many receives).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7602.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Reply:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
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
