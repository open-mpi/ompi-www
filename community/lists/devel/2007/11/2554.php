<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:39:36 2007" -->
<!-- isoreceived="20071105223936" -->
<!-- sent="Mon, 5 Nov 2007 23:41:00 +0100" -->
<!-- isosent="20071105224100" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="20071105224100.GL18506_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0711051726220.4842_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 05, 2007 at 05:32:04PM -0500, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Mon, 5 Nov 2007, Torsten Hoefler wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov 05, 2007 at 04:57:19PM -0500, Brian W. Barrett wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This is extremely tricky to do.  How do you know which environment
</span><br>
<span class="quotelev3">&gt; &gt;&gt; variables to forward (foo in this case) and which not to (hostname).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; SLURM has a better chance, since it's linux only and generally only run on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tightly controlled clusters.  But there's a whole variety of things that
</span><br>
<span class="quotelev3">&gt; &gt;&gt; shouldn't be forwarded and that list differs from OS to OS.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe we toyed around with the &quot;right thing&quot; in LAM and early on with
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OPen MPI and decided that it was too hard to meet expected behavior.
</span><br>
<span class="quotelev2">&gt; &gt; Some applications rely on this (I know at least two right away, Gamess
</span><br>
<span class="quotelev2">&gt; &gt; and Abinit) and they work without problems with Lam/Mpich{1,2} but not
</span><br>
<span class="quotelev2">&gt; &gt; with Open MPI. I am *not* arguing that those applications are correct (I
</span><br>
<span class="quotelev2">&gt; &gt; agree that this way of passing arguments is ugly, but it's done).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know it's not defined in the standard but I think it's a nice
</span><br>
<span class="quotelev2">&gt; &gt; convenient functionality. E.g., setting the LD_LIBRARY_PATH to find
</span><br>
<span class="quotelev2">&gt; &gt; libmpi.so in the .bashrc is also a pain if you have multiple (Open) MPIs
</span><br>
<span class="quotelev2">&gt; &gt; installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; LAM does not automatically propogate environment variables -- it's 
</span><br>
<span class="quotelev1">&gt; behavior is almost *exactly* like Open MPI's.  There might be a situation 
</span><br>
<span class="quotelev1">&gt; where the environment is not quite so scrubbed if a process is started on 
</span><br>
<span class="quotelev1">&gt; the same node mpirun is executed on, but it's only appearances -- in 
</span><br>
<span class="quotelev1">&gt; reality, that's the environment that was alive when lamboot was executed.
</span><br>
ok, I might have executed it on the same node (was a while ago).
<br>
<p><span class="quotelev1">&gt; With both LAM and Open MPI, there is the -x option to propogate a list of 
</span><br>
<span class="quotelev1">&gt; environment variables, but that's about it.  Neither will push 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH by default (and there are many good reasons for that, 
</span><br>
<span class="quotelev1">&gt; particularly in heterogeneous situations).
</span><br>
Ah, heterogeneous! Yes, I agree. 
<br>
<p>Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
&quot;I have the result, but I do not yet know how to get it.&quot; - Gauss
(1777-1855)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2555.php">Tim Prins: "Re: [OMPI devel] Environment forwarding"</a>
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
