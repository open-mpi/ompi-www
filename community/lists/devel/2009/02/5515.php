<?
$subject_val = "[OMPI devel] Failure to make progress";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 23 16:24:54 2009" -->
<!-- isoreceived="20090223212454" -->
<!-- sent="Mon, 23 Feb 2009 16:24:48 -0500" -->
<!-- isosent="20090223212448" -->
<!-- name="Ken Olum" -->
<!-- email="kdo_at_[hidden]" -->
<!-- subject="[OMPI devel] Failure to make progress" -->
<!-- id="E1LbiIC-0000P8-Nx_at_cosmos.phy.tufts.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Failure to make progress<br>
<strong>From:</strong> Ken Olum (<em>kdo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-23 16:24:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Reply:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running OpenMPI 1.2.6 under Red Hat Enterprise Linux Server
<br>
release 5.2 on an x86_64 cluster.
<br>
<p>When I send a message with MPI_Isend I think it should eventually be
<br>
delivered (if I have a receive waiting), without my having to make any
<br>
other MPI calls.  This appears to be guaranteed by the spec.  In MPI
<br>
version 1.1, section 3.7.4, Semantics of Nonblocking Communications,
<br>
it says
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Progress A call to MPI_WAIT that completes a receive will eventually
<br>
&nbsp;&nbsp;&nbsp;&nbsp;terminate and return if a matching send has been started, unless the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;send is satisfied by another receive. In particular, if the matching
<br>
&nbsp;&nbsp;&nbsp;&nbsp;send is nonblocking, then the receive should complete even if no call
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is executed by the sender to complete the send.
<br>
<p>This appears never to work when my two processes are on different
<br>
nodes.  I enclose a test case below.  In this simple case, I can work
<br>
around the problem by waiting for the send to complete, but in general
<br>
after a bunch of communication I don't know any way that I can make
<br>
sure that all my sent messages have actually been sent, without
<br>
blocking.
<br>
<p>In the following code, rank 0 sends a message to rank 7, sleeps for 5
<br>
seconds, and then calls MPI_Finalize.  The output below shows that
<br>
rank 7 doesn't receive the message until finalize is called.
<br>
(Ranks 1-6 exist only to get the scheduler here to dispatch 0 and 7
<br>
to different nodes.)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ken Olum
<br>
<p>----------------------------------------------------------------------
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;time.h&gt;
<br>
#include &quot;mpi.h&quot; 
<br>
<p>char *timestamp()
<br>
{ time_t now;
<br>
&nbsp;&nbsp;struct tm *data;
<br>
&nbsp;&nbsp;char *result;
<br>
<p>&nbsp;&nbsp;time(&amp;now);
<br>
&nbsp;&nbsp;data = localtime(&amp;now);
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;result = malloc(9);
<br>
&nbsp;&nbsp;sprintf(result, &quot;%2d:%02d:%02d&quot;, data-&gt;tm_hour, data-&gt;tm_min, data-&gt;tm_sec);
<br>
&nbsp;&nbsp;return result;
<br>
<p>}
<br>
<p>main( argc, argv ) 
<br>
int argc; 
<br>
char **argv; 
<br>
{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char message[20]; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myrank, mysize, flag, i; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request request;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;mysize); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myrank); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: initialized\n&quot;, myrank, timestamp());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0)    /* code for process zero */ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;strcpy(message,&quot;TEST&quot;); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: sending '%s'\n&quot;, myrank, timestamp(), message); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(message, strlen(message)+1, MPI_CHAR, mysize-1, 99, MPI_COMM_WORLD, &amp;request); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: sent\n&quot;, myrank, timestamp()); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;else if (myrank == mysize-1)               /* code for last process */ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{ 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: receiving\n&quot;, myrank, timestamp()); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(message, 20, MPI_CHAR, 0, 99, MPI_COMM_WORLD, &amp;request); /* Start it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request, &amp;status); /* Wait for it */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: received '%s'\n&quot;, myrank, timestamp(), message); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: sleeping\n&quot;, myrank, timestamp());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sleep(5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Proc %d, %s: finalizing\n&quot;, myrank, timestamp());
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize(); 
<br>
} 
<br>
----------------------------------------------------------------------
<br>
<p>Proc 2, 16:16:19: initialized
<br>
Proc 2, 16:16:19: sleeping
<br>
Proc 3, 16:16:19: initialized
<br>
Proc 3, 16:16:19: sleeping
<br>
Proc 0, 16:16:19: initialized
<br>
Proc 0, 16:16:19: sending 'TEST'
<br>
Proc 0, 16:16:19: sent
<br>
Proc 0, 16:16:19: sleeping
<br>
Proc 5, 16:16:19: initialized
<br>
Proc 5, 16:16:19: sleeping
<br>
Proc 6, 16:16:19: initialized
<br>
Proc 6, 16:16:19: sleeping
<br>
Proc 7, 16:16:19: initialized
<br>
Proc 7, 16:16:19: receiving
<br>
Proc 1, 16:16:19: initialized
<br>
Proc 1, 16:16:19: sleeping
<br>
Proc 4, 16:16:19: initialized
<br>
Proc 4, 16:16:19: sleeping
<br>
Proc 3, 16:16:24: finalizing
<br>
Proc 5, 16:16:24: finalizing
<br>
Proc 0, 16:16:24: finalizing
<br>
Proc 2, 16:16:24: finalizing
<br>
Proc 6, 16:16:24: finalizing
<br>
Proc 1, 16:16:24: finalizing
<br>
Proc 4, 16:16:24: finalizing
<br>
Proc 7, 16:16:24: received 'TEST'
<br>
Proc 7, 16:16:24: sleeping
<br>
Proc 7, 16:16:29: finalizing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Previous message:</strong> <a href="5514.php">George Bosilca: "Re: [OMPI devel] RFC: eliminating &quot;descriptor&quot; argument from sendi function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
<li><strong>Reply:</strong> <a href="5516.php">George Bosilca: "Re: [OMPI devel] Failure to make progress"</a>
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
