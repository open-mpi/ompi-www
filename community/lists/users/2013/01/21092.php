<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 12:33:57 2013" -->
<!-- isoreceived="20130109173357" -->
<!-- sent="Wed, 9 Jan 2013 17:33:41 +0000" -->
<!-- isosent="20130109173341" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380AF2AC_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1357226772.3355.32.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] grpcomm component hier gone...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-09 12:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting this.  We'll put hier back (it looks like it was removed under an incorrect premise).
<br>
<p>I've opened ticket <a href="https://svn.open-mpi.org/trac/ompi/ticket/3456">https://svn.open-mpi.org/trac/ompi/ticket/3456</a> to track this issue.
<br>
<p><p>On Jan 3, 2013, at 10:26 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2013-01-03 at 07:14 -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well, it isn't :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- MCA component grpcomm:pmi (m4 configuration macro)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for MCA component grpcomm:pmi compile mode... dso
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if user requested PMI support... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if MCA component grpcomm:pmi can compile... no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ah - that is the problem. You need to configure --with-pmi=&lt;wherever-slurms-pmi.h-is-located&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ahh thanks. Was assuming i needed something like that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not sure what you mean here. slurm's pmi module is available (and Intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI can use it if i point it to it).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, we need to be pointed to it just like Intel.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doh :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, I think that if there is code that tries to use the hier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component it shouldn't have been removed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Agreed - it looks like something picked up an unintended change. Just trying to help you work with it as I don't know when a 1.6.4 will occur.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I pulled the 1.6.1 hier component and reran autogen so i have it working
</span><br>
<span class="quotelev1">&gt; but it's good to know what's to be expected in later releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21093.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21091.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problem with MPI datatypes not defined as constants in	OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="21065.php">Ake Sandgren: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
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
