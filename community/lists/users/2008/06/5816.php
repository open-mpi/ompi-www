<?
$subject_val = "Re: [OMPI users] OpenMPI scaling &gt; 512 cores";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 16:34:38 2008" -->
<!-- isoreceived="20080604203438" -->
<!-- sent="Wed, 4 Jun 2008 16:34:28 -0400" -->
<!-- isosent="20080604203428" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI scaling &amp;gt; 512 cores" -->
<!-- id="5445E18D-C363-48E4-8E1F-5F491CA281EC_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1212610452.6255.13.camel_at_y-boda.ydc.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 16:34:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<li><strong>In reply to:</strong> <a href="5814.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One other parameter that I neglected to mention (and Scott pointed out  
<br>
to me is *not* documented in the FAQ) is the mpi_preconnect_oob MCA  
<br>
param.
<br>
<p>This parameter will cause all the OOB connections to be created during  
<br>
MPI_INIT, and *may* help such kind of issues.  You *do* need to have  
<br>
enough fd's available per process to allow this to happen at scale, of  
<br>
course.  I'll try to add this information to the FAQ by the end of  
<br>
this week.
<br>
<p>This kind of thing is much better in the v1.3 series -- the linear TCP  
<br>
wireup is no longer necessary (e.g., each MPI process only opens 1 TCP  
<br>
socket: to the daemon on its host, etc.).
<br>
<p><p>On Jun 4, 2008, at 4:14 PM, &#197;ke Sandgren wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 2008-06-04 at 11:43 -0700, Scott Shaw wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi, I was wondering if anyone had any comments with regarding to my
</span><br>
<span class="quotelev2">&gt;&gt; posting of questions.  Am I off base with my questions or is this the
</span><br>
<span class="quotelev2">&gt;&gt; wrong forum for these types of questions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi, I hope this is the right forum for my questions.  I am running
</span><br>
<span class="quotelev2">&gt;&gt; into a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem when scaling &gt;512 cores on a infiniband cluster which has
</span><br>
<span class="quotelev2">&gt;&gt; 14,336
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores. I am new to openmpi and trying to figure out the right -mca
</span><br>
<span class="quotelev2">&gt;&gt; options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have any real answerr to you question except that i have had  
</span><br>
<span class="quotelev1">&gt; no
</span><br>
<span class="quotelev1">&gt; problems running HPL on our 672 node dual quad core = 5376 cores with
</span><br>
<span class="quotelev1">&gt; infiniband.
</span><br>
<span class="quotelev1">&gt; We use verbs.
</span><br>
<span class="quotelev1">&gt; I wouldn't touch the oob parameters since it uses tcp over ethernet to
</span><br>
<span class="quotelev1">&gt; setup the environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
</span><br>
<span class="quotelev1">&gt; Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
</span><br>
<span class="quotelev1">&gt; Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5817.php">Allen Barnett: "Re: [OMPI users] Problem with X forwarding"</a>
<li><strong>Previous message:</strong> <a href="5815.php">Brock Palen: "[OMPI users] libibverbs"</a>
<li><strong>In reply to:</strong> <a href="5814.php">&#197;ke Sandgren: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
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
