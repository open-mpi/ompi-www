<?
$subject_val = "Re: [OMPI devel] [v1.8] illegal commas after last item in enum";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 08:04:36 2014" -->
<!-- isoreceived="20140809120436" -->
<!-- sent="Sat, 9 Aug 2014 12:04:34 +0000" -->
<!-- isosent="20140809120434" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] illegal commas after last item in enum" -->
<!-- id="5D88C8C2-F053-4E44-949B-AE94DE3F65EE_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA15RQup7mz7Hmy6jOYxaHGOm5XB+QJVYcvKiH02Ja6JAgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v1.8] illegal commas after last item in enum<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 08:04:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15587.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in trunk in r32482; CMR'ed to v1.8.
<br>
<p>Thanks.
<br>
<p><p>On Aug 9, 2014, at 12:36 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The Solaris Studio 12.3 C++ compiler warns about commas after the last item in an enum.
</span><br>
<span class="quotelev1">&gt; While these commas are legal in C99, they are ILLEGAL in C++ prior to C++11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The warnings below list the four instances I encountered while building the C++ bindings, but there might be others.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.8.2rc4r32480/ompi/include/ompi/constants.h&quot;, line 70: Warning: Identifier expected instead of &quot;}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_framework.h&quot;, line 37: Warning: Identifier expected instead of &quot;}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_framework.h&quot;, line 119: Warning: Identifier expected instead of &quot;}&quot;.
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.8.2rc4r32480/opal/mca/base/mca_base_var.h&quot;, line 694: Warning: Identifier expected instead of &quot;}&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15576.php">http://www.open-mpi.org/community/lists/devel/2014/08/15576.php</a>
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
<li><strong>Next message:</strong> <a href="15587.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ORTE headers in OPAL source"</a>
<li><strong>Previous message:</strong> <a href="15585.php">Mike Dubman: "Re: [OMPI devel] jenkins errors in origin/v1.8"</a>
<li><strong>In reply to:</strong> <a href="15576.php">Paul Hargrove: "[OMPI devel] [v1.8] illegal commas after last item in enum"</a>
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
