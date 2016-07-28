<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 22:20:26 2013" -->
<!-- isoreceived="20130820022026" -->
<!-- sent="Mon, 19 Aug 2013 19:20:23 -0700" -->
<!-- isosent="20130820022023" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..." -->
<!-- id="C5297BB9-BDC6-41DA-A50E-3B09CE64114A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F80B4C2_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 22:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
<li><strong>Previous message:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12765.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Reply:</strong> <a href="12765.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2013, at 6:07 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 19, 2013, at 8:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's how it works now. My concern is with the error message scenario. IIRC, Jeff's issue was that the error message only contains the hostname of the proc that generates it - it doesn't tell you the hostname of the remote proc. Hence, we included that info in the proc_t.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is quite important for getting useful error messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, IIRC we also provided an option to *not* send that info due to scaling concerns way back when. I wonder if we can resolve this simply by having Nathan set that option in his platform .conf files, and then removing ompi_proc_get_hostname completely. Since the IP-based comm channels will call modex_recv anyway, we'll get the hostname at that time. Otherwise, the errors print &quot;NULL&quot; for proc-&gt;hostname.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, that means that users of direct-launched apps on Nathan's systems will get less informative error messages - but they can always override Nathan's default param if they want better info. After all, the vast majority of users aren't running such big jobs as to care about this optimization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm good with it.  It could also be (might already be) a run-time MCA param...?
</span><br>
<p>I think it is - I'll check tonight
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could also default the value to -1 (vs. 0 or 1), meaning: with np &lt;= N procs, send the hostname around, otherwise, don't send it (we can argue over the value of N -- e.g., 1024 or 2048).
</span><br>
<p>That makes the most sense to me - for small jobs, the time difference is too tiny to measure.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12764.php">Ralph Castain: "Re: [OMPI devel] MPIT solution still wrong"</a>
<li><strong>Previous message:</strong> <a href="12762.php">Christopher Samuel: "Re: [OMPI devel] [slurm-dev] slurm-dev Memory accounting issues with mpirun (was Re: Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun)"</a>
<li><strong>In reply to:</strong> <a href="12760.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12765.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Reply:</strong> <a href="12765.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
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
