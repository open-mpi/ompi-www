<?
$subject_val = "[OMPI devel] Still seeing hangs in OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 22 13:32:51 2008" -->
<!-- isoreceived="20080822173251" -->
<!-- sent="Fri, 22 Aug 2008 13:32:32 -0400" -->
<!-- isosent="20080822173232" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Still seeing hangs in OMPI 1.3" -->
<!-- id="48AEF830.9080205_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] Still seeing hangs in OMPI 1.3<br>
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-22 13:32:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George:
<br>
<p>We are still seeing hangs in OMPI 1.3 which I assume are due to the PML 
<br>
issue.  However, we do not see it in the trunk.  My investigation is 
<br>
early, but I am wondering if the merge of the changes into v1.3 may be 
<br>
missing a file.  From the original fix in the trunk, I see the following:
<br>
<p>Changeset 19309 (trunk)
<br>
btl_sm.c  (modified)  (2 diffs)
<br>
btl_sm_component.c (modified) (7 diffs)
<br>
btl_sm_fifo.h (modified) (1 diff)
<br>
<p>For the ompi v1.3 I see this:
<br>
Changeset 19378 (v1.3)
<br>
btl/sm/btl_sm.c (modified) (1 diff)
<br>
btl/sm/btl_sm_component.c (modified) (2 diffs)
<br>
coll/sm/coll_sm_module.c (modified) (1 diff)
<br>
pml/ob1/pml_ob1_sendreq.c (modified) (1 diff)
<br>
<p>The 1.3 changeset has those two extra files, but they were just 
<br>
formatting fixes.  So, my concern is the missing btl_sm_fifo.h change in 
<br>
1.3.  I have not tried it out yet, but wanted to see if anyone else is 
<br>
still seeing 1.3 hangs.
<br>
<p>Rolf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="4602.php">Tim Mattox: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Maybe reply:</strong> <a href="4604.php">Graham, Richard L.: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="4605.php">Rolf vandeVaart: "Re: [OMPI devel] Still seeing hangs in OMPI 1.3"</a>
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
