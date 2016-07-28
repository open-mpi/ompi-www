<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 15:23:54 2009" -->
<!-- isoreceived="20090130202354" -->
<!-- sent="Fri, 30 Jan 2009 15:23:41 -0500" -->
<!-- isosent="20090130202341" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="498361CD.9090301_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCE56AB2-138A-4F9C-8B4B-EEC5F65723CA_at_open-mpi.org" -->
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
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 15:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>Previous message:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I second Brian's concern.  So unless this is just an announcement that 
<br>
this is being done on a tmp branch only until everything is in order I 
<br>
think we need further discussions.
<br>
<p>--td
<br>
<p>Brian Barrett wrote:
<br>
<span class="quotelev1">&gt; So once again, I bring up my objection of this entire line of moving 
</span><br>
<span class="quotelev1">&gt; until such time as the entire process is properly mapped out.  I 
</span><br>
<span class="quotelev1">&gt; believe it's premature to being moving around code in preparation for 
</span><br>
<span class="quotelev1">&gt; a move that hasn't been proven viable yet.  Until there is concrete 
</span><br>
<span class="quotelev1">&gt; evidence that such a move is possible, won't degrade application 
</span><br>
<span class="quotelev1">&gt; performance, and does not make the code totally unmaintainable, I 
</span><br>
<span class="quotelev1">&gt; believe that any related code changes should not be brought into the 
</span><br>
<span class="quotelev1">&gt; trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On behalf of Laurent Broto
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; RFC: Move of ompi_bitmap_t
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Remove dependency on ompi-layer.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ompi/class
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Details:
</span><br>
<span class="quotelev2">&gt;&gt; WHY:
</span><br>
<span class="quotelev2">&gt;&gt; The ompi_bitmap_t is being used in various places within 
</span><br>
<span class="quotelev2">&gt;&gt; opal/orte/ompi. With
</span><br>
<span class="quotelev2">&gt;&gt; the proposed splitting of BTLs into a separate library, we are currently
</span><br>
<span class="quotelev2">&gt;&gt; investigating several of the differences between ompi/class/* and 
</span><br>
<span class="quotelev2">&gt;&gt; opal/class/*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One of the items is the ompi_bitmap_t which is quite similar to the
</span><br>
<span class="quotelev2">&gt;&gt; opal_bitmap_t.
</span><br>
<span class="quotelev2">&gt;&gt; The question is, whether we can remove favoring a solution just in opal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; WHAT:
</span><br>
<span class="quotelev2">&gt;&gt; The data structures in the opal-version are the same,
</span><br>
<span class="quotelev2">&gt;&gt; so is the interface,
</span><br>
<span class="quotelev2">&gt;&gt; the implementation is *almost* the same....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The difference is the Fortran handles ;-]!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we're missing something but could we have a discussion, on why 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran
</span><br>
<span class="quotelev2">&gt;&gt; sizes are playing a role here, and if this is a hard requirement, how 
</span><br>
<span class="quotelev2">&gt;&gt; we could
</span><br>
<span class="quotelev2">&gt;&gt; settle that into that current interface (possibly without a notion of 
</span><br>
<span class="quotelev2">&gt;&gt; Fortran,
</span><br>
<span class="quotelev2">&gt;&gt; but rather, set some upper limit that the bitmap may grow to?)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With best regards,
</span><br>
<span class="quotelev2">&gt;&gt; Laurent and Rainer
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev2">&gt;&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5343.php">Ralph Castain: "Re: [OMPI devel] Change of API in mpool"</a>
<li><strong>Previous message:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5341.php">Brian Barrett: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5344.php">Richard Graham: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
