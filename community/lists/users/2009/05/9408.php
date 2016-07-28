<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 12:46:02 2009" -->
<!-- isoreceived="20090520164602" -->
<!-- sent="Wed, 20 May 2009 19:45:53 +0300" -->
<!-- isosent="20090520164553" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A1433C1.5030804_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200905201755.58146.cap_at_nsc.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] scaling problem with openmpi<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 12:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Disabling basic_linear seems like a good idea but your config file sets the 
</span><br>
<span class="quotelev1">&gt; cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems to result 
</span><br>
<span class="quotelev1">&gt; in a message size of that value divided by the number of ranks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my testing bruck seems to win clearly (at least for 64 ranks on my IB) up 
</span><br>
<span class="quotelev1">&gt; to 2048. Hence, the following line may be better:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  131072 2 0 0 # switch to pair wise for size 128K/nranks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Disclaimer: I guess this could differ quite a bit for nranks!=64 and different 
</span><br>
<span class="quotelev1">&gt; btls.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Sounds strange for me. From the code is looks that we take the threshold as
<br>
is without dividing by number of ranks.
<br>
<p><p>Pasha,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9409.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
