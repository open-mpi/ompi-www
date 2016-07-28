<?
$subject_val = "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 26 08:46:38 2011" -->
<!-- isoreceived="20110926124638" -->
<!-- sent="Mon, 26 Sep 2011 15:46:29 +0300" -->
<!-- isosent="20110926124629" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="4E807425.5030406_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E80378B.5080601_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-26 08:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Previous message:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17737.php">Sébastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17737.php">Sébastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 26-Sep-11 11:27 AM, Yevgeny Kliteynik wrote:
<br>
<span class="quotelev1">&gt; On 22-Sep-11 12:09 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 21, 2011, at 4:24 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With 11 ibv_rc_pingpong's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://pastebin.com/85sPcA47">http://pastebin.com/85sPcA47</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Code to do that =&gt;   <a href="https://gist.github.com/1233173">https://gist.github.com/1233173</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Latencies are around 20 microseconds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to imply that the network is to blame for the higher latency...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting... I'm getting the same latency with ibv_rc_pingpong.
</span><br>
<span class="quotelev1">&gt; I get 8.5 usec for a single ping-pong.
</span><br>
<p>BTW, I've just checked this with performance guys - ibv_rc_pingpong
<br>
is not used for performance measurement but only as IB network
<br>
sanity check, therefore it was never meant to give optimal performance.
<br>
<p>Use ib_write_lat instead.
<br>
<p>-- YK
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Please run 'ibclearcounters' to reset fabric counters, then
</span><br>
<span class="quotelev1">&gt; ibdiagnet to make sure that the fabric is clean.
</span><br>
<span class="quotelev1">&gt; If you have 4x QDR cluster, run ibdiagnet as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ibdiagnet --ls 10 --lw 4x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Check that you don't have any errors/warnings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then please run your script with ib_write_lat instead of ibv_rc_pingpong.
</span><br>
<span class="quotelev1">&gt; Just replace the command in the script and the rest would be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the fabric is clean, you're supposed to get typical
</span><br>
<span class="quotelev1">&gt; latency of ~1.4 usec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- YK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I.e., if you run the same pattern with MPI processes and get 20us latency, that would tend to imply that the network itself is not performing well with that IO pattern.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My job seems to do well so far with ofud !
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [sboisver12_at_colosse2 ray]$ qstat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3047460 0.55384 fish-Assem sboisver12   r     09/21/2011 15:02:25 med_at_r104-n58                     256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would still be suspicious -- ofud is not well tested, and it can definitely hang if there are network drops.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17437.php">Rocky Dunlap: "[OMPI users] VampirTrace integration with VT_GNU_NMFILE environment variable"</a>
<li><strong>Previous message:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>In reply to:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17737.php">Sébastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17737.php">Sébastien Boisvert: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
