<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 09:04:35 2008" -->
<!-- isoreceived="20081224140435" -->
<!-- sent="Wed, 24 Dec 2008 16:04:21 +0200" -->
<!-- isosent="20081224140421" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pashash_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="49524165.7030706_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49521528.4020101_at_swansea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with openmpi and infiniband<br>
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pashash_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 09:04:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>In reply to:</strong> <a href="7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the basic test run the installation is ok. So what happens when you 
<br>
try to run your application ? What is command line ? What is the error 
<br>
message ? do you run the application on the same set of machines with 
<br>
the same command line as IMB ?
<br>
Pasha
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes to both questions: the OMPI version is the one that comes with 
</span><br>
<span class="quotelev1">&gt; OFED (1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1 
</span><br>
<span class="quotelev1">&gt; (which is more than basic, as far as I can see) reports for the last 
</span><br>
<span class="quotelev1">&gt; test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Barrier
</span><br>
<span class="quotelev1">&gt; # #processes = 6
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000        22.93        22.95        22.94
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the openib,self btl (6 processes, all processes on different nodes)
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking Barrier
</span><br>
<span class="quotelev1">&gt; # #processes = 6
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000       191.30       191.42       191.34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for the tcp,self btl (same test)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No anomalies for other tests (ping-pong, all-to-all etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Biagio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>Previous message:</strong> <a href="7597.php">Pavel Shamis (Pasha): "Re: [OMPI users] BTL question"</a>
<li><strong>In reply to:</strong> <a href="7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
