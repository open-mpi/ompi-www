<?
$subject_val = "[OMPI devel] OFED 1.1 compile problems on trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 09:01:33 2008" -->
<!-- isoreceived="20080123140133" -->
<!-- sent="Wed, 23 Jan 2008 09:01:15 -0500" -->
<!-- isosent="20080123140115" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] OFED 1.1 compile problems on trunk" -->
<!-- id="74E148D6-ADA4-4E09-96D1-DF9F957F0BBD_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] OFED 1.1 compile problems on trunk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-23 09:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3016.php">Ralph H Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We recently brought some code over to the openib btl in the trunk that  
<br>
accidentally broke builds on OFED 1.1 and 1.0.  Attached is a patch  
<br>
that fixes the problem.
<br>
<p>I'll commit the patch tonight because it involves changes to configure.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems


</pre>
<p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3017/openib-ofed1.1.patch">openib-ofed1.1.patch</a>
</ul>
<!-- attachment="openib-ofed1.1.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3018.php">Ralph H Castain: "Re: [OMPI devel] dropping a pls module into an Open MPI build"</a>
<li><strong>Previous message:</strong> <a href="3016.php">Ralph H Castain: "Re: [OMPI devel] OMPI/ORTE and tools"</a>
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
