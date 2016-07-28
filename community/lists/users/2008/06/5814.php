<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 16:14:28 2008" -->
<!-- isoreceived="20080604201428" -->
<!-- sent="Wed, 04 Jun 2008 22:14:12 +0200" -->
<!-- isosent="20080604201412" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="1212610452.6255.13.camel_at_y-boda.ydc.se" -->
<!-- inreplyto="FA0B6D7AD2F82E4EA22697EE4D9DE87131A598_at_mtv-amer001e--3.americas.sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI scaling &gt; 512 cores<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 16:14:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<li><strong>Previous message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, 2008-06-04 at 11:43 -0700, Scott Shaw wrote:
<br>
<span class="quotelev1">&gt; Hi, I was wondering if anyone had any comments with regarding to my
</span><br>
<span class="quotelev1">&gt; posting of questions.  Am I off base with my questions or is this the
</span><br>
<span class="quotelev1">&gt; wrong forum for these types of questions?   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I hope this is the right forum for my questions.  I am running
</span><br>
<span class="quotelev1">&gt; into a
</span><br>
<span class="quotelev2">&gt; &gt; problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
<span class="quotelev1">&gt; 14,336
</span><br>
<span class="quotelev2">&gt; &gt; cores. I am new to openmpi and trying to figure out the right -mca
</span><br>
<span class="quotelev1">&gt; options
</span><br>
<p>I don't have any real answerr to you question except that i have had no
<br>
problems running HPL on our 672 node dual quad core = 5376 cores with
<br>
infiniband.
<br>
We use verbs.
<br>
I wouldn't touch the oob parameters since it uses tcp over ethernet to
<br>
setup the environment.
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
<li><strong>Next message:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<li><strong>Previous message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Reply:</strong> <a href="5816.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
