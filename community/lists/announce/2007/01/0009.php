<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 26 14:08:24 2007" -->
<!-- isoreceived="20070126190824" -->
<!-- sent="Fri, 26 Jan 2007 14:08:18 -0500" -->
<!-- isosent="20070126190818" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.1.3" -->
<!-- id="D865B728-8BBC-4129-A184-8B28BE044C87_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-26 14:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0010.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.4"</a>
<li><strong>Previous message:</strong> <a href="../../2006/10/0008.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.2 release"</a>
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
version 1.1.3.  This release is mainly a bug fix release over the the  
<br>
v1.1.2 release.  Version 1.1.3 can be downloaded from the main Open  
<br>
MPI web site or any of its mirrors (mirrors will be updating shortly).
<br>
<p>We strongly recommend that all users upgrade to version 1.1.3 if  
<br>
possible.
<br>
<p>Here are a list of changes in v1.1.3 as compared to v1.1.2:
<br>
<p>- Fixed 64-bit alignment issues with TCP interface detection on
<br>
&nbsp;&nbsp;&nbsp;intel-based OS X machines.
<br>
- Adjusted TCP interface selection to automatically ignore Linux
<br>
&nbsp;&nbsp;&nbsp;channel-bonded slave interfaces.
<br>
- Fixed the type of the first parameter to the MPI F90 binding for
<br>
&nbsp;&nbsp;&nbsp;MPI_INITIALIZED.  Thanks to Tim Campbell for pointing out the
<br>
&nbsp;&nbsp;&nbsp;problem.
<br>
- Fix a bunch of places in the Fortran MPI bindings where (MPI_Fint*)
<br>
&nbsp;&nbsp;&nbsp;was mistakenly being used instead of (MPI_Aint*).
<br>
- Fixes for fortran MPI_STARTALL, which could sometimes return
<br>
&nbsp;&nbsp;&nbsp;incorrect request values.  Thanks to Tim Campbell for pointing out
<br>
&nbsp;&nbsp;&nbsp;the problem.
<br>
- Include both pre- and post-MPI-2 errata bindings for
<br>
&nbsp;&nbsp;&nbsp;MPI::Win::Get_attr.
<br>
- Fix math error on Intel OS X platforms that would greatly increase
<br>
&nbsp;&nbsp;&nbsp;shared memory latency.
<br>
- Fix type casting issue with MPI_ERRCODES_IGNORE that would cause
<br>
&nbsp;&nbsp;&nbsp;errors when using a C++ compiler.  Thanks to Barry Smith for
<br>
&nbsp;&nbsp;&nbsp;bringing this to our attention.
<br>
- Fix possible segmentation fault during shutdown when using the
<br>
&nbsp;&nbsp;&nbsp;MX BTL.
<br>
- Remove the &quot;hierarch&quot; coll component; it was not intended to be
<br>
&nbsp;&nbsp;&nbsp;included in stable releases yet.
<br>
- Fix a race condition with stdout/stderr not appearing properly from
<br>
&nbsp;&nbsp;&nbsp;all processes upon termination of an MPI job.
<br>
- Fix internal accounting errors with the self BTL.
<br>
- Fix typos in the code path for when sizeof(int) != sizeof(INTEGER)
<br>
&nbsp;&nbsp;&nbsp;in the MPI F77 bindings functions.  Thanks to Pierre-Matthieu
<br>
&nbsp;&nbsp;&nbsp;Anglade for bringing this problem to our attention.
<br>
- Fix for a memory leak in the derived datatype function
<br>
&nbsp;&nbsp;&nbsp;ompi_ddt_duplicate().  Thanks to Andreas Schafer for reporting,
<br>
&nbsp;&nbsp;&nbsp;diagnosing, and patching the leak.
<br>
- Used better performing basic algorithm for MPI_ALLGATHERV.
<br>
- Added a workaround for a bug in the Intel 9.1 C++ compiler (all
<br>
&nbsp;&nbsp;&nbsp;versions up to and including 20060925) in the MPI C++ bindings that
<br>
&nbsp;&nbsp;&nbsp;caused run-time failures.  Thanks to Scott Weitzenkamp for reporting
<br>
&nbsp;&nbsp;&nbsp;this problem.
<br>
- Fix MPI_SIZEOF implementation in the F90 bindings for COMPLEX
<br>
&nbsp;&nbsp;&nbsp;variable types.
<br>
- Fixes for persistent requests involving MPI_PROC_NULL.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;Lisandro Dalcin for reporting the problem.
<br>
- Fixes to MPI_TEST* and MPI_WAIT* for proper MPI exception reporting.
<br>
&nbsp;&nbsp;&nbsp;Thanks to Lisandro Dalcin for finding the issue.
<br>
- Various fixes for MPI generalized request handling; addition of
<br>
&nbsp;&nbsp;&nbsp;missing MPI::Grequest functionality to the C++ bindings.
<br>
- Add &quot;mpi_preconnect_all&quot; MCA parameter to force wireup of all MPI
<br>
&nbsp;&nbsp;&nbsp;connections during MPI_INIT (vs. making connections lazily whenever
<br>
&nbsp;&nbsp;&nbsp;the first MPI communication occurs between a pair of peers).
<br>
- Fix a problem for when $FC and/or $F77 were specified as multiple
<br>
&nbsp;&nbsp;&nbsp;tokens.  Thanks to Orion Poplawski for identifying the problem and
<br>
&nbsp;&nbsp;&nbsp;to Ralf Wildenhues for suggesting the fix.
<br>
- Fix several MPI_*ERRHANDLER* functions and MPI_GROUP_TRANSLATE_RANKS
<br>
&nbsp;&nbsp;&nbsp;with respect to what arguments they allowed and the behavior that
<br>
&nbsp;&nbsp;&nbsp;they effected.  Thanks to Lisandro Dalcin for reporting the
<br>
&nbsp;&nbsp;&nbsp;problems.
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
<li><strong>Next message:</strong> <a href="0010.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.4"</a>
<li><strong>Previous message:</strong> <a href="../../2006/10/0008.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.1.2 release"</a>
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
