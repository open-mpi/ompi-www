<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 10 08:06:23 2010" -->
<!-- isoreceived="20100610120623" -->
<!-- sent="Thu, 10 Jun 2010 08:06:18 -0400" -->
<!-- isosent="20100610120618" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="D5F0043E-A841-4EE5-98A9-0578A4D5D9DC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1006101053310.3820_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-10 08:06:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 10, 2010, at 4:57 AM, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev2">&gt; &gt; As for why mmap is slower.  When the file is on a real (not tmpfs or other
</span><br>
<span class="quotelev2">&gt; &gt; ramdisk) I am 95% certain that this is an artifact of the Linux swapper/pager
</span><br>
<span class="quotelev2">&gt; &gt; behavior which is thinking it is being smart by &quot;swapping ahead&quot;.  Even when
</span><br>
<span class="quotelev2">&gt; &gt; there is no memory pressure that requires swapping, Linux starts queuing swap
</span><br>
<span class="quotelev2">&gt; &gt; I/O for pages to keep the number of &quot;clean&quot; pages up when possible. This
</span><br>
<span class="quotelev2">&gt; &gt; results in pages of the shared memory file being written out to the actual
</span><br>
<span class="quotelev2">&gt; &gt; block device.  Both the background I/O and the VM metadata updates contribute
</span><br>
<span class="quotelev2">&gt; &gt; to the lost time.  I say 95% certain because I have a colleague who looked
</span><br>
<span class="quotelev2">&gt; &gt; into this phenomena in another setting and I am recounting what he reported
</span><br>
<span class="quotelev2">&gt; &gt; as clearly as I can remember, but might have misunderstood or inserted my own
</span><br>
<span class="quotelev2">&gt; &gt; speculation by accident.  A sufficiently motivated investigator (not me)
</span><br>
<span class="quotelev2">&gt; &gt; could probably devise an experiment to verify this.
</span><br>
<span class="quotelev1">&gt; Interesting. Do you think this behavior of the linux kernel would change
</span><br>
<span class="quotelev1">&gt; if the file was unlink()ed after attach ?
</span><br>
<p>Note that OMPI does unlink the mmap'ed file after attach.
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
<li><strong>Next message:</strong> <a href="8093.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8091.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8097.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
