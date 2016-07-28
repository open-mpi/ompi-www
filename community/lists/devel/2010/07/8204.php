<?
$subject_val = "[OMPI devel] Committing to release branches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 07:50:18 2010" -->
<!-- isoreceived="20100722115018" -->
<!-- sent="Thu, 22 Jul 2010 07:50:56 -0400" -->
<!-- isosent="20100722115056" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Committing to release branches" -->
<!-- id="EB6C243C-4634-4509-822B-E31333ADF49C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201007221106.o6MB60eW025068_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Committing to release branches<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 07:50:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8203.php">Jeff Squyres: "[OMPI devel] MPI_GET_COUNT in v1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Reply:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I probably wasn't clear to Nadia in my instructions for ticket #2492.  So I have updated CMR procedures on the wiki:
<br>
<p>&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/wiki/SubmittingChangesetMoveReqs">https://svn.open-mpi.org/trac/ompi/wiki/SubmittingChangesetMoveReqs</a>
<br>
<p>In general:
<br>
<p>- Only the gatekeeper and administrators are supposed to commit to release branches.
<br>
- The CMR process is what queues up commits for gatekeepers to apply to release branches.
<br>
- If you have a CMR that contains one or more r numbers that don't apply cleanly to the target release branch (e.g., if it creates conflicts), the gatekeeper will kick it back to the submitter to fix.
<br>
- You fix it by getting a SVN checkout of the branch and creating a specific patch.
<br>
- You should then apply that patch to the ticket and let the gatekeeper apply it.
<br>
<p><p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;derbeyn_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: July 22, 2010 7:06:00 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r23474
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: derbeyn
</span><br>
<span class="quotelev1">&gt; Date: 2010-07-22 07:05:59 EDT (Thu, 22 Jul 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 23474
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23474">https://svn.open-mpi.org/trac/ompi/changeset/23474</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes ticket 2492: Wrong event_type value passed in to show_help when getting xrc async events
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c |     5 +++--                                  
</span><br>
<span class="quotelev1">&gt;    1 files changed, 3 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c        (original)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c        2010-07-22 07:05:59 EDT (Thu, 22 Jul 2010)
</span><br>
<span class="quotelev1">&gt; @@ -350,7 +350,8 @@
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_PORT_ERR:
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of error event&quot;,
</span><br>
<span class="quotelev1">&gt;                      true,orte_process_info.nodename, orte_process_info.pid,
</span><br>
<span class="quotelev1">&gt; -                    event.event_type, openib_event_to_str(event.event_type),
</span><br>
<span class="quotelev1">&gt; +                    event_type,
</span><br>
<span class="quotelev1">&gt; +                    openib_event_to_str((enum ibv_event_type)event_type),
</span><br>
<span class="quotelev1">&gt;                      xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev1">&gt;                  break;
</span><br>
<span class="quotelev1">&gt;              case IBV_EVENT_COMM_EST:
</span><br>
<span class="quotelev1">&gt; @@ -376,7 +377,7 @@
</span><br>
<span class="quotelev1">&gt;              default:
</span><br>
<span class="quotelev1">&gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
</span><br>
<span class="quotelev1">&gt;                          true,orte_process_info.nodename, orte_process_info.pid,
</span><br>
<span class="quotelev1">&gt; -                        event.event_type, xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev1">&gt; +                        event_type, xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;          ibv_ack_async_event(&amp;event);
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Previous message:</strong> <a href="8203.php">Jeff Squyres: "[OMPI devel] MPI_GET_COUNT in v1.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Reply:</strong> <a href="8205.php">nadia.derbey: "Re: [OMPI devel] Committing to release branches"</a>
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
