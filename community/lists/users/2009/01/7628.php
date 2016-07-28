<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan  4 01:11:16 2009" -->
<!-- isoreceived="20090104061116" -->
<!-- sent="Sun, 4 Jan 2009 08:11:11 +0200" -->
<!-- isosent="20090104061111" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="453d39990901032211s24fe4446s3a641daf56de0960_at_mail.gmail.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-04 01:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7627.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  just to make sure,
<br>
<p>you wrote in the previous mail that you tested IMB-MPI1 and it
<br>
&quot;reports for the last test&quot; ...., and the results are for
<br>
&quot;processes=6&quot;, since you have 4 and 8 core machines, this test could
<br>
be run on the same 8 core machine over shared memory and not over
<br>
Infiniband, as you suspected.
<br>
<p>You can rerun the IMB-MPI1 test with -mca btl self,openib to be sure
<br>
that the test does not use shared memory or tcp.
<br>
<p>Lenny.
<br>
<p><p><p>On 12/24/08, Biagio Lucini &lt;B.Lucini_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Biagio Lucini wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am new to this list, where I hope to find a solution for a problem
</span><br>
<span class="quotelev3">&gt; &gt; &gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with Infiniband interconnects that I use and administer at the same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you use OpenMPI version that is included in OFED ? Did you was able
</span><br>
<span class="quotelev2">&gt; &gt; to run basic OFED/OMPI tests/benchmarks between two nodes ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  yes to both questions: the OMPI version is the one that comes with OFED
</span><br>
<span class="quotelev1">&gt; (1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1 (which is
</span><br>
<span class="quotelev1">&gt; more than basic, as far as I can see) reports for the last test:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  # Benchmarking Barrier
</span><br>
<span class="quotelev1">&gt;  # #processes = 6
</span><br>
<span class="quotelev1">&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000        22.93        22.95        22.94
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for the openib,self btl (6 processes, all processes on different nodes)
</span><br>
<span class="quotelev1">&gt;  and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  # Benchmarking Barrier
</span><br>
<span class="quotelev1">&gt;  # #processes = 6
</span><br>
<span class="quotelev1">&gt;  #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev1">&gt;          1000       191.30       191.42       191.34
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  for the tcp,self btl (same test)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  No anomalies for other tests (ping-pong, all-to-all etc.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;  Biagio
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt;  =========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Dr. Biagio Lucini
</span><br>
<span class="quotelev1">&gt;  Department of Physics, Swansea University
</span><br>
<span class="quotelev1">&gt;  Singleton Park, SA2 8PP Swansea (UK)
</span><br>
<span class="quotelev1">&gt;  Tel. +44 (0)1792 602284
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  =========================================================
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  users mailing list
</span><br>
<span class="quotelev1">&gt;  users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7629.php">Thomas Ropars: "[OMPI users] using ompi-server on a single node"</a>
<li><strong>Previous message:</strong> <a href="7627.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7662.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
