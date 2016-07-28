<?
$subject_val = "Re: [OMPI users] LSF launch with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  6 15:12:18 2009" -->
<!-- isoreceived="20090506191218" -->
<!-- sent="Wed, 6 May 2009 15:12:12 -0400" -->
<!-- isosent="20090506191212" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LSF launch with OpenMPI" -->
<!-- id="704F2244-AF2D-4923-9748-49C62307D22D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e76aa17f0905050701g404fd05fj2d1b666605080afe_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] LSF launch with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-06 15:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 5, 2009, at 10:01 AM, Matthieu Brucher wrote:
<br>
<p><span class="quotelev2">&gt; &gt; What Terry said is correct.  It means that &quot;mpirun&quot; will use,  
</span><br>
<span class="quotelev1">&gt; under the
</span><br>
<span class="quotelev2">&gt; &gt; covers, the &quot;native&quot; launching mechanism of LSF to launch jobs  
</span><br>
<span class="quotelev1">&gt; (vs., say,
</span><br>
<span class="quotelev2">&gt; &gt; rsh or ssh).  It'll also discover the hosts to use for this job  
</span><br>
<span class="quotelev1">&gt; without the
</span><br>
<span class="quotelev2">&gt; &gt; use of a hostfile -- it'll query LSF directly to see what hosts it  
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev2">&gt; &gt; use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, so I have to do something like:
</span><br>
<span class="quotelev1">&gt; bsub -n ${CPUS} mpirun myapplication
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it what I think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I don't know what you think.  ;-)  But I think that your above command  
<br>
might be correct.  You want *1* copy of mpirun to execute.  Hence, if
<br>
<p>bsub -n ${CPUS} uptime
<br>
<p>launches ${CPUS} copies of uptime, then the above command is not  
<br>
correct.  You want to submit an ${CPUS} processor job to LSF and have  
<br>
*one* copy of &quot;mpirun myapplication&quot; run -- mpirun will then invoke  
<br>
the underlying stuff to launch ${CPUS} copies of myapplication and  
<br>
join them together into a single MPI job.
<br>
<p><span class="quotelev1">&gt; I've enclosed the configure output as well as the config.log. The
</span><br>
<span class="quotelev1">&gt; problem is that my LSF (I didn't install it) 7.0.3 need libbat to be
</span><br>
<span class="quotelev1">&gt; linked against llsbstream (I modified the configure script to add
</span><br>
<span class="quotelev1">&gt; -llsbstream, and it compiled).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Huh!  Odd -- we didn't need that before.  Let me check with Platform...
<br>
<p>FWIW, you should be able to run like this without modifying configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure LIBS=-llsbstream ....etc....
<br>
<p>That should add -llsbstream in the Right places.
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
<li><strong>Next message:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="9239.php">Scott Atchley: "Re: [OMPI users] Myrinet optimization with OMP1.3 and macosX"</a>
<li><strong>In reply to:</strong> <a href="9223.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9241.php">Matthieu Brucher: "Re: [OMPI users] LSF launch with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="9254.php">Mehdi Bozzo-Rey: "Re: [OMPI users] LSF launch with OpenMPI"</a>
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
