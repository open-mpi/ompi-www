<?
$subject_val = "[OMPI users] FW: FT problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 21 10:51:51 2013" -->
<!-- isoreceived="20130921145151" -->
<!-- sent="Sat, 21 Sep 2013 16:51:50 +0200" -->
<!-- isosent="20130921145150" -->
<!-- name="basma a.azeem" -->
<!-- email="basmaabdelazeem_at_[hidden]" -->
<!-- subject="[OMPI users] FW: FT problem" -->
<!-- id="DUB115-W82A67B4F41ABBF0DDFA205AB230_at_phx.gbl" -->
<!-- charset="windows-1256" -->
<!-- inreplyto="DUB115-W43FA42347D423BD78BB4D3AB200_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] FW: FT problem<br>
<strong>From:</strong> basma a.azeem (<em>basmaabdelazeem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-21 10:51:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>In reply to:</strong> <a href="22673.php">basma a.azeem: "[OMPI users] FT problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22713.php">Ralph Castain: "Re: [OMPI users] FT problem"</a>
<li><strong>Reply:</strong> <a href="22713.php">Ralph Castain: "Re: [OMPI users] FT problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any Suggestions
<br>

<br>

<br>
From: basmaabdelazeem_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: FT problem
<br>
Date: Wed, 18 Sep 2013 16:42:29 +0200
<br>

<br>
<p><p><p>i am using openmpi-1.6.1 
<br>
i need to try checkpoint restart ( self , blcr )
<br>
after i installed openmpi i had the following in my installation folder :
<br>

<br>
bin\ ompi-checkpoint
<br>
bin\ompi-restart
<br>

<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>lib\openmpi\mca_crs_self.la
<br>
<p><p>lib\openmpi\mca_crs_self.so
<br>
lib\openmpi\mca_crs_blcr.la
<br>
lib\openmpi\mca_crs_blcr.so
<br>
although i have:
<br>

<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p>ompi_info |
<br>
grep FT 
<br>
<p><p>&nbsp;&nbsp;FT Checkpoint support: yes
<br>
(checkpoint thread: yes) 
<br>
<p>
<br>
<p>ompi_info | grep
<br>
crs 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA crs: none (MCA
<br>
v2.0, API v2.0, Component v1.6.1)
<br>
<p>
<br>
when i try to use checkpoint it failed:
<br>

<br>
basma_at_basma-Satellite-A500:~$  /OpenMP/openmpi-1.6.1/builddir/bin/mpirun -np 3  -am ft-enable-cr  /home/basma/NPB3.3/NPB3.3/NPB3.3-OMP/bin/lu.A
<br>

<br>

<br>
&nbsp;NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
<br>

<br>
&nbsp;Size:   64x  64x  64
<br>
&nbsp;Iterations:                    250
<br>
&nbsp;Number of available threads:     4
<br>

<br>
&nbsp;NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
<br>

<br>
&nbsp;Size:   64x  64x  64
<br>
&nbsp;Iterations:                    250
<br>
&nbsp;Number of available threads:     4
<br>

<br>
&nbsp;NAS Parallel Benchmarks (NPB3.3-OMP) - LU Benchmark
<br>

<br>
&nbsp;Size:   64x  64x  64
<br>
&nbsp;Iterations:                    250
<br>
&nbsp;Number of available threads:     4
<br>

<br>
&nbsp;Time step    1
<br>
&nbsp;Time step    1
<br>
&nbsp;Time step    1
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 2917 on node basma-Satellite-A500 exited on signal 10 (User defined signal 1).
<br>
--------------------------------------------------------------------------
<br>
basma_at_basma-Satellite-A500:~$ 
<br>

<br>
this resulted when i run this command from shell 2 :
<br>
basma_at_basma-Satellite-A500:~$ /OpenMP/openmpi-1.6.1/builddir/bin/ompi-checkpoint 2916
<br>

<br>
what i did wrong?
<br>

<br>
thank you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22710.php">Siegmar Gross: "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>Previous message:</strong> <a href="22708.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Error with &quot;make check&quot; in openmpi-1.7.3a1r29220"</a>
<li><strong>In reply to:</strong> <a href="22673.php">basma a.azeem: "[OMPI users] FT problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22713.php">Ralph Castain: "Re: [OMPI users] FT problem"</a>
<li><strong>Reply:</strong> <a href="22713.php">Ralph Castain: "Re: [OMPI users] FT problem"</a>
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
