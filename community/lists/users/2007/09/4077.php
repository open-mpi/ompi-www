<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 27 14:18:26 2007" -->
<!-- isoreceived="20070927181826" -->
<!-- sent="Thu, 27 Sep 2007 14:18:35 -0400" -->
<!-- isosent="20070927181835" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] incorrect configure code (1.2.4 and earlier)" -->
<!-- id="46FBF3FB.5020000_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1190900117.6646.41.camel_at_skalman.hpc2n.umu.se" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-27 14:18:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>In reply to:</strong> <a href="4071.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; On Thu, 2007-09-27 at 09:09 -0400, Tim Prins wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ake,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking at the svn logs it looks like you reported the problems with 
</span><br>
<span class="quotelev2">&gt;&gt; these checks quite a while ago and we fixed them (in r13773 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/13773">https://svn.open-mpi.org/trac/ompi/changeset/13773</a>), but we never moved 
</span><br>
<span class="quotelev2">&gt;&gt; them to the 1.2 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it's the same. Since i never saw it in the source i tried once more
</span><br>
<span class="quotelev1">&gt; with some more explanations just in case :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I will ask for this to be moved to the 1.2 branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the changes made for ompi_config_pthreads.m4 are different than 
</span><br>
<span class="quotelev2">&gt;&gt; you are suggesting now. Is this changeset good enough, or are there 
</span><br>
<span class="quotelev2">&gt;&gt; other changes you think should be made?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ones i sent today are slightly more correct. There where 2 missing
</span><br>
<span class="quotelev1">&gt; LIBS=&quot;$orig_LIBS&quot; in the failure cases.
</span><br>
But do we really need these? It looks like configure aborts in these 
<br>
cases (I am not a autoconf wizard, so I could be completely wrong here).
<br>
<p>Tim
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you compare the resulting file after patching you will see the
</span><br>
<span class="quotelev1">&gt; difference. They are in the &quot;Can not find working threads configuration&quot;
</span><br>
<span class="quotelev1">&gt; portions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Previous message:</strong> <a href="4076.php">Murat Knecht: "Re: [OMPI users] SIGSEG in ompi_comm_start_processes"</a>
<li><strong>In reply to:</strong> <a href="4071.php">&#197;ke Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
<li><strong>Reply:</strong> <a href="4078.php">흆e Sandgren: "Re: [OMPI users] incorrect configure code (1.2.4 and earlier)"</a>
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
