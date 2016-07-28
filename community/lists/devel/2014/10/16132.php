<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 12:19:11 2014" -->
<!-- isoreceived="20141030161911" -->
<!-- sent="Thu, 30 Oct 2014 09:19:07 -0700" -->
<!-- isosent="20141030161907" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="A271D1A1-ECFF-4D59-BE54-B0A06E2A25CA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C5D5D3_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] enable-smp-locks affects PSM performance<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 12:19:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe we did this in the trunk to try and force thread-safety implementation, but I don&#226;&#128;&#153;t believe it was intended to transition to the release branch. The only thread-related requirement on the release branch is that libevent be configured with thread-support.
<br>
<p>Anyone know of a reason why multi-threads would be &#226;&#128;&#156;on&#226;&#128;&#157; by default in 1.8?
<br>
<p><p><span class="quotelev1">&gt; On Oct 30, 2014, at 7:10 AM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm reporting a performance (message rate 16%, latency 3%) regression when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it affects other networks too, but I haven't tested.  The problem stems from the --enable-smp-locks and --enable-opal-multi-threads options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-smp-locks defaults to enabled and, on x86, causes a 'lock' prefix to be prepended to ASM instructions used by atomic primitives.  Disabling removes the 'lock' prefix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In OMPI 1.6.5, --enable-opal-multi-threads defaulted to disabled.  When enabled, OPAL would be compiled with multithreading support, which included compiling in calls to atomic primitives.  Those atomic primitives, in turn, potentially use a lock prefix (controlled by --enable-smp-locks).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SVN r29891 on the trunk changed the above.  --enable-opal-multi-threads was removed.  CPP macros (#if OPAL_ENABLE_MULTI_THREADS) controlling various calls to atomic primitives were removed, effectively changing the default behavior to multithreading ON for OPAL.  This change was then carried to the v1.7 branch in r29944, Fixes #3983.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We can use --disable-smp-locks to make the performance regression go away for the builds we ship, but we'd very much prefer if performance was good 'out of the box' for people that grab an OMPI tarball and use it with PSM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is, what's the best way to do that?  It seems obvious to just make --disable-smp-locks the default, but I presume the change was done on purpose, so I'm looking for community feedback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16130.php">http://www.open-mpi.org/community/lists/devel/2014/10/16130.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16131.php">Howard Pritchard: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
