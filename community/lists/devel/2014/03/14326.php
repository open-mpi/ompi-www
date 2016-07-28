<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 18:06:47 2014" -->
<!-- isoreceived="20140311220647" -->
<!-- sent="Tue, 11 Mar 2014 22:06:46 +0000" -->
<!-- isosent="20140311220646" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma" -->
<!-- id="60B7075E-34AD-4D94-A5C8-020601DEF081_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140311215918.14578160E59_at_tiger.crest.iu.edu" -->
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
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 18:06:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14325.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>Reply:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Might want to replace the bzero with memset while you're at it.  I recall hitting portability problems on weird systems and Linux systems where features.h has been poked the wrong way with &quot;_POSIX_SOURCE&quot; and friends.
<br>
<p>-Dave
<br>
<p>On Mar 11, 2014, at 4:59 PM, svn-commit-mailer_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: rhc (Ralph Castain)
</span><br>
<span class="quotelev1">&gt; Date: 2014-03-11 17:59:17 EDT (Tue, 11 Mar 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 31005
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/31005">https://svn.open-mpi.org/trac/ompi/changeset/31005</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Silence warning
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.8:reviewer=hjelmn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c |     2 +-                                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 1 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c	Tue Mar 11 17:42:42 2014	(r31004)
</span><br>
<span class="quotelev1">&gt; +++ trunk/ompi/mca/bcol/basesmuma/bcol_basesmuma_module.c	2014-03-11 17:59:17 EDT (Tue, 11 Mar 2014)	(r31005)
</span><br>
<span class="quotelev1">&gt; @@ -85,7 +85,7 @@
</span><br>
<span class="quotelev1">&gt; mca_bcol_basesmuma_module_construct(mca_bcol_basesmuma_module_t *module)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     /* initialize all values to 0 */
</span><br>
<span class="quotelev1">&gt; -    bzero ((uintptr_t) module + sizeof (module-&gt;super), sizeof (*module) - sizeof (module-&gt;super));
</span><br>
<span class="quotelev1">&gt; +    bzero ((void*)((uintptr_t) module + sizeof (module-&gt;super)), sizeof (*module) - sizeof (module-&gt;super));
</span><br>
<span class="quotelev1">&gt;     module-&gt;super.bcol_component = (mca_bcol_base_component_t *) &amp;mca_bcol_basesmuma_component;
</span><br>
<span class="quotelev1">&gt;     module-&gt;super.list_n_connected = NULL;
</span><br>
<span class="quotelev1">&gt;     module-&gt;super.hier_scather_offset = 0;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14327.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14325.php">Jeff Squyres (jsquyres): "[OMPI devel] v1.7.5rc2 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
<li><strong>Reply:</strong> <a href="14328.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r31005 - trunk/ompi/mca/bcol/basesmuma"</a>
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
