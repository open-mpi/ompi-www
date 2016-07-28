<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 21:51:53 2006" -->
<!-- isoreceived="20060421015153" -->
<!-- sent="Fri, 21 Apr 2006 09:42:13 +0800" -->
<!-- isosent="20060421014213" -->
<!-- name="semper" -->
<!-- email="semper_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="345583733.07818_at_nudt.edu.cn" -->
<!-- inreplyto="[OMPI users] (no subject)" -->
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
<strong>Date:</strong> 2006-04-20 21:42:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Previous message:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; No, the location of $HOME should not matter.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if you &quot;mpirun -np 2 uptime&quot;?  (i.e., use mpirun to launch
</span><br>
<span class="quotelev1">&gt; a non-MPI application)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
Thanks.
<br>
it returns right result!  but still only 2 local processes. 
<br>
<p>I tried again to add a hostfile option &quot;--hostfile $HOME/openmpi/bin/hostfile&quot; to
<br>
mpirun, with the hostfile containning two items: IA64_node0 and IA64_node1 ,but
<br>
this time it complained:
<br>
[time returned by IA64_node0]
<br>
bash line 1: orted : command not found
<br>
<p>oops,did I do a misconfig for openmpi?
<br>
btw,openmpi was installed under HOME directory of user semper on each node of the
<br>
cluster. The 4 nodes can &quot;ssh&quot; or &quot;rsh&quot; login in each other without password
<br>
prompt. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Previous message:</strong> <a href="1108.php">Ralph Castain: "Re: [OMPI users] Open-MPI and TCP port range"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
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
