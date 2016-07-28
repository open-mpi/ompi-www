<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 12 15:45:05 2005" -->
<!-- isoreceived="20051212204505" -->
<!-- sent="Mon, 12 Dec 2005 15:44:52 -0500" -->
<!-- isosent="20051212204452" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.0.1" -->
<!-- id="C79C73BD-A7CA-48C7-AD46-7221C0E0093C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-12 15:44:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/03/0004.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Commercial members / Open MPI Development Workshop"</a>
<li><strong>Previous message:</strong> <a href="../../2005/11/0002.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.0 released!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team is pleased to release version 1.0.1 of Open MPI.   
<br>
This is primarily a bug-fix release.  Version 1.0.1 can be downloaded  
<br>
from the main Open MPI web site or any of its mirrors (mirrors will  
<br>
be updating shortly).
<br>
<p>Here are a list of changes in v1.0.1 as compared to v1.0:
<br>
<p>- Fixed assembly on Solaris AMD platforms.  Thanks to Pierre Valiron
<br>
&nbsp;&nbsp;&nbsp;for bringing this to our attention.
<br>
- Fixed long messages in the send-to-self case.
<br>
- Ensure that when the &quot;leave_pinned&quot; option is used, the memory hooks
<br>
&nbsp;&nbsp;&nbsp;are also enabled.  Thanks to Gleb Natapov for pointing this out.
<br>
- Fixed compile errors for IRIX.
<br>
- Allow hostfiles to have integer host names (for BProc clusters)
<br>
- Fixed a problem with message matching of out-of-order fragments in
<br>
&nbsp;&nbsp;&nbsp;multiple network device scenarios.
<br>
- Converted all the C++ MPI bindings to use proper const_cast&lt;&gt;'s
<br>
&nbsp;&nbsp;&nbsp;instead of old C-style casts to get rid of const-ness.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;Martin Audet for raising the issue with us.
<br>
- Converted MPI_Offset to be a typedef instead of a #define because it
<br>
&nbsp;&nbsp;&nbsp;causes problems for some C++ parsers.  Thanks to Martin Audet for
<br>
&nbsp;&nbsp;&nbsp;bringing this to our attention.
<br>
- Improved latency of TCP BTL.
<br>
- Fixed index value in MPI_TESTANY to be MPI_UNDEFINED if some
<br>
&nbsp;&nbsp;&nbsp;requests were not MPI_REQUEST_NULL, but no requests finished.
<br>
- Fixed several Fortran MPI API implementations that incorrectly used
<br>
&nbsp;&nbsp;&nbsp;integers instead of logicals or address-sized integers.
<br>
- Fix so that Open MPI correctly handles the Fortran value for .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;regardless of what the Fortran compiler's value for .TRUE. is.
<br>
- Improved scalability of MX startup.
<br>
- Fix datatype offset handling in the coll basic component's
<br>
&nbsp;&nbsp;&nbsp;MPI_SCATTERV implementation.
<br>
- Fix EOF handling on stdin.
<br>
- Fix missing MPI_F_STATUS_IGNORE and MPI_F_STATUSES_IGNORE
<br>
&nbsp;&nbsp;&nbsp;instanatiations.  Thanks to Anthony Chan for pointing this out.
<br>
- Add a missing value for MPI_WIN_NULL in mpif.h.
<br>
- Bring over some fixes for the sm btl that somehow didn't make it
<br>
&nbsp;&nbsp;&nbsp;over from the trunk before v1.0.  Thanks to Beth Tibbitts and Bill
<br>
&nbsp;&nbsp;&nbsp;Chung for helping identify this issue.
<br>
- Bring over some fixes for the iof that somehow didn't make it over
<br>
&nbsp;&nbsp;&nbsp;from the trunk before v1.0.
<br>
- Fix for --with-wrapper-ldflags handling.  Thanks to Dries Kimpe for
<br>
&nbsp;&nbsp;&nbsp;pointing this out to us.
<br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2006/03/0004.php">Jeff Squyres \(jsquyres\): "[Open MPI Announce] Commercial members / Open MPI Development Workshop"</a>
<li><strong>Previous message:</strong> <a href="../../2005/11/0002.php">Jeff Squyres: "[Open MPI Announce] Open MPI v1.0 released!"</a>
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
