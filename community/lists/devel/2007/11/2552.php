<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:32:05 2007" -->
<!-- isoreceived="20071105223205" -->
<!-- sent="Mon, 5 Nov 2007 17:32:04 -0500 (EST)" -->
<!-- isosent="20071105223204" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="Pine.LNX.4.64.0711051726220.4842_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071105221118.GK18506_at_ringo.informatik.tu-chemnitz.de" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:32:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 5 Nov 2007, Torsten Hoefler wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Nov 05, 2007 at 04:57:19PM -0500, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt; This is extremely tricky to do.  How do you know which environment
</span><br>
<span class="quotelev2">&gt;&gt; variables to forward (foo in this case) and which not to (hostname).
</span><br>
<span class="quotelev2">&gt;&gt; SLURM has a better chance, since it's linux only and generally only run on
</span><br>
<span class="quotelev2">&gt;&gt; tightly controlled clusters.  But there's a whole variety of things that
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't be forwarded and that list differs from OS to OS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe we toyed around with the &quot;right thing&quot; in LAM and early on with
</span><br>
<span class="quotelev2">&gt;&gt; OPen MPI and decided that it was too hard to meet expected behavior.
</span><br>
<span class="quotelev1">&gt; Some applications rely on this (I know at least two right away, Gamess
</span><br>
<span class="quotelev1">&gt; and Abinit) and they work without problems with Lam/Mpich{1,2} but not
</span><br>
<span class="quotelev1">&gt; with Open MPI. I am *not* arguing that those applications are correct (I
</span><br>
<span class="quotelev1">&gt; agree that this way of passing arguments is ugly, but it's done).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know it's not defined in the standard but I think it's a nice
</span><br>
<span class="quotelev1">&gt; convenient functionality. E.g., setting the LD_LIBRARY_PATH to find
</span><br>
<span class="quotelev1">&gt; libmpi.so in the .bashrc is also a pain if you have multiple (Open) MPIs
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<p>LAM does not automatically propogate environment variables -- it's 
<br>
behavior is almost *exactly* like Open MPI's.  There might be a situation 
<br>
where the environment is not quite so scrubbed if a process is started on 
<br>
the same node mpirun is executed on, but it's only appearances -- in 
<br>
reality, that's the environment that was alive when lamboot was executed.
<br>
<p>With both LAM and Open MPI, there is the -x option to propogate a list of 
<br>
environment variables, but that's about it.  Neither will push 
<br>
LD_LIBRARY_PATH by default (and there are many good reasons for that, 
<br>
particularly in heterogeneous situations).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2551.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
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
