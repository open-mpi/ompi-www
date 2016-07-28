<?
$subject_val = "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 06:21:05 2014" -->
<!-- isoreceived="20140822102105" -->
<!-- sent="Fri, 22 Aug 2014 19:12:04 +0900" -->
<!-- isosent="20140822101204" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code" -->
<!-- id="53F71774.8090804_at_iferc.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="D9A314DE-32EE-4327-A0DD-B804F83F4D5C_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-22 06:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15688.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i tried again after the merge and found the same behaviour, though the
<br>
internals are very different.
<br>
<p>i run without any batch manager
<br>
<p>from node0:
<br>
mpirun -np 1 --mca btl tcp,self -host node1 ./abort
<br>
<p>exit with exit code zero :-(
<br>
<p>short story : i applied pmix.2.patch and that fixed my problem
<br>
could you please review this ?
<br>
<p>long story :
<br>
i initially applied pmix.1.patch and it solved my problem
<br>
then i ran
<br>
mpirun -np 1 --mca btl openib,self -host node1 ./abort
<br>
and i came back to square one : exit code is zero
<br>
so i used the debugger and was unable to reproduce the issue
<br>
(one more race condition, yeah !)
<br>
finally, i wrote pmix.2.patch, fixed my issue and realized that
<br>
pmix.1.patch was no more needed.
<br>
currently, and assuming pmix.2.patch is correct, i cannot tell wether
<br>
pmix.1.patch is needed or not
<br>
since this part of the code is no more executed.
<br>
<p>i also found one hang with the following trivial program within one node :
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 3;
<br>
}
<br>
<p>from node0 :
<br>
$ mpirun -np 1 ./test
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
<p>AND THE PROGRAM HANGS
<br>
<p>*but*
<br>
$ mpirun -np 1 -host node1 ./test
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun detected that one or more processes exited with non-zero status,
<br>
thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[22080,1],0]
<br>
&nbsp;&nbsp;Exit code:    3
<br>
--------------------------------------------------------------------------
<br>
<p>return with exit code 3.
<br>
<p>then i found a strange behaviour with helloworld if only the self btl is
<br>
used :
<br>
$ mpirun -np 1 --mca btl self ./hw
<br>
[helios91:23319] OPAL dss:unpack: got type 12 when expecting type 3
<br>
[helios91:23319] [[22303,0],0] ORTE_ERROR_LOG: Pack data mismatch in
<br>
file ../../../src/ompi-trunk/orte/orted/pmix/pmix_server_sendrecv.c at
<br>
line 722
<br>
<p>the program returns with exit code zero, but display an error message.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/21 6:21, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I'm aware of the problem, but it will be fixed when the PMIx branch is merged later this week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 19, 2014, at 10:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; let's look at the following trivial test program :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char * argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt;    int rank, size;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;    printf (&quot;I am %d/%d and i abort\n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Abort(MPI_COMM_WORLD, 2);
</span><br>
<span class="quotelev2">&gt;&gt;    printf (&quot;%d/%d aborted !\n&quot;, rank, size);
</span><br>
<span class="quotelev2">&gt;&gt;    return 3;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and let's run mpirun (trunk) on node0 and ask the mpi task to run on
</span><br>
<span class="quotelev2">&gt;&gt; task 1 :
</span><br>
<span class="quotelev2">&gt;&gt; with two tasks or more :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; [node0:00740] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev2">&gt;&gt; mpi-abort
</span><br>
<span class="quotelev2">&gt;&gt; [node0:00740] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the exit status of mpirun is zero
</span><br>
<span class="quotelev2">&gt;&gt; /* this is why the MPI_Errhandler_fatal_c test fails in mtt */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; now if we run only one task :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev2">&gt;&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 15884 on
</span><br>
<span class="quotelev2">&gt;&gt; node node1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev2">&gt;&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev2">&gt;&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev2">&gt;&gt; error message you will receive is this one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the program displayed a misleading error message and mpirun exited with
</span><br>
<span class="quotelev2">&gt;&gt; error code 1
</span><br>
<span class="quotelev2">&gt;&gt; /* i would have expected 2, or 3 in the worst case scenario */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i digged it a bit and found a kind of race condition in orted (running
</span><br>
<span class="quotelev2">&gt;&gt; on node 1)
</span><br>
<span class="quotelev2">&gt;&gt; basically, when the process dies, it writes stuff in the openmpi session
</span><br>
<span class="quotelev2">&gt;&gt; directory and exits.
</span><br>
<span class="quotelev2">&gt;&gt; exiting send a SIGCHLD to orted and close the socket/pipe connected to
</span><br>
<span class="quotelev2">&gt;&gt; orted.
</span><br>
<span class="quotelev2">&gt;&gt; on orted, the loss of connection is generally processed before the
</span><br>
<span class="quotelev2">&gt;&gt; SIGCHLD by libevent,
</span><br>
<span class="quotelev2">&gt;&gt; and as a consequence, the exit code is not correctly set (e.g. it is
</span><br>
<span class="quotelev2">&gt;&gt; left to zero).
</span><br>
<span class="quotelev2">&gt;&gt; i did not see any kind of communication between the mpi task and orted
</span><br>
<span class="quotelev2">&gt;&gt; (except writing a file in the openmpi session directory) as i would have
</span><br>
<span class="quotelev2">&gt;&gt; expected
</span><br>
<span class="quotelev2">&gt;&gt; /* but this was just my initial guess, the truth is i do not know what
</span><br>
<span class="quotelev2">&gt;&gt; is supposed to happen */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i wrote the attached abort.patch patch to basically get it working.
</span><br>
<span class="quotelev2">&gt;&gt; i highly suspect this is not the right thing to do so i did not commit it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it works fine with two tasks or more.
</span><br>
<span class="quotelev2">&gt;&gt; with only one task, mpirun display a misleading error message but the
</span><br>
<span class="quotelev2">&gt;&gt; exit status is ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; could someone (Ralph ?) have a look at this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev2">&gt;&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [node0:00920] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev2">&gt;&gt; mpi-abort
</span><br>
<span class="quotelev2">&gt;&gt; [node0:00920] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev2">&gt;&gt; all help / error messages
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev2">&gt;&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev2">&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev2">&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Process name: [[7955,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;  Exit code:    2
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;abort.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15666.php">http://www.open-mpi.org/community/lists/devel/2014/08/15666.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15672.php">http://www.open-mpi.org/community/lists/devel/2014/08/15672.php</a>
</span><br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15689/pmix.1.patch">pmix.1.patch</a>
</ul>
<!-- attachment="pmix.1.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15689/pmix.2.patch">pmix.2.patch</a>
</ul>
<!-- attachment="pmix.2.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15688.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15691.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
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
