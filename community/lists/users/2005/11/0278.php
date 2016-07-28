<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  4 08:02:50 2005" -->
<!-- isoreceived="20051104130250" -->
<!-- sent="Fri, 4 Nov 2005 08:02:34 -0500" -->
<!-- isosent="20051104130234" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Open MPI limitations?" -->
<!-- id="5ec139cc9d6cf3d63e3201056312e1e8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051103220734.AD4E1D6F0F_at_gw02.mail.saunalahti.fi" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-04 08:02:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Allan Menezes: "[O-MPI users] HPL anf TCP"</a>
<li><strong>In reply to:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Reply:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2005, at 5:05 PM, Sebastian Forsman wrote:
<br>
<p><span class="quotelev1">&gt; Are there any &quot;hard coded&quot; limits in the size of a Open MPI pool?
</span><br>
<p>Which &quot;pool&quot; are you referring to?  The number of nodes, size of 
<br>
memory, etc.?
<br>
<p><span class="quotelev1">&gt; How about the maximum amount of nodes running a single job?
</span><br>
<p>Open MPI jobs have been run on a few thousand nodes (2k, I believe?) on 
<br>
Lawrence Livermore  machines.  We've still got some scalability issues 
<br>
to work out after 1.0, but this first release series should be able to 
<br>
handle jobs that large.  Future versions will handle more.
<br>
<p><span class="quotelev1">&gt;  Which factors should be
</span><br>
<span class="quotelev1">&gt; taken in to consideration when building large clusters? For an example 
</span><br>
<span class="quotelev1">&gt; what
</span><br>
<span class="quotelev1">&gt; kind of limits does the OS set, etc.
</span><br>
<p><span class="quotelev1">&gt; Most commercial parallel computing environments seem to have a 
</span><br>
<span class="quotelev1">&gt; restriction
</span><br>
<span class="quotelev1">&gt; of 100-256 nodes. Our project requires more. Any solutions? It's not 
</span><br>
<span class="quotelev1">&gt; always
</span><br>
<span class="quotelev1">&gt; possible to &quot;split&quot; the data into x starting points and use a batch 
</span><br>
<span class="quotelev1">&gt; system
</span><br>
<span class="quotelev1">&gt; to launch x jobs on several independent pools and then wait for the 
</span><br>
<span class="quotelev1">&gt; results
</span><br>
<span class="quotelev1">&gt; and combine them.
</span><br>
<p>You might want to bounce these questions over to the Beowulf list -- 
<br>
they talk much more about clusters, hardware, and specific setup over 
<br>
there (dig through there list archives; this kind of stuff is covered 
<br>
frequently).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Previous message:</strong> <a href="0277.php">Allan Menezes: "[O-MPI users] HPL anf TCP"</a>
<li><strong>In reply to:</strong> <a href="0276.php">Sebastian Forsman: "[O-MPI users] Open MPI limitations?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
<li><strong>Reply:</strong> <a href="0279.php">Sebastian Forsman: "Re: [O-MPI users] Open MPI limitations?"</a>
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
