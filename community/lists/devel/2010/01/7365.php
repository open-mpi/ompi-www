<?
$subject_val = "[OMPI devel] RFC: remove btl/gm and pml/dr";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 20:45:33 2010" -->
<!-- isoreceived="20100129014533" -->
<!-- sent="Thu, 28 Jan 2010 20:45:28 -0500" -->
<!-- isosent="20100129014528" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: remove btl/gm and pml/dr" -->
<!-- id="12178BF9-761B-4848-B848-BC39A1A2E2A5_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: remove btl/gm and pml/dr<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-28 20:45:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7366.php">Jeff Squyres: "[OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7364.php">Jeff Squyres: "[OMPI devel] Fwd: Reboot milliways"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove the GM BTL and the dr PML
<br>
<p>WHY: They're old, dead, and haven't changed in years.
<br>
<p>WHERE: ompi/mca/btl/gm and ompi/mca/pml/dr
<br>
<p>WHEN: For v1.5
<br>
<p>TIMEOUT: COB Fri, 5 Feb 2010
<br>
<p>-----
<br>
<p>MORE DETAIL:
<br>
<p>I was trawling through the code base tonight for various insundry reasons and found that we still have the gm BTL and the dr PML.  Is there any particular reason why?
<br>
<p>I know that Myricom has asked to remove gm a few times; I think we kept it &quot;just because&quot;.  How about whacking it for 1.5.0?
<br>
<p>Ditto for dr -- it's old, hasn't kept up with ob1 changes, and never fully worked.  How about whacking it for 1.5.0?
<br>
<p>Both will always be in SVN history if we ever need them again.
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
<li><strong>Next message:</strong> <a href="7366.php">Jeff Squyres: "[OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Previous message:</strong> <a href="7364.php">Jeff Squyres: "[OMPI devel] Fwd: Reboot milliways"</a>
<!-- nextthread="start" -->
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
