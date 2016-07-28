<?
$subject_val = "Re: [OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 18:26:59 2008" -->
<!-- isoreceived="20080512222659" -->
<!-- sent="Mon, 12 May 2008 18:27:05 -0400" -->
<!-- isosent="20080512222705" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="9E9A3706-EC22-4479-8343-6B3576A16D18_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C44E19C9.5227%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 18:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think a wiki page describing this should be fine. Just wanted to  
<br>
make sure I use the new functionality properly.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 12, 2008, at 5:59 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/12/08 3:49 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry it took so long for a reply; Ralph and I were working on this
</span><br>
<span class="quotelev2">&gt;&gt; code much of the day in an attempt to have it all complete /  
</span><br>
<span class="quotelev2">&gt;&gt; tidied up
</span><br>
<span class="quotelev2">&gt;&gt; for the teleconf tomorrow.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 12, 2008, at 10:04 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Er, no.  I thought the group had agreed to the main idea last  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tuesday
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (framework for filtering output).  We were racing against the time-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; branch clock and didn't take the time for an RFC after we agreed on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the design.  Do we need to?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't think so. But I'd just kinda like a more formal  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; description of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what this fix is and it's implications on how the developers are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expected to use it going forward since this is altering the coding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Fair enough, will do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since this one was kinda weird, do you want an after-the-fact RFC, or
</span><br>
<span class="quotelev2">&gt;&gt; a page on the wiki?  I'm partial to the latter; it'll be more  
</span><br>
<span class="quotelev2">&gt;&gt; durable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The side effect of eliminating duplicate error messages is new /  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not discussed last Tuesday -- I can put out an RFC for that if  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you'd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like, but the benefit is so obvious that I didn't think it would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; controversial.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Don't get me wrong, I'm not arguing the benefit just that I'd  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; know what is expected of me as a developer after this change.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's perfectly reasonable.  In short: s/opal_show_help/
</span><br>
<span class="quotelev2">&gt;&gt; orte_show_help/ in the ORTE and OMPI layers, and you're done  
</span><br>
<span class="quotelev2">&gt;&gt; (which we
</span><br>
<span class="quotelev2">&gt;&gt; already did throughout the code base).  Use orte_show_help in the  
</span><br>
<span class="quotelev2">&gt;&gt; ORTE
</span><br>
<span class="quotelev2">&gt;&gt; and OMPI layers in the future.  I think this information should go on
</span><br>
<span class="quotelev2">&gt;&gt; the wiki.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to complete that, you also should:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; s/opal_output/orte_output
</span><br>
<span class="quotelev1">&gt; s/OPAL_OUTPUT/ORTE_OUTPUT
</span><br>
<span class="quotelev1">&gt; s/OPAL_OUTPUT_VERBOSE/ORTE_OUTPUT_VERBOSE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; throughout ORTE and OMPI layers in the future.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This has also been done in the current code base.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, per a conversation that I had with Terry earlier today, I
</span><br>
<span class="quotelev2">&gt;&gt; added a new MCA parameter that will turn off the show_help message
</span><br>
<span class="quotelev2">&gt;&gt; aggregation.  It defaults to aggregation enabled, but you can disable
</span><br>
<span class="quotelev2">&gt;&gt; it with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      ... --mca orte_base_help_aggregation 0 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This will show *all* show_help messages, regardless of duplication.
</span><br>
<span class="quotelev2">&gt;&gt; Terry was worried that aggregating the same (filename, tuple)  
</span><br>
<span class="quotelev2">&gt;&gt; messages
</span><br>
<span class="quotelev2">&gt;&gt; may actually mask different errors because we allow %s expansion in
</span><br>
<span class="quotelev2">&gt;&gt; the message.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Re-examining George's mail in this thread, I think he may have had
</span><br>
<span class="quotelev2">&gt;&gt; similar concerns, but I didn't grok that at the time.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3895.php">Jeff Squyres: "Re: [OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>Previous message:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>In reply to:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
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
