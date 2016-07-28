<?
$subject_val = "Re: [OMPI devel] Status update: PMIx on master";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 12:50:37 2015" -->
<!-- isoreceived="20150831165037" -->
<!-- sent="Mon, 31 Aug 2015 10:50:35 -0600" -->
<!-- isosent="20150831165035" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Status update: PMIx on master" -->
<!-- id="CAF1Cqj7GgSY5xaivbRKBoN=4Nxq+K+3a-r6M4Nt_xdd=aU-xXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1F273BA2-E380-4549-B282-5DFD84B0083D_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Status update: PMIx on master<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 12:50:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17904.php">Rolf vandeVaart: "[OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
<li><strong>In reply to:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Thanks for getting this in!
<br>
<p>I verified that for master/HEAD today that, modulo the caveats
<br>
about spawn/pub/sub etc. job launches on Cray using aprun or
<br>
srun work as expected, so some of the MTT failures over the
<br>
weekend should go away with runs this week.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><p><p><p>2015-08-31 9:59 GMT-06:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per last week&#226;&#128;&#153;s telecon, I committed the PR to bring PMIx into the master.
</span><br>
<span class="quotelev1">&gt; As discussed, things are generally working okay - we had a little cleanup
</span><br>
<span class="quotelev1">&gt; to do once the code was exposed to different environments, but not too
</span><br>
<span class="quotelev1">&gt; horrible (thanks Gilles!).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, a quick status update. We know that the MPI-2 dynamics are broken -
</span><br>
<span class="quotelev1">&gt; this includes comm_spawn (will launch but not connect), connect/accept, and
</span><br>
<span class="quotelev1">&gt; publish/lookup/unpublish. I am working on those now and hope to have them
</span><br>
<span class="quotelev1">&gt; fully operational inn the next day or two. Everything else should be
</span><br>
<span class="quotelev1">&gt; functional - if not, please report the bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a few warnings still being emitted for unused functions. Please
</span><br>
<span class="quotelev1">&gt; ignore these for the moment as those functions will be used once we
</span><br>
<span class="quotelev1">&gt; complete the integration.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Direct modex is working, but we are not yet making use of it. We still
</span><br>
<span class="quotelev1">&gt; default to doing a full data exchange at startup. I&#226;&#128;&#153;m not sure where we are
</span><br>
<span class="quotelev1">&gt; relative to the async add_procs, but once that is ready we have the
</span><br>
<span class="quotelev1">&gt; necessary support in-place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are certainly welcome to help fix issues with the PMIx code! We ask
</span><br>
<span class="quotelev1">&gt; that any changes to the embedded PMIx code itself please be posted as PRs
</span><br>
<span class="quotelev1">&gt; against the PMIx master - I will update the OMPI master from the PMIx
</span><br>
<span class="quotelev1">&gt; tarball. This will help avoid losing your changes as we move forward.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/pmix">https://github.com/open-mpi/pmix</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So - what changed, you ask? Most of the change is transparent, but two
</span><br>
<span class="quotelev1">&gt; things are not:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the OMPI DPM framework has been eliminated and replaced with a core
</span><br>
<span class="quotelev1">&gt; ompi/dpm directory. There is now only one way of doing dynamic process
</span><br>
<span class="quotelev1">&gt; management, and that is thru the opal/mca/pmix framework, thus letting
</span><br>
<span class="quotelev1">&gt; prior PMI implementations also support these functions (as much as they do)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * the OMPI PUB framework has been eliminated. The respective MPI bindings
</span><br>
<span class="quotelev1">&gt; now directly call the opal/mca/pmix functions to implement publish, lookup,
</span><br>
<span class="quotelev1">&gt; and unpublish
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As a result of the changes, there isn&#226;&#128;&#153;t much (if any) interaction between
</span><br>
<span class="quotelev1">&gt; the MPI and ORTE layers any more - everything pretty much flows thru the
</span><br>
<span class="quotelev1">&gt; OPAL/PMIx interface. Once the STCI folks have a chance to scratch their
</span><br>
<span class="quotelev1">&gt; heads a bit, we may find that the OMPI/RTE framework can likewise disappear
</span><br>
<span class="quotelev1">&gt; or be significantly reduced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The transparent changes do not currently take advantage of the
</span><br>
<span class="quotelev1">&gt; enhanced/extended PMIx functionality - we basically just did a direct
</span><br>
<span class="quotelev1">&gt; replacement, with the addition of direct modex support. The &#226;&#128;&#156;hooks&#226;&#128;&#157; are
</span><br>
<span class="quotelev1">&gt; exposed for OMPI to take advantage of things like notification - we just
</span><br>
<span class="quotelev1">&gt; need to decide which ones we want and how/where to wire them into the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;ll be updating the PMIx wiki over the next week or so to better explain
</span><br>
<span class="quotelev1">&gt; the overall design. It is somewhat out-of-date in the details, though the
</span><br>
<span class="quotelev1">&gt; broad design remains accurate.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17902.php">http://www.open-mpi.org/community/lists/devel/2015/08/17902.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17903/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17904.php">Rolf vandeVaart: "[OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
<li><strong>In reply to:</strong> <a href="17902.php">Ralph Castain: "[OMPI devel] Status update: PMIx on master"</a>
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
