<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 12:29:56 2007" -->
<!-- isoreceived="20071015162956" -->
<!-- sent="Mon, 15 Oct 2007 12:29:38 -0400" -->
<!-- isosent="20071015162938" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: versioning OMPI libraries" -->
<!-- id="77E15C23-812B-4C83-90EC-8BEBF1CE6396_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-15 12:29:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16443"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Gleb Natapov: "[OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2447.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2447.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add versioning to all OMPI libraries so that shared libraries  
<br>
use the real version number in the filename (vs. the current &quot;*.so. 
<br>
0.0.0&quot;)
<br>
<p>WHY: It's a Good Thing(tm) to do.
<br>
<p>WHERE: Minor changes in a few Makefile.am's; probably some small  
<br>
tweaking to top-level configure.ac and/or some support m4 files.
<br>
<p>WHEN: After timeout.
<br>
<p>TIMEOUT: COB, Tuesday Oct 23rd, 2007
<br>
<p>-----
<br>
<p>Currently, all OMPI shared libraries are created with the extension  
<br>
&quot;.so.0.0.0&quot;.  We have long discussed using Libtool properly to use a  
<br>
real/meaningful version number instead of &quot;0.0.0&quot; but no one has ever  
<br>
gotten a round tuit.
<br>
<p>I propose that v1.3 is [finally] the time to do this properly.  I'm  
<br>
trolling through the configure/build system for a few other issues; I  
<br>
could pick this up along the way.  My specific proposal is that all  
<br>
shared libraries be suffixed the numeric version number of Open MPI  
<br>
itself.  For example, the first release that uses this functionality  
<br>
will have libmpi.so.1.3.0.
<br>
<p>Note that this still does not enable installing multiple versions of  
<br>
OMPI into the same prefix (for lots of other reasons not covered  
<br>
here), but at least it does allow multiple libraries in the same tree  
<br>
for backwards binary compatibility issues, and gives a visual  
<br>
reference of the library's version number in its filename.
<br>
<p>DSOs will remain un-suffixed (e.g., mca_btl_openib.so).
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
<li><strong>Next message:</strong> <a href="2445.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r16443"</a>
<li><strong>Previous message:</strong> <a href="2443.php">Gleb Natapov: "[OMPI devel] putting common request completion waiting code into separate	inline function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2447.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2447.php">Brian Barrett: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
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
