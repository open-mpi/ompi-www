<?
$subject_val = "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 14:01:58 2014" -->
<!-- isoreceived="20140318180158" -->
<!-- sent="Tue, 18 Mar 2014 11:00:35 -0700" -->
<!-- isosent="20140318180035" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103" -->
<!-- id="CD662A08-6FB2-4183-9C31-49D68F0226F6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9D64C90B-DD3A-4669-BB72-C6277FAAF437_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 14:00:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14365.php">Jeff Squyres (jsquyres): "[OMPI devel] DNS migration of open-mpi.org"</a>
<li><strong>In reply to:</strong> <a href="14364.php">Dave Goodell (dgoodell): "[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2014, at 10:54 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing problems with MPIEXEC_TIMEOUT in v1.7 @ r31103 (fairly close to HEAD):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; MPIEXEC_TIMEOUT=8 mpirun --mca btl usnic,sm,self -np 4 ./sleeper
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The user-provided time limit for job execution has been
</span><br>
<span class="quotelev1">&gt; reached:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  MPIEXEC_TIMEOUT: 8 seconds
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The job will now be aborted. Please check your code and/or
</span><br>
<span class="quotelev1">&gt; adjust/remove the job execution time limit (as specified
</span><br>
<span class="quotelev1">&gt; by MPIEXEC_TIMEOUT in your environment).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; srun: error: mpi015: task 0: Killed
</span><br>
<span class="quotelev1">&gt; srun: Terminating job step 689585.2
</span><br>
<span class="quotelev1">&gt; srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev1">&gt; ^C[savbu-usnic-a:26668] [[14634,0],0]-&gt;[[14634,0],1] mca_oob_tcp_msg_send_bytes: write failed: Connection reset by peer (104) [sd = 16]
</span><br>
<span class="quotelev1">&gt; [savbu-usnic-a:26668] [[14634,0],0]-[[14634,0],1] mca_oob_tcp_peer_send_handler: unable to send header
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^CAbort is in progress...hit ctrl-c again within 5 seconds to forcibly terminate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ^C
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where each of the &quot;^C&quot; is a ctrl-c with arbitrary was allowed to pass beforehand (several minutes for the first two, &lt;5s in the third).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where &quot;sleeper&quot; is just an MPI program that does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    while (1) {
</span><br>
<span class="quotelev1">&gt;        sleep(60);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; ----8&lt;----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It happens under slurm and SSH.  If I launch on localhost (no --host/--hostfile option, no slurm, etc.) then it exits just fine.  The example output I gave above used the &quot;usnic&quot; BTL, but &quot;tcp&quot; has identical behavior.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This worked fine in v1.7.4.  I've bisected the change in behavior down to r30981: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30981">https://svn.open-mpi.org/trac/ompi/changeset/30981</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I file a ticket?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Crud - no, I'll take a look in a little bit
<br>
<p><p><span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14365.php">Jeff Squyres (jsquyres): "[OMPI devel] DNS migration of open-mpi.org"</a>
<li><strong>In reply to:</strong> <a href="14364.php">Dave Goodell (dgoodell): "[OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
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
