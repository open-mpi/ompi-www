<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar  2 15:21:24 2006" -->
<!-- isoreceived="20060302202124" -->
<!-- sent="Thu, 2 Mar 2006 15:21:16 -0500" -->
<!-- isosent="20060302202116" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="337385C9-125F-4E8E-BFEA-B3BFCFB0E27B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b0ce60610603021028s1c99dc0cpdbbba3dfdafbabd_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-02 15:21:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jose --
<br>
<p>This sounds like a problem that we just recently fixed in the 1.0.x  
<br>
branch -- there were some situations where the &quot;wrong&quot; ethernet  
<br>
device could have been picked by Open MPI (e.g., if you have a  
<br>
cluster with all private IP addresses, and you run an MPI job that  
<br>
spans the head node and the compute nodes, but the head node has  
<br>
multiple IP addresses).  Can you try the latest 1.0.2 release  
<br>
candidate tarball and let us know if this fixes the problem?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.0/">http://www.open-mpi.org/software/ompi/v1.0/</a>
<br>
<p>Specifically, you should no longer need to specify that  
<br>
btl_tcp_if_include parameter -- Open MPI should be able to &quot;figure it  
<br>
all out&quot; for you.
<br>
<p>Let us know if this works for you.
<br>
<p><p><p>On Mar 2, 2006, at 1:28 PM, Jose Pedro Garcia Mahedero wrote:
<br>
<p><span class="quotelev1">&gt; Finally it was a network problem. I had to disable  one network  
</span><br>
<span class="quotelev1">&gt; interface in the master node of the cluster by setting
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include = eth1 on file /usr/local/etc/openmpi-mca- 
</span><br>
<span class="quotelev1">&gt; params.conf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thank you all for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jose Pedro
</span><br>
<span class="quotelev1">&gt; On 3/1/06, Jose Pedro Garcia Mahedero &lt; jpgmahedero_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; OK, it ALMOST works!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I've install MPI on a non clustered machine and it works, but  
</span><br>
<span class="quotelev1">&gt; surprisingly, it works fine from machine OUT1 as master to machine  
</span><br>
<span class="quotelev1">&gt; CLUSTER1 as slave, but (here was my surprise) it doesn't work on  
</span><br>
<span class="quotelev1">&gt; the other sense! If I run the same program with CLUSTER1 as master  
</span><br>
<span class="quotelev1">&gt; it only sends one message from master to slave and blocks while  
</span><br>
<span class="quotelev1">&gt; sending the second message. Maybe it is a firewall/iptable  problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody know which ports does MPI use to send requests/ 
</span><br>
<span class="quotelev1">&gt; responses ot how to trace it? What I really don't understand is why  
</span><br>
<span class="quotelev1">&gt; it happens at the second message and not the first one :-( I know  
</span><br>
<span class="quotelev1">&gt; my slave never finishes, but It is not intended to right now, it  
</span><br>
<span class="quotelev1">&gt; will in a next version, but I think it is not the main problem :-S
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I send an attachemtn with the (so simple) code and a tarball with  
</span><br>
<span class="quotelev1">&gt; my config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thaks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/06, Jose Pedro Garcia Mahedero &lt; jpgmahedero_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:You're right, I'll try to use netpipes first and then the  
</span><br>
<span class="quotelev1">&gt; application.  If it doesn't workt I'll send configs and more  
</span><br>
<span class="quotelev1">&gt; detailed informations
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/1/06, Brian Barrett &lt;brbarret_at_[hidden]&gt; wrote: Jose -
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
<span class="quotelev1">&gt;
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0762.php">Bjoern Nachtwey: "Re: [OMPI users] OpenMPI 1.0.x and PGI pgf90 ==&gt; Problem solved"</a>
<li><strong>Previous message:</strong> <a href="0760.php">Edgar Gabriel: "Re: [OMPI users] Spawn and distribution of slaves"</a>
<li><strong>In reply to:</strong> <a href="0757.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
