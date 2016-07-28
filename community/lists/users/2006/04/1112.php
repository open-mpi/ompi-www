<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 21 00:00:35 2006" -->
<!-- isoreceived="20060421040035" -->
<!-- sent="Fri, 21 Apr 2006 00:00:29 -0400" -->
<!-- isosent="20060421040029" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI and SLURM configuration ??" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF7086FD_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-21 00:00:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of semper
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, April 20, 2006 9:50 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI and SLURM configuration ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No, the location of $HOME should not matter. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What happens if you &quot;mpirun -np 2 uptime&quot;? (i.e., use 
</span><br>
<span class="quotelev1">&gt; mpirun to launch 
</span><br>
<span class="quotelev2">&gt; &gt; a non-MPI application) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it returns right result! but still only 2 local processes. 
</span><br>
<p>So this is *inside* a SLURM job?  I.e., in &quot;srun -N 2 -A&quot;?  What does
<br>
&quot;env | grep SLURM&quot; show?
<br>
<p>Note that launching N processes on a single node is the default behavior
<br>
for Open MPI if you don't specify a hostfile or no hosts are implicitly
<br>
specified by a resource manager (e.g., you're running in a shell that is
<br>
not under the control of SLURM).
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; I tried again to add a hostfile option &quot;--hostfile 
</span><br>
<span class="quotelev1">&gt; $HOME/openmpi/bin/hostfile&quot; to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun, with the hostfile containning two items: IA64_node0 
</span><br>
<span class="quotelev1">&gt; and IA64_node1 ,but 
</span><br>
<span class="quotelev1">&gt; this time it complained: 
</span><br>
<span class="quotelev1">&gt; [time returned by IA64_node0] 
</span><br>
<span class="quotelev1">&gt; bash line 1: orted : command not found 
</span><br>
<p>As noted by someone else, you need to have Open MPI installed and
<br>
available in your PATH on all nodes.  See the FAQ:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><span class="quotelev1">&gt; cluster. The 4 nodes can &quot;ssh&quot; or &quot;rsh&quot; login in each other 
</span><br>
<span class="quotelev1">&gt; without password 
</span><br>
<span class="quotelev1">&gt; prompt. 
</span><br>
<p>When using SLURM, rsh/ssh are not used to startup jobs -- SLURM's native
<br>
interface is used.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1113.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 interface error?: MPI_Comm_get_attr"</a>
<li><strong>Previous message:</strong> <a href="1111.php">Sang Chul Choi: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe in reply to:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
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
