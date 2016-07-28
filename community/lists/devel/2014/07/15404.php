<?
$subject_val = "Re: [OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 12:21:17 2014" -->
<!-- isoreceived="20140731162117" -->
<!-- sent="Thu, 31 Jul 2014 09:21:12 -0700" -->
<!-- isosent="20140731162112" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: job size info in OPAL" -->
<!-- id="65DE3916-26D0-41D2-9AFF-1E6ED4F50FB5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140731161404.GQ43566_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 12:21:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15405.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15403.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15403.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fair enough - yeah, that is an issue I've been avoiding :-)
<br>
<p>On Jul 31, 2014, at 9:14 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This approach will work now but we need to start thinking about how we
</span><br>
<span class="quotelev1">&gt; want to support multiple simultaneous btl users. Does each user call
</span><br>
<span class="quotelev1">&gt; add_procs with a single module (or set of modules) or does each user
</span><br>
<span class="quotelev1">&gt; call btl_component_init and get their own module? If we do the latter
</span><br>
<span class="quotelev1">&gt; then it might make sense to add a max_procs argument to the
</span><br>
<span class="quotelev1">&gt; btl_component_init. Keep in mind we need to change the
</span><br>
<span class="quotelev1">&gt; btl_component_init interface anyway because the threading arguments no
</span><br>
<span class="quotelev1">&gt; longer make sense in their current form.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jul 31, 2014 at 09:04:09AM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Like I said, why don't we just do the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd like to suggest an alternative solution. A BTL can exploit whatever data it wants, but should first test if the data is available. If the data is *required*, then the BTL gracefully disqualifies itself. If the data is *desirable* for optimization, then the BTL writer (if they choose) can include an alternate path that doesn't do the optimization if the data isn't available.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Seems like this should resolve the disagreement in a way that meets everyone's need. It basically is an attribute approach, but not requiring modification of the BTL interface.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 31, 2014, at 8:26 AM, Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi  George,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi_process_info.num_procs thing that seems to have been an object
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of some contention yesterday.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ugni use of this is cloned off of the way I designed the mpich  netmod.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Leveraging off size of the job was an easy way to scale the mailbox size.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I'd been asked to have the netmod work in a context like it appears we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may want to be eventually using BTLs - not just within ompi but for other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things, I'd have worked with Darius (if still in mpich world) on changing the netmod initialization
</span><br>
<span class="quotelev3">&gt;&gt;&gt; method to allow for an optional attributes struct to be passed into the init 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; method to give hints about how many connections may need to be established,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; etc.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the GNI BTL - the way its currently designed - if you are only expecting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use it for a limited number of connections, then you want to initialize
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for big mailboxes (IBer's can think many large buffers posted as RX WQEs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But for very large jobs, with possibly highly connected communication pattern,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you want very small mailboxes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, July 31, 2014 9:09 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] RFC: job size info in OPAL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What is your definition of &quot;global job size&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 31, 2014, at 11:06 , Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Folks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think given the way we want to use the btl's in lower levels like 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; opal, it is pretty disgusting for a btl to need to figure out on its 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; own something like a &quot;global job size&quot;.  That's not its business.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can't we add some attributes to the component's initialization method 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that provides hints for how to allocate resources it needs to provide its functionality?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'll see if there's something clever that can be done in ugni for now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can always add in a hack to probe the apps placement info file and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scale the smsg blocks by number of nodes rather than number of ranks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Howard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hjelm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Thursday, July 31, 2014 8:58 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI devel] RFC: job size info in OPAL
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +2^10000000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This information is absolutely necessary at this point. If someone has a better solution they can provide it as an alternative RFC. Until then this is how it should be done... Otherwise we loose uGNI support on the trunk. Because we ARE NOT going to remove the mailbox size optimization.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, Jul 30, 2014 at 10:00:18PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT: Should we make the job size (i.e., initial number of procs) available in OPAL?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY: At least 2 BTLs are using this info (*more below)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE: usnic and ugni
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT: there's already been some inflammatory emails about this; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is an open question.  We *have* the information at the time that the BTLs are initialized: do we allow that information to go down to OPAL?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph added this info down in OPAL in r32355, but George reverted it in r32361.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Points for: YES, WE SHOULD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ 2 BTLs were using it (usinc, ugni) Other RTE job-related info are 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ already in OPAL (num local ranks, local rank)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Points for: NO, WE SHOULD NOT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- What exactly is this number (e.g., num currently-connected procs?), and when is it updated?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- We need to precisely delineate what belongs in OPAL vs. 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; above-OPAL
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: here's how ompi_process_info.num_procs was used before the BTL move down to OPAL:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - usnic: for a minor latency optimization / sizing of a shared 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; receive buffer queue length, and for the initial size of a peer 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lookup hash
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - ugni: to determine the size of the per-peer buffers used for 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; send/recv communication
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15373.php">http://www.open-mpi.org/community/lists/devel/2014/07/15373.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15395.php">http://www.open-mpi.org/community/lists/devel/2014/07/15395.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15396.php">http://www.open-mpi.org/community/lists/devel/2014/07/15396.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15400.php">http://www.open-mpi.org/community/lists/devel/2014/07/15400.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15402.php">http://www.open-mpi.org/community/lists/devel/2014/07/15402.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15403.php">http://www.open-mpi.org/community/lists/devel/2014/07/15403.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15405.php">Kenneth A. Lloyd: "Re: [OMPI devel] mca_PROJECT_FRAMEWORK_COMPONENT_symbol vs.	mca_FRAMEWORK_COMPONENT_symbol"</a>
<li><strong>Previous message:</strong> <a href="15403.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15403.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
