<?
$subject_val = "Re: [OMPI devel] ORTE headers in OPAL source";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 09:05:33 2014" -->
<!-- isoreceived="20140811130533" -->
<!-- sent="Mon, 11 Aug 2014 09:05:32 -0400" -->
<!-- isosent="20140811130532" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ORTE headers in OPAL source" -->
<!-- id="CAMJJpkXjarNFo6=q-+gZ=qsx+7me_5E594PTJfdXNuE2PwmVqg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5B51F117-DF5F-4A77-A10E-A0F70766D6B2_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 09:05:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15608.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic configure nit"</a>
<li><strong>Previous message:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="15587.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="15609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just checked the code and noticed that all the usages of the sstore are
<br>
protected by an OPAL_ENABLE_FT_CR define. As we are not supporting FT, I
<br>
don't think this is something we should spend time fixing right now.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><p>On Sat, Aug 9, 2014 at 8:06 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I think you're making a joke, right...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see direct calls to ORTE sstore functionality in all three.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 5:42 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; These are harmless. They are only used when FT is enabled which should
</span><br>
<span class="quotelev1">&gt; rarely be the case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Aug 8, 2014 at 4:36 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Here's a few ORTE headers in OPAL source -- can respective owners clean
</span><br>
<span class="quotelev1">&gt; these up?  Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev2">&gt; &gt; 63:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev2">&gt; &gt; 62:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev2">&gt; &gt; 34:#include &quot;orte/mca/sstore/sstore.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -----
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15570.php">http://www.open-mpi.org/community/lists/devel/2014/08/15570.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15571.php">http://www.open-mpi.org/community/lists/devel/2014/08/15571.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15587.php">http://www.open-mpi.org/community/lists/devel/2014/08/15587.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15608.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] cosmetic configure nit"</a>
<li><strong>Previous message:</strong> <a href="15606.php">Siegmar Gross: "Re: [OMPI devel] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>In reply to:</strong> <a href="15587.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Reply:</strong> <a href="15609.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
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
