<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 08:15:08 2010" -->
<!-- isoreceived="20100430121508" -->
<!-- sent="Fri, 30 Apr 2010 08:15:02 -0400" -->
<!-- isosent="20100430121502" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="BACB133F-2478-4D6A-A496-1138315AC7A3_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Prayer.1.3.2.1004301059200.2885_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 08:15:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30, 2010, at 5:59 AM, N.M. Maclaren wrote:
<br>
<p><span class="quotelev1">&gt; MPI quite rightly does not specify this, because the matter is very system-
</span><br>
<span class="quotelev1">&gt; dependent, and it is not possible to return the exit code (or display it)
</span><br>
<span class="quotelev1">&gt; in all environments.  Sorry, but that is reality.
</span><br>
<p>Correct -- MPI intentionally does not say what happens after MPI_FINALIZE.  MPI intentionally doesn't even specify much about how to start an MPI job (just like Fortran, actually).
<br>
<p><span class="quotelev1">&gt; The last paragraph of the specification of MPI_Finalize makes it clear
</span><br>
<span class="quotelev1">&gt; that it is the USER'S responsibility to return an exit code to the system
</span><br>
<span class="quotelev1">&gt; for process 0, and that what happens for other ones is undefined.  Or
</span><br>
<span class="quotelev1">&gt; fairly clear - it could be stated in so many words, rather than being
</span><br>
<span class="quotelev1">&gt; implicit in the requirement on implementors.
</span><br>
<p>I don't think that's quite feasible, because the user doesn't directly control what mpirun returns.  So (many) implementations *have* to choose something from their job start agent (mpirun or mpiexec or whatever).
<br>
<p>I think OMPI's behavior of returning 0 from mpirun if and only if all processes call MPI_FINALIZE successfully *and* return 0 is good.  Return arbitrary nonzero if some process aborts (calling MPI_ABORT, not calling MPI_INIT, not calling MPI_FINALIZE, or otherwise).  Return any of the individual MPI processes' non-zero exit status if all call MPI_FINALIZE but some (or all) don't return an exit status of 0 (I don't have a strong opinion about which one to return -- e.g., the *first* one to return a non-zero exit value, the *highest* or *lowest* non-zero exit status, ...etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7849.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7851.php">N.M. Maclaren: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7855.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
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
