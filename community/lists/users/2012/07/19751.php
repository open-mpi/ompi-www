<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 15:55:01 2012" -->
<!-- isoreceived="20120710195501" -->
<!-- sent="Tue, 10 Jul 2012 12:54:53 -0700" -->
<!-- isosent="20120710195453" -->
<!-- name="David Warren" -->
<!-- email="warren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="4FFC888D.7090804_at_atmos.washington.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1341935304.78875.YahooMailNeo_at_web29405.mail.ird.yahoo.com" -->
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
<strong>From:</strong> David Warren (<em>warren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 15:54:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19750.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19750.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your problem may not be related to bandwidth. It may be latency or 
<br>
division of the problem. We found significant improvements running wrf 
<br>
and other atmospheric code (CFD) over IB. The problem was not so much 
<br>
the amount of data communicated, but how long it takes to send it. Also, 
<br>
is your model big enough to split up as much as you are trying? If there 
<br>
is not enough work for each core to do between edge exchanges, you will 
<br>
spend all of your time spinning waiting for the network. If you are 
<br>
running a demo benchmark it is likely too small for the number of 
<br>
processors. At least that is what we find with most weather model demo 
<br>
problems. One other thing to look at is how it is being split up. 
<br>
Depending on what the algorithm does, you may want more x points, more y 
<br>
points or completely even divisions. We found that we can significantly 
<br>
speed up wrf for our particular domain by not lett
<br>
<p>On 07/10/12 08:48, Dugenoux Albert wrote:
<br>
<span class="quotelev1">&gt; Thanks for your answer.You are right.
</span><br>
<span class="quotelev1">&gt; I've tried upon 4 nodes with 6 processes and things are worst.
</span><br>
<span class="quotelev1">&gt; So do you suggest that unique thing to do is to order an infiniband 
</span><br>
<span class="quotelev1">&gt; switch or is there a possibility to enhance
</span><br>
<span class="quotelev1">&gt; something by tuning mca parameters ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *De :* Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *&#192; :* Dugenoux Albert &lt;dugenouxa_at_[hidden]&gt;; Open MPI Users 
</span><br>
<span class="quotelev1">&gt; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Envoy&#233; le :* Mardi 10 juillet 2012 16h47
</span><br>
<span class="quotelev1">&gt; *Objet :* Re: [OMPI users] Bad parallel scaling using Code Saturne 
</span><br>
<span class="quotelev1">&gt; with openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect it mostly reflects communication patterns. I don't know 
</span><br>
<span class="quotelev1">&gt; anything about Saturne, but shared memory is a great deal faster than 
</span><br>
<span class="quotelev1">&gt; TCP, so the more processes sharing a node the better. You may also be 
</span><br>
<span class="quotelev1">&gt; hitting some natural boundary in your model - perhaps with 8 
</span><br>
<span class="quotelev1">&gt; processes/node you wind up with more processes that cross the node 
</span><br>
<span class="quotelev1">&gt; boundary, further increasing the communication requirement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do things continue to get worse if you use all 4 nodes with 6 
</span><br>
<span class="quotelev1">&gt; processes/node?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2012, at 7:31 AM, Dugenoux Albert wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi.
</span><br>
<span class="quotelev2">&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a 
</span><br>
<span class="quotelev2">&gt;&gt; Debian 6.0 OS. This server is composed of
</span><br>
<span class="quotelev2">&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores per 
</span><br>
<span class="quotelev2">&gt;&gt; system board.
</span><br>
<span class="quotelev2">&gt;&gt; The boards are linked with a local Gbits switch.
</span><br>
<span class="quotelev2">&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD 
</span><br>
<span class="quotelev2">&gt;&gt; solver, I have configured the cluster
</span><br>
<span class="quotelev2">&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom and 
</span><br>
<span class="quotelev2">&gt;&gt; the 3 others cards. So this leads to
</span><br>
<span class="quotelev2">&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled 
</span><br>
<span class="quotelev2">&gt;&gt; with the openmpi 1.6 version.
</span><br>
<span class="quotelev2">&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time 
</span><br>
<span class="quotelev2">&gt;&gt; is good and network traffic is not full.
</span><br>
<span class="quotelev2">&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores, 
</span><br>
<span class="quotelev2">&gt;&gt; elapse time is 5 times the previous one.
</span><br>
<span class="quotelev2">&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
</span><br>
<span class="quotelev2">&gt;&gt; I have tested several configurations : binaries in local file system 
</span><br>
<span class="quotelev2">&gt;&gt; or on a NFS. But results are the same.
</span><br>
<span class="quotelev2">&gt;&gt; I have visited severals forums (in particular 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev2">&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I 
</span><br>
<span class="quotelev2">&gt;&gt; presently do not see where it is wrong !
</span><br>
<span class="quotelev2">&gt;&gt; Is it a problem in the configuration of PBS (I have installed it from 
</span><br>
<span class="quotelev2">&gt;&gt; the deb packages), a subtile compilation options
</span><br>
<span class="quotelev2">&gt;&gt; of openMPI, or a bad network configuration ?
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; B. S.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19752.php">Jeff Squyres: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19750.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19750.php">Dugenoux Albert: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
