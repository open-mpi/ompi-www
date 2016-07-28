<?
$subject_val = "[OMPI devel] MPI_Abort does not make mpirun return with the right exit code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 01:00:09 2014" -->
<!-- isoreceived="20140820050009" -->
<!-- sent="Wed, 20 Aug 2014 14:00:07 +0900" -->
<!-- isosent="20140820050007" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Abort does not make mpirun return with the right exit code" -->
<!-- id="53F42B57.2020709_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Abort does not make mpirun return with the right exit code<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 01:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15667.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15665.php">Ralph Castain: "[OMPI devel] v1.8.2 release delayed one week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>let's look at the following trivial test program :
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
<p>int main (int argc, char * argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank, size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;I am %d/%d and i abort\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, 2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%d/%d aborted !\n&quot;, rank, size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 3;
<br>
}
<br>
<p>and let's run mpirun (trunk) on node0 and ask the mpi task to run on
<br>
task 1 :
<br>
with two tasks or more :
<br>
<p>node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
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
I am 1/2 and i abort
<br>
I am 0/2 and i abort
<br>
[node0:00740] 1 more process has sent help message help-mpi-api.txt /
<br>
mpi-abort
<br>
[node0:00740] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>node0 $ echo $?
<br>
0
<br>
<p>the exit status of mpirun is zero
<br>
/* this is why the MPI_Errhandler_fatal_c test fails in mtt */
<br>
<p>now if we run only one task :
<br>
<p>node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
<br>
I am 0/1 and i abort
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
mpirun has exited due to process rank 0 with PID 15884 on
<br>
node node1 exiting improperly. There are three reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>3. this process called &quot;MPI_Abort&quot; or &quot;orte_abort&quot; and the mca parameter
<br>
orte_create_session_dirs is set to false. In this case, the run-time cannot
<br>
detect that the abort call was an abnormal termination. Hence, the only
<br>
error message you will receive is this one.
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
<p>You can avoid this message by specifying -quiet on the mpirun command line.
<br>
<p>--------------------------------------------------------------------------
<br>
node0 $ echo $?
<br>
1
<br>
<p>the program displayed a misleading error message and mpirun exited with
<br>
error code 1
<br>
/* i would have expected 2, or 3 in the worst case scenario */
<br>
<p><p>i digged it a bit and found a kind of race condition in orted (running
<br>
on node 1)
<br>
basically, when the process dies, it writes stuff in the openmpi session
<br>
directory and exits.
<br>
exiting send a SIGCHLD to orted and close the socket/pipe connected to
<br>
orted.
<br>
on orted, the loss of connection is generally processed before the
<br>
SIGCHLD by libevent,
<br>
and as a consequence, the exit code is not correctly set (e.g. it is
<br>
left to zero).
<br>
i did not see any kind of communication between the mpi task and orted
<br>
(except writing a file in the openmpi session directory) as i would have
<br>
expected
<br>
/* but this was just my initial guess, the truth is i do not know what
<br>
is supposed to happen */
<br>
<p>i wrote the attached abort.patch patch to basically get it working.
<br>
i highly suspect this is not the right thing to do so i did not commit it.
<br>
<p>it works fine with two tasks or more.
<br>
with only one task, mpirun display a misleading error message but the
<br>
exit status is ok.
<br>
<p>could someone (Ralph ?) have a look at this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>node0 $ mpirun --mca btl tcp,self -host node1 -np 2 ./abort
<br>
I am 1/2 and i abort
<br>
I am 0/2 and i abort
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
[node0:00920] 1 more process has sent help message help-mpi-api.txt /
<br>
mpi-abort
<br>
[node0:00920] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
node0 $ echo $?
<br>
2
<br>
<p><p><p>node0 $ mpirun --mca btl tcp,self -host node1 -np 1 ./abort
<br>
I am 0/1 and i abort
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
<p>&nbsp;&nbsp;Process name: [[7955,1],0]
<br>
&nbsp;&nbsp;Exit code:    2
<br>
--------------------------------------------------------------------------
<br>
node0 $ echo $?
<br>
2
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15666/abort.patch">abort.patch</a>
</ul>
<!-- attachment="abort.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15667.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15665.php">Ralph Castain: "[OMPI devel] v1.8.2 release delayed one week"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<li><strong>Reply:</strong> <a href="15672.php">Ralph Castain: "Re: [OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
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
