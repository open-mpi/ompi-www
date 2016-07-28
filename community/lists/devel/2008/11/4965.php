<?
$subject_val = "[OMPI devel] make dependency problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 29 18:42:20 2008" -->
<!-- isoreceived="20081129234220" -->
<!-- sent="Sat, 29 Nov 2008 15:45:49 -0800" -->
<!-- isosent="20081129234549" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] make dependency problem?" -->
<!-- id="4931D42D.9040201_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] make dependency problem?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-29 18:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Previous message:</strong> <a href="4964.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI: FYI did You notice Open MPI @ Amazon's Cloud computing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I was playing with OMPI and I noticed that if I modified btl.h, bml_r2.c 
<br>
did not automatically get rebuilt, even though it includes btl.h.  This 
<br>
caused me all sorts of unnecessary debugging troubles.  In the end, just 
<br>
touching bml_r2.c was enough... it caused bml_r2.c to be recompiled and 
<br>
to see the changes in btl.h.
<br>
<p>So, question:
<br>
<p>Given that bml_rc.2 includes btl.h, wouldn't the proper make 
<br>
dependencies cause bml_rc.c to be recompiled whenever btl.h is touched?
<br>
<p>Again, it appears that this is not happening and that strikes me as a 
<br>
problem -- for someone out there to fix.  :^)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Previous message:</strong> <a href="4964.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI: FYI did You notice Open MPI @ Amazon's Cloud computing?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/4966.php">Jeff Squyres: "Re: [OMPI devel] make dependency problem?"</a>
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
