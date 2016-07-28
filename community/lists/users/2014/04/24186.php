<?
$subject_val = "Re: [OMPI users] mpirun runs in serial even I set np to several processors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 15:51:25 2014" -->
<!-- isoreceived="20140414195125" -->
<!-- sent="Mon, 14 Apr 2014 15:51:24 -0400" -->
<!-- isosent="20140414195124" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun runs in serial even I set np to several processors" -->
<!-- id="534C3C3C.6020101_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACWmqDe19qMHdQ3PL9N4z_ZJPYeOSaL8yOj6bUJ__g_WMAWcgA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun runs in serial even I set np to several processors<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 15:51:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 04/14/2014 01:15 PM, Djordje Romanic wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run WRF-ARW in parallel. This is configuration of my system:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Architecture:          x86_64
</span><br>
<span class="quotelev1">&gt; CPU op-mode(s):        32-bit, 64-bit
</span><br>
<span class="quotelev1">&gt; Byte Order:            Little Endian
</span><br>
<span class="quotelev1">&gt; CPU(s):                4
</span><br>
<span class="quotelev1">&gt; On-line CPU(s) list:   0-3
</span><br>
<span class="quotelev1">&gt; Thread(s) per core:    1
</span><br>
<span class="quotelev1">&gt; Core(s) per socket:    4
</span><br>
<span class="quotelev1">&gt; Socket(s):             1
</span><br>
<span class="quotelev1">&gt; NUMA node(s):          1
</span><br>
<span class="quotelev1">&gt; Vendor ID:             AuthenticAMD
</span><br>
<span class="quotelev1">&gt; CPU family:            16
</span><br>
<span class="quotelev1">&gt; Model:                 2
</span><br>
<span class="quotelev1">&gt; Stepping:              3
</span><br>
<span class="quotelev1">&gt; CPU MHz:               1150.000
</span><br>
<span class="quotelev1">&gt; BogoMIPS:              4587.84
</span><br>
<span class="quotelev1">&gt; Virtualization:        AMD-V
</span><br>
<span class="quotelev1">&gt; L1d cache:             64K
</span><br>
<span class="quotelev1">&gt; L1i cache:             64K
</span><br>
<span class="quotelev1">&gt; L2 cache:              512K
</span><br>
<span class="quotelev1">&gt; L3 cache:              2048K
</span><br>
<span class="quotelev1">&gt; NUMA node0 CPU(s):     0-3
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I start wrf with mpirun -np 4 ./wrf.exe, I get this:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt;   starting wrf task            0  of            1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This indicates that it is not using 4 processors, but 1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what might be the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Djordje
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Did you compile WRF with MPI enabled (i.e. serial,
<br>
not OpenMP, or openMP only, which is a different beast than OpenMPI = 
<br>
note the trailing &quot;I&quot;) ?
<br>
<p>If you compiled serial, or OpenMP and did not set OMP_NUM_THREADS,
<br>
the mpirun command above will launch 4
<br>
separate/independent/repetitive/non-communicating processes
<br>
doing the same exact thing (and probably overwriting each other's 
<br>
output, etc).
<br>
<p>Did you compile and link to the OpenMPI libraries, or perhaps to
<br>
another MPI implementation?
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24187.php">Gus Correa: "Re: [OMPI users] mpirun runs in serial even I set np to several	processors"</a>
<li><strong>Previous message:</strong> <a href="24185.php">Djordje Romanic: "Re: [OMPI users] mpirun runs in serial even I set np to several processors"</a>
<li><strong>In reply to:</strong> <a href="24178.php">Djordje Romanic: "[OMPI users] mpirun runs in serial even I set np to several processors"</a>
<!-- nextthread="start" -->
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
