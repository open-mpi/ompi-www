<?
$subject_val = "[OMPI devel] big change: r16968";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 15 08:36:37 2007" -->
<!-- isoreceived="20071215133637" -->
<!-- sent="Sat, 15 Dec 2007 08:36:26 -0500" -->
<!-- isosent="20071215133626" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] big change: r16968" -->
<!-- id="8E39A822-94F3-47F7-B6AB-D85FE320E909_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] big change: r16968<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-15 08:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2860.php">Gleb Natapov: "Re: [OMPI devel] rb rcache component"</a>
<li><strong>Previous message:</strong> <a href="2858.php">Jeff Squyres: "[OMPI devel] rb rcache component"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<a href="https://svn.open-mpi.org/trac/ompi/changeset/16968">https://svn.open-mpi.org/trac/ompi/changeset/16968</a> changed many  
<br>
Makefile.am's in the tree.  While you don't *need* to do an autogen/ 
<br>
configure, it may actually be quicker to do so (vs. waiting through a  
<br>
normal build which will use config.status to rebuild almost every  
<br>
Makefile.in/Makefile from the changed Makefile.am).
<br>
<p>This commit changes components to not link against the OPAL, ORTE, and  
<br>
OMPI libraries.  Please note this for all new components: do *not*  
<br>
have them link against our libraries.
<br>
<p>The reasons for this change are long and tangled; see <a href="https://svn.open-mpi.org/trac/ompi/wiki/Linkers">https://svn.open-mpi.org/trac/ompi/wiki/Linkers</a> 
<br>
&nbsp;&nbsp;if you care for the reasons why.
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
<li><strong>Next message:</strong> <a href="2860.php">Gleb Natapov: "Re: [OMPI devel] rb rcache component"</a>
<li><strong>Previous message:</strong> <a href="2858.php">Jeff Squyres: "[OMPI devel] rb rcache component"</a>
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
