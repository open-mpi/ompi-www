<?
$subject_val = "Re: [OMPI devel] RFC: Resilient ORTE";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 10 16:47:39 2011" -->
<!-- isoreceived="20110610204739" -->
<!-- sent="Fri, 10 Jun 2011 16:47:35 -0400" -->
<!-- isosent="20110610204735" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Resilient ORTE" -->
<!-- id="BANLkTinpayRhvTWt2JVC=e4K0yN7aTL8EQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D3462602-96B5-4B90-872A-0EB8F1A2A29D_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-06-10 16:47:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9362.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9362.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We could, but we could also just replace the callback. I will never
<br>
what to use it in my scenario, and if I did then I could just call it
<br>
directly instead of relying on the errmgr to do the right thing. So
<br>
why complicate the errmgr with additional complexity for something
<br>
that we don't need at the moment?
<br>
<p>On Fri, Jun 10, 2011 at 4:40 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; So why not have the callback return an int, and your callback returns &quot;go no further&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2011, at 2:06 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah I do not want the default fatal callback in OMPI. I want to
</span><br>
<span class="quotelev2">&gt;&gt; replace it with something that allows OMPI to continue running when
</span><br>
<span class="quotelev2">&gt;&gt; there are process failures (if the error handlers associated with the
</span><br>
<span class="quotelev2">&gt;&gt; communicators permit such an action). So having the default fatal
</span><br>
<span class="quotelev2">&gt;&gt; callback called after mine would not be useful, since I do not want
</span><br>
<span class="quotelev2">&gt;&gt; the fatal action.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As long as I can replace that callback, or selectively get rid of it
</span><br>
<span class="quotelev2">&gt;&gt; then I'm ok.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jun 10, 2011 at 3:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 10, 2011, at 6:32 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Fri, Jun 10, 2011 at 7:37 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jun 9, 2011, at 6:12 PM, Joshua Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jun 9, 2011, at 6:47 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, you're way to trusty. ;)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It's the midwestern boy in me :)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Still need to shake that corn out of your head... :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This only works if all component play the game, and even then there it is difficult if you want to allow components to deregister themselves in the middle of the execution. The problem is that a callback will be previous for some component, and that when you want to remove a callback you have to inform the &quot;next&quot; &#160;component on the callback chain to change its previous.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is a fair point. I think hiding the ordering of callbacks in the errmgr could be dangerous since it takes control from the upper layers, but, conversely, trusting the upper layers to 'do the right thing' with the previous callback is probably too optimistic, esp. for layers that are not designed together.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To that I would suggest that you leave the code as is - registering a callback overwrites the existing callback. That will allow me to replace the default OMPI callback when I am able to in MPI_Init, and, if I need to, swap back in the default version at MPI_Finalize.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Does that sound like a reasonable way forward on this design point?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It doesn't solve the problem that George alluded to - just because you overwrite the callback, it doesn't mean that someone else won't overwrite you when their component initializes. Only the last one wins - the rest of you lose.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm not sure how you guarantee that you win, which is why I'm unclear how this callback can really work unless everyone agrees that only one place gets it. Put that callback in a base function of a new error handling framework, and then let everyone create components within that for handling desired error responses?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yep, that is a problem, but one that we can deal with in the immediate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; case. Since OMPI is the only layer registering the callback, when I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; replace it in OMPI I will have to make sure that no other place in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI replaces the callback.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If at some point we need more than one callback above ORTE then we may
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; want to revisit this point. But since we only have one layer on top of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ORTE, it is the responsibility of that layer to be internally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; consistent with regard to which callback it wants to be triggered.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If the layers above ORTE want more than one callback I would suggest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that that layer design some mechanism for coordinating these multiple
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - possibly conflicting - callbacks (by the way this is policy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; management, which can get complex fast as you add more interested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parties). Meaning that if OMPI wanted multiple callbacks to be active
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at the same time, then OMPI would create a mechanism for managing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these callbacks, not ORTE. ORTE should just have one callback provided
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the upper layer, and keep it -simple-. If the upper layer wants to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; toy around with something more complex it must manage the complexity
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of artificially pushing it down to the ORTE layer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was thinking some more about this, and wonder if we aren't over-complicating the question.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you need to actually control the sequence of callbacks, or just ensure that your callback gets called prior to the default one that calls abort?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Meeting the latter requirement is trivial - subsequent calls to register_callback get pushed onto the top of the callback list. Since the default one always gets registered first (which we can ensure since it occurs in MPI_Init), it will always be at the bottom of the callback list and hence called last.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keeping that list in ORTE is simple and probably the right place to do it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if you truly want to control the callback order in detail - then yeah, that should go up in &#160;OMPI. I sure don't want to write all that code :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 9, 2011, at 13:21 , Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So the &quot;Resilient ORTE&quot; patch has a registration in ompi_mpi_init.c:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is a callback that just calls abort (which is what we want to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; by default):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; void ompi_errhandler_runtime_callback(orte_process_name_t *proc) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &#160;ompi_mpi_abort(MPI_COMM_WORLD, 1, false);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is what I want to replace. I do -not- want ompi to abort just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; because a process failed. So I need a way to replace or remove this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback, and put in my own callback that 'does the right thing'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The current patch allows me to overwrite the callback when I call:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr.set_fault_callback(&amp;my_callback);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is fine with me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; At the point I do not want my_callback to be active any more (say in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; MPI_Finalize) I would like to replace it with the old callback. To do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; so, with the patch's interface, I would have to know what the previous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback was and do:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr.set_fault_callback(&amp;ompi_errhandler_runtime_callback);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This comes at a slight maintenance burden since now there will be two
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; places in the code that must explicitly reference
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'ompi_errhandler_runtime_callback' - if it ever changed then both
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; sites would have to be updated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you use the 'sigaction-like' interface then upon registration I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; would get the previous handler back (which would point to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'ompi_errhandler_runtime_callback), and I can store it for later:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr.set_fault_callback(&amp;my_callback, prev_callback);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; And when it comes time to deregister my callback all I need to do is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; replace it with the previous callback - which I have a reference to,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but do not need the explicit name of (passing NULL as the second
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; argument tells the registration function that I don't care about the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; current callback):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; orte_errmgr.set_fault_callback(&amp;prev_callback, NULL);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So the API in the patch is fine, and I can work with it. I just
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; suggested that it might be slightly better to return the previous
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback (as is done in other standard interfaces - e.g., sigaction)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; in case we wanted to do something with it later.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; What seems to be proposed now is making the errmgr keep a list of all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; registered callbacks and call them in some order. This seems odd, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; definitely more complex. Maybe it was just not well explained.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Maybe that is just the &quot;computer scientist&quot; in me :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jun 9, 2011 at 1:05 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; You mean you want the abort API to point somewhere else, without using a new
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; component?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Perhaps a telecon would help resolve this quicker? I'm available tomorrow or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; anytime next week, if that helps.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jun 9, 2011 at 11:02 AM, Josh Hursey &lt;jjhursey_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As long as there is the ability to remove and replace a callback I'm
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; fine. I personally think that forcing the errmgr to track ordering of
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback registration makes it a more complex solution, but as long as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; it works.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In particular I need to replace the default 'abort' errmgr call in
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI with something else. If both are called, then this does not help
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; me at all - since the abort behavior will be activated either before
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or after my callback. So can you explain how I would do that with the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; current or the proposed interface?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jun 9, 2011 at 12:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I agree - let's not get overly complex unless we can clearly articulate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; requirement to do so.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Thu, Jun 9, 2011 at 10:45 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This will require exactly opposite registration and de-registration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; order,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or no de-registration at all (aka no way to unload a component). Or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; some
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; even more complex code to deal with internally.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If the error manager handle the callbacks it can use the registration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ordering (which will be what the the approach can do), and can enforce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; all callbacks will be called. I would rather prefer this approach.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 9, 2011, at 08:36 , Josh Hursey wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I would prefer returning the previous callback instead of relying on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the errmgr to get the ordering right. Additionally, when I want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unregister (or replace) a call back it is easy to do that with a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; single interface, than introducing a new one to remove a particular
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; callback.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Register:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_errmgr.set_fault_callback(my_callback, prev_callback);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Deregister:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_errmgr.set_fault_callback(prev_callback, old_callback);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; or to eliminate all callbacks (if you needed that for somme reason):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi_errmgr.set_fault_callback(NULL, old_callback);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Previous message:</strong> <a href="9362.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>In reply to:</strong> <a href="9362.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
<li><strong>Reply:</strong> <a href="9364.php">Ralph Castain: "Re: [OMPI devel] RFC: Resilient ORTE"</a>
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
