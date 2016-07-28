<?
$subject_val = "Re: [OMPI devel] Typo in opal/mca/dl/dl.h";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 16:00:36 2015" -->
<!-- isoreceived="20150615200036" -->
<!-- sent="Mon, 15 Jun 2015 20:00:34 +0000" -->
<!-- isosent="20150615200034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Typo in opal/mca/dl/dl.h" -->
<!-- id="13F21BD6-2DA3-434D-99C6-24A9378B82FA_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="DA7C4755-FE89-41C6-98E2-9262845AC7EA_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Typo in opal/mca/dl/dl.h<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 16:00:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17504.php">Jeff Squyres (jsquyres): "[OMPI devel] Devel meeting in San Jose next week"</a>
<li><strong>Previous message:</strong> <a href="17502.php">Atchley, Scott: "[OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>In reply to:</strong> <a href="17502.php">Atchley, Scott: "[OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch; will fix.  Thanks.
<br>
<p><span class="quotelev1">&gt; On Jun 15, 2015, at 3:43 PM, Atchley, Scott &lt;atchleyes_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This header file&#146;s macro name does not match OMPI style.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Typically, the macro name is FRAMEWORK_COMPONENT_H. Note, the #endif at the 
</span><br>
<span class="quotelev1">&gt; end of the file is correct (i.e. OPAL_DL_H).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Signed-off-by: Scott Atchley &lt;atchleyes_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/dl/dl.h b/opal/mca/dl/dl.h
</span><br>
<span class="quotelev1">&gt; index 7c6d2ef..1e92c1a 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/dl/dl.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/dl/dl.h
</span><br>
<span class="quotelev1">&gt; @@ -44,8 +44,8 @@
</span><br>
<span class="quotelev1">&gt;  * like a good solution.
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -#ifndef MCA_DLOPEN_H
</span><br>
<span class="quotelev1">&gt; -#define MCA_DLOPEN_H
</span><br>
<span class="quotelev1">&gt; +#ifndef OPAL_DL_H
</span><br>
<span class="quotelev1">&gt; +#define OPAL_DL_H
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/06/17502.php">http://www.open-mpi.org/community/lists/devel/2015/06/17502.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17504.php">Jeff Squyres (jsquyres): "[OMPI devel] Devel meeting in San Jose next week"</a>
<li><strong>Previous message:</strong> <a href="17502.php">Atchley, Scott: "[OMPI devel] Typo in opal/mca/dl/dl.h"</a>
<li><strong>In reply to:</strong> <a href="17502.php">Atchley, Scott: "[OMPI devel] Typo in opal/mca/dl/dl.h"</a>
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
