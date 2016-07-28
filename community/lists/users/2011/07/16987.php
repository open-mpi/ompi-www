<?
$subject_val = "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 26 16:22:35 2011" -->
<!-- isoreceived="20110726202235" -->
<!-- sent="Tue, 26 Jul 2011 14:22:27 -0600" -->
<!-- isosent="20110726202227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that" -->
<!-- id="3A76E6B4-9A3A-46A7-9D3F-9B7FD2CFD2DE_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BF86F786-5C73-4648-BAB5-57ADC36AAE71_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-26 16:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16986.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16986.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 26, 2011, at 1:58 PM, Reuti wrote:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here you specify to fill one machine after the other completely before gathering slots from the next machine. You can change this to $round_robin to get one slot form each node before taking a second from particular machines. If you prefer a fixed allocation, you could also put an integer here.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Remember, OMPI only uses sge to launch one daemon/node. The placement of MPI procs is totally up to mpirun itself, which doesn't look at any SGE envar.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought this is the purpose to use --with-sge during configure as you don't have to provide any hostlist at all and Open MPI will honor it by reading SGE envars to get the granted slots?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>We use the envars to determine how many slots were allocated, but not the placement. So we'll look at the envar to get the number of slots allocated on each node, but we then determine the layout of processes against the slots. To the point, we don't look at an sge envar to determine how that layout is to be done.
<br>
<p>I was only trying to point out the difference. I admit it can be confusing when using sge, especially since sge doesn't actually have visibility into the MPI procs themselves (i.e., the only processes launched by sge are the daemons).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16988.php">Gus Correa: "[OMPI users] Rankfile problem with Open MPI 1.4.3"</a>
<li><strong>Previous message:</strong> <a href="16986.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<li><strong>In reply to:</strong> <a href="16986.php">Reuti: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots in	cluster, but nothing more than that"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
<li><strong>Reply:</strong> <a href="16998.php">Lane, William: "Re: [OMPI users] Can run OpenMPI testcode on 86 or fewer slots	in	cluster, but nothing more than that"</a>
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
