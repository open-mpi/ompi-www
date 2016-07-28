<?
$subject_val = "Re: [OMPI devel] ibm/collective/bcast_f08.f90";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 17:12:14 2012" -->
<!-- isoreceived="20120709211214" -->
<!-- sent="Mon, 9 Jul 2012 17:12:09 -0400" -->
<!-- isosent="20120709211209" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm/collective/bcast_f08.f90" -->
<!-- id="6BBE322E-59F1-4CAD-8FFE-21D4F9FA7A0E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FF7682E.1060007_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm/collective/bcast_f08.f90<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 17:12:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, some basic non-blocking tests should be in now, including mpif.h, use mpi, and use mpi_f08 versions -- see r26768 in ompi-tests.
<br>
<p>They're not great tests -- it would be wonderful if someone would write some better ones.  :-)  But they at least verify basic functionality.
<br>
<p>(and they did find two bugs -- one bozo debug that I had left in the mpif.h ibarrier, and a problem with MPI_STATUS(ES)_IGNORE in the new ignore TKR use mpi implementation, which I'm still working on fixing...)
<br>
<p><p>On Jul 6, 2012, at 6:35 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I assume this is an orphaned file that should be removed?  (It looks like a draft version of ibcast_f08.f90.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Previous message:</strong> <a href="11260.php">Nathan Hjelm: "[OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="11254.php">Eugene Loh: "[OMPI devel] ibm/collective/bcast_f08.f90"</a>
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
