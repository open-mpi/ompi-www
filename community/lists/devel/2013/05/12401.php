<?
$subject_val = "Re: [OMPI devel] RFC: Python-generated Fortran wrappers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 22 09:18:38 2013" -->
<!-- isoreceived="20130522131838" -->
<!-- sent="Wed, 22 May 2013 06:18:31 -0700" -->
<!-- isosent="20130522131831" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Python-generated Fortran wrappers" -->
<!-- id="967E950D-97AC-46A0-AED7-C220235E07CC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6341B7_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Python-generated Fortran wrappers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-22 09:18:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12400.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12400.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have no issues other than wondering why we don't do it in perl given that we already do all non-shell actions in perl - is it necessary to intro another language?
<br>
<p><p>On May 22, 2013, at 5:58 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Replace all mpif.h, use mpi, and use mpi_f08 code with Python-generated code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: there are ***7*** copies of the Fortran bindings; keeping them all in sync when adding a new MPI-3 function (or updating/fixing an old one) is a nightmare
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: run a python generator script in ompi/mpi/fortran during &quot;make&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: sometime in the next few months
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: discuss next Tuesday at the teleconf, 28 May 2013
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last iteration of Fortran updates represented a huge leap forward in OMPI's Fortran support.  However, one must remember that Fortran compilers all have different stages of compliance to the current Fortran standard.  Hence, we have a lot of configury, preprocessor macros, and conditional code in the OMPI Fortran bindings code to handle all these differences.  Also, there are entire copies of the Fortran bindings code to handle some differences that are too big for preprocessor macros.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As such, I count ***7*** copies of different Fortran bindings (not including the PMPI copies/sym links/weak symbols) in the OMPI tree.  This is a freaking nightmare to maintain as one adds new MPI-3 functions, or updates old functions.  For example, we periodically find that one of the 7 copies has a bug in a function prototype, but the other 6 are ok.  Or we added 6 interfaces when adding a new MPI-3 function, but forgot to add the 7th.  Ugh!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig has been working on a better system, somewhat modeled off the Bill Gropp's Fortran generator system in MPICH.  That is, there's basically a parsable file that breaks down every Fortran interface into its individual parts.  Craig has some python scriptery that reads this file and then generates all the OMPI interfaces and wrapper code for mpif.h, use mpi, and use mpi_f08.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: the python scripts not only generates fixed interfaces (think of them as &quot;header files&quot;), *it also generates the wrapper code* -- i.e., all the C code that is currently in ompi/mpi/fortran/mpif-h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Note that the current &quot;use mpi&quot; code is also script-generated during &quot;make&quot; (and has been for years), but they are created by Bourne shell scripts.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a Big Change for (at least) two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. We'll actually be replacing the mpif.h and use mpi code that has been in our tree forever.  Hence, there will likely be some bugs as we shake all this out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We'll be running python code during &quot;make&quot;.  I don't think that this is a Big Issue these days, but a few years ago, I remember we had Big Discussions about whether we could run non-sh-based-scripts during &quot;make&quot; (i.e., whether we could assume that relevant interpreters were available to run such scripts).  But to be clear: I'm no longer worried about people not having Python available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's no fixed timeline for this yet; Craig is still working on his python scripts.  The intent is that his scripts will actually be the basis for other projects besides Open MPI (e.g., tools that also need Fortran/PMPI-interception capabilities).  But this is such a big change that I wanted to give the community a heads-up and have a chance to discuss this before we're ready to bring back to the trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments / thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Previous message:</strong> <a href="12400.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>In reply to:</strong> <a href="12400.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
<li><strong>Reply:</strong> <a href="12402.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Python-generated Fortran wrappers"</a>
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
