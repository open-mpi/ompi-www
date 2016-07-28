<?
$subject_val = "Re: [OMPI users] launch openmpi programs in Docker containers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 10:35:24 2014" -->
<!-- isoreceived="20140915143524" -->
<!-- sent="Mon, 15 Sep 2014 07:34:30 -0700" -->
<!-- isosent="20140915143430" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launch openmpi programs in Docker containers" -->
<!-- id="7BC70445-1D26-4F85-BDED-8FA2F50FCF8D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJRwGG3yOKw_t_V11qu2txB23PX16B+5DoLwXO+G64LzSPYWRQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-09-15 10:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25334.php">Nick Papior Andersen: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
<li><strong>Previous message:</strong> <a href="25332.php">Ralph Castain: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
<li><strong>In reply to:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hopefully the link I provided in the second response will help.
<br>
<p>On Sep 15, 2014, at 6:53 AM, Adrien Saladin &lt;adrien.saladin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There will be some challenge to setup since docker containers are not
</span><br>
<span class="quotelev1">&gt; pre-loaded and currently containers IP are both private to hosts and
</span><br>
<span class="quotelev1">&gt; dynamic. But it's a start.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 10, 2014 at 12:54 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If you assign unique IP addresses to each container, you can then create a hostfile that contains the IP addresses. Feed that to mpirun and it will work just fine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you really want to do it under slurm, then slurm is going to need the list of those IP addresses anyway. We read the slurm allocation and execute against those addresses, so things should just work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2014, at 2:04 AM, Adrien Saladin &lt;adrien.saladin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone tried to run MPI-aware programs inside Docker.io containers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are trying to setup an HPC cluster with slurm and Docker as main
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components. While running simple programs looks doable, we do not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; really know what are the required steps to run open-MPI programs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Adrien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25296.php">http://www.open-mpi.org/community/lists/users/2014/09/25296.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25301.php">http://www.open-mpi.org/community/lists/users/2014/09/25301.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25330.php">http://www.open-mpi.org/community/lists/users/2014/09/25330.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25334.php">Nick Papior Andersen: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
<li><strong>Previous message:</strong> <a href="25332.php">Ralph Castain: "Re: [OMPI users] removed maffinity, paffinity in 1.7+"</a>
<li><strong>In reply to:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
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
