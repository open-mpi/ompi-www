<?
$subject_val = "Re: [OMPI users] error no=110 (Connection timeout)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 16:59:06 2009" -->
<!-- isoreceived="20090506205906" -->
<!-- sent="Wed, 6 May 2009 16:59:01 -0400" -->
<!-- isosent="20090506205901" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error no=110 (Connection timeout)" -->
<!-- id="7C6FFBA4-1509-48BB-AAA1-3FF85044CC9C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46542.24762.qm_at_web95410.mail.in2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] error no=110 (Connection timeout)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 16:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9246.php">Rolf vandeVaarrt: "Re: [OMPI users] mpiexec seems to be resolving names on server	insteadof each node"</a>
<li><strong>Previous message:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9095.php">Rangesh Gupta: "[OMPI users] error no=110 (Connection timeout)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; this mail slipped by me in my inbox.
<br>
<p><p><p>On Apr 26, 2009, at 11:50 PM, Rangesh Gupta wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I m facing problem while running Openfoam1.5  the executable is  
</span><br>
<span class="quotelev1">&gt; sonicTurbFoam with the help of openmpi it hang after some time,  
</span><br>
<span class="quotelev1">&gt; every time it hang at different place. The Mpi command is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mpirun --mca btl_openib_if_include ib0 -mca btl_tcp_if_exclude  
</span><br>
<span class="quotelev1">&gt; lo,eth0,eth1 --mca btl_openib_ib_timeout 40 -n $NO_OF_PROCESS - 
</span><br>
<span class="quotelev1">&gt; machinefile $MYHOSTS $1 -parallel
</span><br>
<p>FWIW, if you're submitting via slurm, the -machinefile and -n options  
<br>
shouldn't be necessary -- it should get those directly from SLURM.
<br>
<p><span class="quotelev1">&gt; We are using 64 processor on 8 nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I m submitting it with the help of lsf scheduler and internally it  
</span><br>
<span class="quotelev1">&gt; usage SLURM as a resource manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Error :
</span><br>
<span class="quotelev1">&gt; [n112][0,1,41][btl_tcp_frag.c:
</span><br>
<span class="quotelev1">&gt; 202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with  
</span><br>
<span class="quotelev1">&gt; errno=110
</span><br>
<span class="quotelev1">&gt; [n112][0,1,43][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv]  
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_frag_recv: readv failed with errno=110
</span><br>
<p>errno=110 is timeout on Linux.  Do you happen to have firewalling  
<br>
enabled on your compute nodes?  OMPI needs to be able to use random  
<br>
TCP ports to connect between all of the processes in an MPI job.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9246.php">Rolf vandeVaarrt: "Re: [OMPI users] mpiexec seems to be resolving names on server	insteadof each node"</a>
<li><strong>Previous message:</strong> <a href="9244.php">Jeff Squyres: "Re: [OMPI users] mpiexec seems to be resolving names on server insteadof each node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9095.php">Rangesh Gupta: "[OMPI users] error no=110 (Connection timeout)"</a>
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
