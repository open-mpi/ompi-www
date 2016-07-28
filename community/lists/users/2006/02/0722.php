<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 10:48:29 2006" -->
<!-- isoreceived="20060228154829" -->
<!-- sent="Tue, 28 Feb 2006 16:48:25 +0100" -->
<!-- isosent="20060228154825" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="b0ce60610602280748q183ec45dw1bef1bb38165ed63_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="44046258.5030601_at_vertica.com" -->
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
<strong>From:</strong> Jose Pedro Garcia Mahedero (<em>jpgmahedero_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 10:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mmmh I don't understand you:
<br>
<p>My (slave) call is:
<br>
MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,    MPI_COMM_WORLD, &amp;status);
<br>
<p>And MPI_Recv signature is:
<br>
int MPI_Recv( void *buf, int count, MPI_Datatype datatype, int source, int
<br>
tag, MPI_Comm comm, MPI_Status *status )
<br>
<p>So:
<br>
void *buf -&gt; work
<br>
int count -&gt; 1
<br>
MPI_Datatype datatype -&gt; MPI_INT
<br>
int source -&gt; 0,
<br>
...
<br>
<p>I think I'm waiting to receive incoming messages from the master (source id
<br>
=0). In fact the only sender is the master and the only slave is the only
<br>
receiver. Maybe I'm doing something else wrong?
<br>
<p>Thank you
<br>
<p><p>On 2/28/06, John Robinson &lt;jr_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI_Recv is trying to receive from the slave(1), not the master (0).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jose Pedro Garcia Mahedero wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello everybody.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm new to MPI and I'm having some problems while runnig a simple
</span><br>
<span class="quotelev2">&gt; &gt; pingpong program in more than one node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1.- I followed all the instructions and installed open MPI without
</span><br>
<span class="quotelev2">&gt; &gt; problems in  a Beowulf cluster.
</span><br>
<span class="quotelev2">&gt; &gt; 2.-  Ths cluster is working OK and ssh keys are set for not password
</span><br>
<span class="quotelev2">&gt; &gt; prompting
</span><br>
<span class="quotelev2">&gt; &gt; 3.- miexec seems to run OK.
</span><br>
<span class="quotelev2">&gt; &gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong
</span><br>
<span class="quotelev2">&gt; &gt; application but my master only sends one request!!
</span><br>
<span class="quotelev2">&gt; &gt; 5.- I reduced the problem by trying to send just two mesages to the same
</span><br>
<span class="quotelev2">&gt; &gt; node:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char **argv){
</span><br>
<span class="quotelev2">&gt; &gt;   int myrank;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Initialize MPI */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   /* Find out my identity in the default communicator */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev2">&gt; &gt;   if (myrank == 0) {
</span><br>
<span class="quotelev2">&gt; &gt;     int work = 100;
</span><br>
<span class="quotelev2">&gt; &gt;     int count=0;
</span><br>
<span class="quotelev2">&gt; &gt;     for (int i =0; i &lt; 10; i++){
</span><br>
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;       sleep(3);
</span><br>
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work &lt;&lt;
</span><br>
<span class="quotelev1">&gt; endl;
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;   } else {
</span><br>
<span class="quotelev2">&gt; &gt;       int count =0;
</span><br>
<span class="quotelev2">&gt; &gt;       int work;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;       while (true){
</span><br>
<span class="quotelev2">&gt; &gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,    MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt; &quot;]:&quot;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt; work &lt;&lt;endl;
</span><br>
<span class="quotelev2">&gt; &gt;         if (status.MPI_TAG == DIETAG) {
</span><br>
<span class="quotelev2">&gt; &gt;           break;
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;     }// while
</span><br>
<span class="quotelev2">&gt; &gt;   }
</span><br>
<span class="quotelev2">&gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile), my
</span><br>
<span class="quotelev2">&gt; &gt; master sends the first message  and my slave receives it perfectly. But
</span><br>
<span class="quotelev2">&gt; &gt; my master doesnt send its second .
</span><br>
<span class="quotelev2">&gt; &gt; message:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here's my output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile), everything
</span><br>
<span class="quotelev2">&gt; &gt; is OK until iteration 9!!!
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[2]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[3]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[4]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[5]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[6]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[7]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[8]:100
</span><br>
<span class="quotelev2">&gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev2">&gt; &gt; MASTER AWAKE WILL SEND[9]:100
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know this is a lot of text, but I wanted to give a mamixum detailed
</span><br>
<span class="quotelev2">&gt; &gt; question. I've been search in FAQ, but still don't know what (and why)
</span><br>
<span class="quotelev2">&gt; &gt; is going on...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone can help please :-)  ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0722/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>In reply to:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0723.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
