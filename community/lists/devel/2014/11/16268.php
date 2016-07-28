<?
$subject_val = "Re: [OMPI devel] OMPI devel] Pull requests on the trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  7 11:23:50 2014" -->
<!-- isoreceived="20141107162350" -->
<!-- sent="Fri, 7 Nov 2014 09:23:49 -0700" -->
<!-- isosent="20141107162349" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI devel] Pull requests on the trunk" -->
<!-- id="CAF1Cqj6Nj7ej9-NCtf+Mq8C=kz_d8w86QxxXKhM68HDVkVQ26w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0579C580-F1FC-4A35-A28F-78A69617E3FC_at_gmail.com" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-07 11:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16269.php">Joshua Ladd: "Re: [OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16266.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>I'm fine with the pull request method too.  We hadn't been considering this
<br>
avenue for master updates
<br>
in the transition to github.  I think as long as we have a set way for
<br>
associating the pull of a given
<br>
request into master, so they don't end up in a kind of purgatory, we'll be
<br>
in good shape.
<br>
<p>Howard
<br>
<p><p>2014-11-06 20:11 GMT-07:00 Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Yeah - to be clear, I had no problem with anything you did, Gilles. I was
</span><br>
<span class="quotelev1">&gt; only noting that several of them had positive comments, but they weren&#226;&#128;&#153;t
</span><br>
<span class="quotelev1">&gt; being merged. Hate to see the good work lost or forgotten :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 6, 2014, at 5:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually, I like the PRs; I like the nice github tools for commenting
</span><br>
<span class="quotelev1">&gt; and discussing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry I haven't followed up on the two you filed for me yet.  :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 6, 2014, at 8:23 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My bad (mostly)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I made quite a lot of PR to get some review before commiting to the
</span><br>
<span class="quotelev1">&gt; master, and did not follow up in a timely manner.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I closed two obsoletes PR today.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #245 should be ready for prime time.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #227 too unless George has an objection.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I asked Jeff to review #232 and #228 because they are large and/or
</span><br>
<span class="quotelev1">&gt; objectionable changes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I asked George to review #262 since it might require some other changes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #261 is ready for prime time assuming this is the way we agree to go.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you think i should post patches/links to my branches to the devel
</span><br>
<span class="quotelev1">&gt; mailing list rather than issuing PR, or i should name my branches
</span><br>
<span class="quotelev1">&gt; rfc/something, then just let me know.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Nov 6, 2014, at 6:21 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I agree - I sent the note because I see people doing things a bit
</span><br>
<span class="quotelev1">&gt; differently than expected. I have no issue with PRs for things where people
</span><br>
<span class="quotelev1">&gt; want extra eyes on something before committing, or as part of an RFC. Just
</span><br>
<span class="quotelev1">&gt; want to ensure folks aren&#226;&#128;&#153;t letting them languish expecting some kind of
</span><br>
<span class="quotelev1">&gt; gatekeeper to merge them&#226;&#128;&#166;as that will never happen.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; +1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The wiki actually specifically mentions this use case (PR's against
</span><br>
<span class="quotelev1">&gt; master for RFCs and extra eyes).  But it would be good to clarify that
</span><br>
<span class="quotelev1">&gt; there is no gatekeeper for these PRs like there is in ompi-release.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16263.php">http://www.open-mpi.org/community/lists/devel/2014/11/16263.php</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16264.php">http://www.open-mpi.org/community/lists/devel/2014/11/16264.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16265.php">http://www.open-mpi.org/community/lists/devel/2014/11/16265.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16266.php">http://www.open-mpi.org/community/lists/devel/2014/11/16266.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16268/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16269.php">Joshua Ladd: "Re: [OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="16266.php">Ralph Castain: "Re: [OMPI devel] OMPI devel] Pull requests on the trunk"</a>
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
