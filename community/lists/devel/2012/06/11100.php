<?
$subject_val = "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 13:52:36 2012" -->
<!-- isoreceived="20120614175236" -->
<!-- sent="Thu, 14 Jun 2012 13:52:24 -0400" -->
<!-- isosent="20120614175224" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant" -->
<!-- id="59DCEEBC-DD6D-48BD-87BE-6A354C0D6F99_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 13:52:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove non-standard MPI_MAX_NAME_LEN from mpi.h.
<br>
<p>WHY: It looks like this was a carryover from LAM/MPI, but it's not in any MPI spec.
<br>
<p>WHERE: mpi.h
<br>
<p>TIMEOUT: This seems non-controversial, so I'll set the timeout to the teleconf next Tuesday: June 19, 2012
<br>
<p>------
<br>
<p>More details:
<br>
<p>MPI_MAX_NAME_LEN is in mpi.h, but *not* in mpif.h, nor the C++ bindings.  It looks like this is some kind of hold over from LAM/MPI, per the comment in mpi.h:
<br>
<p>#define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port name length, non-std. (LAM &lt; 6.3b1) */
<br>
<p>This really should be removed to avoid confusion.
<br>
<p>If there's any discussion needed, I'm happy to push back the timeout -- I'm just assuming that there won't need to be any.
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
<li><strong>Next message:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11099.php">Jeff Squyres: "Re: [OMPI devel] RFC: hide btl segment keys within btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
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
