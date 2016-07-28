<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 11:38:47 2007" -->
<!-- isoreceived="20070319153847" -->
<!-- sent="Mon, 19 Mar 2007 11:38:08 -0400" -->
<!-- isosent="20070319153808" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI v1.1.5" -->
<!-- id="4DB18AEC-6093-49A0-AA70-1BD5C7DFF490_at_cisco.com" -->
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
<strong>Date:</strong> 2007-03-19 11:38:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2007/04/0013.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.1"</a>
<li><strong>Previous message:</strong> <a href="0011.php">Richard Graham: "[Open MPI Announce] Announcing the release of Open MPI version 1.2"</a>
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
version 1.1.5.  This release is mainly a bug fix release over the  
<br>
v1.1.4 release.  Version 1.1.5 can be downloaded from the main Open  
<br>
MPI web site or any of its mirrors (mirrors will be updating shortly).
<br>
<p>Version 1.1.5 is expected (hoped) to be the last release in the v1.1  
<br>
series; the 1.2 series has already been released and supersedes the  
<br>
v1.1 series.  For users who cannot upgrade to the 1.2 series, we  
<br>
strongly recommend upgrading to version 1.1.5 if possible.
<br>
<p>Here is a list of changes in v1.1.5 as compared to v1.1.4:
<br>
<p>- Implement MPI_TYPE_CREATE_DARRAY function.
<br>
- Fix race condition in shared memory BTL startup that could cause MPI
<br>
&nbsp;&nbsp;&nbsp;applications to hang in MPI_INIT.
<br>
- Fix syntax error in a corner case of the event library.  Thanks to
<br>
&nbsp;&nbsp;&nbsp;Bert Wesarg for pointing this out.
<br>
- Add new MCA parameter (mpi_preconnect_oob) for pre-connecting the
<br>
&nbsp;&nbsp;&nbsp;&quot;out of band&quot; channels between all MPI processes.  Most helpful for
<br>
&nbsp;&nbsp;&nbsp;MPI applications over InfiniBand where process A sends an initial
<br>
&nbsp;&nbsp;&nbsp;message to process B, but process B does not enter the MPI library
<br>
&nbsp;&nbsp;&nbsp;for a long time.
<br>
- Fix for a race condition in shared memory locking semantics.
<br>
- Add major, minor, and release version number of Open MPI to mpi.h.
<br>
&nbsp;&nbsp;&nbsp;Thanks to Martin Audet for the suggestion.
<br>
- Fix the &quot;restrict&quot; compiler check in configure.
<br>
- Fix a problem with argument checking in MPI_TYPE_CREATE_SUBARRAY.
<br>
- Fix a problem with compiling the XGrid components with non-gcc
<br>
&nbsp;&nbsp;&nbsp;compilers.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="../../2007/04/0013.php">Tim Mattox: "[Open MPI Announce] Open MPI v1.2.1"</a>
<li><strong>Previous message:</strong> <a href="0011.php">Richard Graham: "[Open MPI Announce] Announcing the release of Open MPI version 1.2"</a>
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
