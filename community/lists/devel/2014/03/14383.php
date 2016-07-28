<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 11:48:43 2014" -->
<!-- isoreceived="20140324154843" -->
<!-- sent="Mon, 24 Mar 2014 08:46:40 -0700" -->
<!-- isosent="20140324154640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="07C8B9C2-0A38-4E4C-8DA5-99215D2551D0_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="013e01cf476f$4ec3a3e0$ec4aeba0$_at_wattsys.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 11:46:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All true - and yet, becoming more common in larger clusters :-/
<br>
<p>On Mar 24, 2014, at 7:42 AM, Kenneth A. Lloyd &lt;kenneth.lloyd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Vasily,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem you've identified of differing kernel versions is exacerbated by
</span><br>
<span class="quotelev1">&gt; also computing across hybrid,  heterogeneous hardware architectures (i.e.
</span><br>
<span class="quotelev1">&gt; SMP&amp; NUMA, different streaming processor architectures, or different shared
</span><br>
<span class="quotelev1">&gt; memory architectures).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==========================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd, Jr.
</span><br>
<span class="quotelev1">&gt; CEO - Director, Systems Science
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; Albuquerque, NM USA
</span><br>
<span class="quotelev1">&gt; www.wattsys.com
</span><br>
<span class="quotelev1">&gt; kenneth.lloyd_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18
</span><br>
<span class="quotelev1">&gt; U.S.C. 2510-2521, and is intended only for the addressee named above. It may
</span><br>
<span class="quotelev1">&gt; contain privileged or confidential information. If you are not the addressee
</span><br>
<span class="quotelev1">&gt; you must not copy, distribute, disclose or use any of the information in
</span><br>
<span class="quotelev1">&gt; this transmission. If you received it in error, please delete it and
</span><br>
<span class="quotelev1">&gt; immediately notify the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Vasily Filipov
</span><br>
<span class="quotelev1">&gt; Sent: Monday, March 24, 2014 7:44 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] autoconf warnings: openib BTL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually I think if you build your job with one kernel version and run it on
</span><br>
<span class="quotelev1">&gt; nodes that have another version so rdmacm will be the smallest your problem.
</span><br>
<span class="quotelev1">&gt; Anyway, here is the revision fixes the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; r31194 | vasily | 2014-03-24 15:36:04 +0200 (Mon, 24 Mar 2014) | 3 lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTL/OPENIB: remove AC_RUN_IFELSE from configure and check AF_IB support by
</span><br>
<span class="quotelev1">&gt; lib rdmacm during component_init.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Vasily.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13-Mar-14 15:44, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I think the critical point is this one:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the
</span><br>
<span class="quotelev1">&gt; machines on which you *run* -- NOT on the machine on which you *build*.
</span><br>
<span class="quotelev2">&gt;&gt; Many of our users compile on the frontend node of their cluster, which
</span><br>
<span class="quotelev1">&gt; doesn't even have an IB NIC installed (they only have the libraries present
</span><br>
<span class="quotelev1">&gt; so it can compile). You need to test this at run time to ensure you are on a
</span><br>
<span class="quotelev1">&gt; machine where someone actually is able to run rdmacm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 13, 2014, at 5:53 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 13, 2014, at 4:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM
</span><br>
<span class="quotelev1">&gt; is easily detectable as to which way it is compiled (because it has, for
</span><br>
<span class="quotelev1">&gt; example, different fields), then AC_CHECK_DECLS should be enough, right?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; RDMACM API has different implementation requirements for its providers:
</span><br>
<span class="quotelev1">&gt; tcp, af_ib (different structs/fields should be used/passed. different
</span><br>
<span class="quotelev1">&gt; APIs/hooks should be called for bring-up).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, this was said before.  Which is why I don't understand why
</span><br>
<span class="quotelev1">&gt; AC_CHECK_DECLS isn't enough -- it's a compile-time check, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me get this straight:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. AF_IB may or may not be present.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. If AF_IB is present, it may or may not work (i.e., support for AF_IB
</span><br>
<span class="quotelev1">&gt; may or may not work in the kernel).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. If AF_IB is present, you can only compile with the AF_IB fields and
</span><br>
<span class="quotelev1">&gt; methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. If AF_IB is not present, you can only compile with the non-AF_IB
</span><br>
<span class="quotelev1">&gt; fields and methods.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think #2 is not relevant for configure -- only #1, #3, and #4 are
</span><br>
<span class="quotelev1">&gt; relevant.  So you should have code something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #if HAVE_DECL_AF_IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ret = do_the_stuff_with_af_ib(...);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_show_help(...AF_IB doesn't work...);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    ret = do_the_stuff_without_af_ib(...);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    if (OMPI_SUCCESS != ret) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        opal_show_help(...non-AF_IB doesn't work...);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        return ret;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the
</span><br>
<span class="quotelev1">&gt; machines on which you *run* -- NOT on the machine on which you *build*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is one of the key reasons that OMPI prefers run-time detection for
</span><br>
<span class="quotelev1">&gt; run-time characteristics over configure-time detection for run-time
</span><br>
<span class="quotelev1">&gt; characteristics (because you may run OMPI on different machines than where
</span><br>
<span class="quotelev1">&gt; you built OMPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Currently, the RDMACM provider can be selected at compile time only and
</span><br>
<span class="quotelev1">&gt; mpirun becomes incompatible to other RDMACM providers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What does mpirun have to do with this?  We're talking about the openib
</span><br>
<span class="quotelev1">&gt; BTL, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AC_TRY_RUN is a protection that selected provider will be able to
</span><br>
<span class="quotelev1">&gt; run,otherwise no fallback to other provider will be available for user at
</span><br>
<span class="quotelev1">&gt; runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can't parse this statement...?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14342.php">http://www.open-mpi.org/community/lists/devel/2014/03/14342.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14343.php">http://www.open-mpi.org/community/lists/devel/2014/03/14343.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14381.php">http://www.open-mpi.org/community/lists/devel/2014/03/14381.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt; Version: 2014.0.4336 / Virus Database: 3722/7238 - Release Date: 03/23/14
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14382.php">http://www.open-mpi.org/community/lists/devel/2014/03/14382.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14384.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Loading Open MPI from MPJ Express (Java) fails"</a>
<li><strong>Previous message:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14382.php">Kenneth A. Lloyd: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
