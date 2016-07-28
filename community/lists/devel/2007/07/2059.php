<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul 31 17:54:55 2007" -->
<!-- isoreceived="20070731215455" -->
<!-- sent="Tue, 31 Jul 2007 17:54:31 -0400" -->
<!-- isosent="20070731215431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib modular wireup" -->
<!-- id="D32EA5D1-9DE5-4FAE-A837-E8DE055FC881_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-31 17:54:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2058.php">Jeff Squyres: "[OMPI devel] pml failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Short version:
<br>
--------------
<br>
<p>The modular wireup code on /tmp/jms-modular-wireup seems to be  
<br>
working.  Can people give it a whirl before I bring it back to the  
<br>
trunk?  The more esoteric your hardware setup, the better.
<br>
<p>Longer version:
<br>
---------------
<br>
<p>I think that I have completed round 1 of the modular wireup work in / 
<br>
tmp/jms-modular-wireup, meaning that all the wireup code has been  
<br>
moved out of btl_openib_endpoint.* and into connect/*.  The  
<br>
endpoint.c file now simply calls the connect interface through a  
<br>
function pointer (allowing the choice of the current RML-based wireup  
<br>
or the RDMA CM).  The selected connect &quot;module&quot; will call back to the  
<br>
openib endpoint for two things:
<br>
<p>1. post receive buffers on a locally-created-but-not-yet-connected qp
<br>
2. when the qp is fully connected and ready to be used
<br>
<p>This cleaned up the endpoint.* code a *lot*.  I also simplified the  
<br>
RML connection code a bit -- I removed some useless sub-functions, etc.
<br>
<p>I *think* that this new connection code is all working, but per  
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2007/07/2058.php">http://www.open-mpi.org/community/lists/devel/2007/07/2058.php</a>, I'm  
<br>
seeing other weird failures so I'm a little reluctant to put this  
<br>
back on the trunk until I know that everything is working properly.   
<br>
Granted, the failures in the other post sound like pml errors and  
<br>
this should be a wholly separate issue (we would get different  
<br>
warnings/errors if the btl failed to connect), but still -- it seems  
<br>
a little safer to be prudent.
<br>
<p>Still to do:
<br>
<p>- make the static rate be exchanged and set properly during the RML  
<br>
wireup
<br>
- RDMA CM support (it returns ERR_NOT_IMPLEMENTED right now)
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
<li><strong>Next message:</strong> <a href="2060.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2058.php">Jeff Squyres: "[OMPI devel] pml failures?"</a>
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
