<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun 20 14:56:01 2007" -->
<!-- isoreceived="20070620185601" -->
<!-- sent="Wed, 20 Jun 2007 14:55:55 -0400" -->
<!-- isosent="20070620185555" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI v1.2.3 released" -->
<!-- id="ea86ce220706201155j7aadbd0dpe6d65c88382df256_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-06-20 14:55:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3520.php">de Almeida, Valmor F.: "[OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
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
version 1.2.3. This release is mainly a bug fix release over the v1.2.2
<br>
release, but there are few minor new features.  We strongly
<br>
recommend that all users upgrade to version 1.2.3 if possible.
<br>
<p>Version 1.2.3 can be downloaded from the main Open MPI web site or
<br>
any of its mirrors (mirrors will be updating shortly).
<br>
<p>Here are a list of changes in v1.2.3 as compared to v1.2.2:
<br>
<p>- Fix a regression in comm_spawn functionality that inadvertently
<br>
&nbsp;&nbsp;caused the mapping of child processes to always start at the same
<br>
&nbsp;&nbsp;place.  Thanks to Prakash Velayutham for helping discover the
<br>
&nbsp;&nbsp;problem.
<br>
- Fix segfault when a user's home directory is unavailable on a remote
<br>
&nbsp;&nbsp;node.  Thanks to Guillaume Thomas-Collignon for bringing the issue
<br>
&nbsp;&nbsp;to our attention.
<br>
- Fix MPI_IPROBE to properly handle MPI_STATUS_IGNORE on mx and
<br>
&nbsp;&nbsp;psm MTLs. Thanks to Sophia Corwell for finding this and supplying a
<br>
&nbsp;&nbsp;reproducer.
<br>
- Fix some error messages in the tcp BTL.
<br>
- Use _NSGetEnviron instead of environ on Mac OS X so that there
<br>
&nbsp;&nbsp;are no undefined symbols in the shared libraries.
<br>
- On OS X, when MACOSX_DEPLOYMENT_TARGET is 10.3 or higher,
<br>
&nbsp;&nbsp;support building the Fortran 90 bindings as a shared library.  Thanks to
<br>
&nbsp;&nbsp;Jack Howarth for his advice on making this work.
<br>
- No longer require extra include flag for the C++ bindings.
<br>
- Fix detection of weak symbols support with Intel compilers.
<br>
- Fix issue found by Josh England: ompi_info would not show framework
<br>
&nbsp;&nbsp;MCA parameters set in the environment properly.
<br>
- Rename the oob_tcp_include/exclude MCA params to oob_tcp_if_include/exclude
<br>
&nbsp;&nbsp;so that they match the naming convention of the btl_tcp_if_include/exclude
<br>
&nbsp;&nbsp;params.  The old names are depreciated, but will still work.
<br>
- Add -wd as a synonym for the -wdir orterun/mpirun option.
<br>
- Fix the mvapi BTL to compile properly with compilers that do not support
<br>
&nbsp;&nbsp;anonymous unions.  Thanks to Luis Kornblueh for reporting the bug.
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
<li><strong>Next message:</strong> <a href="3520.php">de Almeida, Valmor F.: "[OMPI users] mpi python recommendation"</a>
<li><strong>Previous message:</strong> <a href="3518.php">Jeff Pummill: "[OMPI users] OpenMPI / SLURM Job Issues"</a>
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
