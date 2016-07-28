<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 11:53:11 2014" -->
<!-- isoreceived="20141030155311" -->
<!-- sent="Thu, 30 Oct 2014 09:53:10 -0600" -->
<!-- isosent="20141030155310" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="CAF1Cqj63SRSGuLdZExPrf2FFYQeR6Y5XZDdVqr8jZROux+BYLw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 11:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Andrew,
<br>
<p>In your distribution of ompi, do you include versions of ompi to support
<br>
different MPI thread safetylevels?  In particular, do you include a library
<br>
which supports MPI_THREAD_MULTIPLE?
<br>
Just trying to better understand the requirements of you ompi package in
<br>
terms of MPI thread safety.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p>2014-10-30 8:10 GMT-06:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm reporting a performance (message rate 16%, latency 3%) regression when
</span><br>
<span class="quotelev1">&gt; using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it
</span><br>
<span class="quotelev1">&gt; affects other networks too, but I haven't tested.  The problem stems from
</span><br>
<span class="quotelev1">&gt; the --enable-smp-locks and --enable-opal-multi-threads options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-smp-locks defaults to enabled and, on x86, causes a 'lock' prefix
</span><br>
<span class="quotelev1">&gt; to be prepended to ASM instructions used by atomic primitives.  Disabling
</span><br>
<span class="quotelev1">&gt; removes the 'lock' prefix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In OMPI 1.6.5, --enable-opal-multi-threads defaulted to disabled.  When
</span><br>
<span class="quotelev1">&gt; enabled, OPAL would be compiled with multithreading support, which included
</span><br>
<span class="quotelev1">&gt; compiling in calls to atomic primitives.  Those atomic primitives, in turn,
</span><br>
<span class="quotelev1">&gt; potentially use a lock prefix (controlled by --enable-smp-locks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SVN r29891 on the trunk changed the above.  --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; was removed.  CPP macros (#if OPAL_ENABLE_MULTI_THREADS) controlling
</span><br>
<span class="quotelev1">&gt; various calls to atomic primitives were removed, effectively changing the
</span><br>
<span class="quotelev1">&gt; default behavior to multithreading ON for OPAL.  This change was then
</span><br>
<span class="quotelev1">&gt; carried to the v1.7 branch in r29944, Fixes #3983.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can use --disable-smp-locks to make the performance regression go away
</span><br>
<span class="quotelev1">&gt; for the builds we ship, but we'd very much prefer if performance was good
</span><br>
<span class="quotelev1">&gt; 'out of the box' for people that grab an OMPI tarball and use it with PSM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My question is, what's the best way to do that?  It seems obvious to just
</span><br>
<span class="quotelev1">&gt; make --disable-smp-locks the default, but I presume the change was done on
</span><br>
<span class="quotelev1">&gt; purpose, so I'm looking for community feedback.
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16130.php">http://www.open-mpi.org/community/lists/devel/2014/10/16130.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16131/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16130.php">Friedley, Andrew: "[OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
