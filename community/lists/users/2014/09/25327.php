<?
$subject_val = "Re: [OMPI users] launch openmpi programs in Docker containers";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 13 10:37:10 2014" -->
<!-- isoreceived="20140913143710" -->
<!-- sent="Sat, 13 Sep 2014 07:36:20 -0700" -->
<!-- isosent="20140913143620" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] launch openmpi programs in Docker containers" -->
<!-- id="FC8BD76A-CB2A-424B-9DEB-0B11AD2118B6_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="B5F1F0E8-9F1E-4347-BD07-792A1DF3DAA9_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-13 10:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25328.php">Maxime Boissonneault: "Re: [OMPI users] about using mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI:
<br>
<p><span class="quotelev1">&gt; From: &lt;Mcclelland&gt;, Benjamin M &lt;benjamin.m.mcclelland_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Thursday, September 11, 2014 at 3:31 PM
</span><br>
<span class="quotelev1">&gt; To: &quot;Ralph H Castain (Intel)&quot; &lt;ralph.h.castain_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like there is a docker container out there already with openmpi:
</span><br>
<span class="quotelev1">&gt; <a href="https://registry.hub.docker.com/search?q=openmpi">https://registry.hub.docker.com/search?q=openmpi</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven&#146;t tested it to see whats in there, but the guys on the ompi mailing list might want to check that out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Ben
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>On Sep 9, 2014, at 3:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; If you assign unique IP addresses to each container, you can then create a hostfile that contains the IP addresses. Feed that to mpirun and it will work just fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you really want to do it under slurm, then slurm is going to need the list of those IP addresses anyway. We read the slurm allocation and execute against those addresses, so things should just work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2014, at 2:04 AM, Adrien Saladin &lt;adrien.saladin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone tried to run MPI-aware programs inside Docker.io containers?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are trying to setup an HPC cluster with slurm and Docker as main
</span><br>
<span class="quotelev2">&gt;&gt; components. While running simple programs looks doable, we do not
</span><br>
<span class="quotelev2">&gt;&gt; really know what are the required steps to run open-MPI programs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Adrien
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25296.php">http://www.open-mpi.org/community/lists/users/2014/09/25296.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25328.php">Maxime Boissonneault: "Re: [OMPI users] about using mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="25326.php">etcamargo: "[OMPI users] about using mpi-thread-multiple"</a>
<li><strong>In reply to:</strong> <a href="25301.php">Ralph Castain: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25330.php">Adrien Saladin: "Re: [OMPI users] launch openmpi programs in Docker containers"</a>
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
