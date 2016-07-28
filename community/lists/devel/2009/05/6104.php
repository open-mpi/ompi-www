<?
$subject_val = "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 06:49:16 2009" -->
<!-- isoreceived="20090527104916" -->
<!-- sent="Wed, 27 May 2009 12:49:11 +0200" -->
<!-- isosent="20090527104911" -->
<!-- name="Holger Mickler" -->
<!-- email="holger.mickler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?" -->
<!-- id="4A1D1AA7.5040202_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="DB216FE9-B08B-4E47-874A-125F7653207C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?<br>
<strong>From:</strong> Holger Mickler (<em>holger.mickler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 06:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>In reply to:</strong> <a href="6088.php">Jeff Squyres: "[OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, all,
<br>
<p>would you mind sharing this patch? We'd like to test our current VT version with
<br>
some MPI RMA code :)
<br>
<p>Does anyone know of some (small) code/benchmark that uses all available MPI RMA
<br>
functionality? As far as I see, IMB only uses fence and put/get/accumulate. No
<br>
locks or post/wait/start/complete...
<br>
<p>Thanks!
<br>
<p>Holger
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; We've had IMB 3.1 in the ompi-tests svn for a long time; it's what I run
</span><br>
<span class="quotelev1">&gt; in my nightly MTT.  I just uploaded 3.2 as well, and will be switching
</span><br>
<span class="quotelev1">&gt; my nightly MTT to use it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** Note that I have applied a custom bug fix to IMB_window.c in 3.1/3.2
</span><br>
<span class="quotelev1">&gt; to make the code function properly -- otherwise OMPI [correctly] aborts
</span><br>
<span class="quotelev1">&gt; right near the beginning (per MPI-2.1 11.2.1.  I've notified Intel of
</span><br>
<span class="quotelev1">&gt; the fix; they're examining it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it time to remove IMB 2.3 from ompi-tests?  Or, more specifically, is
</span><br>
<span class="quotelev1">&gt; there any reason to keep 2.3 around?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6105.php">Ralph Castain: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6103.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>In reply to:</strong> <a href="6088.php">Jeff Squyres: "[OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Reply:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
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
