<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 10:31:21 2014" -->
<!-- isoreceived="20141103153121" -->
<!-- sent="Mon, 3 Nov 2014 15:31:18 +0000" -->
<!-- isosent="20141103153118" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518C5DEA7_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9239A2BA-19FF-475E-A827-4E46662D563B_at_cisco.com" -->
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
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 10:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff, we're working to verify.  I don't mind the slower behavior on the trunk; we are only concerned with the stable release series.  Enabling thread safety options on the trunk/master is no problem here.
<br>
<p>Did the 'more expensive freelists' change make it to the release series as well?
<br>
<p>Andrew
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Saturday, November 1, 2014 4:49 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers List
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] enable-smp-locks affects PSM performance
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andrew --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A PR went in on the v1.8 branch that removed the locking behavior by
</span><br>
<span class="quotelev1">&gt; default:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="https://github.com/open-mpi/ompi-release/pull/67">https://github.com/open-mpi/ompi-release/pull/67</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you confirm that the behavior on the v1.8 nightly tarballs show better
</span><br>
<span class="quotelev1">&gt; PSM message rate behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> -- 135 and beyond have the fix)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For master, this was actually the exactly intended result: at a previous OMPI
</span><br>
<span class="quotelev1">&gt; dev meeting, we said &quot;let's turn on threading, and see who screams.&quot;  You
</span><br>
<span class="quotelev1">&gt; screamed.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In a conversation with Nathan on Friday, it looks like many things in
</span><br>
<span class="quotelev1">&gt; 6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af get more expensive with
</span><br>
<span class="quotelev1">&gt; threading enabled -- particularly freelists.  It's quite possible that we should
</span><br>
<span class="quotelev1">&gt; change many of these things to be more expensive only a) if
</span><br>
<span class="quotelev1">&gt; THREAD_MULTIPLE is active, and/or b) if progress threads are active.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, that may not be safe in itself.  Perhaps we should have multiple
</span><br>
<span class="quotelev1">&gt; flavors of these types (like freelists) that are both thread safe and thread
</span><br>
<span class="quotelev1">&gt; unsafe.  So even if we're in a THREAD_MULTIPLE and/or progress threads are
</span><br>
<span class="quotelev1">&gt; active, if you *know* you've got a data structure that does not need the
</span><br>
<span class="quotelev1">&gt; added thread-safety protections, you can use the unsafe-but-faster
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2014, at 12:51 PM, Friedley, Andrew
</span><br>
<span class="quotelev1">&gt; &lt;andrew.friedley_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Howard,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, we do not, just the OMPI default.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This post isn't so much about our packaging requirements, as about default
</span><br>
<span class="quotelev1">&gt; behavior in upstream Open MPI.  We'd like performance to be good by
</span><br>
<span class="quotelev1">&gt; default for anyone compiling their own Open MPI (and using PSM).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard
</span><br>
<span class="quotelev1">&gt; Pritchard
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Thursday, October 30, 2014 8:53 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] enable-smp-locks affects PSM performance
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Andrew,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In your distribution of ompi, do you include versions of ompi to support
</span><br>
<span class="quotelev1">&gt; different MPI thread safetylevels?  In particular, do you include a library
</span><br>
<span class="quotelev1">&gt; which supports MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev2">&gt; &gt; Just trying to better understand the requirements of you ompi package in
</span><br>
<span class="quotelev1">&gt; terms of MPI thread safety.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Howard
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2014-10-30 8:10 GMT-06:00 Friedley, Andrew
</span><br>
<span class="quotelev1">&gt; &lt;andrew.friedley_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm reporting a performance (message rate 16%, latency 3%) regression
</span><br>
<span class="quotelev1">&gt; when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would
</span><br>
<span class="quotelev1">&gt; guess it affects other networks too, but I haven't tested.  The problem stems
</span><br>
<span class="quotelev1">&gt; from the --enable-smp-locks and --enable-opal-multi-threads options.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --enable-smp-locks defaults to enabled and, on x86, causes a 'lock' prefix to
</span><br>
<span class="quotelev1">&gt; be prepended to ASM instructions used by atomic primitives.  Disabling
</span><br>
<span class="quotelev1">&gt; removes the 'lock' prefix.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In OMPI 1.6.5, --enable-opal-multi-threads defaulted to disabled.  When
</span><br>
<span class="quotelev1">&gt; enabled, OPAL would be compiled with multithreading support, which
</span><br>
<span class="quotelev1">&gt; included compiling in calls to atomic primitives.  Those atomic primitives, in
</span><br>
<span class="quotelev1">&gt; turn, potentially use a lock prefix (controlled by --enable-smp-locks).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SVN r29891 on the trunk changed the above.  --enable-opal-multi-threads
</span><br>
<span class="quotelev1">&gt; was removed.  CPP macros (#if OPAL_ENABLE_MULTI_THREADS) controlling
</span><br>
<span class="quotelev1">&gt; various calls to atomic primitives were removed, effectively changing the
</span><br>
<span class="quotelev1">&gt; default behavior to multithreading ON for OPAL.  This change was then
</span><br>
<span class="quotelev1">&gt; carried to the v1.7 branch in r29944, Fixes #3983.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; We can use --disable-smp-locks to make the performance regression go
</span><br>
<span class="quotelev1">&gt; away for the builds we ship, but we'd very much prefer if performance was
</span><br>
<span class="quotelev1">&gt; good 'out of the box' for people that grab an OMPI tarball and use it with
</span><br>
<span class="quotelev1">&gt; PSM.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My question is, what's the best way to do that?  It seems obvious to just
</span><br>
<span class="quotelev1">&gt; make --disable-smp-locks the default, but I presume the change was done
</span><br>
<span class="quotelev1">&gt; on purpose, so I'm looking for community feedback.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2014/10/16130.php
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2014/10/16133.php
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt; mpi.org/community/lists/devel/2014/11/16141.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16143.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16141.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
