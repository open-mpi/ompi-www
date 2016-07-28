<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 19 21:07:51 2013" -->
<!-- isoreceived="20130820010751" -->
<!-- sent="Tue, 20 Aug 2013 01:07:50 +0000" -->
<!-- isosent="20130820010750" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F80B4C2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DCA2F25A-5CC1-42C8-8BCF-A9C08E7F680B_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-19 21:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12759.php">Jeff Squyres (jsquyres): "[OMPI devel] MPIT solution still wrong"</a>
<li><strong>In reply to:</strong> <a href="12758.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Reply:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 19, 2013, at 8:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's how it works now. My concern is with the error message scenario. IIRC, Jeff's issue was that the error message only contains the hostname of the proc that generates it - it doesn't tell you the hostname of the remote proc. Hence, we included that info in the proc_t.
</span><br>
<p>This is quite important for getting useful error messages.
<br>
<p><span class="quotelev1">&gt; However, IIRC we also provided an option to *not* send that info due to scaling concerns way back when. I wonder if we can resolve this simply by having Nathan set that option in his platform .conf files, and then removing ompi_proc_get_hostname completely. Since the IP-based comm channels will call modex_recv anyway, we'll get the hostname at that time. Otherwise, the errors print &quot;NULL&quot; for proc-&gt;hostname.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that means that users of direct-launched apps on Nathan's systems will get less informative error messages - but they can always override Nathan's default param if they want better info. After all, the vast majority of users aren't running such big jobs as to care about this optimization.
</span><br>
<p>I'm good with it.  It could also be (might already be) a run-time MCA param...?
<br>
<p>We could also default the value to -1 (vs. 0 or 1), meaning: with np &lt;= N procs, send the hostname around, otherwise, don't send it (we can argue over the value of N -- e.g., 1024 or 2048).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12761.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.7.2 fails to use the RDMACM CPC"</a>
<li><strong>Previous message:</strong> <a href="12759.php">Jeff Squyres (jsquyres): "[OMPI devel] MPIT solution still wrong"</a>
<li><strong>In reply to:</strong> <a href="12758.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk: ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib ompi/mca/btl/openib/connect ompi/mca/btl/tcp ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic ompi/mca/common/ofacm ompi/mca/mtl/mxm ompi/mca/mtl/psm ompi/mca/pml/base ompi/mca/pml/bfo ompi/proc opal/mca/db/pmi orte/mca/ess/pmi orte/mca/grpcomm/pmi orte/mca/rml/oob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
<li><strong>Reply:</strong> <a href="12763.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r29040 - in trunk:	ompi/mca/bml/r2 ompi/mca/btl/base ompi/mca/btl/openib	ompi/mca/btl/openib/connect ompi/mca/btl/tcp	ompi/mca/btl/udapl ompi/mca/btl/ugni ompi/mca/btl/usnic	ompi/mca/common/ofacm ompi/mca/m..."</a>
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
