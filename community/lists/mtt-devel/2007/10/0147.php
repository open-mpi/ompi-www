<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct  4 18:16:18 2007" -->
<!-- isoreceived="20071004221618" -->
<!-- sent="Fri, 5 Oct 2007 00:16:13 +0200" -->
<!-- isosent="20071004221613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Fwd: MTT server error (user: iu)" -->
<!-- id="3B6595BF-B4EE-446F-8B74-764F9B0A95F5_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="864C589E-166E-4017-BF16-D409AAB8DD66_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-10-04 18:16:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think Ethan/Tim figured it out, but I know that Tim's still working  
<br>
on the IU MTT setup for the bakeoff...
<br>
<p><p>On Oct 4, 2007, at 2:25 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Weird I just got about 100 of these messages again this morning.
</span><br>
<span class="quotelev1">&gt; Something with the setup Tim M has that is causing the MTT client to
</span><br>
<span class="quotelev1">&gt; not send the mpi_install_id (maybe not sending any mpi_install data).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I won't have time to look at this in the near term, but as you all
</span><br>
<span class="quotelev1">&gt; are sitting down in Paris you might want to take a look at what he
</span><br>
<span class="quotelev1">&gt; has setup to see if there are any glaring errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 1, 2007, at 12:04 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, AI should also send the MPI_Install info.  I successfully use AI
</span><br>
<span class="quotelev2">&gt;&gt; for HP MPI and Intel MPI coll bakeoff testing...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 1, 2007, at 5:59 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have recently been receiving a ton of errors like the following. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; traced it as best I could to an 'Already Installed' configuration
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that Tim M is running on BigRed for the collectives bakeoff. Is it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible that the AlreadyInstalled is not even trying to send any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Install information?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Begin forwarded message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: October 1, 2007 11:49:34 AM EDT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: MTT server error (user: iu)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: jjhursey_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; get_mpi_install_ids(0):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SELECT mpi_install_id,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        compute_cluster_id,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        mpi_install_compiler_id,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        mpi_get_id,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        mpi_install_configure_id
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FROM mpi_install
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 	mpi_install_id = '0'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Invalid mpi_install_id () given. Guessing that it should be 0 .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="0148.php">Josh Hursey: "Re: [MTT devel] MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>In reply to:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
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
