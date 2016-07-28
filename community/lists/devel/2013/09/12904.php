<?
$subject_val = "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 16 06:08:40 2013" -->
<!-- isoreceived="20130916100840" -->
<!-- sent="Mon, 16 Sep 2013 10:08:38 +0000" -->
<!-- isosent="20130916100838" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8AFA03_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20130910224031.5ca8b6a7_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-16 06:08:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12903.php">Ralph Castain: "[OMPI devel] 1.7.3 warnings"</a>
<li><strong>In reply to:</strong> <a href="12882.php">Micha&#197;&#130; Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This has been applied to the trunk and the 1.6 nightlies (although 1.6.6 is unlikely to occur).  It will likely also be in 1.7.3.
<br>

<br>
Thanks for the patch!
<br>

<br>
On Sep 10, 2013, at 10:40 PM, Micha&#197;&#130; Pecio &lt;michal.pecio_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; The function orte_iof_base_setup_prefork attempts to create a pty for
</span><br>
<span class="quotelev1">&gt; child stdout and falls back to plain pipe if openpty fails. Child uses
</span><br>
<span class="quotelev1">&gt; the 'usepty' flag to decide whether to treat this descriptor as a pty
</span><br>
<span class="quotelev1">&gt; or as a pipe.
</span><br>
<span class="quotelev1">&gt; Set 'usepty' flag to 0 upon openpty failure to inform the child that
</span><br>
<span class="quotelev1">&gt; it isn't dealing with a pty even though pty has been requested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch applies against svn trunk and v1.6.5, where I found this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/iof/base/iof_base_setup.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/iof/base/iof_base_setup.c  (revision 29155)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/iof/base/iof_base_setup.c  (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -94,6 +94,7 @@
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     if (ret &lt; 0) {
</span><br>
<span class="quotelev1">&gt; +        opts-&gt;usepty = 0;
</span><br>
<span class="quotelev1">&gt;         if (pipe(opts-&gt;p_stdout) &lt; 0) {
</span><br>
<span class="quotelev1">&gt;             ORTE_ERROR_LOG(ORTE_ERR_SYS_LIMITS_PIPES);
</span><br>
<span class="quotelev1">&gt;             return ORTE_ERR_SYS_LIMITS_PIPES;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12903.php">Ralph Castain: "[OMPI devel] 1.7.3 warnings"</a>
<li><strong>In reply to:</strong> <a href="12882.php">Micha&#197;&#130; Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
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
