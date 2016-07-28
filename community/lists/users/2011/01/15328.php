<?
$subject_val = "Re: [OMPI users] mixing send and bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  8 08:01:20 2011" -->
<!-- isoreceived="20110108130120" -->
<!-- sent="Sat, 8 Jan 2011 13:01:12 +0000" -->
<!-- isosent="20110108130112" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mixing send and bcast" -->
<!-- id="8C280AD8-901E-4062-A560-776C07EEF12E_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000001cbaf2c$5af5ef80$10e1ce80$_at_org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mixing send and bcast<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-08 08:01:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<li><strong>In reply to:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8 Jan 2011, at 12:05, Hicham Mouline wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Will MPI_Probe return that there is a message pending reception if the sender MPI_Bcast a message?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; Is the only way to receive a broadcast from the root is to call MPI_BCast in the slave?
</span><br>
<p>Yes.
<br>
<p>Broadcast and the other collective operations are just that, &quot;collective&quot; and have to be called from all ranks in a communicator with the same parameters and in the same order.
<br>
<p>Ashley.
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15329.php">Michael Di Domenico: "[OMPI users] CQ errors"</a>
<li><strong>Previous message:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<li><strong>In reply to:</strong> <a href="15327.php">Hicham Mouline: "[OMPI users] mixing send and bcast"</a>
<!-- nextthread="start" -->
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
