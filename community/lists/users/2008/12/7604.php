<?
$subject_val = "Re: [OMPI users] Problem with openmpi and infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 25 08:04:28 2008" -->
<!-- isoreceived="20081225130428" -->
<!-- sent="Thu, 25 Dec 2008 08:04:23 -0500" -->
<!-- isosent="20081225130423" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with openmpi and infiniband" -->
<!-- id="855F528A-EF3A-47CB-B178-F6EFB19B303A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220812241907g5ff79125w291e98b4d2e1c457_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-25 08:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7603.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another thing to try is a change that we made late in the Open MPI  
<br>
v1.2 series with regards to IB:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
<br>
<p><p><p>On Dec 24, 2008, at 10:07 PM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; For your runs with Open MPI over InfiniBand, try using openib,sm,self
</span><br>
<span class="quotelev1">&gt; for the BTL setting, so that shared memory communications are used
</span><br>
<span class="quotelev1">&gt; within a node.  It would give us another datapoint to help diagnose
</span><br>
<span class="quotelev1">&gt; the problem.  As for other things we would need to help diagnose the
</span><br>
<span class="quotelev1">&gt; problem, please follow the advice on this FAQ entry, and the help  
</span><br>
<span class="quotelev1">&gt; page:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot">http://www.open-mpi.org/faq/?category=openfabrics#ofa-troubleshoot</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 24, 2008 at 5:55 AM, Biagio Lucini  
</span><br>
<span class="quotelev1">&gt; &lt;B.Lucini_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Pavel Shamis (Pasha) wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Biagio Lucini wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am new to this list, where I hope to find a solution for a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that I have been having for quite a longtime.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run various versions of openmpi (from 1.1.2 to 1.2.8) on a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Infiniband interconnects that I use and administer at the same
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; time. The openfabric stac is OFED-1.2.5, the compilers gcc 4.2 and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel. The queue manager is SGE 6.0u8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do you use OpenMPI version that is included in OFED ? Did you was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; able
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to run basic OFED/OMPI tests/benchmarks between two nodes ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yes to both questions: the OMPI version is the one that comes with  
</span><br>
<span class="quotelev2">&gt;&gt; OFED
</span><br>
<span class="quotelev2">&gt;&gt; (1.1.2-1) and the basic tests run fine. For instance, IMB-MPI1  
</span><br>
<span class="quotelev2">&gt;&gt; (which is
</span><br>
<span class="quotelev2">&gt;&gt; more than basic, as far as I can see) reports for the last test:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Benchmarking Barrier
</span><br>
<span class="quotelev2">&gt;&gt; # #processes = 6
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;        1000        22.93        22.95        22.94
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the openib,self btl (6 processes, all processes on different  
</span><br>
<span class="quotelev2">&gt;&gt; nodes)
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; # Benchmarking Barrier
</span><br>
<span class="quotelev2">&gt;&gt; # #processes = 6
</span><br>
<span class="quotelev2">&gt;&gt; #---------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
</span><br>
<span class="quotelev2">&gt;&gt;        1000       191.30       191.42       191.34
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for the tcp,self btl (same test)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No anomalies for other tests (ping-pong, all-to-all etc.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Biagio
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; =========================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Biagio Lucini
</span><br>
<span class="quotelev2">&gt;&gt; Department of Physics, Swansea University
</span><br>
<span class="quotelev2">&gt;&gt; Singleton Park, SA2 8PP Swansea (UK)
</span><br>
<span class="quotelev2">&gt;&gt; Tel. +44 (0)1792 602284
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; =========================================================
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7605.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7603.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7600.php">Tim Mattox: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Reply:</strong> <a href="7609.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
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
