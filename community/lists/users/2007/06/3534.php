<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 13:55:38 2007" -->
<!-- isoreceived="20070621175538" -->
<!-- sent="Thu, 21 Jun 2007 10:55:30 -0700" -->
<!-- isosent="20070621175530" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments" -->
<!-- id="7A878415-D08A-41A7-BFDB-D560685B39BD_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.58.0706210330460.26599_at_triumph.mcs.anl.gov" -->
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
<strong>Date:</strong> 2007-06-21 13:55:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3535.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3533.php">Brian Granger: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>In reply to:</strong> <a href="3525.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3535.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was using the latest trunk. Now that you raised the issue about the  
<br>
code ... I read it. You're right, for the server process (rank n-1 on  
<br>
MPI_COMM_WORLD) there are 2 calls to MPI_Comm_free for the  
<br>
counter_comm, and [obviously] the second one *should* fail. I'll take  
<br>
a look in the Open MPI code base to see where the problem is coming  
<br>
from.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks for the hint,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 21, 2007, at 1:42 AM, Anthony Chan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forgot to mention, to get Jeff's program to work, I modified
</span><br>
<span class="quotelev1">&gt; MPE_Counter_free() to check for MPI_COMM_NULL, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ( *counter_comm != MPI_COMM_NULL ) {    /* new line */
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_rank( *counter_comm, &amp;myid );
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     MPI_Comm_free( counter_comm );
</span><br>
<span class="quotelev1">&gt; }                                          /* new line */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With above modification and MPI_Finalize in the main(). I was able  
</span><br>
<span class="quotelev1">&gt; to run
</span><br>
<span class="quotelev1">&gt; the program with OpenMPI (as well as mpich2).  Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A.Chan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 21 Jun 2007, Anthony Chan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi George,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just out of curiosity, what version of OpenMPI that you used works  
</span><br>
<span class="quotelev2">&gt;&gt; fine
</span><br>
<span class="quotelev2">&gt;&gt; with Jeff's program (after adding MPI_Finalize)?  The program  
</span><br>
<span class="quotelev2">&gt;&gt; aborts with
</span><br>
<span class="quotelev2">&gt;&gt; either mpich2-1.0.5p4 or OpenMPI-1.2.3 on a AMD x86_64 box(Ubuntu  
</span><br>
<span class="quotelev2">&gt;&gt; 7.04)
</span><br>
<span class="quotelev2">&gt;&gt; because MPI_Comm_rank() is called with MPI_COMM_NULL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With OpenMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~/openmpi/install_linux64_123_gcc4_thd/bin/mpiexec -n 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; [octagon.mcs.anl.gov:23279] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev2">&gt;&gt; [octagon.mcs.anl.gov:23279] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [octagon.mcs.anl.gov:23279] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev2">&gt;&gt; [octagon.mcs.anl.gov:23279] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI hangs at abort that I need to kill the mpiexec process by  
</span><br>
<span class="quotelev2">&gt;&gt; hand.
</span><br>
<span class="quotelev2">&gt;&gt; You can reproduce the hang with the following test program with
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-1.2.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /homes/chan/tmp/tmp6&gt; cat test_comm_rank.c
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;     int myrank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Comm_rank( MPI_COMM_NULL, &amp;myrank );
</span><br>
<span class="quotelev2">&gt;&gt;     printf( &quot;myrank = %d\n&quot;, myrank );
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;     return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since mpiexec hangs, so it may be a bug somewhere in 1.2.3 release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A.Chan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, 20 Jun 2007, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the proper MPI_Finalize added at the end of the main function,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your program orks fine with the current version of Open MPI up to 32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors. Here is the output I got for 4 processors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 2 of 4 WORLD procesors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 3 of 4 WORLD procesors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 0 of 4 WORLD procesors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 1 of 4 WORLD procesors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initial inttemp 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initial inttemp 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final inttemp 0,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0, WORLD barrier leaving routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final inttemp 1,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1, WORLD barrier leaving routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initial inttemp 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final inttemp 2,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2, WORLD barrier leaving routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SERVER Got a DONE flag
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Initial inttemp 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; final inttemp 3,0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3, WORLD barrier leaving routine
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This output seems to indicate that the program is running to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completion and it does what you expect it to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Btw, what version of Open MPI are you using and on what kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hardware ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 20, 2007, at 6:31 PM, Jeffrey L. Tilson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ANL suggested I post this question to you. This is my second
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; posting......but now with the proper attachments.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeffrey Tilson &lt;jltilson_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: June 20, 2007 5:17:50 PM PDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: mpich2-maint_at_[hidden], Jeffrey Tilson &lt;jtilson_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: MPI question/problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello All,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will probably turn out to be my fault as I haven't used MPI in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a few years.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI book). I am using the client-server scenario. The MPI book
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specifies the three functions required. Two are collective and one
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is not. Only the  two collectives are tested in the supplied code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; All three of the MPI functions are reproduced in the attached code,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; however.  I wrote a tiny application to create and free a counter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; object and it fails.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I need to know if this is a bug in the MPI book and a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; misunderstanding on my part.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The complete code is attached. I was using openMPI/intel to compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The error I get is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 22635 on node
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've attempted to google my way to understanding but with little
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; success. If someone could point me to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a sample application that actually uses these functions, I would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciate it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry if this is the wrong list, it is not an MPICH question and I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wasn't sure where to turn.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* A beginning piece of code to perform large-scale web
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; construction.  */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; typedef struct {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; char description[1024];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double startwtime;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double endwtime;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; double difftime;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; } Timer;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* prototypes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPE_Counter_nxtval(MPI_Comm , int *);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPE_Counter_free( MPI_Comm *, MPI_Comm * );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void MPE_Counter_create( MPI_Comm , MPI_Comm *, MPI_Comm *);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* End prototypes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* Globals */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int          rank,numsize;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int main( argc, argv )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int argc;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; char **argv;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         int i,j;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Status   status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Request  r;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm  smaller_comm,  counter_comm;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	int numtimings=0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	int inttemp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	int value=-1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	int server;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //Init parallel environment
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Comm_size( MPI_COMM_WORLD, &amp;numsize );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf(&quot;I am %i of %i WORLD procesors\n&quot;,rank,numsize);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	server = numsize -1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	MPE_Counter_create( MPI_COMM_WORLD, &amp;smaller_comm,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	printf(&quot;Initial inttemp %i\n&quot;,rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	inttemp = MPE_Counter_free( &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	printf(&quot;final inttemp %i,%i\n&quot;,rank,inttemp);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         printf(&quot;%i, WORLD barrier leaving routine\n&quot;,rank);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //// Add new MPICH based shared counter.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; //// grabbed from <a href="http://www-unix.mcs.anl.gov/mpi/usingmpi/">http://www-unix.mcs.anl.gov/mpi/usingmpi/</a> 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; examples/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; advanced/nxtval_create_c.htm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /* tag values */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define REQUEST 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define GOAWAY  1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define VALUE   2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define MPE_SUCCESS 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; void MPE_Counter_create( MPI_Comm oldcomm, MPI_Comm * smaller_comm,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_Comm * counter_comm )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int counter = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int message, done = 0, myid, numprocs, server, color,ranks[1];
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Group oldgroup, smaller_group;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_size(oldcomm, &amp;numprocs);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_rank(oldcomm, &amp;myid);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     server = numprocs-1;     /*   last proc is server */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_dup( oldcomm, counter_comm ); /* make one new comm */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	if (myid == server) color = MPI_UNDEFINED;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	else color =0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_split( oldcomm, color, myid, smaller_comm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (myid == server) {       /* I am the server */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         while (!done) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_ANY_TAG,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                      *counter_comm, &amp;status );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             if (status.MPI_TAG == REQUEST) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 MPI_Send(&amp;counter, 1, MPI_INT, status.MPI_SOURCE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; VALUE,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                          *counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 counter++;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             else if (status.MPI_TAG == GOAWAY) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		printf(&quot;SERVER Got a DONE flag\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 done = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	    }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             else {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 fprintf(stderr, &quot;bad tag sent to MPE counter\n&quot;);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 		MPI_Abort(*counter_comm, 1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	   }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPE_Counter_free( smaller_comm, counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /*******************************/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPE_Counter_free( MPI_Comm *smaller_comm, MPI_Comm *
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; counter_comm )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int myid, numprocs;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_rank( *counter_comm, &amp;myid );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_size( *counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (myid == 0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         MPI_Send(NULL, 0, MPI_INT, numprocs-1, GOAWAY,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *counter_comm);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_free( counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     if (*smaller_comm != MPI_COMM_NULL) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	MPI_Comm_free( smaller_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	}
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /************************/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int MPE_Counter_nxtval(MPI_Comm counter_comm, int * value)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     int server,numprocs;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Comm_size( counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     server = numprocs-1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Send(NULL, 0, MPI_INT, server, REQUEST, counter_comm );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     MPI_Recv(value, 1, MPI_INT, server, VALUE, counter_comm,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp;status );
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3534/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3535.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3533.php">Brian Granger: "Re: [OMPI users] mpi python recommendation"</a>
<li><strong>In reply to:</strong> <a href="3525.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3535.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI question/problem] including	code	attachments"</a>
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
