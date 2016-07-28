<?
$subject_val = "[OMPI devel] RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 08:58:37 2013" -->
<!-- isoreceived="20130522125837" -->
<!-- sent="Wed, 22 May 2013 12:58:32 +0000" -->
<!-- isosent="20130522125832" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Python-generated Fortran wrappers" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6341B7_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Python-generated Fortran wrappers<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 08:58:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12399.php">jhonatan alves: "[OMPI devel] Porting Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Replace all mpif.h, use mpi, and use mpi_f08 code with Python-generated code
<br>
<p>WHY: there are ***7*** copies of the Fortran bindings; keeping them all in sync when adding a new MPI-3 function (or updating/fixing an old one) is a nightmare
<br>
<p>WHERE: run a python generator script in ompi/mpi/fortran during &quot;make&quot;
<br>
<p>WHEN: sometime in the next few months
<br>
<p>TIMEOUT: discuss next Tuesday at the teleconf, 28 May 2013
<br>
<p>-----
<br>
<p>MORE DETAIL:
<br>
<p>The last iteration of Fortran updates represented a huge leap forward in OMPI's Fortran support.  However, one must remember that Fortran compilers all have different stages of compliance to the current Fortran standard.  Hence, we have a lot of configury, preprocessor macros, and conditional code in the OMPI Fortran bindings code to handle all these differences.  Also, there are entire copies of the Fortran bindings code to handle some differences that are too big for preprocessor macros.
<br>
<p>As such, I count ***7*** copies of different Fortran bindings (not including the PMPI copies/sym links/weak symbols) in the OMPI tree.  This is a freaking nightmare to maintain as one adds new MPI-3 functions, or updates old functions.  For example, we periodically find that one of the 7 copies has a bug in a function prototype, but the other 6 are ok.  Or we added 6 interfaces when adding a new MPI-3 function, but forgot to add the 7th.  Ugh!
<br>
<p>Craig has been working on a better system, somewhat modeled off the Bill Gropp's Fortran generator system in MPICH.  That is, there's basically a parsable file that breaks down every Fortran interface into its individual parts.  Craig has some python scriptery that reads this file and then generates all the OMPI interfaces and wrapper code for mpif.h, use mpi, and use mpi_f08.
<br>
<p>Specifically: the python scripts not only generates fixed interfaces (think of them as &quot;header files&quot;), *it also generates the wrapper code* -- i.e., all the C code that is currently in ompi/mpi/fortran/mpif-h.
<br>
<p>*** Note that the current &quot;use mpi&quot; code is also script-generated during &quot;make&quot; (and has been for years), but they are created by Bourne shell scripts.
<br>
<p>This is a Big Change for (at least) two reasons:
<br>
<p>1. We'll actually be replacing the mpif.h and use mpi code that has been in our tree forever.  Hence, there will likely be some bugs as we shake all this out.
<br>
<p>2. We'll be running python code during &quot;make&quot;.  I don't think that this is a Big Issue these days, but a few years ago, I remember we had Big Discussions about whether we could run non-sh-based-scripts during &quot;make&quot; (i.e., whether we could assume that relevant interpreters were available to run such scripts).  But to be clear: I'm no longer worried about people not having Python available.
<br>
<p>There's no fixed timeline for this yet; Craig is still working on his python scripts.  The intent is that his scripts will actually be the basis for other projects besides Open MPI (e.g., tools that also need Fortran/PMPI-interception capabilities).  But this is such a big change that I wanted to give the community a heads-up and have a chance to discuss this before we're ready to bring back to the trunk.
<br>
<p>Comments / thoughts?
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
<li><strong>Next message:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12399.php">jhonatan alves: "[OMPI devel] Porting Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12401.php">Ralph Castain: "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
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
