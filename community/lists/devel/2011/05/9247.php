<?
$subject_val = "Re: [OMPI devel] One orted for each process on the same host - any problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  4 19:59:47 2011" -->
<!-- isoreceived="20110504235947" -->
<!-- sent="Wed, 4 May 2011 17:59:38 -0600" -->
<!-- isosent="20110504235938" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] One orted for each process on the same host - any problem?" -->
<!-- id="575AA41C-0AD3-497F-B9A7-BE1857931D53_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DC1D97A.30809_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] One orted for each process on the same host - any problem?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-04 19:59:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9246.php">Tony Lam: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9246.php">Tony Lam: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Reply:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In that case, why not just directly launch the processes without the orted? We do it with slurm and even have the ability to do it with torque - so it could be done.
<br>
<p>See the orte/mca/ess/slurmd component for an example of how to do so.
<br>
<p><p>On May 4, 2011, at 4:55 PM, Tony Lam wrote:
<br>
<p><span class="quotelev1">&gt; Hi Thomas,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We need to track job resource usage in our resource manager for
</span><br>
<span class="quotelev1">&gt; accounting and resource policy enforcement, sharing single orted
</span><br>
<span class="quotelev1">&gt; process in multiple jobs makes the tracking much complicated. We don't
</span><br>
<span class="quotelev1">&gt; enforce other restrictions, and I'll appreciate any suggestion on how
</span><br>
<span class="quotelev1">&gt; to resolve this or work around this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have thought about mapping all processes from a mpirun into a
</span><br>
<span class="quotelev1">&gt; single job to simplify job resource tracking, but that will require much spread changes in our software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tony
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 05/04/11 15:34, Thomas Herault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you explain why you would like one orted on top of each MPI process?
</span><br>
<span class="quotelev2">&gt;&gt; There are some situations, like resource usage limitation / accounting, that are possible to solve without changing the one daemon per node deployment.
</span><br>
<span class="quotelev2">&gt;&gt; Or do you enforce other kinds of restrictions on the orted process? Why wouldn't it be able to launch more than one MPI process / why would not that be desirable?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bests,
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 4 mai 2011 &#224; 15:51, Tony Lam a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I understand a single orted is shared by all MPI processes from the same communicator on each execution host, does anyone see any problem that MPI/OMPI may have problem with each process has its owner orted? My guess it is less efficient in terms of MPI communication and memory foot print, but for simplification of our integration with OMPI, launching one orted for each MPI process is much easier to do.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will appreciate if someone can confirm this setup will or will not work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tony
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Previous message:</strong> <a href="9246.php">Tony Lam: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>In reply to:</strong> <a href="9246.php">Tony Lam: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
<li><strong>Reply:</strong> <a href="9248.php">Thomas Herault: "Re: [OMPI devel] One orted for each process on the same host - any problem?"</a>
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
