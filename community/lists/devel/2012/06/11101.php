<?
$subject_val = "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 15:53:28 2012" -->
<!-- isoreceived="20120614195328" -->
<!-- sent="Thu, 14 Jun 2012 13:53:21 -0600" -->
<!-- isosent="20120614195321" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant" -->
<!-- id="92759CB1-EE54-430C-9381-3843F56FBEAC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59DCEEBC-DD6D-48BD-87BE-6A354C0D6F99_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 15:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe we use that constant in several places to define a static array size - you might check to be safe.
<br>
<p>On Jun 14, 2012, at 11:52 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove non-standard MPI_MAX_NAME_LEN from mpi.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: It looks like this was a carryover from LAM/MPI, but it's not in any MPI spec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: mpi.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: This seems non-controversial, so I'll set the timeout to the teleconf next Tuesday: June 19, 2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_MAX_NAME_LEN is in mpi.h, but *not* in mpif.h, nor the C++ bindings.  It looks like this is some kind of hold over from LAM/MPI, per the comment in mpi.h:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port name length, non-std. (LAM &lt; 6.3b1) */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This really should be removed to avoid confusion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If there's any discussion needed, I'm happy to push back the timeout -- I'm just assuming that there won't need to be any.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Previous message:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11100.php">Jeff Squyres: "[OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
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
