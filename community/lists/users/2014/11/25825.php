<?
$subject_val = "Re: [OMPI users] oversubscription of slots with GridEngine";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 12:40:05 2014" -->
<!-- isoreceived="20141117174005" -->
<!-- sent="Mon, 17 Nov 2014 17:35:10 +0000" -->
<!-- isosent="20141117173510" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] oversubscription of slots with GridEngine" -->
<!-- id="87h9xxg27l.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="utf-8" -->
<!-- inreplyto="FD0B9E9C-B4F4-4BDF-AC09-92A2B9E9BA72_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] oversubscription of slots with GridEngine<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 12:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25811.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt; On Nov 13, 2014, at 3:36 PM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cn6050 16 par6.q_at_cn6050 &lt;NULL&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cn6045 16 par6.q_at_cn6045 &lt;NULL&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The above looks like the PE_HOSTFILE. So it should be 16 slots per node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hey Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that the standard PE_HOSTFILE format? I&#226;&#128;&#153;m looking at the ras/gridengine module, and it looks like it is expecting a different format. I suspect that is the problem
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should have said that the parsing code is OK, and it specifically
</span><br>
<span class="quotelev2">&gt;&gt; works with the above.  (It should probably be made more robust by
</span><br>
<span class="quotelev2">&gt;&gt; ensuring it reads to end-of-line, and preferably should interpret a
</span><br>
<span class="quotelev2">&gt;&gt; binding string as the fourth field.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Afraid I am confused - if we look at the user&#226;&#128;&#153;s output from mpirun
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#148;display-allocation, you can see that we only got the first line in
</span><br>
<span class="quotelev1">&gt; the above. We didn&#226;&#128;&#153;t see the second node at all. So the parsing code
</span><br>
<span class="quotelev1">&gt; is clearly not reading that file correctly, or they have some envar
</span><br>
<span class="quotelev1">&gt; set that is telling us to ignore the second node somehow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What am I missing?
</span><br>
<p>Well, you don't know what mpirun's environment looked like, other than
<br>
NSLOTS apparently being intact.  The output from mpirun was consistent
<br>
with clobbering the other variables Reuti listed (breaking the SGE
<br>
&quot;tight integration&quot;):
<br>
<p>&nbsp;&nbsp;$ cat STDIN.o$(qsub -pe mpi 32 -l p=16,h_rt=9 -terse -sync y | head -1)
<br>
&nbsp;&nbsp;unset PE_HOSTFILE
<br>
&nbsp;&nbsp;mpirun --np $NSLOTS --display-allocation true
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;======================   ALLOCATED NODES   ======================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comp162: slots=16 max_slots=0 slots_inuse=0 state=UP
<br>
&nbsp;&nbsp;=================================================================
<br>
&nbsp;&nbsp;$ 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25826.php">Daniels, Marcus G: "Re: [OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<li><strong>In reply to:</strong> <a href="25811.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
