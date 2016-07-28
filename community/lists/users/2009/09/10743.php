<?
$subject_val = "Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 10:38:51 2009" -->
<!-- isoreceived="20090923143851" -->
<!-- sent="Wed, 23 Sep 2009 10:38:44 -0400" -->
<!-- isosent="20090923143844" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)" -->
<!-- id="596C167D-F15A-4A32-ADEA-57F026DF2CF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87bpl1wxv2.fsf_-__at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 10:38:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>In reply to:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
<li><strong>Reply:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 23, 2009, at 10:15 AM, Dave Love wrote:
<br>
<p><span class="quotelev2">&gt;&gt; So, how does one go about selecting a good switch? &quot;The most  
</span><br>
<span class="quotelev2">&gt;&gt; expensive
</span><br>
<span class="quotelev2">&gt;&gt; the better&quot; is somewhat a unsatisfying option!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also it's apparently not always right
</span><br>
<p>+1 on Dave's and Joe's comments.
<br>
<p>For example, not all of Cisco's switches are suitable for &quot;ultra&quot; HPC  
<br>
clusters.  Cisco has some very expensive switches whose goals are very  
<br>
definitely not the same as what ultra HPC clusters typically need.   
<br>
They're great switches (ok, I'm a bit biased ;-) ), but they're not  
<br>
what you would need for an ultra HPC cluster.  Buying one of these  
<br>
would be kind of like buying an F-350 truck instead of an F1 formula  
<br>
race car; both are excellent at their respective tasks, but they're  
<br>
very different tasks.
<br>
<p>My point: a network switch != a network switch != a network switch.   
<br>
Make sure you understand what workloads and tasks the network switch  
<br>
was designed for; don't just rely on published spec numbers -- they  
<br>
don't tell the full story.  Both an F1 and an F-350 can go 100 mph --  
<br>
but they get there in very different ways.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10744.php">Peter Kjellstrom: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<li><strong>In reply to:</strong> <a href="10742.php">Dave Love: "[OMPI users] switch and NIC performance (was: very bad parallel scaling of vasp using openmpi)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
<li><strong>Reply:</strong> <a href="10746.php">Jeff Squyres: "Re: [OMPI users] switch and NIC performance (was: very bad parallelscaling of vasp using openmpi)"</a>
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
