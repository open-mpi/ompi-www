<?
$subject_val = "Re: [OMPI users] mpirun jobs only one single node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 09:49:46 2010" -->
<!-- isoreceived="20100615134946" -->
<!-- sent="Tue, 15 Jun 2010 07:49:38 -0600" -->
<!-- isosent="20100615134938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun jobs only one single node" -->
<!-- id="B17A3B51-194F-4897-B3EA-AD660BACB78A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTinLxGeC-lekG3zvQ3SEWwoW611GqBWrFJBD2-aG_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun jobs only one single node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 09:49:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13333.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Building on SPARC-Enterprise-T5120"</a>
<li><strong>Previous message:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what I suspected. I suggest you talk to your sys admin about how PBS is configured - looks like you are only getting one node allocated despite your request for two. Probably something in the config needs adjusting.
<br>
<p>On Jun 15, 2010, at 7:20 AM, Govind Songara wrote:
<br>
<p><span class="quotelev1">&gt; I added the $PBS_NODEFILE in the script in my last email below.
</span><br>
<span class="quotelev1">&gt; It   show only one node here is the output 
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt; node47.beowulf.cluster node47.beowulf.cluster node47.beowulf.cluster node47.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; This job has allocated 4 nodes
</span><br>
<span class="quotelev1">&gt; Hello World! from process 1 out of 4 on node47.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 2 out of 4 on node47.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 3 out of 4 on node47.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; Hello World! from process 0 out of 4 on node47.beowulf.cluster
</span><br>
<span class="quotelev1">&gt; ===============
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 15 June 2010 13:41, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Look at the contents of $PBS_NODEFILE and see how many nodes it contains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 15, 2010, at 3:56 AM, Govind Songara wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have using openmpi build with tm support
</span><br>
<span class="quotelev2">&gt;&gt; When i run the job requesting for two nodes it run only on single node.
</span><br>
<span class="quotelev2">&gt;&gt; Here is my script.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;cat mpipbs-script.sh
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -N mpipbs-script
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -q short
</span><br>
<span class="quotelev2">&gt;&gt; ### Number of nodes: resources per node
</span><br>
<span class="quotelev2">&gt;&gt; ### (4 cores/node, so ppn=4 is ALL resources on the node)
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev2">&gt;&gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev2">&gt;&gt; echo This job has allocated $NPROCS nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       /opt/openmpi-1.4.2/bin/mpirun /scratch0/gsongara/mpitest/hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; torque config
</span><br>
<span class="quotelev1">&gt; set queue short resources_max.nodes = 4
</span><br>
<span class="quotelev1">&gt; set queue short resources_default.nodes = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.neednodes = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.nodect = 1
</span><br>
<span class="quotelev1">&gt; set server resources_default.nodes = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please advise if i missing anything here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Govind
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13332/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13333.php">Kevin.Buckley_at_[hidden]: "[OMPI users] Building on SPARC-Enterprise-T5120"</a>
<li><strong>Previous message:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>In reply to:</strong> <a href="13331.php">Govind Songara: "Re: [OMPI users] mpirun jobs only one single node"</a>
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
