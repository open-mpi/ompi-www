<?
$subject_val = "[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 21 21:41:43 2011" -->
<!-- isoreceived="20110922014143" -->
<!-- sent="Wed, 21 Sep 2011 21:39:49 -0400" -->
<!-- isosent="20110922013949" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F267700701_at_EXCH-MBX-F.ulaval.ca" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D554A785-5CF3-4512-819A-D1E70372322A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] RE : RE : RE : Latency of 250 microseconds with	Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-21 21:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17386.php">Dmitry N. Mikushin: "[OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I would still be suspicious -- ofud is not well tested, and it can definitely hang if there are network drops.
</span><br>
<p>It hanged.
<br>
<p><p><span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de Jeff Squyres [jsquyres_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 21 septembre 2011 17:09
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] RE : RE : Latency of 250 microseconds with     Open-MPI        1.4.3, Mellanox Infiniband and 256 MPI ranks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 21, 2011, at 4:24 PM, S&#233;bastien Boisvert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What happens if you run 2 ibv_rc_pingpong's on each node?  Or N ibv_rc_pingpongs?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 11 ibv_rc_pingpong's
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://pastebin.com/85sPcA47">http://pastebin.com/85sPcA47</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Code to do that =&gt; <a href="https://gist.github.com/1233173">https://gist.github.com/1233173</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Latencies are around 20 microseconds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This seems to imply that the network is to blame for the higher latency...?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., if you run the same pattern with MPI processes and get 20us latency, that would tend to imply that the network itself is not performing well with that IO pattern.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My job seems to do well so far with ofud !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [sboisver12_at_colosse2 ray]$ qstat
</span><br>
<span class="quotelev2">&gt;&gt; job-ID  prior   name       user         state submit/start at     queue                          slots ja-task-ID
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 3047460 0.55384 fish-Assem sboisver12   r     09/21/2011 15:02:25 med_at_r104-n58                     256
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would still be suspicious -- ofud is not well tested, and it can definitely hang if there are network drops.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17386.php">Dmitry N. Mikushin: "[OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17384.php">Shiqing Fan: "Re: [OMPI users] Building with thread support on Windows?"</a>
<li><strong>In reply to:</strong> <a href="17383.php">Jeff Squyres: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with Open-MPI	1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17435.php">Yevgeny Kliteynik: "Re: [OMPI users] RE : RE : Latency of 250 microseconds with	Open-MPI 1.4.3, Mellanox Infiniband and 256 MPI ranks"</a>
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
