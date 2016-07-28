<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 11:48:01 2012" -->
<!-- isoreceived="20120217164801" -->
<!-- sent="Fri, 17 Feb 2012 17:47:55 +0100" -->
<!-- isosent="20120217164755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun" -->
<!-- id="4F3E84BB.4000907_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62209993-43A3-4308-84F4-34F40E80B1E1_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 11:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 17/02/2012 14:59, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Feb 17, 2012, at 8:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't follow this entire thread in details, but I am feeling that something is wrong here. The flag fixes your problem indeed, but I think it may break binding too. It's basically making all &quot;unavailable resources&quot; available. So the binding code may end up trying to bind processes on cores that it can't actually use.
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow here -- which binding code are you referring to; that in hwloc, or that in OMPI?
</span><br>
<span class="quotelev1">&gt; My understanding of what we should be doing is to compare the output bitmask from hwloc_get_cpubind() with the allowed_cpuset on the HWLOC_OBJ_MACHINE.  If where we are bound is less than the allowed cpuset, then the process is bound.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<p>Yes.
<br>
I didn't know you already used allowed_cpuset instead of cpuset, good to
<br>
know.
<br>
<p><span class="quotelev1">&gt; And per Ralph's question, the allowed_cpuset of HWLOC_OBJ_MACHINE will still be accurate even if we do WHOLE_SYSTEM, right?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt;   E.g., if some external agent creates a Linux cpuset for a process, then even if we specify WHOLE_SYSTEM, the allowed_cpuset on OBJ_MACHINE will still accurately reflect the PU's are in the Linux cpuset where this process is running. 
</span><br>
<p>Yes.
<br>
<p><p>But you're talking about &quot;am I bound?&quot; here. My concern was &quot;how does
<br>
OMPI bind processes?&quot;.
<br>
If WHOLE_SYSTEM is passed, you may get more objects in your topology
<br>
(most objects with allowed_cpuset=0 are removed when the flag is not
<br>
set). So things like get_nbobjs_by_type() return larger values when you
<br>
pass the flag. So you can't rely of those values when distributing the
<br>
processes among the available cores for instance. Does the OMPI binding
<br>
code handle this?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10480.php">Ralph Castain: "Re: [OMPI devel] trunk build failure on NetBSD-5.0"</a>
<li><strong>In reply to:</strong> <a href="10475.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
