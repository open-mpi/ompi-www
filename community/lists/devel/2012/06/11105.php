<?
$subject_val = "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 15 09:49:16 2012" -->
<!-- isoreceived="20120615134916" -->
<!-- sent="Fri, 15 Jun 2012 15:49:11 +0200" -->
<!-- isosent="20120615134911" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant" -->
<!-- id="26298120-9BBB-4266-B4A7-E7FEC9FA62B0_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="94F34E94-843E-4FF3-9283-23C98037D256_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-15 09:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>In reply to:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed MPI_MAX_PORT_NAME is the right constant. A quick check indicate we're using the right one, so feel free to remove this little piece of historic LAM heritage.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 15, 2012, at 00:00 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 14, 2012, at 3:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe we use that constant in several places to define a static array size - you might check to be safe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't find it used anywhere in the code base other than mpi.h.in.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a non-standard name (i.e., it's not in the MPI spec).   I believe the standard name is MPI_MAX_PORT_NAME (which is OPAL_MAX_PORT_NAME).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 14, 2012, at 11:52 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Remove non-standard MPI_MAX_NAME_LEN from mpi.h.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: It looks like this was a carryover from LAM/MPI, but it's not in any MPI spec.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: mpi.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: This seems non-controversial, so I'll set the timeout to the teleconf next Tuesday: June 19, 2012
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_MAX_NAME_LEN is in mpi.h, but *not* in mpif.h, nor the C++ bindings.  It looks like this is some kind of hold over from LAM/MPI, per the comment in mpi.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define MPI_MAX_NAME_LEN         MPI_MAX_PORT_NAME     /* max port name length, non-std. (LAM &lt; 6.3b1) */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This really should be removed to avoid confusion.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If there's any discussion needed, I'm happy to push back the timeout -- I'm just assuming that there won't need to be any.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11106.php">Josh Hursey: "Re: [OMPI devel] Modex"</a>
<li><strong>Previous message:</strong> <a href="11104.php">George Bosilca: "Re: [OMPI devel] Barrier/coll_tuned/pml_ob1 segfault for derived data types"</a>
<li><strong>In reply to:</strong> <a href="11102.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove non-standard MPI_MAX_NAME_LEN constant"</a>
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
