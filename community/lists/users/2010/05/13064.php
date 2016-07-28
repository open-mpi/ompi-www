<?
$subject_val = "Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 17 14:34:23 2010" -->
<!-- isoreceived="20100517183423" -->
<!-- sent="Mon, 17 May 2010 14:34:18 -0400" -->
<!-- isosent="20100517183418" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task" -->
<!-- id="3A154FEE-6435-4D2A-9CFD-83B995564D99_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100517113823.066dfdad_at_zhejiang.tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about OpenMPI automatically spawns multiple threads for each task<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-17 14:34:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13065.php">awwase: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13063.php">Jeff Squyres: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI's OpenFabrics support will spawn up to two additional blocking threads (they wait for asynchronous verbs events of various flavors).  They consume a few resources, but typically are not used much.  They don't cause any noticeable change in performance.
<br>
<p><p>On May 17, 2010, at 12:38 PM, Ping Luo wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I found when running am MPI program that is linked against OpenMPI library,
</span><br>
<span class="quotelev1">&gt; for each MPI task, OpenMPI will spawn three threads, as the sample shown
</span><br>
<span class="quotelev1">&gt; below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ps axms
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 13536  3565 0000000000000000                -                -                - -    pts/14     0:00 mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000000000 0000000000000000 0000000180015ee2 S+   -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536  3566 0000000000000000                -                -                - -    pts/14     0:00 ./a.out
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000010000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536  3567 0000000000000000                -                -                - -    pts/14     0:00 ./a.out
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000010000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; 13536     - 0000000000000000 0000000000000000 0000000000000006 00000001800104e0 SLl+ -          0:00 -
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OpenMPI always spawn three threads for each MPI task by default? Can the number
</span><br>
<span class="quotelev1">&gt; of threads be changed? Why is it implemented this way? Is there any case that it will
</span><br>
<span class="quotelev1">&gt; degrade performance because of over-subscription?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ping Luo
</span><br>
<span class="quotelev1">&gt; 105 CSA, Building #517
</span><br>
<span class="quotelev1">&gt; Texas A&amp;M University
</span><br>
<span class="quotelev1">&gt; Email: pingluo_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Phone: (979)862-3107
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="13065.php">awwase: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>Previous message:</strong> <a href="13063.php">Jeff Squyres: "Re: [OMPI users] Enabling IPsec"</a>
<li><strong>In reply to:</strong> <a href="13061.php">Ping Luo: "[OMPI users] Question about OpenMPI automatically spawns multiple threads for each task"</a>
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
