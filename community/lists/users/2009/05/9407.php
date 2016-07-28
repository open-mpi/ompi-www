<?
$subject_val = "Re: [OMPI users] scaling problem with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 11:56:02 2009" -->
<!-- isoreceived="20090520155602" -->
<!-- sent="Wed, 20 May 2009 17:55:54 +0200" -->
<!-- isosent="20090520155554" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] scaling problem with openmpi" -->
<!-- id="200905201755.58146.cap_at_nsc.liu.se" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4A140922.1060804_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-20 11:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>In reply to:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wednesday 20 May 2009, Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev2">&gt; &gt; With the file Pavel has provided things have changed to the following.
</span><br>
<span class="quotelev2">&gt; &gt; (maybe someone can confirm)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If message size &lt; 8192
</span><br>
<span class="quotelev2">&gt; &gt; bruck
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt; pairwise
</span><br>
<span class="quotelev2">&gt; &gt; end
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right here. Target of my conf file is disable basic_linear for
</span><br>
<span class="quotelev1">&gt; medium message side.
</span><br>
<p>Disabling basic_linear seems like a good idea but your config file sets the 
<br>
cut-off at 128 Bytes for 64-ranks (the field you set to 8192 seems to result 
<br>
in a message size of that value divided by the number of ranks).
<br>
<p>In my testing bruck seems to win clearly (at least for 64 ranks on my IB) up 
<br>
to 2048. Hence, the following line may be better:
<br>
<p>&nbsp;131072 2 0 0 # switch to pair wise for size 128K/nranks
<br>
<p>Disclaimer: I guess this could differ quite a bit for nranks!=64 and different 
<br>
btls.
<br>
<p>Here are some figures for this part of the package size range:
<br>
<p>all_bruck
<br>
bw for   10      x 10 B :  13.7 Mbytes/s         time was: 922.0 &#239;&#191;&#189;s
<br>
bw for   10      x 500 B :  45.9 Mbytes/s        time was:  13.7 ms
<br>
bw for   10      x 1000 B : 122.7 Mbytes/s       time was:  10.3 ms
<br>
bw for   10      x 1500 B :  86.9 Mbytes/s       time was:  21.8 ms
<br>
bw for   10      x 2000 B : 120.1 Mbytes/s       time was:  21.0 ms
<br>
bw for   10      x 2047 B :  92.6 Mbytes/s       time was:  27.9 ms
<br>
bw for   10      x 2048 B : 107.3 Mbytes/s       time was:  24.1 ms
<br>
bw for   10      x 2400 B :  93.7 Mbytes/s       time was:  32.3 ms
<br>
bw for   10      x 2800 B :  73.0 Mbytes/s       time was:  48.3 ms
<br>
bw for   10      x 2900 B :  79.5 Mbytes/s       time was:  45.9 ms
<br>
bw for   10      x 2925 B :  89.3 Mbytes/s       time was:  41.3 ms
<br>
bw for   10      x 2950 B :  72.7 Mbytes/s       time was:  51.1 ms
<br>
bw for   10      x 2975 B :  75.2 Mbytes/s       time was:  49.8 ms
<br>
bw for   10      x 3000 B :  74.9 Mbytes/s       time was:  50.5 ms
<br>
bw for   10      x 3100 B :  95.9 Mbytes/s       time was:  40.7 ms
<br>
totaltime was: 479.5 ms
<br>
all_pair
<br>
bw for   10      x 10 B : 414.2 kbytes/s         time was:  30.4 ms
<br>
bw for   10      x 500 B :  19.8 Mbytes/s        time was:  31.9 ms
<br>
bw for   10      x 1000 B :  43.3 Mbytes/s       time was:  29.1 ms
<br>
bw for   10      x 1500 B :  63.3 Mbytes/s       time was:  29.9 ms
<br>
bw for   10      x 2000 B :  81.2 Mbytes/s       time was:  31.0 ms
<br>
bw for   10      x 2047 B :  82.3 Mbytes/s       time was:  31.3 ms
<br>
bw for   10      x 2048 B :  83.0 Mbytes/s       time was:  31.1 ms
<br>
bw for   10      x 2400 B :  93.6 Mbytes/s       time was:  32.3 ms
<br>
bw for   10      x 2800 B : 105.0 Mbytes/s       time was:  33.6 ms
<br>
bw for   10      x 2900 B : 107.7 Mbytes/s       time was:  33.9 ms
<br>
bw for   10      x 2925 B : 108.1 Mbytes/s       time was:  34.1 ms
<br>
bw for   10      x 2950 B : 109.6 Mbytes/s       time was:  33.9 ms
<br>
bw for   10      x 2975 B : 111.1 Mbytes/s       time was:  33.7 ms
<br>
bw for   10      x 3000 B : 112.1 Mbytes/s       time was:  33.7 ms
<br>
bw for   10      x 3100 B : 114.5 Mbytes/s       time was:  34.1 ms
<br>
totaltime was: 484.1 ms
<br>
bruckto2k_pair
<br>
bw for   10      x 10 B :  11.9 Mbytes/s         time was:   1.1 ms
<br>
bw for   10      x 500 B : 100.3 Mbytes/s        time was:   6.3 ms
<br>
bw for   10      x 1000 B : 115.9 Mbytes/s       time was:  10.9 ms
<br>
bw for   10      x 1500 B : 117.2 Mbytes/s       time was:  16.1 ms
<br>
bw for   10      x 2000 B :  95.7 Mbytes/s       time was:  26.3 ms
<br>
bw for   10      x 2047 B :  96.6 Mbytes/s       time was:  26.7 ms
<br>
bw for   10      x 2048 B :  82.2 Mbytes/s       time was:  31.4 ms
<br>
bw for   10      x 2400 B :  94.1 Mbytes/s       time was:  32.1 ms
<br>
bw for   10      x 2800 B : 105.6 Mbytes/s       time was:  33.4 ms
<br>
bw for   10      x 2900 B : 108.4 Mbytes/s       time was:  33.7 ms
<br>
bw for   10      x 2925 B : 108.3 Mbytes/s       time was:  34.0 ms
<br>
bw for   10      x 2950 B : 109.9 Mbytes/s       time was:  33.8 ms
<br>
bw for   10      x 2975 B : 111.5 Mbytes/s       time was:  33.6 ms
<br>
bw for   10      x 3000 B : 108.3 Mbytes/s       time was:  34.9 ms
<br>
bw for   10      x 3100 B : 114.7 Mbytes/s       time was:  34.0 ms
<br>
totaltime was: 388.4 ms
<br>
<p>These figures were run on a freshly compiled OpenMPI-1.3.2. The numbers for 
<br>
bruck at smalla package sizes vary a bit from run to run.
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; Pasha.
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9407/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Previous message:</strong> <a href="9406.php">Lippert, Ross: "Re: [OMPI users] FW: hanging after many comm create/destroy's"</a>
<li><strong>In reply to:</strong> <a href="9402.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
<li><strong>Reply:</strong> <a href="9408.php">Pavel Shamis (Pasha): "Re: [OMPI users] scaling problem with openmpi"</a>
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
