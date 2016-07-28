<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 17 22:55:44 2013" -->
<!-- isoreceived="20130318025544" -->
<!-- sent="Sun, 17 Mar 2013 22:55:33 -0400" -->
<!-- isosent="20130318025533" -->
<!-- name="Gustavo Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="B8A38BF4-0A68-459D-99D6-459046546BA7_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFBBA93B13.7AB6302A-ON49257B32.0004468C-49257B32.0004CC13_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> Gustavo Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-17 22:55:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tetsuya Mishima
<br>
<p>In your example, have you tried not to modify the node file, 
<br>
launch two mpi processes with mpiexec, and request a &quot;-bynode&quot; distribution of processes:
<br>
<p>mpiexec -bynode -np 2 ./my_program
<br>
<p>This should launch one MPI process in each of two nodes.
<br>
See 'man mpiexec' for details.
<br>
Works in OMPI 1.6.
<br>
I don't know about OMPI 1.7.
<br>
<p>You can continue to ask for two nodes with four processors/cores each in your Torque script,
<br>
say:
<br>
#PBS -l nodes=2:ppn=4
<br>
to use the remaining cores for the OpenMP threads.
<br>
&nbsp;
<br>
I hope this helps,
<br>
Gus Correa
<br>
<p>On Mar 17, 2013, at 8:52 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi openmpi developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been evaluating our FEM aplication with new openmpi-1.7rc7 under
</span><br>
<span class="quotelev1">&gt; Torque job controler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I encountered a trouble that &quot;-hostfile&quot; does not work properly.
</span><br>
<span class="quotelev1">&gt; Since my application is hybrid(MPI+OpenMP), I have to modify
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE and use &quot;-hostfile&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't add new hosts to the hostfile according to FAQ. It's just a
</span><br>
<span class="quotelev1">&gt; subset of the hosts allocated to the Torque. At leaset, this method
</span><br>
<span class="quotelev1">&gt; works well with openmpi-1.6.x.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this issue will be fixed in the next release of openmpi-1.7.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) Example of 2MPI having 4 threads:
</span><br>
<span class="quotelev1">&gt; $PBS_NODEFILE -&gt; modified hostfile
</span><br>
<span class="quotelev1">&gt; node01           node01
</span><br>
<span class="quotelev1">&gt; node01           node02
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node01
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; node02
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) The error message I got is as follows:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostfile:  pbs_hosts
</span><br>
<span class="quotelev1">&gt;  node:      node01
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21548.php">tmishima_at_[hidden]: "[OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21550.php">Jeff Squyres (jsquyres): "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
