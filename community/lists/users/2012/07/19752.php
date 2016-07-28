<?
$subject_val = "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 17:31:32 2012" -->
<!-- isoreceived="20120710213132" -->
<!-- sent="Tue, 10 Jul 2012 17:31:26 -0400" -->
<!-- isosent="20120710213126" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi" -->
<!-- id="37B64486-3B73-4EA0-8664-232421313DAE_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 17:31:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1.  Also, not all Ethernet switches are created equal -- particularly commodity 1GB Ethernet switches.  I've seen plenty of crappy Ethernet switches rated for 1GB that could not reach that speed when under load.
<br>
<p><p><p>On Jul 10, 2012, at 10:47 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I suspect it mostly reflects communication patterns. I don't know anything about Saturne, but shared memory is a great deal faster than TCP, so the more processes sharing a node the better. You may also be hitting some natural boundary in your model - perhaps with 8 processes/node you wind up with more processes that cross the node boundary, further increasing the communication requirement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do things continue to get worse if you use all 4 nodes with 6 processes/node?
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
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I have recently built a cluster upon a Dell PowerEdge Server with a Debian 6.0 OS. This server is composed of
</span><br>
<span class="quotelev2">&gt;&gt; 4 system board of 2 processors of hexacores. So it gives 12 cores per system board.
</span><br>
<span class="quotelev2">&gt;&gt; The boards are linked with a local Gbits switch.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; In order to parallelize the software Code Saturne, which is a CFD solver, I have configured the cluster
</span><br>
<span class="quotelev2">&gt;&gt; such that there are a pbs server/mom on 1 system board and 3 mom and the 3 others cards. So this leads to
</span><br>
<span class="quotelev2">&gt;&gt; 48 cores dispatched on 4 nodes of 12 CPU. Code saturne is compiled with the openmpi 1.6 version.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When I launch a simulation using 2 nodes with 12 cores, elapse time is good and network traffic is not full.
</span><br>
<span class="quotelev2">&gt;&gt; But when I launch the same simulation using 3 nodes with 8 cores, elapse time is 5 times the previous one.
</span><br>
<span class="quotelev2">&gt;&gt; I both cases, I use 24 cores and network seems not to be satured.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; I have tested several configurations : binaries in local file system or on a NFS. But results are the same.
</span><br>
<span class="quotelev2">&gt;&gt; I have visited severals forums (in particular <a href="http://www.open-mpi.org/community/lists/users/2009/08/10394.php">http://www.open-mpi.org/community/lists/users/2009/08/10394.php</a>)
</span><br>
<span class="quotelev2">&gt;&gt; and read lots of threads, but as I am not an expert at clusters, I presently do not see where it is wrong !
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Is it a problem in the configuration of PBS (I have installed it from the deb packages), a subtile compilation options
</span><br>
<span class="quotelev2">&gt;&gt; of openMPI, or a bad network configuration ?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; B. S.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19753.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Previous message:</strong> <a href="19751.php">David Warren: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>In reply to:</strong> <a href="19749.php">Ralph Castain: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
<li><strong>Reply:</strong> <a href="19754.php">Gus Correa: "Re: [OMPI users] Bad parallel scaling using Code Saturne with openmpi"</a>
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
