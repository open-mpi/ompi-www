<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 12:45:05 2011" -->
<!-- isoreceived="20110609164505" -->
<!-- sent="Thu, 9 Jun 2011 12:45:00 -0400" -->
<!-- isosent="20110609164500" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="9F59C914-8E98-4231-8A9C-2E7AEB16ACE2_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimvc3LV2a3o33ws7Z+Q4vn-YR-SQw_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 12:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This will require exactly opposite registration and de-registration order, or no de-registration at all (aka no way to unload a component). Or some even more complex code to deal with internally.
<br>
<p>If the error manager handle the callbacks it can use the registration ordering (which will be what the the approach can do), and can enforce that all callbacks will be called. I would rather prefer this approach.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev1">&gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev1">&gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev1">&gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev1">&gt; callback.
</span><br>
<span class="quotelev1">&gt; Register:
</span><br>
<span class="quotelev1">&gt;  ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev1">&gt; Deregister:
</span><br>
<span class="quotelev1">&gt;  ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev1">&gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev1">&gt;  ompi_errmgr.set_fault_callback(NULL, old_callback);
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9329.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9331.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
