<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 21:52:10 2006" -->
<!-- isoreceived="20060301025210" -->
<!-- sent="Tue, 28 Feb 2006 21:52:04 -0500" -->
<!-- isosent="20060301025204" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="07F7AAE2-EFF7-4243-9161-4D3B8F0D787F_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b0ce60610602280629x6f864c33i258e827d02131fd1_at_mail.gmail.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 21:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="0720.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jose -
<br>
<p>I noticed that your output doesn't appear to match what the source  
<br>
code is capable of generating.  It's possible that you're running  
<br>
into problems with the code that we can't see because you didn't send  
<br>
a complete version of the source code.
<br>
<p>You might want to start by running some 3rd party codes that are  
<br>
known to be good, just to make sure that your MPI installation checks  
<br>
out.  A good start is NetPIPE, which runs between two peers and gives  
<br>
latency / bandwidth information.  If that runs, then it's time to  
<br>
look at your application.  If that doesn't run, then it's time to  
<br>
look at the MPI installation in more detail.  In this case, it would  
<br>
be useful to see all of the information requested here:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>as well as from running the mpirun command used to start NetPIPE with  
<br>
the -d option, so something like:
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 2 -hostfile foo -d ./NPMpi
<br>
<p>Brian
<br>
<p>On Feb 28, 2006, at 9:29 AM, Jose Pedro Garcia Mahedero wrote:
<br>
<p><span class="quotelev1">&gt; Hello everybody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm new to MPI and I'm having some problems while runnig a simple  
</span><br>
<span class="quotelev1">&gt; pingpong program in more than one node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.- I followed all the instructions and installed open MPI without  
</span><br>
<span class="quotelev1">&gt; problems in  a Beowulf cluster.
</span><br>
<span class="quotelev1">&gt; 2.-  Ths cluster is working OK and ssh keys are set for not  
</span><br>
<span class="quotelev1">&gt; password prompting
</span><br>
<span class="quotelev1">&gt; 3.- miexec seems to run OK.
</span><br>
<span class="quotelev1">&gt; 4.- Now I'm using just 2 nodes: I've tried a simple ping-pong  
</span><br>
<span class="quotelev1">&gt; application but my master only sends one request!!
</span><br>
<span class="quotelev1">&gt; 5.- I reduced the problem by trying to send just two mesages to the  
</span><br>
<span class="quotelev1">&gt; same node:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv){
</span><br>
<span class="quotelev1">&gt;   int myrank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* Initialize MPI */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   /* Find out my identity in the default communicator */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
</span><br>
<span class="quotelev1">&gt;   if (myrank == 0) {
</span><br>
<span class="quotelev1">&gt;     int work = 100;
</span><br>
<span class="quotelev1">&gt;     int count=0;
</span><br>
<span class="quotelev1">&gt;     for (int i =0; i &lt; 10; i++){
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;       sleep(3);
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work  
</span><br>
<span class="quotelev1">&gt; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;        MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   } else {
</span><br>
<span class="quotelev1">&gt;       int count =0;
</span><br>
<span class="quotelev1">&gt;       int work;
</span><br>
<span class="quotelev1">&gt;       MPI_Status status;
</span><br>
<span class="quotelev1">&gt;       while (true){
</span><br>
<span class="quotelev1">&gt;           MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,     
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt;  
</span><br>
<span class="quotelev1">&gt; &quot;]:&quot; &lt;&lt; work &lt;&lt;endl;
</span><br>
<span class="quotelev1">&gt;         if (status.MPI_TAG == DIETAG) {
</span><br>
<span class="quotelev1">&gt;           break;
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }// while
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6a.- RESULTS  (if I put more than one machine in my mpihostsfile),  
</span><br>
<span class="quotelev1">&gt; my master sends the first message  and my slave receives it  
</span><br>
<span class="quotelev1">&gt; perfectly. But my master doesnt send its second .
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's my output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile),  
</span><br>
<span class="quotelev1">&gt; everything is OK until iteration 9!!!
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[0]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[1]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[2]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[3]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[4]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[5]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[6]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[7]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[8]:100
</span><br>
<span class="quotelev1">&gt; MASTER IS SLEEPING...
</span><br>
<span class="quotelev1">&gt; MASTER AWAKE WILL SEND[9]:100
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know this is a lot of text, but I wanted to give a mamixum  
</span><br>
<span class="quotelev1">&gt; detailed question. I've been search in FAQ, but still don't know  
</span><br>
<span class="quotelev1">&gt; what (and why) is going on...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone can help please :-)  ?
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
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0732.php">Durga Choudhury: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>Previous message:</strong> <a href="0730.php">Brian Barrett: "Re: [OMPI users] Question and possible bugfix patches..."</a>
<li><strong>In reply to:</strong> <a href="0720.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0734.php">Jose Pedro Garcia Mahedero: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
