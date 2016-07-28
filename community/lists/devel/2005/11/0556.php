<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 08:18:59 2005" -->
<!-- isoreceived="20051129131859" -->
<!-- sent="Tue, 29 Nov 2005 08:18:52 -0500" -->
<!-- isosent="20051129131852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="1.0.1rc4 is up" -->
<!-- id="bf6ec598dc1755f4e3f766eb35fb549f_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-29 08:18:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
rc4 is up:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>
<br>
<p>Here's the NEWS:
<br>
<p>- Fix so that Open MPI correctly handles the Fortran value for .TRUE.,
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
<li><strong>Next message:</strong> <a href="0557.php">George Bosilca: "TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0555.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
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
