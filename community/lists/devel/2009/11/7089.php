<?
$subject_val = "[OMPI devel] RFC: Revamped topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 21:13:27 2009" -->
<!-- isoreceived="20091105021327" -->
<!-- sent="Wed, 4 Nov 2009 21:13:18 -0500" -->
<!-- isosent="20091105021318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Revamped topo framework" -->
<!-- id="58BA9438-2222-41A1-9CF2-1E8CD575AEBB_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Revamped topo framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-04 21:13:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Previous message:</strong> <a href="7088.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Reply:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Revamp the topo framework to be more consistent with the rest of  
<br>
the code base
<br>
<p>WHY: The code was ancient, inconsistent with the rest of the code  
<br>
base, and had some latent bugs.  It would actually have been  
<br>
impossible to have a 2nd topo component.
<br>
<p>WHEN: Now
<br>
<p>WHERE: ompi/mca/topo/*, ompi/debuggers/*, ompi/communicator/*, ompi/ 
<br>
mpi/c
<br>
<p>TIMEOUT: COB Monday, 9 Nov 2009
<br>
<p>As discussed a few days ago on this list, I revamped the OMPI topo  
<br>
framework to make it more modern / like all the other frameworks (it  
<br>
was written way back near the very beginning of this project and has  
<br>
barely been modified since).  I fixed some latent bugs (which weren't  
<br>
evident because we only have the 1 topo component -- unity) and made  
<br>
the selection scheme much more consistent with the rest of the code  
<br>
base.
<br>
<p>The code can be found here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
<br>
<p>Attached is a patch against the SVN trunk, r22197.  If no one has any  
<br>
objections / suggestions / comments, I plan to commit this work by COB  
<br>
next Monday, 9 Nov 2009.
<br>
<p>This RFC has a short timeout because I expect this to not be  
<br>
controversial and I already mentioned this on the list a few days ago.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7089/topo-revamp.patch">topo-revamp.patch</a>
</ul>
<!-- attachment="topo-revamp.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7090.php">Christopher Yeoh: "Re: [OMPI devel] MPI_Grequest_start and MPI_Wait clarification"</a>
<li><strong>Previous message:</strong> <a href="7088.php">Samuel K. Gutierrez: "Re: [OMPI devel] Open MPI v1.3.4rc4 is out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
<li><strong>Reply:</strong> <a href="7104.php">Jeff Squyres: "Re: [OMPI devel] RFC: Revamped topo framework"</a>
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
