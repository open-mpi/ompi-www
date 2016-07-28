<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 15 09:33:42 2005" -->
<!-- isoreceived="20051115143342" -->
<!-- sent="Tue, 15 Nov 2005 15:33:30 +0100" -->
<!-- isosent="20051115143330" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  New build methodology" -->
<!-- id="20051115143330.GE31570_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20051115070627.0202d880_at_pobox1663.lanl.gov" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-15 09:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Ralph H. Castain: "New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Ralph H. Castain: "New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>* Ralph H. Castain wrote on Tue, Nov 15, 2005 at 03:12:38PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While I generally find the new build methodology (i.e., reducing the 
</span><br>
<span class="quotelev1">&gt; number of makefiles) has little impact on me, I have now encountered 
</span><br>
<span class="quotelev1">&gt; one problem that causes a significant difficulty. In trying to work 
</span><br>
<span class="quotelev1">&gt; on a revised data packing system for the orte part of the branch, I 
</span><br>
<span class="quotelev1">&gt; now find that I cannot compile and debug the dps *until* I have 
</span><br>
<span class="quotelev1">&gt; completely revised all the rest of the system that uses it. In other 
</span><br>
<span class="quotelev1">&gt; words, having made a change to the dps, I first have to go through 
</span><br>
<span class="quotelev1">&gt; every function that uses it and make the tree conform BEFORE I can 
</span><br>
<span class="quotelev1">&gt; even begin to debug and test the revisions in the dps itself.
</span><br>
<p>Would it help if only the change not to build a convenience archive in
<br>
orte/dps would be reverted?  You could then
<br>
&nbsp;&nbsp;cd orte
<br>
&nbsp;&nbsp;make dps/libdps.la
<br>
<p>and would only have to issue the link command for liborte.la manually
<br>
(to override rebuilding all other files that depend on dps.h).  This
<br>
change has very little impact on overall autogen/build execution time.
<br>
<p><span class="quotelev1">&gt; The problem this creates is that - unless I am absolutely correct in 
</span><br>
<span class="quotelev1">&gt; my first iteration on the changes - I find myself repeatedly going 
</span><br>
<span class="quotelev1">&gt; through the tree, modifying the API calls into the dps, getting 
</span><br>
<span class="quotelev1">&gt; everything to compile, then trying the dps, .....discovering that I 
</span><br>
<span class="quotelev1">&gt; need to make a change, going through the entire tree to modify 
</span><br>
<span class="quotelev1">&gt; everything again, trying the change,.....
</span><br>
<p>Hmm.  For one you are seeing the effect of what is actually a more
<br>
precise representation of the dependencies; though I agree that during
<br>
development this can hurt.
<br>
<p><span class="quotelev1">&gt; Perhaps an option to create a local makefile would help? Not sure if 
</span><br>
<span class="quotelev1">&gt; that is possible, but it sure would ease my pain!
</span><br>
<p>Hmm.  May be possible with some hackery, but if above would work well
<br>
enough for you, it'd be much easier. 
<br>
<p>Thanks for the feedback by the way, I hadn't thought of this.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Previous message:</strong> <a href="0524.php">Ralph H. Castain: "New build methodology"</a>
<li><strong>In reply to:</strong> <a href="0524.php">Ralph H. Castain: "New build methodology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
<li><strong>Reply:</strong> <a href="0526.php">Ralph H. Castain: "Re:  New build methodology"</a>
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
