<?
$subject_val = "Re: [OMPI devel] Committing to release branches";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 22 07:56:01 2010" -->
<!-- isoreceived="20100722115601" -->
<!-- sent="Thu, 22 Jul 2010 14:01:52 +0200" -->
<!-- isosent="20100722120152" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Committing to release branches" -->
<!-- id="1279800112.15370.3994.camel_at_B014522" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EB6C243C-4634-4509-822B-E31333ADF49C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Committing to release branches<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-22 08:01:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<li><strong>In reply to:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Reply:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2010-07-22 at 07:50 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I think I probably wasn't clear to Nadia in my instructions for ticket #2492.  So I have updated CMR procedures on the wiki:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/SubmittingChangesetMoveReqs">https://svn.open-mpi.org/trac/ompi/wiki/SubmittingChangesetMoveReqs</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In general:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Only the gatekeeper and administrators are supposed to commit to release branches.
</span><br>
<span class="quotelev1">&gt; - The CMR process is what queues up commits for gatekeepers to apply to release branches.
</span><br>
<span class="quotelev1">&gt; - If you have a CMR that contains one or more r numbers that don't apply cleanly to the target release branch (e.g., if it creates conflicts), the gatekeeper will kick it back to the submitter to fix.
</span><br>
<span class="quotelev1">&gt; - You fix it by getting a SVN checkout of the branch and creating a specific patch.
</span><br>
<span class="quotelev1">&gt; - You should then apply that patch to the ticket and let the gatekeeper apply it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Oops, so sorry. So now I have the answer to my question: I was wondering
<br>
why you wanted me to attach the patch to the CMR...
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: &lt;derbeyn_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: July 22, 2010 7:06:00 AM EDT
</span><br>
<span class="quotelev2">&gt; &gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: [OMPI svn-full] svn:open-mpi r23474
</span><br>
<span class="quotelev2">&gt; &gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Author: derbeyn
</span><br>
<span class="quotelev2">&gt; &gt; Date: 2010-07-22 07:05:59 EDT (Thu, 22 Jul 2010)
</span><br>
<span class="quotelev2">&gt; &gt; New Revision: 23474
</span><br>
<span class="quotelev2">&gt; &gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/23474">https://svn.open-mpi.org/trac/ompi/changeset/23474</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Log:
</span><br>
<span class="quotelev2">&gt; &gt; Fixes ticket 2492: Wrong event_type value passed in to show_help when getting xrc async events
</span><br>
<span class="quotelev2">&gt; &gt; Text files modified:
</span><br>
<span class="quotelev2">&gt; &gt;    branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c |     5 +++--                                  
</span><br>
<span class="quotelev2">&gt; &gt;    1 files changed, 3 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Modified: branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c
</span><br>
<span class="quotelev2">&gt; &gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c        (original)
</span><br>
<span class="quotelev2">&gt; &gt; +++ branches/v1.5/ompi/mca/btl/openib/btl_openib_async.c        2010-07-22 07:05:59 EDT (Thu, 22 Jul 2010)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -350,7 +350,8 @@
</span><br>
<span class="quotelev2">&gt; &gt;              case IBV_EVENT_PORT_ERR:
</span><br>
<span class="quotelev2">&gt; &gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of error event&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                      true,orte_process_info.nodename, orte_process_info.pid,
</span><br>
<span class="quotelev2">&gt; &gt; -                    event.event_type, openib_event_to_str(event.event_type),
</span><br>
<span class="quotelev2">&gt; &gt; +                    event_type,
</span><br>
<span class="quotelev2">&gt; &gt; +                    openib_event_to_str((enum ibv_event_type)event_type),
</span><br>
<span class="quotelev2">&gt; &gt;                      xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;                  break;
</span><br>
<span class="quotelev2">&gt; &gt;              case IBV_EVENT_COMM_EST:
</span><br>
<span class="quotelev2">&gt; &gt; @@ -376,7 +377,7 @@
</span><br>
<span class="quotelev2">&gt; &gt;              default:
</span><br>
<span class="quotelev2">&gt; &gt;                  orte_show_help(&quot;help-mpi-btl-openib.txt&quot;, &quot;of unknown event&quot;,
</span><br>
<span class="quotelev2">&gt; &gt;                          true,orte_process_info.nodename, orte_process_info.pid,
</span><br>
<span class="quotelev2">&gt; &gt; -                        event.event_type, xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev2">&gt; &gt; +                        event_type, xrc_event ? &quot;true&quot; : &quot;false&quot;);
</span><br>
<span class="quotelev2">&gt; &gt;          }
</span><br>
<span class="quotelev2">&gt; &gt;          ibv_ack_async_event(&amp;event);
</span><br>
<span class="quotelev2">&gt; &gt;      } else {
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; svn-full mailing list
</span><br>
<span class="quotelev2">&gt; &gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8206.php">Jeff Squyres: "Re: [OMPI devel] GCC atomic intrinsics"</a>
<li><strong>Previous message:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<li><strong>In reply to:</strong> <a href="8204.php">Jeff Squyres: "[OMPI devel] Committing to release branches"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
<li><strong>Reply:</strong> <a href="8207.php">Ralph Castain: "Re: [OMPI devel] Committing to release branches"</a>
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
