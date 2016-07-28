<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 18:58:23 2007" -->
<!-- isoreceived="20071105235823" -->
<!-- sent="Mon, 5 Nov 2007 19:58:05 -0400" -->
<!-- isosent="20071105235805" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="200711051858.05382.tprins_at_cs.indiana.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20071105224100.GL18506_at_ringo.informatik.tu-chemnitz.de" -->
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
<strong>Date:</strong> 2007-11-05 18:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the clarification everyone.
<br>
<p>Tim
<br>
<p>On Monday 05 November 2007 05:41:00 pm Torsten Hoefler wrote:
<br>
<span class="quotelev1">&gt; On Mon, Nov 05, 2007 at 05:32:04PM -0500, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, 5 Nov 2007, Torsten Hoefler wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mon, Nov 05, 2007 at 04:57:19PM -0500, Brian W. Barrett wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; This is extremely tricky to do.  How do you know which environment
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; variables to forward (foo in this case) and which not to (hostname).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; SLURM has a better chance, since it's linux only and generally only
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; run on tightly controlled clusters.  But there's a whole variety of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; things that shouldn't be forwarded and that list differs from OS to
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; OS.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I believe we toyed around with the &quot;right thing&quot; in LAM and early on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with OPen MPI and decided that it was too hard to meet expected
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; behavior.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Some applications rely on this (I know at least two right away, Gamess
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and Abinit) and they work without problems with Lam/Mpich{1,2} but not
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with Open MPI. I am *not* arguing that those applications are correct
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (I agree that this way of passing arguments is ugly, but it's done).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I know it's not defined in the standard but I think it's a nice
</span><br>
<span class="quotelev3">&gt; &gt; &gt; convenient functionality. E.g., setting the LD_LIBRARY_PATH to find
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libmpi.so in the .bashrc is also a pain if you have multiple (Open)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPIs installed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; LAM does not automatically propogate environment variables -- it's
</span><br>
<span class="quotelev2">&gt; &gt; behavior is almost *exactly* like Open MPI's.  There might be a situation
</span><br>
<span class="quotelev2">&gt; &gt; where the environment is not quite so scrubbed if a process is started on
</span><br>
<span class="quotelev2">&gt; &gt; the same node mpirun is executed on, but it's only appearances -- in
</span><br>
<span class="quotelev2">&gt; &gt; reality, that's the environment that was alive when lamboot was executed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, I might have executed it on the same node (was a while ago).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; With both LAM and Open MPI, there is the -x option to propogate a list of
</span><br>
<span class="quotelev2">&gt; &gt; environment variables, but that's about it.  Neither will push
</span><br>
<span class="quotelev2">&gt; &gt; LD_LIBRARY_PATH by default (and there are many good reasons for that,
</span><br>
<span class="quotelev2">&gt; &gt; particularly in heterogeneous situations).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ah, heterogeneous! Yes, I agree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Torsten
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">George Bosilca: "Re: [OMPI devel] accessors to context id and message id's"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2554.php">Torsten Hoefler: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2553.php">Ron Brightwell: "Re: [OMPI devel] Environment forwarding"</a>
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
