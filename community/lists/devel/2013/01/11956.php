<?
$subject_val = "[OMPI devel] RFC: RTE Framework";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 14:29:56 2013" -->
<!-- isoreceived="20130121192956" -->
<!-- sent="Mon, 21 Jan 2013 19:29:41 +0000" -->
<!-- isosent="20130121192941" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: RTE Framework" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317CFB08_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: RTE Framework<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 14:29:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11965.php">Richard Graham: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11965.php">Richard Graham: "Re: [OMPI devel] RTE Framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>As discussed at the December developer's meeting, a number of us have been
<br>
working on a framework in OMPI to encompass the RTE resources (typically
<br>
provided by ORTE).  This follows on work Oak Ridge did on the ORCA layer,
<br>
which ended up having a number of technical challenges and was dropped for
<br>
a simpler approach.
<br>
<p>The interface is still a work in process and designed around the concept
<br>
that the ORTE component is a thin renaming around ORTE itself (this was
<br>
one of the points the ORTE developers felt strongly about).  We think it's
<br>
ready for comments and coming into the trunk, so are trying to get it
<br>
looked at by a broader community.  The Mercurial repository is available
<br>
at:
<br>
<p>&nbsp;&nbsp;<a href="https://bitbucket.org/rhc/ompi-trunk">https://bitbucket.org/rhc/ompi-trunk</a>
<br>
<p>This work is focussed only on the creation of a framework to encompass the
<br>
RTE interface between OMPI and ORTE.  There are currently two components:
<br>
the ORTE component and a test component implemented over PMI.  The PMI
<br>
component is only really useful if ORTE is disabled at autogen time with
<br>
the --no-orte option to autogen.  Future work to build against an external
<br>
OMPI (in progress, on a different branch) will make using non-orte
<br>
components slightly more useful.
<br>
<p>Anyway, if there aren't any major comments, I'll plan on bringing this
<br>
work to the trunk this weekend (Jan 26/27).
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11956/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11957.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] New ARM patch"</a>
<li><strong>Previous message:</strong> <a href="11955.php">Leif Lindholm: "[OMPI devel] New ARM patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11965.php">Richard Graham: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11965.php">Richard Graham: "Re: [OMPI devel] RTE Framework"</a>
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
