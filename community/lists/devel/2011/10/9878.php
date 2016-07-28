<?
$subject_val = "[OMPI devel] RFC: MCA param registration errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 31 16:16:42 2011" -->
<!-- isoreceived="20111031201642" -->
<!-- sent="Mon, 31 Oct 2011 16:16:37 -0400" -->
<!-- isosent="20111031201637" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: MCA param registration errors" -->
<!-- id="397ABEA8-C4D1-4EDE-ABCF-09499ED54C1E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: MCA param registration errors<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-31 16:16:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9877.php">Eugene Loh: "[OMPI devel] ibm/io/file_status_get_count"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: what to do if registering an MCA param results in an error?
<br>
<p>WHERE: opal/mca/base/mca_base_param.c
<br>
<p>WHY: MCA param re-registration issues should be treated as OMPI developer errors
<br>
<p>WHEN: COB Friday, 4 Nov 2011
<br>
<p>-----------------
<br>
<p>Short version: 
<br>
<p>Re-registering an MCA param to be a different type (e.g., it was initially registered to be a string, but was later re-registered to be an int) should be treated as an OMPI developer error, and should opal_finalize()/exit(1).
<br>
<p>More details:
<br>
<p>A mistaken MCA param re-registration recently caused an orted segv.
<br>
<p>The MCA param subsystem was fixed to avoid this segv, but silently convert the MCA param to the newly-registered type.  Upon reflection and some discussion, this seems to be a bad idea.  Instead, we should loudly complain via a show_help message and then exit(1).
<br>
<p>Specifically: this kind of behavior is clearly an error and should be fixed.  Unfortunately, in most cases, we don't actually check the return value from MCA param registration functions, so if we change the MCA param function to simply return a non OPAL_SUCCESS status, it's unlikely that anyone will notice until some code tries to read the param value, likely still resulting in a segv.
<br>
<p>Does anyone have heartburn if I change the error behavior to opal_finalize()/exit(1)?
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Previous message:</strong> <a href="9877.php">Eugene Loh: "[OMPI devel] ibm/io/file_status_get_count"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/11/9879.php">Jeff Squyres: "Re: [OMPI devel] RFC: MCA param registration errors"</a>
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
