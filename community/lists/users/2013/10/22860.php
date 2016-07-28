<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 29 10:45:50 2013" -->
<!-- isoreceived="20131029144550" -->
<!-- sent="Tue, 29 Oct 2013 07:37:42 -0700" -->
<!-- isosent="20131029143742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="416118A9-1EC5-4CE7-AF58-9A072B1E1B7B_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAC2jn-Qqjrz_2i-LRcKJuf5MjCOFX_yHj067USP91cHiG_e0WA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-29 10:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22861.php">KESTENER Pierre: "[OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think it's a bug in OMPI, but more likely reflects improvements in the default collective algorithms. If you want to further improve performance, you should bind your processes to a core (if your application isn't threaded) or to a socket (if threaded).
<br>
<p>As someone previously noted, apps will always run slower on multiple nodes vs everything on a single node due to the shared memory vs IB differences. Nothing you can do about that one.
<br>
<p><p>On Oct 28, 2013, at 10:36 PM, San B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;       As discussed earlier, the executable which was compiled with OpenMPI-1.4.5 gave very low performance of 12338.809 seconds when job executed on two nodes(8 cores per node). The same job run on single node(all 16cores) got executed in just 3692.403 seconds. Now I compiled the application with OpenMPI-1.6.5 and got executed in 5527.320 seconds on two nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Is this a performance gain with OMPI-1.6.5 over OMPI-1.4.5 or an issue with OPENMPI itself?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 15, 2013 at 5:32 PM, San B &lt;forum.san_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      As per your instruction, I did the profiling of the application with mpiP. Following is the difference between the two runs:
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
<span class="quotelev1">&gt;           The time spent for MPI functions in run 1 is less than 20%, where as it is more than 80% in the run 2. For more details, I've attached both output files. Please go thru these files and suggest what optimization we can do with OpenMPI or Intel MKL.
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
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm facing a  performance issue with a scientific application(Fortran). The issue is, it runs faster on single node but runs very slow on multiple nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept free) takes 3hr 20mins. The code is compiled with ifort-13.1.1, openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp; fftw. What could be the problem here with?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to do any tuning in OpenMPI? FY More info: The cluster has Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is Enabled. Jobs are submitted thru LSF scheduler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does HyperThreading causing any problem here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22860/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22861.php">KESTENER Pierre: "[OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
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
