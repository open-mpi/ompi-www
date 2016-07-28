<?
$subject_val = "Re: [OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 17:59:19 2008" -->
<!-- isoreceived="20080512215919" -->
<!-- sent="Mon, 12 May 2008 15:59:05 -0600" -->
<!-- isosent="20080512215905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="C44E19C9.5227%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6C3E4CC0-0DD5-422A-86AC-3042BFE6F67E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changes: opal_output and opal_show_help<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 17:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 5/12/08 3:49 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sorry it took so long for a reply; Ralph and I were working on this
</span><br>
<span class="quotelev1">&gt; code much of the day in an attempt to have it all complete / tidied up
</span><br>
<span class="quotelev1">&gt; for the teleconf tomorrow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 12, 2008, at 10:04 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Er, no.  I thought the group had agreed to the main idea last Tuesday
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (framework for filtering output).  We were racing against the time-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch clock and didn't take the time for an RFC after we agreed on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the design.  Do we need to?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think so. But I'd just kinda like a more formal description of
</span><br>
<span class="quotelev2">&gt;&gt; what this fix is and it's implications on how the developers are
</span><br>
<span class="quotelev2">&gt;&gt; expected to use it going forward since this is altering the coding
</span><br>
<span class="quotelev2">&gt;&gt; standards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fair enough, will do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since this one was kinda weird, do you want an after-the-fact RFC, or
</span><br>
<span class="quotelev1">&gt; a page on the wiki?  I'm partial to the latter; it'll be more durable.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The side effect of eliminating duplicate error messages is new / was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not discussed last Tuesday -- I can put out an RFC for that if you'd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like, but the benefit is so obvious that I didn't think it would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; controversial.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Don't get me wrong, I'm not arguing the benefit just that I'd like to
</span><br>
<span class="quotelev2">&gt;&gt; know what is expected of me as a developer after this change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's perfectly reasonable.  In short: s/opal_show_help/
</span><br>
<span class="quotelev1">&gt; orte_show_help/ in the ORTE and OMPI layers, and you're done (which we
</span><br>
<span class="quotelev1">&gt; already did throughout the code base).  Use orte_show_help in the ORTE
</span><br>
<span class="quotelev1">&gt; and OMPI layers in the future.  I think this information should go on
</span><br>
<span class="quotelev1">&gt; the wiki.
</span><br>
<p>Just to complete that, you also should:
<br>
<p>s/opal_output/orte_output
<br>
s/OPAL_OUTPUT/ORTE_OUTPUT
<br>
s/OPAL_OUTPUT_VERBOSE/ORTE_OUTPUT_VERBOSE
<br>
<p>throughout ORTE and OMPI layers in the future.
<br>
<p>This has also been done in the current code base.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, per a conversation that I had with Terry earlier today, I
</span><br>
<span class="quotelev1">&gt; added a new MCA parameter that will turn off the show_help message
</span><br>
<span class="quotelev1">&gt; aggregation.  It defaults to aggregation enabled, but you can disable
</span><br>
<span class="quotelev1">&gt; it with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      ... --mca orte_base_help_aggregation 0 ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will show *all* show_help messages, regardless of duplication.
</span><br>
<span class="quotelev1">&gt; Terry was worried that aggregating the same (filename, tuple) messages
</span><br>
<span class="quotelev1">&gt; may actually mask different errors because we allow %s expansion in
</span><br>
<span class="quotelev1">&gt; the message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Re-examining George's mail in this thread, I think he may have had
</span><br>
<span class="quotelev1">&gt; similar concerns, but I didn't grok that at the time.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3892.php">Jeff Squyres: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3894.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
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
