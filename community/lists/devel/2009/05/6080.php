<?
$subject_val = "Re: [OMPI devel] CMR one-sided changes?  (r21134)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 14:43:56 2009" -->
<!-- isoreceived="20090520184356" -->
<!-- sent="Wed, 20 May 2009 14:43:44 -0400" -->
<!-- isosent="20090520184344" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] CMR one-sided changes?  (r21134)" -->
<!-- id="65005187-0C9B-46EA-A3E1-F1B4642D2229_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="215A613C-9ECE-4085-8F21-2B81E8DDC9F1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] CMR one-sided changes?  (r21134)<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 14:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6081.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, putting together a CMR is on the todo list :).
<br>
<p>Brian
<br>
<p>--  
<br>
Brian Barrett
<br>
<p>There is an art . . . to flying. The knack lies in learning how to
<br>
throw yourself at the ground and miss.
<br>
<p>On May 20, 2009, at 12:41, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brian: can we CMR over your OSD changes from 30 Apr (r21134)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have noticed an enormous performance difference between the pt2pt  
</span><br>
<span class="quotelev1">&gt; and rdma osc components when running the IMB-EXT benchmark over IB:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - pt2pt: 11+ minutes
</span><br>
<span class="quotelev1">&gt;  - rdma: 43 seconds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rdma is the default on the trunk, since r21134 (<a href="https://svn.open-mpi.org/trac/ompi/changeset/21134">https://svn.open-mpi.org/trac/ompi/changeset/21134</a> 
</span><br>
<span class="quotelev1">&gt; ).  pt2pt is still the default on v1.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's a conflict in ompi/mca/osc/rdma/osc_rdma_sync.c, so I don't  
</span><br>
<span class="quotelev1">&gt; quite know how to proceed...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6081.php">Ralph Castain: "Re: [OMPI devel] ompi-ps broken or just changed?"</a>
<li><strong>Previous message:</strong> <a href="6079.php">Terry Dontje: "Re: [OMPI devel] totalview with OMPI 1.3 on rh5 linux"</a>
<li><strong>In reply to:</strong> <a href="6077.php">Jeff Squyres: "[OMPI devel] CMR one-sided changes?  (r21134)"</a>
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
