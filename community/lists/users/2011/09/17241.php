<?
$subject_val = "Re: [OMPI users] mpiexec option for node failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 12 20:43:55 2011" -->
<!-- isoreceived="20110913004355" -->
<!-- sent="Mon, 12 Sep 2011 18:43:48 -0600" -->
<!-- isosent="20110913004348" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiexec option for node failure" -->
<!-- id="806F77DA-7A0D-4B08-BC1D-CFD7658C71F6_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E6E9B52.7050709_at_hw.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiexec option for node failure<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-12 20:43:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We don't have anything similar in OMPI. There are fault tolerance modes, but not like the one you describe.
<br>
<p>On Sep 12, 2011, at 5:52 PM, Rob Stewart wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have implemented a simple fault tolerant ping pong C program with MPI, here: <a href="http://pastebin.com/7mtmQH2q">http://pastebin.com/7mtmQH2q</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPICH2 offers a parameter with mpiexec:
</span><br>
<span class="quotelev1">&gt; $ mpiexec -disable-auto-cleanup
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .. as described here: <a href="http://trac.mcs.anl.gov/projects/mpich2/ticket/1421">http://trac.mcs.anl.gov/projects/mpich2/ticket/1421</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is fault tolerant in the respect that, when I ssh to one of the nodes in the hosts file, and kill the relevant process, the MPI job is not terminated. Simply, the ping will not prompt a pong from the dead node, but the ping-pong runs forever on the remaining live nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is such an feature available for openMPI, either via mpiexec or some other means?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Rob Stewart
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
<li><strong>Next message:</strong> <a href="17242.php">Steve Jones: "[OMPI users] IO issue with OpenMPI 1.4.1 and earlier versions"</a>
<li><strong>Previous message:</strong> <a href="17240.php">Ralph Castain: "Re: [OMPI users] Question on using rsh"</a>
<li><strong>In reply to:</strong> <a href="17239.php">Rob Stewart: "[OMPI users] mpiexec option for node failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17246.php">Reuti: "Re: [OMPI users] mpiexec option for node failure"</a>
<li><strong>Reply:</strong> <a href="17313.php">George Bosilca: "Re: [OMPI users] mpiexec option for node failure"</a>
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
