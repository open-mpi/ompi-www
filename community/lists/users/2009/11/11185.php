<?
$subject_val = "Re: [OMPI users] oob mca question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 22:09:16 2009" -->
<!-- isoreceived="20091113030916" -->
<!-- sent="Thu, 12 Nov 2009 22:09:11 -0500" -->
<!-- isosent="20091113030911" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob mca question" -->
<!-- id="EBCF6EB6-05C1-4C80-9242-71311A14F700_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="88889343-41DA-4B98-90F6-45762F7EA913_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] oob mca question<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 22:09:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11186.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks! I appreciate the response.
<br>
<p>On Nov 12, 2009, at 9:54 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; That is indeed the expected behavior, and your solution is the  
</span><br>
<span class="quotelev1">&gt; correct one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The orted has no way of knowing which interface mpirun can be  
</span><br>
<span class="quotelev1">&gt; reached on, so it has no choice but to work its way through the  
</span><br>
<span class="quotelev1">&gt; available ones. Because of the ordering in the way the OS reports  
</span><br>
<span class="quotelev1">&gt; the interfaces, it is picking up the public one first - so that is  
</span><br>
<span class="quotelev1">&gt; the first one used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Telling it the right one to use is the only solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 12, 2009, at 7:35 PM, Aaron Knister wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear List,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm having a really weird issue with openmpi - version 1.3.3  
</span><br>
<span class="quotelev2">&gt;&gt; (version 1.2.8 doesn't seem to exhibit this behavior). Essentially  
</span><br>
<span class="quotelev2">&gt;&gt; when I start jobs from the cluster front-end node using mpirun,  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun sits idle for up to a minute and a half (for 30 nodes)  
</span><br>
<span class="quotelev2">&gt;&gt; before running the command I've given it. Running the same command  
</span><br>
<span class="quotelev2">&gt;&gt; on any other node in the cluster returns in a fraction of a second.  
</span><br>
<span class="quotelev2">&gt;&gt; Upon further research it appears its an issue with the way orted on  
</span><br>
<span class="quotelev2">&gt;&gt; the compute nodes are attempting to talk back to the front-end  
</span><br>
<span class="quotelev2">&gt;&gt; node. When I launch mpirun from the front-end node this is the  
</span><br>
<span class="quotelev2">&gt;&gt; process it spawns on the compute node (public ip scrambled for  
</span><br>
<span class="quotelev2">&gt;&gt; security purposes)-
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orted --daemonize -mca ess env -mca orte_ess_jobid 1816657920 -mca  
</span><br>
<span class="quotelev2">&gt;&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri  
</span><br>
<span class="quotelev2">&gt;&gt; 1816657920.0;tcp://130.X.X.X:56866;tcp://172.40.10.1:56866;tcp:// 
</span><br>
<span class="quotelev2">&gt;&gt; 172.20.10.1:56866
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Throwing in some firewall debugging rules indicate that the compute  
</span><br>
<span class="quotelev2">&gt;&gt; nodes were trying to talk back to mpirun on the front-end node over  
</span><br>
<span class="quotelev2">&gt;&gt; the front-end node's public ip. Based on this, and looking at the  
</span><br>
<span class="quotelev2">&gt;&gt; arguments passed above it seemed as though the public ip of the  
</span><br>
<span class="quotelev2">&gt;&gt; front end node was being tried before any its private IPs, and the  
</span><br>
<span class="quotelev2">&gt;&gt; delay I was seeing was orted waiting for the connection to the  
</span><br>
<span class="quotelev2">&gt;&gt; front-end node's public ip to timeout before it tried it's cluster- 
</span><br>
<span class="quotelev2">&gt;&gt; facing ip and the connection succeeded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was able to work around this by specifying &quot;--mca  
</span><br>
<span class="quotelev2">&gt;&gt; oob_tcp_if_include bond0,eth0&quot; to mpirun (the front-end node has 2  
</span><br>
<span class="quotelev2">&gt;&gt; bonded nics as its cluster facing interface). When I provided that  
</span><br>
<span class="quotelev2">&gt;&gt; argument the previously experienced delay disappeared. I could  
</span><br>
<span class="quotelev2">&gt;&gt; easily put that into openmpi-mca-params.conf and be done with the  
</span><br>
<span class="quotelev2">&gt;&gt; problem but I would like to know why openmpi chose to use the  
</span><br>
<span class="quotelev2">&gt;&gt; public ip of the node before it's internal IP and if this is  
</span><br>
<span class="quotelev2">&gt;&gt; expected behavior. I suspect that it may not be.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Aaron
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11186.php">Stefan Kuhne: "Re: [OMPI users] OFED-1.5rc1 with OpenMPI and IB"</a>
<li><strong>Previous message:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<!-- nextthread="start" -->
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
