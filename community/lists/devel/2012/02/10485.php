<?
$subject_val = "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 17 17:21:28 2012" -->
<!-- isoreceived="20120217222128" -->
<!-- sent="Fri, 17 Feb 2012 17:21:23 -0500" -->
<!-- isosent="20120217222123" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun" -->
<!-- id="8565D989-3045-417B-9016-13602C092634_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57oeW76Ab=CVX8Kzq+r3LmgKuCecGLnzyC-PN17mOG1jT+g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-17 17:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2012, at 11:54 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; All that said, I think using the WHOLE_SYSTEM flag is actually incorrect. 
</span><br>
<p>I think we want to continue using WHOLE_SYSTEM.  There are definite uses for it (being able to look around the machine beyond where you may or may not be bound, such as finding &quot;near&quot; PCI devices, etc.).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10486.php">Jeff Squyres: "Re: [OMPI devel] OPAL_ENABLE_FT_CR build broken in 1.5 branch"</a>
<li><strong>Previous message:</strong> <a href="10484.php">Paul H. Hargrove: "[OMPI devel] excessive warnings on some BSDs [w/ PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10482.php">Ralph Castain: "Re: [OMPI devel] btl/openib: get_ib_dev_distance doesn't see processes as bound if the job has been launched by srun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10477.php">Jeff Squyres: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
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
