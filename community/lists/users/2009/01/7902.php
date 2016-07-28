<?
$subject_val = "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 16:15:52 2009" -->
<!-- isoreceived="20090130211552" -->
<!-- sent="Fri, 30 Jan 2009 16:15:46 -0500" -->
<!-- isosent="20090130211546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi" -->
<!-- id="C37150D3-F4AB-4A10-A4EE-D9C49EE00358_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="18814.7724.108130.393883_at_ron.nulle.part" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 16:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>In reply to:</strong> <a href="7845.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 3:33 PM, Dirk Eddelbuettel wrote:
<br>
<p><span class="quotelev1">&gt; Gdb doesn't want to step into the Open MPI code; I used debugging  
</span><br>
<span class="quotelev1">&gt; symbols for
</span><br>
<span class="quotelev1">&gt; both R and Open MPI that are available via -dbg packages with the  
</span><br>
<span class="quotelev1">&gt; debugging
</span><br>
<span class="quotelev1">&gt; info.  So descending one function at a time, I see the following  
</span><br>
<span class="quotelev1">&gt; calling
</span><br>
<span class="quotelev1">&gt; sequence
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Init
</span><br>
<span class="quotelev1">&gt;  ompi_mpi_init
</span><br>
<span class="quotelev1">&gt;  orte_init
</span><br>
<span class="quotelev1">&gt;  opal_init
</span><br>
<span class="quotelev1">&gt;  opal_paffinity_base_open
</span><br>
<span class="quotelev1">&gt;  mca_base_components_open
</span><br>
<span class="quotelev1">&gt;  open_components
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where things end in the loop over oapl_list() elements.  I still see a
</span><br>
<span class="quotelev1">&gt; fprintf() statment just before
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (MCA_SUCCESS == component-&gt;mca_register_component_params()) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in the middle of the open_components function in the file
</span><br>
<span class="quotelev1">&gt; mca_base_components_open.c
</span><br>
<p>Do you know if component is non-NULL and has a sensible value (i.e.,  
<br>
pointing to a valid component)?
<br>
<p>Does ompi_info work?  (ompi_info uses this exact same code to find/ 
<br>
open components)  If ompi_info fails, you should be able to attach a  
<br>
debugger to that, since it's a serial and [relatively] straightforward  
<br>
app.
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
<li><strong>Next message:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Previous message:</strong> <a href="7901.php">Brian W. Barrett: "Re: [OMPI users] Pinned memory"</a>
<li><strong>In reply to:</strong> <a href="7845.php">Dirk Eddelbuettel: "[OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7904.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
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
