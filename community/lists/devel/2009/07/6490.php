<?
$subject_val = "[OMPI devel] fortran MPI_COMPLEX datatype broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 21 20:44:16 2009" -->
<!-- isoreceived="20090722004416" -->
<!-- sent="Tue, 21 Jul 2009 20:44:09 -0400" -->
<!-- isosent="20090722004409" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] fortran MPI_COMPLEX datatype broken" -->
<!-- id="C5030A87-D8DA-4430-A681-B04A905EEDBC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] fortran MPI_COMPLEX datatype broken<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-21 20:44:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Reply:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The extent for MPI_COMPLEX is returning 0.
<br>
<p>This is causing many the intel Fortran tests to fail, because they  
<br>
loop over testing types, and MPI_COMPLEX is one of those types.   
<br>
Specifically, you get a floating point exception because the intel  
<br>
test computes (size / extent), and extent==0, so it's a division by 0.
<br>
<p>I'm not sure where this happened, but it's feels like something in the  
<br>
new DDT code...?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Previous message:</strong> <a href="6489.php">Jeff Squyres: "Re: [OMPI devel] autodetect broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
<li><strong>Reply:</strong> <a href="6491.php">Jeff Squyres: "Re: [OMPI devel] fortran MPI_COMPLEX datatype broken"</a>
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
