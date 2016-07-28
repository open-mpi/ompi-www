<?
$subject_val = "[OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 27 22:20:25 2012" -->
<!-- isoreceived="20120728022025" -->
<!-- sent="Fri, 27 Jul 2012 22:20:31 -0400" -->
<!-- isosent="20120728022031" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.6.1rc1 posted" -->
<!-- id="BAD12141-16FC-4F01-822E-C84129AA03BB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-27 22:20:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11334.php">George Bosilca: "[OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11340.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11340.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Finally!  It's in the usual place:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Please test, especially with low-registered-memory-available scenarios with Mellanox OpenFabrics devices.
<br>
<p>Here's a list of changes since 1.6:
<br>
<p>- A bunch of changes to eliminate hangs on OpenFabrics-based networks.
<br>
&nbsp;&nbsp;Users with Mellanox hardware are ***STRONGLY ENCOURAGED*** to check
<br>
&nbsp;&nbsp;their registered memory kernel module settings to ensure that the OS
<br>
&nbsp;&nbsp;will allow registering more than 8GB of memory.  See this FAQ item
<br>
&nbsp;&nbsp;for details:
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>&nbsp;&nbsp;- Fall back to send/receive semantics if registered memory is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unavilable for RDMA.
<br>
&nbsp;&nbsp;- Fix two fragment leaks when registered memory is exhausted.
<br>
&nbsp;&nbsp;- Hueristically determine how much registered memory is available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and warn if it's significantly less than all of RAM.
<br>
&nbsp;&nbsp;- Artifically limit the amount of registered memory each MPI process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;can use to about 1/Nth to total registered memory available.
<br>
&nbsp;&nbsp;- Improve error messages when events occur that are likely due to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;unexpected registered memory exhaustion.
<br>
&nbsp;&nbsp;- Remove the last openib default per-peer receive queue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;specification (and make it an SRQ).
<br>
<p>- Switch the MPI_ALLTOALLV default algorithm to a pairwise exchange.
<br>
- Increase the openib BTL default CQ length to handle more types of
<br>
&nbsp;&nbsp;OpenFabrics devices.
<br>
- Lots of VampirTrace fixes; upgrade to v5.13.0.4.
<br>
- Map MPI_2INTEGER to underlying MPI_INTEGERs, not MPI_INTs.
<br>
- Ensure that the OMPI version number is toleant of handling spaces.
<br>
&nbsp;&nbsp;Thanks to dragonboy for identifying the issue.
<br>
- Fixed IN parameter marking on Fortran &quot;mpi&quot; module
<br>
&nbsp;&nbsp;MPI_COMM_TEST_INTER interface.
<br>
- Various MXM improvements.
<br>
- Make the output of &quot;mpirun --report-bindings&quot; much more friendly /
<br>
&nbsp;&nbsp;human-readable.
<br>
- Properly handle MPI_COMPLEX8|16|32.
<br>
- More fixes for mpirun's processor affinity options (--bind-to-core
<br>
&nbsp;&nbsp;and friends).
<br>
- Use aligned memory for OpenFabrics registered memory.
<br>
- Multiple fixes for parameter checking in MPI_ALLGATHERV,
<br>
&nbsp;&nbsp;MPI_REDUCE_SCATTER, MPI_SCATTERV, and MPI_GATHERV.  Thanks to the
<br>
&nbsp;&nbsp;mpi4py community (Bennet Fauber, Lisandro Dalcin, Jonathan Dursi).
<br>
- Fixed file positioning overflows in MPI_FILE_GET_POSITION,
<br>
&nbsp;&nbsp;MPI_FILE_GET_POSITION_SHARED, FILE_GET_SIZE, FILE_GET_VIEW.
<br>
- Removed the broken --cpu-set mpirun option.
<br>
- Fix cleanup of MPI errorcodes.  Thanks to Alexey Bayduraev for the
<br>
&nbsp;&nbsp;patch.
<br>
- Fix default hostfile location.  Thanks to G&#246;tz Waschk for noticing
<br>
&nbsp;&nbsp;the issue.
<br>
- Improve several error messages.
<br>
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
<li><strong>Next message:</strong> <a href="11336.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11334.php">George Bosilca: "[OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11340.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11340.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11370.php">Paul Kapinos: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
