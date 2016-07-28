<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 05:57:31 2008" -->
<!-- isoreceived="20081224105731" -->
<!-- sent="Wed, 24 Dec 2008 10:55:36 +0000" -->
<!-- isosent="20081224105536" -->
<!-- name="Biagio Lucini" -->
<!-- email="B.Lucini_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="49521528.4020101_at_swansea.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4951EDCF.6000107_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Biagio Lucini (<em>B.Lucini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 05:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Biagio Lucini wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to this list, where I hope to find a solution for a problem
</span><br>
<span class="quotelev2">&gt;&gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster
</span><br>
<span class="quotelev2">&gt;&gt; with Infiniband interconnects that I use and administer at the same
</span><br>
<span class="quotelev2">&gt;&gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and
</span><br>
<span class="quotelev2">&gt;&gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev1">&gt; Do you use OpenMPI version that is included in OFED ? Did you was able
</span><br>
<span class="quotelev1">&gt; to run basic OFED/OMPI tests/benchmarks between two nodes ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi,
<br>
<p>yes to both questions: the OMPI version is the one that comes with OFED 
<br>
(1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1 (which is 
<br>
more than basic, as far as I can see) reports for the last test:
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking Barrier
<br>
# #processes = 6
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000        22.93        22.95        22.94
<br>
<p><p>for the openib,self btl (6 processes, all processes on different nodes)
<br>
and
<br>
<p>#---------------------------------------------------
<br>
# Benchmarking Barrier
<br>
# #processes = 6
<br>
#---------------------------------------------------
<br>
&nbsp;&nbsp;#repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1000       191.30       191.42       191.34
<br>
<p>for the tcp,self btl (same test)
<br>
<p>No anomalies for other tests (ping-pong, all-to-all etc.)
<br>
<p>Thanks,
<br>
Biagio
<br>
<p><p><pre>
-- 
=========================================================
Dr. Biagio Lucini				
Department of Physics, Swansea University
Singleton Park, SA2 8PP Swansea (UK)
Tel. +44 (0)1792 602284
=========================================================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7595.php">Teige,  Scott W: "[OMPI users] BTL question"</a>
<li><strong>Previous message:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>In reply to:</strong> <a href="7593.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7598.php">Pavel Shamis (Pasha): "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/01/7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
