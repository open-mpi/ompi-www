<?
$subject_val = "[OMPI users] openmpi + share points";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 10 09:04:47 2010" -->
<!-- isoreceived="20100510130447" -->
<!-- sent="Mon, 10 May 2010 15:04:41 +0200" -->
<!-- isosent="20100510130441" -->
<!-- name="Christophe Peyret" -->
<!-- email="christophe.peyret_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi + share points" -->
<!-- id="07397866-B6F4-42FA-A46C-325742796A51_at_onera.fr" -->
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
<strong>Subject:</strong> [OMPI users] openmpi + share points<br>
<strong>From:</strong> Christophe Peyret (<em>christophe.peyret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-10 09:04:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12999.php">Dave Love: "[OMPI users] sunstudio patch needed"</a>
<li><strong>Previous message:</strong> <a href="12997.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Reply:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Maybe reply:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am building a cluster with 6 Apple xserve running OSX Server 10.6 :
<br>
<p>node1.cluster
<br>
node2.cluster
<br>
node3.cluster
<br>
node4.cluster
<br>
node5.cluster
<br>
node6.cluster
<br>
<p>I've intalled openmpi in directory /opt/openmpi-1.4.2 of node1 then I made a share point of /opt -&gt; /Network/opt and define variables
<br>
<p>export MPI_HOME=/Network/opt/openmpi-1.4.2
<br>
export OPAL_PREFIX=/Network/opt/openmpi-1.4.2
<br>
<p>I can access to openmpi from all nodes. However, I still face a problem when I launch a computation 
<br>
<p>&nbsp;mpirun --prefix /Network/opt/openmpi-1.4.2 -n 4 -hostfile ~peyret/hostfile  space64 -f Test/cfm56_hp_Rigid/cfm56_hp_Rigid.def -fast
<br>
<p>is returns me the error message :
<br>
<p>[node2.cluster:09163] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
<br>
[node4.cluster:08867] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
<br>
[node3.cluster:08880] mca: base: component_find: unable to open /Network/opt/openmpi-1.4.2/lib/openmpi/mca_odls_default: file not found (ignored)
<br>
<p>any idea ?
<br>
<p>Christophe
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12999.php">Dave Love: "[OMPI users] sunstudio patch needed"</a>
<li><strong>Previous message:</strong> <a href="12997.php">Miguel &#193;ngel V&#225;zquez: "Re: [OMPI users] Dynamic libraries in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Reply:</strong> <a href="13049.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<li><strong>Maybe reply:</strong> <a href="13088.php">Christophe Peyret: "Re: [OMPI users] openmpi + share points"</a>
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
