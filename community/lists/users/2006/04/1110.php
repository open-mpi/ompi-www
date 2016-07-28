<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 21:59:32 2006" -->
<!-- isoreceived="20060421015932" -->
<!-- sent="Fri, 21 Apr 2006 09:50:05 +0800" -->
<!-- isosent="20060421015005" -->
<!-- name="semper" -->
<!-- email="semper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM configuration ??" -->
<!-- id="345584205.08053_at_nudt.edu.cn" -->
<!-- inreplyto="[OMPI users] OpenMPI and SLURM configuration ??" -->
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
<strong>From:</strong> semper (<em>semper_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 21:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Maybe reply:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; No, the location of $HOME should not matter. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you &quot;mpirun -np 2 uptime&quot;? (i.e., use mpirun to launch 
</span><br>
<span class="quotelev1">&gt; a non-MPI application) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thanks. 
<br>
it returns right result! but still only 2 local processes. 
<br>
<p><p>I tried again to add a hostfile option &quot;--hostfile $HOME/openmpi/bin/hostfile&quot; to
<br>
<p>mpirun, with the hostfile containning two items: IA64_node0 and IA64_node1 ,but 
<br>
this time it complained: 
<br>
[time returned by IA64_node0] 
<br>
bash line 1: orted : command not found 
<br>
<p><p>oops! Should I have done a misconfig for openmpi? 
<br>
btw,openmpi was installed under HOME directory of user semper on each node of the
<br>
<p>cluster. The 4 nodes can &quot;ssh&quot; or &quot;rsh&quot; login in each other without password 
<br>
prompt. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Maybe reply:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
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
