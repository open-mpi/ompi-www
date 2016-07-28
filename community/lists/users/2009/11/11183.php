<?
$subject_val = "[OMPI users] oob mca question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 21:35:10 2009" -->
<!-- isoreceived="20091113023510" -->
<!-- sent="Thu, 12 Nov 2009 21:35:04 -0500" -->
<!-- isosent="20091113023504" -->
<!-- name="Aaron Knister" -->
<!-- email="aaron.knister_at_[hidden]" -->
<!-- subject="[OMPI users] oob mca question" -->
<!-- id="F70720F3-4E6E-486A-9387-5F97781FF7D4_at_gmail.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] oob mca question<br>
<strong>From:</strong> Aaron Knister (<em>aaron.knister_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-12 21:35:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>Previous message:</strong> <a href="11182.php">Jeff Squyres: "[OMPI users] Come see us at SC09!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>Reply:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear List,
<br>
<p>I'm having a really weird issue with openmpi - version 1.3.3 (version  
<br>
1.2.8 doesn't seem to exhibit this behavior). Essentially when I start  
<br>
jobs from the cluster front-end node using mpirun, mpirun sits idle  
<br>
for up to a minute and a half (for 30 nodes) before running the  
<br>
command I've given it. Running the same command on any other node in  
<br>
the cluster returns in a fraction of a second. Upon further research  
<br>
it appears its an issue with the way orted on the compute nodes are  
<br>
attempting to talk back to the front-end node. When I launch mpirun  
<br>
from the front-end node this is the process it spawns on the compute  
<br>
node (public ip scrambled for security purposes)-
<br>
<p>orted --daemonize -mca ess env -mca orte_ess_jobid 1816657920 -mca  
<br>
orte_ess_vpid 1 -mca orte_ess_num_procs 3 --hnp-uri 1816657920.0;tcp:// 
<br>
130.X.X.X:56866;tcp://172.40.10.1:56866;tcp://172.20.10.1:56866
<br>
<p>Throwing in some firewall debugging rules indicate that the compute  
<br>
nodes were trying to talk back to mpirun on the front-end node over  
<br>
the front-end node's public ip. Based on this, and looking at the  
<br>
arguments passed above it seemed as though the public ip of the front  
<br>
end node was being tried before any its private IPs, and the delay I  
<br>
was seeing was orted waiting for the connection to the front-end  
<br>
node's public ip to timeout before it tried it's cluster-facing ip and  
<br>
the connection succeeded.
<br>
<p>I was able to work around this by specifying &quot;--mca oob_tcp_if_include  
<br>
bond0,eth0&quot; to mpirun (the front-end node has 2 bonded nics as its  
<br>
cluster facing interface). When I provided that argument the  
<br>
previously experienced delay disappeared. I could easily put that into  
<br>
openmpi-mca-params.conf and be done with the problem but I would like  
<br>
to know why openmpi chose to use the public ip of the node before it's  
<br>
internal IP and if this is expected behavior. I suspect that it may  
<br>
not be.
<br>
<p>-Aaron
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>Previous message:</strong> <a href="11182.php">Jeff Squyres: "[OMPI users] Come see us at SC09!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
<li><strong>Reply:</strong> <a href="11184.php">Ralph Castain: "Re: [OMPI users] oob mca question"</a>
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
