<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 15 08:02:43 2013" -->
<!-- isoreceived="20131015120243" -->
<!-- sent="Tue, 15 Oct 2013 17:32:43 +0530" -->
<!-- isosent="20131015120243" -->
<!-- name="San B" -->
<!-- email="forum.san_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="CAC2jn-SYPWF7WKe4wGywumhoFH-tuA21a3K+661eBUPQQVt4Vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAC2jn-SAXmb2idRTMKFEFnjGgLeAfrQxbCau7CNszYWRtsp8ng_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-10-15 08:02:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22791.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;As per your instruction, I did the profiling of the application with
<br>
mpiP. Following is the difference between the two runs:
<br>
<p>Run 1: 16 mpi processes on single node
<br>
<p>@--- MPI Time (seconds) ---------------------------------------------------
<br>
---------------------------------------------------------------------------
<br>
Task    AppTime    MPITime     MPI%
<br>
&nbsp;&nbsp;&nbsp;0   3.61e+03        661    18.32
<br>
&nbsp;&nbsp;&nbsp;1   3.61e+03        627    17.37
<br>
&nbsp;&nbsp;&nbsp;2   3.61e+03        700    19.39
<br>
&nbsp;&nbsp;&nbsp;3   3.61e+03        665    18.41
<br>
&nbsp;&nbsp;&nbsp;4   3.61e+03        702    19.45
<br>
&nbsp;&nbsp;&nbsp;5   3.61e+03        703    19.48
<br>
&nbsp;&nbsp;&nbsp;6   3.61e+03        740    20.50
<br>
&nbsp;&nbsp;&nbsp;7   3.61e+03        763    21.14
<br>
...
<br>
...
<br>
<p>Run 2: 16 mpi processes on two nodes - 8 mpi processes per node
<br>
<p>@--- MPI Time (seconds) ---------------------------------------------------
<br>
---------------------------------------------------------------------------
<br>
Task    AppTime    MPITime     MPI%
<br>
&nbsp;&nbsp;&nbsp;0   1.27e+04   1.06e+04    84.14
<br>
&nbsp;&nbsp;&nbsp;1   1.27e+04   1.07e+04    84.34
<br>
&nbsp;&nbsp;&nbsp;2   1.27e+04   1.07e+04    84.20
<br>
&nbsp;&nbsp;&nbsp;3   1.27e+04   1.07e+04    84.20
<br>
&nbsp;&nbsp;&nbsp;4   1.27e+04   1.07e+04    84.22
<br>
&nbsp;&nbsp;&nbsp;5   1.27e+04   1.07e+04    84.25
<br>
&nbsp;&nbsp;&nbsp;6   1.27e+04   1.06e+04    84.02
<br>
&nbsp;&nbsp;&nbsp;7   1.27e+04   1.07e+04    84.35
<br>
&nbsp;&nbsp;&nbsp;8   1.27e+04   1.07e+04    84.29
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The time spent for MPI functions in run 1 is less than 20%, where
<br>
as it is more than 80% in the run 2. For more details, I've attached both
<br>
output files. Please go thru these files and suggest what optimization we
<br>
can do with OpenMPI or Intel MKL.
<br>
<p>Thanks
<br>
<p><p>On Mon, Oct 7, 2013 at 12:15 PM, San B &lt;forum.san_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm facing a  performance issue with a scientific application(Fortran).
</span><br>
<span class="quotelev1">&gt; The issue is, it runs faster on single node but runs very slow on multiple
</span><br>
<span class="quotelev1">&gt; nodes. For example, a 16 core job on single node finishes in 1hr 2mins, but
</span><br>
<span class="quotelev1">&gt; the same job on two nodes (i.e. 8 cores per node &amp; remaining 8 cores kept
</span><br>
<span class="quotelev1">&gt; free) takes 3hr 20mins. The code is compiled with ifort-13.1.1,
</span><br>
<span class="quotelev1">&gt; openmpi-1.4.5 and intel MKL libraries - lapack, blas, scalapack, blacs &amp;
</span><br>
<span class="quotelev1">&gt; fftw. What could be the problem here with?
</span><br>
<span class="quotelev1">&gt; Is it possible to do any tuning in OpenMPI? FY More info: The cluster has
</span><br>
<span class="quotelev1">&gt; Intel Sandybridge processor (E5-2670), infiniband and Hyperthreading is
</span><br>
<span class="quotelev1">&gt; Enabled. Jobs are submitted thru LSF scheduler.
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
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22792/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22792/mpi-App-profile-1node-16perNode.mpiP">mpi-App-profile-1node-16perNode.mpiP</a>
</ul>
<!-- attachment="mpi-App-profile-1node-16perNode.mpiP" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22792/mpi-App-profile-2Nodes-8perNode.mpiP">mpi-App-profile-2Nodes-8perNode.mpiP</a>
</ul>
<!-- attachment="mpi-App-profile-2Nodes-8perNode.mpiP" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22791.php">Ralph Castain: "Re: [OMPI users] Hints for running OpenMPI on Intel/Phi (MIC) enabled hosts"</a>
<li><strong>In reply to:</strong> <a href="22768.php">San B: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="22859.php">San B: "Re: [OMPI users] (no subject)"</a>
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
