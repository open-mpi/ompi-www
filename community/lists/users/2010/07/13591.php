<?
$subject_val = "Re: [OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 11:14:52 2010" -->
<!-- isoreceived="20100712151452" -->
<!-- sent="Mon, 12 Jul 2010 17:14:46 +0200" -->
<!-- isosent="20100712151446" -->
<!-- name="Olivier Marsden" -->
<!-- email="Olivier.Marsden_at_[hidden]" -->
<!-- subject="Re: [OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="4C3B3166.4010705_at_ec-lyon.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AFE8B6CE-6953-49DA-B2D0-91BFEC1FD9BC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] perhaps an openmpi bug, how best to identify?<br>
<strong>From:</strong> Olivier Marsden (<em>Olivier.Marsden_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 11:14:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi again,
<br>
after testing as suggested, it is indeed a massive slowdown rather than
<br>
a full-blown machine hang.
<br>
Would the next test be to run with debug flags for openmpi ?
<br>
Regards,
<br>
<p>Olivier Marsden
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jul 7, 2010, at 12:50 PM, Olivier Marsden wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff, thanks for the response.
</span><br>
<span class="quotelev2">&gt;&gt; As soon as I can afford to reboot my workstation,
</span><br>
<span class="quotelev2">&gt;&gt; like tomorrow, I will test as you suggest whether the computer
</span><br>
<span class="quotelev2">&gt;&gt; actually hangs or just slows down. For exhaustive kernel logging,
</span><br>
<span class="quotelev2">&gt;&gt; I replaced the following line
</span><br>
<span class="quotelev2">&gt;&gt; kern.*               -/var/log/kern.log
</span><br>
<span class="quotelev2">&gt;&gt; with
</span><br>
<span class="quotelev2">&gt;&gt; kern.*                /var/log/kern.log
</span><br>
<span class="quotelev2">&gt;&gt; in my /etc/rsyslog.d/50-default.conf file, does that look about right?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd add another:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *.*   -/var/log/everything.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...because who knows what the actual problem is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And/or, if you have another machine that can listen for syslog, remote syslog to that machine so that you might be able to see the results more or less immediately.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13592.php">Ralph Castain: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>Previous message:</strong> <a href="13590.php">Brian Budge: "Re: [OMPI users] Dynamic process tutorials?"</a>
<li><strong>In reply to:</strong> <a href="13507.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13637.php">Jeff Squyres: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
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
