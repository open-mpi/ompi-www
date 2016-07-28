<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 18:14:50 2014" -->
<!-- isoreceived="20140729221450" -->
<!-- sent="Tue, 29 Jul 2014 16:14:49 -0600" -->
<!-- isosent="20140729221449" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib" -->
<!-- id="20140729221449.GJ43566_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140729221218.GI43566_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-29 18:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15332.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15332.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 29, 2014 at 04:12:18PM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah. Though it would be best to just check the source when you need to
</span><br>
<span class="quotelev1">&gt; see if it should come from the ini. Then if we need to set the value
</span><br>
<span class="quotelev1">&gt; from the ini either use mca_base_var_set_value or be sure to strdup when
</span><br>
<span class="quotelev1">&gt; changing the receive_queues value.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The thing to remember is the use may do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_T_init_thread ();
</span><br>
<p>I should note this calls the BTL's register function and MPI_Init will
<br>
call open.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15333/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15334.php">KAWASHIMA Takahiro: "Re: [OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15332.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>In reply to:</strong> <a href="15332.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
<li><strong>Reply:</strong> <a href="15341.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32346 - trunk/opal/mca/btl/openib"</a>
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
