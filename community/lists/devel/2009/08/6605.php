<?
$subject_val = "[OMPI devel] sm_coll segv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  6 17:18:58 2009" -->
<!-- isoreceived="20090806211858" -->
<!-- sent="Thu, 6 Aug 2009 17:18:52 -0400" -->
<!-- isosent="20090806211852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] sm_coll segv" -->
<!-- id="FAEB88E1-E23A-4295-B32A-019940311781_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] sm_coll segv<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-06 17:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, with Terry's help, I found a segv in the coll sm.  If you run  
<br>
without the sm btl, there's an obvious bad parameter that we're  
<br>
passing that results in a segv.
<br>
<p>LANL -- can you confirm / deny that these are the segv's that you were  
<br>
seeing?
<br>
<p>While fixing this, I noticed that the sm btl and sm coll are sharing  
<br>
an mpool when both are running.  This probably used to be a good idea  
<br>
way back when (e.g., when we were using a lot more shmem than we  
<br>
needed and core counts were lower), but it seems like a bad idea now  
<br>
(e.g., the btl/sm is fairly specific about the size of the mpool that  
<br>
is created -- it's just big enough for its data structures).
<br>
<p>I'm therefore going to change the mpool string names that btl/sm and  
<br>
coll/sm are looking for so that they get unique sm mpool modules.
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
<li><strong>Next message:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Previous message:</strong> <a href="6604.php">Jeff Squyres: "Re: [OMPI devel] Device failover on ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6606.php">Jeff Squyres: "Re: [OMPI devel] sm_coll segv"</a>
<li><strong>Reply:</strong> <a href="6607.php">Ralph Castain: "Re: [OMPI devel] sm_coll segv"</a>
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
