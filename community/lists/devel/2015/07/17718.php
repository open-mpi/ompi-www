<?
$subject_val = "Re: [OMPI devel] C standard compatibility";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 08:41:38 2015" -->
<!-- isoreceived="20150730124138" -->
<!-- sent="Thu, 30 Jul 2015 12:41:33 +0000" -->
<!-- isosent="20150730124133" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] C standard compatibility" -->
<!-- id="595A4CC1-E764-4591-A64C-0CD3CB5FD3AB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1162692644.121546.1438252651131.JavaMail.zimbra_at_hlrs.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] C standard compatibility<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-30 08:41:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>In reply to:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Reply:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We only recently started allowing the use of C99 in the code base (i.e., we put AC_PROG_CC_C99 in configure.ac).
<br>
<p>There's no *requirement* to use C99 throughout the code, but we generally do the following kinds of things:
<br>
<p>* restrict (as you noted)
<br>
* variable declarations in the middle of blocks / loops (as you noted)
<br>
* struct member initialization
<br>
* // comments
<br>
<p><span class="quotelev1">&gt; On Jul 30, 2015, at 6:37 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the C standard version to be used for the Open MPI code base?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Most seems to be &lt; C99.
</span><br>
<span class="quotelev1">&gt; C99 features I saw so far mostuly in newer components:
</span><br>
<span class="quotelev1">&gt; * restrict keyword
</span><br>
<span class="quotelev1">&gt; * variable declaration inside for loop heads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; High Performance Computing Center Stuttgart (HLRS)
</span><br>
<span class="quotelev1">&gt; Nobelstrasse 19
</span><br>
<span class="quotelev1">&gt; 70569 Stuttgart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tel: ++49(0)711-685-87203
</span><br>
<span class="quotelev1">&gt; email: niethammer_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hlrs.de/people/niethammer">http://www.hlrs.de/people/niethammer</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17716.php">http://www.open-mpi.org/community/lists/devel/2015/07/17716.php</a>
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
<li><strong>Next message:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Previous message:</strong> <a href="17717.php">Christoph Niethammer: "Re: [OMPI devel] stdout, stderr reporting different values for isatty"</a>
<li><strong>In reply to:</strong> <a href="17716.php">Christoph Niethammer: "[OMPI devel] C standard compatibility"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
<li><strong>Reply:</strong> <a href="17719.php">Nathan Hjelm: "Re: [OMPI devel] C standard compatibility"</a>
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
