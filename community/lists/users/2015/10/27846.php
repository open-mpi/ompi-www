<?
$subject_val = "[OMPI users] 1.10.1rc2 available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 10:47:37 2015" -->
<!-- isoreceived="20151008144737" -->
<!-- sent="Thu, 8 Oct 2015 14:47:32 +0000" -->
<!-- isosent="20151008144732" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI users] 1.10.1rc2 available" -->
<!-- id="67A192D2-B36C-42A1-BEBC-4530E8E49AA1_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] 1.10.1rc2 available<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-08 10:47:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27847.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't want to pester everyone with all of our release candidates for 1.10.1, so this will likely be the last general announcement on the users and announcement lists before we release 1.10.1 (final).
<br>
<p>That being said, 1.10.1 rc2 is now available:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>
<br>
<p>If/when we make further release candidates available, they will be available at the same URL.
<br>
<p>Here's the changes since rc1: 
<br>
<p>- Fix use of MPI_LB and MPI_UB in subarray and darray datatypes.
<br>
&nbsp;&nbsp;Thanks to Gus Correa for pointing out the issue.
<br>
- Minor updates to mpi_show_mpi_alloc_mem_leaks and
<br>
&nbsp;&nbsp;ompi_debug_show_handle_leaks functionality.
<br>
- When OpenSHMEM building is disabled, no longer install its header
<br>
&nbsp;&nbsp;files, help files, or man pages.  Add man pages for oshrun, oshcc,
<br>
&nbsp;&nbsp;and oshfort.
<br>
- Various updates to Mellanox's MXM, hcoll, and FCA components.
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
<li><strong>Next message:</strong> <a href="27847.php">marcin.krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<li><strong>Previous message:</strong> <a href="27845.php">Gilles Gouaillardet: "[OMPI users]  python, mpi and shell subprocess: orte_error_log"</a>
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
