<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 05:43:55 2014" -->
<!-- isoreceived="20140304104355" -->
<!-- sent="Tue, 04 Mar 2014 10:43:54 +0000" -->
<!-- isosent="20140304104354" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="87txbeckgl.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53103F99.9060409_at_cc.dtu.dk" -->
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
<strong>Date:</strong> 2014-03-04 05:43:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bernd Dammann &lt;bd_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; We use Moab/Torque, so we could use cpusets (but that has had some
</span><br>
<span class="quotelev1">&gt; other side effects earlier, so we did not implement it in our setup).
</span><br>
<p>I don't know remember Torque does, but core binding and (Linux) cpusets
<br>
are somewhat orthogonal.  While a cpuset will obviously restrict the
<br>
processes somewhat, it won't provide the necessary binding (at least
<br>
unless the resource manager launches the processes and uses a cpuset for
<br>
each).
<br>
<p><span class="quotelev1">&gt; Regardless of that, it looks strange to me, that this combination of
</span><br>
<span class="quotelev1">&gt; kernel and OMPI has such a negative side effect on application
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<p>I assume you can determine whether or not it's the kernel rather than
<br>
ompi/ofed by booting into the old one.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23767.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23765.php">Dave Love: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23711.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
