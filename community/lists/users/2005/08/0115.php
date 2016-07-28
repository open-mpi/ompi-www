<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 07:52:40 2005" -->
<!-- isoreceived="20050823125240" -->
<!-- sent="Tue, 23 Aug 2005 08:52:38 -0400" -->
<!-- isosent="20050823125238" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] how do you select which network/trasport to use at run-time?" -->
<!-- id="e4b22761af76d5d1e49816ae34020e51_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200508231248.32637.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2005-08-23 07:52:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0114.php">Peter Kjellstr&#246;m: "[O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Peter Kjellstr&#246;m: "[O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 23, 2005, at 6:48 AM, Peter Kjellstr&#246;m wrote:
<br>
<p><span class="quotelev1">&gt; First I'd like to say that I'm really happy and excited that public 
</span><br>
<span class="quotelev1">&gt; access to
</span><br>
<span class="quotelev1">&gt; svn is now open :-)
</span><br>
<p>Thanks!  We're glad it's finally open too -- FWIW, at least a good 
<br>
portion of the loooong delays in opening up the code were because we 
<br>
were making sure we had all the licensing issues worked out properly 
<br>
(open source does not automatically mean easy licensing!).  Open MPI is 
<br>
using the BSD license -- see 
<br>
<a href="http://www.open-mpi.org/community/license.php">http://www.open-mpi.org/community/license.php</a> -- we just had to get all 
<br>
the paperwork done properly before we could open the code base to the 
<br>
world.
<br>
<p><span class="quotelev1">&gt; Here is what went fine: check-out, autogen, configure, make, ompi_info 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; simple mpi app (both build and run!!!)
</span><br>
<p>Excellent!
<br>
<p><span class="quotelev1">&gt; Now I'd like to control over which channels/transports/networks the 
</span><br>
<span class="quotelev1">&gt; data
</span><br>
<span class="quotelev1">&gt; flows... I configured and built ompi against mvapi (mellanox 
</span><br>
<span class="quotelev1">&gt; ibgd-1.8.0) and
</span><br>
<span class="quotelev1">&gt; as far as I can tell it went well. Judging by the behaviour of the 
</span><br>
<span class="quotelev1">&gt; tests I
</span><br>
<span class="quotelev1">&gt; have done it defaults to tcp (over ethernet in my case). How do I 
</span><br>
<span class="quotelev1">&gt; select
</span><br>
<span class="quotelev1">&gt; mvapi?
</span><br>
<p>The Open MPI guys working on IB (from Los Alamos) are at the IB 
<br>
workshop this week, and their responses may be a bit slow.  They're the 
<br>
ones who can give the definitive answers, but I'll take a shot...
<br>
<p>I'm a little surprised that tcp was used -- OMPI should &quot;prefer&quot; the 
<br>
low latency interconnects (such as mvapi) to tcp and automatically use 
<br>
them.
<br>
<p>I see from your ompi_info output that the 2 mvapi components were built 
<br>
and installed properly, so that's good.
<br>
<p>A little background:
<br>
<p>As you know, Open MPI is built upon a component architecture (think 
<br>
plug-ins).  See the FAQ for a little more info on this.  The 
<br>
lowest-layer component dealing with the different interconnects is the 
<br>
Byte Transfer Layer (BTL).  You can tell Open MPI which BTLs it should 
<br>
use at run time via Modular Component Architecture (MCA) parameters.  
<br>
See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_base_include self,mvapi -np 4 a.out
<br>
<p>This will tell OMPI that you want to use the &quot;self&quot; (i.e., loopback) 
<br>
and &quot;mvapi&quot; BTLs, and no others.
<br>
<p>Try this and see if you get better results.
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
<li><strong>Next message:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Previous message:</strong> <a href="0114.php">Peter Kjellstr&#246;m: "[O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Peter Kjellstr&#246;m: "[O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>Reply:</strong> <a href="0116.php">Peter Kjellström: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
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
