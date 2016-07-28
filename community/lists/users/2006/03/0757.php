<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 13:28:08 2006" -->
<!-- isoreceived="20060302182808" -->
<!-- sent="Thu, 2 Mar 2006 19:28:02 +0100" -->
<!-- isosent="20060302182802" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="b0ce60610603021028s1c99dc0cpdbbba3dfdafbabd_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="b0ce60610603010822l10320539m7275ed29ab56a8d3_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-03-02 13:28:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Ralph Castain: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally it was a network problem. I had to disable  one network interface in
<br>
the master node of the cluster by setting
<br>
btl_tcp_if_include = eth1 on file /usr/local/etc/openmpi-mca-params.conf
<br>
<p>thank you all for your help.
<br>
<p>Jose Pedro
<br>
On 3/1/06, Jose Pedro Garcia Mahedero &lt;jpgmahedero_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, it ALMOST works!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I've install MPI on a non clustered machine and it works, but
</span><br>
<span class="quotelev1">&gt; surprisingly, it works fine from machine OUT1 as master to machine CLUSTER1
</span><br>
<span class="quotelev1">&gt; as slave, but (here was my surprise) it doesn't work on the other sense! If
</span><br>
<span class="quotelev1">&gt; I run the same program with CLUSTER1 as master it only sends one message
</span><br>
<span class="quotelev1">&gt; from master to slave and blocks while sending the second message. Maybe it
</span><br>
<span class="quotelev1">&gt; is a firewall/iptable  problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody know which ports does MPI use to send requests/responses ot
</span><br>
<span class="quotelev1">&gt; how to trace it? What I really don't understand is why it happens at the
</span><br>
<span class="quotelev1">&gt; second message and not the first one :-( I know my slave never finishes, but
</span><br>
<span class="quotelev1">&gt; It is not intended to right now, it will in a next version, but I think it
</span><br>
<span class="quotelev1">&gt; is not the main problem :-S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I send an attachemtn with the (so simple) code and a tarball with my
</span><br>
<span class="quotelev1">&gt; config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thaks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/06, Jose Pedro Garcia Mahedero &lt; jpgmahedero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You're right, I'll try to use netpipes first and then the application.
</span><br>
<span class="quotelev2">&gt; &gt; If it doesn't workt I'll send configs and more detailed informations
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 3/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jose -
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I noticed that your output doesn't appear to match what the source
</span><br>
<span class="quotelev3">&gt; &gt; &gt; code is capable of generating.  It's possible that you're running
</span><br>
<span class="quotelev3">&gt; &gt; &gt; into problems with the code that we can't see because you didn't send
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a complete version of the source code.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; You might want to start by running some 3rd party codes that are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; known to be good, just to make sure that your MPI installation checks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; out.  A good start is NetPIPE, which runs between two peers and gives
</span><br>
<span class="quotelev3">&gt; &gt; &gt; latency / bandwidth information.  If that runs, then it's time to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; look at your application.  If that doesn't run, then it's time to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; look at the MPI installation in more detail.  In this case, it would
</span><br>
<span class="quotelev3">&gt; &gt; &gt; be useful to see all of the information requested here:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; as well as from running the mpirun command used to start NetPIPE with
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the -d option, so something like:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    mpirun -np 2 -hostfile foo -d ./NPMpi
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Brian
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 28, 2006, at 9:29 AM, Jose Pedro Garcia Mahedero wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello everybody.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm new to MPI and I'm having some problems while runnig a simple
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; pingpong program in more than one node.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 1.- I followed all the instructions and installed open MPI without
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; problems in  a Beowulf cluster.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 2.-  Ths cluster is working OK and ssh keys are set for not
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; password prompting
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 3.- miexec seems to run OK.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; application but my master only sends one request!!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 5.- I reduced the problem by trying to send just two mesages to the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; same node:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int main(int argc, char **argv){
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   int myrank;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   /* Initialize MPI */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   /* Find out my identity in the default communicator */
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   if (myrank == 0) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     int work = 100;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     int count=0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     for (int i =0; i &lt; 10; i++){
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       sleep(3);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;&lt; endl;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   } else {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       int count =0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       int work;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       MPI_Status status;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       while (true){
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &quot;]:&quot; &lt;&lt; work &lt;&lt;endl;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         if (status.MPI_TAG == DIETAG) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;           break;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }// while
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; my master sends the first message  and my slave receives it
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; perfectly. But my master doesnt send its second .
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; message:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Here's my output
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; everything is OK until iteration 9!!!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[2]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[3]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[4]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[5]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[6]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[7]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[8]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MASTER AWAKE WILL SEND[9]:100
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I know this is a lot of text, but I wanted to give a mamixum
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; detailed question. I've been search in FAQ, but still don't know
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; what (and why) is going on...
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Anyone can help please :-)  ?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    Open MPI developer
</span><br>
<span class="quotelev3">&gt; &gt; &gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
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
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0757/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0758.php">Ralph Castain: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="0756.php">Edgar Gabriel: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="0739.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0761.php">Jeff Squyres: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
