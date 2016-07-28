<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 10:47:40 2014" -->
<!-- isoreceived="20140227154740" -->
<!-- sent="Thu, 27 Feb 2014 15:47:39 +0000" -->
<!-- isosent="20140227154739" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="87y50weew4.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="530E0E59.4030203_at_cc.dtu.dk" -->
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
<strong>Subject:</strong> Re: [OMPI users] slowdown with infiniband and latest CentOS kernel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 10:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23689.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23658.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[I don't know what thread this is without References: or citation.]
<br>
<p>Bernd Dammann &lt;bd_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I found this thread from before Christmas, and I wondered what the
</span><br>
<span class="quotelev1">&gt; status of this problem is.  We experience the same problems since our
</span><br>
<span class="quotelev1">&gt; upgrade to Scientific Linux 6.4, kernel 2.6.32-431.1.2.el6.x86_64, and
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Users have reported severe slowdowns in all kinds of applications,
</span><br>
<span class="quotelev1">&gt; like VASP, OpenFOAM, etc.
</span><br>
<p>I'm surprised a kernel change should be related to core binding, if
<br>
that's the issue, or caused your slowdown.  We were running that kernel
<br>
OK until recently with those sort of applications and that OMPI version.
<br>
(The change to the default alltoallv collective algorithm in the OMPI
<br>
1.6 series, discussed in the archives, might affect you if you upgraded
<br>
through it.)
<br>
<p><span class="quotelev1">&gt; Using the workaround '--bind-to-core' does only make sense for those
</span><br>
<span class="quotelev1">&gt; jobs, that allocate full nodes, but the majority of our jobs don't do
</span><br>
<span class="quotelev1">&gt; that.
</span><br>
<p>I don't consider it a workaround.  Just use a resource manager that
<br>
sorts it out for you.  For what it's worth, a recipe for SGE/OMPI is at
<br>
&lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt;.  We're
<br>
happy with that (and seem to be at least on a par with Intel using
<br>
OMPI+GCC+OpenBLAS) now users automatically get binding.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23689.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="23687.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="23658.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
