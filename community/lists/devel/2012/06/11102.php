<?
$subject_val = "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 14 18:00:34 2012" -->
<!-- isoreceived="20120614220034" -->
<!-- sent="Thu, 14 Jun 2012 18:00:29 -0400" -->
<!-- isosent="20120614220029" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant" -->
<!-- id="94F34E94-843E-4FF3-9283-23C98037D256_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="92759CB1-EE54-430C-9381-3843F56FBEAC_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-14 18:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11103.php">Eugene Loh: "[OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 14, 2012, at 3:53 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe we use that constant in several places to define a static array size - you might check to be safe.
</span><br>
<p>I can't find it used anywhere in the code base other than mpi.h.in.
<br>
<p>It's a non-standard name (i.e., it's not in the MPI spec).   I believe the standard name is MPI_MAX_PORT_NAME (which is OPAL_MAX_PORT_NAME).
<br>
<p><p><span class="quotelev1">&gt; On Jun 14, 2012, at 11:52 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Remove non-standard MPI_MAX_NAME_LEN from mpi.h.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHY: It looks like this was a carryover from LAM/MPI, but it's not in any MPI spec.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: mpi.h
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; TIMEOUT: This seems non-controversial, so I'll set the timeout to the teleconf next Tuesday: June 19, 2012
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; More details:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MAX_NAME_LEN is in mpi.h, but *not* in mpif.h, nor the C++ bindings.  It looks like this is some kind of hold over from LAM/MPI, per the comment in mpi.h:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; #define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port name length, non-std. (LAM &lt; 6.3b1) */
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This really should be removed to avoid confusion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If there's any discussion needed, I'm happy to push back the timeout -- I'm just assuming that there won't need to be any.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11103.php">Eugene Loh: "[OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>Previous message:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>In reply to:</strong> <a href="11101.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<li><strong>Reply:</strong> <a href="11105.php">George Bosilca: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
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
