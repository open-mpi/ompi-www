<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  1 09:10:28 2013" -->
<!-- isoreceived="20131101131028" -->
<!-- sent="Fri, 1 Nov 2013 13:10:26 +0000" -->
<!-- isosent="20131101131026" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9A2D48_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGKz=uKR4KYFPQYapsfGmk5LnPsQktE2foangu6-DyFYDdUj8g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-01 09:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2013, at 6:03 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Why not just make your first level internal API equivalent to the MPI
</span><br>
<span class="quotelev1">&gt; public API except for s/int/size_t/g and have the Fortran bindings
</span><br>
<span class="quotelev1">&gt; drop directly into that?  Going through the C int-erface seems like a
</span><br>
<span class="quotelev1">&gt; recipe for endless pain...
</span><br>
<p><p>The design decision was made a long time ago to have the Fortran bindings call the C bindings so that we only had to have all the MPI API error checking code in one place (e.g., bad arguments and all that).
<br>
<p>We *probably* could skip the C bindings:
<br>
<p>- The Fortran bindings are in the middle of a (long term) revamp to be completely generated (vs. hand-coded).  This effort will take a while to complete, but will happen eventually.  The point here is that the generated code could certainly skip calling the C bindings (although it certainly is easier to call the C bindings -- that makes it more formulaic to generate).
<br>
<p>- Not all the back-end APIs understand &quot;large&quot; integers.  For example, back-end MPI_INFO API calls only handle int, and would need to be updated.  The only point here is that there's more to do than just calling the back-end APIs -- even though the message-passing APIs use large integers internally, the non-sexy/non-message-passing stuff doesn't.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22891.php">Jeff Hammond: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
