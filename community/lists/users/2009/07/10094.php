<?
$subject_val = "[OMPI users] GFS2 and OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 26 08:38:08 2009" -->
<!-- isoreceived="20090726123808" -->
<!-- sent="Sun, 26 Jul 2009 14:38:01 +0200" -->
<!-- isosent="20090726123801" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] GFS2 and OpenMPI" -->
<!-- id="4A6C4E29.60801_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] GFS2 and OpenMPI<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-26 08:38:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe this question is not entirely appropriate to this forum, but maybe 
<br>
someone reading this forum has already tried this and knows which method 
<br>
is faster.
<br>
<p>I am about to hook up a NAS node to my Centos based Linux cluster. NAS 
<br>
storage will be shared amongst the nodes using GFS2. My OpenMPI program 
<br>
needs to synchronize temporary files between the nodes, which is one of 
<br>
reasons I am switching to NAS.
<br>
My program checkpoints/restarts by copying checkpoint/restart files to a 
<br>
local directory. The current code for taking a checkpoint looks 
<br>
something like:
<br>
<p>if (mpi_id == mpi_host_id)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//save global variales and temporary files to the local CR directory
<br>
}
<br>
<p>When switching to NAS I can leave the code as is assuming GFS2 is smart 
<br>
enough to detect that the temporary files and the CR directory reside on 
<br>
the NAS node and does not copy the files unncessary across the network:
<br>
<p>if (mpi_id == mpi_host_id)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//save global variales and temporary files (now residing on the GFS2 
<br>
server node) to a CR directory (also residing on the GFS2 server node)
<br>
}
<br>
<p>or I can change the code to:
<br>
<p>if (mpi_id == mpi_host_id)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//save global variables to the CR directory residing on the GFS2 
<br>
server node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;//send an OpenMPI message to the GFS2 server node to copy the 
<br>
temporary files to a CR directory on the GFS2 server node
<br>
}
<br>
<p>Is the second method a lot faster than the first method or is it about 
<br>
the same?
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10095.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<li><strong>Previous message:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
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
