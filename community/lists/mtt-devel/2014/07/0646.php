<?
$subject_val = "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 10 13:38:26 2014" -->
<!-- isoreceived="20140710173826" -->
<!-- sent="Thu, 10 Jul 2014 17:38:24 +0000" -->
<!-- isosent="20140710173824" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used" -->
<!-- id="7CF9E3F6-1FEC-495A-9145-9B2E38231612_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53BD18ED.5040601_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-10 13:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0647.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	313f269f46faa4e797ef48791baac659f5cc93ea"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Gilles Gouaillardet: "[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Gilles Gouaillardet: "[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2014, at 6:26 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i noticed that the bend-rsh cluster (Ralph from Intel ?) does not report :
</span><br>
<span class="quotelev1">&gt; - bitness
</span><br>
<span class="quotelev1">&gt; - endian
</span><br>
<span class="quotelev1">&gt; - compiler
</span><br>
<span class="quotelev1">&gt; - compiler version
</span><br>
<span class="quotelev1">&gt; - configure arguments
</span><br>
<span class="quotelev1">&gt; - vpath mode (to be confirmed)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i believe the root cause is MPI is not built via mtt since the
</span><br>
<span class="quotelev1">&gt; AlreadyInstalled module is used.
</span><br>
<p>Yes, I believe Ralph runs that way a lot.
<br>
<p><span class="quotelev1">&gt; bitness can be retrieved from ompi_info in the Analyze phase.
</span><br>
<span class="quotelev1">&gt; that was trivial enough and i made a pull request for that :
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/mtt/pull/1">https://github.com/open-mpi/mtt/pull/1</a>
</span><br>
<p>Done; thanks.
<br>
<p><span class="quotelev1">&gt; other parameters (compiler, compiler version) could be &quot;kind of&quot;
</span><br>
<span class="quotelev1">&gt; retrieved with ompi_info
</span><br>
<span class="quotelev1">&gt; modulo some extra formatting to display it nicely.
</span><br>
<p>Patches welcome.  :-)
<br>
<p><span class="quotelev1">&gt; i could not find any way to retrieve the configure command line. my best
</span><br>
<span class="quotelev1">&gt; bet would be to make it available
</span><br>
<span class="quotelev1">&gt; into OpenMPI so it can be retrieved.
</span><br>
<p>We have no easy way to save the configure command line, unfortunately.  configure slurps off a lot of the command line before the first line of configure.ac is executed (so to speak).
<br>
<p><span class="quotelev1">&gt; i had some extra thoughts about #167 (Wrapper layer arount MTT client
</span><br>
<span class="quotelev1">&gt; for full parallelism : <a href="https://svn.open-mpi.org/trac/mtt/ticket/167">https://svn.open-mpi.org/trac/mtt/ticket/167</a> )
</span><br>
<span class="quotelev1">&gt; one implementation could generate several .ini files that use the
</span><br>
<span class="quotelev1">&gt; AlreadyInstalled module.
</span><br>
<span class="quotelev1">&gt; currently, this is not a good option because the parameters described
</span><br>
<span class="quotelev1">&gt; above are not reported to the mtt server.
</span><br>
<p>We were really thinking about a generalized version of the Cisco scripts for #167 -- this wouldn't need the AlreadyInstalled module.
<br>
<p>See ompi-tests/cisco/mtt/usnic/nightly.pl.  It's kinda grotty and very Cisco-specific.  A nicer/cleaner/more general version of the ideas in that script would be great.
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
<li><strong>Next message:</strong> <a href="0647.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] GIT: MTT branch master updated.	313f269f46faa4e797ef48791baac659f5cc93ea"</a>
<li><strong>Previous message:</strong> <a href="0645.php">Gilles Gouaillardet: "[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used"</a>
<li><strong>In reply to:</strong> <a href="0645.php">Gilles Gouaillardet: "[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used"</a>
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
