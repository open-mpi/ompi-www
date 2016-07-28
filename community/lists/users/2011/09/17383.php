<?
$subject_val = "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 17:09:47 2011" -->
<!-- isoreceived="20110921210947" -->
<!-- sent="Wed, 21 Sep 2011 17:09:41 -0400" -->
<!-- isosent="20110921210941" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="D554A785-5CF3-4512-819A-D1E70372322A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F267700700_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 17:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17382.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17382.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 21, 2011, at 4:24 PM, S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With 11 ibv_rc_pingpong's
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://pastebin.com/85sPcA47">http://pastebin.com/85sPcA47</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Code to do that =&gt; <a href="https://gist.github.com/1233173">https://gist.github.com/1233173</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Latencies are around 20 microseconds.
</span><br>
<p>This seems to imply that the network is to blame for the higher latency...?
<br>
<p>I.e., if you run the same pattern with MPI processes and get 20us latency, that would tend to imply that the network itself is not performing well with that IO pattern.
<br>
<p><span class="quotelev1">&gt; My job seems to do well so far with ofud !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [sboisver12_at_colosse2 ray]$ qstat
</span><br>
<span class="quotelev1">&gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 3047460 0.55384 fish-Assem sboisver12   r     09/21/2011 15:02:25 med_at_r104-n58                     256   
</span><br>
<p>I would still be suspicious -- ofud is not well tested, and it can definitely hang if there are network drops.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>Previous message:</strong> <a href="17382.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17382.php">S&#233;bastien Boisvert: "[OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17385.php">Sébastien Boisvert: "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
