<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 09:45:27 2005" -->
<!-- isoreceived="20051115144527" -->
<!-- sent="Tue, 15 Nov 2005 07:45:26 -0700" -->
<!-- isosent="20051115144526" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  New build methodology" -->
<!-- id="6.2.3.4.2.20051115074426.0200e390_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20051115143330.GE31570_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-15 09:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your proposed change would help a great deal - thanks! Can you steer 
<br>
me through the change?
<br>
<p>At 07:33 AM 11/15/2005, you wrote:
<br>
<span class="quotelev1">&gt;Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* Ralph H. Castain wrote on Tue, Nov 15, 2005 at 03:12:38PM CET:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While I generally find the new build methodology (i.e., reducing the
</span><br>
<span class="quotelev2">&gt; &gt; number of makefiles) has little impact on me, I have now encountered
</span><br>
<span class="quotelev2">&gt; &gt; one problem that causes a significant difficulty. In trying to work
</span><br>
<span class="quotelev2">&gt; &gt; on a revised data packing system for the orte part of the branch, I
</span><br>
<span class="quotelev2">&gt; &gt; now find that I cannot compile and debug the dps *until* I have
</span><br>
<span class="quotelev2">&gt; &gt; completely revised all the rest of the system that uses it. In other
</span><br>
<span class="quotelev2">&gt; &gt; words, having made a change to the dps, I first have to go through
</span><br>
<span class="quotelev2">&gt; &gt; every function that uses it and make the tree conform BEFORE I can
</span><br>
<span class="quotelev2">&gt; &gt; even begin to debug and test the revisions in the dps itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Would it help if only the change not to build a convenience archive in
</span><br>
<span class="quotelev1">&gt;orte/dps would be reverted?  You could then
</span><br>
<span class="quotelev1">&gt;   cd orte
</span><br>
<span class="quotelev1">&gt;   make dps/libdps.la
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;and would only have to issue the link command for liborte.la manually
</span><br>
<span class="quotelev1">&gt;(to override rebuilding all other files that depend on dps.h).  This
</span><br>
<span class="quotelev1">&gt;change has very little impact on overall autogen/build execution time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The problem this creates is that - unless I am absolutely correct in
</span><br>
<span class="quotelev2">&gt; &gt; my first iteration on the changes - I find myself repeatedly going
</span><br>
<span class="quotelev2">&gt; &gt; through the tree, modifying the API calls into the dps, getting
</span><br>
<span class="quotelev2">&gt; &gt; everything to compile, then trying the dps, .....discovering that I
</span><br>
<span class="quotelev2">&gt; &gt; need to make a change, going through the entire tree to modify
</span><br>
<span class="quotelev2">&gt; &gt; everything again, trying the change,.....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hmm.  For one you are seeing the effect of what is actually a more
</span><br>
<span class="quotelev1">&gt;precise representation of the dependencies; though I agree that during
</span><br>
<span class="quotelev1">&gt;development this can hurt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Perhaps an option to create a local makefile would help? Not sure if
</span><br>
<span class="quotelev2">&gt; &gt; that is possible, but it sure would ease my pain!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hmm.  May be possible with some hackery, but if above would work well
</span><br>
<span class="quotelev1">&gt;enough for you, it'd be much easier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for the feedback by the way, I hadn't thought of this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Cheers,
</span><br>
<span class="quotelev1">&gt;Ralf
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0525.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0527.php">Ralf Wildenhues: "Re:  New build methodology"</a>
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
