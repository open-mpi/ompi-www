<?
$subject_val = "[OMPI users] checkpointing multi node and multi process applications";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 07:42:52 2009" -->
<!-- isoreceived="20091219124252" -->
<!-- sent="Sat, 19 Dec 2009 04:42:47 -0800 (PST)" -->
<!-- isosent="20091219124247" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] checkpointing multi node and multi process applications" -->
<!-- id="628336.11417.qm_at_web28304.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] checkpointing multi node and multi process applications<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-19 07:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Previous message:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Everyone,
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; I am trying to checkpoint an mpi application running on multiple nodes. However, I get some error messages when i trigger the checkpointing process.
<br>
<p>Error: expected_component: PID information unavailable!
<br>
Error: expected_component: Component Name information unavailable!
<br>
<p>I am using&#160; open mpi 1.3 and blcr 0.8.1
<br>
<p>I execute my application as follows:
<br>
<p>mpirun -am ft-enable-cr -np 3 --hostfile hosts gol.
<br>
<p>My question:
<br>
<p>Does openmpi with blcr support checkpointing of multi node execution of mpi application? If so, can you provide me with some information on how to achieve this.
<br>
<p>Cheers,
<br>
<p>Jean.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11609.php">Jeff Squyres: "Re: [OMPI users] MPI-IO, providing buffers"</a>
<li><strong>Previous message:</strong> <a href="11607.php">Ralph Castain: "Re: [OMPI users] Torque 2.4.3 fails with OpenMPI 1.3.4; no startup at all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/01/11735.php">Josh Hursey: "Re: [OMPI users] checkpointing multi node and multi process applications"</a>
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
