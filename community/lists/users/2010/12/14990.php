<?
$subject_val = "Re: [OMPI users] difference between single and double precision";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  3 08:59:59 2010" -->
<!-- isoreceived="20101203135959" -->
<!-- sent="Fri, 3 Dec 2010 08:59:50 -0500" -->
<!-- isosent="20101203135950" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between single and double precision" -->
<!-- id="E361208B-2B94-44BF-8141-49D2CB76D64E_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8077CE3A-C9FC-4523-95F1-79A3CAC5E3A5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between single and double precision<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-03 08:59:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2010-12-03, at 8:46AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; Another option to try is to install the openmx drivers on your system and run open MPI with mx support. This should be much better perf than tcp. 
</span><br>
<p><p>We've tried this on a big GigE cluster (in fact, Brice Goglin was playing with it on our system) -- it's not really an answer.  It didn't work past a small number of nodes, and the performance gains were fairly small.   IntelMPIs Direct Ethernet Transport did work on larger nodecounts, but again it was a pretty modest effect (few percent decrease in pingpong latencies, no discernable bandwidth improvements).  
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;  SciNet, Compute/Calcul Canada
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14991.php">Daofeng Li: "Re: [OMPI users] error mesages appeared but program runs successfully?"</a>
<li><strong>Previous message:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="14989.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between single and double precision"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14994.php">Eugene Loh: "Re: [OMPI users] difference between single and double precision"</a>
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
