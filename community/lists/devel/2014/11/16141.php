<?
$subject_val = "Re: [OMPI devel] enable-smp-locks affects PSM performance";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 07:49:23 2014" -->
<!-- isoreceived="20141101114923" -->
<!-- sent="Sat, 1 Nov 2014 11:49:00 +0000" -->
<!-- isosent="20141101114900" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] enable-smp-locks affects PSM performance" -->
<!-- id="9239A2BA-19FF-475E-A827-4E46662D563B_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518C5D691_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-01 07:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Andrew --
<br>
<p>A PR went in on the v1.8 branch that removed the locking behavior by default:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi-release/pull/67">https://github.com/open-mpi/ompi-release/pull/67</a>
<br>
<p>Can you confirm that the behavior on the v1.8 nightly tarballs show better PSM message rate behavior?
<br>
<p>(<a href="http://www.open-mpi.org/nightly/v1.8/">http://www.open-mpi.org/nightly/v1.8/</a> -- 135 and beyond have the fix)
<br>
<p>For master, this was actually the exactly intended result: at a previous OMPI dev meeting, we said &quot;let's turn on threading, and see who screams.&quot;  You screamed.  :-)
<br>
<p>In a conversation with Nathan on Friday, it looks like many things in 6ef938de3fa9ca0fed2c5bcb0736f65b0d8803af get more expensive with threading enabled -- particularly freelists.  It's quite possible that we should change many of these things to be more expensive only a) if THREAD_MULTIPLE is active, and/or b) if progress threads are active.
<br>
<p>However, that may not be safe in itself.  Perhaps we should have multiple flavors of these types (like freelists) that are both thread safe and thread unsafe.  So even if we're in a THREAD_MULTIPLE and/or progress threads are active, if you *know* you've got a data structure that does not need the added thread-safety protections, you can use the unsafe-but-faster versions.
<br>
<p><p><p><p>On Oct 30, 2014, at 12:51 PM, Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Howard,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; No, we do not, just the OMPI default.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This post isn&#146;t so much about our packaging requirements, as about default behavior in upstream Open MPI.  We&#146;d like performance to be good by default for anyone compiling their own Open MPI (and using PSM).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Howard Pritchard
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, October 30, 2014 8:53 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] enable-smp-locks affects PSM performance
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi Andrew,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In your distribution of ompi, do you include versions of ompi to support different MPI thread safetylevels?  In particular, do you include a library which supports MPI_THREAD_MULTIPLE?
</span><br>
<span class="quotelev1">&gt; Just trying to better understand the requirements of you ompi package in terms of MPI thread safety.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2014-10-30 8:10 GMT-06:00 Friedley, Andrew &lt;andrew.friedley_at_[hidden]&gt;:
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16133.php">http://www.open-mpi.org/community/lists/devel/2014/10/16133.php</a>
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
<li><strong>Next message:</strong> <a href="16142.php">Alina Sklarevich: "[OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16140.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] OMPI devel] [OMPI commits] Git: open-mpi/ompi	branch master updated.	dev-198-g68bec0a"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Reply:</strong> <a href="16144.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
