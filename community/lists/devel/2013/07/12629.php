<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:11:34 2013" -->
<!-- isoreceived="20130716211134" -->
<!-- sent="Tue, 16 Jul 2013 23:11:26 +0200" -->
<!-- isosent="20130716211126" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived datatypes" -->
<!-- id="36372FE2-2DB0-427B-8863-8E6EA9966BE7_at_icl.utk.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F7224BE_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-07-16 17:11:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12630.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>In reply to:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12627.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 23:07 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 16, 2013, at 5:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it can -- it has to be the largest integer type (i.e., it even has to be able to handle an MPI_Offset).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Technicalities! In the entire standard MPI_Offset is only used to access files, not to build datatypes. As such there is no way to have the extent of an datatype bigger than MPI_Aint.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Datatypes are used in FILE_SET_VIEW.
</span><br>
<p>Doesn't matter. There you don't create a datatype, you force one on the view you have of the file. I guess the forum was a little overzealous &#133;
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p><span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12630.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12628.php">David Goodell (dgoodell): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<li><strong>In reply to:</strong> <a href="12625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12627.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
