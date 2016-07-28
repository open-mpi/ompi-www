<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 09:44:14 2009" -->
<!-- isoreceived="20090520134414" -->
<!-- sent="Wed, 20 May 2009 16:44:02 +0300" -->
<!-- isosent="20090520134402" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="4A140922.1060804_at_dev.mellanox.co.il" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A13FE75.1040102_at_Sun.COM" -->
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
<strong>Date:</strong> 2009-05-20 09:44:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The correct MCA parameters are the following:
</span><br>
<span class="quotelev1">&gt; -mca coll_tuned_use_dynamic_rules 1
</span><br>
<span class="quotelev1">&gt; -mca coll_tuned_dynamic_rules_filename ./dyn_rules
</span><br>
Ohh..it was my mistake....
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also run the following command:
</span><br>
<span class="quotelev1">&gt; ompi_info -mca coll_tuned_use_dynamic_rules 1 -param coll tuned
</span><br>
<span class="quotelev1">&gt; This will give some insight into all the various algorithms that make 
</span><br>
<span class="quotelev1">&gt; up the tuned collectives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I am understanding what is happening, it looks like the original 
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall made use of three algorithms. (You can look in 
</span><br>
<span class="quotelev1">&gt; coll_tuned_decision_fixed.c)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If message size &lt; 200 or communicator size &gt; 12
</span><br>
<span class="quotelev1">&gt; bruck
</span><br>
<span class="quotelev1">&gt; else if message size &lt; 3000
</span><br>
<span class="quotelev1">&gt; basic linear
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; pairwise
</span><br>
<span class="quotelev1">&gt; end
</span><br>
Yep it is correct.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the file Pavel has provided things have changed to the following. 
</span><br>
<span class="quotelev1">&gt; (maybe someone can confirm)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If message size &lt; 8192
</span><br>
<span class="quotelev1">&gt; bruck
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt; pairwise
</span><br>
<span class="quotelev1">&gt; end
</span><br>
You are right here. Target of my conf file is disable basic_linear for 
<br>
medium message side.
<br>
<p><p>Pasha.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9403.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>In reply to:</strong> <a href="9401.php">Rolf Vandevaart: "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9407.php">Peter Kjellstrom: "Re: [OMPI users] scaling problem with openmpi"</a>
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
