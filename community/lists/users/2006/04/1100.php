<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 13:07:28 2006" -->
<!-- isoreceived="20060420170728" -->
<!-- sent="Fri, 21 Apr 2006 00:57:50 +0800" -->
<!-- isosent="20060420165750" -->
<!-- name="&#209;&#238;&#191;&#198;" -->
<!-- email="semper_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and SLURM configuration ?" -->
<!-- id="345552270.28472_at_nudt.edu.cn" -->
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
<strong>From:</strong> &#209;&#238;&#191;&#198; (<em>semper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 12:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1099.php">Michael Kluskens: "[OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Reply:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1102.php">СоїЖ: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,all&#163;&#172; recently I've installed OpenMPI on our cluster (4 nodes, each node got
<br>
one installation), but finally I found it could not work well with the underlying
<br>
resource management system SLURM. That is,after I typed the following, it seemed
<br>
mpirun hang there:
<br>
<p>[semper_at_IA64_node2]  srun &#168;CN 2 &#168;CA
<br>
[semper_at_IA64_node2]  mpirun  -np 2 /tmp/cpi
<br>
<p>I installed OpenMPI and SLURM all under HOME directory of user semper , and each
<br>
works well separately. I can test with such commands: 
<br>
&quot;srun &#168;CN 4 /bin/hostname &#168;Cs&quot;,  there goes correct results( 2 from node2, and 2
<br>
from node4). And &quot;mpirun &#168;Cnp 4 cpi&quot; works well on the local node.btw ,following
<br>
is some information.
<br>
Node 		User   		HOME                OpenMPI(SLURM)
<br>
IA64_node0	semper		/home/disk0/semper  $HOME/openmpi(slurm)
<br>
IA64_node1	semper		/home/disk1/semper  $HOME/openmpi(slurm)
<br>
IA64_node2	semper		/home/disk2/semper  $HOME/openmpi(slurm)
<br>
IA64_node3	semper		/home/disk3/semper  $HOME/openmpi(slurm)
<br>
<p>PATH=$HOME/openmpi/bin:$HOME/slurm/sbin:$HOME/slurm/bin:$PATH
<br>
LD_LIBRARY_PATH=$HOME/openmpi/lib:$LD_LIBRARY_PATH
<br>
<p>Does that different HOME path matter?
<br>
Can anybody detail me how to configure these two to work together?[ It nearly
<br>
drives me crazy 8-( ]  Thank you.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Previous message:</strong> <a href="1099.php">Michael Kluskens: "[OMPI users] OMPI-F90-CHECK macro needs to be updated?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Reply:</strong> <a href="1101.php">George Bosilca: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1102.php">СоїЖ: "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
<li><strong>Maybe reply:</strong> <a href="1107.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ?"</a>
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
