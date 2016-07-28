<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 01:36:24 2013" -->
<!-- isoreceived="20131029053624" -->
<!-- sent="Tue, 29 Oct 2013 11:06:24 +0530" -->
<!-- isosent="20131029053624" -->
<!-- name="San B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="CAC2jn-Qqjrz_2i-LRcKJuf5MjCOFX_yHj067USP91cHiG_e0WA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC2jn-SYPWF7WKe4wGywumhoFH-tuA21a3K+661eBUPQQVt4Vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> San B (<em>forum.san_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 01:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>In reply to:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As discussed earlier, the executable which was compiled with
<br>
OpenMPI-1.4.5 gave very low performance of 12338.809 seconds when job
<br>
executed on two nodes(8 cores per node). The same job run on single
<br>
node(all 16cores) got executed in just 3692.403 seconds. Now I compiled the
<br>
application with OpenMPI-1.6.5 and got executed in 5527.320 seconds on two
<br>
nodes.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Is this a performance gain with OMPI-1.6.5 over OMPI-1.4.5 or an issue
<br>
with OPENMPI itself?
<br>
<p><p>On Tue, Oct 15, 2013 at 5:32 PM, San B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      As per your instruction, I did the profiling of the application with
</span><br>
<span class="quotelev1">&gt; mpiP. Following is the difference between the two runs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run 1: 16 mpi processes on single node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @--- MPI Time (seconds) ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Task    AppTime    MPITime     MPI%
</span><br>
<span class="quotelev1">&gt;    0   3.61e+03        661    18.32
</span><br>
<span class="quotelev1">&gt;    1   3.61e+03        627    17.37
</span><br>
<span class="quotelev1">&gt;    2   3.61e+03        700    19.39
</span><br>
<span class="quotelev1">&gt;    3   3.61e+03        665    18.41
</span><br>
<span class="quotelev1">&gt;    4   3.61e+03        702    19.45
</span><br>
<span class="quotelev1">&gt;    5   3.61e+03        703    19.48
</span><br>
<span class="quotelev1">&gt;    6   3.61e+03        740    20.50
</span><br>
<span class="quotelev1">&gt;    7   3.61e+03        763    21.14
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Run 2: 16 mpi processes on two nodes - 8 mpi processes per node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @--- MPI Time (seconds) ---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Task    AppTime    MPITime     MPI%
</span><br>
<span class="quotelev1">&gt;    0   1.27e+04   1.06e+04    84.14
</span><br>
<span class="quotelev1">&gt;    1   1.27e+04   1.07e+04    84.34
</span><br>
<span class="quotelev1">&gt;    2   1.27e+04   1.07e+04    84.20
</span><br>
<span class="quotelev1">&gt;    3   1.27e+04   1.07e+04    84.20
</span><br>
<span class="quotelev1">&gt;    4   1.27e+04   1.07e+04    84.22
</span><br>
<span class="quotelev1">&gt;    5   1.27e+04   1.07e+04    84.25
</span><br>
<span class="quotelev1">&gt;    6   1.27e+04   1.06e+04    84.02
</span><br>
<span class="quotelev1">&gt;    7   1.27e+04   1.07e+04    84.35
</span><br>
<span class="quotelev1">&gt;    8   1.27e+04   1.07e+04    84.29
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           The time spent for MPI functions in run 1 is less than 20%,
</span><br>
<span class="quotelev1">&gt; where as it is more than 80% in the run 2. For more details, I've attached
</span><br>
<span class="quotelev1">&gt; both output files. Please go thru these files and suggest what optimization
</span><br>
<span class="quotelev1">&gt; we can do with OpenMPI or Intel MKL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Oct 7, 2013 at 12:15 PM, San B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm facing a  performance issue with a scientific application(Fortran).
</span><br>
<span class="quotelev2">&gt;&gt; The issue is, it runs faster on single node but runs very slow on multiple
</span><br>
<span class="quotelev2">&gt;&gt; nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but
</span><br>
<span class="quotelev2">&gt;&gt; the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept
</span><br>
<span class="quotelev2">&gt;&gt; free) takes 3hr 20mins. The code is compiled with ifort-13.1.1,
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp;
</span><br>
<span class="quotelev2">&gt;&gt; fftw. What could be the problem here with?
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to do any tuning in OpenMPI? FY More info: The cluster has
</span><br>
<span class="quotelev2">&gt;&gt; Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is
</span><br>
<span class="quotelev2">&gt;&gt; Enabled. Jobs are submitted thru LSF scheduler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does HyperThreading causing any problem here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22859/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22858.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL]  RDMA question"</a>
<li><strong>In reply to:</strong> <a href="22792.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
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
