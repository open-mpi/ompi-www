<?
$subject_val = "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 28 10:30:54 2012" -->
<!-- isoreceived="20120328143054" -->
<!-- sent="Wed, 28 Mar 2012 15:30:49 +0100" -->
<!-- isosent="20120328143049" -->
<!-- name="Hameed Alzahrani" -->
<!-- email="ibn_aibaan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster" -->
<!-- id="COL105-W16049C996AFED277A0E4C39D4B0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2D13D12D-4F87-4726-8216-B0D6A5219924_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Hameed Alzahrani (<em>ibn_aibaan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-28 10:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I mean the node that I run mpirun command from. I use condor as a scheduler but I need to benchmark the cluster either from condor or directly from open MPI. when I ran mpirun from a machine and checking the memory status for the three machines that I have it appear that the memory usage increased just in the same machine.
<br>
<p>Regards,
<br>
<p><span class="quotelev1">&gt; From: reuti_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Wed, 28 Mar 2012 15:12:17 +0200
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Can not run a parallel job on all the nodes in the	cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 27.03.2012 um 23:46 schrieb Hameed Alzahrani:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When I run any parallel job I get the answer just from the submitting node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what do you mean by submitting node: you use a queuing system - which one?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; even when I tried to benchmark the cluster using LINPACK but it look like the job just working on the submitting node is there a way to make openMPI send the job equally to all the nodes depending on the number of processor in the current mode even if I specify that the job should use 8 processor it look like openMPI use the submitting node 4 processors instead of using the other processors. I tried also --host but it does not work correctly in benchmarking the cluster so does any one use openMPI in benchmarking a cluster or does any one knows how to make openMPI divids the parallel job equally to every processor on the cluster.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Regards, 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18857/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Previous message:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>In reply to:</strong> <a href="18856.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
<li><strong>Reply:</strong> <a href="18858.php">Reuti: "Re: [OMPI users] Can not run a parallel job on all the nodes in the cluster"</a>
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
