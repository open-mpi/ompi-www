<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 16:55:24 2007" -->
<!-- isoreceived="20071009205524" -->
<!-- sent="Tue, 9 Oct 2007 16:55:10 -0400" -->
<!-- isosent="20071009205510" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove opal message buffer" -->
<!-- id="82407F47-D063-4D42-8323-BAD4403CC14B_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="470A384B.1020305_at_cs.indiana.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 16:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2400.php">Tim Prins: "[OMPI devel] RFC: Remove opal message buffer"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That was long ago, on the first draft of the ORTE. Completely useless  
<br>
by now, so go ahead and remove it.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 8, 2007, at 10:01 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove the opal message buffer code
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: It is not used
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Remove references from opal/mca/base/Makefile.am and
</span><br>
<span class="quotelev1">&gt;         opal/mca/base/base.h
</span><br>
<span class="quotelev1">&gt;         svn rm opal/mca/base/mca_base_msgbuf*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHEN: After timeout
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: COB, Wednesday October 10, 2007
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran into this code accidentally while looking at other things. It
</span><br>
<span class="quotelev1">&gt; looks like it was originally designed to be our data packing/unpacking
</span><br>
<span class="quotelev1">&gt; system, but we now use the dss for that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple grep's through the code does not find anyone who actually  
</span><br>
<span class="quotelev1">&gt; uses
</span><br>
<span class="quotelev1">&gt; this functionality. So, to reduce future confusion and excess code, I
</span><br>
<span class="quotelev1">&gt; would like to remove it.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2413/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2414.php">Brian Barrett: "Re: [OMPI devel] problem in runing MPI job through XGrid"</a>
<li><strong>Previous message:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2400.php">Tim Prins: "[OMPI devel] RFC: Remove opal message buffer"</a>
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
