<?
$subject_val = "Re: [OMPI devel] RFC: job size info in OPAL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 11:27:05 2014" -->
<!-- isoreceived="20140731152705" -->
<!-- sent="Thu, 31 Jul 2014 09:27:04 -0600" -->
<!-- isosent="20140731152704" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: job size info in OPAL" -->
<!-- id="20140731152704.GP43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="25F81E4B-C642-4D56-A98B-5B3B1DA840AC_at_icl.utk.edu" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-31 11:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15400.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not like the fact that add_procs is called with every proc in the
<br>
MPI_COMM_WORLD. That needs to change, so, I will not rely on the number
<br>
of procs being added being the same as the world or universe size.
<br>
<p>-Nathan
<br>
<p>On Thu, Jul 31, 2014 at 09:22:00AM -0600, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;    I definitively think you misunderstood this scope of this RFC. The
</span><br>
<span class="quotelev1">&gt;    information that is so important to you to configure the mailbox size is
</span><br>
<span class="quotelev1">&gt;    available to you when you need it. This information is made available by
</span><br>
<span class="quotelev1">&gt;    the PML through the call to add_procs, which comes with all the procs in
</span><br>
<span class="quotelev1">&gt;    the MPI_COMM_WORLD. So, ugni doesn't need anything more than it is
</span><br>
<span class="quotelev1">&gt;    available today. [This is of course under the assumption that someone
</span><br>
<span class="quotelev1">&gt;    clean the BTL and remove the usage of MPI_COMM_WORLD.]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The real scope of this RFC is to move this information before that in
</span><br>
<span class="quotelev1">&gt;    order to allow the BTLs to have access to some possible number of
</span><br>
<span class="quotelev1">&gt;    processes between the call to btl_open and the call to btl_all_proc (in
</span><br>
<span class="quotelev1">&gt;    other words during btl_init).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    PS: here is the patch that fixes all issues in ugni.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    On Jul 31, 2014, at 10:58 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;    &gt;
</span><br>
<span class="quotelev2">&gt;    &gt; +2^10000000
</span><br>
<span class="quotelev2">&gt;    &gt;
</span><br>
<span class="quotelev2">&gt;    &gt; This information is absolutely necessary at this point. If someone has a
</span><br>
<span class="quotelev2">&gt;    &gt; better solution they can provide it as an alternative RFC. Until then
</span><br>
<span class="quotelev2">&gt;    &gt; this is how it should be done... Otherwise we loose uGNI support on the
</span><br>
<span class="quotelev2">&gt;    &gt; trunk. Because we ARE NOT going to remove the mailbox size optimization.
</span><br>
<span class="quotelev2">&gt;    &gt;
</span><br>
<span class="quotelev2">&gt;    &gt; -Nathan
</span><br>
<span class="quotelev2">&gt;    &gt;
</span><br>
<span class="quotelev2">&gt;    &gt; On Wed, Jul 30, 2014 at 10:00:18PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; WHAT: Should we make the job size (i.e., initial number of procs)
</span><br>
<span class="quotelev1">&gt;    available in OPAL?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; WHY: At least 2 BTLs are using this info (*more below)
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; WHERE: usnic and ugni
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; TIMEOUT: there's already been some inflammatory emails about this;
</span><br>
<span class="quotelev1">&gt;    let's discuss next Tuesday on the teleconf: Tue, 5 Aug 2014
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; MORE DETAIL:
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; This is an open question.  We *have* the information at the time that
</span><br>
<span class="quotelev1">&gt;    the BTLs are initialized: do we allow that information to go down to OPAL?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Ralph added this info down in OPAL in r32355, but George reverted it in
</span><br>
<span class="quotelev1">&gt;    r32361.
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Points for: YES, WE SHOULD
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; +++ 2 BTLs were using it (usinc, ugni)
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; +++ Other RTE job-related info are already in OPAL (num local ranks,
</span><br>
<span class="quotelev1">&gt;    local rank)
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Points for: NO, WE SHOULD NOT
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; --- What exactly is this number (e.g., num currently-connected procs?),
</span><br>
<span class="quotelev1">&gt;    and when is it updated?
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; --- We need to precisely delineate what belongs in OPAL vs. above-OPAL
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; FWIW: here's how ompi_process_info.num_procs was used before the BTL
</span><br>
<span class="quotelev1">&gt;    move down to OPAL:
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; - usnic: for a minor latency optimization / sizing of a shared receive
</span><br>
<span class="quotelev1">&gt;    buffer queue length, and for the initial size of a peer lookup hash
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; - ugni: to determine the size of the per-peer buffers used for
</span><br>
<span class="quotelev1">&gt;    send/recv communication
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; --
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;    &gt;&gt;
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;    &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15373.php">http://www.open-mpi.org/community/lists/devel/2014/07/15373.php</a>
</span><br>
<span class="quotelev2">&gt;    &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;    &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;    &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;    &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;    &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15394.php">http://www.open-mpi.org/community/lists/devel/2014/07/15394.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    _______________________________________________
</span><br>
<span class="quotelev1">&gt;    devel mailing list
</span><br>
<span class="quotelev1">&gt;    devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;    Link to this post:
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/community/lists/devel/2014/07/15399.php">http://www.open-mpi.org/community/lists/devel/2014/07/15399.php</a>
</span><br>
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15401/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15402.php">Ralph Castain: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>Previous message:</strong> <a href="15400.php">Pritchard Jr., Howard: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15399.php">George Bosilca: "Re: [OMPI devel] RFC: job size info in OPAL"</a>
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
