<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 13:06:00 2011" -->
<!-- isoreceived="20110609170600" -->
<!-- sent="Thu, 9 Jun 2011 11:05:55 -0600" -->
<!-- isosent="20110609170555" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTinQnLbjz5cmb0jxHGK7JoKmASVRvg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTik=4RMrLX+B=fcb0TXqsPCW9WkKFQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-09 13:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You mean you want the abort API to point somewhere else, without using a new
<br>
component?
<br>
<p>Perhaps a telecon would help resolve this quicker? I'm available tomorrow or
<br>
anytime next week, if that helps.
<br>
<p>On Thu, Jun 9, 2011 at 11:02 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As long as there is the ability to remove and replace a callback I'm
</span><br>
<span class="quotelev1">&gt; fine. I personally think that forcing the errmgr to track ordering of
</span><br>
<span class="quotelev1">&gt; callback registration makes it a more complex solution, but as long as
</span><br>
<span class="quotelev1">&gt; it works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In particular I need to replace the default 'abort' errmgr call in
</span><br>
<span class="quotelev1">&gt; OMPI with something else. If both are called, then this does not help
</span><br>
<span class="quotelev1">&gt; me at all - since the abort behavior will be activated either before
</span><br>
<span class="quotelev1">&gt; or after my callback. So can you explain how I would do that with the
</span><br>
<span class="quotelev1">&gt; current or the proposed interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 9, 2011 at 12:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I agree - let's not get overly complex unless we can clearly articulate a
</span><br>
<span class="quotelev2">&gt; &gt; requirement to do so.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jun 9, 2011 at 10:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This will require exactly opposite registration and de-registration
</span><br>
<span class="quotelev1">&gt; order,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or no de-registration at all (aka no way to unload a component). Or some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; even more complex code to deal with internally.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If the error manager handle the callbacks it can use the registration
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ordering (which will be what the the approach can do), and can enforce
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all callbacks will be called. I would rather prefer this approach.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; callback.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Register:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Deregister:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  ompi_errmgr.set_fault_callback(NULL, old_callback);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9333/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9332.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
