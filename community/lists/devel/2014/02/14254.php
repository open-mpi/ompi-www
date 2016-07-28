<?
$subject_val = "[OMPI devel] pulling in Open-MPI changes to ROMIO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 15:21:30 2014" -->
<!-- isoreceived="20140228202130" -->
<!-- sent="Fri, 28 Feb 2014 20:21:29 +0000" -->
<!-- isosent="20140228202129" -->
<!-- name="Latham, Robert J." -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="[OMPI devel] pulling in Open-MPI changes to ROMIO" -->
<!-- id="1393618891.5762.49.camel_at_cobb" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] pulling in Open-MPI changes to ROMIO<br>
<strong>From:</strong> Latham, Robert J. (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 15:21:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Previous message:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(please CC me as I do not receive messages from this list)
<br>

<br>
I trawled a bunch of the SVN history (not all of it!) looking for
<br>
OpenMPI modifications to ROMIO that I could incorporate into upstream
<br>
MPICH-ROMIO.
<br>

<br>
I have pushed a handful of changes to the 'romio_sync_from_ompi' branch
<br>
of <a href="http://git.mpich.org/mpich-dev.git">http://git.mpich.org/mpich-dev.git</a>  
<br>

<br>
Could I humbly request a look-see from y'all?  My main goal was to find
<br>
dropped patches like Edgar Gabriel's &quot;can't switch on datatype&quot; patch.
<br>
There don't seem to be any.  But my second goal was to make life easier
<br>
for you: if pulling in these changes complicates your life, let me know
<br>
and I'll drop any/all of them.
<br>

<br>
Thanks
<br>
==rob 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14255.php">Dave Goodell (dgoodell): "[OMPI devel] Fwd: [OMPI svn] svn:open-mpi r30894 - in branches/v1.7: . ompi	ompi/attribute ompi/debuggers ompi/errhandler ompi/include	ompi/mca/btl ompi/mca/btl/openib/connect ompi/mca/op	ompi/mca/osc ompi/mca/osc/base ompi/mca/osc/portals4	ompi/mca/osc/rdma ompi/m..."</a>
<li><strong>Previous message:</strong> <a href="14253.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi	r30860	-	in	trunk/ompi/mca: btl/usnic rte"</a>
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
