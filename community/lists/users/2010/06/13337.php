<?
$subject_val = "[OMPI users] using rankfiles to control mixed mode programming";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 16 16:21:26 2010" -->
<!-- isoreceived="20100616202126" -->
<!-- sent="Wed, 16 Jun 2010 16:21:20 -0400" -->
<!-- isosent="20100616202120" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] using rankfiles to control mixed mode programming" -->
<!-- id="FD38E9CA-5DD5-4BB0-A160-DF80F4340D0C_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] using rankfiles to control mixed mode programming<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-16 16:21:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Previous message:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Reply:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We use Torque and Moab as our resource manager, 
<br>
I have a user who has to mix programming models, threads and MPI, but not on all ranks,
<br>
<p>Example:
<br>
Rank 0 needs 4 cores
<br>
Rank 1 needs 4 cores
<br>
Ranks 2-5 need 1
<br>
<p>There is no way to give this to Torque/Moab in a way that when using TM openMPI correctly starts the layout I need.
<br>
I found I can use a rankfile to do this,
<br>
<p>cat rankfile
<br>
rank 0=nyx0456 slot=0
<br>
rank 1=nyx0457 slot=0
<br>
rank 2=nyx0458 slot=0
<br>
rank 3=nyx0458 slot=1
<br>
rank 4=nyx0458 slot=2
<br>
rank 5=nyx0458 slot=3
<br>
<p>qsub -I -l nodes=4:ppn=4
<br>
[brockp_at_nyx0456 tmp]$ mpirun -np 6 -rf rankfile hostname | sort | uniq -c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx0456.engin.umich.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 nyx0457.engin.umich.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 nyx0458.engin.umich.edu
<br>
<p>(ignore the cpu count mismatch, I am not using all 16 cores in this example)
<br>
<p>I could make a script to build this rankfile, I want to know if there is a better way to do this, 
<br>
Also we don't want to use affinity, as we don't know what 'cpus' the bath (pbs/moab) system gave us,  is the above rankfile going to do the right thing? That is the processes will float? Is there a way to tell if affinity is set? Or to say &quot;rank 0 goes to this host use any available cores&quot; 
<br>
<p>Thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Previous message:</strong> <a href="13336.php">Ralph Castain: "Re: [OMPI users] Xgrid an openmpi  1.2 and 1.5rc1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
<li><strong>Reply:</strong> <a href="13338.php">Ralph Castain: "Re: [OMPI users] using rankfiles to control mixed mode programming"</a>
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
