<?
$subject_val = "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 10:39:52 2014" -->
<!-- isoreceived="20140822143952" -->
<!-- sent="Fri, 22 Aug 2014 07:39:26 -0700" -->
<!-- isosent="20140822143926" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code" -->
<!-- id="CD4F47F0-2B90-4BF2-B752-558E9ADB604B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F71774.8090804_at_iferc.org" -->
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
<strong>Date:</strong> 2014-08-22 10:39:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15692.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to try again with current head of trunk as something seems off in what you are seeing - more below
<br>
<p><p>On Aug 22, 2014, at 3:12 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried again after the merge and found the same behaviour, though the
</span><br>
<span class="quotelev1">&gt; internals are very different.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i run without any batch manager
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from node0:
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl tcp,self -host node1 ./abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exit with exit code zero :-(
</span><br>
<p>Hmmm...it works fine for me, without your patch:
<br>
<p>07:35:41  $ mpirun -n 1 -mca btl tcp,self -host bend002 ./abort
<br>
Hello, World, I am 0 of 1
<br>
--------------------------------------------------------------------------
<br>
MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD 
<br>
with errorcode 2.
<br>
<p>NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
<br>
You may or may not see output from other processes, depending on
<br>
exactly when Open MPI kills them.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 24382 on node bend002 exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
07:35:56  $ showcode
<br>
130
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; short story : i applied pmix.2.patch and that fixed my problem
</span><br>
<span class="quotelev1">&gt; could you please review this ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; long story :
</span><br>
<span class="quotelev1">&gt; i initially applied pmix.1.patch and it solved my problem
</span><br>
<span class="quotelev1">&gt; then i ran
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl openib,self -host node1 ./abort
</span><br>
<span class="quotelev1">&gt; and i came back to square one : exit code is zero
</span><br>
<span class="quotelev1">&gt; so i used the debugger and was unable to reproduce the issue
</span><br>
<span class="quotelev1">&gt; (one more race condition, yeah !)
</span><br>
<span class="quotelev1">&gt; finally, i wrote pmix.2.patch, fixed my issue and realized that
</span><br>
<span class="quotelev1">&gt; pmix.1.patch was no more needed.
</span><br>
<span class="quotelev1">&gt; currently, and assuming pmix.2.patch is correct, i cannot tell wether
</span><br>
<span class="quotelev1">&gt; pmix.1.patch is needed or not
</span><br>
<span class="quotelev1">&gt; since this part of the code is no more executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i also found one hang with the following trivial program within one node :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    return 3;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from node0 :
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 ./test
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AND THE PROGRAM HANGS
</span><br>
<p>This also works fine for me:
<br>
<p>07:37:27  $ mpirun -n 1 ./mpi_no_op
<br>
07:37:36  $ cat mpi_no_op.c
<br>
/* -*- C -*-
<br>
&nbsp;*
<br>
&nbsp;* $HEADER$
<br>
&nbsp;*
<br>
&nbsp;* The most basic of MPI applications
<br>
&nbsp;*/
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *but*
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 -host node1 ./test
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
<span class="quotelev1">&gt;  Process name: [[22080,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    3
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; return with exit code 3.
</span><br>
<p>Likewise here - works just fine for me
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then i found a strange behaviour with helloworld if only the self btl is
</span><br>
<span class="quotelev1">&gt; used :
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 --mca btl self ./hw
</span><br>
<span class="quotelev1">&gt; [helios91:23319] OPAL dss:unpack: got type 12 when expecting type 3
</span><br>
<span class="quotelev1">&gt; [helios91:23319] [[22303,0],0] ORTE_ERROR_LOG: Pack data mismatch in
</span><br>
<span class="quotelev1">&gt; file ../../../src/ompi-trunk/orte/orted/pmix/pmix_server_sendrecv.c at
</span><br>
<span class="quotelev1">&gt; line 722
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the program returns with exit code zero, but display an error message.
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
<span class="quotelev1">&gt; On 2014/08/21 6:21, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I'm aware of the problem, but it will be fixed when the PMIx branch is merged later this week.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 19, 2014, at 10:00 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let's look at the following trivial test program :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char * argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   int rank, size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   printf (&quot;I am %d/%d and i abort\n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Abort(MPI_COMM_WORLD, 2);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   printf (&quot;%d/%d aborted !\n&quot;, rank, size);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   return 3;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and let's run mpirun (trunk) on node0 and ask the mpi task to run on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; task 1 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with two tasks or more :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0:00740] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0:00740] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the exit status of mpirun is zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* this is why the MPI_Errhandler_fatal_c test fails in mtt */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now if we run only one task :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun has exited due to process rank 0 with PID 15884 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node node1 exiting improperly. There are three reasons this could occur:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_create_session_dirs is set to false. In this case, the run-time cannot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detect that the abort call was an abnormal termination. Hence, the only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error message you will receive is this one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can avoid this message by specifying -quiet on the mpirun command line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the program displayed a misleading error message and mpirun exited with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error code 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* i would have expected 2, or 3 in the worst case scenario */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i digged it a bit and found a kind of race condition in orted (running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on node 1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically, when the process dies, it writes stuff in the openmpi session
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory and exits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting send a SIGCHLD to orted and close the socket/pipe connected to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on orted, the loss of connection is generally processed before the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SIGCHLD by libevent,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and as a consequence, the exit code is not correctly set (e.g. it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; left to zero).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i did not see any kind of communication between the mpi task and orted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (except writing a file in the openmpi session directory) as i would have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* but this was just my initial guess, the truth is i do not know what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is supposed to happen */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i wrote the attached abort.patch patch to basically get it working.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i highly suspect this is not the right thing to do so i did not commit it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works fine with two tasks or more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with only one task, mpirun display a misleading error message but the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit status is ok.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; could someone (Ralph ?) have a look at this ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 1/2 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 0/2 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0:00920] 1 more process has sent help message help-mpi-api.txt /
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi-abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node0:00920] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all help / error messages
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am 0/1 and i abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_ABORT was invoked on rank 0 in communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with errorcode 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NOTE: invoking MPI_ABORT causes Open MPI to kill all MPI processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may or may not see output from other processes, depending on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exactly when Open MPI kills them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thus causing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process name: [[7955,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exit code:    2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node0 $ echo $?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;abort.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15666.php">http://www.open-mpi.org/community/lists/devel/2014/08/15666.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15672.php">http://www.open-mpi.org/community/lists/devel/2014/08/15672.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;pmix.1.patch&gt;&lt;pmix.2.patch&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15689.php">http://www.open-mpi.org/community/lists/devel/2014/08/15689.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15691/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15692.php">Gilles Gouaillardet: "Re: [OMPI devel] OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Previous message:</strong> <a href="15690.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>In reply to:</strong> <a href="15689.php">Gilles Gouaillardet: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
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
