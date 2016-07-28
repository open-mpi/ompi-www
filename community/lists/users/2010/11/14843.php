<?
$subject_val = "[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 20 11:31:39 2010" -->
<!-- isoreceived="20101120163139" -->
<!-- sent="Sat, 20 Nov 2010 17:31:22 +0100" -->
<!-- isosent="20101120163122" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="grodid_at_[hidden]" -->
<!-- subject="[OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)" -->
<!-- id="alpine.LRH.2.00.1011201730330.7327_at_lxplus234.cern.ch" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)<br>
<strong>From:</strong> Gilbert Grosdidier (<em>grodid_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-20 11:31:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14842.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Reply:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bonjour,
<br>
<p>I am afraid I got a weird issue when running an OpenMPI job using OpenIB
<br>
on an SGI ICE cluster with 4096 cores (or larger), and the FAQ does not help.
<br>
<p>The OMPI version is 1.4.1, and it is running just fine with a smaller number of 
<br>
cores (up to 512).
<br>
<p>The error message is the following :
<br>
<p><p>--------------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to initialize while trying to
<br>
allocate some locked memory.  This typically can indicate that the
<br>
memlock limits are set too low.  For most HPC installations, the
<br>
memlock limits should be set to &quot;unlimited&quot;.  The failure occured
<br>
here:
<br>
<p>&nbsp;&nbsp;Local host:    r25i1n0
<br>
&nbsp;&nbsp;OMPI source:   btl_openib.c:169
<br>
&nbsp;&nbsp;Function:      ibv_create_cq()
<br>
&nbsp;&nbsp;Device:        mlx4_0
<br>
&nbsp;&nbsp;Memlock limit: unlimited
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.  This FAQ entry on the Open MPI web site may also be
<br>
helpful:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
--------------------------------------------------------------------------
<br>
<p>This is a rather usual message, from the FAQ, but you probably noticed
<br>
the 'unlimited' value for memlock, which should not lead to any trouble.
<br>
So, what's wrong there ?
<br>
<p>The ompi_info follows:
<br>
<p><p><p>I'm starting the application like this :
<br>
mpiexec -mca btl openib,sm,self -mca mpi_leave_pinned 1 -mca orte_tmpdir_base 
<br>
/home/grodid/pbs.776824.service0.x8z/tmp My_App
<br>
<p>I checked that indeed the memlock limt is just fine on the nodes thru this 
<br>
command:
<br>
<p>mpiexec -mca btl openib,sm,self -mca mpi_leave_pinned 1 -mca orte_tmpdir_base 
<br>
${PBS_JOBDIR}/tmp /usr/bin/tcsh -c limit
<br>
which provides this output:
<br>
<p>cputime      unlimited
<br>
filesize     unlimited
<br>
datasize     unlimited
<br>
stacksize    unlimited
<br>
coredumpsize 0 kbytes
<br>
memoryuse    31457280 kbytes
<br>
vmemoryuse   unlimited
<br>
descriptors  16384
<br>
memorylocked unlimited
<br>
maxproc      303104
<br>
<p>The OS of the working nodes is :
<br>
<span class="quotelev1">&gt; cat /etc/SuSE-release
</span><br>
SUSE Linux Enterprise Server 10 (x86_64)
<br>
VERSION = 10
<br>
PATCHLEVEL = 2
<br>
<p><p>What's wrong then ?
<br>
<p>Any help welcome,   Regards,    Gilbert.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14844.php">Tushar Andriyas: "Re: [OMPI users] Unable to find the following executable"</a>
<li><strong>Previous message:</strong> <a href="14842.php">Gus Correa: "Re: [OMPI users] sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
<li><strong>Reply:</strong> <a href="14847.php">John Hearns: "Re: [OMPI users] Trouble with Memlock when using OpenIB on an SGI ICE Cluster (fwd)"</a>
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
