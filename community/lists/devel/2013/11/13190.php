<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 17:59:02 2013" -->
<!-- isoreceived="20131105225902" -->
<!-- sent="Tue, 5 Nov 2013 23:59:01 +0100" -->
<!-- isosent="20131105225901" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="CAMJJpkWeniXcBmjEM4k6N5qFTE51BU+E72vmNcqn_K2m58Hccg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1370FBE2-C62F-4430-8D44-69D96C66B7C6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 17:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I like the idea. I do have some question not necessarily related to
<br>
your proposal, but to how we can use the information you propose to
<br>
expose.
<br>
<p>I have a question regarding the extension of this concept to multi-BTL
<br>
runs. Granted we will have to have a local indexing of BTL (I'm not
<br>
concerned about this). But how do we ensure the naming is globally
<br>
consistent (in the sense that all processes in the job will agree that
<br>
usnic0 is index 0) even when we have a heterogeneous environment? As
<br>
an example some of our clusters have 1 NIC on some nodes, and 2 on
<br>
others. Of course we can say we don't guarantee consistent naming, but
<br>
for tools trying to understand communication issues on distributed
<br>
environments having a global view is a clear plus.
<br>
<p>Another question is about the level of details. I wonder if this level
<br>
of details is really needed, or providing the aggregate pvar will be
<br>
enough in most cases. The problem I see here is the lack of
<br>
topological knowledge at the upper level. Seeing a large number of
<br>
messages on a particular BTL might suggest that something is wrong
<br>
inside the implementation, when in fact the BTL is the only one
<br>
connecting a subset of peers. Without us exposing this information,
<br>
I'm afraid the tool might get the wrong picture ...
<br>
<p>Thanks,
<br>
&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, Nov 5, 2013 at 11:37 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; WHAT: suggestion for how to expose multiple MPI_T pvar values for a given variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: so that we have a common convention across OMPI (and possibly set a precedent for other MPI implementations...?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/btl/usnic, but if everyone likes it, potentially elsewhere in OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: before 1.7.4, so let's set a first timeout of next Tuesday teleconf (Nov  12)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per my discussion on the call today, I'm sending the attached PPT of how we're exposing MPI_T performance variables in the usnic BTL in the multi-BTL case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feedback is welcome, especially because we're the first MPI implementation to expose MPI_T pvars in this way (already committed on the trunk and targeted for 1.7.4).  So this methodology may well become a useful precedent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** Issue #1: we want to expose each usnic BTL pvar (e.g., btl_usnic_num_sends) on a per-usnic-BTL-*module* basis.  How to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Add a prefix/suffix on each pvar name (e.g., btl_usnic_num_sends_0, btl_usnic_num_sends_1, ...etc.).
</span><br>
<span class="quotelev1">&gt; 2. Return an array of values under the single name (btl_usnic_num_sends) -- one value for each BTL module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We opted for the 2nd option.  The MPI_T pvar interface provides a way to get the array length for a pvar, so this is all fine and good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: btl_usnic_num_sends returns an array of N values, where N is the number of usnic BTL modules being used by the MPI process.  Each slot in the array corresponds to the value from one usnic BTL module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** Issue #2: but how do you map a given value to an underlying Linux usnic interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our solution was twofold:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Guarantee that the ordering of values in all pvar arrays is the same (i.e., usnic BTL module 0 will always be in slot 0, usnic BTL module 1 will always be in slot 1, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Add another pvar that is an MPI_T state variable with an associated MPI_T &quot;enumeration&quot;, which contains string names of the underlying Linux devices.  This allows you to map a given value from a pvar to an underlying Linux device (e.g., from usnic BTL module 2 to /dev/usnic_3, or whatever).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the attached PPT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If people have no objection to this, we should use this convention across OMPI (e.g., for other BTLs that expose MPI_T pvars).
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
<li><strong>Next message:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13189.php">Paul Hargrove: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13192.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
