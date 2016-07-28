<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 21:23:00 2007" -->
<!-- isoreceived="20070621012300" -->
<!-- sent="Wed, 20 Jun 2007 21:31:17 -0400" -->
<!-- isosent="20070621013117" -->
<!-- name="Jeffrey L. Tilson" -->
<!-- email="jtilson_at_[hidden]" -->
<!-- subject="[OMPI users] [Fwd: MPI question/problem] including code attachments" -->
<!-- id="4679D4E5.6010004_at_renci.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Jeffrey L. Tilson (<em>jtilson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 21:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3521.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: Re: [MPICH2 Req #3480] MPI question/problem]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Reply:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Maybe reply:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
ANL suggested I post this question to you. This is my second 
<br>
posting......but now with the proper attachments.
<br>
<p>
<br><p><strong>attached mail follows:</strong><hr>

<p>
Hello All,
<br>
This will probably turn out to be my fault as I haven't used MPI in a 
<br>
few years.
<br>
<p>I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the MPI 
<br>
book). I am using the client-server scenario. The MPI book specifies the 
<br>
three functions required. Two are collective and one is not. Only the  
<br>
two collectives are tested in the supplied code. All three of the MPI 
<br>
functions are reproduced in the attached code, however.  I wrote a tiny 
<br>
application to create and free a counter object and it fails.
<br>
<p>I need to know if this is a bug in the MPI book and a misunderstanding 
<br>
on my part.
<br>
<p>The complete code is attached. I was using openMPI/intel to compile and 
<br>
run.
<br>
<p>The error I get is:
<br>
<p><span class="quotelev1">&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 22635 on node 
</span><br>
<span class="quotelev1">&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<p>I've attempted to google my way to understanding but with little 
<br>
success. If someone could point me to
<br>
a sample application that actually uses these functions, I would 
<br>
appreciate it.
<br>
<p>Sorry if this is the wrong list, it is not an MPICH question and I 
<br>
wasn't sure where to turn.
<br>
<p>Thanks,
<br>
--jeff
<br>
<p>------------------------------------------------------------------------
<br>
<p><p>
<br><p>
/* A beginning piece of code to perform large-scale web construction.  */ 
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>typedef struct {
<br>
char description[1024];
<br>
double startwtime;
<br>
double endwtime;
<br>
double difftime;
<br>
} Timer;
<br>
<p>/* prototypes */
<br>
int MPE_Counter_nxtval(MPI_Comm , int *);
<br>
int MPE_Counter_free( MPI_Comm *, MPI_Comm * );
<br>
void MPE_Counter_create( MPI_Comm , MPI_Comm *, MPI_Comm *);
<br>
/* End prototypes */
<br>
<p>/* Globals */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int          rank,numsize;
<br>
<p>int main( argc, argv )
<br>
int argc;
<br>
char **argv;
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i,j;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status   status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request  r;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm  smaller_comm,  counter_comm;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numtimings=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int inttemp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int value=-1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int server;
<br>
<p>//Init parallel environment
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init( &amp;argc, &amp;argv );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( MPI_COMM_WORLD, &amp;numsize );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;I am %i of %i WORLD procesors\n&quot;,rank,numsize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;server = numsize -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPE_Counter_create( MPI_COMM_WORLD, &amp;smaller_comm, &amp;counter_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Initial inttemp %i\n&quot;,rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inttemp = MPE_Counter_free( &amp;smaller_comm, &amp;counter_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;final inttemp %i,%i\n&quot;,rank,inttemp);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%i, WORLD barrier leaving routine\n&quot;,rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier( MPI_COMM_WORLD );
<br>
}
<br>
<p>//// Add new MPICH based shared counter.
<br>
//// grabbed from <a href="http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/advanced/nxtval_create_c.htm">http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/advanced/nxtval_create_c.htm</a>
<br>
<p>/* tag values */
<br>
#define REQUEST 0
<br>
#define GOAWAY  1
<br>
#define VALUE   2
<br>
#define MPE_SUCCESS 0 
<br>
<p>void MPE_Counter_create( MPI_Comm oldcomm, MPI_Comm * smaller_comm, MPI_Comm * counter_comm )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int counter = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int message, done = 0, myid, numprocs, server, color,ranks[1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Group oldgroup, smaller_group;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(oldcomm, &amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(oldcomm, &amp;myid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;server = numprocs-1;     /*   last proc is server */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_dup( oldcomm, counter_comm ); /* make one new comm */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == server) color = MPI_UNDEFINED;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else color =0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_split( oldcomm, color, myid, smaller_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (myid == server) {       /* I am the server */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (!done) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE, MPI_ANY_TAG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*counter_comm, &amp;status ); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (status.MPI_TAG == REQUEST) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;counter, 1, MPI_INT, status.MPI_SOURCE, VALUE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*counter_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter++;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else if (status.MPI_TAG == GOAWAY) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;SERVER Got a DONE flag\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;done = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;bad tag sent to MPE counter\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(*counter_comm, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPE_Counter_free( smaller_comm, counter_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
/*******************************/
<br>
int MPE_Counter_free( MPI_Comm *smaller_comm, MPI_Comm * counter_comm )      
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int myid, numprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank( *counter_comm, &amp;myid );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( *counter_comm, &amp;numprocs );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(NULL, 0, MPI_INT, numprocs-1, GOAWAY, *counter_comm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( counter_comm );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (*smaller_comm != MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free( smaller_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>/************************/
<br>
int MPE_Counter_nxtval(MPI_Comm counter_comm, int * value)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int server,numprocs;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size( counter_comm, &amp;numprocs );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;server = numprocs-1; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(NULL, 0, MPI_INT, server, REQUEST, counter_comm );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(value, 1, MPI_INT, server, VALUE, counter_comm, &amp;status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Previous message:</strong> <a href="3521.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: Re: [MPICH2 Req #3480] MPI question/problem]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Reply:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>Maybe reply:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
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
