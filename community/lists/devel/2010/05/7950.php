<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 17:26:37 2010" -->
<!-- isoreceived="20100517212637" -->
<!-- sent="Mon, 17 May 2010 17:26:33 -0400" -->
<!-- isosent="20100517212633" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="618A1160-FDE2-47BB-890F-62D454B4A9D3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D72E0D90-A1E4-40B4-90A9-73FAE8BC43B7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 17:26:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7949.php">Jeff Squyres: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7937.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2010, at 4:39 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; So, to ensure I understand, you are proposing that we completely eliminate the paffinity framework and commit to hwloc in its place?
</span><br>
<p>I think there's 2 issues here:
<br>
<p>- topology information
<br>
- binding
<br>
<p>hwloc supports both.  paffinity mainly supports binding; it also supports some minor socket/core mapping information stuff, but mainly as a means to support binding better.  hwloc's topology information is far more complete than paffinity's.
<br>
<p>How about this?  (and this is very half-baked)
<br>
<p>- commit hwloc to opal/hwloc; the entire tree can call it
<br>
&nbsp;&nbsp;- it's still TBD how to compile this out (e.g., for embedded environments)
<br>
&nbsp;&nbsp;- it *may* need something like #if OPAL_HAVE_HWLOC
<br>
- split paffinity into two frameworks (because some OS's support one and not the other):
<br>
&nbsp;&nbsp;- binding: just for getting and setting processor affinity
<br>
&nbsp;&nbsp;- hwmap: just for mapping (board, socket, core, hwthread) &lt;--&gt; OS processor ID
<br>
<p>In this way, if hwloc ever dies, we can still have OS-specific plugins for these two things, and the #if OPAL_HAVE_HWLOC will be 0.
<br>
<p>hwloc provides a very rich API for traversing the topology information; I don't think the main OPAL/ORTE/OMPI code base necessarily needs all of that functionality for the general case -- i.e., the binding/hwmap information (e.g., just want to bind a process to (board 1, socket 3, core 2, hwthread 1)).  
<br>
<p>Anything that needs the detailed hwloc information (e.g., tuning the sm btl based on cache sizes reported by hwloc) can use #if OPAL_HAVE_HWLOC to protect itself.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7949.php">Jeff Squyres: "Re: [OMPI devel] Very poor performance with btl sm on twin nehalem servers with Mellanox ConnectX installed"</a>
<li><strong>In reply to:</strong> <a href="7937.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7951.php">Barrett, Brian W: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
