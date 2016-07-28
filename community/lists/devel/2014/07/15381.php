<?
$subject_val = "Re: [OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 20:49:18 2014" -->
<!-- isoreceived="20140731004918" -->
<!-- sent="Wed, 30 Jul 2014 20:49:15 -0400" -->
<!-- isosent="20140731004915" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: job size info in OPAL" -->
<!-- id="16171112-1B12-4FFE-8267-63ABF9FC5E06_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="0F6CDBC5-7017-492D-A51E-FF3BB6FE749D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-07-30 20:49:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>In reply to:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2014, at 20:37 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 30, 2014, at 5:25 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 30, 2014, at 18:00 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Should we make the job size (i.e., initial number of procs) available in OPAL?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: At least 2 BTLs are using this info (*more below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: usnic and ugni
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: there's already been some inflammatory emails about this; let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is an open question.  We *have* the information at the time that the BTLs are initialized: do we allow that information to go down to OPAL?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph added this info down in OPAL in r32355, but George reverted it in r32361.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Points for: YES, WE SHOULD
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ 2 BTLs were using it (usinc, ugni)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ Other RTE job-related info are already in OPAL (num local ranks, local rank)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Points for: NO, WE SHOULD NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- What exactly is this number (e.g., num currently-connected procs?), and when is it updated?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- We need to precisely delineate what belongs in OPAL vs. above-OPAL
</span><br>
<span class="quotelev2">&gt;&gt; --- Using this information to configure the communication environment limits the scope of communication substrate to a static application (in number of participants). Under this assumption, one can simply wait until the first add_proc to compute the number of processes, solution as &#147;correct&#148; as the current one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not necessarily - it depends on how it is used, and how it is communicated. Some of us have explored other options for using this that aren&#146;t static, but where the info is of use.
</span><br>
<p>This is a little bit too much hand waving to be constructive. Some other folks in the field have developed many communications libraries, and none of them needed a random number of potential processes to initialize themselves correctly.
<br>
<p><span class="quotelev2">&gt;&gt; The other &#147;global&#148; information that were made available in OPAL (num_local_peers and my_local_rank) are only used by local BTL (SM, SMCUDA and VADER). Moreover, my_local_rank is only used to decide who initialize the backend file, thing that can easily be done using an atomic operation. The number of local processes is used to prevent SM from activating itself if we don&#146;t have at least 2 processes per node. So, their usage is minimally invasive, and can eventually be phased out with a little effort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: the new PMI abstraction is in OPAL because it is RTE-agnostic. So all the info being discussed will actually be captured originally in the OPAL layer,  and stored in the OPAL dstore framework. In the current code, the RTE grabs the data and exposes it to the OMPI layer, which then pushes it back down to the OPAL proc.h struct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;shrug&gt; since anyone can freely query the info from opal/pmix or opal/dstore, it is really irrelevant in some ways. The info is there, in the OPAL layer, prior to BTL's being initialized. If you don't want it in a global storage, people can just get it from the appropriate OPAL API.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So what are we actually debating here? Global storage vs API call?
</span><br>
<p>Our goals in this project are clearly orthogonal. I put a lot of effort into this move because I need to use the BTLs without PMI, without RTE. In fact the question boils down to: Do you want to be able to use the BTL to bootstrap the RTE or not? If yes, then the number of processes is out of the picture, either as an API or as a global storage.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW: here's how ompi_process_info.num_procs was used before the BTL move down to OPAL:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - usnic: for a minor latency optimization / sizing of a shared receive buffer queue length, and for the initial size of a peer lookup hash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - ugni: to determine the size of the per-peer buffers used for send/recv communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15373.php">http://www.open-mpi.org/community/lists/devel/2014/07/15373.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15378.php">http://www.open-mpi.org/community/lists/devel/2014/07/15378.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15379.php">http://www.open-mpi.org/community/lists/devel/2014/07/15379.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15382.php">tmishima_at_[hidden]: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Previous message:</strong> <a href="15380.php">George Bosilca: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs. mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>In reply to:</strong> <a href="15379.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15385.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
