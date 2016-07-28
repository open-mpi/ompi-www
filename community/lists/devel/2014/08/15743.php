<?
$subject_val = "Re: [OMPI devel] intercomm_create from the ibm test suite hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 15:53:00 2014" -->
<!-- isoreceived="20140827195300" -->
<!-- sent="Wed, 27 Aug 2014 12:52:19 -0700" -->
<!-- isosent="20140827195219" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] intercomm_create from the ibm test suite hangs" -->
<!-- id="9160A870-A1A4-4452-B165-F6F7E6D3CF21_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53FDBC0D.3040905_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] intercomm_create from the ibm test suite hangs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 15:52:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>In reply to:</strong> <a href="15732.php">Gilles Gouaillardet: "[OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Reply:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Took me awhile to track this down, but it is now fixed - combination of several minor errors
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Aug 27, 2014, at 4:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the intercomm_create test case from the ibm test suite can hang under
</span><br>
<span class="quotelev1">&gt; some configuration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basically, it will spawn n tasks in a first communicator, and then n
</span><br>
<span class="quotelev1">&gt; tasks in a second communicator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i run from node0 :
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the second spawn will hang.
</span><br>
<span class="quotelev1">&gt; a simple workaround is to use 3 hosts :
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2,node3
</span><br>
<span class="quotelev1">&gt; ./intercomm_create
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the second spawn creates the task on node2.
</span><br>
<span class="quotelev1">&gt; for some reasons i cannot fully understand, pmix believe orted of nodes
</span><br>
<span class="quotelev1">&gt; node1 and node2 are involved in allgather.
</span><br>
<span class="quotelev1">&gt; since node1 in not involved whatsoever, the program hangs
</span><br>
<span class="quotelev1">&gt; /* in create_dmns, orte_get_job_data_object(sig-&gt;signature[0].jobid)
</span><br>
<span class="quotelev1">&gt; returns jdata with jdata-&gt;map-&gt;num_nodes = 2 */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15732.php">http://www.open-mpi.org/community/lists/devel/2014/08/15732.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15742.php">Lisandro Dalcin: "Re: [OMPI devel] malloc 0 warnings"</a>
<li><strong>In reply to:</strong> <a href="15732.php">Gilles Gouaillardet: "[OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Reply:</strong> <a href="15745.php">Gilles Gouaillardet: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
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
