<?
$subject_val = "Re: [OMPI devel] Style question: // in C code";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  5 20:51:28 2013" -->
<!-- isoreceived="20130306015128" -->
<!-- sent="Wed, 6 Mar 2013 01:51:23 +0000" -->
<!-- isosent="20130306015123" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Style question: // in C code" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F804CA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BFE8F9F5-6301-4C2F-A4DD-2B918ECA2894_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Style question: // in C code<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-05 20:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Maybe in reply to:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the call today.
<br>
<p>The conclusion was that we *are* using AC_PROG_CC_C99 in configure, which should hypothetically set the right compiler flags to put the compiler in C99 mode, where // should be accepted without warning.
<br>
<p>If someone wants to take a few minutes and verify that we won't get warnings from all supported compilers when // is used in debug builds, then we'll start allowing // in C code.  Otherwise, we're sticking to /* */.
<br>
<p><p>On Mar 5, 2013, at 10:24 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Now that we are forcing the use of a C99 compiler, should we start allowing //-style comments?
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
<li><strong>Next message:</strong> <a href="12188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: assert() to ensure OBJ_CONSTRUCT'ed objects don't get destroyed"</a>
<li><strong>Previous message:</strong> <a href="12186.php">George Bosilca: "Re: [OMPI devel] Open MPI BTL meeting in Knoxville"</a>
<li><strong>Maybe in reply to:</strong> <a href="12184.php">Jeff Squyres (jsquyres): "[OMPI devel] Style question: // in C code"</a>
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
