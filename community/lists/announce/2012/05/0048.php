<?
$subject_val = "[Open MPI Announce] Open MPI v1.6 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 06:27:54 2012" -->
<!-- isoreceived="20120514102754" -->
<!-- sent="Mon, 14 May 2012 06:27:49 -0400" -->
<!-- isosent="20120514102749" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.6 released" -->
<!-- id="525A0692-8EE7-4CC6-9FF5-EAF15A3CFA38_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.6 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 06:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/08/0049.php">Jeff Squyres: "[Open MPI Announce] Open MPI 1.6.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/03/0047.php">Jeffrey Squyres: "[Open MPI Announce] Open MPI v1.5.5 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce a major release of Open MPI and the beginning of a new &quot;super stable&quot; release series: version 1.6. 
<br>
<p>The Open MPI project maintains two simultaneous release series:
<br>
<p>- v1.4.x (i.e., v1.even): &quot;super stable&quot; series, where only bug fixes are applied
<br>
- v1.5.x (i.e., v1.odd): &quot;feature&quot; series, where new features are developed
<br>
<p>v1.6 is a major release; it effectively deprecates both the v1.4.x and v1.5.x series, and replaces v1.4.x as the current &quot;super stable&quot; series.  A forthcoming v1.7 series will become the new &quot;feature&quot; series.
<br>
<p>*All users* -- including production users and downstream providers -- are encouraged to upgrade to v1.6.
<br>
<p>Note that v1.6 is ABI compatible with the entire v1.5.x series, but is not ABI compatible with the v1.4.x series.  See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology.
<br>
<p>Version 1.6 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries will be available shortly; mirrors will also be updating soon). 
<br>
<p>Here is a list of changes in v1.6 as compared to v1.5.5:
<br>
<p>- Fix some process affinity issues.  When binding a process, Open MPI
<br>
&nbsp;&nbsp;will now bind to all available hyperthreads in a core (or socket,
<br>
&nbsp;&nbsp;depending on the binding options specified).
<br>
&nbsp;&nbsp;--&gt; Note that &quot;mpirun --bind-to-socket ...&quot; does not work on POWER6-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and POWER7-based systems with some Linux kernel versions.  See
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the FAQ on the Open MPI web site for more information.
<br>
- Add support for ARM5 and ARM6 (in addition to the existing ARM7
<br>
&nbsp;&nbsp;support).  Thanks to Evan Clinton for the patch.
<br>
- Minor Mellanox MXM fixes.
<br>
- Properly detect FDR10, FDR, and EDR OpenFabrics devices.
<br>
- Minor fixes to the mpirun(1) and MPI_Comm_create(3) man pages.
<br>
- Prevent segv if COMM_SPAWN_MULTIPLE fails.  Thanks to Fujitsu for
<br>
&nbsp;&nbsp;the patch.
<br>
- Disable interposed memory management in fakeroot environments.  This
<br>
&nbsp;&nbsp;fixes a problem in some build environments.
<br>
- Minor hwloc updates.
<br>
- Array versions of MPI_TEST and MPI_WAIT with a count==0 will now
<br>
&nbsp;&nbsp;return immediately with MPI_SUCCESS.  Thanks to Jeremiah Willcock
<br>
&nbsp;&nbsp;for the suggestion.
<br>
- Update VampirTrace to v5.12.2.
<br>
- Properly handle forwarding stdin to all processes when &quot;mpirun
<br>
&nbsp;&nbsp;--stdin all&quot; is used.
<br>
- Workaround XLC assembly bug.
<br>
- OS X Tiger (10.3) has not been supported for a while, so forcibly
<br>
&nbsp;&nbsp;abort configure if we detect it.
<br>
- Fix segv in the openib BTL when running on SPARC 64 systems.
<br>
- Fix some include file ordering issues on some BSD-based platforms.
<br>
&nbsp;&nbsp;Thanks to Paul Hargove for this (and many, many other) fixes.
<br>
- Properly handle .FALSE. return parameter value to attribute copy
<br>
&nbsp;&nbsp;callback functions.
<br>
- Fix a bunch of minor C++ API issues; thanks to Fujitsu for the patch.
<br>
- Fixed the default hostfile MCA parameter behavior.
<br>
- Per the MPI spec, ensure not to touch the port_name parameter to
<br>
&nbsp;&nbsp;MPI_CLOSE_PORT (it's an IN parameter).
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/08/0049.php">Jeff Squyres: "[Open MPI Announce] Open MPI 1.6.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2012/03/0047.php">Jeffrey Squyres: "[Open MPI Announce] Open MPI v1.5.5 released"</a>
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
