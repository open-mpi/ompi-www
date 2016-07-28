<?
$subject_val = "Re: [OMPI devel] RFC: initial MPI_T support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  5 15:45:06 2013" -->
<!-- isoreceived="20130405194506" -->
<!-- sent="Fri, 5 Apr 2013 12:44:59 -0700" -->
<!-- isosent="20130405194459" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: initial MPI_T support" -->
<!-- id="C04646EC-3274-43E5-96F6-FEBBD6F5D7BE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130405191100.GF48939_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-05 15:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12254.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12254.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let's bump it to Thurs - I trust what you say, but haven't had a chance to glance at the changes. Likewise, it would be nice to let Jeff return from vacation and look at it too.
<br>
<p><p>On Apr 5, 2013, at 12:11 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Yeah, I figured since the changes are self contained (doesn't tough many outside pieces except info support and mpi.h.in) it would be ok to do a short timeout. If not I can bump it to Thursday April 11.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 05, 2013 at 12:02:22PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ummmm....did you really mean a timeout of Mon?? Could you delay that a bit so we can actually have time to look at it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 5, 2013, at 11:56 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, please look at the thread level support. We had some discussion at the forum about what level should be returned depending on which function is called first (MPI_T_init_thread or MPI_Init_thread). I don't think it was clarified what should be done but since it will be in future errata what is in the current implementation should be fine for now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Apr 05, 2013 at 12:52:12PM -0600, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What: Add initial support for the MPI 3.0 tools interface (MPI_T). Inital support includes full support for the MPI_T_cvar and MPI_T_category interfaces. No pvars are available at this time. Support for pvars will be added at a later time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Why: To be MPI 3.0 compliant the MPI_T interface must be implemented. This RFC implements the complete interface.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When: Monday April 8, 2013. We can make adjustments to the implementation after it is committed to the trunk. The only changes that really need to be reviewed are: ompi/include/mpi.h.in, and structure of the incomming code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The changes can be found @ <a href="https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit">https://github.com/hjelmn/ompi-mca-var/tree/mpit-commit</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff, I added the MPI_T error codes to mpif-values.pl even though they will never be returned by a fortran function. Don't know if that was necessary or not. Please advise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Look at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1">https://github.com/hjelmn/ompi-mca-var/commit/689d7d5d95f982794bcba8afb385cdce80bf75e1</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d">https://github.com/hjelmn/ompi-mca-var/commit/80338e741b1749bb235b9cf45e0db579efe4d61d</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Previous message:</strong> <a href="12254.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>In reply to:</strong> <a href="12254.php">Nathan Hjelm: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
<li><strong>Reply:</strong> <a href="12256.php">Ralph Castain: "Re: [OMPI devel] RFC: initial MPI_T support"</a>
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
