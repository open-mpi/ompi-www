<?
$subject_val = "Re: [OMPI devel] OMPI devel] Pull requests on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 22:11:35 2014" -->
<!-- isoreceived="20141107031135" -->
<!-- sent="Thu, 6 Nov 2014 19:11:31 -0800" -->
<!-- isosent="20141107031131" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Pull requests on the trunk" -->
<!-- id="0579C580-F1FC-4A35-A28F-78A69617E3FC_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CDFFEAA0-7FBC-4D65-A2C5-13E125F2F282_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI devel] Pull requests on the trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 22:11:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<li><strong>In reply to:</strong> <a href="16265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16268.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<li><strong>Reply:</strong> <a href="16268.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah - to be clear, I had no problem with anything you did, Gilles. I was only noting that several of them had positive comments, but they weren&#146;t being merged. Hate to see the good work lost or forgotten :-)
<br>
<p><p><span class="quotelev1">&gt; On Nov 6, 2014, at 5:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I like the PRs; I like the nice github tools for commenting and discussing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry I haven't followed up on the two you filed for me yet.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2014, at 8:23 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My bad (mostly)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I made quite a lot of PR to get some review before commiting to the master, and did not follow up in a timely manner.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I closed two obsoletes PR today.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #245 should be ready for prime time.
</span><br>
<span class="quotelev2">&gt;&gt; #227 too unless George has an objection.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I asked Jeff to review #232 and #228 because they are large and/or objectionable changes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I asked George to review #262 since it might require some other changes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #261 is ready for prime time assuming this is the way we agree to go.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you think i should post patches/links to my branches to the devel mailing list rather than issuing PR, or i should name my branches rfc/something, then just let me know.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 6, 2014, at 6:21 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree - I sent the note because I see people doing things a bit differently than expected. I have no issue with PRs for things where people want extra eyes on something before committing, or as part of an RFC. Just want to ensure folks aren&#146;t letting them languish expecting some kind of gatekeeper to merge them&#133;as that will never happen.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The wiki actually specifically mentions this use case (PR's against master for RFCs and extra eyes).  But it would be good to clarify that there is no gatekeeper for these PRs like there is in ompi-release.
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16263.php">http://www.open-mpi.org/community/lists/devel/2014/11/16263.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16264.php">http://www.open-mpi.org/community/lists/devel/2014/11/16264.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16265.php">http://www.open-mpi.org/community/lists/devel/2014/11/16265.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="16265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<li><strong>In reply to:</strong> <a href="16265.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16268.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<li><strong>Reply:</strong> <a href="16268.php">Howard Pritchard: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
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
