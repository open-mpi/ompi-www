<?
$subject_val = "[Open MPI Announce] Open MPI 1.6.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 22 14:07:49 2012" -->
<!-- isoreceived="20120822180749" -->
<!-- sent="Wed, 22 Aug 2012 14:07:33 -0400" -->
<!-- isosent="20120822180733" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.6.1 released" -->
<!-- id="2407A118-E766-49AC-83B2-B3DCA628D505_at_cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.6.1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-22 14:07:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/09/0050.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/05/0048.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.1.
<br>
<p>Version 1.6.1 is mainly a bugfix release.  All users are encouraged to upgrade to v1.6.1 when possible.
<br>
<p>Note that v1.6.1 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology. 
<br>
<p>Version 1.6.1 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries will be available shortly; mirrors will also be updating soon). 
<br>
<p>Here is a list of changes in v1.6.1 as compared to v1.6:
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
<p>- Fix double semicolon error in the C++ in &lt;mpi.h&gt;.  Thanks to John
<br>
&nbsp;&nbsp;Foster for pointing out the issue.
<br>
- Allow -Xclang to be specified multiple times in CFLAGS.  Thanks to
<br>
&nbsp;&nbsp;P. Martin for raising the issue.
<br>
- Break up a giant &quot;print *&quot; statement in the ABI-preserving incorrect
<br>
&nbsp;&nbsp;MPI_SCATTER interface in the &quot;large&quot; Fortran &quot;mpi&quot; module.  Thanks
<br>
&nbsp;&nbsp;to Juan Escobar for the initial patch.
<br>
- Switch the MPI_ALLTOALLV default algorithm to a pairwise exchange.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/09/0050.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/05/0048.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.6 released"</a>
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
