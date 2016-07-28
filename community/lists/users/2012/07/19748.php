<?
$subject_val = "[OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 10:31:08 2012" -->
<!-- isoreceived="20120710143108" -->
<!-- sent="Tue, 10 Jul 2012 15:31:03 +0100 (BST)" -->
<!-- isosent="20120710143103" -->
<!-- name="Dugenoux Albert" -->
<!-- email="dugenouxa_at_[hidden]" -->
<!-- subject="[OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="1341930663.38094.YahooMailNeo_at_web29401.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> [OMPI users] Bad parallel scaling using Code Saturne with openmpi<br>
<strong>From:</strong> Dugenoux Albert (<em>dugenouxa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 10:31:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19747.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p (again)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
&#160;
I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of 
4 system board of 2 processors of hexacores. So it gives 12 cores&#160;per system board.
The boards are linked with a local Gbits switch. 
&#160;
In order to&#160;parallelize the software Code Saturne, which is a CFD solver, I have configured&#160;the cluster
such that there are&#160;a pbs server/mom on 1 system board and&#160;3 mom and the&#160;3 others cards. So this leads to 
48 cores dispatched on&#160;4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
&#160;
When I launch a simulation using 2 nodes&#160;with 12 cores,&#160;elapse time is good and network traffic is not full.
But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
I&#160;both cases, I use 24 cores and network seems not to be satured. 
&#160;
I have tested several configurations : binaries in local file system or&#160;on a NFS. But results are the same.
I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
and read lots of threads, but as I am not an expert at clusters, I presently do not see where it&#160;is wrong !
&#160;
Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
of openMPI, or a bad&#160;network configuration&#160;?
&#160;
Regards.
&#160;
B. S.
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19748/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19747.php">Rolf vandeVaart: "Re: [OMPI users] gpudirect p2p (again)?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Maybe reply:</strong> <a href="19760.php">Yvan Fournier: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
