<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 10:30:23 2007" -->
<!-- isoreceived="20070926143023" -->
<!-- sent="Wed, 26 Sep 2007 10:30:18 -0400" -->
<!-- isosent="20070926143018" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.2.4 released" -->
<!-- id="ea86ce220709260730u1487c16egaf8a1bb1d448d0b0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 10:30:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/11/0017.php">Jeff Squyres: "[Open MPI Announce] MPI-2.1: Getting the band back together"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/06/0015.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,
<br>
and industry partners, is pleased to announce the release of Open MPI
<br>
version 1.2.4. This release is mainly a bug fix release over the v1.2.3
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.2.4 if possible.
<br>
<p>Version 1.2.4 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here are a list of changes in v1.2.4 as compared to v1.2.3:
<br>
<p>- Really added support for TotalView/DDT parallel debugger message queue
<br>
&nbsp;&nbsp;debugging (it was mistakenly listed as &quot;added&quot; in the 1.2 release).
<br>
- Fixed a build issue with GNU/kFreeBSD. Thanks to Petr Salinger for
<br>
&nbsp;&nbsp;the patch.
<br>
- Added missing MPI_FILE_NULL constant in Fortran.  Thanks to
<br>
&nbsp;&nbsp;Bernd Schubert for bringing this to our attention.
<br>
- Change such that the UDAPL BTL is now only built in Linux when
<br>
&nbsp;&nbsp;explicitly specified via the --with-udapl configure command line
<br>
&nbsp;&nbsp;switch.
<br>
- Fixed an issue with umask not being propagated when using the TM
<br>
&nbsp;&nbsp;launcher.
<br>
- Fixed behavior if number of slots is not the same on all bproc nodes.
<br>
- Fixed a hang on systems without GPR support (ex. Cray XT3/4).
<br>
- Prevent users of 32-bit MPI apps from requesting &gt;= 2GB of shared
<br>
&nbsp;&nbsp;memory.
<br>
- Added a Portals MTL.
<br>
- Fix 0 sized MPI_ALLOC_MEM requests.  Thanks to Lisandro Dalcin for
<br>
&nbsp;&nbsp;pointing out the problem.
<br>
- Fixed a segfault crash on large SMPs when doing collectives.
<br>
- A variety of fixes for Cray XT3/4 class of machines.
<br>
- Fixed which error handler is used when MPI_COMM_SELF is passed
<br>
&nbsp;&nbsp;to MPI_COMM_FREE.  Thanks to Lisandro Dalcini for the bug report.
<br>
- Fixed compilation on platforms that don't have hton/ntoh.
<br>
- Fixed a logic problem in the fortran binding for MPI_TYPE_MATCH_SIZE.
<br>
&nbsp;&nbsp;Thanks to Jeff Dusenberry for pointing out the problem and supplying
<br>
&nbsp;&nbsp;the fix.
<br>
- Fixed a problem with MPI_BOTTOM in various places of the f77-interface.
<br>
&nbsp;&nbsp;Thanks to Daniel Spangberg for bringing this up.
<br>
- Fixed problem where MPI-optional Fortran datatypes were not
<br>
&nbsp;&nbsp;correctly initialized.
<br>
- Fixed several problems with stdin/stdout forwarding.
<br>
- Fixed overflow problems with the sm mpool MCA parameters on large SMPs.
<br>
- Added support for the DDT parallel debugger via orterun's --debug
<br>
&nbsp;&nbsp;command line option.
<br>
- Added some sanity/error checks to the openib MCA parameter parsing
<br>
&nbsp;&nbsp;code.
<br>
- Updated the udapl BTL to use RDMA capabilities.
<br>
- Allow use of the BProc head node if it was allocated to the user.
<br>
&nbsp;&nbsp;Thanks to Sean Kelly for reporting the problem and helping debug it.
<br>
- Fixed a ROMIO problem where non-blocking I/O errors were not properly
<br>
&nbsp;&nbsp;reported to the user.
<br>
- Made remote process launch check the $SHELL environment variable if
<br>
&nbsp;&nbsp;a valid shell was not otherwise found for the user.
<br>
&nbsp;&nbsp;Thanks to Alf Wachsmann for the bugreport and suggested fix.
<br>
- Added/updated some vendor IDs for a few openib HCAs.
<br>
- Fixed a couple of failures that could occur when specifying devices
<br>
&nbsp;&nbsp;for use by the OOB.
<br>
- Removed dependency on sysfsutils from the openib BTL for
<br>
&nbsp;&nbsp;libibverbs &gt;=v1.1 (i.e., OFED 1.2 and beyond).
<br>
<p><pre>
--
Tim Mattox
Open Systems Lab
Indiana University
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/11/0017.php">Jeff Squyres: "[Open MPI Announce] MPI-2.1: Getting the band back together"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2007/06/0015.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.3 released"</a>
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
