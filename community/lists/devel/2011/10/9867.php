<?
$subject_val = "Re: [OMPI devel] Locality info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 19 19:16:10 2011" -->
<!-- isoreceived="20111019231610" -->
<!-- sent="Wed, 19 Oct 2011 17:16:01 -0600" -->
<!-- isosent="20111019231601" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Locality info" -->
<!-- id="C180448E-BDD1-4AA5-BD8C-B7B3B869956D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A1C5F299-595D-4144-BAD3-46837158556E_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Locality info<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-19 19:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
<li><strong>In reply to:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 19, 2011, at 5:05 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Wonderful!!! We've been waiting for such functionality for a while.
</span><br>
<p>My pleasure :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do have some questions/remarks related to this patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the my_node_rank in the orte_proc_info_t structure?
</span><br>
<p>The node rank is a local ranking of procs on a node, starting with 0 for the lowest vpid on the node and going up from there. It normally was passed in the environment and picked up in the ess components so it could be used to select a static port during oob init, if those were specified.
<br>
<p>I moved it to a more general place solely because I wanted to move a bunch of replicated code to the ess/base instead of having it in nearly every module. I debated about putting it in ess/base.h instead, but since other places in the code might also want it, figured I'd make it more globally available.
<br>
<p>If it turns out nobody needs it, we can move it back into just the ess.
<br>
<p><span class="quotelev1">&gt; Is there any difference between using the field my_node_rank or the vpid part of the my_daemon?
</span><br>
<p>Yes - my_daemon refers to the local daemon. The node rank refers solely to the relative ranking of application procs on the node.
<br>
<p><span class="quotelev1">&gt; What is the correct way of finding that two processes are on the same remote location, comparing their daemon vpid or their node_rank?
</span><br>
<p>Daemon vpid
<br>
<p><span class="quotelev1">&gt; How the node_rank change with respect to dynamic process management when new daemons are joining?
</span><br>
<p>This is where node_rank comes into play. The mapper sees across jobs that are sharing nodes, so the mapper currently is responsible for computing the node_rank of a proc. This info gets transmitted to all daemons, including new dynamically started ones, in the launch msg. So everyone always has a picture of the node_rank for every proc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The flag OPAL_PROC_ON_L*CACHE is only set for local processes if I understand correctly your last email?
</span><br>
<p>Yes - all the locality flags refer only to the location of another process relative to you, you being an app process. As I said, though, this can easily be extended to return the relative locality of two procs on a remote node, if that would be of use.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess proc_flags in proc.h should be opal_paffinity_locality_t to match the flags on the ORTE level?
</span><br>
<p>My bad - I thought I had changed it? If not, it certainly needs to be...
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A more high level remark. The fact that the locality information is automatically packed and exchanged during the grpcomm modex call seems a little bit weird (do the upper level have a saying on it?). I would not have thought that the grpcomm (which based on the grpcomm.h header file is a framework providing communication services that span entire jobs or collections of processes) is the place to put it.
</span><br>
<p>I agree - I wasn't entirely sure where to put it, frankly. It needs to be somewhere that both direct launch and mpirun-launched apps can see it. Could go in the MPI layer, I suppose.
<br>
<p>Suggestions welcome!
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 19, 2011, at 16:28 , Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For those of you who don't follow the commits...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just committed (r25323) an extension of the orte_ess.proc_get_locality function that allows a process to get its relative resource usage with any other proc in the job. In other words, you can provide a process name to the function, and the returned bitmask tells you if you share a node, numa, socket, caches (by level), core, and hyperthread with that process.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you are on the same node and unbound, of course, you share all of those. However, if you are bound, then this can help tell you if you are on a common numa node, sharing an L1 cache, etc. Might be handy.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I implemented the underlying functionality so that we can further extend it to tell you the relative resource location of two procs on a remote node. If that someday becomes of interest, it would be relatively easy to do - but would require passing more info around. Hence, I've allowed for it, but not implemented it until there is some identified need.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Locality info is available anytime after the modex is completed during MPI_Init, and is supported regardless of launch environment (minus cnos, for now), launch by mpirun, or direct-launch - in other words, pretty much always.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hope it proves of help in your work
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9868.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25323"</a>
<li><strong>Previous message:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
<li><strong>In reply to:</strong> <a href="9866.php">George Bosilca: "Re: [OMPI devel] Locality info"</a>
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
