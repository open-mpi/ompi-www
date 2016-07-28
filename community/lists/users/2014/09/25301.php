<?
$subject_val = "Re: [OMPI users] launch openmpi programs in Docker containers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 18:54:42 2014" -->
<!-- isoreceived="20140909225442" -->
<!-- sent="Tue, 9 Sep 2014 15:54:06 -0700" -->
<!-- isosent="20140909225406" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launch openmpi programs in Docker containers" -->
<!-- id="B5F1F0E8-9F1E-4347-BD07-792A1DF3DAA9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJRwGG2kenmiecpvWAC-HoMJFYAB+6hxyzCy2Q=LuMCkyvQF1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] launch openmpi programs in Docker containers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 18:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="25296.php">Adrien Saladin: "[OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Reply:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Reply:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you assign unique IP addresses to each container, you can then create a hostfile that contains the IP addresses. Feed that to mpirun and it will work just fine.
<br>
<p>If you really want to do it under slurm, then slurm is going to need the list of those IP addresses anyway. We read the slurm allocation and execute against those addresses, so things should just work.
<br>
<p><p>On Sep 9, 2014, at 2:04 AM, Adrien Saladin &lt;adrien.saladin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone tried to run MPI-aware programs inside Docker.io containers?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are trying to setup an HPC cluster with slurm and Docker as main
</span><br>
<span class="quotelev1">&gt; components. While running simple programs looks doable, we do not
</span><br>
<span class="quotelev1">&gt; really know what are the required steps to run open-MPI programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Adrien
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25296.php">http://www.open-mpi.org/community/lists/users/2014/09/25296.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25302.php">Muhammad Ansar Javed: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25300.php">George Bosilca: "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead of InfiniBand"</a>
<li><strong>In reply to:</strong> <a href="25296.php">Adrien Saladin: "[OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Reply:</strong> <a href="25327.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<li><strong>Reply:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
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
