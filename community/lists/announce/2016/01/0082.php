<?
$subject_val = "[Open MPI Announce] Open MPI v1.10.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 21 13:48:34 2016" -->
<!-- isoreceived="20160121184834" -->
<!-- sent="Thu, 21 Jan 2016 10:48:30 -0800" -->
<!-- isosent="20160121184830" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.10.2 released" -->
<!-- id="8F6B7BA5-5E85-461F-BE14-0DEEF62A5306_at_open-mpi.org" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI v1.10.2 released<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-21 13:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/06/0083.php">Ralph Castain: "[Open MPI Announce] OMPI v1.10.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/12/0081.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.10.2rc1 available"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to announce the release of Open MPI version 1.10.2.
<br>
<p>v1.10.2 is primarily a bug fix release, but does include some API upgrades to OSHMEM. All users are encouraged to upgrade to v1.10.2 when possible.  
<br>
<p>Version 1.10.2 can be downloaded from the main Open MPI web site or any of its mirrors  (mirrors will be updating shortly).
<br>
<p>1.10.2
<br>
------
<br>
<p>&nbsp;**********************************************************************
<br>
&nbsp;*  OSHMEM is now 1.2 compliant
<br>
&nbsp;**********************************************************************
<br>
<p>- Fix NBC_Copy for legitimate zero-size messages
<br>
- Fix multiple bugs in OSHMEM
<br>
- Correctly handle mpirun --host &lt;user&gt;@&lt;ip-address&gt;
<br>
- Centralize two MCA params to avoid duplication between OMPI and
<br>
&nbsp;&nbsp;OSHMEM layers: opal_abort_delay and opal_abort_print_stack
<br>
- Add support for Fujitsu compilers
<br>
- Add UCX support for OMPI and OSHMEM
<br>
- Correctly handle oversubscription when not given directives
<br>
&nbsp;&nbsp;to permit it. Thanks to @ammore1 for reporting it
<br>
- Fix rpm spec file to not include the /usr directory
<br>
- Add Intel HFI1 default parameters for the openib BTL
<br>
- Resolve symbol conflicts in the PSM2 library
<br>
- Add ability to empty the rgpusm cache when full if requested
<br>
- Fix another libtool bug when -L requires a space between it
<br>
&nbsp;&nbsp;and the path. Thanks to Eric Schnetter for the patch.
<br>
- Add support for OSHMEM v1.2 APIs
<br>
- Improve efficiency of oshmem_preconnect_all algorithm
<br>
- Fix bug in buffered sends support
<br>
- Fix double free in edge case of mpirun. Thanks to @jsharpe for
<br>
&nbsp;&nbsp;the patch
<br>
- Multiple one-sided support fixes
<br>
- Fix integer overflow in the tuned &quot;reduce&quot; collective when
<br>
&nbsp;&nbsp;using buffers larger than INT_MAX in size
<br>
- Fix parse of user environment variables in mpirun. Thanks to
<br>
&nbsp;&nbsp;Stefano Garzarella for the patch
<br>
- Performance improvements in PSM2 support
<br>
- Fix NBS iBarrier for inter-communicators
<br>
- Fix bug in vader BTL during finalize
<br>
- Improved configure support for Fortran compilers
<br>
- Fix rank_file mapper to support default --slot-set. Thanks
<br>
&nbsp;&nbsp;to Matt Thompson for reporting it
<br>
- Update MPI_Testsome man page. Thanks to Eric Schnetter for
<br>
&nbsp;&nbsp;the suggestion
<br>
- Fix missing resize of the returned type for subarray and
<br>
&nbsp;&nbsp;darray types. Thanks to Keith Bennett and Dan Garmann for
<br>
&nbsp;&nbsp;reporting it
<br>
- Fix Java support on OSX 10.11. Thanks to Alexander Daryin
<br>
&nbsp;&nbsp;for reporting the problem
<br>
- Fix some compilation issues on Solaris 11.2. Thanks to
<br>
&nbsp;&nbsp;Paul Hargrove for his continued help in such areas
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/announce/att-0082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2016/06/0083.php">Ralph Castain: "[Open MPI Announce] OMPI v1.10.3 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2015/12/0081.php">Ralph Castain: "[Open MPI Announce] Open MPI v1.10.2rc1 available"</a>
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
