<?
$subject_val = "[OMPI users] MPI_Graph_create hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  5 12:56:22 2008" -->
<!-- isoreceived="20080705165622" -->
<!-- sent="Sat, 05 Jul 2008 18:56:00 +0200" -->
<!-- isosent="20080705165600" -->
<!-- name="Carmen Navarrete Navarrete" -->
<!-- email="carmen.navarrete_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Graph_create hangs" -->
<!-- id="1215276960.3713.16.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Graph_create hangs<br>
<strong>From:</strong> Carmen Navarrete Navarrete (<em>carmen.navarrete_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-05 12:56:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everybody,
<br>
first of all, I want to introduce myself. I'm a spanish student and I'm
<br>
working on my thesis project. I started using MPI more or less 5 years
<br>
ago, to recreate some physical simulations.
<br>
This days I have started one project and I'm using the topology
<br>
functions of MPI. I have tested some examples of code and everything
<br>
works fine for me. Now I'm trying with my own processes architecture and
<br>
the function MPI_Graph_create hangs and never returns.
<br>
My piece of code is this one:
<br>
<p>iError = MPI_Graph_create (MPI_COMM_WORLD, pGraph-&gt;iNVertex, index,
<br>
edges, FALSE, &amp;communicator);
<br>
<p>Supose that:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- pGraph-&gt;iNVertex: returns, in my case, 5 vertices.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- FALSE: is defined as 0.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- index has these values: [1, 4, 7, 10, 12]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- edges has the values: [1, 0, 2, 3, 1, 3, 4, 1, 2, 4, 2, 3]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- communicator: is defined as MPI_Comm communicator
<br>
<p>Can anybody supose what is happening?
<br>
<p>Thanks in advance and best regards.
<br>
<pre>
-- 
Carmen Navarrete Navarrete 
carmen.navarrete_at_[hidden]
<a href="http://rincon.uam.es/dir?cw=714135742187500">http://rincon.uam.es/dir?cw=714135742187500</a> 
Centro de Referencia Linux (CRL, UAM-IBM)
Verdades como bolsas, 
que les das la vuelta 
y vuelven a ser bolsas
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6025.php">Romaric David: "[OMPI users] Gridengine + Open MPI"</a>
<li><strong>Previous message:</strong> <a href="6023.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI locking up only on IB"</a>
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
