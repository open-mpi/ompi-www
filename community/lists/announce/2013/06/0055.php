<?
$subject_val = "[Open MPI Announce] Open MPI 1.6.5 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 14:35:36 2013" -->
<!-- isoreceived="20130626183536" -->
<!-- sent="Wed, 26 Jun 2013 18:35:31 +0000" -->
<!-- isosent="20130626183531" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[Open MPI Announce] Open MPI 1.6.5 released" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6BC7C1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [Open MPI Announce] Open MPI 1.6.5 released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 14:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.7.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0054.php">Ralph Castain: "[Open MPI Announce] v1.7.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI Team, representing a consortium of research, academic, and industry partners, is pleased to the next release in the stable release series: Open MPI version 1.6.5. 
<br>
<p>Version 1.6.5 is a minor bugfix release. All users are encouraged to upgrade to v1.6.5 when possible. 
<br>
<p>Note that v1.6.5 is ABI compatible with the entire v1.5.x and v1.6.x series, but is not ABI compatible with the v1.4.x series. See <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a> for a description of Open MPI's release methodology. 
<br>
<p>Version 1.6.5 can be downloaded from the main Open MPI web site or any of its mirrors (Windows binaries may be available eventually; Open MPI needs a new Windows maintainer -- let us know on the developers' list if you're interested in helping out). 
<br>
<p>Here is a list of changes in v1.6.5 as compared to v1.6.4: 
<br>
<p>- Updated default SRQ parameters for the openib BTL.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Major VampirTrace update to 5.14.4.2.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Fix to set flag==1 when MPI_IPROBE is called with MPI_PROC_NULL.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Set the Intel Phi device to be ignored by default by the openib BTL.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Decrease the internal memory storage used by intrinsic MPI datatypes
<br>
&nbsp;&nbsp;for Fortran types.  Thanks to Takahiro Kawashima for the initial
<br>
&nbsp;&nbsp;patch.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Fix total registered memory calculation for Mellanox ConnectIB and
<br>
&nbsp;&nbsp;OFED 2.0.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Fix possible data corruption in the MXM MTL component.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Remove extraneous -L from hwloc's embedding.  Thanks to Stefan
<br>
&nbsp;&nbsp;Friedel for reporting the issue.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Fix contiguous datatype memory check.  Thanks to Eric Chamberland
<br>
&nbsp;&nbsp;for reporting the issue.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Make the openib BTL more friendly to ignoring verbs devices that are
<br>
&nbsp;&nbsp;not RC-capable.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Fix some MPI datatype engine issues.  Thanks to Thomas Jahns for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Add INI information for Chelsio T5 device.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Integrate MXM STREAM support for MPI_ISEND and MPI_IRECV, and other
<br>
&nbsp;&nbsp;minor MXM fixes.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
- Improved alignment for OpenFabrics buffers.
<br>
- Fix to not show amorphous &quot;MPI was already finalized&quot; error when
<br>
&nbsp;&nbsp;failing to MPI_File_close an open file.  Thanks to Brian Smith for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0056.php">Jeff Squyres (jsquyres): "[Open MPI Announce] Open MPI 1.7.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/announce/2013/04/0054.php">Ralph Castain: "[Open MPI Announce] v1.7.1 released"</a>
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
