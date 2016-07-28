<?
$subject_val = "[OMPI users] Application logging";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 12:34:20 2008" -->
<!-- isoreceived="20080507163420" -->
<!-- sent="Wed, 7 May 2008 12:33:59 -0400" -->
<!-- isosent="20080507163359" -->
<!-- name="Alberto Giannetti" -->
<!-- email="albertogiannetti_at_[hidden]" -->
<!-- subject="[OMPI users] Application logging" -->
<!-- id="488E785C-4B72-4D3A-A66F-F1F189DCA399_at_gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Application logging<br>
<strong>From:</strong> Alberto Giannetti (<em>albertogiannetti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-07 12:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5623.php">Anthony Chan: "Re: [OMPI users] MPE"</a>
<li><strong>Previous message:</strong> <a href="5621.php">Alberto Giannetti: "[OMPI users] MPE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5624.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
<li><strong>Reply:</strong> <a href="5624.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I need to log application-level messages on disk to trace my program  
<br>
activity. For better performances, one solution is to dedicate one  
<br>
processor to the actual I/O logging, while the other working  
<br>
processors would trace their activity through non-blocking, string  
<br>
message sends:
<br>
<p>/* LOGGER PROCESSOR MAIN LOOP */
<br>
void logger(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;char buf[LOGMSG_MAXSIZE];
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Logger: Started\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;while( 1 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;buf, LOGMSG_MAXSIZE, MPI_CHAR, MPI_ANY_SOURCE,  
<br>
LOGMSG_TAG, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[status.count] = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* ACTUAL I/O */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Processor %d ==&gt; %s\n&quot;, status.MPI_SOURCE, buf);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><p>/* WORKER PROCESSOR LOGGING */
<br>
void mylog(char* msg)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;MPI_Request req;
<br>
&nbsp;&nbsp;&nbsp;int msglen = strlen(msg);
<br>
<p>&nbsp;&nbsp;&nbsp;if( msglen &gt; LOGMSG_MAXSIZE ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Truncate */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msg[LOGMSG_MAXSIZE-1] = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;msglen = LOGMSG_MAXSIZE;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;/* Non-blocking send */
<br>
&nbsp;&nbsp;&nbsp;MPI_Isend(msg, msglen, MPI_CHAR, LOGGER, LOGMSG_TAG,  
<br>
MPI_COMM_WORLD, &amp;req);
<br>
}
<br>
<p><p>I figured this must be a common problem in MPI applications and was  
<br>
wondering if there is any library available or related discussions. 
<br>
&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5623.php">Anthony Chan: "Re: [OMPI users] MPE"</a>
<li><strong>Previous message:</strong> <a href="5621.php">Alberto Giannetti: "[OMPI users] MPE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5624.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
<li><strong>Reply:</strong> <a href="5624.php">Barry Rountree: "Re: [OMPI users] Application logging"</a>
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
