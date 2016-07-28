<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 21:53:01 2007" -->
<!-- isoreceived="20070621015301" -->
<!-- sent="Wed, 20 Jun 2007 18:52:51 -0700" -->
<!-- isosent="20070621015251" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI question/problem] including code attachments" -->
<!-- id="901B0C67-FCB1-4068-A102-439EFCA6E8A8_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4679D4E5.6010004_at_renci.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-20 21:52:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>In reply to:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>With the proper MPI_Finalize added at the end of the main function,  
<br>
your program orks fine with the current version of Open MPI up to 32  
<br>
processors. Here is the output I got for 4 processors:
<br>
<p>I am 2 of 4 WORLD procesors
<br>
I am 3 of 4 WORLD procesors
<br>
I am 0 of 4 WORLD procesors
<br>
I am 1 of 4 WORLD procesors
<br>
Initial inttemp 1
<br>
Initial inttemp 0
<br>
final inttemp 0,0
<br>
0, WORLD barrier leaving routine
<br>
final inttemp 1,0
<br>
1, WORLD barrier leaving routine
<br>
Initial inttemp 2
<br>
final inttemp 2,0
<br>
2, WORLD barrier leaving routine
<br>
SERVER Got a DONE flag
<br>
Initial inttemp 3
<br>
final inttemp 3,0
<br>
3, WORLD barrier leaving routine
<br>
<p>This output seems to indicate that the program is running to  
<br>
completion and it does what you expect it to do.
<br>
<p>Btw, what version of Open MPI are you using and on what kind of  
<br>
hardware ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 20, 2007, at 6:31 PM, Jeffrey L. Tilson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; ANL suggested I post this question to you. This is my second  
</span><br>
<span class="quotelev1">&gt; posting......but now with the proper attachments.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: Jeffrey Tilson &lt;jltilson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: June 20, 2007 5:17:50 PM PDT
</span><br>
<span class="quotelev1">&gt; To: mpich2-maint_at_[hidden], Jeffrey Tilson &lt;jtilson_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: MPI question/problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; This will probably turn out to be my fault as I haven't used MPI in  
</span><br>
<span class="quotelev1">&gt; a few years.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the  
</span><br>
<span class="quotelev1">&gt; MPI book). I am using the client-server scenario. The MPI book  
</span><br>
<span class="quotelev1">&gt; specifies the three functions required. Two are collective and one  
</span><br>
<span class="quotelev1">&gt; is not. Only the  two collectives are tested in the supplied code.  
</span><br>
<span class="quotelev1">&gt; All three of the MPI functions are reproduced in the attached code,  
</span><br>
<span class="quotelev1">&gt; however.  I wrote a tiny application to create and free a counter  
</span><br>
<span class="quotelev1">&gt; object and it fails.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to know if this is a bug in the MPI book and a  
</span><br>
<span class="quotelev1">&gt; misunderstanding on my part.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The complete code is attached. I was using openMPI/intel to compile  
</span><br>
<span class="quotelev1">&gt; and run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error I get is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that job rank 0 with PID 22635 on node  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've attempted to google my way to understanding but with little  
</span><br>
<span class="quotelev1">&gt; success. If someone could point me to
</span><br>
<span class="quotelev1">&gt; a sample application that actually uses these functions, I would  
</span><br>
<span class="quotelev1">&gt; appreciate it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry if this is the wrong list, it is not an MPICH question and I  
</span><br>
<span class="quotelev1">&gt; wasn't sure where to turn.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; --jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* A beginning piece of code to perform large-scale web  
</span><br>
<span class="quotelev1">&gt; construction.  */
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; typedef struct {
</span><br>
<span class="quotelev1">&gt; char description[1024];
</span><br>
<span class="quotelev1">&gt; double startwtime;
</span><br>
<span class="quotelev1">&gt; double endwtime;
</span><br>
<span class="quotelev1">&gt; double difftime;
</span><br>
<span class="quotelev1">&gt; } Timer;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* prototypes */
</span><br>
<span class="quotelev1">&gt; int MPE_Counter_nxtval(MPI_Comm , int *);
</span><br>
<span class="quotelev1">&gt; int MPE_Counter_free( MPI_Comm *, MPI_Comm * );
</span><br>
<span class="quotelev1">&gt; void MPE_Counter_create( MPI_Comm , MPI_Comm *, MPI_Comm *);
</span><br>
<span class="quotelev1">&gt; /* End prototypes */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* Globals */
</span><br>
<span class="quotelev1">&gt;         int          rank,numsize;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main( argc, argv )
</span><br>
<span class="quotelev1">&gt; int argc;
</span><br>
<span class="quotelev1">&gt; char **argv;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         int i,j;
</span><br>
<span class="quotelev1">&gt;         MPI_Status   status;
</span><br>
<span class="quotelev1">&gt;         MPI_Request  r;
</span><br>
<span class="quotelev1">&gt;         MPI_Comm  smaller_comm,  counter_comm;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	int numtimings=0;
</span><br>
<span class="quotelev1">&gt; 	int inttemp;
</span><br>
<span class="quotelev1">&gt; 	int value=-1;
</span><br>
<span class="quotelev1">&gt; 	int server;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //Init parallel environment
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev1">&gt;         MPI_Comm_size( MPI_COMM_WORLD, &amp;numsize );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;I am %i of %i WORLD procesors\n&quot;,rank,numsize);
</span><br>
<span class="quotelev1">&gt; 	server = numsize -1;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	MPE_Counter_create( MPI_COMM_WORLD, &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;Initial inttemp %i\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	inttemp = MPE_Counter_free( &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;final inttemp %i,%i\n&quot;,rank,inttemp);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         printf(&quot;%i, WORLD barrier leaving routine\n&quot;,rank);
</span><br>
<span class="quotelev1">&gt;         MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; //// Add new MPICH based shared counter.
</span><br>
<span class="quotelev1">&gt; //// grabbed from <a href="http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/">http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/</a> 
</span><br>
<span class="quotelev1">&gt; advanced/nxtval_create_c.htm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* tag values */
</span><br>
<span class="quotelev1">&gt; #define REQUEST 0
</span><br>
<span class="quotelev1">&gt; #define GOAWAY  1
</span><br>
<span class="quotelev1">&gt; #define VALUE   2
</span><br>
<span class="quotelev1">&gt; #define MPE_SUCCESS 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void MPE_Counter_create( MPI_Comm oldcomm, MPI_Comm * smaller_comm,  
</span><br>
<span class="quotelev1">&gt; MPI_Comm * counter_comm )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int counter = 0;
</span><br>
<span class="quotelev1">&gt;     int message, done = 0, myid, numprocs, server, color,ranks[1];
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     MPI_Group oldgroup, smaller_group;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size(oldcomm, &amp;numprocs);
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank(oldcomm, &amp;myid);
</span><br>
<span class="quotelev1">&gt;     server = numprocs-1;     /*   last proc is server */
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_dup( oldcomm, counter_comm ); /* make one new comm */
</span><br>
<span class="quotelev1">&gt; 	if (myid == server) color = MPI_UNDEFINED;
</span><br>
<span class="quotelev1">&gt; 	else color =0;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_split( oldcomm, color, myid, smaller_comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (myid == server) {       /* I am the server */
</span><br>
<span class="quotelev1">&gt;         while (!done) {
</span><br>
<span class="quotelev1">&gt;             MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE,  
</span><br>
<span class="quotelev1">&gt; MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt;                      *counter_comm, &amp;status );
</span><br>
<span class="quotelev1">&gt;             if (status.MPI_TAG == REQUEST) {
</span><br>
<span class="quotelev1">&gt;                 MPI_Send(&amp;counter, 1, MPI_INT, status.MPI_SOURCE,  
</span><br>
<span class="quotelev1">&gt; VALUE,
</span><br>
<span class="quotelev1">&gt;                          *counter_comm );
</span><br>
<span class="quotelev1">&gt;                 counter++;
</span><br>
<span class="quotelev1">&gt;             }
</span><br>
<span class="quotelev1">&gt;             else if (status.MPI_TAG == GOAWAY) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;SERVER Got a DONE flag\n&quot;);
</span><br>
<span class="quotelev1">&gt;                 done = 1;
</span><br>
<span class="quotelev1">&gt; 	    }
</span><br>
<span class="quotelev1">&gt;             else {
</span><br>
<span class="quotelev1">&gt;                 fprintf(stderr, &quot;bad tag sent to MPE counter\n&quot;);
</span><br>
<span class="quotelev1">&gt; 		MPI_Abort(*counter_comm, 1);
</span><br>
<span class="quotelev1">&gt; 	   }
</span><br>
<span class="quotelev1">&gt;         }
</span><br>
<span class="quotelev1">&gt;         MPE_Counter_free( smaller_comm, counter_comm );
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*******************************/
</span><br>
<span class="quotelev1">&gt; int MPE_Counter_free( MPI_Comm *smaller_comm, MPI_Comm *  
</span><br>
<span class="quotelev1">&gt; counter_comm )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int myid, numprocs;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( *counter_comm, &amp;myid );
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size( *counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (myid == 0)
</span><br>
<span class="quotelev1">&gt;         MPI_Send(NULL, 0, MPI_INT, numprocs-1, GOAWAY, *counter_comm);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( counter_comm );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (*smaller_comm != MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_free( smaller_comm );
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /************************/
</span><br>
<span class="quotelev1">&gt; int MPE_Counter_nxtval(MPI_Comm counter_comm, int * value)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int server,numprocs;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_size( counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev1">&gt;     server = numprocs-1;
</span><br>
<span class="quotelev1">&gt;     MPI_Send(NULL, 0, MPI_INT, server, REQUEST, counter_comm );
</span><br>
<span class="quotelev1">&gt;     MPI_Recv(value, 1, MPI_INT, server, VALUE, counter_comm,  
</span><br>
<span class="quotelev1">&gt; &amp;status );
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3523/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<li><strong>In reply to:</strong> <a href="3522.php">Jeffrey L. Tilson: "[OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3524.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
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
