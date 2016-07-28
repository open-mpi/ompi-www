<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 11:59:12 2007" -->
<!-- isoreceived="20071001155912" -->
<!-- sent="Mon, 1 Oct 2007 11:59:07 -0400" -->
<!-- isosent="20071001155907" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="[MTT devel] Fwd: MTT server error (user: iu)" -->
<!-- id="04891A02-F6D7-4DC8-9471-BC9D60E3AAF9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200710011549.l91FnYc4025094_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 11:59:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1066"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have recently been receiving a ton of errors like the following. I  
<br>
traced it as best I could to an 'Already Installed' configuration  
<br>
that Tim M is running on BigRed for the collectives bakeoff. Is it  
<br>
possible that the AlreadyInstalled is not even trying to send any  
<br>
MPI_Install information?
<br>
<p>-- Josh
<br>
<p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: October 1, 2007 11:49:34 AM EDT
</span><br>
<span class="quotelev1">&gt; To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: MTT server error (user: iu)
</span><br>
<span class="quotelev1">&gt; Reply-To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; get_mpi_install_ids(0):
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; SELECT mpi_install_id,
</span><br>
<span class="quotelev1">&gt;        compute_cluster_id,
</span><br>
<span class="quotelev1">&gt;        mpi_install_compiler_id,
</span><br>
<span class="quotelev1">&gt;        mpi_get_id,
</span><br>
<span class="quotelev1">&gt;        mpi_install_configure_id
</span><br>
<span class="quotelev1">&gt; FROM mpi_install
</span><br>
<span class="quotelev1">&gt; WHERE
</span><br>
<span class="quotelev1">&gt; 	mpi_install_id = '0'
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt; Invalid mpi_install_id () given. Guessing that it should be 0 .
</span><br>
<span class="quotelev1">&gt; -------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0137.php">Jeff Squyres: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1066"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
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
