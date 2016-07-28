<?
$subject_val = "[OMPI users] openMPI, transfer data from multiple sources to one destination";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 28 19:45:12 2008" -->
<!-- isoreceived="20081229004512" -->
<!-- sent="Sun, 28 Dec 2008 17:45:07 -0700" -->
<!-- isosent="20081229004507" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] openMPI, transfer data from multiple sources to one destination" -->
<!-- id="BLU149-W170BC60F18C4C2E0A14AE3CBE60_at_phx.gbl" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] openMPI, transfer data from multiple sources to one destination<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-28 19:45:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7611.php">doriankrause: "[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI, 
<br>
<p>I need to transfer data from multiple sources to one destination. 
<br>
The requirement is:
<br>
<p>(1) The sources and destination nodes may work asynchronously.
<br>
&nbsp;
<br>
(2) Each source node generates data package in their own paces.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;And, there may be many packages to send. Whenever, a data package 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;is generated , it should be sent to the desination node at once.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;And then, the source node continue to work on generating the next 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;package. 
<br>
<p>(3) There is only one destination node , which must receive all data 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;package generated from the source nodes. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Because the source and destination nodes may work asynchronously,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the destination node should not wait for a specific source node until 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the source node sends out its data. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The destination node should be able to receive data package 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from anyone source node whenever the data package is available in a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;source node. 
<br>
<p>My question is :
<br>
<p>What MPI function should be used to implement the protocol above ? 
<br>
<p>If I use MPI_Send/Recv, they are blocking function. The destination
<br>
node have to wait for one node until its data is available. 
<br>
<p>The communication overhead is too high. 
<br>
<p>If I use MPI_Bsend, the destination node has to use MPI_Recv to , 
<br>
a Blocking receive for a message .
<br>
<p>This can make the destination node wait for only one source node and 
<br>
actually other source nodes may have data avaiable. 
<br>
<p><p>Any help or comment is appreciated !!!
<br>
<p>thanks
<br>
<p>Dec. 28 2008
<br>
<p><p>_________________________________________________________________
<br>
It&#146;s the same Hotmail&#174;. If by &#147;same&#148; you mean up to 70% faster.
<br>
<a href="http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008">http://windowslive.com/online/hotmail?ocid=TXT_TAGLM_WL_hotmail_acq_broad1_122008</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7612/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Previous message:</strong> <a href="7611.php">doriankrause: "[OMPI users] segmentation fault in opal_free_list_grow (derived datatypes + onesided)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7613.php">Win Than Aung: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7614.php">Terry Frankcombe: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="7616.php">Biagio Lucini: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7633.php">Eugene Loh: "Re: [OMPI users] openMPI, transfer data from multiple sources to one destination"</a>
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
