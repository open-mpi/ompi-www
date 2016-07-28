<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 09:39:50 2009" -->
<!-- isoreceived="20090818133950" -->
<!-- sent="Tue, 18 Aug 2009 09:39:52 -0400" -->
<!-- isosent="20090818133952" -->
<!-- name="Joe Landman" -->
<!-- email="landman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="4A8AAF28.1080405_at_scalableinformatics.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A89D0D3.4090000_at_virginia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> Joe Landman (<em>landman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 09:39:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10400.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Craig Plaisance wrote:
<br>
<span class="quotelev1">&gt; Hi - I have compiled vasp 4.6.34 using the Intel fortran compiler 11.1 
</span><br>
<span class="quotelev1">&gt; with openmpi 1.3.3 on a cluster of 104 nodes running Rocks 5.2 with two 
</span><br>
<span class="quotelev1">&gt; quad core opterons connected by a Gbit ethernet.  Running in parallel on 
</span><br>
<p>Latency of gigabit is likely your issue.  Lower quality gigabit switches 
<br>
often have very high port to port latencies.
<br>
<p>NICs on motherboards also tend to be less ... well ... good at low 
<br>
latency operations.
<br>
<p>Size of your problem set is important ... small problems don't scale well.
<br>
<p>You might try MX, and building OpenMPI atop MX, and see if this helps, 
<br>
assuming problem size isn't the issue.
<br>
<p>I'd also recommend (though this is hard) upgrading your node kernels. 
<br>
Rocks uses a Redhat kernel, built on a fairly (ancient) 2.6.18 base, 
<br>
with lots of backports.  We normally suggest alternatives.  Modern 
<br>
kernels tend to be faster.  Unfortunately, installing new kernels on 
<br>
Rocks compute nodes can be a challenge.
<br>
<p><pre>
-- 
Joseph Landman, Ph.D
Founder and CEO
Scalable Informatics, Inc.
email: landman_at_[hidden]
web  : <a href="http://scalableinformatics.com">http://scalableinformatics.com</a>
        <a href="http://scalableinformatics.com/jackrabbit">http://scalableinformatics.com/jackrabbit</a>
phone: +1 734 786 8423 x121
fax  : +1 866 888 3112
cell : +1 734 612 4615
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10402.php">Federico Golfrè Andreasi: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10400.php">jimkress_58: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10411.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
