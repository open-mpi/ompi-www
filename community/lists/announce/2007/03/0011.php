<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 15 19:20:31 2007" -->
<!-- isoreceived="20070315232031" -->
<!-- sent="Thu, 15 Mar 2007 19:19:43 -0400" -->
<!-- isosent="20070315231943" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Announcing the release of Open MPI version 1.2" -->
<!-- id="C21F4CCF.21BF%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-15 19:19:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.5"</a>
<li><strong>Previous message:</strong> <a href="../../2007/01/0010.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.4"</a>
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
version 1.2.  This release contains many bug fixes, feature
<br>
enhancements, and performance improvements over the v1.1 series,
<br>
including (but not limited to):
<br>
<p>&nbsp;&nbsp;&nbsp;* Much improved MPI collective algorithms
<br>
&nbsp;&nbsp;&nbsp;* General performance improvements throughout the entire code base
<br>
&nbsp;&nbsp;&nbsp;* Much improved run-time support, particularly when dealing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with error scenarios
<br>
&nbsp;&nbsp;&nbsp;* Support for MPI-matching networks such as Myrinet MX and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QLogic InfiniPath
<br>
&nbsp;&nbsp;&nbsp;* New support for Sun platforms: Solaris, Sun Studio compilers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N1GE / Grid Engine resource managers, uDAPL networks
<br>
&nbsp;&nbsp;&nbsp;* Tested with a variety of compilers on several platforms, including:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GNU, Intel, Portland, Pathscale, Sun Studio
<br>
&nbsp;&nbsp;&nbsp;* Improved support for heterogeneous execution environments to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;accommodate differences in CPU architectures and adapter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;capabilities 
<br>
<p>Version 1.2 can be downloaded from the main Open MPI web site or any
<br>
of its mirrors (mirrors will be updating shortly).
<br>
<p>We strongly recommend that all users upgrade to version 1.2 if possible.
<br>
<p>Here are a list of changes in v1.2 as compared to the soon to be released
<br>
v1.1.5:
<br>
<p>- Fixed race condition in the shared memory fifo's, which led to
<br>
&nbsp;&nbsp;orphaned messages.
<br>
- Corrected the size of the shared memory file - subtracted out the
<br>
&nbsp;&nbsp;space the header was occupying.
<br>
- Add support for MPI_2COMPLEX and MPI_2DOUBLE_COMPLEX.
<br>
- Always ensure to create $(includedir)/openmpi, even if the C++
<br>
&nbsp;&nbsp;bindings are disabled so that the wrapper compilers don't point to
<br>
&nbsp;&nbsp;a directory that doesn't exist.  Thanks to Martin Audet for
<br>
&nbsp;&nbsp;identifying the problem.
<br>
- Fixes for endian handling in MPI process startup.
<br>
- Openib BTL initialization fixes for cases where MPI processes in the
<br>
&nbsp;&nbsp;same job has different numbers of active ports on the same physical
<br>
&nbsp;&nbsp;fabric.
<br>
- Print more descriptive information when displaying backtraces on
<br>
&nbsp;&nbsp;OS's that support this functionality, such as the hostname and PID
<br>
&nbsp;&nbsp;of the process in question.
<br>
- Fixes to properly handle MPI exceptions in C++ on communicators,
<br>
&nbsp;&nbsp;windows, and files.
<br>
- Much more reliable runtime support, particularly with regards to MPI
<br>
&nbsp;&nbsp;job startup scalability, BProc support, and cleanup in failure
<br>
&nbsp;&nbsp;scenarios (e.g., MPI_ABORT, MPI processes abnormally terminating,
<br>
&nbsp;&nbsp;etc.).
<br>
- Significant performance improvements for MPI collectives,
<br>
&nbsp;&nbsp;particularly on high-speed networks.
<br>
- Various fixes in the MX BTL component.
<br>
- Fix C++ typecast problems with MPI_ERRCODES_IGNORE.  Thanks to
<br>
&nbsp;&nbsp;Satish Balay for bringing this to our attention.
<br>
- Allow run-time specification of the maximum amount of registered
<br>
&nbsp;&nbsp;memory for OpenFabrics and GM.
<br>
- Users who utilize the wrapper compilers (e.g., mpicc and mpif77)
<br>
&nbsp;&nbsp;will not notice, but the underlying library names for ORTE and OPAL
<br>
&nbsp;&nbsp;have changed to libopen-rte and libopen-pal, respectively (listed
<br>
&nbsp;&nbsp;here because there are undoubtedly some users who are not using the
<br>
&nbsp;&nbsp;wrapper compilers).
<br>
- Many bug fixes to MPI-2 one-sided support.
<br>
- Added support for TotalView message queue debugging.
<br>
- Fixes for MPI_STATUS_SET_ELEMENTS.
<br>
- Print better error messages when mpirun's &quot;-nolocal&quot; is used when
<br>
&nbsp;&nbsp;there is only one node available.
<br>
- Added man pages for several Open MPI executables and the MPI API
<br>
&nbsp;&nbsp;functions.
<br>
- A number of fixes for Alpha platforms.
<br>
- A variety of Fortran API fixes.
<br>
- Build the Fortran MPI API as a separate library to allow these
<br>
&nbsp;&nbsp;functions to be profiled properly.
<br>
- Add new --enable-mpirun-prefix-by-default configure option to always
<br>
&nbsp;&nbsp;imply the --prefix option to mpirun, preventing many rsh/ssh-based
<br>
&nbsp;&nbsp;users from needing to modify their shell startup files.
<br>
- Add a number of missing constants in the C++ bindings.
<br>
- Added tight integration with Sun N1 Grid Engine (N1GE) 6 and the
<br>
&nbsp;&nbsp;open source Grid Engine.
<br>
- Allow building the F90 MPI bindings as shared libraries for most
<br>
&nbsp;&nbsp;compilers / platforms.  Explicitly disallow building the F90
<br>
&nbsp;&nbsp;bindings as shared libraries on OS X because of complicated
<br>
&nbsp;&nbsp;situations with Fortran common blocks and lack of support for
<br>
&nbsp;&nbsp;unresolved common symbols in shared libraries.
<br>
- Added stacktrace support for Solaris and Mac OS X.
<br>
- Update event library to libevent-1.1b.
<br>
- Fixed standards conformance issues with MPI_ERR_TRUNCATED and
<br>
&nbsp;&nbsp;setting MPI_ERROR during MPI_TEST/MPI_WAIT.
<br>
- Addition of &quot;cm&quot; PML to better support library-level matching
<br>
&nbsp;&nbsp;interconnects, with support for Myrinet/MX, and QLogic PSM-based
<br>
&nbsp;&nbsp;networks.
<br>
- Addition of &quot;udapl&quot; BTL for transport across uDAPL interconnects.
<br>
- Really check that the $CXX given to configure is a C++ compiler
<br>
&nbsp;&nbsp;(not a C compiler that &quot;sorta works&quot; as a C++ compiler).
<br>
- Properly check for local host only addresses properly, looking
<br>
&nbsp;&nbsp;for 127.0.0.0/8, rather than just 127.0.0.1.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0012.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.5"</a>
<li><strong>Previous message:</strong> <a href="../../2007/01/0010.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.4"</a>
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
