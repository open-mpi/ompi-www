<?
$subject_val = "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  4 12:31:58 2016" -->
<!-- isoreceived="20160204173158" -->
<!-- sent="Thu, 4 Feb 2016 17:31:56 +0000" -->
<!-- isosent="20160204173156" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32" -->
<!-- id="0E328655-8BCB-4FEF-8747-A69FC615FF29_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57odSDxd8M2zLMOnw0ecvN6V++tfESkLy3ODuu=2Zemj5rw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to	32<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-04 12:31:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18552.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 4, 2016, at 9:18 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +1, with an addition and modification:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * add the async_modex on by default
</span><br>
<span class="quotelev1">&gt; * make the change in master and let it &quot;stew&quot; for awhile before moving to 2.0. I believe only Cisco has been running MTT against that setup so far.
</span><br>
<p>It's been a little while, and I forget exactly what the async modex is -- can you refresh my memory?
<br>
<p>I'd be ok with enabling the async_modex, but that's not dependency to or from this 1024-&gt;32 change, right?  I.e., does the &quot;enable async_modex&quot; change need to be tied to this change?
<br>
<p>Regardless, I'm fine letting this stuff cook on master for a little bit before PR'ing to v2.x.
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
<li><strong>Next message:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Previous message:</strong> <a href="18553.php">Howard Pritchard: "Re: [OMPI devel] Porting the underlying fabric interface"</a>
<li><strong>In reply to:</strong> <a href="18552.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
<li><strong>Reply:</strong> <a href="18555.php">Ralph Castain: "Re: [OMPI devel] RFC: set MCA param mpi_add_procs_cutoff default to 32"</a>
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
