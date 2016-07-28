<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 20 10:20:55 2014" -->
<!-- isoreceived="20140820142055" -->
<!-- sent="Wed, 20 Aug 2014 08:20:54 -0600" -->
<!-- isosent="20140820142054" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif" -->
<!-- id="20140820142054.GA53758_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140820024848.140F015FCD4_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-20 10:20:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15666.php">Gilles Gouaillardet: "[OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really? That means PGI 2013 is NOT C99 compliant! Figures.
<br>
<p>-Nathan
<br>
<p>On Tue, Aug 19, 2014 at 10:48:48PM -0400, svn-commit-mailer_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Author: ggouaillardet (Gilles Gouaillardet)
</span><br>
<span class="quotelev1">&gt; Date: 2014-08-19 22:48:47 EDT (Tue, 19 Aug 2014)
</span><br>
<span class="quotelev1">&gt; New Revision: 32555
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/32555">https://svn.open-mpi.org/trac/ompi/changeset/32555</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; btl/scif: use safe syntax
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PGI compilers 2013 and older do not support the following syntax :
</span><br>
<span class="quotelev1">&gt; mca_btl_scif_modex_t modex = {.port_id = mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev1">&gt; so split it on two lines
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cmr=v1.8.2:reviewer=hjelmn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;    trunk/opal/mca/btl/scif/btl_scif_component.c |     3 ++-                                     
</span><br>
<span class="quotelev1">&gt;    1 files changed, 2 insertions(+), 1 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/opal/mca/btl/scif/btl_scif_component.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/opal/mca/btl/scif/btl_scif_component.c	Tue Aug 19 18:34:49 2014	(r32554)
</span><br>
<span class="quotelev1">&gt; +++ trunk/opal/mca/btl/scif/btl_scif_component.c	2014-08-19 22:48:47 EDT (Tue, 19 Aug 2014)	(r32555)
</span><br>
<span class="quotelev1">&gt; @@ -208,7 +208,8 @@
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  static int mca_btl_scif_modex_send (void)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -    mca_btl_scif_modex_t modex = {.port_id = mca_btl_scif_module.port_id};
</span><br>
<span class="quotelev1">&gt; +    mca_btl_scif_modex_t modex;
</span><br>
<span class="quotelev1">&gt; +    modex.port_id = mca_btl_scif_module.port_id;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;      return opal_modex_send (&amp;mca_btl_scif_component.super.btl_version, &amp;modex, sizeof (modex));
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn mailing list
</span><br>
<span class="quotelev1">&gt; svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn">http://www.open-mpi.org/mailman/listinfo.cgi/svn</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15667/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Previous message:</strong> <a href="15666.php">Gilles Gouaillardet: "[OMPI devel] MPI_Abort does not make mpirun return with the right exit code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<li><strong>Reply:</strong> <a href="15669.php">Paul Hargrove: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
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
