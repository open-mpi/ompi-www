<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 17:39:28 2007" -->
<!-- isoreceived="20070801213928" -->
<!-- sent="Wed, 1 Aug 2007 17:39:01 -0400" -->
<!-- isosent="20070801213901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Tracking MPI_ALLOC_MEM leaks" -->
<!-- id="A7121CB0-D96F-44B1-A575-0D63175E7211_at_cisco.com" -->
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
<strong>Date:</strong> 2007-08-01 17:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI, I just introduced a new debugging MCA parameter:
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi_show_mpi_alloc_mem_leaks
<br>
<p><p><p>When activated, MPI_FINALIZE displays a list of memory allocations
<br>
from MPI_ALLOC_MEM that were not freed by MPI_FREE_MEM (in each MPI
<br>
process).
<br>
<p>&nbsp;&nbsp;* If set to a positive integer, display only that many leaks.
<br>
&nbsp;&nbsp;* If set to a negative integer, display all leaks.
<br>
&nbsp;&nbsp;* If set to 0, do not show any leaks.
<br>
<p>The default value is 0, meaning that it will not show any leaks  
<br>
during MPI_FINALIZE.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/15736">https://svn.open-mpi.org/trac/ompi/changeset/15736</a>
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
<li><strong>Next message:</strong> <a href="2063.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<li><strong>Previous message:</strong> <a href="2061.php">Sven Stork: "Re: [OMPI devel] pml failures?"</a>
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
