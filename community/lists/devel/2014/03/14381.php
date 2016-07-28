<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 09:43:38 2014" -->
<!-- isoreceived="20140324134338" -->
<!-- sent="Mon, 24 Mar 2014 15:43:30 +0200" -->
<!-- isosent="20140324134330" -->
<!-- name="Vasily Filipov" -->
<!-- email="vasily_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="53303682.1030002_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2BD50070-0E28-4A35-B3A3-A097EF33FE41_at_open-mpi.org" -->
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
<strong>From:</strong> Vasily Filipov (<em>vasily_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 09:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually I think if you build your job with one kernel version and run 
<br>
it on nodes that have another version so rdmacm will be the smallest 
<br>
your problem.
<br>
Anyway, here is the revision fixes the issue.
<br>
<p>------------------------------------------------------------------------
<br>
r31194 | vasily | 2014-03-24 15:36:04 +0200 (Mon, 24 Mar 2014) | 3 lines
<br>
<p>BTL/OPENIB: remove AC_RUN_IFELSE from configure and check AF_IB support 
<br>
by lib rdmacm during component_init.
<br>
<p><p>------------------------------------------------------------------------
<br>
<p>Thank you,
<br>
Vasily.
<br>
<p>On 13-Mar-14 15:44, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I think the critical point is this one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the machines on which you *run* -- NOT on the machine on which you *build*.
</span><br>
<span class="quotelev1">&gt; Many of our users compile on the frontend node of their cluster, which doesn't even have an IB NIC installed (they only have the libraries present so it can compile). You need to test this at run time to ensure you are on a machine where someone actually is able to run rdmacm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2014, at 5:53 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 13, 2014, at 4:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM is easily detectable as to which way it is compiled (because it has, for example, different fields), then AC_CHECK_DECLS should be enough, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RDMACM API has different implementation requirements for its providers: tcp, af_ib (different structs/fields should be used/passed. different APIs/hooks should be called for bring-up).
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this was said before.  Which is why I don't understand why AC_CHECK_DECLS isn't enough -- it's a compile-time check, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me get this straight:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. AF_IB may or may not be present.
</span><br>
<span class="quotelev2">&gt;&gt; 2. If AF_IB is present, it may or may not work (i.e., support for AF_IB may or may not work in the kernel).
</span><br>
<span class="quotelev2">&gt;&gt; 3. If AF_IB is present, you can only compile with the AF_IB fields and methods.
</span><br>
<span class="quotelev2">&gt;&gt; 4. If AF_IB is not present, you can only compile with the non-AF_IB fields and methods.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think #2 is not relevant for configure -- only #1, #3, and #4 are relevant.  So you should have code something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev2">&gt;&gt;     ret = do_the_stuff_with_af_ib(...);
</span><br>
<span class="quotelev2">&gt;&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_show_help(...AF_IB doesn't work...);
</span><br>
<span class="quotelev2">&gt;&gt;         return ret;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;     ret = do_the_stuff_without_af_ib(...);
</span><br>
<span class="quotelev2">&gt;&gt;     if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev2">&gt;&gt;         opal_show_help(...non-AF_IB doesn't work...);
</span><br>
<span class="quotelev2">&gt;&gt;         return ret;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the machines on which you *run* -- NOT on the machine on which you *build*.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is one of the key reasons that OMPI prefers run-time detection for run-time characteristics over configure-time detection for run-time characteristics (because you may run OMPI on different machines than where you built OMPI).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, the RDMACM provider can be selected at compile time only and mpirun becomes incompatible to other RDMACM providers.
</span><br>
<span class="quotelev2">&gt;&gt; What does mpirun have to do with this?  We're talking about the openib BTL, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_TRY_RUN is a protection that selected provider will be able to run,otherwise no fallback to other provider will be available for user at runtime.
</span><br>
<span class="quotelev2">&gt;&gt; I can't parse this statement...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14342.php">http://www.open-mpi.org/community/lists/devel/2014/03/14342.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14343.php">http://www.open-mpi.org/community/lists/devel/2014/03/14343.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14380.php">Ralph Castain: "Re: [OMPI devel] 1.7.5rc5 build failure [with patch]"</a>
<li><strong>In reply to:</strong> <a href="14343.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
