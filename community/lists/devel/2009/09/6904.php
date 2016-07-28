<?
$subject_val = "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) butmissing MPI_COMPLEX4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:42:56 2009" -->
<!-- isoreceived="20090928154256" -->
<!-- sent="Mon, 28 Sep 2009 11:42:51 -0400" -->
<!-- isosent="20090928154251" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) butmissing MPI_COMPLEX4" -->
<!-- id="FCD29996-28C8-4669-873F-3E3D0D604419_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3D41046E-D67C-4F98-9AC0-5E3E03D4BD3C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) butmissing MPI_COMPLEX4<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:42:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6905.php">Roman Cheplyaka: "[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6903.php">Jeff Squyres: "[OMPI devel] v1.5 release managers / gatekeepers"</a>
<li><strong>In reply to:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Somehow the mail below got queued up on my laptop and didn't get until  
<br>
early this morning --- sorry for the apparent non-sequitur in the  
<br>
thread.
<br>
<p>I'll amend the ticket with what George said and I'll also add some  
<br>
comments about why MPI_LOGICALx is defined in our header files so that  
<br>
next time this topic comes up, there will at least be something to  
<br>
reference.  :-)
<br>
<p><p>On Sep 26, 2009, at 10:00 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 23, 2009, at 3:33 PM, Lisandro Dalcin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Disclaimer: I have almost no experience with Fortran, nor I'm  
</span><br>
<span class="quotelev1">&gt; needing
</span><br>
<span class="quotelev2">&gt; &gt; this, but anyway (perhaps just as a reminder for you) :-)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lucky for you!  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Open MPI exposes MPI_LOGICAL{1|2|4|8}, and they are not (AFAIK)
</span><br>
<span class="quotelev2">&gt; &gt; listed in the MPI standard (I cannot found them in MPI-2.2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mmm.  Good point.  Looks like we were over-zealous there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) The MPI-2.2 standard DO list MPI COMPLEX4 (at least in 2.2) ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/2032">https://svn.open-mpi.org/trac/ompi/ticket/2032</a> to cover both
</span><br>
<span class="quotelev1">&gt; of these issues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6905.php">Roman Cheplyaka: "[OMPI devel] mca_pml_ob1_rdma_btls and leave_pinned logic"</a>
<li><strong>Previous message:</strong> <a href="6903.php">Jeff Squyres: "[OMPI devel] v1.5 release managers / gatekeepers"</a>
<li><strong>In reply to:</strong> <a href="6901.php">Jeff Squyres: "Re: [OMPI devel] ompi-trunk: have MPI_REAL2 (if available) but missing MPI_COMPLEX4"</a>
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
