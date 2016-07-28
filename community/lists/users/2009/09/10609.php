<?
$subject_val = "Re: [OMPI users] Disable use of Torque at run-time";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 15:57:06 2009" -->
<!-- isoreceived="20090910195706" -->
<!-- sent="Thu, 10 Sep 2009 21:56:40 +0200" -->
<!-- isosent="20090910195640" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Disable use of Torque at run-time" -->
<!-- id="56D11E33-053E-42C7-95A1-D8D2D3728CF1_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="50024.128.165.0.81.1252611613.squirrel_at_webmail.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Disable use of Torque at run-time<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 15:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Previous message:</strong> <a href="10608.php">Ralph Castain: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 10.09.2009 um 21:40 schrieb Jason D. Gans:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to use a custom hostfile (that changes the default  
</span><br>
<span class="quotelev1">&gt; max_slot
</span><br>
<span class="quotelev1">&gt; values for certain nodes). My understanding of the FAQ is that this is
</span><br>
<span class="quotelev1">&gt; *not* possible with Torque. Therefore, is is possible to disable  
</span><br>
<span class="quotelev1">&gt; use of
</span><br>
<span class="quotelev1">&gt; Torque at runtime (via an argument to mpirun), or do I need to  
</span><br>
<span class="quotelev1">&gt; recompile
</span><br>
<span class="quotelev1">&gt; to remove Torque support altogether.
</span><br>
<p>you can try to:
<br>
<p>unset PBS_JOBID
<br>
<p>For SGE it was working this way.
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10610.php">Ashika Umanga Umagiliya: "Re: [OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Previous message:</strong> <a href="10608.php">Ralph Castain: "Re: [OMPI users] Disable use of Torque at run-time"</a>
<li><strong>In reply to:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10624.php">jgans: "Re: [OMPI users] Disable use of Torque at run-time"</a>
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
