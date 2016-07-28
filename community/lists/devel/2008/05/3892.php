<?
$subject_val = "Re: [OMPI devel] Changes: opal_output and opal_show_help";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 12 17:49:20 2008" -->
<!-- isoreceived="20080512214920" -->
<!-- sent="Mon, 12 May 2008 17:49:00 -0400" -->
<!-- isosent="20080512214900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changes: opal_output and opal_show_help" -->
<!-- id="6C3E4CC0-0DD5-422A-86AC-3042BFE6F67E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5FB9C048-997A-45D1-9F64-E632C20BC828_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-12 17:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3891.php">Jeff Squyres: "[OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3890.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry it took so long for a reply; Ralph and I were working on this  
<br>
code much of the day in an attempt to have it all complete / tidied up  
<br>
for the teleconf tomorrow.
<br>
<p><p>On May 12, 2008, at 10:04 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Er, no.  I thought the group had agreed to the main idea last Tuesday
</span><br>
<span class="quotelev2">&gt;&gt; (framework for filtering output).  We were racing against the time- 
</span><br>
<span class="quotelev2">&gt;&gt; to-
</span><br>
<span class="quotelev2">&gt;&gt; branch clock and didn't take the time for an RFC after we agreed on
</span><br>
<span class="quotelev2">&gt;&gt; the design.  Do we need to?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't think so. But I'd just kinda like a more formal description of
</span><br>
<span class="quotelev1">&gt; what this fix is and it's implications on how the developers are
</span><br>
<span class="quotelev1">&gt; expected to use it going forward since this is altering the coding
</span><br>
<span class="quotelev1">&gt; standards.
</span><br>
<p>Fair enough, will do.
<br>
<p>Since this one was kinda weird, do you want an after-the-fact RFC, or  
<br>
a page on the wiki?  I'm partial to the latter; it'll be more durable.
<br>
<p><span class="quotelev2">&gt;&gt; The side effect of eliminating duplicate error messages is new / was
</span><br>
<span class="quotelev2">&gt;&gt; not discussed last Tuesday -- I can put out an RFC for that if you'd
</span><br>
<span class="quotelev2">&gt;&gt; like, but the benefit is so obvious that I didn't think it would be
</span><br>
<span class="quotelev2">&gt;&gt; controversial.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't get me wrong, I'm not arguing the benefit just that I'd like to
</span><br>
<span class="quotelev1">&gt; know what is expected of me as a developer after this change.
</span><br>
<p>That's perfectly reasonable.  In short: s/opal_show_help/ 
<br>
orte_show_help/ in the ORTE and OMPI layers, and you're done (which we  
<br>
already did throughout the code base).  Use orte_show_help in the ORTE  
<br>
and OMPI layers in the future.  I think this information should go on  
<br>
the wiki.
<br>
<p>Finally, per a conversation that I had with Terry earlier today, I  
<br>
added a new MCA parameter that will turn off the show_help message  
<br>
aggregation.  It defaults to aggregation enabled, but you can disable  
<br>
it with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;... --mca orte_base_help_aggregation 0 ...
<br>
<p>This will show *all* show_help messages, regardless of duplication.   
<br>
Terry was worried that aggregating the same (filename, tuple) messages  
<br>
may actually mask different errors because we allow %s expansion in  
<br>
the message.
<br>
<p>Re-examining George's mail in this thread, I think he may have had  
<br>
similar concerns, but I didn't grok that at the time.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Previous message:</strong> <a href="3891.php">Jeff Squyres: "[OMPI devel] heterogeneous OpenFabrics adapters"</a>
<li><strong>In reply to:</strong> <a href="3890.php">Josh Hursey: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
<li><strong>Reply:</strong> <a href="3893.php">Ralph Castain: "Re: [OMPI devel] Changes: opal_output and opal_show_help"</a>
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
