<?
$subject_val = "[OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 16:13:13 2014" -->
<!-- isoreceived="20140810201313" -->
<!-- sent="Sun, 10 Aug 2014 20:13:10 +0000" -->
<!-- isosent="20140810201310" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="7da337e8e4fc449785b88155597bb620_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI fails with np &gt; 65<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 16:13:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24960.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
<br>
It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
<br>
It also seems to unrelated to specific host.
<br>
All hosts are Ubuntu 12.04.1 LTS
<br>
<p>mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
<br>
[nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>
<p>.......................................
<br>
It looks like environment issue, but I can't find any limit related.
<br>
Any ideas ?
<br>
Thanks.
<br>
Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Previous message:</strong> <a href="24960.php">Ralph Castain: "Re: [OMPI users] problem compiling openmpi-1.8.1 on Mac running Mavericks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
