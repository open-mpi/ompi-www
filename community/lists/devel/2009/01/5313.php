<?
$subject_val = "[OMPI devel] koenig-btl addition: r20352";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 17:29:13 2009" -->
<!-- isoreceived="20090126222913" -->
<!-- sent="Mon, 26 Jan 2009 17:29:06 -0500" -->
<!-- isosent="20090126222906" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] koenig-btl addition: r20352" -->
<!-- id="ABB407EE-CE5D-4872-9459-7D63B1F7BFC9_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] koenig-btl addition: r20352<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 17:29:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Laurent (I'm assuming Laurent is on devel; I don't have an e-mail  
<br>
address for him):
<br>
<p>In r20352, you added the BTL tree in the onet directory.  I think  
<br>
there are a few problems with this commit:
<br>
<p>- you didn't svn copy or svn move from the btl tree, so all history  
<br>
will be lost, and merging in changes from the trunk will be a PITA  
<br>
(well, they'll likely be a PITA anyway...?)
<br>
- it looks like you did a &quot;svn add&quot; which included all the  
<br>
automatically-generated files (e.g., .deps, static- 
<br>
components.h, ...possibly others)
<br>
<p>Also, I thought it was agreed that ORNL would be committing back the  
<br>
name changes and other small things first (e.g., OMPI_HETEROGENEOUS -&gt;  
<br>
OPAL_HETEROGENEOUS) before doing the directory moves in order to be  
<br>
able to apply small changes to the trunk incrementally.  Has that  
<br>
changed?
<br>
<p>FWIW, if you do the directory moves *first*:
<br>
<p>- you'll have a [much] larger &quot;time window of vulnerability&quot; for  
<br>
changes to BTLs on the trunk that need to be hand-applied to your  
<br>
moved directories
<br>
- the small changes that we talked about (e.g., s/OMPI/OPAL/) will  
<br>
likely need to be done in a different branch and merged to the trunk  
<br>
*and* to your directory-move branch
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
<li><strong>Next message:</strong> <a href="5314.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5312.php">Jeff Squyres: "Re: [OMPI devel] Heterogeneous OpenFabrics hardware"</a>
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
