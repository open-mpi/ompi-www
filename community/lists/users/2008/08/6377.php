<?
$subject_val = "Re: [OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 08:47:06 2008" -->
<!-- isoreceived="20080818124706" -->
<!-- sent="Mon, 18 Aug 2008 08:47:00 -0400" -->
<!-- isosent="20080818124700" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with alltoall with ppn=8" -->
<!-- id="48A96F44.30600_at_Sun.COM" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1218911319.10852.3.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 08:47:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt; On Sat, 2008-08-16 at 08:03 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; - large all to all operations are very stressful on the network, even  
</span><br>
<span class="quotelev2">&gt;&gt; if you have very low latency / high bandwidth networking such as DDR IB
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - if you only have 1 IB HCA in a machine with 8 cores, the problem  
</span><br>
<span class="quotelev2">&gt;&gt; becomes even more difficult because all 8 of your MPI processes will  
</span><br>
<span class="quotelev2">&gt;&gt; be hammering the HCA with read and write requests; it's a simple I/O  
</span><br>
<span class="quotelev2">&gt;&gt; resource contention issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That alone doesn't explain the sudden jump (drop) in performance
</span><br>
<span class="quotelev1">&gt; figures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - there are several different algorithms in Open MPI for performing  
</span><br>
<span class="quotelev2">&gt;&gt; alltoall, but they were not tuned for ppn&gt;4 (honestly, they were tuned  
</span><br>
<span class="quotelev2">&gt;&gt; for ppn=1, but they still usually work &quot;well enough&quot; for ppn&lt;=4).  In  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI v1.3, we introduce the &quot;hierarch&quot; collective module, which  
</span><br>
<span class="quotelev2">&gt;&gt; should greatly help with ppn&gt;4 kinds of scenarios for collectives  
</span><br>
<span class="quotelev2">&gt;&gt; (including, at least to some degree, all to all)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to tell or influence which algorithm is used in the
</span><br>
<span class="quotelev1">&gt; current case?  Looking through the code I can see several but cannot see
</span><br>
<span class="quotelev1">&gt; how to tune the thresholds.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ashley.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>The answer is sort of.  By default, Open MPI uses precompiled thresholds 
<br>
to select different algorithms.
<br>
<p>However, if you want to experiment with the different algorithms within 
<br>
the tuned component, you can tell Open MPI which one you want to use. 
<br>
This algorithm is then used for all calls to that collective.
<br>
<p>For example, to tell it to use &quot;pairwise alltoall&quot;, you would do this.
<br>
<p><span class="quotelev1"> &gt; mpirun -np 2 --mca coll_tuned_use_dynamic_rules 1 --mca 
</span><br>
coll_tuned_alltoall_algorithm 2 a.out
<br>
<p>To see the different algorithms, you can look through the code or try 
<br>
and glean it from a call to ompi_info.
<br>
<p><span class="quotelev1"> &gt; ompi_info -all -mca coll_tuned_use_dynamic_rules 1 | grep alltoall
</span><br>
<p>You can also create a file that can change the thresholds if you decide 
<br>
you want to change the precompiled ones.  I have only lightly tested 
<br>
that feature but it should work.
<br>
<p>Rolf
<br>
<p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6378.php">Ralph Castain: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6376.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6365.php">Ashley Pittman: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
