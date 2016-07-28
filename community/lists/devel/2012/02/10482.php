<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 11:54:38 2012" -->
<!-- isoreceived="20120217165438" -->
<!-- sent="Fri, 17 Feb 2012 08:54:34 -0800" -->
<!-- isosent="20120217165434" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="CAMD57oeW76Ab=CVX8Kzq+r3LmgKuCecGLnzyC-PN17mOG1jT+g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3E84BB.4000907_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 11:54:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Feb 17, 2012 at 8:47 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 17/02/2012 14:59, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 17, 2012, at 8:21 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I didn't follow this entire thread in details, but I am feeling that
</span><br>
<span class="quotelev1">&gt; something is wrong here. The flag fixes your problem indeed, but I think it
</span><br>
<span class="quotelev1">&gt; may break binding too. It's basically making all &quot;unavailable resources&quot;
</span><br>
<span class="quotelev1">&gt; available. So the binding code may end up trying to bind processes on cores
</span><br>
<span class="quotelev1">&gt; that it can't actually use.
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure I follow here -- which binding code are you referring to;
</span><br>
<span class="quotelev1">&gt; that in hwloc, or that in OMPI?
</span><br>
<span class="quotelev2">&gt; &gt; My understanding of what we should be doing is to compare the output
</span><br>
<span class="quotelev1">&gt; bitmask from hwloc_get_cpubind() with the allowed_cpuset on the
</span><br>
<span class="quotelev1">&gt; HWLOC_OBJ_MACHINE.  If where we are bound is less than the allowed cpuset,
</span><br>
<span class="quotelev1">&gt; then the process is bound.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is that correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; I didn't know you already used allowed_cpuset instead of cpuset, good to
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And per Ralph's question, the allowed_cpuset of HWLOC_OBJ_MACHINE will
</span><br>
<span class="quotelev1">&gt; still be accurate even if we do WHOLE_SYSTEM, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;   E.g., if some external agent creates a Linux cpuset for a process,
</span><br>
<span class="quotelev1">&gt; then even if we specify WHOLE_SYSTEM, the allowed_cpuset on OBJ_MACHINE
</span><br>
<span class="quotelev1">&gt; will still accurately reflect the PU's are in the Linux cpuset where this
</span><br>
<span class="quotelev1">&gt; process is running.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But you're talking about &quot;am I bound?&quot; here. My concern was &quot;how does
</span><br>
<span class="quotelev1">&gt; OMPI bind processes?&quot;.
</span><br>
<span class="quotelev1">&gt; If WHOLE_SYSTEM is passed, you may get more objects in your topology
</span><br>
<span class="quotelev1">&gt; (most objects with allowed_cpuset=0 are removed when the flag is not
</span><br>
<span class="quotelev1">&gt; set). So things like get_nbobjs_by_type() return larger values when you
</span><br>
<span class="quotelev1">&gt; pass the flag. So you can't rely of those values when distributing the
</span><br>
<span class="quotelev1">&gt; processes among the available cores for instance. Does the OMPI binding
</span><br>
<span class="quotelev1">&gt; code handle this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, we do - because we also allow a user to specify a restricted cpuset
<br>
for us to use, I automatically filter all cpusets at the beginning of time
<br>
to create an &quot;available&quot; set for our internal use. This is the set I scan
<br>
when looking at the number of objects available to us.
<br>
<p>Of course, if a developer doesn't use our internal utilities to get those
<br>
numbers, they could do something wrong. :-)
<br>
<p>All that said, I think using the WHOLE_SYSTEM flag is actually incorrect.
<br>
We don't need to do that as the problem Nadia identified is better solved
<br>
by correcting the current logic. I'm working on that now - unfortunately,
<br>
the only slurm machine I can access doesn't have slurm's affinity module
<br>
activated.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10483.php">Paul H. Hargrove: "[OMPI devel] Solaris/SOS build failure in trunk"</a>
<li><strong>Previous message:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10481.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<li><strong>Reply:</strong> <a href="10485.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
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
