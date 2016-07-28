<?
$subject_val = "[OMPI users] core binding confusion";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  6 10:28:59 2012" -->
<!-- isoreceived="20120306152859" -->
<!-- sent="Tue, 06 Mar 2012 15:28:43 +0000" -->
<!-- isosent="20120306152843" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="[OMPI users] core binding confusion" -->
<!-- id="87zkbt92ac.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] core binding confusion<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-06 10:28:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18695.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Reply:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could someone confirm whether this is a bug or misunderstanding the doc
<br>
(in which case it's not just me, and it needs clarifying!)?  I haven't
<br>
looked at the current code in the hope of a quick authoritative answer.
<br>
<p>This is with 1.5.5rc3, originally on Interlagos, but also checked on
<br>
Magny Cours.  It's also seen on two Interlagos with different physical
<br>
numbering of the logical processors.
<br>
<p>On a 48-core Magny Cours with
<br>
<p>&nbsp;&nbsp;mpirun --bysocket --bind-to-core --report-bindings -np 48 
<br>
<p>what I get is two processes per core, e.g.:
<br>
<p>&nbsp;&nbsp;[node247:09521] [[58099,0],0] odls:default:fork binding child [[58099,1],14] to socket 2 cpus 4000
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;[node247:09521] [[58099,0],0] odls:default:fork binding child [[58099,1],38] to socket 2 cpus 4000
<br>
<p>and hwloc-ps confirms the situation.  However, I (and my boss, who did
<br>
it originally) expect one per core.  With --bycore we do see one per
<br>
core, of course.
<br>
<p>Is that actually expected?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Previous message:</strong> <a href="18695.php">Timothy Stitt: "Re: [OMPI users] Scatter+Group Communicator Issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
<li><strong>Reply:</strong> <a href="18697.php">Ralph Castain: "Re: [OMPI users] core binding confusion"</a>
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
