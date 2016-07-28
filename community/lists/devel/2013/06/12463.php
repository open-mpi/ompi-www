<?
$subject_val = "[OMPI devel] 1.7.2rc3 has been released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 14 18:14:05 2013" -->
<!-- isoreceived="20130614221405" -->
<!-- sent="Fri, 14 Jun 2013 22:14:00 +0000" -->
<!-- isosent="20130614221400" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.2rc3 has been released" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6883C6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.2rc3 has been released<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-14 18:14:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12464.php">Joshua Ladd: "[OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Previous message:</strong> <a href="12462.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.5rc2 has been released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please test!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.7/">http://www.open-mpi.org/software/ompi/v1.7/</a>
<br>
<p>Changes since rc2:
<br>
<p>- Major VampirTrace update to 5.14.4.2.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix to set flag==1 when MPI_IPROBE is called with MPI_PROC_NULL.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Set the Intel Phi device to be ignored by default by the openib BTL.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Decrease the internal memory storage used by intrinsic MPI datatypes
<br>
&nbsp;&nbsp;for Fortran types.  Thanks to Takahiro Kawashima for the initial
<br>
&nbsp;&nbsp;patch.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix total registered memory calculation for Mellanox ConnectIB and
<br>
&nbsp;&nbsp;OFED 2.0.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix possible data corruption in the MXM MTL component.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Remove extraneous -L from hwloc's embedding.  Thanks to Stefan
<br>
&nbsp;&nbsp;Friedel for reporting the issue.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix contiguous datatype memory check.  Thanks to Eric Chamberland
<br>
&nbsp;&nbsp;for reporting the issue.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Make the openib BTL more friendly to ignoring verbs devices that are
<br>
&nbsp;&nbsp;not RC-capable.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix some MPI datatype engine issues.  Thanks to Thomas Jahns for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Add INI information for Chelsio T5 device.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Integrate MXM STREAM support for MPI_ISEND and MPI_IRECV, and other
<br>
&nbsp;&nbsp;minor MXM fixes.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
<br>
- Fix to not show amorphous &quot;MPI was already finalized&quot; error when
<br>
&nbsp;&nbsp;failing to MPI_File_close an open file.  Thanks to Brian Smith for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
&nbsp;&nbsp;(** also appeared: 1.6.5)
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
<li><strong>Next message:</strong> <a href="12464.php">Joshua Ladd: "[OMPI devel] RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Previous message:</strong> <a href="12462.php">Jeff Squyres (jsquyres): "[OMPI devel] 1.6.5rc2 has been released"</a>
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
