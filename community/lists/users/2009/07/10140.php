<?
$subject_val = "Re: [OMPI users] Using dual infiniband HCA cards";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 07:05:34 2009" -->
<!-- isoreceived="20090730110534" -->
<!-- sent="Thu, 30 Jul 2009 14:05:26 +0300" -->
<!-- isosent="20090730110526" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using dual infiniband HCA cards" -->
<!-- id="4A717E76.4020402_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A71497C.3060800_at_higgs.gen.tr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using dual infiniband HCA cards<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 07:05:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>In reply to:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have a computational cluster which is  consisting of 8 HP Proliant
</span><br>
<span class="quotelev1">&gt; ML370G5 with 32GB ram.
</span><br>
<span class="quotelev1">&gt; Each node has  a Melanox single port infiniband DDR HCA  card (20Gbit/s)
</span><br>
<span class="quotelev1">&gt; and connected each other through
</span><br>
<span class="quotelev1">&gt; a Voltaire ISR9024D-M DDR infiniband switch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now we want to increase the bandwidth to 40GBit/s adding second
</span><br>
<span class="quotelev1">&gt; infiniband cards to each node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to ask if this is possible, if yes how?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
You need to check if it possible to add one more Infiniband card to
<br>
your motherboard. As well you need verify that you PCI-EX link and the 
<br>
chipset
<br>
will allow to utilize resources of 2 HCAs.  
<br>
You may temporary take 2 hca from some of your machines
<br>
and add them to another pair machines. It will allow to you make some 
<br>
benchmarking with 2 hcas.
<br>
<p>&nbsp;From driver and OpenMPI perspective 2 (and more) hca configuration is 
<br>
supported by default.
<br>
<p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10141.php">David Doria: "Re: [OMPI users] Test works with 3 computers, but not 4?"</a>
<li><strong>Previous message:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
<li><strong>In reply to:</strong> <a href="10139.php">Sefa Arslan: "[OMPI users] Using dual infiniband HCA cards"</a>
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
