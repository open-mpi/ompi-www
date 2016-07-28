<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:27:36 2009" -->
<!-- isoreceived="20090603152736" -->
<!-- sent="Wed, 3 Jun 2009 11:27:25 -0400" -->
<!-- isosent="20090603152725" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="35622AFC-4D99-46A8-9663-461974C919F6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7ADD3FA62176CB4588006774C1CCA43B596625_at_ausx3mps336.aus.amer.dell.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 11:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9517.php">Jeff Squyres: "Re: [OMPI users] Hypre"</a>
<li><strong>In reply to:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2009, at 10:48 AM, &lt;JACOB_LIBERMAN_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; For HPL, try writing a bash script that pins processes to their  
</span><br>
<span class="quotelev1">&gt; local memory controllers using numactl before kicking off HPL.  This  
</span><br>
<span class="quotelev1">&gt; is particularly helpful when spawning more than 1 thread per  
</span><br>
<span class="quotelev1">&gt; process.  The last line of your script should look like &quot;numactl -c  
</span><br>
<span class="quotelev1">&gt; $cpu_bind -m $ mem_bind $*&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Believe it or not, I hit 94.5% HPL efficiency using this tactic on a  
</span><br>
<span class="quotelev1">&gt; 16 node cluster. Using processor affinity (various MPIs) my results  
</span><br>
<span class="quotelev1">&gt; were inconsistent and ranged between 88-93%
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If you're using multi-threaded HPL, that might be useful.  But if  
<br>
you're not, I'd be surprised if you got any different results than  
<br>
Open MPI binding itself.  If there really is a difference, we should  
<br>
figure out why.  More specifically, calling numactl yourself should be  
<br>
pretty much exactly what we do in OMPI (via API, not via calling  
<br>
numactl).
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9517.php">Jeff Squyres: "Re: [OMPI users] Hypre"</a>
<li><strong>In reply to:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9519.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9521.php">Ashley Pittman: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
