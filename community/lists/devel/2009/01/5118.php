<?
$subject_val = "[OMPI devel] size of shared-memory backing file + maffinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 14:58:31 2009" -->
<!-- isoreceived="20090112195831" -->
<!-- sent="Mon, 12 Jan 2009 12:02:13 -0800" -->
<!-- isosent="20090112200213" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] size of shared-memory backing file + maffinity" -->
<!-- id="496BA1C5.50207_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] size of shared-memory backing file + maffinity<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-12 15:02:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Reply:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to understand how much shared memory is allocated when 
<br>
maffinity is on.
<br>
<p>The sm BTL sets up a file that is mmapped into each local process's 
<br>
address space so that the processes on a node can communicate via shared 
<br>
memory.
<br>
<p>Actually, when maffinity indicates that there are multiple &quot;memory 
<br>
nodes&quot; on the node, then a separate file is set up and mmapped for each 
<br>
&quot;memory node&quot;.
<br>
<p>There is an MCA parameter named &quot;[mpool_sm_per_]peer_size&quot;, which by 
<br>
default is 32 Mbytes.  The idea is that there are n processes on the 
<br>
node, then the size of the file to be mmapped in is n*32M.
<br>
<p>But, if there are multiple &quot;memory nodes&quot;, will there be that much more 
<br>
shared memory?  That is, is the total amount of shared memory that's 
<br>
mmapped into all the processes:
<br>
<p>&nbsp;&nbsp;mem_nodes * num_local_procs * peer_size
<br>
<p>Or, should the file for a memory node be created with size proportional 
<br>
to the number of processes that correspond to that memory node?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5119.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Building with rpath disabled"</a>
<li><strong>Previous message:</strong> <a href="5117.php">George Bosilca: "Re: [OMPI devel] OpenMPI Performance Problem with Open|SpeedShop"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
<li><strong>Reply:</strong> <a href="5121.php">Lenny Verkhovsky: "Re: [OMPI devel] size of shared-memory backing file + maffinity"</a>
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
