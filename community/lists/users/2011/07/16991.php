<?
$subject_val = "[OMPI users] OpenMPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 19:59:55 2011" -->
<!-- isoreceived="20110726235955" -->
<!-- sent="Tue, 26 Jul 2011 17:59:49 -0600" -->
<!-- isosent="20110726235949" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI data transfer error" -->
<!-- id="SNT134-W2723640F948B753C4769B0CB320_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI data transfer error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 19:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16992.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I am using Open MPI to do data transfer from master node to worker nodes. 
<br>
But, the worker node can the data which is not what it should get. 
<br>
I have checked destination node rank, taskTag, datatype, all of them are correct. 
<br>
I do an experiment. 
<br>
Node 0 sends data to node 1 , 2 ,3. 
<br>
Only node 3 can get correct data, but node 1 and 2 get the wrong data, whichshould be received by node 3. 
<br>
What is the possible reason ? 
<br>
I have printed out the data that is sent by master node. They are exactly what the node 1 , 2, 3 should receive. 
<br>
But why node 1 and 2 get data of node 3. 
<br>
Any help is appreciated. 
<br>
Jack
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16991/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16992.php">Ralph Castain: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16990.php">Gus Correa: "Re: [OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="16994.php">Ashley Pittman: "Re: [OMPI users] OpenMPI data transfer error"</a>
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
