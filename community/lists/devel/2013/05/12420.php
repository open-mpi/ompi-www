<?
$subject_val = "[OMPI devel] Open MPI 1.6.5rc1 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 29 16:32:25 2013" -->
<!-- isoreceived="20130529203225" -->
<!-- sent="Wed, 29 May 2013 20:32:20 +0000" -->
<!-- isosent="20130529203220" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI 1.6.5rc1 has been released" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F64A145_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI 1.6.5rc1 has been released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-29 16:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12419.php">MHPC 2013: "[OMPI devel] Deadline Extension: 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual location:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Changes since 1.6.4:
<br>
<p>- Remove extraneous -L from hwloc's embedding.  Thanks to Stefan
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
- Update to VampirTrace 5.14.3.8.
<br>
&nbsp;&nbsp;(** also to appear: 1.7.2)
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
<li><strong>Next message:</strong> <a href="12421.php">Piotr Lesnicki: "[OMPI devel] [bug/fix] correction of a small bug in conf file parsing"</a>
<li><strong>Previous message:</strong> <a href="12419.php">MHPC 2013: "[OMPI devel] Deadline Extension: 2013 Workshop on Middleware for HPC and Big Data Systems (MHPC'13)"</a>
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
