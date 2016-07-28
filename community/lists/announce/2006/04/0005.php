<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr  7 18:51:30 2006" -->
<!-- isoreceived="20060407225130" -->
<!-- sent="Fri, 7 Apr 2006 18:51:29 -0400" -->
<!-- isosent="20060407225129" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.0.2" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FAFE9_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-07 18:51:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/06/0006.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.1 release"</a>
<li><strong>Previous message:</strong> <a href="../../2006/03/0004.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Commercial members / Open MPI Development Workshop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team is pleased to release version 1.0.2 of Open MPI.  This
<br>
is primarily a bug-fix release.  Version 1.0.2 can be downloaded from
<br>
the main Open MPI web site or any of its mirrors (mirrors will be
<br>
updating shortly). 
<br>
<p>Here are a list of changes in v1.0.2 as compared to v1.0.1: 
<br>
<p>- Fixed assembly race condition on AMD64 platforms.
<br>
- Fixed residual .TRUE. issue with copying MPI attributes set from
<br>
&nbsp;&nbsp;Fortran.
<br>
- Remove unnecessary logic from Solaris pty I/O forwarding.  Thanks to
<br>
&nbsp;&nbsp;Francoise Roch for bringing this to our attention.
<br>
- Fixed error when count = 0 was given for multiple completion MPI
<br>
&nbsp;&nbsp;functions (MPI_TESTSOME, MPI_TESTANY, MPI_TESTALL, MPI_WAITSOME,
<br>
&nbsp;&nbsp;MPI_WAITANY, MPI_WAITALL).
<br>
- Better handling in MPI_ABORT for when peer processes have already
<br>
&nbsp;&nbsp;died, especially under some resource managers.
<br>
- Random updates to README file, to include notes about the Portland
<br>
&nbsp;&nbsp;compilers.
<br>
- Random, small threading fixes to prevent deadlock.
<br>
- Fixed a problem with handling long mpirun app files.  Thanks to Ravi
<br>
&nbsp;&nbsp;Manumachu for identifying the problem.
<br>
- Fix handling of strings in several of the Fortran 77 bindings.
<br>
- Fix LinuxPPC assembly issues.  Thanks to Julian Seward for reporting 
<br>
&nbsp;&nbsp;the problem.
<br>
- Enable pty support for standard I/O forwarding on platforms that
<br>
&nbsp;&nbsp;have ptys but do not have openpty().  Thanks to Pierre Valiron for
<br>
&nbsp;&nbsp;bringing this to our attention.
<br>
- Disable inline assembly for PGI compilers to avoid compiler errors.
<br>
&nbsp;&nbsp;Thanks to Troy Telford for bringing this to our attention.
<br>
- Added MPI_UNSIGNED_CHAR and MPI_SIGNED_CHAR to the allowed reduction
<br>
&nbsp;&nbsp;types.
<br>
- Fix a segv in variable-length message displays on Opterons running
<br>
&nbsp;&nbsp;Solaris.  Thanks to Pierre Valiron for reporting the issue.
<br>
- Added MPI_BOOL to the intrinsic reduction operations MPI_LAND,
<br>
&nbsp;&nbsp;MPI_LOR, MPI_LXOR.  Thanks to Andy Selle for pointing this out to us.
<br>
- Fixed TCP BTL network matching logic during MPI_INIT; in some cases
<br>
&nbsp;&nbsp;on multi-NIC nodes, a NIC could get paired with a NIC on another
<br>
&nbsp;&nbsp;network (typically resulting in deadlock).  Thanks to Ken Mighell
<br>
&nbsp;&nbsp;for pointing this out to us.
<br>
- Change the behavior of orterun (mpirun, mpirexec) to search for
<br>
&nbsp;&nbsp;argv[0] and the cwd on the target node (i.e., the node where the
<br>
&nbsp;&nbsp;executable will be running in all systems except BProc, where the
<br>
&nbsp;&nbsp;searches are run on the node where orterun is invoked).
<br>
- Fix race condition in shared memory transport that could cause
<br>
&nbsp;&nbsp;crashes on machines with weak memory consistency models (including
<br>
&nbsp;&nbsp;POWER/PowerPC machines).
<br>
- Fix warnings about setting read-only MCA parameters on bproc systems.
<br>
- Change the exit status set by mpirun when an application process is
<br>
&nbsp;&nbsp;killed by a signal.  The exit status is now set to signo + 128, which
<br>
&nbsp;&nbsp;conforms with the behavior of (almost) all shells.
<br>
- Correct a datatype problem with the convertor when partially
<br>
&nbsp;&nbsp;unpacking data. Now we can position the convertor to any position
<br>
&nbsp;&nbsp;not only on the predefined types boundaries. Thanks to Yvan Fournier
<br>
&nbsp;&nbsp;for reporting this to us.
<br>
- Fix a number of standard I/O forwarding issues, including the
<br>
&nbsp;&nbsp;ability to background mpirun and a loss of data issue when
<br>
&nbsp;&nbsp;redirecting mpirun's standard input from a file.
<br>
- Fixed bug in ompi_info where rcache and bml MCA parameters would not
<br>
&nbsp;&nbsp;be displayed.
<br>
- Fixed umask issues in the session directory.  Thanks to Glenn Morris
<br>
&nbsp;&nbsp;for reporting this to us.
<br>
- Fixed tcsh-based LD_LIBRARY_PATH issues with --prefix.  Thanks to
<br>
&nbsp;&nbsp;Glen Morris for identifying the problem and suggesting the fix.
<br>
- Removed extraneous \n's when setting PATH and LD_LIBRARY_PATH in the
<br>
&nbsp;&nbsp;rsh startup.  Thanks to Glen Morris for finding these typos.
<br>
- Fixed missing constants in MPI C++ bindings.
<br>
- Fixed some errors caused by threading issues.
<br>
- Fixed openib BTL flow control logic to not overrun the number of
<br>
&nbsp;&nbsp;send wqes available.
<br>
- Update to match newest OpenIB user-level library API.  Thanks to
<br>
&nbsp;&nbsp;Roland Dreier for submitting this patch.
<br>
- Report errors properly when failing to register memory in the openib
<br>
&nbsp;&nbsp;BTL.
<br>
- Reduce memory footprint of openib BTL.
<br>
- Fix parsing problem with mpirun's &quot;-tv&quot; switch.  Thanks to Chris
<br>
&nbsp;&nbsp;Gottbrath for supplying the fix.
<br>
- Fix Darwin net/if.h configure warning.
<br>
- The GNU assembler unbelievably defaults to making stacks executable.
<br>
&nbsp;&nbsp;So when using gas, add flags to explicitly tell it to not make
<br>
&nbsp;&nbsp;stacks executable (lame but necessary).
<br>
- Add missing MPI::Request::Get_status() methods.  Thanks to Bill
<br>
&nbsp;&nbsp;Saphir for pointing this out to us.
<br>
- Improved error messages on memory registration errors (e.g., when
<br>
&nbsp;&nbsp;using high-speed networks).
<br>
- Open IB support now checks firmware for how many outstanding RDMA
<br>
&nbsp;&nbsp;requests are supported.  Thanks to Mellanox for pointing this out to
<br>
&nbsp;&nbsp;us.
<br>
- Enable printing of stack traces in MPI processes upon SIGBUS,
<br>
&nbsp;&nbsp;SIGSEGV, and SIGFPE if the platform supports it.
<br>
- Fixed F90 compilation support for the Lahey compiler.
<br>
- Fixed issues with ROMIO shared library support.
<br>
- Fixed internal accounting problems with rsh support.
<br>
- Update to GNU Libtool 1.5.22.
<br>
- Fix error in configure script when setting CCAS to ias (the Intel
<br>
&nbsp;&nbsp;assembler).
<br>
- Added missing MPI::Intercomm collectives.
<br>
- Fixed MPI_IN_PLACE handling for Fortran collectives.
<br>
- Fixed some more C++ const_cast&lt;&gt; issues.  Thanks for Martin Audet
<br>
&nbsp;&nbsp;(again) for bringing this to our attention.
<br>
- Updated ROMIO with the version from MPICH 1.2.7p1, marked as version
<br>
&nbsp;&nbsp;2005-06-09.
<br>
- Fixes for some cases where the use of MPI_BOTTOM could cause
<br>
&nbsp;&nbsp;problems.
<br>
- Properly handle the case where an mVAPI does not have shared receive
<br>
&nbsp;&nbsp;queue support (such as the one shipped by SilverStorm / Infinicon
<br>
&nbsp;&nbsp;for OS X).
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/06/0006.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Open MPI v1.1 release"</a>
<li><strong>Previous message:</strong> <a href="../../2006/03/0004.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Commercial members / Open MPI Development Workshop"</a>
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
