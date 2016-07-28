<?
$subject_val = "[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 10 14:33:14 2011" -->
<!-- isoreceived="20110310193314" -->
<!-- sent="Thu, 10 Mar 2011 20:30:19 +0100" -->
<!-- isosent="20110310193019" -->
<!-- name="Thierry LAMOUREUX" -->
<!-- email="thierry.lamoureux_at_[hidden]" -->
<!-- subject="[OMPI users] QLogic Infiniband : Run switch from ib0 to eth0" -->
<!-- id="009e01cbdf59$978e7450$c6ab5cf0$_at_noveltis.fr" -->
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
<strong>Subject:</strong> [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0<br>
<strong>From:</strong> Thierry LAMOUREUX (<em>thierry.lamoureux_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-10 14:30:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15845.php">Abdul Rahman Riza: "[OMPI users] OPEN MPI tutorials depreciated!"</a>
<li><strong>Previous message:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15848.php">Peter Kjellström: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Reply:</strong> <a href="15848.php">Peter Kjellström: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We add recently enhanced our network with Infiniband modules on a six node
<br>
cluster.
<br>
<p>We have install all OFED drivers related to our hardware
<br>
<p>We have set network IP like following :
<br>
- eth : 192.168.1.0 / 255.255.255.0
<br>
- ib : 192.168.70.0 / 255.255.255.0
<br>
<p>After first tests all seems good. IB interfaces ping each other, ssh and
<br>
other king of exchanges over IB works well.
<br>
<p>Then we started to run our job thought openmpi (building with --with-openib
<br>
option) and our first results were very bad.
<br>
<p>After investigations, our system have the following behaviour :
<br>
- job starts over ib network (few packet are sent)
<br>
- job switch to eth network (all next packet sent to these interfaces)
<br>
<p>We never specified the IP Address of our eth interfaces.
<br>
<p>We tried to launch our jobs with the following options :
<br>
- mpirun -hostfile hostfile.list -mca blt openib,self
<br>
/common_gfs2/script-test.sh
<br>
- mpirun -hostfile hostfile.list -mca blt openib,sm,self
<br>
/common_gfs2/script-test.sh
<br>
- mpirun -hostfile hostfile.list -mca blt openib,self -mca
<br>
btl_tcp_if_exclude lo,eth0,eth1,eth2 /common_gfs2/script-test.sh
<br>
<p>The final behaviour remain the same : job is initiated over ib and runs over
<br>
eth.
<br>
<p>We grab performance tests file (osu_bw and osu_latency) and we got not so
<br>
bad results (see attached files).
<br>
<p>We had tried plenty of different things but we are stuck : we don't have any
<br>
error message...
<br>
<p>Thanks per advance for your help.
<br>
<p>Thierry.
<br>
<p>


<br><p>
<p><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15844/osu_latency.txt">osu_latency.txt</a>
</ul>
<!-- attachment="osu_latency.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15844/osu_bw.txt">osu_bw.txt</a>
</ul>
<!-- attachment="osu_bw.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15844/other_net_test.txt">other_net_test.txt</a>
</ul>
<!-- attachment="other_net_test.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15845.php">Abdul Rahman Riza: "[OMPI users] OPEN MPI tutorials depreciated!"</a>
<li><strong>Previous message:</strong> <a href="15843.php">Jeff Squyres: "Re: [OMPI users] multi-threaded programming"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15848.php">Peter Kjellström: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
<li><strong>Reply:</strong> <a href="15848.php">Peter Kjellström: "Re: [OMPI users] QLogic Infiniband : Run switch from ib0 to eth0"</a>
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
