<?
$subject_val = "Re: [OMPI users] oob mca question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 21:54:35 2009" -->
<!-- isoreceived="20091113025435" -->
<!-- sent="Thu, 12 Nov 2009 19:54:26 -0700" -->
<!-- isosent="20091113025426" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oob mca question" -->
<!-- id="88889343-41DA-4B98-90F6-45762F7EA913_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F70720F3-4E6E-486A-9387-5F97781FF7D4_at_gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 21:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>Previous message:</strong> <a href="11183.php">Aaron Knister: "[OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11183.php">Aaron Knister: "[OMPI users] oob mca question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>Reply:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That is indeed the expected behavior, and your solution is the correct  
<br>
one.
<br>
<p>The orted has no way of knowing which interface mpirun can be reached  
<br>
on, so it has no choice but to work its way through the available  
<br>
ones. Because of the ordering in the way the OS reports the  
<br>
interfaces, it is picking up the public one first - so that is the  
<br>
first one used.
<br>
<p>Telling it the right one to use is the only solution.
<br>
<p>On Nov 12, 2009, at 7:35 PM, Aaron Knister wrote:
<br>
<p><span class="quotelev1">&gt; Dear List,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a really weird issue with openmpi - version 1.3.3  
</span><br>
<span class="quotelev1">&gt; (version 1.2.8 doesn't seem to exhibit this behavior). Essentially  
</span><br>
<span class="quotelev1">&gt; when I start jobs from the cluster front-end node using mpirun,  
</span><br>
<span class="quotelev1">&gt; mpirun sits idle for up to a minute and a half (for 30 nodes) before  
</span><br>
<span class="quotelev1">&gt; running the command I've given it. Running the same command on any  
</span><br>
<span class="quotelev1">&gt; other node in the cluster returns in a fraction of a second. Upon  
</span><br>
<span class="quotelev1">&gt; further research it appears its an issue with the way orted on the  
</span><br>
<span class="quotelev1">&gt; compute nodes are attempting to talk back to the front-end node.  
</span><br>
<span class="quotelev1">&gt; When I launch mpirun from the front-end node this is the process it  
</span><br>
<span class="quotelev1">&gt; spawns on the compute node (public ip scrambled for security  
</span><br>
<span class="quotelev1">&gt; purposes)-
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orted --daemonize -mca ess env -mca orte_ess_jobid 1816657920 -mca  
</span><br>
<span class="quotelev1">&gt; orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri  
</span><br>
<span class="quotelev1">&gt; 1816657920.0;tcp://130.X.X.X:56866;tcp://172.40.10.1:56866;tcp:// 
</span><br>
<span class="quotelev1">&gt; 172.20.10.1:56866
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Throwing in some firewall debugging rules indicate that the compute  
</span><br>
<span class="quotelev1">&gt; nodes were trying to talk back to mpirun on the front-end node over  
</span><br>
<span class="quotelev1">&gt; the front-end node's public ip. Based on this, and looking at the  
</span><br>
<span class="quotelev1">&gt; arguments passed above it seemed as though the public ip of the  
</span><br>
<span class="quotelev1">&gt; front end node was being tried before any its private IPs, and the  
</span><br>
<span class="quotelev1">&gt; delay I was seeing was orted waiting for the connection to the front- 
</span><br>
<span class="quotelev1">&gt; end node's public ip to timeout before it tried it's cluster-facing  
</span><br>
<span class="quotelev1">&gt; ip and the connection succeeded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was able to work around this by specifying &quot;--mca  
</span><br>
<span class="quotelev1">&gt; oob_tcp_if_include bond0,eth0&quot; to mpirun (the front-end node has 2  
</span><br>
<span class="quotelev1">&gt; bonded nics as its cluster facing interface). When I provided that  
</span><br>
<span class="quotelev1">&gt; argument the previously experienced delay disappeared. I could  
</span><br>
<span class="quotelev1">&gt; easily put that into openmpi-mca-params.conf and be done with the  
</span><br>
<span class="quotelev1">&gt; problem but I would like to know why openmpi chose to use the public  
</span><br>
<span class="quotelev1">&gt; ip of the node before it's internal IP and if this is expected  
</span><br>
<span class="quotelev1">&gt; behavior. I suspect that it may not be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Aaron
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
<li><strong>Next message:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>Previous message:</strong> <a href="11183.php">Aaron Knister: "[OMPI users] oob mca question"</a>
<li><strong>In reply to:</strong> <a href="11183.php">Aaron Knister: "[OMPI users] oob mca question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
<li><strong>Reply:</strong> <a href="11185.php">Aaron Knister: "Re: [OMPI users] oob mca question"</a>
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
