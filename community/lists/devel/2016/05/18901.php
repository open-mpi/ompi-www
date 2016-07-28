<?
$subject_val = "Re: [OMPI devel] [2.0.0rc2] misleading error message from configure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 10:27:41 2016" -->
<!-- isoreceived="20160503142741" -->
<!-- sent="Tue, 3 May 2016 14:27:39 +0000" -->
<!-- isosent="20160503142739" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [2.0.0rc2] misleading error message from configure" -->
<!-- id="5BD5023E-5C8A-4BD4-A03B-BD854B86ABF3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAvDA14qg2WjG4huGhKhTjwrEHzMgKrsbyJgoQ5msDyDqBMCDQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [2.0.0rc2] misleading error message from configure<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-03 10:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>In reply to:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in master and PR'ed for v2.0.1.  Thanks.
<br>
<p><span class="quotelev1">&gt; On May 2, 2016, at 11:19 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see why no competent OMPI developer ever encountered the following cut-and-paste error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/config/opal_mca.m4 b/config/opal_mca.m4
</span><br>
<span class="quotelev1">&gt; index 1ec342c..d3a7075 100644
</span><br>
<span class="quotelev1">&gt; --- a/config/opal_mca.m4
</span><br>
<span class="quotelev1">&gt; +++ b/config/opal_mca.m4
</span><br>
<span class="quotelev1">&gt; @@ -86,7 +86,7 @@ AC_DEFUN([OPAL_MCA],[
</span><br>
<span class="quotelev1">&gt;      if test &quot;$enable_mca_no_build&quot; = &quot;yes&quot;; then
</span><br>
<span class="quotelev1">&gt;          AC_MSG_RESULT([yes])
</span><br>
<span class="quotelev1">&gt;          AC_MSG_ERROR([*** The enable-mca-no-build flag requires an explicit list
</span><br>
<span class="quotelev1">&gt; -*** of type-component pairs.  For example, --enable-mca-direct=pml-ob1])
</span><br>
<span class="quotelev1">&gt; +*** of type-component pairs.  For example, --enable-mca-no-build=pml-ob1])
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;          ifs_save=&quot;$IFS&quot;
</span><br>
<span class="quotelev1">&gt;          IFS=&quot;${IFS}$PATH_SEPARATOR,&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/18889.php">http://www.open-mpi.org/community/lists/devel/2016/05/18889.php</a>
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
<li><strong>Next message:</strong> <a href="18902.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc2] xlc-13.1.0 ICE (hwloc)"</a>
<li><strong>Previous message:</strong> <a href="18900.php">Edgar Gabriel: "Re: [OMPI devel] [2.0.0rc2] NetBSD build failure (ompio)"</a>
<li><strong>In reply to:</strong> <a href="18889.php">Paul Hargrove: "[OMPI devel] [2.0.0rc2] misleading error message from configure"</a>
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
