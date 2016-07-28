<?
$subject_val = "[OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:33:52 2009" -->
<!-- isoreceived="20090126203352" -->
<!-- sent="Mon, 26 Jan 2009 14:33:48 -0600" -->
<!-- isosent="20090126203348" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi" -->
<!-- id="18814.7724.108130.393883_at_ron.nulle.part" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 15:33:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am chasing a segfault when I use Open MPI (1.3) with Rmpi (0.5.6), the MPI
<br>
add-on package for R that is written and maintained btyby Prof Hao Yu (CC'ed)
<br>
<p>I should prefix that the code runs just fine on 32bit Debian system at home.
<br>
However, on amd64 running Ubuntu 8.10, I am seeing segfaults upon
<br>
initialisation.  I use the same R and Open MPI packages on both systems,
<br>
suitably recompiled. One of the bigger toolkit difference is the 1.5.26
<br>
version of libtool on Debian versus 2.2.4 on Ubuntu.
<br>
<p>Gdb doesn't want to step into the Open MPI code; I used debugging symbols for
<br>
both R and Open MPI that are available via -dbg packages with the debugging
<br>
info.  So descending one function at a time, I see the following calling
<br>
sequence
<br>
<p>&nbsp;&nbsp;MPI_Init
<br>
&nbsp;&nbsp;ompi_mpi_init
<br>
&nbsp;&nbsp;orte_init
<br>
&nbsp;&nbsp;opal_init
<br>
&nbsp;&nbsp;opal_paffinity_base_open
<br>
&nbsp;&nbsp;mca_base_components_open
<br>
&nbsp;&nbsp;open_components
<br>
<p>where things end in the loop over oapl_list() elements.  I still see a
<br>
fprintf() statment just before
<br>
<p>&nbsp;&nbsp;&nbsp;if (MCA_SUCCESS == component-&gt;mca_register_component_params()) {
<br>
&nbsp;&nbsp;
<br>
in the middle of the open_components function in the file
<br>
mca_base_components_open.c 
<br>
<p>Does this make any sense?  I was at first worried that the dynamic loading
<br>
faild -- yet this does not seem to be the case as the mpi, open-rte and
<br>
open-pal libraries are loaded and I also see code from some of the modules
<br>
being executed.  I somehow fear that something is colliding with GNU R, but
<br>
despite some familiarity with R I have to admit that I do not know here this
<br>
could come from.  
<br>
<p>Any pointers would be appreciated.
<br>
<p>Regards, Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<li><strong>Previous message:</strong> <a href="7844.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
<li><strong>Reply:</strong> <a href="7902.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.3 segfault on amd64 with Rmpi"</a>
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
