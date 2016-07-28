<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 19:18:34 2014" -->
<!-- isoreceived="20141021231834" -->
<!-- sent="Tue, 21 Oct 2014 19:18:22 -0400" -->
<!-- isosent="20141021231822" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="5446E9BE.6000002_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5446DFD7.2080601_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 19:18:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bill
<br>
<p>Maybe you're missing these settings in /etc/modprobe.d/mlx4_core.conf ?
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 10/21/2014 06:36 PM, Bill Broadley wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've setup several clusters over the years with OpenMPI.  I often get the below
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     WARNING: It appears that your OpenFabrics subsystem is configured to only
</span><br>
<span class="quotelev1">&gt;     allow registering part of your physical memory.  This can cause MPI jobs to
</span><br>
<span class="quotelev1">&gt;     run with erratic performance, hang, and/or crash.
</span><br>
<span class="quotelev1">&gt;     ...
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Local host:              c2-31
</span><br>
<span class="quotelev1">&gt;       Registerable memory:     32768 MiB
</span><br>
<span class="quotelev1">&gt;       Total memory:            64398 MiB
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm well aware of the normal fixes, and have implemented them in puppet to
</span><br>
<span class="quotelev1">&gt; ensure compute nodes get the changes.  To be paranoid I've implemented all the
</span><br>
<span class="quotelev1">&gt; changes, and they all worked under ubuntu 13.10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However with ubuntu 14.04 it seems like it's not working, thus the above message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As recommended by the faq's I've implemented:
</span><br>
<span class="quotelev1">&gt; 1) ulimit -l unlimited in /etc/profile.d/slurm.sh
</span><br>
<span class="quotelev1">&gt; 2) PropagateResourceLimitsExcept=MEMLOCK in slurm.conf
</span><br>
<span class="quotelev1">&gt; 3) UsePAM=1 in slurm.conf
</span><br>
<span class="quotelev1">&gt; 4) in /etc/security/limits.conf
</span><br>
<span class="quotelev1">&gt;     * hard memlock unlimited
</span><br>
<span class="quotelev1">&gt;     * soft memlock unlimited
</span><br>
<span class="quotelev1">&gt;     * hard stack unlimited
</span><br>
<span class="quotelev1">&gt;     * soft stack unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My changes seem to be working, of I submit this to slurm:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash -l
</span><br>
<span class="quotelev1">&gt; ulimit -l
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; mpirun bash -c ulimit -l
</span><br>
<span class="quotelev1">&gt; mpirun ./relay 1 131072
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get:
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     c2-31
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     unlimited
</span><br>
<span class="quotelev1">&gt;     &lt;above error message only 32GB of Registerable memory&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;output of mpirun relay&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some new kernel parameter, ofed parameter, or similar that controls
</span><br>
<span class="quotelev1">&gt; locked pages now?  The kernel is 3.13.0-36 and the libopenmpi-dev package is 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the ulimit -l is getting to both the slurm launched script and also to the
</span><br>
<span class="quotelev1">&gt; mpirun launched binaries I'm pretty puzzled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions?
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25544.php">http://www.open-mpi.org/community/lists/users/2014/10/25544.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<li><strong>In reply to:</strong> <a href="25544.php">Bill Broadley: "[OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25546.php">Bill Broadley: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
