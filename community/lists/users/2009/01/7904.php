<?
$subject_val = "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 30 16:54:48 2009" -->
<!-- isoreceived="20090130215448" -->
<!-- sent="Fri, 30 Jan 2009 15:54:40 -0600" -->
<!-- isosent="20090130215440" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi" -->
<!-- id="18819.30496.279437.227087_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C37150D3-F4AB-4A10-A4EE-D9C49EE00358_at_cisco.com" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-30 16:54:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7905.php">Goldstein, Bruce E: "[OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Previous message:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30 January 2009 at 16:15, Jeff Squyres wrote:
<br>
| On Jan 26, 2009, at 3:33 PM, Dirk Eddelbuettel wrote:
<br>
| 
<br>
| &gt; Gdb doesn't want to step into the Open MPI code; I used debugging  
<br>
| &gt; symbols for
<br>
| &gt; both R and Open MPI that are available via -dbg packages with the  
<br>
| &gt; debugging
<br>
| &gt; info.  So descending one function at a time, I see the following  
<br>
| &gt; calling
<br>
| &gt; sequence
<br>
| &gt;
<br>
| &gt;  MPI_Init
<br>
| &gt;  ompi_mpi_init
<br>
| &gt;  orte_init
<br>
| &gt;  opal_init
<br>
| &gt;  opal_paffinity_base_open
<br>
| &gt;  mca_base_components_open
<br>
| &gt;  open_components
<br>
| &gt;
<br>
| &gt; where things end in the loop over oapl_list() elements.  I still see a
<br>
| &gt; fprintf() statment just before
<br>
| &gt;
<br>
| &gt;   if (MCA_SUCCESS == component-&gt;mca_register_component_params()) {
<br>
| &gt;
<br>
| &gt; in the middle of the open_components function in the file
<br>
| &gt; mca_base_components_open.c
<br>
| 
<br>
| Do you know if component is non-NULL and has a sensible value (i.e.,  
<br>
| pointing to a valid component)?
<br>
<p>Do not. Everything (in particular below /etc/openmpi/) is at default values
<br>
with the sole exception of 
<br>
<p># edd 18 Dec 2008
<br>
mca_component_show_load_errors = 0
<br>
<p>Could that kill it?  [ Goes off and tests... ] No, still dies with segfault
<br>
in open_components.
<br>
<p>| Does ompi_info work?  (ompi_info uses this exact same code to find/ 
<br>
| open components)  If ompi_info fails, you should be able to attach a  
<br>
| debugger to that, since it's a serial and [relatively] straightforward  
<br>
| app.
<br>
<p>Yes, ompi_info happily runs and returns around 111 lines. It seems to loop
<br>
over around 25 mca components.
<br>
<p>Open MPI is otherwise healthy and happy.  It's just that Rmpi does not get
<br>
along with Open MPI 1.3 .... but this happens to be my personal use-case :-/
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7905.php">Goldstein, Bruce E: "[OMPI users] Installing OpenMPI for Intel Fortran on OSX??"</a>
<li><strong>Previous message:</strong> <a href="7903.php">Roy Dragseth: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>In reply to:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7919.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
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
