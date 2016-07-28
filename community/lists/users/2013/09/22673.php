<?
$subject_val = "[OMPI users] FT problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 10:42:30 2013" -->
<!-- isoreceived="20130918144230" -->
<!-- sent="Wed, 18 Sep 2013 16:42:29 +0200" -->
<!-- isosent="20130918144229" -->
<!-- name="basma a.azeem" -->
<!-- email="basmaabdelazeem_at_[hidden]" -->
<!-- subject="[OMPI users] FT problem" -->
<!-- id="DUB115-W43FA42347D423BD78BB4D3AB200_at_phx.gbl" -->
<!-- charset="windows-1256" -->
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
<strong>Subject:</strong> [OMPI users] FT problem<br>
<strong>From:</strong> basma a.azeem (<em>basmaabdelazeem_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 10:42:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
<li><strong>Previous message:</strong> <a href="22672.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<li><strong>Reply:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
i am using openmpi-1.6.1 
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22674.php">justa tester tester: "[OMPI users] OPEN MPI error"</a>
<li><strong>Previous message:</strong> <a href="22672.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
<li><strong>Reply:</strong> <a href="22709.php">basma a.azeem: "[OMPI users] FW: FT problem"</a>
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
