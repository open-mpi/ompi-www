<?
$subject_val = "[OMPI devel] TKR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 10:05:52 2014" -->
<!-- isoreceived="20140827140552" -->
<!-- sent="Wed, 27 Aug 2014 08:05:43 -0600" -->
<!-- isosent="20140827140543" -->
<!-- name="Orion Poplawski" -->
<!-- email="orion_at_[hidden]" -->
<!-- subject="[OMPI devel] TKR" -->
<!-- id="53FDE5B7.5040605_at_cora.nwra.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] TKR<br>
<strong>From:</strong> Orion Poplawski (<em>orion_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 10:05:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15733.php">Jeff Squyres (jsquyres): "[OMPI devel] SVN -&gt; git conversion: check your email address!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can someone give me a quick overview of the tkr/ignore-tkr split in the 
<br>
fortran bindings?  In the process of updating the Fedora openmpi 
<br>
packages from 1.8.1 in Fedora 21/22 to 1.8.2 we seem to have gone from 
<br>
libmpi_usempi.so to libmpi_usempi_ignore_tkr.so and I'm not sure why.
<br>
<p>checking Fortran compiler ignore TKR syntax... not cached; checking variants
<br>
checking for Fortran compiler support of TYPE(*), DIMENSION(*)... no
<br>
checking for Fortran compiler support of !GCC$ ATTRIBUTES 
<br>
NO_ARG_CHECK... yes
<br>
checking Fortran compiler ignore TKR syntax... 1:type(*), 
<br>
dimension(*):!GCC$ ATTRIBUTES NO_ARG_CHECK ::
<br>
<p><pre>
-- 
Orion Poplawski
Technical Manager                     303-415-9701 x222
NWRA/CoRA Division                    FAX: 303-415-9702
3380 Mitchell Lane                  orion_at_[hidden]
Boulder, CO 80301              <a href="http://www.cora.nwra.com">http://www.cora.nwra.com</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15735.php">Lisandro Dalcin: "Re: [OMPI devel] MPI calls in callback functions during MPI_Finalize()"</a>
<li><strong>Previous message:</strong> <a href="15733.php">Jeff Squyres (jsquyres): "[OMPI devel] SVN -&gt; git conversion: check your email address!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
<li><strong>Reply:</strong> <a href="15738.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] TKR"</a>
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
