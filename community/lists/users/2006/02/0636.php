<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 12:19:13 2006" -->
<!-- isoreceived="20060210171913" -->
<!-- sent="Fri, 10 Feb 2006 12:18:42 -0500" -->
<!-- isosent="20060210171842" -->
<!-- name="James Conway" -->
<!-- email="jxc100+_at_[hidden]" -->
<!-- subject="[OMPI users] Cannonical ring program and Mac OSX 10.4.4" -->
<!-- id="744DC83F-CA0D-462C-95D8-D97B49E374A2_at_pitt.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="17E7FC98-6275-4BC1-9C1C-FFCC471E9601_at_open-mpi.org" -->
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
<strong>From:</strong> James Conway (<em>jxc100+_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-10 12:18:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian et al,
<br>
<p>Original thread was &quot;[O-MPI users] Firewall ports and Mac OS X 10.4.4&quot;
<br>
<p>On Feb 9, 2006, at 11:26 PM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; Open MPI uses random port numbers for all it's communication.
</span><br>
<span class="quotelev1">&gt; (etc)
</span><br>
<p>Thanks for the explanation. I will live with the open Firewall, and  
<br>
look at the ipfw docs for writing a script.
<br>
<p>Now I have a more &quot;core&quot; OpenMPI problem, which may be just  
<br>
unfamiliarity on my part. I seem to have the environment variables  
<br>
set up alright though - the code runs, but doesn't complete.
<br>
<p>I have copied the &quot;MPI Tutorial: The cannonical ring program&quot; from  
<br>
&lt;<a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>&gt;. It compiles and runs fine on the  
<br>
localhost (one CPU, one or more MPI processes). If I copy it to a  
<br>
remotehost, it does one round of passing the 'tag' then stalls. I  
<br>
modified the print statements a bit to see where in the code it  
<br>
stalls, but the loop hasn't changed. This is what I see happening:
<br>
1. Process 0 successfully kicks off the pass-around by sending the  
<br>
tag to the next process (1), and then enters the loop where it waits  
<br>
for the tag to come back.
<br>
2. Process 1 enters the loop, receives the tag and passes it on (back  
<br>
to process 0 since this is a ring of 2 players only).
<br>
3. Process 0 successfully receives the tag, decrements it, and calls  
<br>
the next send (MPI_Send) but it doesn't return from this. I have a  
<br>
print statement right after (with fflush) but there is no output. The  
<br>
CPU is maxed out on both the local and remote hosts, I assume some  
<br>
kind of polling.
<br>
4. Needless to say, Process 1 never reports receipt of the tag.
<br>
<p>Output (with a little re-ordering to make sense) is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpirun --hostfile my_mpi_hosts --np 2 mpi_test1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process rank 0: size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process rank 1: size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter the number of times around the ring: 5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process 0 doing first send of '4' to 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 0 finished sending, now entering loop
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process 0 waiting to receive from 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process 1 waiting to receive from 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 1 received '4' from 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 1 sending '4' to 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 1 finished sending
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 1 waiting to receive from 0
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Process 0 received '4' from 1
<br>
<span class="quotelev2">    &gt;&gt;Process 0 decremented num
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;Process 0 sending '3' to 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!---- nothing more - hangs at 100% cpu until ctrl-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;!---- should see &quot;Process 0 finished sending&quot;
<br>
<p>Since process 0 succeeds in calling MPI_Send before the loop, and in  
<br>
calling MPI_Recv at the start of the loop, the communications appear  
<br>
to be working. Likewise, process 1 succeeds in receiving and sending  
<br>
within the loop. However, if its significant, these calls work one  
<br>
time for each process - the second time MPI_Send is called by process  
<br>
0, there is a hang.
<br>
<p>I am using Mac OSX 10.4.4 and gcc 4.0.1 on both systems, with OpenMPI  
<br>
1.0.1 installed (compiled from sources). The small tutorial code is  
<br>
below (I hope its OK to include here), with the few printf mods that  
<br>
I made.
<br>
<p>Any pointers appreciated!
<br>
<p>James Conway
<br>
<p>----------------------------------------------------------------------
<br>
James Conway, PhD.,
<br>
Department of Structural Biology
<br>
University of Pittsburgh School of Medicine
<br>
Biomedical Science Tower 3, Room 2047
<br>
3501 5th Ave
<br>
Pittsburgh, PA 15260
<br>
U.S.A.
<br>
Phone: +1-412-383-9847
<br>
Fax:   +1-412-648-8998
<br>
Email: jxc100_at_[hidden]
<br>
Web:   &lt;<a href="http://www.pitt.edu/~jxc100/">http://www.pitt.edu/~jxc100/</a>&gt; (under construction)
<br>
----------------------------------------------------------------------
<br>
<p><p>/*
<br>
&nbsp;&nbsp;* Open Systems Lab
<br>
&nbsp;&nbsp;* <a href="http://www.lam-mpi.org/tutorials/">http://www.lam-mpi.org/tutorials/</a>
<br>
&nbsp;&nbsp;* Indiana University
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* MPI Tutorial
<br>
&nbsp;&nbsp;* The cannonical ring program
<br>
&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;* Mail questions regarding tutorial material to mpi_at_[hidden]
<br>
&nbsp;&nbsp;*/
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char *argv[]);
<br>
<p><p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;int num, rank, size;
<br>
<p>&nbsp;&nbsp;&nbsp;/* Start up MPI */
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
<p>/*
<br>
Arbitrarily choose 201 to be our tag.  Calculate the
<br>
rank of the next process in the ring.  Use the modulus
<br>
operator so that the last process &quot;wraps around&quot; to rank
<br>
zero.
<br>
*/
<br>
<p>&nbsp;&nbsp;&nbsp;const int tag  = 201;
<br>
&nbsp;&nbsp;&nbsp;const int next = (rank + 1) % size;
<br>
&nbsp;&nbsp;&nbsp;const int from = (rank + size - 1) % size;
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process rank %d: size = %d\n&quot;, rank, size);
<br>
<p>/*
<br>
If we are the &quot;console&quot; process, get an integer from the user
<br>
to specify how many times we want to go around the ring
<br>
*/
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Enter the number of times around the ring: &quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf(&quot;%d&quot;, &amp;num);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--num;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d doing first send of '%d' to %d\n&quot;, rank, num,  
<br>
next);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;num, 1, MPI_INT, next, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d finished sending, now entering loop\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>/*
<br>
Pass the message around the ring.  The exit mechanism works
<br>
as follows: the message (a positive integer) is passed
<br>
around the ring.  Each time is passes rank 0, it is decremented.
<br>
When each processes receives the 0 message, it passes it on
<br>
to the next process and then quits.  By passing the 0 first,
<br>
every process gets the 0 message and can quit normally.
<br>
*/
<br>
<p>&nbsp;&nbsp;&nbsp;while (1) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d waiting to receive from %d\n&quot;, rank, from);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;num, 1, MPI_INT, from, tag, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d received '%d' from %d\n&quot;, rank, num, from);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;num--;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;&gt;&gt;Process 0 decremented num\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d sending '%d' to %d\n&quot;, rank, num, next);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;num, 1, MPI_INT, next, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d finished sending\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (num == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Process %d exiting\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>// The last process does one extra send to process 0, which needs
<br>
// to be received before the program can exit
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %d after loop\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;num, 1, MPI_INT, from, tag, MPI_COMM_WORLD, &amp;status);
<br>
<p>// Quit
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0637.php">Yvan Fournier: "[OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>Previous message:</strong> <a href="0635.php">George Bosilca: "Re: [OMPI users] [O-MPI users] problem running Migrate with open-MPI"</a>
<li><strong>In reply to:</strong> <a href="0624.php">Brian Barrett: "Re: [O-MPI users] Firewall ports and Mac OS X 10.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Reply:</strong> <a href="0647.php">George Bosilca: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
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
