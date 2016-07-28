<?
$subject_val = "Re: [OMPI users] core dump on MPI_Finalize in child process.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 02:02:55 2014" -->
<!-- isoreceived="20140901060255" -->
<!-- sent="Mon, 1 Sep 2014 02:02:53 -0400" -->
<!-- isosent="20140901060253" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] core dump on MPI_Finalize in child process." -->
<!-- id="CAMJJpkXcntSbW+Ci4FwmMaGAAjQ1erz=3AsimMTQ5hMYvAMSAw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E6939AAE-F15A-4D8B-B25E-CD936D08D6A0_at_open-mpi.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 02:02:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Previous message:</strong> <a href="25207.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>In reply to:</strong> <a href="25207.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Reply:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on the MPI standard (MPI 3.0 section 10.5.4 page 399) there is no
<br>
need to disconnect the child processes from the parent in order to cleanly
<br>
finalize. From this perspective, the original example is correct, but
<br>
sub-optimal as the parent processes calling MPI_Finalize might block until
<br>
all connected processes (in this case all the children processes) will call
<br>
MPI_Finalize. To be more precise, the disconnect has a single role to
<br>
redivide the application in separated groups of connected processes in
<br>
order to prevent error propagation (such as MPI_Abort).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Mon, Sep 1, 2014 at 12:58 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You need to disconnect the parent/child from each other prior to
</span><br>
<span class="quotelev1">&gt; finalizing - see the attached example
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 31, 2014, at 9:44 PM, Roy &lt;openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using MPI_Comm_spawn to start new child process.
</span><br>
<span class="quotelev2">&gt; &gt; I found that if the parent process execute MPI_Finalize before the child
</span><br>
<span class="quotelev2">&gt; &gt; process, the child process core dump on MPI_Finalize.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I couldn't find the correct way to have a clean shutdown of all processes
</span><br>
<span class="quotelev2">&gt; &gt; ( parent and child ).
</span><br>
<span class="quotelev2">&gt; &gt; What that I found is that sleep(2) in the parent process just before
</span><br>
<span class="quotelev2">&gt; &gt; calling MPI_Finalize, gives the CPU cycle for the child process to finish
</span><br>
<span class="quotelev2">&gt; &gt; its own MPI_Finalize, and only then there is no core dump.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Although this resolve the issue, I can't accept this as acceptable
</span><br>
<span class="quotelev1">&gt; solution.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I'm doing something wrong ( implementation or design ), so this
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; why I'm sending this email to the group ( and yes, I did check the FAQ,
</span><br>
<span class="quotelev2">&gt; &gt; and done some search on the distribution list archive ).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the entire code to reproduce the issue :
</span><br>
<span class="quotelev2">&gt; &gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; int main(int argc, char* argv[]){
</span><br>
<span class="quotelev2">&gt; &gt;       int  my_rank; /* rank of process */
</span><br>
<span class="quotelev2">&gt; &gt;       int  p;       /* number of processes */
</span><br>
<span class="quotelev2">&gt; &gt;       int source;   /* rank of sender */
</span><br>
<span class="quotelev2">&gt; &gt;       int dest;     /* rank of receiver */
</span><br>
<span class="quotelev2">&gt; &gt;       int tag=0;    /* tag for messages */
</span><br>
<span class="quotelev2">&gt; &gt;       char message[100];        /* storage for message */
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Status status ;   /* return status for receive */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* start up MPI */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       /* find out process rank */
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_rank(MPI_COMM_WORLD, &amp;my_rank);
</span><br>
<span class="quotelev2">&gt; &gt;       fprintf(stderr,&quot;My rank is : %d\n&quot;,my_rank);
</span><br>
<span class="quotelev2">&gt; &gt;       /* find out number of processes */
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_size(MPI_COMM_WORLD, &amp;p);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm parent;
</span><br>
<span class="quotelev2">&gt; &gt;       MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       if ( parent != MPI_COMM_NULL){
</span><br>
<span class="quotelev2">&gt; &gt;               /* create message */
</span><br>
<span class="quotelev2">&gt; &gt;               dest = 0;
</span><br>
<span class="quotelev2">&gt; &gt;               /* use strlen+1 so that '\0' get transmitted */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Recv(message, 100, MPI_CHAR, 0, tag,parent, &amp;status);
</span><br>
<span class="quotelev2">&gt; &gt;               fprintf(stderr,&quot;Got [%s] from root\n&quot;,message);
</span><br>
<span class="quotelev2">&gt; &gt;               /* shut down MPI */
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       else{
</span><br>
<span class="quotelev2">&gt; &gt;               printf(&quot;Hello MPI World From process 0: Num processes:
</span><br>
<span class="quotelev1">&gt; %d\n&quot;,p);
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Comm everyone;
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Comm_spawn(&quot;mpitest&quot;,MPI_ARGV_NULL,1,MPI_INFO_NULL,0,
</span><br>
<span class="quotelev1">&gt;      MPI_COMM_SELF,&amp;everyone,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev2">&gt; &gt;               /* find out number of processes */
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Comm_size(everyone, &amp;p);
</span><br>
<span class="quotelev2">&gt; &gt;               fprintf(stderr,&quot;New world size:%d\n&quot;,p);
</span><br>
<span class="quotelev2">&gt; &gt;               for (source = 0; source &lt; p; source++) {
</span><br>
<span class="quotelev2">&gt; &gt;                       sprintf(message, &quot;Hello MPI World from root to
</span><br>
<span class="quotelev1">&gt; process %d!&quot;, source);
</span><br>
<span class="quotelev2">&gt; &gt;                       MPI_Send(message, strlen(message)+1,
</span><br>
<span class="quotelev1">&gt; MPI_CHAR,source, tag, everyone);
</span><br>
<span class="quotelev2">&gt; &gt;               }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               /**
</span><br>
<span class="quotelev2">&gt; &gt;                * Why this sleep resolve my core dump issues ?
</span><br>
<span class="quotelev2">&gt; &gt;                * Any timing between the parent to child process ?
</span><br>
<span class="quotelev2">&gt; &gt;                * Based on the document, and FAQ, I couldn't not find an
</span><br>
<span class="quotelev1">&gt; answer for
</span><br>
<span class="quotelev2">&gt; &gt; this issue.
</span><br>
<span class="quotelev2">&gt; &gt;                *
</span><br>
<span class="quotelev2">&gt; &gt;                * If you comment out the sleep(2), the child process will
</span><br>
<span class="quotelev1">&gt; crash on the
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Finalize with
</span><br>
<span class="quotelev2">&gt; &gt;                * singal 11, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt;                */
</span><br>
<span class="quotelev2">&gt; &gt;               //sleep(2); //un-comment this line to have the sleep, and
</span><br>
<span class="quotelev1">&gt; avoid the core
</span><br>
<span class="quotelev2">&gt; &gt; dumps.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;               /* shut down MPI */
</span><br>
<span class="quotelev2">&gt; &gt;               MPI_Finalize();
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       }
</span><br>
<span class="quotelev2">&gt; &gt;       return 0;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone for the rescue ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; Roy Avidor
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/index.php">http://www.open-mpi.org/community/lists/users/2014/09/index.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25207.php">http://www.open-mpi.org/community/lists/users/2014/09/25207.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25208/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Previous message:</strong> <a href="25207.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>In reply to:</strong> <a href="25207.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
<li><strong>Reply:</strong> <a href="25209.php">Ralph Castain: "Re: [OMPI users] core dump on MPI_Finalize in child process."</a>
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
