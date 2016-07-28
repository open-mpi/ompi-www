<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 24 10:03:35 2007" -->
<!-- isoreceived="20070124150335" -->
<!-- sent="Wed, 24 Jan 2007 10:03:25 -0500" -->
<!-- isosent="20070124150325" -->
<!-- name="Pak Lui" -->
<!-- email="Pak.Lui_at_[hidden]" -->
<!-- subject="Re: [OMPI users] nodes are oversubscribed in 1.1.1" -->
<!-- id="45B7753D.4070504_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B94B5850-06A7-47DA-A526-84731E108F43_at_galitz.org" -->
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
<strong>From:</strong> Pak Lui (<em>Pak.Lui_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-24 10:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2531.php">Tim Campbell: "[OMPI users] rsh or ssh"</a>
<li><strong>Previous message:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Geoff Galitz wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the following system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.1.1
</span><br>
<span class="quotelev1">&gt; SGE 6.0 (with tight integration)
</span><br>
<span class="quotelev1">&gt; Scientific Linux 4.3
</span><br>
<span class="quotelev1">&gt; Dual Dual-Core Opterons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI jobs are oversubscribing to the nodes.  No matter where jobs are  
</span><br>
<span class="quotelev1">&gt; launched by the scheduler, they always stack up on the first node  
</span><br>
<span class="quotelev1">&gt; (node00) and continue to stack even though the system load exceeds 6  
</span><br>
<span class="quotelev1">&gt; (on a 4 processor box).  Eeach node is defined as 4 slots with 4 max  
</span><br>
<span class="quotelev1">&gt; slots.  The MPI jobs launch via &quot;mpirun -np (some-number-of- 
</span><br>
<span class="quotelev1">&gt; processors)&quot; from within the scheduler.
</span><br>
<p>Hi Geoff,
<br>
<p>I think we first start having SGE support in 1.2, not in 1.1.1. Unless 
<br>
you did some modification on your own to include the gridengine ras/pls 
<br>
modules from v1.2, you probably are not using the SGE tight integration. 
<br>
So even though you start mpirun in the SGE parallel environment, ORTE 
<br>
does not have the gridengine modules for allocating and launching the 
<br>
jobs, so that could be why all processes are launched on the same node. 
<br>
(because there's no node list available from gridengine and it defaults 
<br>
to single node)
<br>
<p>On a related note, there is a way for SGE to allocate and assign slots 
<br>
for launching tasks. It is done by setting the allocation rule in the 
<br>
parallel environment (PE). If all of the slots are allocated on the same 
<br>
node, it sounds like the allocation rule has been set to $fill_up. Maybe 
<br>
you can try with $round_robin instead?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems to me that MPI is not detecting that the nodes are  
</span><br>
<span class="quotelev1">&gt; overloaded and that due to the way the job slots are defined and how  
</span><br>
<span class="quotelev1">&gt; mpirun is being called.  If I read the documentation correctly, a  
</span><br>
<span class="quotelev1">&gt; single mpirun run consumes one job slot no matter the number of  
</span><br>
<span class="quotelev1">&gt; processes which are launched.  We can chagne the number of job slots,  
</span><br>
<span class="quotelev1">&gt; but then we expect to waste processors since only one mpirun job will  
</span><br>
<span class="quotelev1">&gt; run on any node, even if the job is only a two processor job.
</span><br>
<p>As for oversubscription, I remember we start having that 
<br>
-nooversubscribe option in v1.2 so if you want to limit ORTE from 
<br>
oversubscribing because by default oversubscription is allowed.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone enlighten me?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -geoff
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2531.php">Tim Campbell: "[OMPI users] rsh or ssh"</a>
<li><strong>Previous message:</strong> <a href="2529.php">Ralph Castain: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>In reply to:</strong> <a href="2528.php">Geoff Galitz: "[OMPI users] nodes are oversubscribed in 1.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2534.php">Olli-Pekka Lehto: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
<li><strong>Reply:</strong> <a href="2535.php">Geoff Galitz: "Re: [OMPI users] nodes are oversubscribed in 1.1.1"</a>
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
