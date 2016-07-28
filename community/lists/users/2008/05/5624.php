<?
$subject_val = "Re: [OMPI users] Application logging";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 13:32:37 2008" -->
<!-- isoreceived="20080507173237" -->
<!-- sent="Wed, 7 May 2008 13:32:29 -0400" -->
<!-- isosent="20080507173229" -->
<!-- name="Barry Rountree" -->
<!-- email="rountree_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Application logging" -->
<!-- id="20080507173229.GC9118_at_eponymous" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="488E785C-4B72-4D3A-A66F-F1F189DCA399_at_gmail.com" -->
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
<strong>From:</strong> Barry Rountree (<em>rountree_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 13:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
<li><strong>Previous message:</strong> <a href="5623.php">Anthony Chan: "Re: [OMPI users] MPE"</a>
<li><strong>In reply to:</strong> <a href="5622.php">Alberto Giannetti: "[OMPI users] Application logging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
<li><strong>Reply:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, May 07, 2008 at 12:33:59PM -0400, Alberto Giannetti wrote:
<br>
<span class="quotelev1">&gt; I need to log application-level messages on disk to trace my program  
</span><br>
<span class="quotelev1">&gt; activity. For better performances, one solution is to dedicate one  
</span><br>
<span class="quotelev1">&gt; processor to the actual I/O logging, while the other working  
</span><br>
<span class="quotelev1">&gt; processors would trace their activity through non-blocking, string  
</span><br>
<span class="quotelev1">&gt; message sends:
</span><br>
<p>A few comments:
<br>
<p>If you're using a cluster where each node has dedicated disk space, it
<br>
would probably be better to open a local file and log messages there.
<br>
After the application completes, then collate all the local files
<br>
together.  
<br>
<p>Even simpler is to open a file in the directory from which you started
<br>
the application.  Using 16 older opterons and writing 2 lines per MPI 
<br>
call per node, the overhead for doing this was small enough to be lost 
<br>
in the noise.  Call this after MPI_Init and after you've figured out 
<br>
which node you are.
<br>
<p>FILE *
<br>
initialize_logfile(int rank){
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char format[]=&quot;runtime.%02d.dat&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char fname[64];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(fname, format, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blr_logfile = fopen(fname, &quot;w&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;assert(blr_logfile);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return blr_logfile;
<br>
}
<br>
<p>Then just fprintf(logfile, ...) as needed.
<br>
<p>There are configurations where this won't work, of course, and it won't
<br>
scale to thousands of nodes.  But I've found it to be rock-solid for my
<br>
work.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* LOGGER PROCESSOR MAIN LOOP */
</span><br>
<span class="quotelev1">&gt; void logger(void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Status status;
</span><br>
<span class="quotelev1">&gt;    char buf[LOGMSG_MAXSIZE];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Logger: Started\n&quot;);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    while( 1 ) {
</span><br>
<span class="quotelev1">&gt;      MPI_Recv(&amp;buf, LOGMSG_MAXSIZE, MPI_CHAR, MPI_ANY_SOURCE,  
</span><br>
<span class="quotelev1">&gt; LOGMSG_TAG, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;      buf[status.count] = '\0';
</span><br>
<span class="quotelev1">&gt;      /* ACTUAL I/O */
</span><br>
<span class="quotelev1">&gt;      printf(&quot;Processor %d ==&gt; %s\n&quot;, status.MPI_SOURCE, buf);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* WORKER PROCESSOR LOGGING */
</span><br>
<span class="quotelev1">&gt; void mylog(char* msg)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    MPI_Request req;
</span><br>
<span class="quotelev1">&gt;    int msglen = strlen(msg);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    if( msglen &gt; LOGMSG_MAXSIZE ) {
</span><br>
<span class="quotelev1">&gt;      /* Truncate */
</span><br>
<span class="quotelev1">&gt;      msg[LOGMSG_MAXSIZE-1] = '\0';
</span><br>
<span class="quotelev1">&gt;      msglen = LOGMSG_MAXSIZE;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    /* Non-blocking send */
</span><br>
<span class="quotelev1">&gt;    MPI_Isend(msg, msglen, MPI_CHAR, LOGGER, LOGMSG_TAG,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, &amp;req);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I figured this must be a common problem in MPI applications and was  
</span><br>
<span class="quotelev1">&gt; wondering if there is any library available or related discussions. 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
<li><strong>Previous message:</strong> <a href="5623.php">Anthony Chan: "Re: [OMPI users] MPE"</a>
<li><strong>In reply to:</strong> <a href="5622.php">Alberto Giannetti: "[OMPI users] Application logging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
<li><strong>Reply:</strong> <a href="5625.php">Alberto Giannetti: "Re: [OMPI users] Application logging"</a>
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
