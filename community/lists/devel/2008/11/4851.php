<?
$subject_val = "[OMPI devel] RFC: libopen-rte --&gt; libompi-rte";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 12:38:53 2008" -->
<!-- isoreceived="20081106173853" -->
<!-- sent="Thu, 6 Nov 2008 12:38:33 -0500" -->
<!-- isosent="20081106173833" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: libopen-rte --&amp;gt; libompi-rte" -->
<!-- id="A2DDB39A-A51B-40D4-A388-1BE682634462_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: libopen-rte --&gt; libompi-rte<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 12:38:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4852.php">vladimir marjanovic: "[OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="4850.php">Richard Graham: "Re: [OMPI devel] Dec ORTE design meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Rename libopen-rte to be libompi-rte (and probably other  
<br>
supporting text)
<br>
<p>WHY: ORTE is really quite specific to OMPI.  We decided long ago that  
<br>
ORTE would not split off from OMPI, and it has been specifically  
<br>
tailored for OMPI.  Indeed, Ralph has recently been expanding &quot;ORTE&quot;  
<br>
to &quot;OMPI Run Time Environment&quot;.  So let's name the library what it  
<br>
really is.
<br>
<p>WHERE: See attached patch; basically, a bunch of Makefile.am's
<br>
<p>WHEN: Before v1.3
<br>
<p>TIMEOUT: Teleconference, Tues 11 Nov 2008
<br>
<p>--------------
<br>
<p>The change is fairly minor, and 98% of OMPI users won't notice.  Only  
<br>
those who are not using wrapper compilers properly will notice the  
<br>
change (and they should be using the wrapper compilers; we strongly  
<br>
recommended that everyone either directly use the wrapper compilers to  
<br>
compile/link their apps, or use the wrappers to get the required flags  
<br>
[including library names] to compile/link their apps).
<br>
<p>I don't know if Sun has any policies about library name changes  
<br>
between versions, or if it'll create problems since CT8 has already  
<br>
been released. As a history note, we changed this library name in v1.2  
<br>
from &quot;liborte&quot; to &quot;libopen-rte&quot;.  This would be another change.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4851/libompi-rte.patch">libompi-rte.patch</a>
</ul>
<!-- attachment="libompi-rte.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4852.php">vladimir marjanovic: "[OMPI devel] Progress of the asynchronous messages"</a>
<li><strong>Previous message:</strong> <a href="4850.php">Richard Graham: "Re: [OMPI devel] Dec ORTE design meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4853.php">Brian W. Barrett: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
<li><strong>Reply:</strong> <a href="4860.php">Terry Dontje: "Re: [OMPI devel] RFC: libopen-rte --&gt; libompi-rte"</a>
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
