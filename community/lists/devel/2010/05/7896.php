<?
$subject_val = "[OMPI devel] malloc(0) warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 20:17:35 2010" -->
<!-- isoreceived="20100506001735" -->
<!-- sent="Wed, 5 May 2010 21:17:29 -0300" -->
<!-- isosent="20100506001729" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] malloc(0) warnings" -->
<!-- id="i2me7ba66e41005051717ue1358952q6f489bb05259731_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] malloc(0) warnings<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 20:17:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After building 1.4.2 with debug flags to configure, I get this (I've
<br>
got these warnings in previous releases, too):
<br>
<p>malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
<br>
malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
<br>
malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
<br>
malloc debug: Request for 0 bytes (coll_inter_gatherv.c, 94)
<br>
<p>malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
<br>
malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
<br>
malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
<br>
malloc debug: Request for 0 bytes (coll_inter_scatterv.c, 82)
<br>
<p><p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (INTEC/CONICET-UNL)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
Tel: +54-342-4511594 (ext 1011)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Previous message:</strong> <a href="7895.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory forOpenMPI:Request	forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7897.php">Jeff Squyres: "Re: [OMPI devel] malloc(0) warnings"</a>
<li><strong>Reply:</strong> <a href="7898.php">George Bosilca: "Re: [OMPI devel] malloc(0) warnings"</a>
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
