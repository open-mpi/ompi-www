<?
$subject_val = "Re: [OMPI devel] ORTE headers in OPAL source";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 10:15:22 2014" -->
<!-- isoreceived="20141017141522" -->
<!-- sent="Fri, 17 Oct 2014 16:15:21 +0200" -->
<!-- isosent="20141017141521" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE headers in OPAL source" -->
<!-- id="20141017141521.GW25348_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAANzjE=Rk03tYtJy8OVfx9hFuGWbn7o_5OqUgHTpchB7GW_c8Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ORTE headers in OPAL source<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 10:15:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15588.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh,
<br>
<p>I had a look at the code (e.g., opal/mca/btl/sm/btl_sm.c) and there are
<br>
two uses of orte code:
<br>
<p>if (orte_cr_continue_like_restart)
<br>
<p>and
<br>
<p>&nbsp;/* On restart we need the old file names to exist (not necessarily
<br>
&nbsp;&nbsp;* contain content) so the CRS component does not fail when  searching
<br>
&nbsp;&nbsp;* for these old file handles. The restart procedure will make sure
<br>
&nbsp;&nbsp;* these files get cleaned up appropriately.
<br>
&nbsp;&nbsp;*/
<br>
&nbsp;orte_sstore.set_attr(orte_sstore_handle_current,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SSTORE_METADATA_LOCAL_TOUCH,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_component.sm_seg-&gt;shmem_ds.seg_name);
<br>
<p><p>Do you have an idea how to fix those two? The first variable
<br>
orte_cr_continue_like_restart could probably be moved but I am not sure
<br>
how to handle the sstore call.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><p>On Sat, Aug 09, 2014 at 08:46:31AM -0500, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Those calls should be protected with the CR FT #define - If I remember
</span><br>
<span class="quotelev1">&gt; correctly. We were using the sstore to track the shared memory file names
</span><br>
<span class="quotelev1">&gt; so we could clean them up on restart.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure if the sstore framework is necessary in this location, since
</span><br>
<span class="quotelev1">&gt; we should be able to tell opal_crs and it will do the right thing. I can
</span><br>
<span class="quotelev1">&gt; try to look at it early next week if someone doesn't get to it before then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Aug 9, 2014 at 7:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think you're making a joke, right...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I see direct calls to ORTE sstore functionality in all three.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 8, 2014, at 5:42 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; These are harmless. They are only used when FT is enabled which should
</span><br>
<span class="quotelev2">&gt; &gt; rarely be the case.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   George.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, Aug 8, 2014 at 4:36 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here's a few ORTE headers in OPAL source -- can respective owners clean
</span><br>
<span class="quotelev2">&gt; &gt; these up?  Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 63:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 62:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 34:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15570.php">http://www.open-mpi.org/community/lists/devel/2014/08/15570.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15571.php">http://www.open-mpi.org/community/lists/devel/2014/08/15571.php</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15587.php">http://www.open-mpi.org/community/lists/devel/2014/08/15587.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15588.php">http://www.open-mpi.org/community/lists/devel/2014/08/15588.php</a>
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
ink, n.:
	A villainous compound of tannogallate of iron, gum-arabic,
	and water, chiefly used to facilitate the infection of
	idiocy and promote intellectual crime.
		-- H.L. Mencken
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16062.php">Jed Brown: "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>Previous message:</strong> <a href="16060.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Why no release tags in open-mpi/ompi repository?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15588.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="16073.php">Josh Hursey: "Re: [OMPI devel] ORTE headers in OPAL source"</a>
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
