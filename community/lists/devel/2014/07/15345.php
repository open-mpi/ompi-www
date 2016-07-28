<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 00:36:11 2014" -->
<!-- isoreceived="20140730043611" -->
<!-- sent="Tue, 29 Jul 2014 21:36:09 -0700" -->
<!-- isosent="20140730043609" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CAAvDA17L5wcSh7+E+hZdnyEe90Kb6kRg525OQ2NujVZRLOkjng_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="53D86FF0.2070900_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 00:36:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 29, 2014 at 9:09 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; openpmi 1.8 (svn checkout) does not build the usempif08 bindings if
</span><br>
<span class="quotelev1">&gt; PROCEDURE is not supported.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I have just verified that this requirement for PROCEDURE support is a
<br>
change in behavior between 1.8.1 and 1.8.2rc2.
<br>
This was an intentional change as noted in ompi_setup_mpi_fortran.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;# Per <a href="https://svn.open-mpi.org/trac/ompi/ticket/4590">https://svn.open-mpi.org/trac/ompi/ticket/4590</a>, if the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# Fortran compiler doesn't support PROCEDURE in the way we
<br>
&nbsp;&nbsp;&nbsp;&nbsp;# want/need, disable the mpi_f08 module.
<br>
<p>Unfortunately, this (and <a href="https://svn.open-mpi.org/trac/ompi/changeset/31588">https://svn.open-mpi.org/trac/ompi/changeset/31588</a>
<br>
that followed) represent a REGRESSION in that between 1.8.1 and 1.8.2rc2
<br>
Open MPI has lost support for F08 with the PGI compilers.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15345/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15346.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15344.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15343.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15374.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
