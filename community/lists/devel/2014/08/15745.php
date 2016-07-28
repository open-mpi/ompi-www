<?
$subject_val = "Re: [OMPI devel] intercomm_create from the ibm test suite hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 06:43:30 2014" -->
<!-- isoreceived="20140828104330" -->
<!-- sent="Thu, 28 Aug 2014 19:43:42 +0900" -->
<!-- isosent="20140828104342" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] intercomm_create from the ibm test suite hangs" -->
<!-- id="53FF07DE.4010609_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9160A870-A1A4-4452-B165-F6F7E6D3CF21_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 06:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>In reply to:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph !
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/28 4:52, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Took me awhile to track this down, but it is now fixed - combination of several minor errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 27, 2014, at 4:07 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the intercomm_create test case from the ibm test suite can hang under
</span><br>
<span class="quotelev2">&gt;&gt; some configuration.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; basically, it will spawn n tasks in a first communicator, and then n
</span><br>
<span class="quotelev2">&gt;&gt; tasks in a second communicator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when i run from node0 :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2
</span><br>
<span class="quotelev2">&gt;&gt; ./intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the second spawn will hang.
</span><br>
<span class="quotelev2">&gt;&gt; a simple workaround is to use 3 hosts :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2,node3
</span><br>
<span class="quotelev2">&gt;&gt; ./intercomm_create
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the second spawn creates the task on node2.
</span><br>
<span class="quotelev2">&gt;&gt; for some reasons i cannot fully understand, pmix believe orted of nodes
</span><br>
<span class="quotelev2">&gt;&gt; node1 and node2 are involved in allgather.
</span><br>
<span class="quotelev2">&gt;&gt; since node1 in not involved whatsoever, the program hangs
</span><br>
<span class="quotelev2">&gt;&gt; /* in create_dmns, orte_get_job_data_object(sig-&gt;signature[0].jobid)
</span><br>
<span class="quotelev2">&gt;&gt; returns jdata with jdata-&gt;map-&gt;num_nodes = 2 */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15732.php">http://www.open-mpi.org/community/lists/devel/2014/08/15732.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15743.php">http://www.open-mpi.org/community/lists/devel/2014/08/15743.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15746.php">Edgar Gabriel: "[OMPI devel] segfault in openib component on trunk"</a>
<li><strong>Previous message:</strong> <a href="15744.php">Ralph Castain: "Re: [OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>In reply to:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
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
