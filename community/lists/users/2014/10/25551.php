<?
$subject_val = "Re: [OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 22 03:04:36 2014" -->
<!-- isoreceived="20141022070436" -->
<!-- sent="Wed, 22 Oct 2014 00:04:31 -0700" -->
<!-- isosent="20141022070431" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] New ib locked pages behavior?" -->
<!-- id="544756FF.6090204_at_cse.ucdavis.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5446FC8E.4070403_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-22 03:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/21/2014 05:38 PM, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Bill
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have 2.6.X CentOS stock kernel.
</span><br>
<p>Heh, wow, quite a blast from the past.
<br>
<p><span class="quotelev1">&gt; I set both parameters.
</span><br>
<span class="quotelev1">&gt; It works.
</span><br>
<p>Yes, for kernels that old I had it working fine.
<br>
<p><span class="quotelev1">&gt; Maybe the parameter names may changed in 3.X kernels?
</span><br>
<span class="quotelev1">&gt; (Which is really bad ...)
</span><br>
<span class="quotelev1">&gt; You could check if there is more information in:
</span><br>
<span class="quotelev1">&gt; /sys/module/mlx4_core/parameters/
</span><br>
<p>$  ls /sys/module/mlx4_core/parameters/
<br>
debug_level         log_mtts_per_seg        msi_x            use_prio
<br>
enable_64b_cqe_eqe  log_num_mac             num_vfs
<br>
enable_qos          log_num_mgm_entry_size  port_type_array
<br>
internal_err_reset  log_num_vlan            probe_vf
<br>
$
<br>
<p>As expected there's a log_mtts_per_seg, but no log_num_mtt or num_mtt.
<br>
<p><span class="quotelev1">&gt; There seems to be a thread on the list about this (but apparently
</span><br>
<span class="quotelev1">&gt; no solution):
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2013/02/21430.php">http://www.open-mpi.org/community/lists/users/2013/02/21430.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe Mellanox has more information about this?
</span><br>
<p>I'm all ears.  No idea what was behind the change to eliminate what
<br>
sound like fairly important parameters in mlx4_core.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25550.php">Kawashima, Takahiro: "Re: [OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<li><strong>In reply to:</strong> <a href="25547.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
