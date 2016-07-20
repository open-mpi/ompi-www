<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 09:20:00 2014" -->
<!-- isoreceived="20140815132000" -->
<!-- sent="Fri, 15 Aug 2014 14:19:57 +0100" -->
<!-- isosent="20140815131957" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error" -->
<!-- id="20140815141957.413bd3a1_at_antares" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="53EE05DD.2070405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 09:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1051.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1051.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Most people don't care about cache when binding with MPI, so you may
</span><br>
<span class="quotelev1">&gt; just ignore the issue and hide the message by setting
</span><br>
<span class="quotelev1">&gt; HWLOC_HIDE_ERRORS=1 in the environment. It may work fine (assuming
</span><br>
<span class="quotelev1">&gt; MPIs don't have troubles with asymmetric topologies where there are
</span><br>
<span class="quotelev1">&gt; some missing L3).
</span><br>
<p>We do see some problems with our MPI (that's what prompted me to
<br>
install hwloc 1.9 and openmpi 1.8.2rc2 in the first place), but I don't
<br>
think it's related to this cache problem: when we submit an MPI job to,
<br>
say, 48 processors, only a handful of random ones work at 100%, the
<br>
rest are idling (as seen in htop). We are running openmpi via mpi4py to
<br>
do Markov Chain Monte Carlo (mcmc) fitting.
<br>
<p><span class="quotelev1">&gt; Otherwise, hwloc can load the topology from XML. So we'll just need to
</span><br>
<span class="quotelev1">&gt; generate a fixed topology, export it to XML and set an environment
</span><br>
<span class="quotelev1">&gt; variable to have hwloc load from there. A single file may even be
</span><br>
<span class="quotelev1">&gt; enough for all similar nodes assuming your MPI and/or applications
</span><br>
<span class="quotelev1">&gt; don't look in deep details of hwloc topologies.
</span><br>
<p>We have 4 identical nodes; one runs as a server and the others boot off
<br>
the server via NFS. But there are also 6 older nodes (with 4 processors
<br>
each) that boot off the server in the same way, so for those I imagine
<br>
that a fixed topology XML won't do much good. That said, we are in the
<br>
process of phasing those 6 nodes out, and I wouldn't be terribly sad if
<br>
this gives us a good reason to do so.
<br>
<p>Thanks a bunch,
<br>
Andrej
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1051.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1051.php">Brice Goglin: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1053.php">Andrej Prsa: "Re: [hwloc-users] hwloc error"</a>
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
