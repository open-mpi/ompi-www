<?
$subject_val = "Re: [OMPI users] core dump on MPI_Finalize in child process.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 00:58:27 2014" -->
<!-- isoreceived="20140901045827" -->
<!-- sent="Sun, 31 Aug 2014 21:58:15 -0700" -->
<!-- isosent="20140901045815" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core dump on MPI_Finalize in child process." -->
<!-- id="E6939AAE-F15A-4D8B-B25E-CD936D08D6A0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="61d6bdaf101bd21a489cf095938c5918.squirrel_at_mail" -->
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
<strong>Subject:</strong> Re: [OMPI users] core dump on MPI_Finalize in child process.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 00:58:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Previous message:</strong> <a href="25206.php">Roy: "[OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>In reply to:</strong> <a href="25206.php">Roy: "[OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Reply:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to disconnect the parent/child from each other prior to finalizing - see the attached example
<br>
<p><p>

<br><p>
<p><p>On Aug 31, 2014, at 9:44 PM, Roy &lt;openmpi_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using MPI_Comm_spawn to start new child process.
</span><br>
<span class="quotelev1">&gt; I found that if the parent process execute MPI_Finalize before the child
</span><br>
<span class="quotelev1">&gt; process, the child process core dump on MPI_Finalize.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I couldn't find the correct way to have a clean shutdown of all processes
</span><br>
<span class="quotelev1">&gt; ( parent and child ).
</span><br>
<span class="quotelev1">&gt; What that I found is that sleep(2) in the parent process just before
</span><br>
<span class="quotelev1">&gt; calling MPI_Finalize, gives the CPU cycle for the child process to finish
</span><br>
<span class="quotelev1">&gt; its own MPI_Finalize, and only then there is no core dump.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Although this resolve the issue, I can't accept this as acceptable solution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'm doing something wrong ( implementation or design ), so this is
</span><br>
<span class="quotelev1">&gt; why I'm sending this email to the group ( and yes, I did check the FAQ,
</span><br>
<span class="quotelev1">&gt; and done some search on the distribution list archive ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the entire code to reproduce the issue :
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char* argv[]){
</span><br>
<span class="quotelev1">&gt; 	int  my_rank; /* rank of process */
</span><br>
<span class="quotelev1">&gt; 	int  p;       /* number of processes */
</span><br>
<span class="quotelev1">&gt; 	int source;   /* rank of sender */
</span><br>
<span class="quotelev1">&gt; 	int dest;     /* rank of receiver */
</span><br>
<span class="quotelev1">&gt; 	int tag=0;    /* tag for messages */
</span><br>
<span class="quotelev1">&gt; 	char message[100];        /* storage for message */
</span><br>
<span class="quotelev1">&gt; 	MPI_Status status ;   /* return status for receive */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	/* start up MPI */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	/* find out process rank */
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev1">&gt; 	fprintf(stderr,&quot;My rank is : %d\n&quot;,my_rank);
</span><br>
<span class="quotelev1">&gt; 	/* find out number of processes */
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;p);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	if ( parent != MPI_COMM_NULL){
</span><br>
<span class="quotelev1">&gt; 		/* create message */
</span><br>
<span class="quotelev1">&gt; 		dest = 0;
</span><br>
<span class="quotelev1">&gt; 		/* use strlen+1 so that '\0' get transmitted */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		MPI_Recv(message, 100, MPI_CHAR, 0, tag,parent, &amp;status);
</span><br>
<span class="quotelev1">&gt; 		fprintf(stderr,&quot;Got [%s] from root\n&quot;,message);
</span><br>
<span class="quotelev1">&gt; 		/* shut down MPI */
</span><br>
<span class="quotelev1">&gt; 		MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	else{
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;Hello MPI World From process 0: Num processes: %d\n&quot;,p);
</span><br>
<span class="quotelev1">&gt; 		MPI_Comm everyone;
</span><br>
<span class="quotelev1">&gt; 		MPI_Comm_spawn(&quot;mpitest&quot;,MPI_ARGV_NULL,1,MPI_INFO_NULL,0,	MPI_COMM_SELF,&amp;everyone,
</span><br>
<span class="quotelev1">&gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; 		/* find out number of processes */
</span><br>
<span class="quotelev1">&gt; 		MPI_Comm_size(everyone, &amp;p);
</span><br>
<span class="quotelev1">&gt; 		fprintf(stderr,&quot;New world size:%d\n&quot;,p);
</span><br>
<span class="quotelev1">&gt; 		for (source = 0; source &lt; p; source++) {
</span><br>
<span class="quotelev1">&gt; 			sprintf(message, &quot;Hello MPI World from root to process %d!&quot;, source);
</span><br>
<span class="quotelev1">&gt; 			MPI_Send(message, strlen(message)+1, MPI_CHAR,source, tag, everyone);
</span><br>
<span class="quotelev1">&gt; 		}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		/**
</span><br>
<span class="quotelev1">&gt; 		 * Why this sleep resolve my core dump issues ?
</span><br>
<span class="quotelev1">&gt; 		 * Any timing between the parent to child process ?
</span><br>
<span class="quotelev1">&gt; 		 * Based on the document, and FAQ, I couldn't not find an answer for
</span><br>
<span class="quotelev1">&gt; this issue.
</span><br>
<span class="quotelev1">&gt; 		 *
</span><br>
<span class="quotelev1">&gt; 		 * If you comment out the sleep(2), the child process will crash on the
</span><br>
<span class="quotelev1">&gt; MPI_Finalize with
</span><br>
<span class="quotelev1">&gt; 		 * singal 11, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 		 */
</span><br>
<span class="quotelev1">&gt; 		//sleep(2); //un-comment this line to have the sleep, and avoid the core
</span><br>
<span class="quotelev1">&gt; dumps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		/* shut down MPI */
</span><br>
<span class="quotelev1">&gt; 		MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyone for the rescue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Roy Avidor
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2014/09/index.php">http://www.open-mpi.org/community/lists/users/2014/09/index.php</a>
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25207/simple_spawn.c">simple_spawn.c</a>
</ul>
<!-- attachment="simple_spawn.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Previous message:</strong> <a href="25206.php">Roy: "[OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>In reply to:</strong> <a href="25206.php">Roy: "[OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Reply:</strong> <a href="25208.php">George Bosilca: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
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
