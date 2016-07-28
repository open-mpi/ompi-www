<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 15:54:30 2009" -->
<!-- isoreceived="20090818195430" -->
<!-- sent="Tue, 18 Aug 2009 15:54:32 -0400" -->
<!-- isosent="20090818195432" -->
<!-- name="Patrick Geoffray" -->
<!-- email="patrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4A8B06F8.1080302_at_myri.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A8B04BF.9080201_at_virginia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Patrick Geoffray (<em>patrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 15:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig Plaisance wrote:
<br>
<span class="quotelev1">&gt; So is this a problem with the physical switch (we need a better switch) 
</span><br>
<span class="quotelev1">&gt; or with the configuration of the switch (we need to configure the switch 
</span><br>
<span class="quotelev1">&gt; or configure the os to work with the switch)?
</span><br>
<p>You may want to look if you are dropping packets somewhere. You can look 
<br>
at the packet count on the sender and receiver interfaces and see if 
<br>
they match (within epsilon). You can also look if your switch supports 
<br>
hardware flow control, it would prevent packet loss is the receiver is 
<br>
slower than the sender, but even slow/busy machines should be able to 
<br>
receive 1 Gb/s these days.
<br>
<p>What does ethtool -S ethX says on the worse sender/receiver pair ?
<br>
<p>Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Previous message:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10418.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10424.php">Gerry Creager: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
