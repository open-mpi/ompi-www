<?
$subject_val = "Re: [OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 20:25:36 2014" -->
<!-- isoreceived="20140731002536" -->
<!-- sent="Wed, 30 Jul 2014 20:25:33 -0400" -->
<!-- isosent="20140731002533" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: job size info in OPAL" -->
<!-- id="65CEC1CC-B896-413F-A66E-C6F113F5B0D4_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="BE97CEB2-2F97-4652-AAAB-403AA416B1C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: job size info in OPAL<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 20:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2014, at 18:00 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Should we make the job size (i.e., initial number of procs) available in OPAL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: At least 2 BTLs are using this info (*more below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: usnic and ugni
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: there's already been some inflammatory emails about this; let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an open question.  We *have* the information at the time that the BTLs are initialized: do we allow that information to go down to OPAL?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph added this info down in OPAL in r32355, but George reverted it in r32361.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Points for: YES, WE SHOULD
</span><br>
<span class="quotelev1">&gt; +++ 2 BTLs were using it (usinc, ugni)
</span><br>
<span class="quotelev1">&gt; +++ Other RTE job-related info are already in OPAL (num local ranks, local rank)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Points for: NO, WE SHOULD NOT
</span><br>
<span class="quotelev1">&gt; --- What exactly is this number (e.g., num currently-connected procs?), and when is it updated?
</span><br>
<span class="quotelev1">&gt; --- We need to precisely delineate what belongs in OPAL vs. above-OPAL
</span><br>
--- Using this information to configure the communication environment limits the scope of communication substrate to a static application (in number of participants). Under this assumption, one can simply wait until the first add_proc to compute the number of processes, solution as &#147;correct&#148; as the current one.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
The other &#147;global&#148; information that were made available in OPAL (num_local_peers and my_local_rank) are only used by local BTL (SM, SMCUDA and VADER). Moreover, my_local_rank is only used to decide who initialize the backend file, thing that can easily be done using an atomic operation. The number of local processes is used to prevent SM from activating itself if we don&#146;t have at least 2 processes per node. So, their usage is minimally invasive, and can eventually be phased out with a little effort.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; FWIW: here's how ompi_process_info.num_procs was used before the BTL move down to OPAL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - usnic: for a minor latency optimization / sizing of a shared receive buffer queue length, and for the initial size of a peer lookup hash
</span><br>
<span class="quotelev1">&gt; - ugni: to determine the size of the per-peer buffers used for send/recv communication
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15373.php">http://www.open-mpi.org/community/lists/devel/2014/07/15373.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>In reply to:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
