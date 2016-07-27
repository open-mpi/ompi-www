<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  1 12:04:27 2007" -->
<!-- isoreceived="20071001160427" -->
<!-- sent="Mon, 1 Oct 2007 18:04:07 +0200" -->
<!-- isosent="20071001160407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Fwd: MTT server error (user: iu)" -->
<!-- id="A3DF6565-8419-4B7C-BF75-A7898773E94C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="04891A02-F6D7-4DC8-9471-BC9D60E3AAF9_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-01 12:04:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres (jsquyres): "[MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No, AI should also send the MPI_Install info.  I successfully use AI  
<br>
for HP MPI and Intel MPI coll bakeoff testing...
<br>
<p><p>On Oct 1, 2007, at 5:59 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; I have recently been receiving a ton of errors like the following. I
</span><br>
<span class="quotelev1">&gt; traced it as best I could to an 'Already Installed' configuration
</span><br>
<span class="quotelev1">&gt; that Tim M is running on BigRed for the collectives bakeoff. Is it
</span><br>
<span class="quotelev1">&gt; possible that the AlreadyInstalled is not even trying to send any
</span><br>
<span class="quotelev1">&gt; MPI_Install information?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Date: October 1, 2007 11:49:34 AM EDT
</span><br>
<span class="quotelev2">&gt;&gt; To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: MTT server error (user: iu)
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; get_mpi_install_ids(0):
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; SELECT mpi_install_id,
</span><br>
<span class="quotelev2">&gt;&gt;        compute_cluster_id,
</span><br>
<span class="quotelev2">&gt;&gt;        mpi_install_compiler_id,
</span><br>
<span class="quotelev2">&gt;&gt;        mpi_get_id,
</span><br>
<span class="quotelev2">&gt;&gt;        mpi_install_configure_id
</span><br>
<span class="quotelev2">&gt;&gt; FROM mpi_install
</span><br>
<span class="quotelev2">&gt;&gt; WHERE
</span><br>
<span class="quotelev2">&gt;&gt; 	mpi_install_id = '0'
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Invalid mpi_install_id () given. Guessing that it should be 0 .
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0140.php">Jeff Squyres (jsquyres): "[MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0138.php">Josh Hursey: "[MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
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
