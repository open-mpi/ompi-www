<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Mar 18 07:27:35 2007" -->
<!-- isoreceived="20070318112735" -->
<!-- sent="Sun, 18 Mar 2007 07:27:29 -0400" -->
<!-- isosent="20070318112729" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT users] MPI details: after_each_exec lesson learned" -->
<!-- id="90AB5377-485E-4E05-B4FD-C76344353493_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-18 07:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/04/0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="0287.php">Ethan Mallove: "[MTT users] MTT server error (user: ibm)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We learned a pretty hard lesson about the after_each_exec step in the  
<br>
MPI Details section over the past few weeks, particularly when used  
<br>
in conjunction with SLURM's &quot;srun&quot; command (although this is not a  
<br>
SLURM-specific issue).
<br>
<p>I highly encourage everyone to read the commit message for r657 -- it  
<br>
changed what we do at Cisco in the after_each_exec step:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/mtt/changeset/657">https://svn.open-mpi.org/trac/mtt/changeset/657</a>
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/04/0289.php">Tim Mattox: "[MTT users] Recent OMPI Trunk fails MPI_Allgatherv_* MTT tests"</a>
<li><strong>Previous message:</strong> <a href="0287.php">Ethan Mallove: "[MTT users] MTT server error (user: ibm)"</a>
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
