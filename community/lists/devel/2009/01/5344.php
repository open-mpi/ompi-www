<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 16:40:07 2009" -->
<!-- isoreceived="20090130214007" -->
<!-- sent="Fri, 30 Jan 2009 16:40:01 -0500" -->
<!-- isosent="20090130214001" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="C5A8DDE1.2DE2C%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498361CD.9090301_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Move of ompi_bitmap_t<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 16:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>In reply to:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This should really be viewed as a code maintenance RFC.  The reason this
<br>
came up in the first place is because we are investigating the btl move, but
<br>
these are really two very distinct issues.  There are two bits of code that
<br>
have virtually the same functionality - they do have the same interface I am
<br>
told.  The question is, is there a good reason to keep two different
<br>
versions in the repository ?  Not knowing the history of why a second
<br>
version was created this is an inquiry.  Is there some performance
<br>
advantage, or some other advantage to having these two versions ?
<br>
<p>Rich
<br>
<p><p>On 1/30/09 3:23 PM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I second Brian's concern.  So unless this is just an announcement that
</span><br>
<span class="quotelev1">&gt; this is being done on a tmp branch only until everything is in order I
</span><br>
<span class="quotelev1">&gt; think we need further discussions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So once again, I bring up my objection of this entire line of moving
</span><br>
<span class="quotelev2">&gt;&gt; until such time as the entire process is properly mapped out.  I
</span><br>
<span class="quotelev2">&gt;&gt; believe it's premature to being moving around code in preparation for
</span><br>
<span class="quotelev2">&gt;&gt; a move that hasn't been proven viable yet.  Until there is concrete
</span><br>
<span class="quotelev2">&gt;&gt; evidence that such a move is possible, won't degrade application
</span><br>
<span class="quotelev2">&gt;&gt; performance, and does not make the code totally unmaintainable, I
</span><br>
<span class="quotelev2">&gt;&gt; believe that any related code changes should not be brought into the
</span><br>
<span class="quotelev2">&gt;&gt; trunk.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On behalf of Laurent Broto
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; RFC: Move of ompi_bitmap_t
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: Remove dependency on ompi-layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: ompi/class
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ompi_bitmap_t is being used in various places within
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/orte/ompi. With
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the proposed splitting of BTLs into a separate library, we are currently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; investigating several of the differences between ompi/class/* and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/class/*
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One of the items is the ompi_bitmap_t which is quite similar to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal_bitmap_t.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The question is, whether we can remove favoring a solution just in opal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The data structures in the opal-version are the same,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so is the interface,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the implementation is *almost* the same....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The difference is the Fortran handles ;-]!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maybe we're missing something but could we have a discussion, on why
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizes are playing a role here, and if this is a hard requirement, how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; settle that into that current interface (possibly without a notion of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fortran,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but rather, set some upper limit that the bitmap may grow to?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Laurent and Rainer
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>In reply to:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5345.php">Ralph Castain: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
