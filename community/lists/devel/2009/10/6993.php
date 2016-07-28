<?
$subject_val = "[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 21 17:43:40 2009" -->
<!-- isoreceived="20091021214340" -->
<!-- sent="Wed, 21 Oct 2009 19:43:35 -0200" -->
<!-- isosent="20091021214335" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL" -->
<!-- id="e7ba66e40910211443j4a882a8fy842cb2efd691c524_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-21 17:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Reply:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Currently (trunk, just svn update'd), the following call fails
<br>
(because of the ranks=NULL pointer)
<br>
<p>MPI_Group_{incl|excl}(group, 0, NULL, &amp;newgroup)
<br>
<p>BTW, MPI_Group_translate_ranks() has similar issues...
<br>
<p><p>Provided that Open MPI accept the combination (int_array_size=0,
<br>
int_array_ptr=NULL) in other calls, I think it should also accept the
<br>
NULL's in the calls above... What do you think?
<br>
<p><p><pre>
-- 
Lisandro Dalc&#237;n
---------------
Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
Tel/Fax: +54-(0)342-451.1594
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6994.php">Chris Samuel: "Re: [OMPI devel] 0.9.1rc2 is available"</a>
<li><strong>Previous message:</strong> <a href="6992.php">Scott Atchley: "Re: [OMPI devel] why mx_forget in mca_btl_mx_prepare_dst?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
<li><strong>Reply:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI devel] MPI_Group_{incl|exc} with nranks=0 and ranks=NULL"</a>
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
