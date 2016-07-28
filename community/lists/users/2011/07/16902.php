<?
$subject_val = "[OMPI users] a question about  network  connection  of  open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 21:39:23 2011" -->
<!-- isoreceived="20110713013923" -->
<!-- sent="Wed, 13 Jul 2011 09:39:11 +0800" -->
<!-- isosent="20110713013911" -->
<!-- name="zhuangchao" -->
<!-- email="freeoser_at_[hidden]" -->
<!-- subject="[OMPI users] a question about  network  connection  of  open-mpi" -->
<!-- id="201107130939103893191_at_163.com" -->
<!-- charset="gb2312" -->
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
<strong>Subject:</strong> [OMPI users] a question about  network  connection  of  open-mpi<br>
<strong>From:</strong> zhuangchao (<em>freeoser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-12 21:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Reply:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello all :
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I   run  the following command :   
<br>
<p>/data1/cluster/openmpi/bin/mpirun  -d  -machinefile  /tmp/nodes.10515.txt   -np  3  /data1/cluster/mpiblast-pio-1.6/bin/mpiblast   -p blastn -i /data1/cluster/sequences/seq_4.txt -d Baculo_Nucleotide -o /data1/cluster/blast.out/blast.out.10515      -g T -m  0 -F F 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Then  I  get  the following  error  from  openmpi:
<br>
<p>[node7][[3812,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 192.168.0.5 failed: No route to host (113)
<br>
[node7][[3812,1],2][btl_tcp_endpoint.c:638:mca_btl_tcp_endpoint_complete_connect] connect() to 159.226.126.15 failed: No route to host (113)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The  machinefile  is defined  as  following :
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node7
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;192.168.0.5  is  not  the  ip  of  hosts in the  machinefile .    159.226.126.15  is  the   another ip of  node1 .  But  hostname node1
<br>
<p>corresponds to   11.11.11.1  in  the /etc/hosts .
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;why   do  I  get  the error ?      Can  you  help me ? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thank you !    
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16902/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16903.php">Eugene Loh: "Re: [OMPI users] OpenMPI vs Intel Efficiency question"</a>
<li><strong>Previous message:</strong> <a href="16901.php">Mohan, Ashwin: "[OMPI users] OpenMPI vs Intel Efficiency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
<li><strong>Reply:</strong> <a href="16904.php">Ralph Castain: "Re: [OMPI users] a question about network connection of open-mpi"</a>
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
