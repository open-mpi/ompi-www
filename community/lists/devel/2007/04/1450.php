<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 19 19:37:36 2007" -->
<!-- isoreceived="20070419233736" -->
<!-- sent="Fri, 20 Apr 2007 01:37:30 +0200" -->
<!-- isosent="20070419233730" -->
<!-- name="Christian Leber" -->
<!-- email="christian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="20070419233730.GA28557_at_core" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3941.69.180.16.130.1177023517.squirrel_at_webmail.cc.gatech.edu" -->
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
<strong>From:</strong> Christian Leber (<em>christian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-19 19:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1449.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1449.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Apr 19, 2007 at 06:58:37PM -0400, pooja_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; I am Pooja working with chaitali on this project.
</span><br>
<span class="quotelev1">&gt; The idea behind this is while running a parallelized code ,if a huge
</span><br>
<span class="quotelev1">&gt; chunks of serial computation is encountered at that time underlying
</span><br>
<span class="quotelev1">&gt; network infrastructure can be used for some other data transfer.
</span><br>
<span class="quotelev1">&gt; This increases the network utilization.
</span><br>
<span class="quotelev1">&gt; But this (non Mpi) data transfer should not keep Mpi calls blocking.
</span><br>
<span class="quotelev1">&gt; So we need to give them priorities.
</span><br>
<span class="quotelev1">&gt; Also we are trying to predict a behavior of the code (like if there are
</span><br>
<span class="quotelev1">&gt; more MPi calls coming with short interval or if they are coming after
</span><br>
<span class="quotelev1">&gt; large interval ) based on previous calls.
</span><br>
<span class="quotelev1">&gt; As a result we can make this mechanism more efficient.
</span><br>
<p>Ok, so you have a Cluster with Infiniband a while the network traffic is
<br>
low you want to utilize the Infiniband network for other data transfers
<br>
with a lower priority?
<br>
<p>What does this have to do with TCP or are you using TCP over Infiniband?
<br>
<p>Regards
<br>
Christian Leber
<br>
<p><pre>
-- 
<a href="http://rettetdieti.vde-uni-mannheim.de/">http://rettetdieti.vde-uni-mannheim.de/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1449.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1449.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1451.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
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
