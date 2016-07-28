<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 11:48:29 2012" -->
<!-- isoreceived="20120710154829" -->
<!-- sent="Tue, 10 Jul 2012 16:48:24 +0100 (BST)" -->
<!-- isosent="20120710154824" -->
<!-- name="Dugenoux Albert" -->
<!-- email="dugenouxa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="1341935304.78875.YahooMailNeo_at_web29405.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D7A79285-0242-4743-BF44-9108C777E296_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi<br>
<strong>From:</strong> Dugenoux Albert (<em>dugenouxa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 11:48:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your answer.You are right.
&#160;I've tried&#160;upon&#160;4 nodes with 6 processes and things are worst.
&#160;
So do you suggest that unique thing to do is to order an infiniband switch or is there a possibility to enhance
something by tuning mca parameters ?
&#160;


________________________________
De&#160;: Ralph Castain &lt;rhc_at_[hidden]&gt;
&#192;&#160;: Dugenoux Albert &lt;dugenouxa_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Envoy&#233; le : Mardi 10 juillet 2012 16h47
Objet&#160;: Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi


I suspect it mostly reflects communication patterns. I don't know anything about Saturne, but shared memory is a great deal faster than TCP, so the more processes sharing a node the better. You may also be hitting some natural boundary in your model - perhaps with 8 processes/node you wind up with more processes that cross the node boundary, further increasing the communication requirement. 

Do things continue to get worse if you use all 4 nodes with 6 processes/node?



On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:

Hi.
&gt;
&gt;I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of 
&gt;4 system board of 2 processors of hexacores. So it gives 12 cores&#160;per system board.
&gt;The boards are linked with a local Gbits switch. 
&gt;
&gt;In order to&#160;parallelize the software Code Saturne, which is a CFD solver, I have configured&#160;the cluster
&gt;such that there are&#160;a pbs server/mom on 1 system board and&#160;3 mom and the&#160;3 others cards. So this leads to 
&gt;48 cores dispatched on&#160;4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
&gt;
&gt;When I launch a simulation using 2 nodes&#160;with 12 cores,&#160;elapse time is good and network traffic is not full.
&gt;But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
&gt;I&#160;both cases, I use 24 cores and network seems not to be satured. 
&gt;
&gt;I have tested several configurations : binaries in local file system or&#160;on a NFS. But results are the same.
&gt;I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
&gt;and read lots of threads, but as I am not an expert at clusters, I presently do not see where it&#160;is wrong !
&gt;
&gt;Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
&gt;of openMPI, or a bad&#160;network configuration&#160;?
&gt;
&gt;Regards.
&gt;
&gt;B. S._______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
