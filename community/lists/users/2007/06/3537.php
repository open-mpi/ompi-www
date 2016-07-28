<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 14:49:14 2007" -->
<!-- isoreceived="20070621184914" -->
<!-- sent="Thu, 21 Jun 2007 11:48:59 -0700" -->
<!-- isosent="20070621184859" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments" -->
<!-- id="23852128-C077-4B47-A44F-F1588F085167_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1182432754.21117.22.camel_at_dhcp152-54-8-239.europa.renci.org" -->
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
<strong>Date:</strong> 2007-06-21 14:48:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3536.php">&#197;ke Sandgren: "Re: [OMPI users] [Fwd: MPI question/problem]	including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like everything is fine ... I had the MPI parameter check  
<br>
option disabled, that's why it didn't complain about calling free on  
<br>
the MPI_COMM_NULL. If I activate the check, the program now fails as  
<br>
expected (i.e. complain and give up on the MPI_Comm_free).
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jun 21, 2007, at 6:32 AM, Jeffrey L. Tilson wrote:
<br>
<p><span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; It does seem to me that your execution is correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here are my stats...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ mpicc -V
</span><br>
<span class="quotelev1">&gt; Intel(R) C Compiler for Intel(R) EM64T-based applications, Version
</span><br>
<span class="quotelev1">&gt; 9.1    Build 20060925 Package ID: l_cc_c_9.1.044
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2006 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bash-3.00$ uname -a
</span><br>
<span class="quotelev1">&gt; Linux kh0.renci.org 2.6.9-42.0.8.ELsmp #1 SMP Mon Feb 19 13:45:17 EST
</span><br>
<span class="quotelev1">&gt; 2007 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (snip)
</span><br>
<span class="quotelev1">&gt; model           : 15
</span><br>
<span class="quotelev1">&gt; model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping        : 6
</span><br>
<span class="quotelev1">&gt; cpu MHz         : 2660.004
</span><br>
<span class="quotelev1">&gt; cache size      : 4096 KB
</span><br>
<span class="quotelev1">&gt; (snip)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lauching the job as
</span><br>
<span class="quotelev2">&gt;&gt; /mpirun --mca btl mvapi,self ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version:
</span><br>
<span class="quotelev1">&gt; openMPI 1.1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, 2007-06-20 at 21:52, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the proper MPI_Finalize added at the end of the main function,
</span><br>
<span class="quotelev2">&gt;&gt; your program orks fine with the current version of Open MPI up to 32
</span><br>
<span class="quotelev2">&gt;&gt; processors. Here is the output I got for 4 processors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am 2 of 4 WORLD procesors
</span><br>
<span class="quotelev2">&gt;&gt; I am 3 of 4 WORLD procesors
</span><br>
<span class="quotelev2">&gt;&gt; I am 0 of 4 WORLD procesors
</span><br>
<span class="quotelev2">&gt;&gt; I am 1 of 4 WORLD procesors
</span><br>
<span class="quotelev2">&gt;&gt; Initial inttemp 1
</span><br>
<span class="quotelev2">&gt;&gt; Initial inttemp 0
</span><br>
<span class="quotelev2">&gt;&gt; final inttemp 0,0
</span><br>
<span class="quotelev2">&gt;&gt; 0, WORLD barrier leaving routine
</span><br>
<span class="quotelev2">&gt;&gt; final inttemp 1,0
</span><br>
<span class="quotelev2">&gt;&gt; 1, WORLD barrier leaving routine
</span><br>
<span class="quotelev2">&gt;&gt; Initial inttemp 2
</span><br>
<span class="quotelev2">&gt;&gt; final inttemp 2,0
</span><br>
<span class="quotelev2">&gt;&gt; 2, WORLD barrier leaving routine
</span><br>
<span class="quotelev2">&gt;&gt; SERVER Got a DONE flag
</span><br>
<span class="quotelev2">&gt;&gt; Initial inttemp 3
</span><br>
<span class="quotelev2">&gt;&gt; final inttemp 3,0
</span><br>
<span class="quotelev2">&gt;&gt; 3, WORLD barrier leaving routine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This output seems to indicate that the program is running to
</span><br>
<span class="quotelev2">&gt;&gt; completion and it does what you expect it to do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Btw, what version of Open MPI are you using and on what kind of
</span><br>
<span class="quotelev2">&gt;&gt; hardware ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 20, 2007, at 6:31 PM, Jeffrey L. Tilson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ANL suggested I post this question to you. This is my second
</span><br>
<span class="quotelev3">&gt;&gt;&gt; posting......but now with the proper attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeffrey Tilson &lt;jltilson_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: June 20, 2007 5:17:50 PM PDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: mpich2-maint_at_[hidden], Jeffrey Tilson &lt;jtilson_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: MPI question/problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will probably turn out to be my fault as I haven't used MPI in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a few years.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI book). I am using the client-server scenario. The MPI book
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifies the three functions required. Two are collective and one
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is not. Only the  two collectives are tested in the supplied code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All three of the MPI functions are reproduced in the attached code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however.  I wrote a tiny application to create and free a counter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object and it fails.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to know if this is a bug in the MPI book and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; misunderstanding on my part.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The complete code is attached. I was using openMPI/intel to compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error I get is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that job rank 0 with PID 22635 on node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've attempted to google my way to understanding but with little
</span><br>
<span class="quotelev3">&gt;&gt;&gt; success. If someone could point me to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a sample application that actually uses these functions, I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciate it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry if this is the wrong list, it is not an MPICH question and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wasn't sure where to turn.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --jeff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* A beginning piece of code to perform large-scale web
</span><br>
<span class="quotelev3">&gt;&gt;&gt; construction.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; typedef struct {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char description[1024];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double startwtime;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double endwtime;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; double difftime;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } Timer;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* prototypes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int MPE_Counter_nxtval(MPI_Comm , int *);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int MPE_Counter_free( MPI_Comm *, MPI_Comm * );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void MPE_Counter_create( MPI_Comm , MPI_Comm *, MPI_Comm *);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* End prototypes */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* Globals */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int          rank,numsize;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( argc, argv )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int argc;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char **argv;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         int i,j;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Status   status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Request  r;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm  smaller_comm,  counter_comm;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	int numtimings=0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	int inttemp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	int value=-1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	int server;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //Init parallel environment
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Comm_size( MPI_COMM_WORLD, &amp;numsize );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;I am %i of %i WORLD procesors\n&quot;,rank,numsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	server = numsize -1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPE_Counter_create( MPI_COMM_WORLD, &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	printf(&quot;Initial inttemp %i\n&quot;,rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	inttemp = MPE_Counter_free( &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	printf(&quot;final inttemp %i,%i\n&quot;,rank,inttemp);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         printf(&quot;%i, WORLD barrier leaving routine\n&quot;,rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //// Add new MPICH based shared counter.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; //// grabbed from <a href="http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/">http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advanced/nxtval_create_c.htm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* tag values */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define REQUEST 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define GOAWAY  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define VALUE   2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MPE_SUCCESS 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; void MPE_Counter_create( MPI_Comm oldcomm, MPI_Comm * smaller_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm * counter_comm )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int counter = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int message, done = 0, myid, numprocs, server, color,ranks[1];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Group oldgroup, smaller_group;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size(oldcomm, &amp;numprocs);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank(oldcomm, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     server = numprocs-1;     /*   last proc is server */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_dup( oldcomm, counter_comm ); /* make one new comm */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	if (myid == server) color = MPI_UNDEFINED;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	else color =0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_split( oldcomm, color, myid, smaller_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (myid == server) {       /* I am the server */
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         while (!done) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ANY_TAG,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                      *counter_comm, &amp;status );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             if (status.MPI_TAG == REQUEST) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 MPI_Send(&amp;counter, 1, MPI_INT, status.MPI_SOURCE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; VALUE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          *counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 counter++;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             else if (status.MPI_TAG == GOAWAY) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		printf(&quot;SERVER Got a DONE flag\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 done = 1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 fprintf(stderr, &quot;bad tag sent to MPE counter\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		MPI_Abort(*counter_comm, 1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPE_Counter_free( smaller_comm, counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /*******************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int MPE_Counter_free( MPI_Comm *smaller_comm, MPI_Comm *
</span><br>
<span class="quotelev3">&gt;&gt;&gt; counter_comm )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int myid, numprocs;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_rank( *counter_comm, &amp;myid );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size( *counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (myid == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         MPI_Send(NULL, 0, MPI_INT, numprocs-1, GOAWAY,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *counter_comm);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_free( counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     if (*smaller_comm != MPI_COMM_NULL) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	MPI_Comm_free( smaller_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	}
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /************************/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int MPE_Counter_nxtval(MPI_Comm counter_comm, int * value)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     int server,numprocs;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Comm_size( counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     server = numprocs-1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Send(NULL, 0, MPI_INT, server, REQUEST, counter_comm );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     MPI_Recv(value, 1, MPI_INT, server, VALUE, counter_comm,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &amp;status );
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _____________________________________________________________________ 
</span><br>
<span class="quotelev2">&gt;&gt; _
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3537/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3538.php">Anthony Chan: "Re: [OMPI users] [Fwd: MPI	question/problem]	including	code	attachments"</a>
<li><strong>Previous message:</strong> <a href="3536.php">&#197;ke Sandgren: "Re: [OMPI users] [Fwd: MPI question/problem]	including	code	attachments"</a>
<li><strong>In reply to:</strong> <a href="3528.php">Jeffrey L. Tilson: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3555.php">Brian Dobbins: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
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
