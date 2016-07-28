<?
$subject_val = "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 11:19:23 2010" -->
<!-- isoreceived="20101208161923" -->
<!-- sent="Wed, 08 Dec 2010 08:18:57 -0800" -->
<!-- isosent="20101208161857" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu" -->
<!-- id="4CFFAFF1.6070703_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BC8D5815-9693-4195-8BA4-70F7361A8129_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 11:18:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15043.php">jody: "[OMPI users] using totalview"</a>
<li><strong>Previous message:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>In reply to:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;I know we have said this many times - OMPI made a design decision to poll hard while waiting for messages to arrive to minimize latency.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;If you want to decrease cpu usage, you can use the yield_when_idle option (it will cost you some latency, though) - see ompi_info --param ompi all
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I wouldn't mind some clarification here.  Would CPU usage really 
<br>
decrease, or would other processes simply have an easier time getting 
<br>
cycles?  My impression of yield was that if there were no one to yield 
<br>
to, the &quot;yielding&quot; process would still go hard.  Conversely, turning on 
<br>
&quot;yield&quot; would still show 100% cpu, but it would be easier for other 
<br>
processes to get time.
<br>
<p><span class="quotelev1">&gt;Or don't set affinity and we won't be as aggressive - but you'll lose some performance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Choice is yours! :-)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15043.php">jody: "[OMPI users] using totalview"</a>
<li><strong>Previous message:</strong> <a href="15041.php">Richard Treumann: "Re: [OMPI users] curious behavior during wait for broadcast: 100%	cpu"</a>
<li><strong>In reply to:</strong> <a href="15038.php">Ralph Castain: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
<li><strong>Reply:</strong> <a href="15054.php">Hicham Mouline: "Re: [OMPI users] curious behavior during wait for broadcast: 100% cpu"</a>
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
