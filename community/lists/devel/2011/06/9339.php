<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  9 18:47:56 2011" -->
<!-- isoreceived="20110609224756" -->
<!-- sent="Thu, 9 Jun 2011 18:47:47 -0400" -->
<!-- isosent="20110609224747" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="C070434F-A40E-473A-9C5B-22E0611E093E_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTikX96cEAU-i+-7BCbNXtVW9Hwm8fQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-09 18:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9341.php">Joshua Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9341.php">Joshua Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, you're way to trusty. ;)
<br>
<p>This only works if all component play the game, and even then there it is difficult if you want to allow components to deregister themselves in the middle of the execution. The problem is that a callback will be previous for some component, and that when you want to remove a callback you have to inform the &quot;next&quot;  component on the callback chain to change its previous.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 9, 2011, at 13:21 , Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; So the &quot;Resilient ORTE&quot; patch has a registration in ompi_mpi_init.c:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which is a callback that just calls abort (which is what we want to do
</span><br>
<span class="quotelev1">&gt; by default):
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; void ompi_errhandler_runtime_callback(orte_process_name_t *proc) {
</span><br>
<span class="quotelev1">&gt;    ompi_mpi_abort(MPI_COMM_WORLD, 1, false);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I want to replace. I do -not- want ompi to abort just
</span><br>
<span class="quotelev1">&gt; because a process failed. So I need a way to replace or remove this
</span><br>
<span class="quotelev1">&gt; callback, and put in my own callback that 'does the right thing'.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The current patch allows me to overwrite the callback when I call:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; orte_errmgr.set_fault_callback(&amp;my_callback);
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; Which is fine with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the point I do not want my_callback to be active any more (say in
</span><br>
<span class="quotelev1">&gt; MPI_Finalize) I would like to replace it with the old callback. To do
</span><br>
<span class="quotelev1">&gt; so, with the patch's interface, I would have to know what the previous
</span><br>
<span class="quotelev1">&gt; callback was and do:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This comes at a slight maintenance burden since now there will be two
</span><br>
<span class="quotelev1">&gt; places in the code that must explicitly reference
</span><br>
<span class="quotelev1">&gt; 'ompi_errhandler_runtime_callback' - if it ever changed then both
</span><br>
<span class="quotelev1">&gt; sites would have to be updated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you use the 'sigaction-like' interface then upon registration I
</span><br>
<span class="quotelev1">&gt; would get the previous handler back (which would point to
</span><br>
<span class="quotelev1">&gt; 'ompi_errhandler_runtime_callback), and I can store it for later:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; orte_errmgr.set_fault_callback(&amp;my_callback, prev_callback);
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And when it comes time to deregister my callback all I need to do is
</span><br>
<span class="quotelev1">&gt; replace it with the previous callback - which I have a reference to,
</span><br>
<span class="quotelev1">&gt; but do not need the explicit name of (passing NULL as the second
</span><br>
<span class="quotelev1">&gt; argument tells the registration function that I don't care about the
</span><br>
<span class="quotelev1">&gt; current callback):
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; orte_errmgr.set_fault_callback(&amp;prev_callback, NULL);
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So the API in the patch is fine, and I can work with it. I just
</span><br>
<span class="quotelev1">&gt; suggested that it might be slightly better to return the previous
</span><br>
<span class="quotelev1">&gt; callback (as is done in other standard interfaces - e.g., sigaction)
</span><br>
<span class="quotelev1">&gt; in case we wanted to do something with it later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What seems to be proposed now is making the errmgr keep a list of all
</span><br>
<span class="quotelev1">&gt; registered callbacks and call them in some order. This seems odd, and
</span><br>
<span class="quotelev1">&gt; definitely more complex. Maybe it was just not well explained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe that is just the &quot;computer scientist&quot; in me :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jun 9, 2011 at 1:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; You mean you want the abort API to point somewhere else, without using a new
</span><br>
<span class="quotelev2">&gt;&gt; component?
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps a telecon would help resolve this quicker? I'm available tomorrow or
</span><br>
<span class="quotelev2">&gt;&gt; anytime next week, if that helps.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Jun 9, 2011 at 11:02 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As long as there is the ability to remove and replace a callback I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fine. I personally think that forcing the errmgr to track ordering of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; callback registration makes it a more complex solution, but as long as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In particular I need to replace the default 'abort' errmgr call in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI with something else. If both are called, then this does not help
</span><br>
<span class="quotelev3">&gt;&gt;&gt; me at all - since the abort behavior will be activated either before
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or after my callback. So can you explain how I would do that with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; current or the proposed interface?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Jun 9, 2011 at 12:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I agree - let's not get overly complex unless we can clearly articulate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; requirement to do so.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Jun 9, 2011 at 10:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This will require exactly opposite registration and de-registration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; order,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or no de-registration at all (aka no way to unload a component). Or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; even more complex code to deal with internally.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If the error manager handle the callbacks it can use the registration
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ordering (which will be what the the approach can do), and can enforce
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; all callbacks will be called. I would rather prefer this approach.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  george.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; callback.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Register:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Deregister:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  ompi_errmgr.set_fault_callback(NULL, old_callback);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9340.php">Joshua Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9338.php">George Bosilca: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>In reply to:</strong> <a href="9334.php">Josh Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9341.php">Joshua Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9341.php">Joshua Hursey: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
