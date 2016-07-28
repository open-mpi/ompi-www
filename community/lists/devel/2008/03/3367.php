<?
$subject_val = "[OMPI devel] plpa upgrade";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 23:37:40 2008" -->
<!-- isoreceived="20080305043740" -->
<!-- sent="Tue, 4 Mar 2008 23:36:23 -0500" -->
<!-- isosent="20080305043623" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] plpa upgrade" -->
<!-- id="703A2E19-22E0-4E2D-A97D-59F445388A33_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] plpa upgrade<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-04 23:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Jeff Squyres: "[OMPI devel] Parallel debugger integration"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am now reasonable sure that the trunk plpa upgrade has been  
<br>
completed successfully.  You will still need to remove the old &quot;plpa&quot;  
<br>
directory when you &quot;svn up&quot;:
<br>
<p>cd path/to/your/ompi/checkout
<br>
rm -rf opal/mca/paffinity/linux/plpa
<br>
svn up
<br>
<p>That shouldn't be necessary, but apparently I borked up somewhere  
<br>
along the line in the merge and couldn't figure out how to un-bork it  
<br>
(I can explain if anyone cares).  I'm sorry about that.  :-\
<br>
<p>Please let me know if you run into any problems.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3368.php">Jeff Squyres: "[OMPI devel] Parallel debugger integration"</a>
<li><strong>Previous message:</strong> <a href="3366.php">Aur&#233;lien Bouteiller: "[OMPI devel] Orte cleanup"</a>
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
