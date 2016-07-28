<?
$subject_val = "[Open MPI Announce] Open MPI v1.3.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 22 14:16:07 2009" -->
<!-- isoreceived="20090422181607" -->
<!-- sent="Wed, 22 Apr 2009 12:16:01 -0600" -->
<!-- isosent="20090422181601" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.3.2 released" -->
<!-- id="71d2d8cc0904221116p1d5064f6mb4139d62f458107e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.3.2 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-22 14:16:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/07/0031.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">Jeff Squyres: "[Open MPI Announce] Critical bug notice"</a>
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
version 1.3.2. This release is mainly a bug fix release over the v1.3.1
<br>
release, but there are few new features.  We strongly recommend
<br>
that all users upgrade to version 1.3.2 if possible.
<br>
<p>Version 1.3.2 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>NOTE: The Open MPI team has uncovered a serious bug in Open MPI v1.3.0 and
<br>
v1.3.1: when running on OpenFabrics-based networks, silent data
<br>
corruption is possible in some cases. There are two workarounds to
<br>
avoid the issue -- please see the bug ticket that has been opened
<br>
about this issue for further details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
<br>
<p>We strongly encourage all users who are using Open MPI v1.3.0 and/or
<br>
v1.3.1 on OpenFabrics-based networks to upgrade to 1.3.2.
<br>
<p><p>Here is a list of changes in v1.3.2 as compared to v1.3.1:
<br>
<p>- Fixed a potential infinite loop in the openib BTL that could occur
<br>
&nbsp;in senders in some frequent-communication scenarios.  Thanks to Don
<br>
&nbsp;Wood for reporting the problem.
<br>
- Add a new checksum PML variation on ob1 (main MPI point-to-point
<br>
&nbsp;communication engine) to detect memory corruption in node-to-node
<br>
&nbsp;messages
<br>
- Add a new configuration option to add padding to the openib
<br>
&nbsp;header so the data is aligned
<br>
- Add a new configuration option to use an alternative checksum algo
<br>
&nbsp;when using the checksum PML
<br>
- Fixed a problem reported by multiple users on the mailing list that
<br>
&nbsp;the LSF support would fail to find the appropriate libraries at
<br>
&nbsp;run-time.
<br>
- Allow empty shell designations from getpwuid().  Thanks to Sergey
<br>
&nbsp;Koposov for the bug report.
<br>
- Ensure that mpirun exits with non-zero status when applications die
<br>
&nbsp;due to user signal.  Thanks to Geoffroy Pignot for suggesting the
<br>
&nbsp;fix.
<br>
- Ensure that MPI_VERSION / MPI_SUBVERSION match what is returned by
<br>
&nbsp;MPI_GET_VERSION.  Thanks to Rob Egan for reporting the error.
<br>
- Updated MPI_*KEYVAL_CREATE functions to properly handle Fortran
<br>
&nbsp;extra state.
<br>
- A variety of ob1 (main MPI point-to-point communication engine) bug
<br>
&nbsp;fixes that could have caused hangs or seg faults.
<br>
- Do not install Open MPI's signal handlers in MPI_INIT if there are
<br>
&nbsp;already signal handlers installed.  Thanks to Kees Verstoep for
<br>
&nbsp;bringing the issue to our attention.
<br>
- Fix GM support to not seg fault in MPI_INIT.
<br>
- Various VampirTrace fixes.
<br>
- Various PLPA fixes.
<br>
- No longer create BTLs for invalid (TCP) devices.
<br>
- Various man page style and lint cleanups.
<br>
- Fix critical OpenFabrics-related bug noted here:
<br>
&nbsp;<a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">http://www.open-mpi.org/community/lists/announce/2009/03/0029.php</a>.
<br>
&nbsp;Open MPI now uses a much more robust memory intercept scheme that is
<br>
&nbsp;quite similar to what is used by MX.  The use of &quot;-lopenmpi-malloc&quot;
<br>
&nbsp;is no longer necessary, is deprecated, and is expected to disappear
<br>
&nbsp;in a future release.  -lopenmpi-malloc will continue to work for the
<br>
&nbsp;duration of the Open MPI v1.3 and v1.4 series.
<br>
- Fix some OpenFabrics shutdown errors, both regarding iWARP and SRQ.
<br>
- Allow the udapl BTL to work on Solaris platforms that support
<br>
&nbsp;relaxed PCI ordering.
<br>
- Fix problem where the mpirun would sometimes use rsh/ssh to launch on
<br>
&nbsp;the localhost (instead of simply forking).
<br>
- Minor SLURM stdin fixes.
<br>
- Fix to run properly under SGE jobs.
<br>
- Scalability and latency improvements for shared memory jobs: convert
<br>
&nbsp;to using one message queue instead of N queues.
<br>
- Automatically size the shared-memory area (mmap file) to match
<br>
&nbsp;better what is needed;  specifically, so that large-np jobs will start.
<br>
- Use fixed-length MPI predefined handles in order to provide ABI
<br>
&nbsp;compatibility between Open MPI releases.
<br>
- Fix building of the posix paffinity component to properly get the
<br>
&nbsp;number of processors in loosely tested environments (e.g.,
<br>
&nbsp;FreeBSD).  Thanks to Steve Kargl for reporting the issue.
<br>
- Fix --with-libnuma handling in configure.  Thanks to Gus Correa for
<br>
&nbsp;reporting the problem.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/07/0031.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.3.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2009/03/0029.php">Jeff Squyres: "[Open MPI Announce] Critical bug notice"</a>
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
