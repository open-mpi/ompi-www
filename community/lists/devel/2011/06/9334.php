<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 13:21:12 2011" -->
<!-- isoreceived="20110609172112" -->
<!-- sent="Thu, 9 Jun 2011 13:21:08 -0400" -->
<!-- isosent="20110609172108" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTikX96cEAU-i+-7BCbNXtVW9Hwm8fQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinQnLbjz5cmb0jxHGK7JoKmASVRvg_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-09 13:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9333.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9333.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So the &quot;Resilient ORTE&quot; patch has a registration in ompi_mpi_init.c:
<br>
-------------
<br>
orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
<br>
-------------
<br>
<p>Which is a callback that just calls abort (which is what we want to do
<br>
by default):
<br>
-------------
<br>
void ompi_errhandler_runtime_callback(orte_process_name_t *proc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_mpi_abort(MPI_COMM_WORLD, 1, false);
<br>
}
<br>
-------------
<br>
<p>This is what I want to replace. I do -not- want ompi to abort just
<br>
because a process failed. So I need a way to replace or remove this
<br>
callback, and put in my own callback that 'does the right thing'.
<br>
<p>The current patch allows me to overwrite the callback when I call:
<br>
-------------
<br>
orte_errmgr.set_fault_callback(&amp;my_callback);
<br>
-------------
<br>
Which is fine with me.
<br>
<p>At the point I do not want my_callback to be active any more (say in
<br>
MPI_Finalize) I would like to replace it with the old callback. To do
<br>
so, with the patch's interface, I would have to know what the previous
<br>
callback was and do:
<br>
-------------
<br>
orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
<br>
-------------
<br>
<p>This comes at a slight maintenance burden since now there will be two
<br>
places in the code that must explicitly reference
<br>
'ompi_errhandler_runtime_callback' - if it ever changed then both
<br>
sites would have to be updated.
<br>
<p><p>If you use the 'sigaction-like' interface then upon registration I
<br>
would get the previous handler back (which would point to
<br>
'ompi_errhandler_runtime_callback), and I can store it for later:
<br>
-------------
<br>
orte_errmgr.set_fault_callback(&amp;my_callback, prev_callback);
<br>
-------------
<br>
<p>And when it comes time to deregister my callback all I need to do is
<br>
replace it with the previous callback - which I have a reference to,
<br>
but do not need the explicit name of (passing NULL as the second
<br>
argument tells the registration function that I don't care about the
<br>
current callback):
<br>
-------------
<br>
orte_errmgr.set_fault_callback(&amp;prev_callback, NULL);
<br>
-------------
<br>
<p><p>So the API in the patch is fine, and I can work with it. I just
<br>
suggested that it might be slightly better to return the previous
<br>
callback (as is done in other standard interfaces - e.g., sigaction)
<br>
in case we wanted to do something with it later.
<br>
<p><p>What seems to be proposed now is making the errmgr keep a list of all
<br>
registered callbacks and call them in some order. This seems odd, and
<br>
definitely more complex. Maybe it was just not well explained.
<br>
<p><p>Maybe that is just the &quot;computer scientist&quot; in me :)
<br>
<p>-- Josh
<br>
<p><p>On Thu, Jun 9, 2011 at 1:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; You mean you want the abort API to point somewhere else, without using a new
</span><br>
<span class="quotelev1">&gt; component?
</span><br>
<span class="quotelev1">&gt; Perhaps a telecon would help resolve this quicker? I'm available tomorrow or
</span><br>
<span class="quotelev1">&gt; anytime next week, if that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 9, 2011 at 11:02 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As long as there is the ability to remove and replace a callback I'm
</span><br>
<span class="quotelev2">&gt;&gt; fine. I personally think that forcing the errmgr to track ordering of
</span><br>
<span class="quotelev2">&gt;&gt; callback registration makes it a more complex solution, but as long as
</span><br>
<span class="quotelev2">&gt;&gt; it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In particular I need to replace the default 'abort' errmgr call in
</span><br>
<span class="quotelev2">&gt;&gt; OMPI with something else. If both are called, then this does not help
</span><br>
<span class="quotelev2">&gt;&gt; me at all - since the abort behavior will be activated either before
</span><br>
<span class="quotelev2">&gt;&gt; or after my callback. So can you explain how I would do that with the
</span><br>
<span class="quotelev2">&gt;&gt; current or the proposed interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 9, 2011 at 12:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I agree - let's not get overly complex unless we can clearly articulate
</span><br>
<span class="quotelev3">&gt;&gt; &gt; a
</span><br>
<span class="quotelev3">&gt;&gt; &gt; requirement to do so.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Jun 9, 2011 at 10:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; This will require exactly opposite registration and de-registration
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; order,
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; or no de-registration at all (aka no way to unload a component). Or
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; some
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; even more complex code to deal with internally.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If the error manager handle the callbacks it can use the registration
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; ordering (which will be what the the approach can do), and can enforce
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; all callbacks will be called. I would rather prefer this approach.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; &#160;george.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; callback.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Register:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; &#160;ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; Deregister:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; &#160;ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt; &gt; &#160;ompi_errmgr.set_fault_callback(NULL, old_callback);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9335.php">Josh Hursey: "[OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9333.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9333.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9339.php">George Bosilca: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
