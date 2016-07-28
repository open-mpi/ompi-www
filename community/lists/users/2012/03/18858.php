<?
$subject_val = "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 10:42:33 2012" -->
<!-- isoreceived="20120328144233" -->
<!-- sent="Wed, 28 Mar 2012 16:42:21 +0200" -->
<!-- isosent="20120328144221" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster" -->
<!-- id="4B5385B9-A212-4F20-A672-DD8EF43AA74A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL105-W16049C996AFED277A0E4C39D4B0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 10:42:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18857.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18857.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 28.03.2012 um 16:30 schrieb Hameed Alzahrani:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I mean the node that I run mpirun command from. I use condor as a scheduler but I need to benchmark the cluster either from condor or directly from open MPI.
</span><br>
<p>I can't say anything regarding the Condor integration of Open MPI, but starting it directly by mpirun and supplying a valid number of ranks and hostfile should start some processes on other machines as requested. Can you run a plain mpihello first and output rank and hostname? Do you have ssh access to all the machines in questions? You have a shared home directory with the applications?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; when I ran mpirun from a machine and checking the memory status for the three machines that I have it appear that the memory usage increased just in the same machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Wed, 28 Mar 2012 15:12:17 +0200
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am 27.03.2012 um 23:46 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When I run any parallel job I get the answer just from the submitting node
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; what do you mean by submitting node: you use a queuing system - which one?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; even when I tried to benchmark the cluster using LINPACK but it look like the job just working on the submitting node is there a way to make openMPI send the job equally to all the nodes depending on the number of processor in the current mode even if I specify that the job should use 8 processor it look like openMPI use the submitting node 4 processors instead of using the other processors. I tried also --host but it does not work correctly in benchmarking the cluster so does any one use openMPI in benchmarking a cluster or does any one knows how to make openMPI divids the parallel job equally to every processor on the cluster.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards, 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18857.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18857.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18859.php">Hameed Alzahrani: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
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
