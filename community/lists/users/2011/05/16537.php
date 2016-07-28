<?
$subject_val = "Re: [OMPI users] Scheduling dynamically spawned processes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 13 08:41:38 2011" -->
<!-- isoreceived="20110513124138" -->
<!-- sent="Fri, 13 May 2011 06:41:28 -0600" -->
<!-- isosent="20110513124128" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Scheduling dynamically spawned processes" -->
<!-- id="3AB4CA4A-103D-44E9-9BA5-79C85E9B285A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTin_ATFAa3CDgd1FsLte0N66qB11Gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Scheduling dynamically spawned processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-13 08:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16538.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 12, 2011, at 9:53 PM, Rodrigo Silva Oliveira wrote:
<br>
<p><span class="quotelev1">&gt; Hi there.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm developing a distributed system with a communication layer based on Open MPI. As part of my project, I have to create a process scheduler. So I decided to use the MPI_Spawn function to dynamically create (it is an requirement of the system) the process across the cluster's nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there some way to specify how many copies of a process to spawn to each node? For instance, I want to spawn 5 copies of a mpi program to 3 nodes usin the scheme bellow:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 to host 1
</span><br>
<span class="quotelev1">&gt; 3 to host 2
</span><br>
<span class="quotelev1">&gt; 1 to host 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; obs.: I am using openmpi-1.5.3. The default policies provided by the ompi is not applicable to my problem because I will decide the scheme based on specific criteria.
</span><br>
<p>Use the &quot;host&quot; info key. You would specify your dynamic spawn as three apps, each running the same executable. It's the equivalent of
<br>
<p>mpirun -n 1 -host host1 app : -n 3 -host host2 app : -n 1 -host host3 app
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rodrigo Silva Oliveira
</span><br>
<span class="quotelev1">&gt; M.Sc. Student - Computer Science
</span><br>
<span class="quotelev1">&gt; Universidade Federal de Minas Gerais
</span><br>
<span class="quotelev1">&gt; www.dcc.ufmg.br/~rsilva
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16538.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16536.php">francoise.roch_at_[hidden]: "Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1"</a>
<li><strong>In reply to:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
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
