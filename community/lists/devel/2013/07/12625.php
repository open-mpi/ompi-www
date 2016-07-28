<?
$subject_val = "Re: [OMPI devel] RFC: add support for large counts using derived	datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 16 17:07:27 2013" -->
<!-- isoreceived="20130716210727" -->
<!-- sent="Tue, 16 Jul 2013 21:07:21 +0000" -->
<!-- isosent="20130716210721" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add support for large counts using derived	datatypes" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7224BE_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="E1567E01-ED1D-4FFD-BF5C-AE3626E4A272_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add support for large counts using derived	datatypes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-16 17:07:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12626.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12622.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2013, at 5:03 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Yes, it can -- it has to be the largest integer type (i.e., it even has to be able to handle an MPI_Offset).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Technicalities! In the entire standard MPI_Offset is only used to access files, not to build datatypes. As such there is no way to have the extent of an datatype bigger than MPI_Aint.
</span><br>
<p>Datatypes are used in FILE_SET_VIEW.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12626.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="12624.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>In reply to:</strong> <a href="12622.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
<li><strong>Reply:</strong> <a href="12629.php">George Bosilca: "Re: [OMPI devel] RFC: add support for large counts using derived datatypes"</a>
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
