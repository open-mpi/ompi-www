<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  5 17:54:39 2013" -->
<!-- isoreceived="20131105225439" -->
<!-- sent="Tue, 5 Nov 2013 14:54:37 -0800" -->
<!-- isosent="20131105225437" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="CAAvDA16HMvnJyO_Jn0FfCwFnXX3xKJEEkeqCcRGVTx-TwNduCA_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-05 17:54:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>If this approach is to be adopted by other components (and perhaps other
<br>
MPIs), then it would be important for the enumeration variable name to be
<br>
derived in a UNIFORM way:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;framework&gt;_&lt;component&gt;_SOMETHING
<br>
Without a fixed value for &quot;SOMETHING&quot; somebody will need to read sources
<br>
(or documentation) to make the connection.
<br>
<p>In the slides you used &quot;btl_usnic_devices&quot;, which seems overly specific
<br>
since a single NIC might have multiple PORTS making the &quot;_devices&quot; term
<br>
inappropriate/misleading (yes, it matches &quot;device&quot; in the sense of
<br>
/dev/foo, but not in the sense of a device as a physical object).  For tcp
<br>
on a multi-homed host &quot;device&quot; is again not necessarily the first word that
<br>
comes to mind for identifying the &quot;interface&quot; or listening address.
<br>
&nbsp;Perhaps something nice and generic like &quot;_instances&quot;, which is at least
<br>
consistent with the definition of &quot;module&quot; given at
<br>
<a href="http://www.open-mpi.org/faq/?category=developers#ompi-terminology">http://www.open-mpi.org/faq/?category=developers#ompi-terminology</a>
<br>
<p>-Paul
<br>
<p><p>On Tue, Nov 5, 2013 at 2:37 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: suggestion for how to expose multiple MPI_T pvar values for a given
</span><br>
<span class="quotelev1">&gt; variable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: so that we have a common convention across OMPI (and possibly set a
</span><br>
<span class="quotelev1">&gt; precedent for other MPI implementations...?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: ompi/mca/btl/usnic, but if everyone likes it, potentially elsewhere
</span><br>
<span class="quotelev1">&gt; in OMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: before 1.7.4, so let's set a first timeout of next Tuesday
</span><br>
<span class="quotelev1">&gt; teleconf (Nov  12)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More detail:
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Per my discussion on the call today, I'm sending the attached PPT of how
</span><br>
<span class="quotelev1">&gt; we're exposing MPI_T performance variables in the usnic BTL in the
</span><br>
<span class="quotelev1">&gt; multi-BTL case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feedback is welcome, especially because we're the first MPI implementation
</span><br>
<span class="quotelev1">&gt; to expose MPI_T pvars in this way (already committed on the trunk and
</span><br>
<span class="quotelev1">&gt; targeted for 1.7.4).  So this methodology may well become a useful
</span><br>
<span class="quotelev1">&gt; precedent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** Issue #1: we want to expose each usnic BTL pvar (e.g.,
</span><br>
<span class="quotelev1">&gt; btl_usnic_num_sends) on a per-usnic-BTL-*module* basis.  How to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Add a prefix/suffix on each pvar name (e.g., btl_usnic_num_sends_0,
</span><br>
<span class="quotelev1">&gt; btl_usnic_num_sends_1, ...etc.).
</span><br>
<span class="quotelev1">&gt; 2. Return an array of values under the single name (btl_usnic_num_sends)
</span><br>
<span class="quotelev1">&gt; -- one value for each BTL module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We opted for the 2nd option.  The MPI_T pvar interface provides a way to
</span><br>
<span class="quotelev1">&gt; get the array length for a pvar, so this is all fine and good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Specifically: btl_usnic_num_sends returns an array of N values, where N is
</span><br>
<span class="quotelev1">&gt; the number of usnic BTL modules being used by the MPI process.  Each slot
</span><br>
<span class="quotelev1">&gt; in the array corresponds to the value from one usnic BTL module.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ** Issue #2: but how do you map a given value to an underlying Linux usnic
</span><br>
<span class="quotelev1">&gt; interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our solution was twofold:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Guarantee that the ordering of values in all pvar arrays is the same
</span><br>
<span class="quotelev1">&gt; (i.e., usnic BTL module 0 will always be in slot 0, usnic BTL module 1 will
</span><br>
<span class="quotelev1">&gt; always be in slot 1, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Add another pvar that is an MPI_T state variable with an associated
</span><br>
<span class="quotelev1">&gt; MPI_T &quot;enumeration&quot;, which contains string names of the underlying Linux
</span><br>
<span class="quotelev1">&gt; devices.  This allows you to map a given value from a pvar to an underlying
</span><br>
<span class="quotelev1">&gt; Linux device (e.g., from usnic BTL module 2 to /dev/usnic_3, or whatever).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the attached PPT.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If people have no objection to this, we should use this convention across
</span><br>
<span class="quotelev1">&gt; OMPI (e.g., for other BTLs that expose MPI_T pvars).
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13189/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13190.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Previous message:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13188.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13191.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
