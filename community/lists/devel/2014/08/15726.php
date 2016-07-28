<?
$subject_val = "Re: [OMPI devel] Intermittent MPI issues with torque/maui";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 19:50:21 2014" -->
<!-- isoreceived="20140826235021" -->
<!-- sent="Tue, 26 Aug 2014 16:49:43 -0700" -->
<!-- isosent="20140826234943" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent MPI issues with torque/maui" -->
<!-- id="07DFCEE3-6678-4100-9E7F-A48BF0C68160_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140826193058.21869634_at_antares" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent MPI issues with torque/maui<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 19:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>In reply to:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't know what version of OMPI you're working with, so I can't precisely pinpoint the line in question. However, it looks likely to be an error caused by not finding the PBS nodefile.
<br>
<p>We look in the environment for PBS_NODEFILE to find the directory where the file should be found, and then look for a file named with our Torque-assigned jobid in that place. The open failure indicates that it isn't there or isn't readable by us.
<br>
<p>If you are on a network file system, then it's possible that Torque is creating the file on your server, but the compute node just isn't seeing it fast enough. You might look at potential NFS setup switches to speed-up the sync.
<br>
<p><p>On Aug 26, 2014, at 4:30 PM, Andrej Prsa &lt;aprsa09_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I asked this question on the torque mailing list, and I found several
</span><br>
<span class="quotelev1">&gt; similar issues on the web, but no definitive solutions. When we run our
</span><br>
<span class="quotelev1">&gt; MPI programs via torque/maui, at random times, in ~50-70% of all cases,
</span><br>
<span class="quotelev1">&gt; the job will fail with the following error message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 142
</span><br>
<span class="quotelev1">&gt; [node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file ras_tm_module.c at line 82
</span><br>
<span class="quotelev1">&gt; [node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file base/ras_base_allocate.c at line 149
</span><br>
<span class="quotelev1">&gt; [node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file base/plm_base_launch_support.c at line 99
</span><br>
<span class="quotelev1">&gt; [node1:51074] [[36074,0],0] ORTE_ERROR_LOG: File open failure in file plm_tm_module.c at line 194
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A daemon (pid unknown) died unexpectedly on signal 1  while attempting to
</span><br>
<span class="quotelev1">&gt; launch so we are aborting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There may be more information reported by the environment (see above).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may be because the daemon was unable to find all the needed shared
</span><br>
<span class="quotelev1">&gt; libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
</span><br>
<span class="quotelev1">&gt; location of the shared libraries on the remote nodes and this will
</span><br>
<span class="quotelev1">&gt; automatically be forwarded to the remote nodes.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that the job aborted, but has no info as to the process
</span><br>
<span class="quotelev1">&gt; that caused that situation.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compiled hwloc 1.9 with --with-libpci, torque with --enable-cpuset and
</span><br>
<span class="quotelev1">&gt; openmpi with --with-tm, so I thought (from the docs) that this should 
</span><br>
<span class="quotelev1">&gt; make torque and openmpi communicate seamlessly. Resubmitting the exact
</span><br>
<span class="quotelev1">&gt; same job will run the next time or the time after that. Adding sleep to
</span><br>
<span class="quotelev1">&gt; work around any race conditions did not help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15724.php">http://www.open-mpi.org/community/lists/devel/2014/08/15724.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15727.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Comm_split_type(COMM_SELF, MPI_UNDEFINED, ...)"</a>
<li><strong>Previous message:</strong> <a href="15725.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>In reply to:</strong> <a href="15724.php">Andrej Prsa: "[OMPI devel] Intermittent MPI issues with torque/maui"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
<li><strong>Reply:</strong> <a href="15728.php">Andrej Prsa: "Re: [OMPI devel] Intermittent MPI issues with torque/maui"</a>
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
