<?
$subject_val = "[OMPI devel] common_verbs fix";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 11:01:29 2014" -->
<!-- isoreceived="20140325150129" -->
<!-- sent="Tue, 25 Mar 2014 15:01:27 +0000" -->
<!-- isosent="20140325150127" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] common_verbs fix" -->
<!-- id="B8CFA3B5-375C-458C-A1A7-84CEF5A9D072_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140325144109.93A2915F964_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [OMPI devel] common_verbs fix<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-25 11:01:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
<li><strong>Previous message:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
<li><strong>Reply:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike / Vasily / Alina --
<br>
<p>Are you guys using ompi_common_verbs_find_ports() somewhere?  I don't see it being used anyhere other than the usnnic btl.
<br>
<p>I ask because I was planning to consolidate this part of common verbs up into the usnic BTL in the not-distant future because no one else was using it.
<br>
<p>But if you're actually using it somewhere, I won't do that...
<br>
<p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: &lt;svn-commit-mailer_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI svn-full] svn:open-mpi r31200 - trunk/ompi/mca/common/verbs
</span><br>
<span class="quotelev1">&gt; Date: March 25, 2014 10:41:09 AM EDT
</span><br>
<span class="quotelev1">&gt; To: &lt;svn-full_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: alinas (Alina Sklarevich)
</span><br>
<span class="quotelev1">&gt; Date: 2014-03-25 10:41:09 EDT (Tue, 25 Mar 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31200
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31200">https://svn.open-mpi.org/trac/ompi/changeset/31200</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; common/verbs: added a call to ompi_ibv_free_device_list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the ompi_common_verbs_find_ports function had a call to
</span><br>
<span class="quotelev1">&gt; ompi_ibv_get_device_list, but not to ompi_ibv_free_device_list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; fixed by Alina, reviewed by Vasily/Mike.
</span><br>
<span class="quotelev1">&gt; cmr=v1.8:reviewer=ompi-rm1.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/common/verbs/common_verbs_find_ports.c |     2 ++                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 2 insertions(+), 0 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/common/verbs/common_verbs_find_ports.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/common/verbs/common_verbs_find_ports.c	Tue Mar 25 10:27:09 2014	(r31199)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/common/verbs/common_verbs_find_ports.c	2014-03-25 10:41:09 EDT (Tue, 25 Mar 2014)	(r31200)
</span><br>
<span class="quotelev1">&gt; @@ -638,6 +638,7 @@
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     /* All done! */
</span><br>
<span class="quotelev1">&gt; +    ompi_ibv_free_device_list(devices);
</span><br>
<span class="quotelev1">&gt;     return port_list;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  err_free_port_list:
</span><br>
<span class="quotelev1">&gt; @@ -646,6 +647,7 @@
</span><br>
<span class="quotelev1">&gt;          item = opal_list_remove_first(port_list)) {
</span><br>
<span class="quotelev1">&gt;         OBJ_RELEASE(item);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; +    ompi_ibv_free_device_list(devices);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  err_free_argv:
</span><br>
<span class="quotelev1">&gt;     if (NULL != if_sanity_list) {
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
<li><strong>Next message:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
<li><strong>Previous message:</strong> <a href="14386.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] example/Hello_c.c : mpirun run failed on two physical	nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
<li><strong>Reply:</strong> <a href="14388.php">Mike Dubman: "Re: [OMPI devel] common_verbs fix"</a>
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
