<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 10:06:03 2013" -->
<!-- isoreceived="20130718140603" -->
<!-- sent="Thu, 18 Jul 2013 14:05:58 +0000" -->
<!-- isosent="20130718140558" -->
<!-- name="David Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="8E25A938F00ED34D90F8C49322FDF1928C0CF8_at_xmb-rcd-x09.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A81595BB-8098-4809-B7C7-650807C472F7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> David Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 10:05:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>In reply to:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's a good point, and a bad behavior. IIRC, it results from the MPI Forum's adoption of the MPI-T requirement that stipulates we must allow access to all control and performance variables at startup so they can be externally seen/manipulated.
</span><br>
<p>Minor nit: MPI_T does not require this.  However, it does recommend that you offer users access to as many variables as possible as early as reasonably possible for the convenience and control of the user.
<br>
<p>If an implementation chooses to offer 5% of the possible control/performance variables to the user just before MPI_Finalize, that's still a valid MPI_T implementation.  But it may not be a very useful one...
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>In reply to:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12648.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
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
