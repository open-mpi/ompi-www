<?
$subject_val = "[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  9 06:26:28 2014" -->
<!-- isoreceived="20140709102628" -->
<!-- sent="Wed, 09 Jul 2014 19:26:53 +0900" -->
<!-- isosent="20140709102653" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used" -->
<!-- id="53BD18ED.5040601_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [MTT devel] collecting OpenMPI info when the AlreadyInstalled module is used<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-09 06:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<li><strong>Reply:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>i noticed that the bend-rsh cluster (Ralph from Intel ?) does not report :
<br>
- bitness
<br>
- endian
<br>
- compiler
<br>
- compiler version
<br>
- configure arguments
<br>
- vpath mode (to be confirmed)
<br>
<p><p>i believe the root cause is MPI is not built via mtt since the
<br>
AlreadyInstalled module is used.
<br>
<p>bitness can be retrieved from ompi_info in the Analyze phase.
<br>
that was trivial enough and i made a pull request for that :
<br>
<a href="https://github.com/open-mpi/mtt/pull/1">https://github.com/open-mpi/mtt/pull/1</a>
<br>
<p>other parameters (compiler, compiler version) could be &quot;kind of&quot;
<br>
retrieved with ompi_info
<br>
modulo some extra formatting to display it nicely.
<br>
<p>i could not find any way to retrieve the configure command line. my best
<br>
bet would be to make it available
<br>
into OpenMPI so it can be retrieved.
<br>
<p><p>i had some extra thoughts about #167 (Wrapper layer arount MTT client
<br>
for full parallelism : <a href="https://svn.open-mpi.org/trac/mtt/ticket/167">https://svn.open-mpi.org/trac/mtt/ticket/167</a> )
<br>
one implementation could generate several .ini files that use the
<br>
AlreadyInstalled module.
<br>
currently, this is not a good option because the parameters described
<br>
above are not reported to the mtt server.
<br>
<p>Any thoughts ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2014/06/0644.php">Jeff Squyres (jsquyres): "Re: [MTT devel] MTT: let's use git tags"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
<li><strong>Reply:</strong> <a href="0646.php">Jeff Squyres (jsquyres): "Re: [MTT devel] collecting OpenMPI info when the AlreadyInstalled	module is used"</a>
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
