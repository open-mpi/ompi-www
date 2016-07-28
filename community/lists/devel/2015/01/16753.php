<?
$subject_val = "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  7 11:29:51 2015" -->
<!-- isoreceived="20150107162951" -->
<!-- sent="Wed, 7 Jan 2015 09:29:49 -0700" -->
<!-- isosent="20150107162949" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)" -->
<!-- id="20150107162949.GF1467_at_pn1246003.lanl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A70EB102-772E-422C-B26D-A08BF82B48D1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-07 11:29:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16752.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16752.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, we decided some time back that pthreads is a minimum requirement
<br>
for Open MPI.
<br>
<p>-Nathan
<br>
<p>On Wed, Jan 07, 2015 at 04:26:01PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Jan 7, 2015, at 11:22 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Valid options are :
</span><br>
<span class="quotelev2">&gt; &gt; --with-threads e.g. --with-threads=posix e.g. default
</span><br>
<span class="quotelev2">&gt; &gt; And
</span><br>
<span class="quotelev2">&gt; &gt; --with-threads=no
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Except configure will explicitly fail if --with-threads=no is used
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is the moral equivalent of not having this option.  :-)  (which I think is your point :-) )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So bottom line, pthreads and pthreads only are usable
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But my question remains: we all decided that OMPI will *require* pthreads, right?  (i.e., configure will fail if pthreads are not available)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am being pedantic here, I know -- but it's slightly different than what you're saying, and this threading stuff is already quite confusing...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gilles 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 7, 2015, at 4:25 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Talking about thread support ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; i made a RFC several monthes ago in order to remove the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --with-threads option from configure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /* ompi requires pthreads, no more, no less */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did we decide this?  (that OMPI *requires* pthreads)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I *think* we did.  But I just want to make sure that my (terrible) memory is correct...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it was accepted, but i could not find the time to implement it ...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; basically, i can see three steps :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1) remove the --with-threads option from configure, check for pthreads, and set the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_HAVE_POSIX_THREADS macro to 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sounds good.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2) step 1) + remove #ifdef OPAL_HAVE_POSIX_THREADS and remove dead code
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; (e.g. #ifndef OPAL_HAVE_POSIX_THREADS)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also make configure fail if pthreads are not available.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3) step 1) + step 2) + remove the OPAL thread abstraction layer
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is it a good idea to implement steps 2) and 3) ?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; i mean, if there is a chance we might support an other threading model in the future,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it might be better to keep some dead code for the time being.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I think the consensus was that pthreads are fine for the foreseeable future.  If we need to re-add the threading abstraction layer, it's annoying, but not difficult.  Might as well simplify what we have, since there's no other threading system on the horizon that we need to worry about.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16750.php">http://www.open-mpi.org/community/lists/devel/2015/01/16750.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16751.php">http://www.open-mpi.org/community/lists/devel/2015/01/16751.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16752.php">http://www.open-mpi.org/community/lists/devel/2015/01/16752.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16753/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16752.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>In reply to:</strong> <a href="16752.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Reply:</strong> <a href="16754.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
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
