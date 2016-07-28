<?
$subject_val = "Re: [OMPI devel] SM init failures";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 17:48:57 2009" -->
<!-- isoreceived="20090330214857" -->
<!-- sent="Mon, 30 Mar 2009 13:48:25 -0800" -->
<!-- isosent="20090330214825" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM init failures" -->
<!-- id="49D13E29.1090001_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ea86ce220903271030w3fb56b9flcc2bb6abd10ed096_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SM init failures<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 17:48:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5758.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg faultrunning	OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt;I think I remember setting up the MTT tests on Sif so that tests
</span><br>
<span class="quotelev1">&gt;are run both with and without the coll_hierarch component selected.
</span><br>
<span class="quotelev1">&gt;The coll_hierarch component stresses code paths and potential
</span><br>
<span class="quotelev1">&gt;race conditions in its own way.  So, if the problems are showing up
</span><br>
<span class="quotelev1">&gt;more frequently for the test runs with the coll_hierarch component
</span><br>
<span class="quotelev1">&gt;enabled, then I would check the communicator creation code paths.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Going back to the subject heading &quot;SM init failures&quot;, I looked at a 
<br>
bunch of the MTT stack traces.  E.g., the 143 failures with 20880 on 
<br>
IU_Sif seen on <a href="http://www.open-mpi.org/mtt/index.php?do_redir=973">http://www.open-mpi.org/mtt/index.php?do_redir=973</a> .  If 
<br>
you look at the failures where &quot;MPI_Init&quot; shows up in the stack trace, 
<br>
you get one of these two:
<br>
<p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Address not mapped (1)
<br>
Failing at address: 0x2aaab16a6080
<br>
[ 0] /lib64/libpthread.so.0
<br>
[ 1] .../install/lib/openmpi/mca_btl_sm.so
<br>
[ 2] .../install/lib/openmpi/mca_pml_ob1.so
<br>
[ 3] .../install/lib/openmpi/mca_pml_ob1.so
<br>
[ 4] .../install/lib/openmpi/mca_coll_tuned.so
<br>
[ 5] .../install/lib/openmpi/mca_coll_tuned.so
<br>
[ 6] .../install/lib/libmpi.so.0(ompi_comm_split+0xc4)
<br>
[ 7] .../install/lib/openmpi/mca_coll_hierarch.so
<br>
[ 8] .../install/lib/libmpi.so.0
<br>
[ 9] .../install/lib/libmpi.so.0
<br>
[10] .../install/lib/libmpi.so.0(MPI_Init+0xf0)
<br>
<p><p><p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code: Invalid permissions (2)
<br>
Failing at address: 0x2aaab02d6080
<br>
[ 0] /lib64/libpthread.so.0
<br>
[ 1] .../install/lib/openmpi/mca_btl_sm.so
<br>
[ 2] .../install/lib/libopen-pal.so.0(opal_progress+0x5a)
<br>
[ 3] .../install/lib/openmpi/mca_pml_ob1.so
<br>
[ 4] .../install/lib/openmpi/mca_coll_hierarch.so
<br>
[ 5] .../install/lib/openmpi/mca_coll_hierarch.so
<br>
[ 6] .../install/lib/openmpi/mca_coll_hierarch.so
<br>
[ 7] .../install/lib/libmpi.so.0
<br>
[ 8] .../install/lib/libmpi.so.0
<br>
[ 9] .../install/lib/libmpi.so.0(ompi_comm_activate+0xd1)
<br>
[10] .../install/lib/libmpi.so.0(ompi_comm_split+0x37b)
<br>
[11] .../install/lib/openmpi/mca_coll_hierarch.so
<br>
[12] .../install/lib/libmpi.so.0
<br>
[13] .../install/lib/libmpi.so.0
<br>
[14] .../install/lib/libmpi.so.0(MPI_Init+0x17b)
<br>
<p>Anyhow, this seems to me to be related to mca_coll_hierarch.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5760.php">Eugene Loh: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5758.php">Jeff Squyres: "Re: [OMPI devel] ***SPAM*** Re: [ewg] Seg faultrunning	OpenMPI-1.3.1rc4"</a>
<li><strong>In reply to:</strong> <a href="5717.php">Tim Mattox: "Re: [OMPI devel] SM init failures"</a>
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
