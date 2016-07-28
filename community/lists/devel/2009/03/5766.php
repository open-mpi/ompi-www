<?
$subject_val = "[OMPI devel] custom btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 11:15:18 2009" -->
<!-- isoreceived="20090331151518" -->
<!-- sent="Tue, 31 Mar 2009 17:15:08 +0200" -->
<!-- isosent="20090331151508" -->
<!-- name="Roberto Ammendola" -->
<!-- email="roberto.ammendola_at_[hidden]" -->
<!-- subject="[OMPI devel] custom btl" -->
<!-- id="49D2337C.3050005_at_roma2.infn.it" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] custom btl<br>
<strong>From:</strong> Roberto Ammendola (<em>roberto.ammendola_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 11:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
<li><strong>Previous message:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
<li><strong>Reply:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all, I am developing a btl module for a custom interconnect board (we 
<br>
call it apelink, it's an academic project), and I am porting the module 
<br>
from 1.2 (at which it used to work) to 1.3 branch. Two issues:
<br>
<p>1) the use of pls_rsh_agent is said to be deprecated. How do I spawn the 
<br>
jobs using rsh, then?
<br>
<p>2) although compilation is fine, i get a
<br>
<p>[gozer1:18640] mca: base: component_find: &quot;mca_btl_apelink&quot; does not 
<br>
appear to be a valid btl MCA dynamic component (ignored)
<br>
<p>already with an ompi_info command. Probably something changed in the 1.3 
<br>
branch regarding DSO, which I should implement in my btl. Any hint?
<br>
<p>thanks
<br>
roberto
<br>
<p><pre>
-- 
______________________________________________________________________
     Roberto Ammendola    INFN - Roma II - APE group
tel: +39-0672594504  email: roberto.ammendola_at_[hidden]   // \
     Via della Ricerca Scientifica 1 - 00133 Roma             \\_/ //
__________________________________________  ''-.._.-''-.._.. -(||)(')
                                                              '''
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
<li><strong>Previous message:</strong> <a href="5765.php">Jeff Squyres: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
<li><strong>Reply:</strong> <a href="5767.php">Jeff Squyres: "Re: [OMPI devel] custom btl"</a>
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
