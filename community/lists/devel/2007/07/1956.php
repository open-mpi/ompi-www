<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 17:01:03 2007" -->
<!-- isoreceived="20070719210103" -->
<!-- sent="Thu, 19 Jul 2007 15:00:53 -0600" -->
<!-- isosent="20070719210053" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Removal of cellid" -->
<!-- id="C2C52D25.A155%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2BFEBC0.348C%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-19 17:00:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1957.php">Lisandro Dalcin: "[OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<li><strong>Previous message:</strong> <a href="1955.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>In reply to:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This change has finally been merged into the trunk as r15517. It will
<br>
unfortunately require an autogen (sorry).
<br>
<p>Please let me know if you encounter any problems. As noted in the commit, I
<br>
tried to catch all the places that required change, but cannot guarantee
<br>
that I got all of them.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 7/15/07 3:20 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yo folks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have completed the removal of the cellid from the orte_process_name_t
</span><br>
<span class="quotelev1">&gt; struct on a tmp branch. Tim Prins has successfully tested it on odin, thor,
</span><br>
<span class="quotelev1">&gt; and bigred at IU - I have checked it on coyote and yellowrail at LANL, as
</span><br>
<span class="quotelev1">&gt; well as on a standalone Mac. It seems to work just fine in all those
</span><br>
<span class="quotelev1">&gt; environments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Accordingly, I plan to check it into the trunk late Monday afternoon
</span><br>
<span class="quotelev1">&gt; (probably around 4pm Eastern). As part of the change, I'll be getting rid of
</span><br>
<span class="quotelev1">&gt; some obsolete test code, plus the setup_hnp and orte-console code (the
</span><br>
<span class="quotelev1">&gt; latter depends upon the former, which is so obsolete it won't run anyway -
</span><br>
<span class="quotelev1">&gt; and our revised launch procedure won't support).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just wanted to give you a &quot;heads-up&quot; in case you have any tmp branches out
</span><br>
<span class="quotelev1">&gt; there that might be impacted. I rolled the Voltaire tmp branch into the
</span><br>
<span class="quotelev1">&gt; trunk in preparation for this change so I could deal with the conflicts
</span><br>
<span class="quotelev1">&gt; (rather than asking them to do so).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
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
<li><strong>Next message:</strong> <a href="1957.php">Lisandro Dalcin: "[OMPI devel] COVERITY STATIC SOURCE CODE ANALYSIS"</a>
<li><strong>Previous message:</strong> <a href="1955.php">George Bosilca: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15516"</a>
<li><strong>In reply to:</strong> <a href="1898.php">Ralph Castain: "[OMPI devel] Removal of cellid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
<li><strong>Reply:</strong> <a href="1968.php">Aurelien Bouteiller: "Re: [OMPI devel] Removal of cellid"</a>
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
