<?
$subject_val = "Re: [OMPI users] busy waiting and oversubscriptions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 27 18:49:58 2014" -->
<!-- isoreceived="20140327224958" -->
<!-- sent="Thu, 27 Mar 2014 22:49:41 +0000" -->
<!-- isosent="20140327224941" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] busy waiting and oversubscriptions" -->
<!-- id="87ha6j6yuy.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="533360DF.9060606_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] busy waiting and oversubscriptions<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-27 18:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24006.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus Correa &lt;gus_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Torque+Maui, SGE/OGE, and Slurm are free.
</span><br>
<p>[OGE certainly wasn't free, but it apparently no longer exists --
<br>
another thing Oracle screwed up and eventually dumped.]
<br>
<p><span class="quotelev1">&gt; If you build the queue system with cpuset control, a node can be
</span><br>
<span class="quotelev1">&gt; shared among several jobs, but the cpus/cores will be assigned
</span><br>
<span class="quotelev1">&gt; specifically
</span><br>
<span class="quotelev1">&gt; to each job's processes, so that nobody steps on each other toes.
</span><br>
<p>Actually there's no need for cpusets unless jobs are badly-behaved and
<br>
escape their bindings.  Core binding by the resource manager, inherited
<br>
by OMPI, is typically enough.  (Note that, as far as I know, cpusets are
<br>
Linux-specific now Irix is dead along with its better support for
<br>
resource management.)
<br>
<p>Anyhow, yes you should use a resource manager even with only trivial
<br>
scheduling.
<br>
<p><pre>
-- 
Community Grid Engine:  <a href="http://arc.liv.ac.uk/SGE/">http://arc.liv.ac.uk/SGE/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24006.php">Dave Love: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Previous message:</strong> <a href="24004.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23977.php">Gus Correa: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
<li><strong>Reply:</strong> <a href="24007.php">Lloyd Brown: "Re: [OMPI users] busy waiting and oversubscriptions"</a>
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
