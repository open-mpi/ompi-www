<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 14 10:19:52 2007" -->
<!-- isoreceived="20070814141952" -->
<!-- sent="Tue, 14 Aug 2007 10:19:49 -0400" -->
<!-- isosent="20070814141949" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help : Need some tuning, or is it a bug ?" -->
<!-- id="46C1BA05.7070405_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6428A311-9EDF-428D-945F-1F136629CCFB_at_cggveritas.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-14 10:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="3835.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Help : Need some tuning, or is it a bug ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guillaume THOMAS-COLLIGNON wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote an application which works fine on a small number of nodes  
</span><br>
<span class="quotelev1">&gt; (eg. 4), but it crashes on a large number of CPUs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this application, all the slaves send many small messages to the  
</span><br>
<span class="quotelev1">&gt; master. I use the regular MPI_Send, and since the messages are  
</span><br>
<span class="quotelev1">&gt; relatively small (1 int, then many times 3296 ints), OpenMPI does a  
</span><br>
<span class="quotelev1">&gt; very good job at sending them asynchronously, and it maxes out the  
</span><br>
<span class="quotelev1">&gt; gigabit link on the master node. I'm very happy with this behaviour,  
</span><br>
<span class="quotelev1">&gt; it gives me the same performance as if I was doing all the  
</span><br>
<span class="quotelev1">&gt; asynchronous stuff myself, and the code remains simple.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it crashes when there are too many slaves. 
</span><br>
How many is too many? I successfully ran your code on 96 nodes, with 4 
<br>
processes per node and it seemed to work fine. Also, what network are 
<br>
you using?
<br>
<p><span class="quotelev1">&gt; So it looks like at  
</span><br>
<span class="quotelev1">&gt; some point the master node runs out of buffers and the job crashes  
</span><br>
<span class="quotelev1">&gt; brutally. 
</span><br>
What do you mean by crashing? Is there a segfault or an error message?
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; That's my understanding but I may be wrong.
</span><br>
<span class="quotelev1">&gt; If I use explicit synchronous sends (MPI_Ssend), it does not crash  
</span><br>
<span class="quotelev1">&gt; anymore but the performance is a lot lower.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 2 questions regarding this :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) What kind of tuning would help handling more messages and keep the  
</span><br>
<span class="quotelev1">&gt; master from crashing ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) Is this the expected behaviour ? I don't think my code is doing  
</span><br>
<span class="quotelev1">&gt; anything wrong, so I would not expect a brutal crash.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The workaround I've found so far is to do an MPI_Ssend for the  
</span><br>
<span class="quotelev1">&gt; request, then use MPI_Send for the data blocks. So all the slaves are  
</span><br>
<span class="quotelev1">&gt; blocked on the request, it keeps the master from being flooded, and  
</span><br>
<span class="quotelev1">&gt; the performance is still good. But nothing tells me it won't crash at  
</span><br>
<span class="quotelev1">&gt; some point if I have more data blocks in my real code, so I'd like to  
</span><br>
<span class="quotelev1">&gt; know more about what's happening here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	-Guillaume
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the code, so you get a better idea of the communication  
</span><br>
<span class="quotelev1">&gt; scheme, or if you someone wants to reproduce the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define BLOCKSIZE 3296
</span><br>
<span class="quotelev1">&gt; #define MAXBLOCKS 1000
</span><br>
<span class="quotelev1">&gt; #define NLOOP 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char **argv) {
</span><br>
<span class="quotelev1">&gt;    int i, j, ier, rank, npes, slave, request;
</span><br>
<span class="quotelev1">&gt;    int *data;
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size (MPI_COMM_WORLD, &amp;npes);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if ((data = (int *) calloc (BLOCKSIZE, sizeof (int))) == NULL)
</span><br>
<span class="quotelev1">&gt;      return -10;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    // Master
</span><br>
<span class="quotelev1">&gt;    if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;      // Expect (NLOOP * number of slaves) requests
</span><br>
<span class="quotelev1">&gt;      for (i=0; i&lt;(npes-1)*NLOOP; i++) {
</span><br>
<span class="quotelev1">&gt;        /* Wait for a request from any slave. Request contains number  
</span><br>
<span class="quotelev1">&gt; of data blocks */
</span><br>
<span class="quotelev1">&gt;        ier = MPI_Recv(&amp;request, 1, MPI_INT, MPI_ANY_SOURCE, 964,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;        if (ier != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; 	return -1;
</span><br>
<span class="quotelev1">&gt;        slave = status.MPI_SOURCE;
</span><br>
<span class="quotelev1">&gt;        printf (&quot;Master : request for %d blocks from slave %d\n&quot;,  
</span><br>
<span class="quotelev1">&gt; request, slave);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        /* Receive the data blocks from this slave */
</span><br>
<span class="quotelev1">&gt;        for (j=0; j&lt;request; j++) {
</span><br>
<span class="quotelev1">&gt; 	ier = MPI_Recv (data, BLOCKSIZE, MPI_INT, slave, 993,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt; 	if (ier != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; 	  return -2;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    // Slaves
</span><br>
<span class="quotelev1">&gt;    else {
</span><br>
<span class="quotelev1">&gt;      for (i=0; i&lt;NLOOP; i++) {
</span><br>
<span class="quotelev1">&gt;        /* Send the request = number of blocks we want to send to the  
</span><br>
<span class="quotelev1">&gt; master */
</span><br>
<span class="quotelev1">&gt;        request = MAXBLOCKS;
</span><br>
<span class="quotelev1">&gt; /* Changing this MPI_Send to MPI_Ssend is enough to keep the master  
</span><br>
<span class="quotelev1">&gt; from being flooded */
</span><br>
<span class="quotelev1">&gt;        ier = MPI_Send (&amp;request, 1, MPI_INT, 0, 964, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;        if (ier != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; 	return -3;
</span><br>
<span class="quotelev1">&gt;        /* Send the data blocks */
</span><br>
<span class="quotelev1">&gt;        for (j=0; j&lt;request; j++) {
</span><br>
<span class="quotelev1">&gt; 	ier = MPI_Send (data, BLOCKSIZE, MPI_INT, 0, 993, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 	if (ier != MPI_SUCCESS)
</span><br>
<span class="quotelev1">&gt; 	  return -4;
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    printf (&quot;Node %d done\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3850.php">Rodrigo Faccioli: "Re: [OMPI users] libmpi.so.0 problem"</a>
<li><strong>Previous message:</strong> <a href="3848.php">Tim Prins: "Re: [OMPI users] mpirun hangs"</a>
<li><strong>In reply to:</strong> <a href="3835.php">Guillaume THOMAS-COLLIGNON: "[OMPI users] Help : Need some tuning, or is it a bug ?"</a>
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
