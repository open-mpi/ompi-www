<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 18:30:36 2014" -->
<!-- isoreceived="20140730223036" -->
<!-- sent="Wed, 30 Jul 2014 22:30:34 +0000" -->
<!-- isosent="20140730223034" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="CD7BFAD1-68A1-4AE0-A8FC-5E9A81B6FCAD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17L5wcSh7+E+hZdnyEe90Kb6kRg525OQ2NujVZRLOkjng_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-30 18:30:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 30, 2014, at 12:36 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, this (and <a href="https://svn.open-mpi.org/trac/ompi/changeset/31588">https://svn.open-mpi.org/trac/ompi/changeset/31588</a> that followed) represent a REGRESSION in that between 1.8.1 and 1.8.2rc2 Open MPI has lost support for F08 with the PGI compilers.
</span><br>
<p>Yes, and the answer is for PGI to support more of the F2003 standard.  Then there might be a hope for supporting the MPI F08 bindings.  :-)
<br>
<p>Glib answer aside...
<br>
<p>The fact of the matter is that Fortran compilers are a nightmare of what specific Fortran features they support.  As part of r31587 and r31588, there was a simplification made to the (already quite complex) F08 bindings in OMPI to only support Fortran compilers that support PROCEDURE.
<br>
<p>I don't think I realized that I would be cutting off PGI support with this change.
<br>
<p>That being said, unless someone really screams, I would greatly prefer not to put back in the &quot;support compilers who do not support PROCEDURE&quot; code because a) it creates the problem that we solved by taking that stuff out, b) it adds more complexity to the F08 bindings, and c) we'll have to solve the original problem a different way... and I don't know how to do that.  :-\
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
<li><strong>Next message:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Previous message:</strong> <a href="15373.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: job size info in OPAL"</a>
<li><strong>In reply to:</strong> <a href="15345.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>Reply:</strong> <a href="15375.php">Paul Hargrove: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
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
