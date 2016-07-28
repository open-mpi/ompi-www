<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 20:40:28 2005" -->
<!-- isoreceived="20050902014028" -->
<!-- sent="Thu, 01 Sep 2005 19:40:22 -0600" -->
<!-- isosent="20050902014022" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  RHC development plans" -->
<!-- id="6.2.3.4.2.20050901193707.01f9cda0_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20050901065954.01d8be08_at_pobox1663.lanl.gov" -->
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
<strong>Date:</strong> 2005-09-01 20:40:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Jeff Squyres: "IU odin cluster"</a>
<li><strong>In reply to:</strong> <a href="0288.php">Ralph H. Castain: "RHC development plans"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>I have now completed the first three of these items. I believe this 
<br>
brings ORTE to a stage that is - at the least - very close to release 
<br>
quality. There are a few memory leaks left (oob and iof subsystems), 
<br>
but I'm not as familiar with those and have asked for help.
<br>
<p>Barring any requests, I propose to hold off on the remaining items 
<br>
and any other ORTE improvements until after the trunk (or at least, 
<br>
the orte section) is branched for the release. Once that happens, 
<br>
I'll start working on the items below. Also plan to work on enabling 
<br>
multi-cell operations...!
<br>
<p>Ralph
<br>
<p>At 07:08 AM 9/1/2005, you wrote:
<br>
<span class="quotelev1">&gt;Yo folks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Several people have asked lately what I am planning to do next on
</span><br>
<span class="quotelev1">&gt;ORTE. Just to help maintain coordination, here is my current list of
</span><br>
<span class="quotelev1">&gt;planned activities (in priority order). Any requests/suggestions are
</span><br>
<span class="quotelev1">&gt;welcomed - this isn't in concrete by any means.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1. Add George's architecture info to the proc subscription
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2. Investigate and plug memory leaks, particularly in the registry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;3. Remove warning when default universe can't be contacted, but leave
</span><br>
<span class="quotelev1">&gt;it in for non-default universes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;4. Eliminate singleton and infrastructure flags - just do what needs
</span><br>
<span class="quotelev1">&gt;to be done. Believe the singleton one can be done - infrastructure is
</span><br>
<span class="quotelev1">&gt;not quite as clear
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;5. Revise system to allow existence of multiple cells and to create
</span><br>
<span class="quotelev1">&gt;associations between jobid's - involves removing cellid from process
</span><br>
<span class="quotelev1">&gt;name, creation of job &quot;groups&quot;, and a variety of associated
</span><br>
<span class="quotelev1">&gt;alterations. This is needed to allow multiple apps to run and for
</span><br>
<span class="quotelev1">&gt;correct persistent operations ala the Eclipse effort.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0296.php">Brian Barrett: "Re:  gm configure status"</a>
<li><strong>Previous message:</strong> <a href="0294.php">Jeff Squyres: "IU odin cluster"</a>
<li><strong>In reply to:</strong> <a href="0288.php">Ralph H. Castain: "RHC development plans"</a>
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
