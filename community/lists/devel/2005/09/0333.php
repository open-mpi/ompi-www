<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 12 16:07:21 2005" -->
<!-- isoreceived="20050912210721" -->
<!-- sent="Mon, 12 Sep 2005 17:07:14 -0400" -->
<!-- isosent="20050912210714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="svn merge: lessons learned" -->
<!-- id="00d3f936a4057d033851d5350e7f049b_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-12 16:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lesson learned the hard way...
<br>
<p>If you're going to make a branch into /tmp, it is STRONGLY ADVISED to 
<br>
cp an ***UNMODIFIED /trunk*** (i.e., do not have any local edits on the 
<br>
/trunk that you're copying).  Then make/apply all your changes in a new 
<br>
checkout of your /tmp tree and go from there.
<br>
<p>This will make it SIGNIFICANTLY easier to merge your /tmp branch back 
<br>
into the trunk when you're done.
<br>
<p>Just FYI.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0334.php">Nathan DeBardeleben: "64bit shared library problems"</a>
<li><strong>Previous message:</strong> <a href="0332.php">Ferris McCormick: "Re:  ompi_info Seg Fault, missing component -- linux"</a>
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
