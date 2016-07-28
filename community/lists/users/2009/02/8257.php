<?
$subject_val = "Re: [OMPI users] TCP instead of openIB doesn't work";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 18:19:29 2009" -->
<!-- isoreceived="20090227231929" -->
<!-- sent="Fri, 27 Feb 2009 18:19:23 -0500" -->
<!-- isosent="20090227231923" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] TCP instead of openIB doesn't work" -->
<!-- id="3D2D603E-67CE-48D9-95D9-ED1552E8C387_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4de51c660902270700u24438df9p5b9cc65da90d0598_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] TCP instead of openIB doesn't work<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 18:19:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8256.php">Jeff Squyres: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8241.php">Vittorio Giovara: "[OMPI users] TCP instead of openIB doesn't work"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice the following:
<br>
<p>- you're creating an *enormous* array on the stack.  you might be  
<br>
better allocating it on the heap.
<br>
- the value of &quot;exchanged&quot; will quickly grow beyond 2^31 (i.e.,  
<br>
MAX_INT) which is the max that the MPI API can handle.  Bad Things can/ 
<br>
will happen beyond that value (i.e., you're keeping the value of  
<br>
&quot;exchanged&quot; in a long unsigned int, but MPI_Send and MPI_Recv only  
<br>
take an int).
<br>
<p><p>On Feb 27, 2009, at 10:00 AM, Vittorio Giovara wrote:
<br>
<p><span class="quotelev1">&gt; Hello, i'm posting here another problem of my installation
</span><br>
<span class="quotelev1">&gt; I wanted to benchmark the differences between tcp and openib transport
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if i run a simple non mpi application i get
</span><br>
<span class="quotelev1">&gt; randori ~ # mpirun  --mca btl tcp,self  -np 2 -host randori -host  
</span><br>
<span class="quotelev1">&gt; tatami hostname
</span><br>
<span class="quotelev1">&gt; randori
</span><br>
<span class="quotelev1">&gt; tatami
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but as soon as i switch to my benchmark program i have
</span><br>
<span class="quotelev1">&gt; mpirun  --mca btl tcp,self  -np 2 -host randori -host tatami graph
</span><br>
<span class="quotelev1">&gt; Master thread reporting
</span><br>
<span class="quotelev1">&gt; matrix size 33554432 kB, time is in [us]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and instead of starting the send/receive functions it just hangs  
</span><br>
<span class="quotelev1">&gt; there; i also checked the transmitted packets with wireshark but  
</span><br>
<span class="quotelev1">&gt; after the handshake no more packets are exchanged
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read in the archives that there were some problems in this area  
</span><br>
<span class="quotelev1">&gt; and so i tried what was suggested in previous emails
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl ^openib  -np 2 -host randori -host tatami graph
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml ob1  --mca btl tcp,self  -np 2 -host randori -host  
</span><br>
<span class="quotelev1">&gt; tatami graph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gives exactly the same output as before (no mpisend/receive)
</span><br>
<span class="quotelev1">&gt; while the next commands gives something more interesting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca pml cm  --mca btl tcp,self  -np 2 -host randori -host  
</span><br>
<span class="quotelev1">&gt; tatami graph
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; No available pml components were found!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This means that there are no components of this type installed on your
</span><br>
<span class="quotelev1">&gt; system or all the components reported that they could not be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a fatal error; your MPI process is likely to abort.  Check the
</span><br>
<span class="quotelev1">&gt; output of the &quot;ompi_info&quot; command and ensure that components of this
</span><br>
<span class="quotelev1">&gt; type are available on your system.  You may also wish to check the
</span><br>
<span class="quotelev1">&gt; value of the &quot;component_path&quot; MCA parameter and ensure that it has at
</span><br>
<span class="quotelev1">&gt; least one directory that contains valid MCA components.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [tatami:06619] PML cm cannot be selected
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 6710 on node randori exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is not possible as if i do ompi_info --param all there is the  
</span><br>
<span class="quotelev1">&gt; CM pml component
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  MCA pml: cm (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;                  MCA pml: ob1 (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my test program is quite simple, just a couple of MPI_Send and  
</span><br>
<span class="quotelev1">&gt; MPI_Recv (just after the signature)
</span><br>
<span class="quotelev1">&gt; do you have any ideas that might help me?
</span><br>
<span class="quotelev1">&gt; thanks a lot
</span><br>
<span class="quotelev1">&gt; Vittorio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ========================
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #define M_COL 4096
</span><br>
<span class="quotelev1">&gt; #define M_ROW 524288
</span><br>
<span class="quotelev1">&gt; #define NUM_MSG 25
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unsigned long int  gigamatrix[M_ROW][M_COL];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;     int numtasks, rank, dest, source, rc, tmp, count, tag=1;
</span><br>
<span class="quotelev1">&gt;     unsigned long int  exp, exchanged;
</span><br>
<span class="quotelev1">&gt;     unsigned long int i, j, e;
</span><br>
<span class="quotelev1">&gt;     unsigned long matsize;
</span><br>
<span class="quotelev1">&gt;     MPI_Status Stat;
</span><br>
<span class="quotelev1">&gt;     struct timeval timing_start, timing_end;
</span><br>
<span class="quotelev1">&gt;     double inittime = 0;
</span><br>
<span class="quotelev1">&gt;     long int totaltime = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;         fprintf (stderr, &quot;Master thread reporting\n&quot;, numtasks - 1);
</span><br>
<span class="quotelev1">&gt;         matsize = (long) M_COL * M_ROW / 64;
</span><br>
<span class="quotelev1">&gt;         fprintf (stderr, &quot;matrix size %d kB, time is in [us]\n&quot;,  
</span><br>
<span class="quotelev1">&gt; matsize);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         source = 1;
</span><br>
<span class="quotelev1">&gt;         dest = 1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /*warm up phase*/
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;         rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         for (e = 0; e &lt; NUM_MSG; e++) {
</span><br>
<span class="quotelev1">&gt;             exp = pow (2, e);
</span><br>
<span class="quotelev1">&gt;             exchanged = 64 * exp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /*timing of ops*/
</span><br>
<span class="quotelev1">&gt;             gettimeofday (&amp;timing_start, NULL);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Send (&amp;gigamatrix[0], exchanged,  
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_LONG, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Recv (&amp;gigamatrix[0], exchanged,  
</span><br>
<span class="quotelev1">&gt; MPI_UNSIGNED_LONG, source, tag, MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;             gettimeofday (&amp;timing_end, NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             totaltime = (timing_end.tv_sec - timing_start.tv_sec) *  
</span><br>
<span class="quotelev1">&gt; 1000000 + (timing_end.tv_usec - timing_start.tv_usec);
</span><br>
<span class="quotelev1">&gt;             memset (&amp;timing_start, 0, sizeof(struct timeval));
</span><br>
<span class="quotelev1">&gt;             memset (&amp;timing_end, 0, sizeof(struct timeval));
</span><br>
<span class="quotelev1">&gt;             fprintf (stdout, &quot;%d kB\t%d\n&quot;, exp, totaltime);
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         fprintf(stderr, &quot;task complete\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     } else {
</span><br>
<span class="quotelev1">&gt;         if (rank &gt;= 1) {
</span><br>
<span class="quotelev1">&gt;             dest = 0;
</span><br>
<span class="quotelev1">&gt;             source = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Send (&amp;tmp, 1, MPI_INT, dest, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;             rc = MPI_Recv (&amp;tmp, 1, MPI_INT, source, tag,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             for (e = 0; e &lt; NUM_MSG; e++) {
</span><br>
<span class="quotelev1">&gt;                 exp = pow (2, e);
</span><br>
<span class="quotelev1">&gt;                 exchanged = 64 * exp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 rc = MPI_Recv (&amp;gigamatrix[0], (unsigned)   
</span><br>
<span class="quotelev1">&gt; exchanged, MPI_UNSIGNED_LONG, source, tag, MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;                 rc = MPI_Send (&amp;gigamatrix[0], (unsigned)   
</span><br>
<span class="quotelev1">&gt; exchanged, MPI_UNSIGNED_LONG, dest, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8258.php">jody: "Re: [OMPI users] defining different values for same environment variable"</a>
<li><strong>Previous message:</strong> <a href="8256.php">Jeff Squyres: "Re: [OMPI users] Latest SVN failures"</a>
<li><strong>In reply to:</strong> <a href="8241.php">Vittorio Giovara: "[OMPI users] TCP instead of openIB doesn't work"</a>
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
