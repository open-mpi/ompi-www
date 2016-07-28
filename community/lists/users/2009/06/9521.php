<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 11:38:59 2009" -->
<!-- isoreceived="20090603153859" -->
<!-- sent="Wed, 03 Jun 2009 16:40:27 +0100" -->
<!-- isosent="20090603154027" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="1244043627.4668.53.camel_at_localhost.localdomain" -->
<!-- inreplyto="35622AFC-4D99-46A8-9663-461974C919F6_at_cisco.com" -->
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
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-03 11:40:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2009-06-03 at 11:27 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 3, 2009, at 10:48 AM, &lt;JACOB_LIBERMAN_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; For HPL, try writing a bash script that pins processes to their  
</span><br>
<span class="quotelev2">&gt; &gt; local memory controllers using numactl before kicking off HPL.  This  
</span><br>
<span class="quotelev2">&gt; &gt; is particularly helpful when spawning more than 1 thread per  
</span><br>
<span class="quotelev2">&gt; &gt; process.  The last line of your script should look like &quot;numactl -c  
</span><br>
<span class="quotelev2">&gt; &gt; $cpu_bind -m $ mem_bind $*&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Believe it or not, I hit 94.5% HPL efficiency using this tactic on a  
</span><br>
<span class="quotelev2">&gt; &gt; 16 node cluster. Using processor affinity (various MPIs) my results  
</span><br>
<span class="quotelev2">&gt; &gt; were inconsistent and ranged between 88-93%
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you're using multi-threaded HPL, that might be useful.  But if  
</span><br>
<span class="quotelev1">&gt; you're not, I'd be surprised if you got any different results than  
</span><br>
<span class="quotelev1">&gt; Open MPI binding itself.  If there really is a difference, we should  
</span><br>
<span class="quotelev1">&gt; figure out why.  More specifically, calling numactl yourself should be  
</span><br>
<span class="quotelev1">&gt; pretty much exactly what we do in OMPI (via API, not via calling  
</span><br>
<span class="quotelev1">&gt; numactl).
</span><br>
<p>Wasn't there a discussion about this recently on the list, OMPI binds
<br>
during MPI_Init() so it's possible for memory to be allocated on the
<br>
wrong quad, the discussion was about moving the binding to the orte
<br>
process as I recall?
<br>
<p><span class="quotelev1">&gt;From my testing of process affinity you tend to get much more consistent
</span><br>
results with it on and much more unpredictable results with it off, I'd
<br>
questing that it's working properly if you are seeing a 88-93% range in
<br>
the results.
<br>
<p>Ashley Pittman.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9522.php">Number Cruncher: "Re: [OMPI users] top question"</a>
<li><strong>Previous message:</strong> <a href="9520.php">Rainer Keller: "Re: [OMPI users] Pb in configure script when using ifort with &quot;-fast&quot; +	link of opal_wrapper"</a>
<li><strong>In reply to:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9523.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
