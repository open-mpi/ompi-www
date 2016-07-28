<?
$subject_val = "Re: [OMPI devel] New mapper module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 17 10:15:26 2008" -->
<!-- isoreceived="20080417141526" -->
<!-- sent="Thu, 17 Apr 2008 10:14:41 -0400" -->
<!-- isosent="20080417141441" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New mapper module" -->
<!-- id="9B82D67C-ECD6-4429-9D3E-8AB4778B37BA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C42CB573.D201%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New mapper module<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-17 10:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3714.php">Ralph H Castain: "[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings"</a>
<li><strong>Previous message:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet!
<br>
<p>On Apr 17, 2008, at 10:06 AM, Ralph H Castain wrote:
<br>
<span class="quotelev1">&gt; I have implemented and committed (r18190) a new RMAPS module that
</span><br>
<span class="quotelev1">&gt; sequentially maps ranks to the hosts listed in a hostfile. You must  
</span><br>
<span class="quotelev1">&gt; set -mca
</span><br>
<span class="quotelev1">&gt; rmaps seq in order to access this module - it will -not- be selected  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; other way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic method of operation respects the hostfile descriptions on  
</span><br>
<span class="quotelev1">&gt; the wiki
</span><br>
<span class="quotelev1">&gt; page, but I will describe it here briefly as well:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. if we are in a managed environment, we will only map to nodes  
</span><br>
<span class="quotelev1">&gt; within the
</span><br>
<span class="quotelev1">&gt; allocation. If your hostfile contains nodes outside the allocation,  
</span><br>
<span class="quotelev1">&gt; we will
</span><br>
<span class="quotelev1">&gt; report an error and abort. So if you want to map ranks sequentially,  
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev1">&gt; need to be sure that the hostfile describing this mapping contains  
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev1">&gt; hosts that -can- be mapped. In an unmanaged environment, we  
</span><br>
<span class="quotelev1">&gt; automatically
</span><br>
<span class="quotelev1">&gt; include all the nodes in any specified hostfiles, so this won't be a
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. if you specify a default-hostfile, we will use it - however, any
</span><br>
<span class="quotelev1">&gt; hostfiles specified for an app_context will override the default- 
</span><br>
<span class="quotelev1">&gt; hostfile.
</span><br>
<span class="quotelev1">&gt; Any apps that do -not- have a hostfile specified will be mapped  
</span><br>
<span class="quotelev1">&gt; sequentially
</span><br>
<span class="quotelev1">&gt; to the hosts in the default-hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. if your app_context does not specify a number of procs, we will
</span><br>
<span class="quotelev1">&gt; automatically map one proc to each and every entry in the hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. if your app_context does specify a number of procs, we will  
</span><br>
<span class="quotelev1">&gt; sequentially
</span><br>
<span class="quotelev1">&gt; map that number of procs, one to each entry in the hostfile. Multiple
</span><br>
<span class="quotelev1">&gt; app_contexts are supported, with the sequence continuing across the
</span><br>
<span class="quotelev1">&gt; app_contexts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. if you specify a number of procs greater than the number of  
</span><br>
<span class="quotelev1">&gt; entries in
</span><br>
<span class="quotelev1">&gt; your hostfile, we will map the overrun using byslot rules - i.e., we  
</span><br>
<span class="quotelev1">&gt; will
</span><br>
<span class="quotelev1">&gt; start by filling the remaining slots on the first node in your  
</span><br>
<span class="quotelev1">&gt; hostfile,
</span><br>
<span class="quotelev1">&gt; then proceed to fill the second node in your hostfile, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. if your allocation does not permit oversubscription, we will  
</span><br>
<span class="quotelev1">&gt; report an
</span><br>
<span class="quotelev1">&gt; error and abort if you attempt to place more procs on a node than  
</span><br>
<span class="quotelev1">&gt; slots.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3714.php">Ralph H Castain: "[OMPI devel] Using do-not-launch, display-map, and do-not-resolve to test mappings"</a>
<li><strong>Previous message:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
<li><strong>In reply to:</strong> <a href="3712.php">Ralph H Castain: "[OMPI devel] New mapper module"</a>
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
