<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 09:35:30 2007" -->
<!-- isoreceived="20070927133530" -->
<!-- sent="Thu, 27 Sep 2007 15:35:17 +0200" -->
<!-- isosent="20070927133517" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="1190900117.6646.41.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="46FBAB86.1010003_at_open-mpi.org" -->
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
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 09:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-09-27 at 09:09 -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Hi Ake,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the svn logs it looks like you reported the problems with 
</span><br>
<span class="quotelev1">&gt; these checks quite a while ago and we fixed them (in r13773 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/13773">https://svn.open-mpi.org/trac/ompi/changeset/13773</a>), but we never moved 
</span><br>
<span class="quotelev1">&gt; them to the 1.2 branch.
</span><br>
<p>Yes, it's the same. Since i never saw it in the source i tried once more
<br>
with some more explanations just in case :-)
<br>
<p><span class="quotelev1">&gt; I will ask for this to be moved to the 1.2 branch.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; However, the changes made for ompi_config_pthreads.m4 are different than 
</span><br>
<span class="quotelev1">&gt; you are suggesting now. Is this changeset good enough, or are there 
</span><br>
<span class="quotelev1">&gt; other changes you think should be made?
</span><br>
<p>The ones i sent today are slightly more correct. There where 2 missing
<br>
LIBS=&quot;$orig_LIBS&quot; in the failure cases.
<br>
<p>If you compare the resulting file after patching you will see the
<br>
difference. They are in the &quot;Can not find working threads configuration&quot;
<br>
portions.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4072.php">Teng Lin: "[OMPI users] Bundling OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4070.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
