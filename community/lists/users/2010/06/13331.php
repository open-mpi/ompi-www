<?
$subject_val = "Re: [OMPI users] mpirun jobs only one single node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 15 09:21:14 2010" -->
<!-- isoreceived="20100615132114" -->
<!-- sent="Tue, 15 Jun 2010 14:20:49 +0100" -->
<!-- isosent="20100615132049" -->
<!-- name="Govind Songara" -->
<!-- email="govind.songara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun jobs only one single node" -->
<!-- id="AANLkTinLxGeC-lekG3zvQ3SEWwoW611GqBWrFJBD2-aG_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D2D69297-C9C2-47AB-A797-98CBBD39A480_at_open-mpi.org" -->
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
<strong>From:</strong> Govind Songara (<em>govind.songara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-15 09:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added the $PBS_NODEFILE in the script in my last email below.
<br>
It   show only one node here is the output
<br>
===============
<br>
node47.beowulf.cluster node47.beowulf.cluster node47.beowulf.cluster
<br>
node47.beowulf.cluster
<br>
This job has allocated 4 nodes
<br>
Hello World! from process 1 out of 4 on node47.beowulf.cluster
<br>
Hello World! from process 2 out of 4 on node47.beowulf.cluster
<br>
Hello World! from process 3 out of 4 on node47.beowulf.cluster
<br>
Hello World! from process 0 out of 4 on node47.beowulf.cluster
<br>
===============
<br>
<p>On 15 June 2010 13:41, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Look at the contents of $PBS_NODEFILE and see how many nodes it contains.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 15, 2010, at 3:56 AM, Govind Songara wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have using openmpi build with tm support
</span><br>
<span class="quotelev1">&gt; When i run the job requesting for two nodes it run only on single node.
</span><br>
<span class="quotelev1">&gt; Here is my script.
</span><br>
<span class="quotelev2">&gt; &gt;cat mpipbs-script.sh
</span><br>
<span class="quotelev1">&gt; #PBS -N mpipbs-script
</span><br>
<span class="quotelev1">&gt; #PBS -q short
</span><br>
<span class="quotelev1">&gt; ### Number of nodes: resources per node
</span><br>
<span class="quotelev1">&gt; ### (4 cores/node, so ppn=4 is ALL resources on the node)
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; echo `cat $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; $PBS_NODEFILE`
</span><br>
<span class="quotelev1">&gt; echo This job has allocated $NPROCS nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       /opt/openmpi-1.4.2/bin/mpirun /scratch0/gsongara/mpitest/hello
</span><br>
<p><p>torque config
<br>
set queue short resources_max.nodes = 4
<br>
set queue short resources_default.nodes = 1
<br>
set server resources_default.neednodes = 1
<br>
set server resources_default.nodect = 1
<br>
set server resources_default.nodes = 1
<br>
<p>Can someone please advise if i missing anything here.
<br>
<p>Regards
<br>
Govind
<br>
<p><span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Previous message:</strong> <a href="13330.php">Reuti: "Re: [OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>In reply to:</strong> <a href="13328.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
<li><strong>Reply:</strong> <a href="13332.php">Ralph Castain: "Re: [OMPI users] mpirun jobs only one single node"</a>
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
