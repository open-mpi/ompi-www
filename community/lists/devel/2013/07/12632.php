<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:23:31 2013" -->
<!-- isoreceived="20130716212331" -->
<!-- sent="Tue, 16 Jul 2013 23:23:24 +0200" -->
<!-- isosent="20130716212324" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="C30D2754-E133-4AFA-B9B2-629C2BEE3E3B_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="8E25A938F00ED34D90F8C49322FDF1928BA332_at_xmb-rcd-x09.cisco.com" -->
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
<strong>Date:</strong> 2013-07-16 17:23:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 23:11 , &quot;David Goodell (dgoodell)&quot; &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2013, at 4:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 16, 2013, at 22:29 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 16, 2013, at 4:22 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Btw, I have a question to you fellow MPI Forum attendees. I just can't remember why the MPI forum felt there was a need for the MPI_Type_get[_true]_extent_x? MPI_Count can't be bigger than MPI_Aint,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it can -- it has to be the largest integer type (i.e., it even has to be able to handle an MPI_Offset).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Technicalities! In the entire standard MPI_Offset is only used to access files, not to build datatypes. As such there is no way to have the extent of an datatype bigger than MPI_Aint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's not true.  You can obtain a datatype with an extent outside the range of an MPI_Aint by nesting types.  Just create a config of size 1, then create a type a very large extent from your contig with MPI_Type_create_resized, then create a second contig of that resized with a count &gt;1.
</span><br>
<p>Sure. But the only reason you create such a nested type is to access files (otherwise you can't go over the MPI_Aint boundary safely). Thus I would have expected the limit to be similar to MPI_Offset and not a new type MPI_Count &#133;
<br>
<p>Oh I see now. MPI_Aint is the largest difference in memory and MPI_Offset is the largest difference for files. Thus, MPI_Count is the largest of the two, so it can adapt in all cases. I'm happy with this conclusion &#133; Thanks everyone.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thus, these accessors returning MPI_Count are a useless overkill, as they cannot offer more precision that what the version returning MPI_Aint is already offering.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PS: I hope nobody has the idea to define the MPI_Offset as a signed type &#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not sure if you're joking here... MPI_Offset must also be signed, again, for Fortran interoperability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<li><strong>Next message:</strong> <a href="12633.php">George Bosilca: "[OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12631.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12617.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
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
