<?
$subject_val = "Re: [OMPI users] using rankfiles to control mixed mode programming";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 17 09:32:15 2010" -->
<!-- isoreceived="20100617133215" -->
<!-- sent="Thu, 17 Jun 2010 07:31:55 -0600" -->
<!-- isosent="20100617133155" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using rankfiles to control mixed mode programming" -->
<!-- id="35A42176-3C87-487D-881D-54E4B1B0118A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD38E9CA-5DD5-4BB0-A160-DF80F4340D0C_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] using rankfiles to control mixed mode programming<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-17 09:31:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>In reply to:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
IIRC, I added relative node syntax to the rankfile mapper a while back. You should then be able to specify the rank-&gt;node mapping by indicating that (e.g.) rank 0 -&gt; first node in file, instead of specifying the node by name.
<br>
<p><p>On Jun 16, 2010, at 2:21 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We use Torque and Moab as our resource manager, 
</span><br>
<span class="quotelev1">&gt; I have a user who has to mix programming models, threads and MPI, but not on all ranks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt; Rank 0 needs 4 cores
</span><br>
<span class="quotelev1">&gt; Rank 1 needs 4 cores
</span><br>
<span class="quotelev1">&gt; Ranks 2-5 need 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is no way to give this to Torque/Moab in a way that when using TM openMPI correctly starts the layout I need.
</span><br>
<span class="quotelev1">&gt; I found I can use a rankfile to do this,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat rankfile
</span><br>
<span class="quotelev1">&gt; rank 0=nyx0456 slot=0
</span><br>
<span class="quotelev1">&gt; rank 1=nyx0457 slot=0
</span><br>
<span class="quotelev1">&gt; rank 2=nyx0458 slot=0
</span><br>
<span class="quotelev1">&gt; rank 3=nyx0458 slot=1
</span><br>
<span class="quotelev1">&gt; rank 4=nyx0458 slot=2
</span><br>
<span class="quotelev1">&gt; rank 5=nyx0458 slot=3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; qsub -I -l nodes=4:ppn=4
</span><br>
<span class="quotelev1">&gt; [brockp_at_nyx0456 tmp]$ mpirun -np 6 -rf rankfile hostname | sort | uniq -c
</span><br>
<span class="quotelev1">&gt;      1 nyx0456.engin.umich.edu
</span><br>
<span class="quotelev1">&gt;      1 nyx0457.engin.umich.edu
</span><br>
<span class="quotelev1">&gt;      4 nyx0458.engin.umich.edu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (ignore the cpu count mismatch, I am not using all 16 cores in this example)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I could make a script to build this rankfile, I want to know if there is a better way to do this, 
</span><br>
<span class="quotelev1">&gt; Also we don't want to use affinity, as we don't know what 'cpus' the bath (pbs/moab) system gave us,  is the above rankfile going to do the right thing? That is the processes will float? Is there a way to tell if affinity is set? Or to say &quot;rank 0 goes to this host use any available cores&quot; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="13339.php">David Turner: "[OMPI users] problem with -npernode"</a>
<li><strong>Previous message:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>In reply to:</strong> <a href="13337.php">Brock Palen: "[OMPI users] using rankfiles to control mixed mode programming"</a>
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
