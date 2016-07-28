<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 18 14:23:33 2006" -->
<!-- isoreceived="20061018182333" -->
<!-- sent="Wed, 18 Oct 2006 14:23:11 -0400" -->
<!-- isosent="20061018182311" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.1.2 release" -->
<!-- id="CE6D41BD-0EA0-4D87-810B-AEBC9D4CFD45_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-18 14:23:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2007/01/0009.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.3"</a>
<li><strong>Previous message:</strong> <a href="../../2006/08/0007.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic,  
<br>
and  industry partners, is pleased to announce the release of Open  
<br>
MPI version  1.1.2.  This release is mainly a bug fix release over  
<br>
the the v1.1.1 release, but there are a few minor new features.   
<br>
Version 1.1.2 can be downloaded from  the main Open MPI web site or  
<br>
any of its mirrors (mirrors will be updating  shortly).
<br>
<p><p><p>We strongly recommend that all users upgrade to version 1.1.2 if  
<br>
possible.
<br>
<p><p><p>Here are a list of changes in v1.1.2 as compared to v1.1.1:
<br>
<p><p><p>- Really fix Fortran status handling in MPI_WAITSOME and MPI_TESTSOME.
<br>
- Various datatype fixes, reported by several users as causing
<br>
&nbsp;&nbsp;&nbsp;failures in the BLACS testing suite.  Thanks to Harald Forbert, Ake
<br>
&nbsp;&nbsp;&nbsp;Sandgren and, Michael Kluskens for reporting the problem.
<br>
- Correctness and performance fixes for heterogeneous environments.
<br>
- Fixed a error in command line parsing on some platforms (causing
<br>
&nbsp;&nbsp;&nbsp;mpirun to crash without doing anything).
<br>
- Fix for initialization hangs on 64 bit Mac OS X PowerPC systems.
<br>
- Fixed some memory allocation problems in mpirun that could cause
<br>
&nbsp;&nbsp;&nbsp;random problems if &quot;-np&quot; was not specified on the command line.
<br>
- Add Kerberos authentication support for XGrid.
<br>
- Added LoadLeveler support for jobs larger than 128 tasks.
<br>
- Fix for large-sized Fortran LOGICAL datatypes.
<br>
- Fix various error checking in MPI_INFO_GET_NTHKEY and
<br>
&nbsp;&nbsp;&nbsp;MPI_GROUP_TRANSLATE_RANKS, and some collective operations
<br>
&nbsp;&nbsp;&nbsp;(particularly with regards to MPI_IN_PLACE).  Thanks to Lisandro
<br>
&nbsp;&nbsp;&nbsp;Dalcin for reporting the problems.
<br>
- Fix receiving messages to buffers allocated by MPI_ALLOC_MEM.
<br>
- Fix a number of race conditions with the MPI-2 Onesided
<br>
&nbsp;&nbsp;&nbsp;interface.
<br>
- Fix the &quot;tuned&quot; collective componenete where some cases where
<br>
&nbsp;&nbsp;&nbsp;MPI_BCAST could hang.
<br>
- Update TCP support to support non-uniform TCP environments.
<br>
- Allow the &quot;poe&quot; RAS component to be built on AIX or Linux.
<br>
- Only install mpif.h if the rest of the Fortran bindings are
<br>
&nbsp;&nbsp;&nbsp;installed.
<br>
- Fixes for BProc node selection.
<br>
- Add some missing Fortran MPI-2 IO constants.
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
<li><strong>Next message:</strong> <a href="../../2007/01/0009.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.3"</a>
<li><strong>Previous message:</strong> <a href="../../2006/08/0007.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.1"</a>
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
