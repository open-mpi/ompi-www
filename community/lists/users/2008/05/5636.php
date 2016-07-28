<?
$subject_val = "Re: [OMPI users] Application logging";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 18:31:48 2008" -->
<!-- isoreceived="20080507223148" -->
<!-- sent="Wed, 7 May 2008 18:31:27 -0400" -->
<!-- isosent="20080507223127" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application logging" -->
<!-- id="F552C241-5B3D-4F04-8D32-AFC15D773FBF_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080507214531.GA9226_at_eponymous" -->
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
<strong>Subject:</strong> Re: [OMPI users] Application logging<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 18:31:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5637.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5635.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5631.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 7, 2008, at 5:45 PM, Barry Rountree wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, May 07, 2008 at 01:51:03PM -0400, Alberto Giannetti wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 7, 2008, at 1:32 PM, Barry Rountree wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, May 07, 2008 at 12:33:59PM -0400, Alberto Giannetti wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I need to log application-level messages on disk to trace my  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; activity. For better performances, one solution is to dedicate one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processor to the actual I/O logging, while the other working
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processors would trace their activity through non-blocking, string
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message sends:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A few comments:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you're using a cluster where each node has dedicated disk  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; space, it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would probably be better to open a local file and log messages  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After the application completes, then collate all the local files
</span><br>
<span class="quotelev3">&gt;&gt;&gt; together.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Even simpler is to open a file in the directory from which you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; started
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the application.  Using 16 older opterons and writing 2 lines per  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call per node, the overhead for doing this was small enough to be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the noise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I want to avoid is disk I/O operations in some of my real-time
</span><br>
<span class="quotelev2">&gt;&gt; processors. fprintf, fputs or other write operations are the most
</span><br>
<span class="quotelev2">&gt;&gt; time-consuming system calls and I'd rather dedicate a processor/CPU
</span><br>
<span class="quotelev2">&gt;&gt; to that task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Assuming my logger processor is allocated on a remote host (a worst-
</span><br>
<span class="quotelev2">&gt;&gt; case scenario), are you saying that, for instance, a 256 bytes disk
</span><br>
<span class="quotelev2">&gt;&gt; write is faster that a non-blocking send to the remote node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The best thing for you to do is instrument the logger you want to you
</span><br>
<span class="quotelev1">&gt; and see how much overhead it generates.  I think you'll be surprised
</span><br>
<span class="quotelev1">&gt; with how fast fprintf is these days.
</span><br>
<p><p>It's not the fprintf, it's the disk I/O access time that I think has  
<br>
high latency. Or, to put it in another way, I hope an MPI non- 
<br>
blocking send is faster than a disk write access. The problem with  
<br>
disk I/O is that it must be shared, so performances should be  
<br>
measured in a complete production environment where multiple programs  
<br>
are running disk writes.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Call this after MPI_Init and after you've figured out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which node you are.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FILE *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initialize_logfile(int rank){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char format[]=&quot;runtime.%02d.dat&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         char fname[64];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sprintf(fname, format, rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         blr_logfile = fopen(fname, &quot;w&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         assert(blr_logfile);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         return blr_logfile;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Then just fprintf(logfile, ...) as needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are configurations where this won't work, of course, and it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scale to thousands of nodes.  But I've found it to be rock-solid
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* LOGGER PROCESSOR MAIN LOOP */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void logger(void)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    char buf[LOGMSG_MAXSIZE];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    printf(&quot;Logger: Started\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    while( 1 ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      MPI_Recv(&amp;buf, LOGMSG_MAXSIZE, MPI_CHAR, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LOGMSG_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      buf[status.count] = '\0';
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* ACTUAL I/O */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      printf(&quot;Processor %d ==&gt; %s\n&quot;, status.MPI_SOURCE, buf);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* WORKER PROCESSOR LOGGING */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void mylog(char* msg)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_Request req;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    int msglen = strlen(msg);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    if( msglen &gt; LOGMSG_MAXSIZE ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      /* Truncate */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      msg[LOGMSG_MAXSIZE-1] = '\0';
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      msglen = LOGMSG_MAXSIZE;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    /* Non-blocking send */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    MPI_Isend(msg, msglen, MPI_CHAR, LOGGER, LOGMSG_TAG,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I figured this must be a common problem in MPI applications and was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wondering if there is any library available or related discussions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5637.php">Gregory John Orris: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>Previous message:</strong> <a href="5635.php">Linwei Wang: "Re: [OMPI users] Install BLACS and ScaLAPACK on Leopard"</a>
<li><strong>In reply to:</strong> <a href="5631.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
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
