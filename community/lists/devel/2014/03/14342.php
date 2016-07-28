<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 08:53:13 2014" -->
<!-- isoreceived="20140313125313" -->
<!-- sent="Thu, 13 Mar 2014 12:53:11 +0000" -->
<!-- isosent="20140313125311" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="6BFAC4D2-A3C7-4929-8A14-0492A1849B80_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1Kyb1kjPMK6tv8XLihET7FTpYvR2MBi9YfyYLR=6COSGY-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autoconf warnings: openib BTL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-13 08:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 13, 2014, at 4:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt;Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is easily detectable as to which way it is compiled (because it has, for example, different fields), then AC_CHECK_DECLS should be enough, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RDMACM API has different implementation requirements for its providers: tcp, af_ib (different structs/fields should be used/passed. different APIs/hooks should be called for bring-up).
</span><br>
<p>Yes, this was said before.  Which is why I don't understand why AC_CHECK_DECLS isn't enough -- it's a compile-time check, right?
<br>
<p>Let me get this straight:
<br>
<p>1. AF_IB may or may not be present.
<br>
2. If AF_IB is present, it may or may not work (i.e., support for AF_IB may or may not work in the kernel).
<br>
3. If AF_IB is present, you can only compile with the AF_IB fields and methods.
<br>
4. If AF_IB is not present, you can only compile with the non-AF_IB fields and methods.
<br>
<p>I think #2 is not relevant for configure -- only #1, #3, and #4 are relevant.  So you should have code something like this:
<br>
<p>#if HAVE_DECL_AF_IB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = do_the_stuff_with_af_ib(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(...AF_IB doesn't work...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = do_the_stuff_without_af_ib(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (OMPI_SUCCESS != ret) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(...non-AF_IB doesn't work...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return ret;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
#endif
<br>
<p>To be clear: whether AF_IB works or not is a determination to make on the machines on which you *run* -- NOT on the machine on which you *build*.
<br>
<p>This is one of the key reasons that OMPI prefers run-time detection for run-time characteristics over configure-time detection for run-time characteristics (because you may run OMPI on different machines than where you built OMPI).
<br>
<p><span class="quotelev1">&gt; Currently, the RDMACM provider can be selected at compile time only and mpirun becomes incompatible to other RDMACM providers.
</span><br>
<p>What does mpirun have to do with this?  We're talking about the openib BTL, right?
<br>
<p><span class="quotelev1">&gt; AC_TRY_RUN is a protection that selected provider will be able to run,otherwise no fallback to other provider will be available for user at runtime.
</span><br>
<p>I can't parse this statement...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
