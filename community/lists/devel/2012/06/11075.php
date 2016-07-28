<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26539 - in branches/v1.6: . opal/mca/hwloc/hwloc132/hwloc/src";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 17:28:55 2012" -->
<!-- isoreceived="20120601212855" -->
<!-- sent="Fri, 1 Jun 2012 17:28:50 -0400" -->
<!-- isosent="20120601212850" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26539 - in branches/v1.6: . opal/mca/hwloc/hwloc132/hwloc/src" -->
<!-- id="D3F04D54-48ED-4AE9-BEF8-0D848A39FE21_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120601211336.158EE1638D2_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r26539 - in branches/v1.6: . opal/mca/hwloc/hwloc132/hwloc/src<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 17:28:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11076.php">George Bosilca: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
s/voice/void/
<br>
<p>:-)
<br>
<p>On Jun 1, 2012, at 5:13 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: bosilca (George Bosilca &lt;bosilca_at_[hidden]&gt;)
</span><br>
<span class="quotelev1">&gt; Date: 2012-06-01 17:13:35 EDT (Fri, 01 Jun 2012)
</span><br>
<span class="quotelev1">&gt; New Revision: 26539
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/26539">https://svn.open-mpi.org/trac/ompi/changeset/26539</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fixes #3112: Fix hwloc compiler warning in v1.6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What a non-voice function is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---svn-pre-commit-ignore-below---
</span><br>
<span class="quotelev1">&gt; r26524
</span><br>
<span class="quotelev1">&gt; Ensure to actually exit the non-voice function, even in non-debug
</span><br>
<span class="quotelev1">&gt; builds (i.e., where assert() is preprocessed away).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Properties modified: 
</span><br>
<span class="quotelev1">&gt;   branches/v1.6/   (props changed)
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   branches/v1.6/opal/mca/hwloc/hwloc132/hwloc/src/topology-libpci.c |     4 ++++                                    
</span><br>
<span class="quotelev1">&gt;   1 files changed, 4 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: branches/v1.6/opal/mca/hwloc/hwloc132/hwloc/src/topology-libpci.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/v1.6/opal/mca/hwloc/hwloc132/hwloc/src/topology-libpci.c	Fri Jun  1 17:11:30 2012	(r26538)
</span><br>
<span class="quotelev1">&gt; +++ branches/v1.6/opal/mca/hwloc/hwloc132/hwloc/src/topology-libpci.c	2012-06-01 17:13:35 EDT (Fri, 01 Jun 2012)	(r26539)
</span><br>
<span class="quotelev1">&gt; @@ -376,7 +376,11 @@
</span><br>
<span class="quotelev1">&gt;   if (a-&gt;attr-&gt;pcidev.func &gt; b-&gt;attr-&gt;pcidev.func)
</span><br>
<span class="quotelev1">&gt;     return HWLOC_PCI_BUSID_HIGHER;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +  /* Should never reach here.  Abort on both debug builds and
</span><br>
<span class="quotelev1">&gt; +     non-debug builds */
</span><br>
<span class="quotelev1">&gt;   assert(0);
</span><br>
<span class="quotelev1">&gt; +  fprintf(stderr, &quot;Bad assertion in hwloc %s:%d (aborting)\n&quot;, __FILE__, __LINE__);
</span><br>
<span class="quotelev1">&gt; +  exit(1);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static void
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11076.php">George Bosilca: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
<li><strong>Previous message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI devel] Open MPI services migration: part 1"</a>
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
