<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 10:32:23 2013" -->
<!-- isoreceived="20131218153223" -->
<!-- sent="Wed, 18 Dec 2013 15:32:22 +0000" -->
<!-- isosent="20131218153222" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="87r49ayy2h.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EC019B87-8DC7-4AE2-93E7-0F5ADFC74BA0_at_nrl.navy.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 10:32:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23225.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Noam Bernstein &lt;noam.bernstein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; We specifically switched to 1.7.3 because of a bug in 1.6.4 (lock up in some 
</span><br>
<span class="quotelev1">&gt; collective communication), but now I'm wondering whether I should just test
</span><br>
<span class="quotelev1">&gt; 1.6.5.
</span><br>
<p>What bug, exactly?  As you mentioned vasp, is it specifically affecting
<br>
that?
<br>
<p>We have seen apparent deadlocks with vasp -- which users assure me is
<br>
due to malfunctioning hardware and/or batch system -- but I don't think
<br>
there was any evidence of it being due to openmpi (1.4 and 1.6 on
<br>
different systems here).  I didn't have the padb --deadlock mode working
<br>
properly at the time I looked at one, but it seemed just to be stuck
<br>
with some ranks in broadcast and the rest in barrier.  Someone else put
<br>
a parallel debugger on it, but I'm not sure if there was a conclusive
<br>
result, and I'm not very interested in debugging proprietary programs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23225.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23223.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>In reply to:</strong> <a href="23210.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23227.php">Noam Bernstein: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
