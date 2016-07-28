<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 08:25:55 2007" -->
<!-- isoreceived="20071004122555" -->
<!-- sent="Thu, 4 Oct 2007 08:25:24 -0400" -->
<!-- isosent="20071004122524" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Fwd: MTT server error (user: iu)" -->
<!-- id="864C589E-166E-4017-BF16-D409AAB8DD66_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A3DF6565-8419-4B7C-BF75-A7898773E94C_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-04 08:25:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weird I just got about 100 of these messages again this morning.  
<br>
Something with the setup Tim M has that is causing the MTT client to  
<br>
not send the mpi_install_id (maybe not sending any mpi_install data).
<br>
<p>I won't have time to look at this in the near term, but as you all  
<br>
are sitting down in Paris you might want to take a look at what he  
<br>
has setup to see if there are any glaring errors.
<br>
<p>-- Josh
<br>
<p>On Oct 1, 2007, at 12:04 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; No, AI should also send the MPI_Install info.  I successfully use AI
</span><br>
<span class="quotelev1">&gt; for HP MPI and Intel MPI coll bakeoff testing...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2007, at 5:59 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have recently been receiving a ton of errors like the following. I
</span><br>
<span class="quotelev2">&gt;&gt; traced it as best I could to an 'Already Installed' configuration
</span><br>
<span class="quotelev2">&gt;&gt; that Tim M is running on BigRed for the collectives bakeoff. Is it
</span><br>
<span class="quotelev2">&gt;&gt; possible that the AlreadyInstalled is not even trying to send any
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Install information?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: October 1, 2007 11:49:34 AM EDT
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: MTT server error (user: iu)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; get_mpi_install_ids(0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SELECT mpi_install_id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        compute_cluster_id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mpi_install_compiler_id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mpi_get_id,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        mpi_install_configure_id
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FROM mpi_install
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	mpi_install_id = '0'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Invalid mpi_install_id () given. Guessing that it should be 0 .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0139.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Reply:</strong> <a href="0147.php">Jeff Squyres: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
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
