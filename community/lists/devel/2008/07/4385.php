<?
$subject_val = "[OMPI devel] MCA base component changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 21 16:19:17 2008" -->
<!-- isoreceived="20080721201917" -->
<!-- sent="Mon, 21 Jul 2008 16:19:11 -0400" -->
<!-- isosent="20080721201911" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA base component changes" -->
<!-- id="C4DECD59-4EB7-4E8F-AC7B-812EA188D56F_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MCA base component changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-21 16:19:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
==============
<br>
<p>MCA base component changes were a bit more extensive than we  
<br>
anticipated.  Please test the following hg tree on your systems before  
<br>
we bring it into the SVN trunk this Friday evening:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mca-base-updates/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mca-base-updates/</a>
<br>
<p>Longer version:
<br>
===============
<br>
<p>Per Josh's and my RFCs, we did a bunch of work in a clone-able HG:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mca-base-updates/">http://www.open-mpi.org/hg/hgwebdir.cgi/jsquyres/mca-base-updates/</a>
<br>
<p>After starting, we decided that changing the MCA base revision number  
<br>
to 2.0.0 also meant changing *ALL* the framework version numbers.   
<br>
This is because the same components from framework &lt;foo&gt; compiled with  
<br>
MCA base version 1.x.x would not be binary compatible when compiled  
<br>
with MCA base version 2.0.0 (the mca_base_component_t struct is a  
<br>
different size, for example).  So it seemed like we needed to make a  
<br>
large change: we changed both the MCA base and every framework  
<br>
interface version to v2.0.0, which entails touching every framework  
<br>
base and every component.
<br>
<p>This ended up being a lot bigger change than we anticipated.  But at  
<br>
least the vast majority of the changes are pretty simple s/&lt;version1&gt;/ 
<br>
2.0.0/g kinds of things.  The coll fw was a bit tricky because long  
<br>
ago we prototyped it to handle multiple framework interface versions;  
<br>
so you'll see a bunch of changes in there.
<br>
<p>We have tested what we could, but would *really* appreciate if people  
<br>
could clone and test this hg before we bring it in to the SVN trunk  
<br>
Friday evening (my RFC's timeout was this upcoming Friday evening).
<br>
<p>Thanks.
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
<li><strong>Next message:</strong> <a href="4386.php">Torsten Hoefler: "Re: [OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<li><strong>Previous message:</strong> <a href="4384.php">Jeff Squyres: "[OMPI devel] v1.3: libnbc and sm2 coll components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
<li><strong>Reply:</strong> <a href="4387.php">Brian W. Barrett: "Re: [OMPI devel] MCA base component changes"</a>
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
