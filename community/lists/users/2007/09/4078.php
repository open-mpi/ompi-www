<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 14:45:06 2007" -->
<!-- isoreceived="20070927184506" -->
<!-- sent="Thu, 27 Sep 2007 20:44:54 +0200" -->
<!-- isosent="20070927184454" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="1190918694.2512.1.camel_at_y-boda.ydc.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="46FBF3FB.5020000_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-27 14:44:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4079.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2007-09-27 at 14:18 -0400, Tim Prins wrote:
<br>
<span class="quotelev1">&gt; &#197;ke Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2007-09-27 at 09:09 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ake,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Looking at the svn logs it looks like you reported the problems with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; these checks quite a while ago and we fixed them (in r13773 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/13773">https://svn.open-mpi.org/trac/ompi/changeset/13773</a>), but we never moved 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; them to the 1.2 branch.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Yes, it's the same. Since i never saw it in the source i tried once more
</span><br>
<span class="quotelev2">&gt; &gt; with some more explanations just in case :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I will ask for this to be moved to the 1.2 branch.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Good.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, the changes made for ompi_config_pthreads.m4 are different than 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; you are suggesting now. Is this changeset good enough, or are there 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; other changes you think should be made?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The ones i sent today are slightly more correct. There where 2 missing
</span><br>
<span class="quotelev2">&gt; &gt; LIBS=&quot;$orig_LIBS&quot; in the failure cases.
</span><br>
<span class="quotelev1">&gt; But do we really need these? It looks like configure aborts in these 
</span><br>
<span class="quotelev1">&gt; cases (I am not a autoconf wizard, so I could be completely wrong here).
</span><br>
<p>I don't know. I just put them in since it was the right thing to do. And
<br>
there where other variables that was reset in those places.
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
<li><strong>Next message:</strong> <a href="4079.php">Daniel Rozenbaum: "Re: [OMPI users] Application using OpenMPI 1.2.3 hangs, error messages in mca_btl_tcp_frag_recv"</a>
<li><strong>Previous message:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>In reply to:</strong> <a href="4077.php">Tim Prins: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4162.php">Jeff Squyres: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
