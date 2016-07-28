<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar  1 11:22:11 2006" -->
<!-- isoreceived="20060301162211" -->
<!-- sent="Wed, 1 Mar 2006 17:22:09 +0100" -->
<!-- isosent="20060301162209" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="b0ce60610603010822l10320539m7275ed29ab56a8d3_at_mail.gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b0ce60610603010307s697101c4jb583608cb05a7b46_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-03-01 11:22:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<li><strong>In reply to:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, it ALMOST works!!
<br>
<p>Now I've install MPI on a non clustered machine and it works, but
<br>
surprisingly, it works fine from machine OUT1 as master to machine CLUSTER1
<br>
as slave, but (here was my surprise) it doesn't work on the other sense! If
<br>
I run the same program with CLUSTER1 as master it only sends one message
<br>
from master to slave and blocks while sending the second message. Maybe it
<br>
is a firewall/iptable  problem.
<br>
<p>Does anybody know which ports does MPI use to send requests/responses ot how
<br>
to trace it? What I really don't understand is why it happens at the second
<br>
message and not the first one :-( I know my slave never finishes, but It is
<br>
not intended to right now, it will in a next version, but I think it is not
<br>
the main problem :-S
<br>
<p>I send an attachemtn with the (so simple) code and a tarball with my
<br>
config.log
<br>
<p>thaks
<br>
<p>On 3/1/06, Jose Pedro Garcia Mahedero &lt;jpgmahedero_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're right, I'll try to use netpipes first and then the application.  If
</span><br>
<span class="quotelev1">&gt; it doesn't workt I'll send configs and more detailed informations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jose -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I noticed that your output doesn't appear to match what the source
</span><br>
<span class="quotelev2">&gt; &gt; code is capable of generating.  It's possible that you're running
</span><br>
<span class="quotelev2">&gt; &gt; into problems with the code that we can't see because you didn't send
</span><br>
<span class="quotelev2">&gt; &gt; a complete version of the source code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You might want to start by running some 3rd party codes that are
</span><br>
<span class="quotelev2">&gt; &gt; known to be good, just to make sure that your MPI installation checks
</span><br>
<span class="quotelev2">&gt; &gt; out.  A good start is NetPIPE, which runs between two peers and gives
</span><br>
<span class="quotelev2">&gt; &gt; latency / bandwidth information.  If that runs, then it's time to
</span><br>
<span class="quotelev2">&gt; &gt; look at your application.  If that doesn't run, then it's time to
</span><br>
<span class="quotelev2">&gt; &gt; look at the MPI installation in more detail.  In this case, it would
</span><br>
<span class="quotelev2">&gt; &gt; be useful to see all of the information requested here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; as well as from running the mpirun command used to start NetPIPE with
</span><br>
<span class="quotelev2">&gt; &gt; the -d option, so something like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    mpirun -np 2 -hostfile foo -d ./NPMpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 28, 2006, at 9:29 AM, Jose Pedro Garcia Mahedero wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello everybody.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm new to MPI and I'm having some problems while runnig a simple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pingpong program in more than one node.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.- I followed all the instructions and installed open MPI without
</span><br>
<span class="quotelev3">&gt; &gt; &gt; problems in  a Beowulf cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2.-  Ths cluster is working OK and ssh keys are set for not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; password prompting
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3.- miexec seems to run OK.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong
</span><br>
<span class="quotelev3">&gt; &gt; &gt; application but my master only sends one request!!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 5.- I reduced the problem by trying to send just two mesages to the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; same node:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int main(int argc, char **argv){
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   int myrank;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   /* Initialize MPI */
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   /* Find out my identity in the default communicator */
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   if (myrank == 0) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int work = 100;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     int count=0;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     for (int i =0; i &lt; 10; i++){
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       sleep(3);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   } else {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       int count =0;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       int work;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       MPI_Status status;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;       while (true){
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;]:&quot; &lt;&lt; work &lt;&lt;endl;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         if (status.MPI_TAG == DIETAG) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt;           break;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;         }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     }// while
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my master sends the first message  and my slave receives it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; perfectly. But my master doesnt send its second .
</span><br>
<span class="quotelev3">&gt; &gt; &gt; message:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here's my output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; everything is OK until iteration 9!!!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[2]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[3]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[4]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[5]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[6]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[7]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[8]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MASTER AWAKE WILL SEND[9]:100
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I know this is a lot of text, but I wanted to give a mamixum
</span><br>
<span class="quotelev3">&gt; &gt; &gt; detailed question. I've been search in FAQ, but still don't know
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what (and why) is going on...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anyone can help please :-)  ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;    Open MPI developer
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0739/config.tgz">config.tgz</a>
</ul>
<!-- attachment="config.tgz" -->
<hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0739/one2one_varios.cpp">one2one_varios.cpp</a>
</ul>
<!-- attachment="one2one_varios.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0740.php">Michael Kluskens: "Re: [OMPI users] MPI_COMM_SPAWN f90 interface bug?"</a>
<li><strong>Previous message:</strong> <a href="0738.php">Benoit Semelin: "[OMPI users] mpif90 problem."</a>
<li><strong>In reply to:</strong> <a href="0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
