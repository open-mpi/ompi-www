<?
$subject_val = "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 17:21:41 2014" -->
<!-- isoreceived="20140820212141" -->
<!-- sent="Wed, 20 Aug 2014 14:21:23 -0700" -->
<!-- isosent="20140820212123" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code" -->
<!-- id="D9A314DE-32EE-4327-A0DD-B804F83F4D5C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F42B57.2020709_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 17:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15666.php">Gilles Gouaillardet: "[OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm aware of the problem, but it will be fixed when the PMIx branch is merged later this week.
<br>
<p>On Aug 19, 2014, at 10:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; let's look at the following trivial test program :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char * argv[]) {
</span><br>
<span class="quotelev1">&gt;    int rank, size;
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;    printf (&quot;I am %d/%d and i abort\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;    MPI_Abort(MPI_COMM_WORLD, 2);
</span><br>
<span class="quotelev1">&gt;    printf (&quot;%d/%d aborted !\n&quot;, rank, size);
</span><br>
<span class="quotelev1">&gt;    return 3;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and let's run mpirun (trunk) on node0 and ask the mpi task to run on
</span><br>
<span class="quotelev1">&gt; task 1 :
</span><br>
<span class="quotelev1">&gt; with two tasks or more :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev1">&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev1">&gt; [node0:00740] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev1">&gt; mpi-abort
</span><br>
<span class="quotelev1">&gt; [node0:00740] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 $ echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the exit status of mpirun is zero
</span><br>
<span class="quotelev1">&gt; /* this is why the MPI_Errhandler_fatal_c test fails in mtt */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; now if we run only one task :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev1">&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 15884 on
</span><br>
<span class="quotelev1">&gt; node node1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev1">&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev1">&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev1">&gt; error message you will receive is this one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; node0 $ echo $?
</span><br>
<span class="quotelev1">&gt; 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program displayed a misleading error message and mpirun exited with
</span><br>
<span class="quotelev1">&gt; error code 1
</span><br>
<span class="quotelev1">&gt; /* i would have expected 2, or 3 in the worst case scenario */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i digged it a bit and found a kind of race condition in orted (running
</span><br>
<span class="quotelev1">&gt; on node 1)
</span><br>
<span class="quotelev1">&gt; basically, when the process dies, it writes stuff in the openmpi session
</span><br>
<span class="quotelev1">&gt; directory and exits.
</span><br>
<span class="quotelev1">&gt; exiting send a SIGCHLD to orted and close the socket/pipe connected to
</span><br>
<span class="quotelev1">&gt; orted.
</span><br>
<span class="quotelev1">&gt; on orted, the loss of connection is generally processed before the
</span><br>
<span class="quotelev1">&gt; SIGCHLD by libevent,
</span><br>
<span class="quotelev1">&gt; and as a consequence, the exit code is not correctly set (e.g. it is
</span><br>
<span class="quotelev1">&gt; left to zero).
</span><br>
<span class="quotelev1">&gt; i did not see any kind of communication between the mpi task and orted
</span><br>
<span class="quotelev1">&gt; (except writing a file in the openmpi session directory) as i would have
</span><br>
<span class="quotelev1">&gt; expected
</span><br>
<span class="quotelev1">&gt; /* but this was just my initial guess, the truth is i do not know what
</span><br>
<span class="quotelev1">&gt; is supposed to happen */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i wrote the attached abort.patch patch to basically get it working.
</span><br>
<span class="quotelev1">&gt; i highly suspect this is not the right thing to do so i did not commit it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it works fine with two tasks or more.
</span><br>
<span class="quotelev1">&gt; with only one task, mpirun display a misleading error message but the
</span><br>
<span class="quotelev1">&gt; exit status is ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; could someone (Ralph ?) have a look at this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev1">&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev1">&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node0:00920] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev1">&gt; mpi-abort
</span><br>
<span class="quotelev1">&gt; [node0:00920] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev1">&gt; all help / error messages
</span><br>
<span class="quotelev1">&gt; node0 $ echo $?
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev1">&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; with errorcode 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev1">&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev1">&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[7955,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    2
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; node0 $ echo $?
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;abort.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15666.php">http://www.open-mpi.org/community/lists/devel/2014/08/15666.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15673.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15671.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32556 - trunk/orte/mca/oob/tcp"</a>
<li><strong>In reply to:</strong> <a href="15666.php">Gilles Gouaillardet: "[OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
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
