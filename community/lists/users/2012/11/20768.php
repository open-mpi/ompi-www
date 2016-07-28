<?
$subject_val = "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 26 11:07:48 2012" -->
<!-- isoreceived="20121126160748" -->
<!-- sent="Mon, 26 Nov 2012 08:07:41 -0800" -->
<!-- isosent="20121126160741" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes" -->
<!-- id="7A2C5F35-31FD-41B5-A129-BC29F62B68FA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50B3301C.5090701_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-26 11:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version of OMPI are you using?
<br>
<p>On Nov 26, 2012, at 1:02 AM, George Markomanolis &lt;george_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Initially I would like an advice of how to identify the maximum number of MPI processes that can be executed on a node with oversubscribing. When I try to execute an application with 4096 MPI processes on a 24-cores node with 48GB of memory, I have an error &quot;Unknown error: 1&quot; while the memory is not even at the half. I can execute the same application with 2048 MPI processes in less than one minute. I have checked linux settings about maximum number of processes and it is much bigger than 4096.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another more generic question, is about discovering nodes with faulty memory. Is there any way to identify nodes with faulty memory? I found accidentally that a node with exact the same hardware couldn't execute an MPI application when it was using more than 12GB of ram while the second one could use all of the 48GB of memory. If I have 500+ nodes is difficult to check all of them and I am not familiar with any efficient solution. Initially I thought about memtester but it takes a lot of time. I know that this does not apply exactly on this mailing list but I thought that maybe an OpenMPI user knows something about.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; George Markomanolis
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
<li><strong>Next message:</strong> <a href="20769.php">Gus Correa: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>Previous message:</strong> <a href="20767.php">Diego Avesani: "Re: [OMPI users] configuration openMPI problem"</a>
<li><strong>In reply to:</strong> <a href="20764.php">George Markomanolis: "[OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
<li><strong>Reply:</strong> <a href="20775.php">George Markomanolis: "Re: [OMPI users] Maximum number of MPI processes on a node + discovering faulty nodes"</a>
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
