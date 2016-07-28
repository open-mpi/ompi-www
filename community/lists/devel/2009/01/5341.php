<?
$subject_val = "Re: [OMPI devel] RFC: Move of ompi_bitmap_t";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 15:11:22 2009" -->
<!-- isoreceived="20090130201122" -->
<!-- sent="Fri, 30 Jan 2009 13:11:16 -0700" -->
<!-- isosent="20090130201116" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Move of ompi_bitmap_t" -->
<!-- id="CCE56AB2-138A-4F9C-8B4B-EEC5F65723CA_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200901301430.49974.keller_at_ornl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 15:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So once again, I bring up my objection of this entire line of moving  
<br>
until such time as the entire process is properly mapped out.  I  
<br>
believe it's premature to being moving around code in preparation for  
<br>
a move that hasn't been proven viable yet.  Until there is concrete  
<br>
evidence that such a move is possible, won't degrade application  
<br>
performance, and does not make the code totally unmaintainable, I  
<br>
believe that any related code changes should not be brought into the  
<br>
trunk.
<br>
<p>Brian
<br>
<p><p>On Jan 30, 2009, at 12:30 PM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; On behalf of Laurent Broto
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RFC: Move of ompi_bitmap_t
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Move ompi_bitmap_t into opal or onet-layer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Remove dependency on ompi-layer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/class
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: Open MPI-1.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: February 3, 2009.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------
</span><br>
<span class="quotelev1">&gt; Details:
</span><br>
<span class="quotelev1">&gt; WHY:
</span><br>
<span class="quotelev1">&gt; The ompi_bitmap_t is being used in various places within opal/orte/ 
</span><br>
<span class="quotelev1">&gt; ompi. With
</span><br>
<span class="quotelev1">&gt; the proposed splitting of BTLs into a separate library, we are  
</span><br>
<span class="quotelev1">&gt; currently
</span><br>
<span class="quotelev1">&gt; investigating several of the differences between ompi/class/* and  
</span><br>
<span class="quotelev1">&gt; opal/class/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the items is the ompi_bitmap_t which is quite similar to the
</span><br>
<span class="quotelev1">&gt; opal_bitmap_t.
</span><br>
<span class="quotelev1">&gt; The question is, whether we can remove favoring a solution just in  
</span><br>
<span class="quotelev1">&gt; opal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT:
</span><br>
<span class="quotelev1">&gt; The data structures in the opal-version are the same,
</span><br>
<span class="quotelev1">&gt; so is the interface,
</span><br>
<span class="quotelev1">&gt; the implementation is *almost* the same....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference is the Fortran handles ;-]!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maybe we're missing something but could we have a discussion, on why  
</span><br>
<span class="quotelev1">&gt; Fortran
</span><br>
<span class="quotelev1">&gt; sizes are playing a role here, and if this is a hard requirement,  
</span><br>
<span class="quotelev1">&gt; how we could
</span><br>
<span class="quotelev1">&gt; settle that into that current interface (possibly without a notion  
</span><br>
<span class="quotelev1">&gt; of Fortran,
</span><br>
<span class="quotelev1">&gt; but rather, set some upper limit that the bitmap may grow to?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Laurent and Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Previous message:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>In reply to:</strong> <a href="5340.php">Rainer Keller: "[OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
<li><strong>Reply:</strong> <a href="5342.php">Terry Dontje: "Re: [OMPI devel] RFC: Move of ompi_bitmap_t"</a>
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
