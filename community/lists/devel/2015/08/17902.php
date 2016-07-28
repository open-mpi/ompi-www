<?
$subject_val = "[OMPI devel] Status update: PMIx on master";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 11:59:27 2015" -->
<!-- isoreceived="20150831155927" -->
<!-- sent="Mon, 31 Aug 2015 08:59:22 -0700" -->
<!-- isosent="20150831155922" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Status update: PMIx on master" -->
<!-- id="1F273BA2-E380-4549-B282-5DFD84B0083D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Status update: PMIx on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 11:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<li><strong>Previous message:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<li><strong>Reply:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>Per last week&#226;&#128;&#153;s telecon, I committed the PR to bring PMIx into the master. As discussed, things are generally working okay - we had a little cleanup to do once the code was exposed to different environments, but not too horrible (thanks Gilles!).
<br>
<p>First, a quick status update. We know that the MPI-2 dynamics are broken - this includes comm_spawn (will launch but not connect), connect/accept, and publish/lookup/unpublish. I am working on those now and hope to have them fully operational inn the next day or two. Everything else should be functional - if not, please report the bug.
<br>
<p>There are a few warnings still being emitted for unused functions. Please ignore these for the moment as those functions will be used once we complete the integration.
<br>
<p>Direct modex is working, but we are not yet making use of it. We still default to doing a full data exchange at startup. I&#226;&#128;&#153;m not sure where we are relative to the async add_procs, but once that is ready we have the necessary support in-place.
<br>
<p>You are certainly welcome to help fix issues with the PMIx code! We ask that any changes to the embedded PMIx code itself please be posted as PRs against the PMIx master - I will update the OMPI master from the PMIx tarball. This will help avoid losing your changes as we move forward.
<br>
<p><a href="https://github">https://github</a> &lt;<a href="https://github/">https://github/</a>&gt;.com/open-mpi/pmix
<br>
<p>So - what changed, you ask? Most of the change is transparent, but two things are not:
<br>
<p>* the OMPI DPM framework has been eliminated and replaced with a core ompi/dpm directory. There is now only one way of doing dynamic process management, and that is thru the opal/mca/pmix framework, thus letting prior PMI implementations also support these functions (as much as they do)
<br>
<p>* the OMPI PUB framework has been eliminated. The respective MPI bindings now directly call the opal/mca/pmix functions to implement publish, lookup, and unpublish
<br>
<p><p>As a result of the changes, there isn&#226;&#128;&#153;t much (if any) interaction between the MPI and ORTE layers any more - everything pretty much flows thru the OPAL/PMIx interface. Once the STCI folks have a chance to scratch their heads a bit, we may find that the OMPI/RTE framework can likewise disappear or be significantly reduced.
<br>
<p><p>The transparent changes do not currently take advantage of the enhanced/extended PMIx functionality - we basically just did a direct replacement, with the addition of direct modex support. The &#226;&#128;&#156;hooks&#226;&#128;&#157; are exposed for OMPI to take advantage of things like notification - we just need to decide which ones we want and how/where to wire them into the code.
<br>
<p>I&#226;&#128;&#153;ll be updating the PMIx wiki over the next week or so to better explain the overall design. It is somewhat out-of-date in the details, though the broad design remains accurate.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<li><strong>Previous message:</strong> <a href="17901.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fortran calling MPI_* instead of PMPI_*"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<li><strong>Reply:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
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
