<?
$subject_val = "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 05:43:23 2010" -->
<!-- isoreceived="20100611094323" -->
<!-- sent="Fri, 11 Jun 2010 02:43:08 -0700" -->
<!-- isosent="20100611094308" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing" -->
<!-- id="4C12052C.2050106_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 05:43:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8096.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sylvain Jeaugey wrote:
<br>
<span class="quotelev1">&gt; On Thu, 10 Jun 2010, Paul H. Hargrove wrote: 
</span><br>
[snip]
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As for why mmap is slower.  When the file is on a real (not tmpfs or 
</span><br>
<span class="quotelev2">&gt;&gt; other ramdisk) I am 95% certain that this is an artifact of the Linux 
</span><br>
<span class="quotelev2">&gt;&gt; swapper/pager behavior which is thinking it is being smart by 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;swapping ahead&quot;.  Even when there is no memory pressure that 
</span><br>
<span class="quotelev2">&gt;&gt; requires swapping, Linux starts queuing swap I/O for pages to keep 
</span><br>
<span class="quotelev2">&gt;&gt; the number of &quot;clean&quot; pages up when possible. This results in pages 
</span><br>
<span class="quotelev2">&gt;&gt; of the shared memory file being written out to the actual block 
</span><br>
<span class="quotelev2">&gt;&gt; device.  Both the background I/O and the VM metadata updates 
</span><br>
<span class="quotelev2">&gt;&gt; contribute to the lost time.  I say 95% certain because I have a 
</span><br>
<span class="quotelev2">&gt;&gt; colleague who looked into this phenomena in another setting and I am 
</span><br>
<span class="quotelev2">&gt;&gt; recounting what he reported as clearly as I can remember, but might 
</span><br>
<span class="quotelev2">&gt;&gt; have misunderstood or inserted my own speculation by accident.  A 
</span><br>
<span class="quotelev2">&gt;&gt; sufficiently motivated investigator (not me) could probably devise an 
</span><br>
<span class="quotelev2">&gt;&gt; experiment to verify this.
</span><br>
<span class="quotelev1">&gt; Interesting. Do you think this behavior of the linux kernel would 
</span><br>
<span class="quotelev1">&gt; change if the file was unlink()ed after attach ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>As Jeff pointed out, the file IS unlinked by Open MPI, presumably to 
<br>
ensure it is not left behind in case of abnormal termination.
<br>
<p>This was also the case for the scenario I reported my colleague looking 
<br>
at.  We were (unpleasantly) surprised to find that this &quot;swap ahead&quot; 
<br>
behavior was being applied to an unlinked file : a case that would 
<br>
appear to be a very simple one to optimize away.  However, the simple 
<br>
fact is that Linux appears just to queue I/O to the &quot;backing store&quot; for 
<br>
a page regardless of little details like it being unlinked.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Previous message:</strong> <a href="8096.php">Paul H. Hargrove: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>In reply to:</strong> <a href="8090.php">Sylvain Jeaugey: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
<li><strong>Reply:</strong> <a href="8098.php">Jeff Squyres: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request forCommunity Input and Testing"</a>
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
