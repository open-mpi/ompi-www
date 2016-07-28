<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 24 22:07:49 2008" -->
<!-- isoreceived="20081225030749" -->
<!-- sent="Wed, 24 Dec 2008 22:07:44 -0500" -->
<!-- isosent="20081225030744" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="ea86ce220812241907g5ff79125w291e98b4d2e1c457_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-24 22:07:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7608.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For your runs with Open MPI over InfiniBand, try using openib,sm,self
<br>
for the BTL setting, so that shared memory communications are used
<br>
within a node.  It would give us another datapoint to help diagnose
<br>
the problem.  As for other things we would need to help diagnose the
<br>
problem, please follow the advice on this FAQ entry, and the help page:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p>On Wed, Dec 24, 2008 at 5:55 AM, Biagio Lucini &lt;B.Lucini_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Biagio Lucini wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new to this list, where I hope to find a solution for a problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with Infiniband interconnects that I use and administer at the same
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you use OpenMPI version that is included in OFED ? Did you was able
</span><br>
<span class="quotelev2">&gt;&gt; to run basic OFED/OMPI tests/benchmarks between two nodes ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes to both questions: the OMPI version is the one that comes with OFED
</span><br>
<span class="quotelev1">&gt; (1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1 (which is
</span><br>
<span class="quotelev1">&gt; more than basic, as far as I can see) reports for the last test:
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
<span class="quotelev1">&gt;         1000        22.93        22.95        22.94
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
<span class="quotelev1">&gt;         1000       191.30       191.42       191.34
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; =========================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Biagio Lucini
</span><br>
<span class="quotelev1">&gt; Department of Physics, Swansea University
</span><br>
<span class="quotelev1">&gt; Singleton Park, SA2 8PP Swansea (UK)
</span><br>
<span class="quotelev1">&gt; Tel. +44 (0)1792 602284
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================================================
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
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7601.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7599.php">Joe Landman: "Re: [OMPI users] mpiblast + openmpi + gridengine job faila to run"</a>
<li><strong>In reply to:</strong> <a href="7594.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7604.php">Jeff Squyres: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7608.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
