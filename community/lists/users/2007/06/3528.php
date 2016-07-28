<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 09:32:40 2007" -->
<!-- isoreceived="20070621133240" -->
<!-- sent="Thu, 21 Jun 2007 09:32:34 -0400" -->
<!-- isosent="20070621133234" -->
<!-- name="Jeffrey L. Tilson" -->
<!-- email="jtilson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments" -->
<!-- id="1182432754.21117.22.camel_at_dhcp152-54-8-239.europa.renci.org" -->
<!-- inreplyto="901B0C67-FCB1-4068-A102-439EFCA6E8A8_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2007-06-21 09:32:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>In reply to:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George, 
<br>
It does seem to me that your execution is correct.
<br>
<p>Here are my stats...
<br>
<p>-bash-3.00$ mpicc -V
<br>
Intel(R) C Compiler for Intel(R) EM64T-based applications, Version
<br>
9.1    Build 20060925 Package ID: l_cc_c_9.1.044
<br>
Copyright (C) 1985-2006 Intel Corporation.  All rights reserved.
<br>
<p>-bash-3.00$ uname -a
<br>
Linux kh0.renci.org 2.6.9-42.0.8.ELsmp #1 SMP Mon Feb 19 13:45:17 EST
<br>
2007 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>(snip)
<br>
model           : 15
<br>
model name      : Intel(R) Xeon(R) CPU            5150  @ 2.66GHz
<br>
stepping        : 6
<br>
cpu MHz         : 2660.004
<br>
cache size      : 4096 KB
<br>
(snip)
<br>
<p><p>Lauching the job as
<br>
<span class="quotelev1">&gt; /mpirun --mca btl mvapi,self ./a.out
</span><br>
<p><p>Version:
<br>
openMPI 1.1.4
<br>
<p><p>--jeff
<br>
<p><p><p>On Wed, 2007-06-20 at 21:52, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With the proper MPI_Finalize added at the end of the main function,  
</span><br>
<span class="quotelev1">&gt; your program orks fine with the current version of Open MPI up to 32  
</span><br>
<span class="quotelev1">&gt; processors. Here is the output I got for 4 processors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am 2 of 4 WORLD procesors
</span><br>
<span class="quotelev1">&gt; I am 3 of 4 WORLD procesors
</span><br>
<span class="quotelev1">&gt; I am 0 of 4 WORLD procesors
</span><br>
<span class="quotelev1">&gt; I am 1 of 4 WORLD procesors
</span><br>
<span class="quotelev1">&gt; Initial inttemp 1
</span><br>
<span class="quotelev1">&gt; Initial inttemp 0
</span><br>
<span class="quotelev1">&gt; final inttemp 0,0
</span><br>
<span class="quotelev1">&gt; 0, WORLD barrier leaving routine
</span><br>
<span class="quotelev1">&gt; final inttemp 1,0
</span><br>
<span class="quotelev1">&gt; 1, WORLD barrier leaving routine
</span><br>
<span class="quotelev1">&gt; Initial inttemp 2
</span><br>
<span class="quotelev1">&gt; final inttemp 2,0
</span><br>
<span class="quotelev1">&gt; 2, WORLD barrier leaving routine
</span><br>
<span class="quotelev1">&gt; SERVER Got a DONE flag
</span><br>
<span class="quotelev1">&gt; Initial inttemp 3
</span><br>
<span class="quotelev1">&gt; final inttemp 3,0
</span><br>
<span class="quotelev1">&gt; 3, WORLD barrier leaving routine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This output seems to indicate that the program is running to  
</span><br>
<span class="quotelev1">&gt; completion and it does what you expect it to do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Btw, what version of Open MPI are you using and on what kind of  
</span><br>
<span class="quotelev1">&gt; hardware ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 20, 2007, at 6:31 PM, Jeffrey L. Tilson wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; ANL suggested I post this question to you. This is my second  
</span><br>
<span class="quotelev2">&gt; &gt; posting......but now with the proper attachments.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeffrey Tilson &lt;jltilson_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: June 20, 2007 5:17:50 PM PDT
</span><br>
<span class="quotelev2">&gt; &gt; To: mpich2-maint_at_[hidden], Jeffrey Tilson &lt;jtilson_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: MPI question/problem
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello All,
</span><br>
<span class="quotelev2">&gt; &gt; This will probably turn out to be my fault as I haven't used MPI in  
</span><br>
<span class="quotelev2">&gt; &gt; a few years.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am attempting to use an MPI implementation of a &quot;nxtval&quot; (see the  
</span><br>
<span class="quotelev2">&gt; &gt; MPI book). I am using the client-server scenario. The MPI book  
</span><br>
<span class="quotelev2">&gt; &gt; specifies the three functions required. Two are collective and one  
</span><br>
<span class="quotelev2">&gt; &gt; is not. Only the  two collectives are tested in the supplied code.  
</span><br>
<span class="quotelev2">&gt; &gt; All three of the MPI functions are reproduced in the attached code,  
</span><br>
<span class="quotelev2">&gt; &gt; however.  I wrote a tiny application to create and free a counter  
</span><br>
<span class="quotelev2">&gt; &gt; object and it fails.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to know if this is a bug in the MPI book and a  
</span><br>
<span class="quotelev2">&gt; &gt; misunderstanding on my part.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The complete code is attached. I was using openMPI/intel to compile  
</span><br>
<span class="quotelev2">&gt; &gt; and run.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error I get is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-1.local:22637] *** An error occurred in MPI_Comm_rank
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-1.local:22637] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-1.local:22637] *** MPI_ERR_COMM: invalid communicator
</span><br>
<span class="quotelev3">&gt; &gt;&gt; [compute-0-1.local:22637] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; mpirun noticed that job rank 0 with PID 22635 on node  
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;compute-0-1.local&quot; exited on signal 15.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've attempted to google my way to understanding but with little  
</span><br>
<span class="quotelev2">&gt; &gt; success. If someone could point me to
</span><br>
<span class="quotelev2">&gt; &gt; a sample application that actually uses these functions, I would  
</span><br>
<span class="quotelev2">&gt; &gt; appreciate it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry if this is the wrong list, it is not an MPICH question and I  
</span><br>
<span class="quotelev2">&gt; &gt; wasn't sure where to turn.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; --jeff
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* A beginning piece of code to perform large-scale web  
</span><br>
<span class="quotelev2">&gt; &gt; construction.  */
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; typedef struct {
</span><br>
<span class="quotelev2">&gt; &gt; char description[1024];
</span><br>
<span class="quotelev2">&gt; &gt; double startwtime;
</span><br>
<span class="quotelev2">&gt; &gt; double endwtime;
</span><br>
<span class="quotelev2">&gt; &gt; double difftime;
</span><br>
<span class="quotelev2">&gt; &gt; } Timer;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* prototypes */
</span><br>
<span class="quotelev2">&gt; &gt; int MPE_Counter_nxtval(MPI_Comm , int *);
</span><br>
<span class="quotelev2">&gt; &gt; int MPE_Counter_free( MPI_Comm *, MPI_Comm * );
</span><br>
<span class="quotelev2">&gt; &gt; void MPE_Counter_create( MPI_Comm , MPI_Comm *, MPI_Comm *);
</span><br>
<span class="quotelev2">&gt; &gt; /* End prototypes */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* Globals */
</span><br>
<span class="quotelev2">&gt; &gt;         int          rank,numsize;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main( argc, argv )
</span><br>
<span class="quotelev2">&gt; &gt; int argc;
</span><br>
<span class="quotelev2">&gt; &gt; char **argv;
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         int i,j;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Status   status;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Request  r;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Comm  smaller_comm,  counter_comm;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	int numtimings=0;
</span><br>
<span class="quotelev2">&gt; &gt; 	int inttemp;
</span><br>
<span class="quotelev2">&gt; &gt; 	int value=-1;
</span><br>
<span class="quotelev2">&gt; &gt; 	int server;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; //Init parallel environment
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Init( &amp;argc, &amp;argv );
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Comm_rank( MPI_COMM_WORLD, &amp;rank );
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Comm_size( MPI_COMM_WORLD, &amp;numsize );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot;I am %i of %i WORLD procesors\n&quot;,rank,numsize);
</span><br>
<span class="quotelev2">&gt; &gt; 	server = numsize -1;
</span><br>
<span class="quotelev2">&gt; &gt; 	
</span><br>
<span class="quotelev2">&gt; &gt; 	MPE_Counter_create( MPI_COMM_WORLD, &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt; 	printf(&quot;Initial inttemp %i\n&quot;,rank);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 	inttemp = MPE_Counter_free( &amp;smaller_comm, &amp;counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt; 	printf(&quot;final inttemp %i,%i\n&quot;,rank,inttemp);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;         printf(&quot;%i, WORLD barrier leaving routine\n&quot;,rank);
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Barrier( MPI_COMM_WORLD );
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; //// Add new MPICH based shared counter.
</span><br>
<span class="quotelev2">&gt; &gt; //// grabbed from <a href="http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/">http://www-unix.mcs.anl.gov/mpi/usingmpi/examples/</a>
</span><br>
<span class="quotelev2">&gt; &gt; advanced/nxtval_create_c.htm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /* tag values */
</span><br>
<span class="quotelev2">&gt; &gt; #define REQUEST 0
</span><br>
<span class="quotelev2">&gt; &gt; #define GOAWAY  1
</span><br>
<span class="quotelev2">&gt; &gt; #define VALUE   2
</span><br>
<span class="quotelev2">&gt; &gt; #define MPE_SUCCESS 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; void MPE_Counter_create( MPI_Comm oldcomm, MPI_Comm * smaller_comm,  
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Comm * counter_comm )
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int counter = 0;
</span><br>
<span class="quotelev2">&gt; &gt;     int message, done = 0, myid, numprocs, server, color,ranks[1];
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Group oldgroup, smaller_group;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size(oldcomm, &amp;numprocs);
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank(oldcomm, &amp;myid);
</span><br>
<span class="quotelev2">&gt; &gt;     server = numprocs-1;     /*   last proc is server */
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_dup( oldcomm, counter_comm ); /* make one new comm */
</span><br>
<span class="quotelev2">&gt; &gt; 	if (myid == server) color = MPI_UNDEFINED;
</span><br>
<span class="quotelev2">&gt; &gt; 	else color =0;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_split( oldcomm, color, myid, smaller_comm);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (myid == server) {       /* I am the server */
</span><br>
<span class="quotelev2">&gt; &gt;         while (!done) {
</span><br>
<span class="quotelev2">&gt; &gt;             MPI_Recv(&amp;message, 1, MPI_INT, MPI_ANY_SOURCE,  
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt; &gt;                      *counter_comm, &amp;status );
</span><br>
<span class="quotelev2">&gt; &gt;             if (status.MPI_TAG == REQUEST) {
</span><br>
<span class="quotelev2">&gt; &gt;                 MPI_Send(&amp;counter, 1, MPI_INT, status.MPI_SOURCE,  
</span><br>
<span class="quotelev2">&gt; &gt; VALUE,
</span><br>
<span class="quotelev2">&gt; &gt;                          *counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt;                 counter++;
</span><br>
<span class="quotelev2">&gt; &gt;             }
</span><br>
<span class="quotelev2">&gt; &gt;             else if (status.MPI_TAG == GOAWAY) {
</span><br>
<span class="quotelev2">&gt; &gt; 		printf(&quot;SERVER Got a DONE flag\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                 done = 1;
</span><br>
<span class="quotelev2">&gt; &gt; 	    }
</span><br>
<span class="quotelev2">&gt; &gt;             else {
</span><br>
<span class="quotelev2">&gt; &gt;                 fprintf(stderr, &quot;bad tag sent to MPE counter\n&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; 		MPI_Abort(*counter_comm, 1);
</span><br>
<span class="quotelev2">&gt; &gt; 	   }
</span><br>
<span class="quotelev2">&gt; &gt;         }
</span><br>
<span class="quotelev2">&gt; &gt;         MPE_Counter_free( smaller_comm, counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /*******************************/
</span><br>
<span class="quotelev2">&gt; &gt; int MPE_Counter_free( MPI_Comm *smaller_comm, MPI_Comm *  
</span><br>
<span class="quotelev2">&gt; &gt; counter_comm )
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int myid, numprocs;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_rank( *counter_comm, &amp;myid );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size( *counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (myid == 0)
</span><br>
<span class="quotelev2">&gt; &gt;         MPI_Send(NULL, 0, MPI_INT, numprocs-1, GOAWAY, *counter_comm);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_free( counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     if (*smaller_comm != MPI_COMM_NULL) {
</span><br>
<span class="quotelev2">&gt; &gt; 	MPI_Comm_free( smaller_comm );
</span><br>
<span class="quotelev2">&gt; &gt; 	}
</span><br>
<span class="quotelev2">&gt; &gt;     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /************************/
</span><br>
<span class="quotelev2">&gt; &gt; int MPE_Counter_nxtval(MPI_Comm counter_comm, int * value)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;     int server,numprocs;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Status status;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Comm_size( counter_comm, &amp;numprocs );
</span><br>
<span class="quotelev2">&gt; &gt;     server = numprocs-1;
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Send(NULL, 0, MPI_INT, server, REQUEST, counter_comm );
</span><br>
<span class="quotelev2">&gt; &gt;     MPI_Recv(value, 1, MPI_INT, server, VALUE, counter_comm,  
</span><br>
<span class="quotelev2">&gt; &gt; &amp;status );
</span><br>
<span class="quotelev2">&gt; &gt;     return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
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
<li><strong>Next message:</strong> <a href="3529.php">Jeff Pummill: "Re: [OMPI users] OpenMPI / SLURM Job Issues"</a>
<li><strong>Previous message:</strong> <a href="3527.php">Jeff Squyres: "Re: [OMPI users] openmpi/numa"</a>
<li><strong>In reply to:</strong> <a href="3523.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code attachments"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
<li><strong>Reply:</strong> <a href="3537.php">George Bosilca: "Re: [OMPI users] [Fwd: MPI question/problem] including code	attachments"</a>
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
