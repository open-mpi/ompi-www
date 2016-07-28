<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:14:03 2014" -->
<!-- isoreceived="20140311221403" -->
<!-- sent="Tue, 11 Mar 2014 15:13:27 -0700" -->
<!-- isosent="20140311221327" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma" -->
<!-- id="0B8AEBB3-6AC0-4571-A2A8-C12A38B2F3D5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="60B7075E-34AD-4D94-A5C8-020601DEF081_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 18:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14326.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Up to Nathan - I was just quieting the warning :-)
<br>
<p>On Mar 11, 2014, at 3:06 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Might want to replace the bzero with memset while you're at it.  I recall hitting portability problems on weird systems and Linux systems where features.h has been poked the wrong way with &quot;_POSIX_SOURCE&quot; and friends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 11, 2014, at 4:59 PM, svn-commit-mailer_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2014-03-11 17:59:17 EDT (Tue, 11 Mar 2014)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 31005
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31005">https://svn.open-mpi.org/trac/ompi/changeset/31005</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Silence warning
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cmr=v1.8:reviewer=hjelmn
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified: 
</span><br>
<span class="quotelev2">&gt;&gt;  trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c |     2 +-                                      
</span><br>
<span class="quotelev2">&gt;&gt;  1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Modified: trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c
</span><br>
<span class="quotelev2">&gt;&gt; ==============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c	Tue Mar 11 17:42:42 2014	(r31004)
</span><br>
<span class="quotelev2">&gt;&gt; +++ trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c	2014-03-11 17:59:17 EDT (Tue, 11 Mar 2014)	(r31005)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev2">&gt;&gt; mca_bcol_basesmuma_module_construct(mca_bcol_basesmuma_module_t *module)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;    /* initialize all values to 0 */
</span><br>
<span class="quotelev2">&gt;&gt; -    bzero ((uintptr_t) module + sizeof (module-&gt;super), sizeof (*module) - sizeof (module-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt; +    bzero ((void*)((uintptr_t) module + sizeof (module-&gt;super)), sizeof (*module) - sizeof (module-&gt;super));
</span><br>
<span class="quotelev2">&gt;&gt;    module-&gt;super.bcol_component = (mca_bcol_base_component_t *) &amp;mca_bcol_basesmuma_component;
</span><br>
<span class="quotelev2">&gt;&gt;    module-&gt;super.list_n_connected = NULL;
</span><br>
<span class="quotelev2">&gt;&gt;    module-&gt;super.hier_scather_offset = 0;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; svn mailing list
</span><br>
<span class="quotelev2">&gt;&gt; svn_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14326.php">http://www.open-mpi.org/community/lists/devel/2014/03/14326.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14329.php">Orion Poplawski: "Re: [OMPI devel] Fwd: Re: [Score-P support] Compile errors of Fedora rawhide"</a>
<li><strong>Previous message:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>In reply to:</strong> <a href="14326.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
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
