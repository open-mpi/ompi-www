<?
$subject_val = "[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 13:54:16 2014" -->
<!-- isoreceived="20140318175416" -->
<!-- sent="Tue, 18 Mar 2014 17:54:14 +0000" -->
<!-- isosent="20140318175414" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103" -->
<!-- id="9D64C90B-DD3A-4669-BB72-C6277FAAF437_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 13:54:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14365.php">Jeff Squyres (jsquyres): "[OMPI devel] DNS migration of open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="14363.php">Ralph Castain: "Re: [OMPI devel] Hang in comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I'm seeing problems with MPIEXEC_TIMEOUT in v1.7 @ r31103 (fairly close to HEAD):
<br>
<p>----8&lt;----
<br>
MPIEXEC_TIMEOUT=8 mpirun --mca btl usnic,sm,self -np 4 ./sleeper
<br>
--------------------------------------------------------------------------
<br>
The user-provided time limit for job execution has been
<br>
reached:
<br>
<p>&nbsp;&nbsp;MPIEXEC_TIMEOUT: 8 seconds
<br>
<p>The job will now be aborted. Please check your code and/or
<br>
adjust/remove the job execution time limit (as specified
<br>
by MPIEXEC_TIMEOUT in your environment).
<br>
<p>--------------------------------------------------------------------------
<br>
srun: error: mpi015: task 0: Killed
<br>
srun: Terminating job step 689585.2
<br>
srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
<br>
^C[savbu-usnic-a:26668] [[14634,0],0]-&gt;[[14634,0],1] mca_oob_tcp_msg_send_bytes: write failed: Connection reset by peer (104) [sd = 16]
<br>
[savbu-usnic-a:26668] [[14634,0],0]-[[14634,0],1] mca_oob_tcp_peer_send_handler: unable to send header
<br>
<p>^CAbort is in progress...hit ctrl-c again within 5 seconds to forcibly terminate
<br>
<p>^C
<br>
----8&lt;----
<br>
<p>Where each of the &quot;^C&quot; is a ctrl-c with arbitrary was allowed to pass beforehand (several minutes for the first two, &lt;5s in the third).
<br>
<p>Where &quot;sleeper&quot; is just an MPI program that does:
<br>
<p>----8&lt;----
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;while (1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(60);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
----8&lt;----
<br>
<p>It happens under slurm and SSH.  If I launch on localhost (no --host/--hostfile option, no slurm, etc.) then it exits just fine.  The example output I gave above used the &quot;usnic&quot; BTL, but &quot;tcp&quot; has identical behavior.
<br>
<p>This worked fine in v1.7.4.  I've bisected the change in behavior down to r30981: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30981">https://svn.open-mpi.org/trac/ompi/changeset/30981</a>
<br>
<p>Should I file a ticket?
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14365.php">Jeff Squyres (jsquyres): "[OMPI devel] DNS migration of open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="14363.php">Ralph Castain: "Re: [OMPI devel] Hang in comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
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
