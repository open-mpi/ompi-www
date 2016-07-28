<?
$subject_val = "Re: [OMPI users] grpcomm component hier gone...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 10:26:17 2013" -->
<!-- isoreceived="20130103152617" -->
<!-- sent="Thu, 03 Jan 2013 16:26:12 +0100" -->
<!-- isosent="20130103152612" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] grpcomm component hier gone..." -->
<!-- id="1357226772.3355.32.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5CE0F8DF-00B4-41D0-808B-6B9098AAB5CE_at_open-mpi.org" -->
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
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 10:26:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21066.php">Chuck Mosher: "[OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2013-01-03 at 07:14 -0800, Ralph Castain wrote:
<br>
<span class="quotelev2">&gt; &gt; Well, it isn't :-)
</span><br>
<span class="quotelev2">&gt; &gt; configure says:
</span><br>
<span class="quotelev2">&gt; &gt; --- MCA component grpcomm:pmi (m4 configuration macro)
</span><br>
<span class="quotelev2">&gt; &gt; checking for MCA component grpcomm:pmi compile mode... dso
</span><br>
<span class="quotelev2">&gt; &gt; checking if user requested PMI support... no
</span><br>
<span class="quotelev2">&gt; &gt; checking if MCA component grpcomm:pmi can compile... no
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah - that is the problem. You need to configure --with-pmi=&lt;wherever-slurms-pmi.h-is-located&gt;
</span><br>
<p>Ahh thanks. Was assuming i needed something like that.
<br>
<p><span class="quotelev2">&gt; &gt; Not sure what you mean here. slurm's pmi module is available (and Intel
</span><br>
<span class="quotelev2">&gt; &gt; MPI can use it if i point it to it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, we need to be pointed to it just like Intel.
</span><br>
<p>Doh :-(
<br>
<p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Anyway, I think that if there is code that tries to use the hier
</span><br>
<span class="quotelev2">&gt; &gt; component it shouldn't have been removed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed - it looks like something picked up an unintended change. Just trying to help you work with it as I don't know when a 1.6.4 will occur.
</span><br>
<p>I pulled the 1.6.1 hier component and reran autogen so i have it working
<br>
but it's good to know what's to be expected in later releases.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21066.php">Chuck Mosher: "[OMPI users] MPI Java Bindings on Mac OSX"</a>
<li><strong>Previous message:</strong> <a href="21064.php">Chuck Mosher: "Re: [OMPI users] mpirun - All Nodes Filled"</a>
<li><strong>In reply to:</strong> <a href="21063.php">Ralph Castain: "Re: [OMPI users] grpcomm component hier gone..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
<li><strong>Reply:</strong> <a href="21092.php">Jeff Squyres (jsquyres): "Re: [OMPI users] grpcomm component hier gone..."</a>
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
