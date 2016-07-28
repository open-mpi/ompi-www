<?
$subject_val = "Re: [OMPI users] Executions in two different machines";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 18 10:57:02 2012" -->
<!-- isoreceived="20120618145702" -->
<!-- sent="Mon, 18 Jun 2012 10:56:57 -0400" -->
<!-- isosent="20120618145657" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Executions in two different machines" -->
<!-- id="3E65E409-8FD5-4095-BB98-260BAF1AB0BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1340030715.22608.2.camel_at_dell" -->
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
<strong>Subject:</strong> Re: [OMPI users] Executions in two different machines<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-18 10:56:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19618.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19618.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 18, 2012, at 10:45 AM, Harald Servat wrote:
<br>
<p><span class="quotelev1">&gt; # $HOME/aplic/openmpi/1.6/bin/mpirun -np 1 -host
</span><br>
<span class="quotelev1">&gt; localhost ./init_barrier_fini : -x
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=/home/Computational/harald/aplic/openmpi/1.6/lib
</span><br>
<span class="quotelev1">&gt; -prefix /home/Computational/harald/aplic/openmpi/1.6/ -x
</span><br>
<span class="quotelev1">&gt; PATH=/home/Computational/harald/aplic/openmpi/1.6/bin -np 1 -host
</span><br>
<span class="quotelev1">&gt; M2 /home/Computational/harald/tests/mpi/multi-machine/init_barrier_fini
</span><br>
<p>Try without using the absolute pathname to mpirun -- it reacts differently if you specify the absolute pathname vs. just &quot;mpirun&quot;.
<br>
<p>Also, if you setup your .bashrc's right, then you don't need the -x LD_LIBRARY_PATH... clause.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19617.php">Rolf vandeVaart: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>Previous message:</strong> <a href="19615.php">Dmitry N. Mikushin: "Re: [OMPI users] NVCC mpi.h: error: attribute &quot;__deprecated__&quot; does not take arguments"</a>
<li><strong>In reply to:</strong> <a href="19613.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19618.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
<li><strong>Reply:</strong> <a href="19618.php">Harald Servat: "Re: [OMPI users] Executions in two different machines"</a>
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
