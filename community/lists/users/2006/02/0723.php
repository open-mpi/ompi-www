<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 11:40:45 2006" -->
<!-- isoreceived="20060228164045" -->
<!-- sent="Tue, 28 Feb 2006 11:40:40 -0500" -->
<!-- isosent="20060228164040" -->
<!-- name="John Robinson" -->
<!-- email="jr_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="44047D08.6050607_at_vertica.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b0ce60610602280748q183ec45dw1bef1bb38165ed63_at_mail.gmail.com" -->
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
<strong>From:</strong> John Robinson (<em>jr_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 11:40:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Argh, sorry for the b/w misuse.  I think I got this wrong on my first 
<br>
test program too.
<br>
<p>Maybe output is stuck in the stdout buffers.  I don't see that the slave 
<br>
is ever going to exit (no DIETAG).
<br>
<p>Spoke before thinking,
<br>
/jr
<br>
<pre>
----
Jose Pedro Garcia Mahedero wrote:
&gt; 
&gt; Mmmh I don't understand you:
&gt; 
&gt; My (slave) call is:
&gt; MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,    MPI_COMM_WORLD, &amp;status);
&gt; 
&gt; And MPI_Recv signature is:
&gt; int MPI_Recv( void *buf, int count, MPI_Datatype datatype, int source, 
&gt; int tag, MPI_Comm comm, MPI_Status *status )
&gt; 
&gt; So:
&gt; void *buf -&gt; work
&gt; int count -&gt; 1
&gt; MPI_Datatype datatype -&gt; MPI_INT
&gt; int source -&gt; 0,
&gt; ...
&gt; 
&gt; I think I'm waiting to receive incoming messages from the master (source 
&gt; id =0). In fact the only sender is the master and the only slave is the 
&gt; only receiver. Maybe I'm doing something else wrong?
&gt; 
&gt; Thank you
&gt; 
&gt; 
&gt; On 2/28/06, *John Robinson* &lt;jr_at_[hidden] &lt;mailto:jr_at_[hidden]&gt;&gt; wrote:
&gt; 
&gt;     Your MPI_Recv is trying to receive from the slave(1), not the master
&gt;     (0).
&gt; 
&gt;     Jose Pedro Garcia Mahedero wrote:
&gt;      &gt; Hello everybody.
&gt;      &gt;
&gt;      &gt; I'm new to MPI and I'm having some problems while runnig a simple
&gt;      &gt; pingpong program in more than one node.
&gt;      &gt;
&gt;      &gt; 1.- I followed all the instructions and installed open MPI without
&gt;      &gt; problems in  a Beowulf cluster.
&gt;      &gt; 2.-  Ths cluster is working OK and ssh keys are set for not password
&gt;      &gt; prompting
&gt;      &gt; 3.- miexec seems to run OK.
&gt;      &gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong
&gt;      &gt; application but my master only sends one request!!
&gt;      &gt; 5.- I reduced the problem by trying to send just two mesages to
&gt;     the same
&gt;      &gt; node:
&gt;      &gt;
&gt;      &gt; int main(int argc, char **argv){
&gt;      &gt;   int myrank;
&gt;      &gt;
&gt;      &gt;   /* Initialize MPI */
&gt;      &gt;
&gt;      &gt;   MPI_Init(&amp;argc, &amp;argv);
&gt;      &gt;
&gt;      &gt;   /* Find out my identity in the default communicator */
&gt;      &gt;
&gt;      &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
&gt;      &gt;   if (myrank == 0) {
&gt;      &gt;     int work = 100;
&gt;      &gt;     int count=0;
&gt;      &gt;     for (int i =0; i &lt; 10; i++){
&gt;      &gt;       cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
&gt;      &gt;       sleep(3);
&gt;      &gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work
&gt;     &lt;&lt; endl;
&gt;      &gt;        MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
&gt;      &gt;     }
&gt;      &gt;   } else {
&gt;      &gt;       int count =0;
&gt;      &gt;       int work;
&gt;      &gt;       MPI_Status status;
&gt;      &gt;       while (true){
&gt;      &gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0,
&gt;     MPI_ANY_TAG,    MPI_COMM_WORLD,
&gt;      &gt; &amp;status);
&gt;      &gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++
&gt;     &lt;&lt; &quot;]:&quot;
&gt;      &gt; &lt;&lt; work &lt;&lt;endl;
&gt;      &gt;         if (status.MPI_TAG == DIETAG) {
&gt;      &gt;           break;
&gt;      &gt;         }
&gt;      &gt;     }// while
&gt;      &gt;   }
&gt;      &gt;   MPI_Finalize();
&gt;      &gt;
&gt;      &gt;
&gt;      &gt;
&gt;      &gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile), my
&gt;      &gt; master sends the first message  and my slave receives it
&gt;     perfectly. But
&gt;      &gt; my master doesnt send its second .
&gt;      &gt; message:
&gt;      &gt;
&gt;      &gt;
&gt;      &gt;
&gt;      &gt; Here's my output
&gt;      &gt;
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[0]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; MASTER AWAKE WILL SEND[1]:100
&gt;      &gt;
&gt;      &gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile),
&gt;     everything
&gt;      &gt; is OK until iteration 9!!!
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[0]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[1]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[2]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[3]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[4]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[5]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[6]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[7]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[8]:100
&gt;      &gt; MASTER IS SLEEPING...
&gt;      &gt; MASTER AWAKE WILL SEND[9]:100
&gt;      &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
&gt;      &gt; --------------------------------
&gt;      &gt;
&gt;      &gt; I know this is a lot of text, but I wanted to give a mamixum detailed
&gt;      &gt; question. I've been search in FAQ, but still don't know what (and
&gt;     why)
&gt;      &gt; is going on...
&gt;      &gt;
&gt;      &gt; Anyone can help please :-)  ?
&gt;      &gt;
&gt;      &gt;
&gt;      &gt;
&gt;     ------------------------------------------------------------------------
&gt;      &gt;
&gt;      &gt; _______________________________________________
&gt;      &gt; users mailing list
&gt;      &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;      &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
&gt; 
&gt; 
&gt; 
&gt; ------------------------------------------------------------------------
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0724.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation problem with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0722.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
