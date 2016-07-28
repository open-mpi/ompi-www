<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 09:42:42 2012" -->
<!-- isoreceived="20120217144242" -->
<!-- sent="Fri, 17 Feb 2012 06:42:37 -0800" -->
<!-- isosent="20120217144237" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="CAMD57odxvBJUnwtGHt42F3xA=2yWSg=qcQ1Hf3Pzyjy=caPYwg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E71A803-CD28-48E9-A6EC-0F9DD000754F_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-17 09:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10374.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took a closer look at this, and I think we're getting ourselves confused
<br>
by the rather large differences between what is on the trunk vs the 1.5
<br>
branch. The trunk is doing the &quot;am I bound&quot; calculation correctly - it gets
<br>
the cpubind bitmask and compares it to the allowed/available cpus.
<br>
<p>The 1.5 branch has a problem. Jeff and I discussed it a little more, and
<br>
agreed that I will create a minimal patch to address the issue of
<br>
direct-launched procs. We definitely don't want to back-port the logic from
<br>
the trunk.
<br>
<p>Will try to have something next week.
<br>
<p><p>On Fri, Feb 17, 2012 at 6:03 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 16, 2012, at 8:16 AM, nadia.derbey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Could you please move it to v1.5 (do I need to fill a CMR)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to clarify - you're asking for the patch to set WHOLE_SYSTEM when we
</span><br>
<span class="quotelev1">&gt; load the hwloc topology, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, please file a CMR.  Note that there's some differences between how
</span><br>
<span class="quotelev1">&gt; hwloc is used between the trunk and the v1.5 branch; the same commit may
</span><br>
<span class="quotelev1">&gt; not apply exactly from the trunk to v1.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10479.php">Dmitri Gribenko: "Re: [OMPI devel] Building otfcompress with binutils-gold fails"</a>
<li><strong>Previous message:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>In reply to:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10374.php">Brice Goglin: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
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
