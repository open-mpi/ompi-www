<?
$subject_val = "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 02:49:57 2014" -->
<!-- isoreceived="20140228074957" -->
<!-- sent="Fri, 28 Feb 2014 08:49:45 +0100" -->
<!-- isosent="20140228074945" -->
<!-- name="Bernd Dammann" -->
<!-- email="bd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slowdown with infiniband and latest CentOS kernel" -->
<!-- id="53103F99.9060409_at_cc.dtu.dk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="87y50weew4.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Bernd Dammann (<em>bd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 02:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23712.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/27/14 16:47 PM, Dave Love wrote:
<br>
<span class="quotelev1">&gt; Bernd Dammann &lt;bd_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I found this thread from before Christmas, and I wondered what the
</span><br>
<span class="quotelev2">&gt;&gt; status of this problem is.  We experience the same problems since our
</span><br>
<span class="quotelev2">&gt;&gt; upgrade to Scientific Linux 6.4, kernel 2.6.32-431.1.2.el6.x86_64, and
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.6.5.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Users have reported severe slowdowns in all kinds of applications,
</span><br>
<span class="quotelev2">&gt;&gt; like VASP, OpenFOAM, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm surprised a kernel change should be related to core binding, if
</span><br>
<span class="quotelev1">&gt; that's the issue, or caused your slowdown.  We were running that kernel
</span><br>
<span class="quotelev1">&gt; OK until recently with those sort of applications and that OMPI version.
</span><br>
<p>Maybe I should say, that we moved from SL 6.1 and OMPI 1.4.x to SL 6.4 
<br>
with the above kernel, and OMPI 1.6.5 - which means a major upgrade of 
<br>
our cluster.
<br>
<p>After the upgrade, users reported those slowdowns, and a search on this 
<br>
list showed, that other sites had the same (or similar issues) with this 
<br>
kernel and OMPI version combination.
<br>
<p><span class="quotelev1">&gt; (The change to the default alltoallv collective algorithm in the OMPI
</span><br>
<span class="quotelev1">&gt; 1.6 series, discussed in the archives, might affect you if you upgraded
</span><br>
<span class="quotelev1">&gt; through it.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OK, thanks - I take a look at it.
<br>
<p><span class="quotelev2">&gt;&gt; Using the workaround '--bind-to-core' does only make sense for those
</span><br>
<span class="quotelev2">&gt;&gt; jobs, that allocate full nodes, but the majority of our jobs don't do
</span><br>
<span class="quotelev2">&gt;&gt; that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't consider it a workaround.  Just use a resource manager that
</span><br>
<span class="quotelev1">&gt; sorts it out for you.  For what it's worth, a recipe for SGE/OMPI is at
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding">http://arc.liv.ac.uk/SGE/howto/sge-configs.html#_core_binding</a>&gt;.  We're
</span><br>
<span class="quotelev1">&gt; happy with that (and seem to be at least on a par with Intel using
</span><br>
<span class="quotelev1">&gt; OMPI+GCC+OpenBLAS) now users automatically get binding.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
We use Moab/Torque, so we could use cpusets (but that has had some other 
<br>
side effects earlier, so we did not implement it in our setup).
<br>
<p>Regardless of that, it looks strange to me, that this combination of 
<br>
kernel and OMPI has such a negative side effect on application performance.
<br>
<p>Rgds,
<br>
Bernd
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23712.php">Bernd Dammann: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Previous message:</strong> <a href="23710.php">Ralph Castain: "Re: [OMPI users] new map-by-obj has a problem"</a>
<li><strong>In reply to:</strong> <a href="23688.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23731.php">Tru Huynh: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/03/23766.php">Dave Love: "Re: [OMPI users] slowdown with infiniband and latest CentOS kernel"</a>
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
