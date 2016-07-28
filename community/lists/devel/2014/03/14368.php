<?
$subject_val = "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 16:27:47 2014" -->
<!-- isoreceived="20140318202747" -->
<!-- sent="Tue, 18 Mar 2014 20:27:46 +0000" -->
<!-- isosent="20140318202746" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103" -->
<!-- id="B30DA262-7414-4613-8F8F-9AE815622BEF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D946BF2F-07C5-403E-B53B-65E6AC85D2DB_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 16:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Previous message:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>In reply to:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This seems to be working, but I think we now have a pid group problem -- I think we need to setpgid() right after the fork.  Otherwise, when we kill the group, we might end up killing much more than just the one MPI process (including the orted and/or orted's parent!).
<br>
<p>Ping me on IM -- I'm testing this idea and it seems to work properly.
<br>
<p><p>On Mar 18, 2014, at 4:11 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, fixed and cmr'd to you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 18, 2014, at 11:00 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 18, 2014, at 10:54 AM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm seeing problems with MPIEXEC_TIMEOUT in v1.7 @ r31103 (fairly close to HEAD):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIEXEC_TIMEOUT=8 mpirun --mca btl usnic,sm,self -np 4 ./sleeper
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The user-provided time limit for job execution has been
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reached:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPIEXEC_TIMEOUT: 8 seconds
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The job will now be aborted. Please check your code and/or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; adjust/remove the job execution time limit (as specified
</span><br>
<span class="quotelev3">&gt;&gt;&gt; by MPIEXEC_TIMEOUT in your environment).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: error: mpi015: task 0: Killed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: Terminating job step 689585.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun: Job step aborted: Waiting up to 2 seconds for job step to finish.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C[savbu-usnic-a:26668] [[14634,0],0]-&gt;[[14634,0],1] mca_oob_tcp_msg_send_bytes: write failed: Connection reset by peer (104) [sd = 16]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [savbu-usnic-a:26668] [[14634,0],0]-[[14634,0],1] mca_oob_tcp_peer_send_handler: unable to send header
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^CAbort is in progress...hit ctrl-c again within 5 seconds to forcibly terminate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ^C
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where each of the &quot;^C&quot; is a ctrl-c with arbitrary was allowed to pass beforehand (several minutes for the first two, &lt;5s in the third).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where &quot;sleeper&quot; is just an MPI program that does:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;wrank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Comm_size(MPI_COMM_WORLD, &amp;wsize);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  while (1) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      sleep(60);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----8&lt;----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It happens under slurm and SSH.  If I launch on localhost (no --host/--hostfile option, no slurm, etc.) then it exits just fine.  The example output I gave above used the &quot;usnic&quot; BTL, but &quot;tcp&quot; has identical behavior.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This worked fine in v1.7.4.  I've bisected the change in behavior down to r30981: <a href="https://svn.open-mpi.org/trac/ompi/changeset/30981">https://svn.open-mpi.org/trac/ompi/changeset/30981</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should I file a ticket?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Crud - no, I'll take a look in a little bit
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Dave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14367.php">http://www.open-mpi.org/community/lists/devel/2014/03/14367.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14369.php">Ralph Castain: "[OMPI devel] 1.7.5 and trunk failures"</a>
<li><strong>Previous message:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
<li><strong>In reply to:</strong> <a href="14367.php">Ralph Castain: "Re: [OMPI devel] MPIEXEC_TIMEOUT broken in v1.7 branch @ r31103"</a>
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
