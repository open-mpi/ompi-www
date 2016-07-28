<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 19:50:01 2005" -->
<!-- isoreceived="20050824005001" -->
<!-- sent="Tue, 23 Aug 2005 20:49:58 -0400" -->
<!-- isosent="20050824004958" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] how do you select which network/trasport to use at run-time?" -->
<!-- id="ad66d7c68ec6bafef1e1cf374b4c30f0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="130C69DD-CA38-4007-8D33-23103CA4B1D7_at_cs.unm.edu" -->
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
<strong>Date:</strong> 2005-08-23 19:49:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2005, at 2:40 PM, Galen M. Shipman wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I'm a little surprised that tcp was used -- OMPI should &quot;prefer&quot; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; low latency interconnects (such as mvapi) to tcp and automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a small issue and should be fixed in the next day or two. In
</span><br>
<span class="quotelev1">&gt; the meantime to run using mvapi only use:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -mca btl-base-include self,mvapi       (etc...)
</span><br>
<p>Slight correction -- btl_base_include, not btl-base-include.
<br>
<p>But Galen is right -- I forgot that, effectively, a switch hadn't been 
<br>
thrown in the code base to enable mvapi.  With the version you 
<br>
downloaded, you also need to add the &quot;-mca pml ob1&quot; switch to the 
<br>
command line as well.
<br>
<p>The ob1 pml component was made the default today at the subversion 
<br>
trunk HEAD, so tonight's tarball should &quot;just work&quot; with mvapi (without 
<br>
the need for either -mca switch -- btl_base_include or pml).
<br>
<p>Sorry for not thinking of that earlier...  :-\
<br>
<p>As for &quot;--verbose&quot;, that's on the list.  There's actually a bunch of 
<br>
individual verbose settings (as MCA parameters) that you can enable 
<br>
(see &quot;ompi_info --param all all --parsable | grep verbose&quot;), but it's a 
<br>
goal to have a single, top-level --verbose switch that is effectively 
<br>
an alias for most/all of them.
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
<li><strong>Next message:</strong> <a href="0121.php">Raul Mosquera: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>In reply to:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
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
