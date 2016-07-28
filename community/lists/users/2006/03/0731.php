<?
$subject_val = "Re: [OMPI users] cannot mak a simple ping-pong";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  1 06:07:23 2006" -->
<!-- isoreceived="20060301110723" -->
<!-- sent="Wed, 1 Mar 2006 12:07:17 +0100" -->
<!-- isosent="20060301110717" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="b0ce60610603010307s697101c4jb583608cb05a7b46_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="07F7AAE2-EFF7-4243-9161-4D3B8F0D787F_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-03-01 06:07:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="../../2006/02/0728.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0736.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right, I'll try to use netpipes first and then the application.  If
<br>
it doesn't workt I'll send configs and more detailed informations
<br>
<p>Thank you!
<br>
<p>On 3/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jose -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I noticed that your output doesn't appear to match what the source
</span><br>
<span class="quotelev1">&gt; code is capable of generating.  It's possible that you're running
</span><br>
<span class="quotelev1">&gt; into problems with the code that we can't see because you didn't send
</span><br>
<span class="quotelev1">&gt; a complete version of the source code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to start by running some 3rd party codes that are
</span><br>
<span class="quotelev1">&gt; known to be good, just to make sure that your MPI installation checks
</span><br>
<span class="quotelev1">&gt; out.  A good start is NetPIPE, which runs between two peers and gives
</span><br>
<span class="quotelev1">&gt; latency / bandwidth information.  If that runs, then it's time to
</span><br>
<span class="quotelev1">&gt; look at your application.  If that doesn't run, then it's time to
</span><br>
<span class="quotelev1">&gt; look at the MPI installation in more detail.  In this case, it would
</span><br>
<span class="quotelev1">&gt; be useful to see all of the information requested here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as well as from running the mpirun command used to start NetPIPE with
</span><br>
<span class="quotelev1">&gt; the -d option, so something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    mpirun -np 2 -hostfile foo -d ./NPMpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 28, 2006, at 9:29 AM, Jose Pedro Garcia Mahedero wrote:
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev2">&gt; &gt; 2.-  Ths cluster is working OK and ssh keys are set for not
</span><br>
<span class="quotelev2">&gt; &gt; password prompting
</span><br>
<span class="quotelev2">&gt; &gt; 3.- miexec seems to run OK.
</span><br>
<span class="quotelev2">&gt; &gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong
</span><br>
<span class="quotelev2">&gt; &gt; application but my master only sends one request!!
</span><br>
<span class="quotelev2">&gt; &gt; 5.- I reduced the problem by trying to send just two mesages to the
</span><br>
<span class="quotelev2">&gt; &gt; same node:
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
<span class="quotelev2">&gt; &gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt; endl;
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
<span class="quotelev2">&gt; &gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;]:&quot; &lt;&lt; work &lt;&lt;endl;
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
<span class="quotelev2">&gt; &gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile),
</span><br>
<span class="quotelev2">&gt; &gt; my master sends the first message  and my slave receives it
</span><br>
<span class="quotelev2">&gt; &gt; perfectly. But my master doesnt send its second .
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
<span class="quotelev2">&gt; &gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile),
</span><br>
<span class="quotelev2">&gt; &gt; everything is OK until iteration 9!!!
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
<span class="quotelev2">&gt; &gt; I know this is a lot of text, but I wanted to give a mamixum
</span><br>
<span class="quotelev2">&gt; &gt; detailed question. I've been search in FAQ, but still don't know
</span><br>
<span class="quotelev2">&gt; &gt; what (and why) is going on...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone can help please :-)  ?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-0731/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="../../2006/02/0728.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0736.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0736.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
