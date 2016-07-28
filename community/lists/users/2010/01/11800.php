<?
$subject_val = "Re: [OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 15 11:18:10 2010" -->
<!-- isoreceived="20100115161810" -->
<!-- sent="Fri, 15 Jan 2010 17:18:04 +0100" -->
<!-- isosent="20100115161804" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dynamic rules" -->
<!-- id="op.u6k0wea3hvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c1001150726j1de23b5do345dbbb0d9230d16_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dynamic rules<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-15 11:18:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I tried this and it still crashes with openmpi-1.4. Is it supposed to
</span><br>
<span class="quotelev1">&gt; work with openmpi-1.4
</span><br>
<span class="quotelev1">&gt; or do I need to compile openmpi-1.4.1 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Terribly sorry, I should checked my own notes thoroughly before giving  
<br>
others advice. One needs to give the dynamic rules file location on the  
<br>
command line:
<br>
<p>mpirun -mca coll_tuned_use_dynamic_rules 1 -mca  
<br>
coll_tuned_dynamic_rules_filename /homeXXXX/.openmpi/dynamic_rules_file
<br>
<p>That works for me with openmpi 1.4. I have not tried 1.4.1 yet.
<br>
<p>Daniel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11801.php">Nicolas Bock: "[OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11799.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11797.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
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
