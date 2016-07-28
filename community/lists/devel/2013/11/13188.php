<?
$subject_val = "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 17:37:22 2013" -->
<!-- isoreceived="20131105223722" -->
<!-- sent="Tue, 5 Nov 2013 22:37:19 +0000" -->
<!-- isosent="20131105223719" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="1370FBE2-C62F-4430-8D44-69D96C66B7C6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 17:37:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13187.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: suggestion for how to expose multiple MPI_T pvar values for a given variable.
<br>
<p>WHY: so that we have a common convention across OMPI (and possibly set a precedent for other MPI implementations...?).
<br>
<p>WHERE: ompi/mca/btl/usnic, but if everyone likes it, potentially elsewhere in OMPI
<br>
<p>TIMEOUT: before 1.7.4, so let's set a first timeout of next Tuesday teleconf (Nov 12)
<br>
<p>More detail:
<br>
------------
<br>
<p>Per my discussion on the call today, I'm sending the attached PPT of how we're exposing MPI_T performance variables in the usnic BTL in the multi-BTL case.
<br>
<p>Feedback is welcome, especially because we're the first MPI implementation to expose MPI_T pvars in this way (already committed on the trunk and targeted for 1.7.4).  So this methodology may well become a useful precedent.  
<br>
<p>** Issue #1: we want to expose each usnic BTL pvar (e.g., btl_usnic_num_sends) on a per-usnic-BTL-*module* basis.  How to do this?
<br>
<p>1. Add a prefix/suffix on each pvar name (e.g., btl_usnic_num_sends_0, btl_usnic_num_sends_1, ...etc.).
<br>
2. Return an array of values under the single name (btl_usnic_num_sends) -- one value for each BTL module.
<br>
<p>We opted for the 2nd option.  The MPI_T pvar interface provides a way to get the array length for a pvar, so this is all fine and good.
<br>
<p>Specifically: btl_usnic_num_sends returns an array of N values, where N is the number of usnic BTL modules being used by the MPI process.  Each slot in the array corresponds to the value from one usnic BTL module.
<br>
<p>** Issue #2: but how do you map a given value to an underlying Linux usnic interface?
<br>
<p>Our solution was twofold:
<br>
<p>1. Guarantee that the ordering of values in all pvar arrays is the same (i.e., usnic BTL module 0 will always be in slot 0, usnic BTL module 1 will always be in slot 1, ...etc.).
<br>
<p>2. Add another pvar that is an MPI_T state variable with an associated MPI_T &quot;enumeration&quot;, which contains string names of the underlying Linux devices.  This allows you to map a given value from a pvar to an underlying Linux device (e.g., from usnic BTL module 2 to /dev/usnic_3, or whatever).
<br>
<p>See the attached PPT.
<br>
<p>If people have no objection to this, we should use this convention across OMPI (e.g., for other BTLs that expose MPI_T pvars).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/vnd.openxmlformats-officedocument.presentationml.presentation attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13188/varForMultipleDevs-2.pptx">varForMultipleDevs-2.pptx</a>
</ul>
<!-- attachment="varForMultipleDevs-2.pptx" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13187.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI bugs] [Open MPI] #3885: Move r29608 to v1.7 branch (Fix C++11 issue identified by)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
