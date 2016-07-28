<?
$subject_val = "Re: [OMPI users] perhaps an openmpi bug, how best to identify?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 13:00:57 2010" -->
<!-- isoreceived="20100707170057" -->
<!-- sent="Wed, 7 Jul 2010 13:01:09 -0400" -->
<!-- isosent="20100707170109" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] perhaps an openmpi bug, how best to identify?" -->
<!-- id="AFE8B6CE-6953-49DA-B2D0-91BFEC1FD9BC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C34B059.802_at_ec-lyon.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 13:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13508.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 7, 2010, at 12:50 PM, Olivier Marsden wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, thanks for the response.
</span><br>
<span class="quotelev1">&gt; As soon as I can afford to reboot my workstation,
</span><br>
<span class="quotelev1">&gt; like tomorrow, I will test as you suggest whether the computer
</span><br>
<span class="quotelev1">&gt; actually hangs or just slows down. For exhaustive kernel logging,
</span><br>
<span class="quotelev1">&gt; I replaced the following line
</span><br>
<span class="quotelev1">&gt; kern.*               -/var/log/kern.log
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; kern.*                /var/log/kern.log
</span><br>
<span class="quotelev1">&gt; in my /etc/rsyslog.d/50-default.conf file, does that look about right?
</span><br>
<p>I'd add another:
<br>
<p>*.*   -/var/log/everything.log
<br>
<p>...because who knows what the actual problem is?
<br>
<p>And/or, if you have another machine that can listen for syslog, remote syslog to that machine so that you might be able to see the results more or less immediately.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13508.php">Ralph Castain: "Re: [OMPI users] MPI_Init failing in singleton"</a>
<li><strong>Previous message:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>In reply to:</strong> <a href="13506.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
<li><strong>Reply:</strong> <a href="13591.php">Olivier Marsden: "Re: [OMPI users] perhaps an openmpi bug, how best to identify?"</a>
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
