<?
$subject_val = "Re: [OMPI devel] autoconf warnings: openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 24 10:42:24 2014" -->
<!-- isoreceived="20140324144224" -->
<!-- sent="Mon, 24 Mar 2014 08:42:39 -0600" -->
<!-- isosent="20140324144239" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autoconf warnings: openib BTL" -->
<!-- id="013e01cf476f$4ec3a3e0$ec4aeba0$_at_wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53303682.1030002_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-24 10:42:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Vasily,
<br>
<p>The problem you've identified of differing kernel versions is exacerbated by
<br>
also computing across hybrid,  heterogeneous hardware architectures (i.e.
<br>
SMP&amp; NUMA, different streaming processor architectures, or different shared
<br>
memory architectures).
<br>
<p>==========================
<br>
Kenneth A. Lloyd, Jr.
<br>
CEO - Director, Systems Science
<br>
Watt Systems Technologies Inc.
<br>
Albuquerque, NM USA
<br>
www.wattsys.com
<br>
kenneth.lloyd_at_[hidden]
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521, and is intended only for the addressee named above. It may
<br>
contain privileged or confidential information. If you are not the addressee
<br>
you must not copy, distribute, disclose or use any of the information in
<br>
this transmission. If you received it in error, please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p>-----Original Message-----
<br>
From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Vasily Filipov
<br>
Sent: Monday, March 24, 2014 7:44 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] autoconf warnings: openib BTL
<br>
<p>Actually I think if you build your job with one kernel version and run it on
<br>
nodes that have another version so rdmacm will be the smallest your problem.
<br>
Anyway, here is the revision fixes the issue.
<br>
<p>------------------------------------------------------------------------
<br>
r31194 | vasily | 2014-03-24 15:36:04 +0200 (Mon, 24 Mar 2014) | 3 lines
<br>
<p>BTL/OPENIB: remove AC_RUN_IFELSE from configure and check AF_IB support by
<br>
lib rdmacm during component_init.
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
<span class="quotelev2">&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the
</span><br>
machines on which you *run* -- NOT on the machine on which you *build*.
<br>
<span class="quotelev1">&gt; Many of our users compile on the frontend node of their cluster, which
</span><br>
doesn't even have an IB NIC installed (they only have the libraries present
<br>
so it can compile). You need to test this at run time to ensure you are on a
<br>
machine where someone actually is able to run rdmacm.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2014, at 5:53 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 13, 2014, at 4:59 AM, Mike Dubman &lt;miked_at_[hidden]&gt;
</span><br>
wrote:
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Right?  If so, I don't see why you need the AC_TRY_RUN -- if RDMACM
</span><br>
is easily detectable as to which way it is compiled (because it has, for
<br>
example, different fields), then AC_CHECK_DECLS should be enough, right?
<br>
<span class="quotelev3">&gt;&gt;&gt; RDMACM API has different implementation requirements for its providers:
</span><br>
tcp, af_ib (different structs/fields should be used/passed. different
<br>
APIs/hooks should be called for bring-up).
<br>
<span class="quotelev2">&gt;&gt; Yes, this was said before.  Which is why I don't understand why
</span><br>
AC_CHECK_DECLS isn't enough -- it's a compile-time check, right?
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me get this straight:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. AF_IB may or may not be present.
</span><br>
<span class="quotelev2">&gt;&gt; 2. If AF_IB is present, it may or may not work (i.e., support for AF_IB
</span><br>
may or may not work in the kernel).
<br>
<span class="quotelev2">&gt;&gt; 3. If AF_IB is present, you can only compile with the AF_IB fields and
</span><br>
methods.
<br>
<span class="quotelev2">&gt;&gt; 4. If AF_IB is not present, you can only compile with the non-AF_IB
</span><br>
fields and methods.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think #2 is not relevant for configure -- only #1, #3, and #4 are
</span><br>
relevant.  So you should have code something like this:
<br>
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
<span class="quotelev2">&gt;&gt; To be clear: whether AF_IB works or not is a determination to make on the
</span><br>
machines on which you *run* -- NOT on the machine on which you *build*.
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is one of the key reasons that OMPI prefers run-time detection for
</span><br>
run-time characteristics over configure-time detection for run-time
<br>
characteristics (because you may run OMPI on different machines than where
<br>
you built OMPI).
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Currently, the RDMACM provider can be selected at compile time only and
</span><br>
mpirun becomes incompatible to other RDMACM providers.
<br>
<span class="quotelev2">&gt;&gt; What does mpirun have to do with this?  We're talking about the openib
</span><br>
BTL, right?
<br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AC_TRY_RUN is a protection that selected provider will be able to
</span><br>
run,otherwise no fallback to other provider will be available for user at
<br>
runtime.
<br>
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
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14342.php">http://www.open-mpi.org/community/lists/devel/2014/03/14342.php</a>
<br>
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
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14343.php">http://www.open-mpi.org/community/lists/devel/2014/03/14343.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/03/14381.php">http://www.open-mpi.org/community/lists/devel/2014/03/14381.php</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2014.0.4336 / Virus Database: 3722/7238 - Release Date: 03/23/14
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14381.php">Vasily Filipov: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Reply:</strong> <a href="14383.php">Ralph Castain: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
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
