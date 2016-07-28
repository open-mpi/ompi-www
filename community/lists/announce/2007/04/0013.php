<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 25 16:10:32 2007" -->
<!-- isoreceived="20070425201032" -->
<!-- sent="Wed, 25 Apr 2007 16:10:28 -0400" -->
<!-- isosent="20070425201028" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.2.1" -->
<!-- id="ea86ce220704251310j715075bl2792083daaba3f67_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-25 16:10:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2007/05/0014.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.2"</a>
<li><strong>Previous message:</strong> <a href="../../2007/03/0012.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.5"</a>
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
version 1.2.1. This release is mainly a bug fix release over the the
<br>
v1.2 release, but there are few minor new features.  We strongly
<br>
recommend that all users upgrade to version 1.2.1 if possible.
<br>
<p>Version 1.2.1 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here are a list of changes in v1.2.1 as compared to v1.2:
<br>
<p>- Fixed a number of connection establishment errors in the TCP out-
<br>
&nbsp;of-band messaging system.
<br>
- Fixed a memory leak when using mpi_comm calls.
<br>
&nbsp;&nbsp;Thanks to Bas van der Vlies for reporting the problem.
<br>
- Fixed various memory leaks in OPAL and ORTE.
<br>
- Improved launch times when using TM (PBS Pro, Torque, Open PBS).
<br>
- Fixed mpi_leave_pinned to work for all datatypes.
<br>
- Fix functionality allowing users to disable sbrk() (the
<br>
&nbsp;&nbsp;mpool_base_disable_sbrk MCA parameter) on platforms that support it.
<br>
- Fixed a pair of problems with the TCP &quot;listen_thread&quot; mode for the
<br>
&nbsp;&nbsp;oob_tcp_listen_mode MCA parameter that would cause failures when
<br>
&nbsp;attempting to launch applications.
<br>
- Fixed a segfault if there was a failure opening a BTL MX endpoint.
<br>
- Fixed a problem with mpirun's --nolocal option introduced in 1.2.
<br>
- Re-enabled MPI_COMM_SPAWN_MULTIPLE from singletons.
<br>
- LoadLeveler and TM configure fixes, Thanks to Martin Audet for the
<br>
&nbsp;bug report.
<br>
- Various C++ MPI attributes fixes.
<br>
- Fixed issues with backtrace code on 64 bit Intel &amp; PPC OS X builds.
<br>
- Fixed issues with multi-word CC variables and libtool.
<br>
&nbsp;&nbsp;Thanks to Bert Wesarg for the bug reports.
<br>
- Fix issue with non-uniform node naming schemes in SLURM.
<br>
- Fix file descriptor leak in the Grid Engine/N1GE support.
<br>
- Fix compile error on OS X 10.3.x introduced with Open MPI 1.1.5.
<br>
- Implement MPI_TYPE_CREATE_DARRAY function (was in 1.1.5 but not 1.2).
<br>
- Recognize zsh shell when using rsh/ssh for launching MPI jobs.
<br>
- Ability to set the OPAL_DESTDIR or OPAL_PREFIX environment
<br>
&nbsp;&nbsp;variables to &quot;re-root&quot; an existing Open MPI installation.
<br>
- Always include -I for Fortran compiles, even if the prefix is
<br>
&nbsp;&nbsp;/usr/local.
<br>
- Support for &quot;fork()&quot; in MPI applications that use the
<br>
&nbsp;&nbsp;OpenFabrics stack (OFED v1.2 or later).
<br>
- Support for setting specific limits on registered memory.
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
<li><strong>Next message:</strong> <a href="../../2007/05/0014.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.2"</a>
<li><strong>Previous message:</strong> <a href="../../2007/03/0012.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.5"</a>
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
