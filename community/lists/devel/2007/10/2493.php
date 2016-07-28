<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 23:03:32 2007" -->
<!-- isoreceived="20071024030332" -->
<!-- sent="Tue, 23 Oct 2007 20:02:40 -0700" -->
<!-- isosent="20071024030240" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] FD leak in Altix timer code?" -->
<!-- id="471EB5D0.3070006_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 23:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Reply:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was just looking at the Altix timer code in the OMPI trunk and unless 
<br>
I am missing something, the fd opened in opal_timer_altix_open() is 
<br>
never closed.  It can be safely closed right after the mmap().
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2494.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Previous message:</strong> <a href="2492.php">Brian Barrett: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
<li><strong>Reply:</strong> <a href="2501.php">Jeff Squyres: "Re: [OMPI devel] FD leak in Altix timer code?"</a>
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
