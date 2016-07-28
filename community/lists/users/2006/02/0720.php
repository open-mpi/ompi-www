<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 09:29:49 2006" -->
<!-- isoreceived="20060228142949" -->
<!-- sent="Tue, 28 Feb 2006 15:29:43 +0100" -->
<!-- isosent="20060228142943" -->
<!-- name="Jose Pedro Garcia Mahedero" -->
<!-- email="jpgmahedero_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cannot mak a simple ping-pong" -->
<!-- id="b0ce60610602280629x6f864c33i258e827d02131fd1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] cannot mak a simple ping-pong" -->
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
<strong>Date:</strong> 2006-02-28 09:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody.
<br>
<p>I'm new to MPI and I'm having some problems while runnig a simple pingpong
<br>
program in more than one node.
<br>
<p>1.- I followed all the instructions and installed open MPI without problems
<br>
in  a Beowulf cluster.
<br>
2.-  Ths cluster is working OK and ssh keys are set for not password
<br>
prompting
<br>
3.- miexec seems to run OK.
<br>
4.- Now I'm using just 2 nodes: I've tried a simple ping-pong application
<br>
but my master only sends one request!!
<br>
5.- I reduced the problem by trying to send just two mesages to the same
<br>
node:
<br>
<p>int main(int argc, char **argv){
<br>
&nbsp;&nbsp;int myrank;
<br>
<p>&nbsp;&nbsp;/* Initialize MPI */
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;/* Find out my identity in the default communicator */
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank);
<br>
&nbsp;&nbsp;if (myrank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int work = 100;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int count=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (int i =0; i &lt; 10; i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MASTER IS SLEEPING...&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(3);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MASTER AWAKE WILL SEND[&quot;&lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt; work &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;work, 1, MPI_INT, 1, WORKTAG,   MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count =0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int work;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (true){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;work, 1, MPI_INT, 0, MPI_ANY_TAG,    MPI_COMM_WORLD,
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;SLAVE[&quot; &lt;&lt; myrank &lt;&lt; &quot;] RECEIVED[&quot; &lt;&lt; count++ &lt;&lt; &quot;]:&quot; &lt;&lt;
<br>
work &lt;&lt;endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (status.MPI_TAG == DIETAG) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}// while
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p><p><p>6a.- RESULTS  (if I put more than one machine in my mpihostsfile), my master
<br>
sends the first message  and my slave receives it perfectly. But my master
<br>
doesnt send its second .
<br>
message:
<br>
<p><p><p>Here's my output
<br>
<p>MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[0]:100
<br>
MASTER IS SLEEPING...
<br>
SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
<br>
MASTER AWAKE WILL SEND[1]:100
<br>
<p>6b.- RESULTS (if I put ONLY  1 machine in my mpihostsfile), everything is OK
<br>
until iteration 9!!!
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[0]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[1]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[2]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[3]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[4]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[5]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[6]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[7]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[8]:100
<br>
MASTER IS SLEEPING...
<br>
MASTER AWAKE WILL SEND[9]:100
<br>
SLAVE[1] RECEIVED[0]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[1]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[2]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[3]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[4]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[5]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[6]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[7]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[8]:100MPI_STATUS.MPI_ERROR:0
<br>
SLAVE[1] RECEIVED[9]:100MPI_STATUS.MPI_ERROR:0
<br>
--------------------------------
<br>
<p>I know this is a lot of text, but I wanted to give a mamixum detailed
<br>
question. I've been search in FAQ, but still don't know what (and why) is
<br>
going on...
<br>
<p>Anyone can help please :-)  ?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0720/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Previous message:</strong> <a href="0719.php">Brian Barrett: "Re: [OMPI users] Run failure on Solaris Opteron with Sun Studio 11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0721.php">John Robinson: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
<li><strong>Reply:</strong> <a href="0731.php">Brian Barrett: "Re: [OMPI users] cannot mak a simple ping-pong"</a>
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
