<?
$subject_val = "[OMPI devel] RFC: deprecating the MPI C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 12 16:49:38 2012" -->
<!-- isoreceived="20121212214938" -->
<!-- sent="Wed, 12 Dec 2012 16:49:33 -0500" -->
<!-- isosent="20121212214933" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: deprecating the MPI C++ bindings" -->
<!-- id="F3517A8F-23CF-474B-ABEA-545094928E8C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: deprecating the MPI C++ bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-12 16:49:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11849.php">Ralph Castain: "[OMPI devel] Open MPI videos"</a>
<li><strong>Previous message:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Stop building the MPI C++ bindings by default for v1.9
<br>
<p>WHY: The MPI-3.0 spec removed the MPI C++ bindings
<br>
<p>WHERE: flip the switch in configure (on the trunk)
<br>
<p>WHEN: January, 2013
<br>
<p>MORE DETAIL:
<br>
<p>The MPI-3.0 spec removed the MPI C++ bindings, but allow implementations to continue providing them if they want to.  We might as well start the long, slow process of getting rid of the MPI C++ bindings.  
<br>
<p>We discussed last week in the developer's meeting about flipping the default in configure such that it won't build the MPI C++ bindings by default starting with Open MPI v1.9.  This can be done on the trunk in January, 2013.
<br>
<p>We can discuss the removal of the C++ bindings at some future date (beyond v1.9/v2.0).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11849.php">Ralph Castain: "[OMPI devel] Open MPI videos"</a>
<li><strong>Previous message:</strong> <a href="11847.php">Josh Hursey: "Re: [OMPI devel] CRIU checkpoint support in Open-MPI?"</a>
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
