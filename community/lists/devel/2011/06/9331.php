<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 12:54:24 2011" -->
<!-- isoreceived="20110609165424" -->
<!-- sent="Thu, 9 Jun 2011 10:54:18 -0600" -->
<!-- isosent="20110609165418" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTinW_BunS_ntfPy0GBVY_MM_jSyvAg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9F59C914-8E98-4231-8A9C-2E7AEB16ACE2_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Resilient ORTE<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 12:54:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I agree - let's not get overly complex unless we can clearly articulate a
<br>
requirement to do so.
<br>
<p>On Thu, Jun 9, 2011 at 10:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; This will require exactly opposite registration and de-registration order,
</span><br>
<span class="quotelev1">&gt; or no de-registration at all (aka no way to unload a component). Or some
</span><br>
<span class="quotelev1">&gt; even more complex code to deal with internally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the error manager handle the callbacks it can use the registration
</span><br>
<span class="quotelev1">&gt; ordering (which will be what the the approach can do), and can enforce that
</span><br>
<span class="quotelev1">&gt; all callbacks will be called. I would rather prefer this approach.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev2">&gt; &gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev2">&gt; &gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev2">&gt; &gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev2">&gt; &gt; callback.
</span><br>
<span class="quotelev2">&gt; &gt; Register:
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev2">&gt; &gt; Deregister:
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev2">&gt; &gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev2">&gt; &gt;  ompi_errmgr.set_fault_callback(NULL, old_callback);
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9330.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
