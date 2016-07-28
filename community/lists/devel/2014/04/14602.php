<?
$subject_val = "Re: [OMPI devel] RFC: Remove heterogeneous support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 22:47:19 2014" -->
<!-- isoreceived="20140425024719" -->
<!-- sent="Thu, 24 Apr 2014 19:47:15 -0700" -->
<!-- isosent="20140425024715" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove heterogeneous support" -->
<!-- id="42520162-EC94-41E7-9728-85AE035EAC44_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140424190534.GA23802_at_neuromancer.fritz.box" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove heterogeneous support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 22:47:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14603.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14598.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2014, at 12:05 PM, Andreas Sch&#228;fer &lt;gentryx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 14:49 Thu 24 Apr     , George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Apr 24, 2014 at 1:06 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code is unused.  It has been unused for a long time.  It is
</span><br>
<span class="quotelev2">&gt;&gt; unlikely to be fixed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We'd be using it, probably not in production, but in research and
</span><br>
<span class="quotelev1">&gt; teaching -- if it was operational.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And, as George pointed out, I see a trend towards heterogeneity in
</span><br>
<span class="quotelev1">&gt; HPC, to I'd say this feature will be rather more important in the
</span><br>
<span class="quotelev1">&gt; future.
</span><br>
<p>We have been hearing about such &quot;trends&quot; for a long time, but have yet to see them actually happen. Not saying it couldn't some day - just saying it still hasn't happened in production.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: This code has implications from the datatype engine till up in the
</span><br>
<span class="quotelev2">&gt;&gt; MPI layer. It also impacts  the BTL, especially the hand-shake for the
</span><br>
<span class="quotelev2">&gt;&gt; one requiring such a protocol. It also has an impact on the external32
</span><br>
<span class="quotelev2">&gt;&gt; support in MPI, for some types of architectures. So it's removal
</span><br>
<span class="quotelev2">&gt;&gt; should be an extremely cautious and chirurgical operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, would repairing the code be significantly more complicated than a
</span><br>
<span class="quotelev1">&gt; clean extraction?
</span><br>
<p>Unless someone volunteers to fix it, it would seem the question is moot. My employer isn't interested, and I'm not sure any of the employer's within the OMPI community currently are inclined to support such an effort.
<br>
<p>I can't speak to what George is referring to re how it was broken as I honestly don't recall the circumstances. We know it has been broken for some time, and that nobody really has a setup to test it - we can check that it compiles, but I don't think any of us actually have a hetero cluster upon which we could test it.
<br>
<p>And as my production code friends keep pointing out - if you can't test it, then you can't &quot;sell&quot; it.
<br>
<p>So here's what I suggest: if someone is willing to take the lead in fixing hetero operations, and has the hardware upon which to verify it, then please step forward. Otherwise, I agree with Jeff that we should remove it and move on.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers
</span><br>
<span class="quotelev1">&gt; -Andreas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; Andreas Sch&#228;fer
</span><br>
<span class="quotelev1">&gt; HPC and Grid Computing
</span><br>
<span class="quotelev1">&gt; Chair of Computer Science 3
</span><br>
<span class="quotelev1">&gt; Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
</span><br>
<span class="quotelev1">&gt; +49 9131 85-27910
</span><br>
<span class="quotelev1">&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev1">&gt; <a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
</span><br>
<span class="quotelev1">&gt; ==========================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (\___/)
</span><br>
<span class="quotelev1">&gt; (+'.'+)
</span><br>
<span class="quotelev1">&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev1">&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev1">&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14598.php">http://www.open-mpi.org/community/lists/devel/2014/04/14598.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14603.php">Ralph Castain: "Re: [OMPI devel] mosix patches"</a>
<li><strong>Previous message:</strong> <a href="14601.php">Ralph Castain: "Re: [OMPI devel] RFC: Well-known mca parameters"</a>
<li><strong>In reply to:</strong> <a href="14598.php">Andreas Sch&#228;fer: "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
<li><strong>Reply:</strong> <a href="14606.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove heterogeneous support"</a>
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
