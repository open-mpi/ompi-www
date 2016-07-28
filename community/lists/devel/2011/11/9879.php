<?
$subject_val = "Re: [OMPI devel] RFC: MCA param registration errors";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  1 15:15:00 2011" -->
<!-- isoreceived="20111101191500" -->
<!-- sent="Tue, 1 Nov 2011 15:14:55 -0400" -->
<!-- isosent="20111101191455" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: MCA param registration errors" -->
<!-- id="735F954E-2E01-4CD7-98C4-4A4D3E22652E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="397ABEA8-C4D1-4EDE-ABCF-09499ED54C1E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: MCA param registration errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-01 15:14:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Reply:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We talked about this on the call today.
<br>
<p>A good suggestion was made: call show_help/opal_finalize/exit only when OPAL_ENABLE_DEBUG is true.  Otherwise, return an error code.
<br>
<p>If no one objects to this, I'll commit this tomorrow.
<br>
<p><p><p>On Oct 31, 2011, at 4:16 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: what to do if registering an MCA param results in an error?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/mca/base/mca_base_param.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: MCA param re-registration issues should be treated as OMPI developer errors
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: COB Friday, 4 Nov 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Short version: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re-registering an MCA param to be a different type (e.g., it was initially registered to be a string, but was later re-registered to be an int) should be treated as an OMPI developer error, and should opal_finalize()/exit(1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A mistaken MCA param re-registration recently caused an orted segv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MCA param subsystem was fixed to avoid this segv, but silently convert the MCA param to the newly-registered type.  Upon reflection and some discussion, this seems to be a bad idea.  Instead, we should loudly complain via a show_help message and then exit(1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically: this kind of behavior is clearly an error and should be fixed.  Unfortunately, in most cases, we don't actually check the return value from MCA param registration functions, so if we change the MCA param function to simply return a non OPAL_SUCCESS status, it's unlikely that anyone will notice until some code tries to read the param value, likely still resulting in a segv.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have heartburn if I change the error behavior to opal_finalize()/exit(1)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/10/9878.php">Jeff Squyres: "[OMPI devel] RFC: MCA param registration errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Reply:</strong> <a href="9880.php">George Bosilca: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
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
