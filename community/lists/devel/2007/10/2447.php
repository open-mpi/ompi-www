<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 15 13:08:56 2007" -->
<!-- isoreceived="20071015170856" -->
<!-- sent="Mon, 15 Oct 2007 13:08:50 -0400" -->
<!-- isosent="20071015170850" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: versioning OMPI libraries" -->
<!-- id="076D5FDF-0909-40FD-A1DF-8F057EED6CC3_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="77E15C23-812B-4C83-90EC-8BEBF1CE6396_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-15 13:08:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Richard Graham: "[OMPI devel] FW: [devel-core] [RFC] Proposed changes to ompi_free_list"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nooooo! :)
<br>
<p>It would be good for everyone to read the Libtool documentation to  
<br>
see why versioning on the release number would be a really bad idea.   
<br>
Then comment.  But my opinion would be that you should change based  
<br>
on interface changes, not based on release numbers.
<br>
<p><p>Brian
<br>
<p>On Oct 15, 2007, at 12:29 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Add versioning to all OMPI libraries so that shared libraries
</span><br>
<span class="quotelev1">&gt; use the real version number in the filename (vs. the current &quot;*.so.
</span><br>
<span class="quotelev1">&gt; 0.0.0&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: It's a Good Thing(tm) to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Minor changes in a few Makefile.am's; probably some small
</span><br>
<span class="quotelev1">&gt; tweaking to top-level configure.ac and/or some support m4 files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: After timeout.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB, Tuesday Oct 23rd, 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently, all OMPI shared libraries are created with the extension
</span><br>
<span class="quotelev1">&gt; &quot;.so.0.0.0&quot;.  We have long discussed using Libtool properly to use a
</span><br>
<span class="quotelev1">&gt; real/meaningful version number instead of &quot;0.0.0&quot; but no one has ever
</span><br>
<span class="quotelev1">&gt; gotten a round tuit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I propose that v1.3 is [finally] the time to do this properly.  I'm
</span><br>
<span class="quotelev1">&gt; trolling through the configure/build system for a few other issues; I
</span><br>
<span class="quotelev1">&gt; could pick this up along the way.  My specific proposal is that all
</span><br>
<span class="quotelev1">&gt; shared libraries be suffixed the numeric version number of Open MPI
</span><br>
<span class="quotelev1">&gt; itself.  For example, the first release that uses this functionality
</span><br>
<span class="quotelev1">&gt; will have libmpi.so.1.3.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that this still does not enable installing multiple versions of
</span><br>
<span class="quotelev1">&gt; OMPI into the same prefix (for lots of other reasons not covered
</span><br>
<span class="quotelev1">&gt; here), but at least it does allow multiple libraries in the same tree
</span><br>
<span class="quotelev1">&gt; for backwards binary compatibility issues, and gives a visual
</span><br>
<span class="quotelev1">&gt; reference of the library's version number in its filename.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DSOs will remain un-suffixed (e.g., mca_btl_openib.so).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Previous message:</strong> <a href="2446.php">Richard Graham: "[OMPI devel] FW: [devel-core] [RFC] Proposed changes to ompi_free_list"</a>
<li><strong>In reply to:</strong> <a href="2444.php">Jeff Squyres: "[OMPI devel] RFC: versioning OMPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
<li><strong>Reply:</strong> <a href="2448.php">Christian Bell: "Re: [OMPI devel] RFC: versioning OMPI libraries"</a>
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
