<?
$subject_val = "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  7 14:15:21 2015" -->
<!-- isoreceived="20151207191521" -->
<!-- sent="Mon, 7 Dec 2015 20:15:15 +0100" -->
<!-- isosent="20151207191515" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS" -->
<!-- id="5665DAC3.7070806_at_hpc2n.umu.se" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5591677D.6040108_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-07 14:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27218.php">&#197;ke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27223.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The #if OPAL_HAVE_POSIX_THREADS is still there around my_sense in 
<br>
osc_sm.h in 1.10.1
<br>
<p>On 06/29/2015 05:42 PM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; Yeah, i thought so. Well code reductions are good when correct :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/29/2015 05:39 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI has required posix threads for some time. The check for
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_HAVE_POSIX_THREADS in ompi/mca/osc/sm/osc_sm.h is stale and should
</span><br>
<span class="quotelev2">&gt;&gt; be removed. I will clean that out in master, 1.8, and 1.10.
</span><br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28142.php">GARMANN, DANIEL J DR-02 USAF AFMC AFRL/RQVA: "[OMPI users] Odd behavior with subarray datatypes in OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28140.php">Nick Papior: "Re: [OMPI users] Trying to map to socket #0 on each node"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27218.php">&#197;ke Sandgren: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/06/27223.php">Gilles Gouaillardet: "Re: [OMPI users] my_sense in ompi_osc_sm_module_t not always protected by OPAL_HAVE_POSIX_THREADS"</a>
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
