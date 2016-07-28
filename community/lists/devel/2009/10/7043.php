<?
$subject_val = "[OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 10:20:05 2009" -->
<!-- isoreceived="20091028142005" -->
<!-- sent="Wed, 28 Oct 2009 10:20:00 -0400" -->
<!-- isosent="20091028142000" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: revamp topo framework" -->
<!-- id="293A5EAA-5BFE-4237-9CCC-27841641752C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: revamp topo framework<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 10:20:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Revamp the topo base to make it like the rest of the OMPI  
<br>
frameworks.
<br>
<p>WHY: topo was written way back at the beginning of time and is showing  
<br>
its age (i.e., other frameworks have advanced while topo has not).   
<br>
Someone is interested in possibly writing a new topo component, so it  
<br>
seems an opprotune time to revamp the framework (i.e., before they  
<br>
start).
<br>
<p>WHERE: Mostly in ompi/mca/topo, but some in ompi/communicator/, too
<br>
<p>WHEN: 1.5.x sometime
<br>
<p>TIMEOUT: Next Tuesday teleconf; Nov 3
<br>
<p>More details
<br>
------------
<br>
<p>Per <a href="http://www.open-mpi.org/community/lists/devel/2009/10/7041.php">http://www.open-mpi.org/community/lists/devel/2009/10/7041.php</a>,  
<br>
there are some shortcomings to the topo framework.  It pretty much  
<br>
reflects the fact that it was written way back near the beginning of  
<br>
the ompi project and has not been updated since.
<br>
<p>I'd like to revamp it to have OBJ-based modules, per-communicator  
<br>
component/module selections, etc.  This would be similar to (but  
<br>
simpler than) the coll framework.
<br>
<p>I've started an hg for this work:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/ompi-topo-fixes/">http://bitbucket.org/jsquyres/ompi-topo-fixes/</a>
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7042.php">Christopher Yeoh: "[OMPI devel] mpool rdma deadlock"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7044.php">Edgar Gabriel: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
