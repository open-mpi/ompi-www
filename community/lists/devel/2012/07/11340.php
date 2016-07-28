<?
$subject_val = "Re: [OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 10:38:21 2012" -->
<!-- isoreceived="20120730143821" -->
<!-- sent="Mon, 30 Jul 2012 10:38:09 -0400" -->
<!-- isosent="20120730143809" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc1 posted" -->
<!-- id="259D2E93-8782-430B-A772-6CCD479C22D9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAD12141-16FC-4F01-822E-C84129AA03BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 10:38:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11341.php">Jeff Squyres: "[OMPI devel] www.open-mpi.org scheduled maintenance tomorrow morning"</a>
<li><strong>Previous message:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>In reply to:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1.6.1rc1 is a bust because of a compile error.  :(
<br>
<p>It wasn't caught on the build machine because it's a bug in the openib BTL, and the build machine doesn't have OpenFabrics support.
<br>
<p>1.6.1rc2 will be posted later today.
<br>
<p><p><p>On Jul 27, 2012, at 10:20 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Finally!  It's in the usual place:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please test, especially with low-registered-memory-available scenarios with Mellanox OpenFabrics devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a list of changes since 1.6:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - A bunch of changes to eliminate hangs on OpenFabrics-based networks.
</span><br>
<span class="quotelev1">&gt;  Users with Mellanox hardware are ***STRONGLY ENCOURAGED*** to check
</span><br>
<span class="quotelev1">&gt;  their registered memory kernel module settings to ensure that the OS
</span><br>
<span class="quotelev1">&gt;  will allow registering more than 8GB of memory.  See this FAQ item
</span><br>
<span class="quotelev1">&gt;  for details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  - Fall back to send/receive semantics if registered memory is
</span><br>
<span class="quotelev1">&gt;    unavilable for RDMA.
</span><br>
<span class="quotelev1">&gt;  - Fix two fragment leaks when registered memory is exhausted.
</span><br>
<span class="quotelev1">&gt;  - Hueristically determine how much registered memory is available
</span><br>
<span class="quotelev1">&gt;    and warn if it's significantly less than all of RAM.
</span><br>
<span class="quotelev1">&gt;  - Artifically limit the amount of registered memory each MPI process
</span><br>
<span class="quotelev1">&gt;    can use to about 1/Nth to total registered memory available.
</span><br>
<span class="quotelev1">&gt;  - Improve error messages when events occur that are likely due to
</span><br>
<span class="quotelev1">&gt;    unexpected registered memory exhaustion.
</span><br>
<span class="quotelev1">&gt;  - Remove the last openib default per-peer receive queue
</span><br>
<span class="quotelev1">&gt;    specification (and make it an SRQ).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Switch the MPI_ALLTOALLV default algorithm to a pairwise exchange.
</span><br>
<span class="quotelev1">&gt; - Increase the openib BTL default CQ length to handle more types of
</span><br>
<span class="quotelev1">&gt;  OpenFabrics devices.
</span><br>
<span class="quotelev1">&gt; - Lots of VampirTrace fixes; upgrade to v5.13.0.4.
</span><br>
<span class="quotelev1">&gt; - Map MPI_2INTEGER to underlying MPI_INTEGERs, not MPI_INTs.
</span><br>
<span class="quotelev1">&gt; - Ensure that the OMPI version number is toleant of handling spaces.
</span><br>
<span class="quotelev1">&gt;  Thanks to dragonboy for identifying the issue.
</span><br>
<span class="quotelev1">&gt; - Fixed IN parameter marking on Fortran &quot;mpi&quot; module
</span><br>
<span class="quotelev1">&gt;  MPI_COMM_TEST_INTER interface.
</span><br>
<span class="quotelev1">&gt; - Various MXM improvements.
</span><br>
<span class="quotelev1">&gt; - Make the output of &quot;mpirun --report-bindings&quot; much more friendly /
</span><br>
<span class="quotelev1">&gt;  human-readable.
</span><br>
<span class="quotelev1">&gt; - Properly handle MPI_COMPLEX8|16|32.
</span><br>
<span class="quotelev1">&gt; - More fixes for mpirun's processor affinity options (--bind-to-core
</span><br>
<span class="quotelev1">&gt;  and friends).
</span><br>
<span class="quotelev1">&gt; - Use aligned memory for OpenFabrics registered memory.
</span><br>
<span class="quotelev1">&gt; - Multiple fixes for parameter checking in MPI_ALLGATHERV,
</span><br>
<span class="quotelev1">&gt;  MPI_REDUCE_SCATTER, MPI_SCATTERV, and MPI_GATHERV.  Thanks to the
</span><br>
<span class="quotelev1">&gt;  mpi4py community (Bennet Fauber, Lisandro Dalcin, Jonathan Dursi).
</span><br>
<span class="quotelev1">&gt; - Fixed file positioning overflows in MPI_FILE_GET_POSITION,
</span><br>
<span class="quotelev1">&gt;  MPI_FILE_GET_POSITION_SHARED, FILE_GET_SIZE, FILE_GET_VIEW.
</span><br>
<span class="quotelev1">&gt; - Removed the broken --cpu-set mpirun option.
</span><br>
<span class="quotelev1">&gt; - Fix cleanup of MPI errorcodes.  Thanks to Alexey Bayduraev for the
</span><br>
<span class="quotelev1">&gt;  patch.
</span><br>
<span class="quotelev1">&gt; - Fix default hostfile location.  Thanks to G&#246;tz Waschk for noticing
</span><br>
<span class="quotelev1">&gt;  the issue.
</span><br>
<span class="quotelev1">&gt; - Improve several error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11341.php">Jeff Squyres: "[OMPI devel] www.open-mpi.org scheduled maintenance tomorrow morning"</a>
<li><strong>Previous message:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>In reply to:</strong> <a href="11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
