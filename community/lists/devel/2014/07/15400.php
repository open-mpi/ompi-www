<?
$subject_val = "Re: [OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:26:42 2014" -->
<!-- isoreceived="20140731152642" -->
<!-- sent="Thu, 31 Jul 2014 15:26:41 +0000" -->
<!-- isosent="20140731152641" -->
<!-- name="Pritchard Jr., Howard" -->
<!-- email="howardp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: job size info in OPAL" -->
<!-- id="5F6FB0CDAF4F98419A0D970E1F65ED05ACC0F1_at_ECS-EXG-P-MB05.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D851E74F-0DD3-4455-8BFA-39E860DE79F4_at_icl.utk.edu" -->
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
<strong>From:</strong> Pritchard Jr., Howard (<em>howardp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 11:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15401.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15396.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi  George,
<br>
<p>The ompi_process_info.num_procs thing that seems to have been an object
<br>
of some contention yesterday.
<br>
<p>The ugni use of this is cloned off of the way I designed the mpich  netmod.
<br>
Leveraging off size of the job was an easy way to scale the mailbox size.
<br>
<p>If I'd been asked to have the netmod work in a context like it appears we
<br>
may want to be eventually using BTLs - not just within ompi but for other
<br>
things, I'd have worked with Darius (if still in mpich world) on changing the netmod initialization
<br>
method to allow for an optional attributes struct to be passed into the init 
<br>
method to give hints about how many connections may need to be established,
<br>
etc.  
<br>
&nbsp;
<br>
For the GNI BTL - the way its currently designed - if you are only expecting
<br>
to use it for a limited number of connections, then you want to initialize
<br>
for big mailboxes (IBer's can think many large buffers posted as RX WQEs).
<br>
But for very large jobs, with possibly highly connected communication pattern,
<br>
you want very small mailboxes.
<br>
<p>Howard
<br>
<p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of George Bosilca
<br>
Sent: Thursday, July 31, 2014 9:09 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: job size info in OPAL
<br>
<p>What is your definition of &quot;global job size&quot;?
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jul 31, 2014, at 11:06 , Pritchard Jr., Howard &lt;howardp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think given the way we want to use the btl's in lower levels like 
</span><br>
<span class="quotelev1">&gt; opal, it is pretty disgusting for a btl to need to figure out on its 
</span><br>
<span class="quotelev1">&gt; own something like a &quot;global job size&quot;.  That's not its business.  
</span><br>
<span class="quotelev1">&gt; Can't we add some attributes to the component's initialization method 
</span><br>
<span class="quotelev1">&gt; that provides hints for how to allocate resources it needs to provide its functionality?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll see if there's something clever that can be done in ugni for now.
</span><br>
<span class="quotelev1">&gt; I can always add in a hack to probe the apps placement info file and 
</span><br>
<span class="quotelev1">&gt; scale the smsg blocks by number of nodes rather than number of ranks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Nathan 
</span><br>
<span class="quotelev1">&gt; Hjelm
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 31, 2014 8:58 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: job size info in OPAL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +2^10000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This information is absolutely necessary at this point. If someone has a better solution they can provide it as an alternative RFC. Until then this is how it should be done... Otherwise we loose uGNI support on the trunk. Because we ARE NOT going to remove the mailbox size optimization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 30, 2014 at 10:00:18PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Should we make the job size (i.e., initial number of procs) available in OPAL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: At least 2 BTLs are using this info (*more below)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: usnic and ugni
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: there's already been some inflammatory emails about this; 
</span><br>
<span class="quotelev2">&gt;&gt; let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is an open question.  We *have* the information at the time that the BTLs are initialized: do we allow that information to go down to OPAL?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph added this info down in OPAL in r32355, but George reverted it in r32361.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Points for: YES, WE SHOULD
</span><br>
<span class="quotelev2">&gt;&gt; +++ 2 BTLs were using it (usinc, ugni) Other RTE job-related info are 
</span><br>
<span class="quotelev2">&gt;&gt; +++ already in OPAL (num local ranks, local rank)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Points for: NO, WE SHOULD NOT
</span><br>
<span class="quotelev2">&gt;&gt; --- What exactly is this number (e.g., num currently-connected procs?), and when is it updated?
</span><br>
<span class="quotelev2">&gt;&gt; --- We need to precisely delineate what belongs in OPAL vs. 
</span><br>
<span class="quotelev2">&gt;&gt; above-OPAL
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: here's how ompi_process_info.num_procs was used before the BTL move down to OPAL:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - usnic: for a minor latency optimization / sizing of a shared 
</span><br>
<span class="quotelev2">&gt;&gt; receive buffer queue length, and for the initial size of a peer 
</span><br>
<span class="quotelev2">&gt;&gt; lookup hash
</span><br>
<span class="quotelev2">&gt;&gt; - ugni: to determine the size of the per-peer buffers used for 
</span><br>
<span class="quotelev2">&gt;&gt; send/recv communication
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15373.php">http://www.open-mpi.org/community/lists/devel/2014/07/15373.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15395.php">http://www.open-mpi.org/community/lists/devel/2014/07/15395.php</a>
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15396.php">http://www.open-mpi.org/community/lists/devel/2014/07/15396.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15401.php">Nathan Hjelm: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15396.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Reply:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
