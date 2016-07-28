<?
$subject_val = "Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 10 10:49:44 2014" -->
<!-- isoreceived="20140410144944" -->
<!-- sent="Thu, 10 Apr 2014 14:49:42 +0000" -->
<!-- isosent="20140410144942" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes" -->
<!-- id="A259592C-DB0E-420D-B3E6-3B01A0FC2BE2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEcYPwDcyS-mPJiPdxLuX_0aLs_7iS2VnmFAmOcE0JLOQC1XFQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-10 10:49:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14488.php">Adrian Reber: "[OMPI devel] Restarting and Pipes"</a>
<li><strong>Previous message:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>In reply to:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Lisandro; I filed <a href="https://svn.open-mpi.org/trac/ompi/ticket/4509">https://svn.open-mpi.org/trac/ompi/ticket/4509</a> for this.
<br>
<p><p>On Apr 10, 2014, at 7:50 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; I'm testing openmpi-1.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Get_error_string() for the following error classes is failing. I
</span><br>
<span class="quotelev1">&gt; guess you just forgot to update the list of error strings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_ERR_RMA_RANGE
</span><br>
<span class="quotelev1">&gt;    MPI_ERR_RMA_ATTACH
</span><br>
<span class="quotelev1">&gt;    MPI_ERR_RMA_FLAVOR
</span><br>
<span class="quotelev1">&gt;    MPI_ERR_RMA_SHARED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm attaching a simple test code for you to verify the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Additionally, please update the following comment in mpi.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Per MPI-3 p349 47, MPI_ERR_LASTCODE must be &gt;= the last predefined
</span><br>
<span class="quotelev1">&gt;   MPI_ERR_&lt;foo&gt; code.  So just set it equal to the last code --
</span><br>
<span class="quotelev1">&gt;   MPI_ERR_RMA_FLAVOR, in this case. */
</span><br>
<span class="quotelev1">&gt; #define MPI_ERR_LASTCODE              MPI_ERR_RMA_SHARED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The comment is wrong, the last predefined error class is
</span><br>
<span class="quotelev1">&gt; MPI_ERR_RMA_SHARED and not  MPI_ERR_RMA_FLAVOR.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; CIMEC (UNL/CONICET)
</span><br>
<span class="quotelev1">&gt; Predio CONICET-Santa Fe
</span><br>
<span class="quotelev1">&gt; Colectora RN 168 Km 472, Paraje El Pozo
</span><br>
<span class="quotelev1">&gt; 3000 Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel: +54-342-4511594 (ext 1016)
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-342-4511169
</span><br>
<span class="quotelev1">&gt; &lt;geterrstr.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14486.php">http://www.open-mpi.org/community/lists/devel/2014/04/14486.php</a>
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
<li><strong>Next message:</strong> <a href="14488.php">Adrian Reber: "[OMPI devel] Restarting and Pipes"</a>
<li><strong>Previous message:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
<li><strong>In reply to:</strong> <a href="14486.php">Lisandro Dalcin: "[OMPI devel] Missing error strings for MPI_ERR_RMA_XXX error classes"</a>
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
