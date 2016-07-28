<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:03:34 2013" -->
<!-- isoreceived="20130716210334" -->
<!-- sent="Tue, 16 Jul 2013 23:03:27 +0200" -->
<!-- isosent="20130716210327" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="E1567E01-ED1D-4FFD-BF5C-AE3626E4A272_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F722106_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived datatypes<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 17:03:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12623.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12627.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 22:29 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2013, at 4:22 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Btw, I have a question to you fellow MPI Forum attendees. I just can't remember why the MPI forum felt there was a need for the MPI_Type_get[_true]_extent_x? MPI_Count can't be bigger than MPI_Aint,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it can -- it has to be the largest integer type (i.e., it even has to be able to handle an MPI_Offset).
</span><br>
<p>Technicalities! In the entire standard MPI_Offset is only used to access files, not to build datatypes. As such there is no way to have the extent of an datatype bigger than MPI_Aint. Thus, these accessors returning MPI_Count are a useless overkill, as they cannot offer more precision that what the version returning MPI_Aint is already offering.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>PS: I hope nobody has the idea to define the MPI_Offset as a signed type &#133;
<br>
<p><p><span class="quotelev2">&gt;&gt; so I don't see what is the benefit of extending the MPI_Type_get_true_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) and MPI_Type_get_extent(MPI_Datatype, MPI_Aint*, MPI_Aint*) with the corresponding _X versions?
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12623.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12621.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12616.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>Reply:</strong> <a href="12627.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
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
