<?
$subject_val = "Re: [OMPI users] FT problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 20:52:04 2013" -->
<!-- isoreceived="20130922005204" -->
<!-- sent="Sat, 21 Sep 2013 17:52:00 -0700" -->
<!-- isosent="20130922005200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] FT problem" -->
<!-- id="38ADAB12-B4DC-454A-A66E-BC77AB0340F8_at_open-mpi.org" -->
<!-- charset="windows-1256" -->
<!-- inreplyto="DUB115-W82A67B4F41ABBF0DDFA205AB230_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] FT problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 20:52:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>In reply to:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not really - the person who wrote that code for his PhD thesis has since become a professor and rarely has time to respond on the mailing list, nor to maintain the code. So I'm afraid we don't have anyone who knows much about it any more.
<br>
<p>I plan to rework the checkpoint support in upcoming months, but can't say when that will occur.
<br>
<p>On Sep 21, 2013, at 7:51 AM, basma a.azeem &lt;basmaabdelazeem_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Any Suggestions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: basmaabdelazeem_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: FT problem
</span><br>
<span class="quotelev1">&gt; Date: Wed, 18 Sep 2013 16:42:29 +0200
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i am using openmpi-1.6.1 
</span><br>
<span class="quotelev1">&gt; i need to try checkpoint restart ( self , blcr )
</span><br>
<span class="quotelev1">&gt; after i installed openmpi i had the following in my installation folder :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bin\ ompi-checkpoint
</span><br>
<span class="quotelev1">&gt; bin\ompi-restart
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lib\openmpi\mca_crs_self.la
</span><br>
<span class="quotelev1">&gt; lib\openmpi\mca_crs_self.so
</span><br>
<span class="quotelev1">&gt; lib\openmpi\mca_crs_blcr.la
</span><br>
<span class="quotelev1">&gt; lib\openmpi\mca_crs_blcr.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; although i have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep FT 
</span><br>
<span class="quotelev1">&gt; FT Checkpoint support: yes (checkpoint thread: yes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info | grep crs
</span><br>
<span class="quotelev1">&gt; MCA crs: none (MCA v2.0, API v2.0, Component v1.6.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when i try to use checkpoint it failed:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; basma_at_basma-Satellite-A500:~$  /OpenMP/openmpi-1.6.1/builddir/bin/mpirun -np 3  -am ft-enable-cr  /home/basma/NPB3.3/NPB3.3/NPB3.3-OMP/bin/lu.A
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Size:   64x  64x  64
</span><br>
<span class="quotelev1">&gt;  Iterations:                    250
</span><br>
<span class="quotelev1">&gt;  Number of available threads:     4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Size:   64x  64x  64
</span><br>
<span class="quotelev1">&gt;  Iterations:                    250
</span><br>
<span class="quotelev1">&gt;  Number of available threads:     4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Size:   64x  64x  64
</span><br>
<span class="quotelev1">&gt;  Iterations:                    250
</span><br>
<span class="quotelev1">&gt;  Number of available threads:     4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Time step    1
</span><br>
<span class="quotelev1">&gt;  Time step    1
</span><br>
<span class="quotelev1">&gt;  Time step    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 2917 on node basma-Satellite-A500 exited on signal 10 (User defined signal 1).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; basma_at_basma-Satellite-A500:~$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this resulted when i run this command from shell 2 :
</span><br>
<span class="quotelev1">&gt; basma_at_basma-Satellite-A500:~$ /OpenMP/openmpi-1.6.1/builddir/bin/ompi-checkpoint 2916
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; what i did wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thank you
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22713/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22714.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Previous message:</strong> <a href="22712.php">Siegmar Gross: "[OMPI users] &quot;make check&quot; hangs with openmpi-1.7.3a1r29220 on Linux"</a>
<li><strong>In reply to:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
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
