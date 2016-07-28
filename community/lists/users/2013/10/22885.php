<?
$subject_val = "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 10:24:22 2013" -->
<!-- isoreceived="20131031142422" -->
<!-- sent="Thu, 31 Oct 2013 08:24:19 -0600" -->
<!-- isosent="20131031142419" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc" -->
<!-- id="20131031142419.GE86366_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF72D5193A.F296041D-ON49257C15.0027ACA4-49257C15.002812E4_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 10:24:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22883.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Reply:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like it is fixed in the development trunk but not 1.7.3. We can fix
<br>
this in 1.7.4.
<br>
<p>-Nathan Hjelm
<br>
HPC-3, LANL
<br>
<p>On Thu, Oct 31, 2013 at 04:17:30PM +0900, tmishima_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hollo, I asked Ralph to re-enable cpus-per-proc of openmpi-1.7.x one year
</span><br>
<span class="quotelev1">&gt; ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; According to Ticket #3350, it shows &quot;(closed defect: fixed)&quot;.
</span><br>
<span class="quotelev1">&gt; So I tried latest openmpi-1.7.3, but I find that -cpus-per-proc is still
</span><br>
<span class="quotelev1">&gt; not accepted like bellow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -x OMP_NUM_THREADS=2 -cpus-per-proc 2 -report-bindings MyProg
</span><br>
<span class="quotelev1">&gt; mpirun: Error: unknown option &quot;-p&quot;
</span><br>
<span class="quotelev1">&gt; Type 'mpirun --help' for usage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you really fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="22884.php">MM: "Re: [OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="22883.php">tmishima_at_[hidden]: "[OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<li><strong>Reply:</strong> <a href="22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
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
