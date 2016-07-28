<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 23:53:12 2014" -->
<!-- isoreceived="20140528035312" -->
<!-- sent="Wed, 28 May 2014 12:53:04 +0900" -->
<!-- isosent="20140528035304" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="53855DA0.3020302_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0DE05A4-51CB-4B68-B122-90B569DE66C2_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 23:53:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p><p>On 2014/05/28 12:10, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; my understanding is that there are two ways of seeing things :
</span><br>
<span class="quotelev1">&gt; a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to already exited processes
</span><br>
<span class="quotelev1">&gt; b) the &quot;J-way&quot; : the problem is the children should have waited either in MPI_Comm_free() or MPI_Finalize()
</span><br>
<span class="quotelev1">&gt; I don't think you can use option (b) - we can't have the children lingering around for the parent to call finalize, if I'm understanding you correctly.
</span><br>
you understood me correctly.
<br>
<p>once again, i did not start investigating loop_spawn.
<br>
<p>in the case of intercomm_create, we would not run into this if the
<br>
application had explicitly called MPI_Comm_free in the parent.
<br>
so in this case *only*, and as explained by Jeff, b) could be an option
<br>
to make OpenMPI happy.
<br>
(to be blunt : if the user is not happy with children lingering around,
<br>
he can explicitly call MPI_Comm_free before calling MPI_Comm_disconnect)
<br>
<p>i will start investigating loop_spawn from now
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14880.php">Gilles Gouaillardet: "Re: [OMPI devel] Trunk (RDMA and VT) warnings"</a>
<li><strong>Previous message:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>In reply to:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14881.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
