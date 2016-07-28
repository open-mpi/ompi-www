<?
$subject_val = "[OMPI devel] Building with rpath disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 10:45:09 2009" -->
<!-- isoreceived="20090108154509" -->
<!-- sent="Thu, 08 Jan 2009 16:45:04 +0100" -->
<!-- isosent="20090108154504" -->
<!-- name="Manuel Prinz" -->
<!-- email="debian_at_[hidden]" -->
<!-- subject="[OMPI devel] Building with rpath disabled" -->
<!-- id="1231429504.9679.14.camel_at_ce170155.zmb.uni-essen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Building with rpath disabled<br>
<strong>From:</strong> Manuel Prinz (<em>debian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-08 10:45:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5104.php">Timothy Hayes: "Re: [OMPI devel] wiki: creating frameworks and components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>attached you'll find a (trivial) patch against the latest svn trunk
<br>
(r20227) that adds a --disable-rpath to configure, so libraries can be
<br>
build with rpath disabled. The reason for adding this feature that was
<br>
that rpath is often problematic and it is removed in Debian anyway. (We
<br>
currently delete rpath entries after building which is a little ugly.)
<br>
<p>The patch simply adds a call to the macro AC_LIB_RPATH in configure.ac
<br>
and installs &quot;config.rpath&quot; from gettext which seems to be the preferred
<br>
way of distributing the m4 macros needed for that. The license should
<br>
not be an issue, as far as I can say.
<br>
<p>I tested it with the current trunk and it worked fine for me. It would
<br>
be great if you could consider including it since it makes Debian
<br>
maintainance of Open MPI a little easier and I think other distributions
<br>
(and some users) may benefit from stripping rpath as well.
<br>
<p>Thanks in advance!
<br>
<p>Best regards
<br>
Manuel
<br>
<p>
<br><p>
<p>
<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5105/ompi_rpath_fix.patch.gz">ompi_rpath_fix.patch.gz</a>
</ul>
<!-- attachment="ompi_rpath_fix.patch.gz" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5105/signature.asc">Dies ist ein digital signierter Nachrichtenteil</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5104.php">Timothy Hayes: "Re: [OMPI devel] wiki: creating frameworks and components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Reply:</strong> <a href="5106.php">Dirk Eddelbuettel: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
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
