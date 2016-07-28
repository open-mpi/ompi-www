<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 15:07:44 2011" -->
<!-- isoreceived="20111213200744" -->
<!-- sent="Tue, 13 Dec 2011 15:07:38 -0500" -->
<!-- isosent="20111213200738" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621" -->
<!-- id="9F7D43E6-B73F-48F7-B3BC-830E819DE061_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="AE45F2F55FE69B4F99BB3455E821D715C70FB5_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 15:07:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>In reply to:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's gone.  No worries.
<br>
<p><p>On Dec 13, 2011, at 1:46 PM, Hjelm, Nathan T wrote:
<br>
<p><span class="quotelev1">&gt; I don't know how load_balance got into my tree. I have tried several times to remove it and didn't see it in the commit message (looks like it was a single line). I can blow it away if it hasn't already been removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: Ralph Castain [rhc.openmpi_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, December 12, 2011 6:06 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha, so that is how it returned! Yes, that component was removed and needs to remain gone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPad
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 12, 2011, at 4:06 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It got in via a commit with the following log &quot;enable ptmalloc with using uGNI&quot;. Clearly it wasn't intended to be pushed yet.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 12, 2011, at 18:58 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, it failed to compile for me, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could have just ompi-ignored it, George.  And provided a little more detail on what was broken.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the compile errors that I get (RHEL 5.x, 64 bit, gcc, developer build):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {{{
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Entering directory `/home/jsquyres/svn/ompi3/orte/mca/rmaps/load_balance'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC     rmaps_lb.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c: In function &#145;switchyard&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:88:23: error: &#145;struct orte_job_map_t&#146; has no member named &#145;npernode&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:91:30: error: &#145;struct orte_job_map_t&#146; has no member named &#145;nperboard&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:94:30: error: &#145;struct orte_job_map_t&#146; has no member named &#145;npersocket&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:111:5: error: implicit declaration of function &#145;orte_rmaps_base_define_daemons&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c: In function &#145;npernode&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:152:73: error: &#145;struct orte_job_map_t&#146; has no member named &#145;policy&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:152:63: error: too few arguments to function &#145;orte_rmaps_base_get_target_nodes&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:52:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:163:13: error: implicit declaration of function &#145;orte_rmaps_base_claim_slot&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:165:88: error: &#145;struct orte_job_map_t&#146; has no member named &#145;oversubscribe&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:199:5: error: too few arguments to function &#145;orte_rmaps_base_compute_vpids&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:65:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c: In function &#145;nperboard&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:221:20: error: &#145;orte_default_num_boards&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:221:20: note: each undeclared identifier is reported only once for each function it appears in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:242:73: error: &#145;struct orte_job_map_t&#146; has no member named &#145;policy&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:242:63: error: too few arguments to function &#145;orte_rmaps_base_get_target_nodes&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:52:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:250:26: error: &#145;orte_node_t&#146; has no member named &#145;boards&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:252:27: error: &#145;orte_node_t&#146; has no member named &#145;boards&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:257:92: error: &#145;struct orte_job_map_t&#146; has no member named &#145;oversubscribe&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:292:5: error: too few arguments to function &#145;orte_rmaps_base_compute_vpids&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:65:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c: In function &#145;npersocket&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:315:21: error: &#145;orte_default_num_sockets_per_board&#146; undeclared (first use in this function)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:336:73: error: &#145;struct orte_job_map_t&#146; has no member named &#145;policy&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:336:63: error: too few arguments to function &#145;orte_rmaps_base_get_target_nodes&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:52:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:344:27: error: &#145;orte_node_t&#146; has no member named &#145;sockets_per_board&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:346:27: error: &#145;orte_node_t&#146; has no member named &#145;boards&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:348:31: error: &#145;orte_node_t&#146; has no member named &#145;sockets_per_board&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:353:96: error: &#145;struct orte_job_map_t&#146; has no member named &#145;oversubscribe&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:390:5: error: too few arguments to function &#145;orte_rmaps_base_compute_vpids&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:65:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c: In function &#145;loadbalance&#146;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:429:77: error: &#145;struct orte_job_map_t&#146; has no member named &#145;policy&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:429:67: error: too few arguments to function &#145;orte_rmaps_base_get_target_nodes&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:52:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:443:15: warning: assignment from incompatible pointer type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:455:92: error: &#145;struct orte_job_map_t&#146; has no member named &#145;oversubscribe&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:488:88: error: &#145;struct orte_job_map_t&#146; has no member named &#145;oversubscribe&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rmaps_lb.c:530:9: error: too few arguments to function &#145;orte_rmaps_base_compute_vpids&#146;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../orte/mca/rmaps/base/rmaps_private.h:65:19: note: declared here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [rmaps_lb.lo] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory `/home/jsquyres/svn/ompi3/orte/mca/rmaps/load_balance'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [15:57] svbu-mpi:~/svn/ompi3/orte %
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }}}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 12, 2011, at 6:55 PM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Broken !!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 12, 2011, at 15:52 , hjelmn_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Author: hjelmn
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Date: 2011-12-12 15:52:51 EST (Mon, 12 Dec 2011)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; New Revision: 25621
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/25621">https://svn.open-mpi.org/trac/ompi/changeset/25621</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Log:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; enable ptmalloc with using uGNI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Added:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/orte/mca/rmaps/load_balance/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  - copied from r25402, /trunk/orte/mca/rmaps/load_balance/
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trunk/opal/mca/memory/linux/hooks.c |     3 ++-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Modified: trunk/opal/mca/memory/linux/hooks.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --- trunk/opal/mca/memory/linux/hooks.c    (original)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +++ trunk/opal/mca/memory/linux/hooks.c    2011-12-12 15:52:51 EST (Mon, 12 Dec 2011)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; @@ -791,7 +791,8 @@
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     0 == stat(&quot;/dev/myri7&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     0 == stat(&quot;/dev/myri8&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     0 == stat(&quot;/dev/myri9&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -        0 == stat(&quot;/dev/ipath&quot;, &amp;st)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        0 == stat(&quot;/dev/ipath&quot;, &amp;st) ||
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; +        0 == stat(&quot;/dev/kgni0&quot;, &amp;st)) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     found_driver = true;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10074.php">Mike Dubman: "Re: [OMPI devel] Invalid free (btl_openib_endpoint.c, 448) in v1.5"</a>
<li><strong>Previous message:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
<li><strong>In reply to:</strong> <a href="10072.php">Hjelm, Nathan T: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r25621"</a>
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
