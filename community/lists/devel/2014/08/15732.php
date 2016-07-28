<?
$subject_val = "[OMPI devel] intercomm_create from the ibm test suite hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 27 07:07:54 2014" -->
<!-- isoreceived="20140827110754" -->
<!-- sent="Wed, 27 Aug 2014 20:07:57 +0900" -->
<!-- isosent="20140827110757" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] intercomm_create from the ibm test suite hangs" -->
<!-- id="53FDBC0D.3040905_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] intercomm_create from the ibm test suite hangs<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-27 07:07:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15733.php">Jeff Squyres (jsquyres): "[OMPI devel] SVN -&gt; git conversion: check your email address!"</a>
<li><strong>Previous message:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Reply:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>the intercomm_create test case from the ibm test suite can hang under
<br>
some configuration.
<br>
<p>basically, it will spawn n tasks in a first communicator, and then n
<br>
tasks in a second communicator.
<br>
<p>when i run from node0 :
<br>
mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2
<br>
./intercomm_create
<br>
<p>the second spawn will hang.
<br>
a simple workaround is to use 3 hosts :
<br>
mpirun -np 1 --mca btl tcp,self --mca coll ^ml -host node1,node2,node3
<br>
./intercomm_create
<br>
<p>the second spawn creates the task on node2.
<br>
for some reasons i cannot fully understand, pmix believe orted of nodes
<br>
node1 and node2 are involved in allgather.
<br>
since node1 in not involved whatsoever, the program hangs
<br>
/* in create_dmns, orte_get_job_data_object(sig-&gt;signature[0].jobid)
<br>
returns jdata with jdata-&gt;map-&gt;num_nodes = 2 */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15733.php">Jeff Squyres (jsquyres): "[OMPI devel] SVN -&gt; git conversion: check your email address!"</a>
<li><strong>Previous message:</strong> <a href="15731.php">George Bosilca: "Re: [OMPI devel] Envelope of HINDEXED_BLOCK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
<li><strong>Reply:</strong> <a href="15743.php">Ralph Castain: "Re: [OMPI devel] intercomm_create from the ibm test suite hangs"</a>
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
