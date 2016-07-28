<?
$subject_val = "Re: [OMPI devel] RFC: initial MPI_T support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 14:56:47 2013" -->
<!-- isoreceived="20130405185647" -->
<!-- sent="Fri, 5 Apr 2013 12:56:41 -0600" -->
<!-- isosent="20130405185641" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: initial MPI_T support" -->
<!-- id="20130405185641.GE48939_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130405185211.GD48939_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: initial MPI_T support<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 14:56:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, please look at the thread level support. We had some discussion at the forum about what level should be returned depending on which function is called first (MPI_T_init_thread or MPI_Init_thread). I don't think it was clarified what should be done but since it will be in future errata what is in the current implementation should be fine for now.
<br>
<p>-Nathan
<br>
<p>On Fri, Apr 05, 2013 at 12:52:12PM -0600, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; What: Add initial support for the MPI 3.0 tools interface (MPI_T). Inital support includes full support for the MPI_T_cvar and MPI_T_category interfaces. No pvars are available at this time. Support for pvars will be added at a later time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: To be MPI 3.0 compliant the MPI_T interface must be implemented. This RFC implements the complete interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Monday April 8, 2013. We can make adjustments to the implementation after it is committed to the trunk. The only changes that really need to be reviewed are: ompi/include/mpi.h.in, and structure of the incomming code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes can be found @ <a href="https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit">https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff, I added the MPI_T error codes to mpif-values.pl even though they will never be returned by a fortran function. Don't know if that was necessary or not. Please advise.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Look at:
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1">https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d">https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12251.php">Nathan Hjelm: "[OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12253.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
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
