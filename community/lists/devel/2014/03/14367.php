<?
$subject_val = "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 16:12:44 2014" -->
<!-- isoreceived="20140318201244" -->
<!-- sent="Tue, 18 Mar 2014 13:11:21 -0700" -->
<!-- isosent="20140318201121" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103" -->
<!-- id="D946BF2F-07C5-403E-B53B-65E6AC85D2DB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CD662A08-6FB2-4183-9C31-49D68F0226F6_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-03-18 16:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>In reply to:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, fixed and cmr'd to you
<br>
<p><p>On Mar 18, 2014, at 11:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2014, at 10:54 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm seeing problems with MPIEXEC_TIMEOUT in v1.7 @ r31103 (fairly close to HEAD):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt; MPIEXEC_TIMEOUT=8 mpirun --mca btl usnic,sm,self -np 4 ./sleeper
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; The user-provided time limit for job execution has been
</span><br>
<span class="quotelev2">&gt;&gt; reached:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPIEXEC_TIMEOUT: 8 seconds
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The job will now be aborted. Please check your code and/or
</span><br>
<span class="quotelev2">&gt;&gt; adjust/remove the job execution time limit (as specified
</span><br>
<span class="quotelev2">&gt;&gt; by MPIEXEC_TIMEOUT in your environment).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; srun: error: mpi015: task 0: Killed
</span><br>
<span class="quotelev2">&gt;&gt; srun: Terminating job step 689585.2
</span><br>
<span class="quotelev2">&gt;&gt; srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev2">&gt;&gt; ^C[savbu-usnic-a:26668] [[14634,0],0]-&gt;[[14634,0],1] mca_oob_tcp_msg_send_bytes: write failed: Connection reset by peer (104) [sd = 16]
</span><br>
<span class="quotelev2">&gt;&gt; [savbu-usnic-a:26668] [[14634,0],0]-[[14634,0],1] mca_oob_tcp_peer_send_handler: unable to send header
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ^CAbort is in progress...hit ctrl-c again within 5 seconds to forcibly terminate
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ^C
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where each of the &quot;^C&quot; is a ctrl-c with arbitrary was allowed to pass beforehand (several minutes for the first two, &lt;5s in the third).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Where &quot;sleeper&quot; is just an MPI program that does:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   while (1) {
</span><br>
<span class="quotelev2">&gt;&gt;       sleep(60);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It happens under slurm and SSH.  If I launch on localhost (no --host/--hostfile option, no slurm, etc.) then it exits just fine.  The example output I gave above used the &quot;usnic&quot; BTL, but &quot;tcp&quot; has identical behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This worked fine in v1.7.4.  I've bisected the change in behavior down to r30981: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30981">https://svn.open-mpi.org/trac/ompi/changeset/30981</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Should I file a ticket?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Crud - no, I'll take a look in a little bit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Dave
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Previous message:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>In reply to:</strong> <a href="14366.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>Reply:</strong> <a href="14368.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
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
