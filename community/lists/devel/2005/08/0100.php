<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  9 08:05:03 2005" -->
<!-- isoreceived="20050809130503" -->
<!-- sent="Tue, 9 Aug 2005 09:04:58 -0400" -->
<!-- isosent="20050809130458" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Fwd: Regarding MVAPI Component in Open MPI" -->
<!-- id="03dbe55a9dff9bc858665d80379d5b77_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A388685F814D54CAE412B2DAB7CE91C5AD4A0_at_initexch.topspincom.com" -->
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
<strong>Date:</strong> 2005-08-09 08:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 9, 2005, at 7:24 AM, Sridhar Chirravuri wrote:
<br>
<p><span class="quotelev1">&gt; I have fixed the timing issue between the server and client, and now I 
</span><br>
<span class="quotelev1">&gt; could build Open MPI successfully.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; Here is the output of ompi_info....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_micrompi-2 ompi]# ompi_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Open MPI: 1.0a1r6760M
</span><br>
<p>Note that as of this morning (US Eastern time), the current head is 
<br>
r6774.  Also be wary of any local mods you have put in the tree (as 
<br>
noted by the &quot;M&quot;).  Check &quot;svn status&quot; to see which files you have 
<br>
modified, and &quot;svn diff&quot; to see the exact changes.
<br>
<p><span class="quotelev1">&gt; This time, I could see that btl mvapi component is built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I am still seeing the same problem while running Pallas Benchmark 
</span><br>
<span class="quotelev1">&gt; i.e., I still see that the data is passing over TCP/GigE and NOT over 
</span><br>
<span class="quotelev1">&gt; Infiniband.
</span><br>
<p>Please note that the 2nd generation point-to-point implementation is 
<br>
still the default (where we have no IB support) -- all the IB support, 
<br>
both mVAPI and Open IB, is in the 3rd generation point-to-point 
<br>
implementation.  You must explicitly request the 3rd generation 
<br>
point-to-point implementation at run time to get IB support.  Check out 
<br>
slide 48, &quot;Example: Forcing ob1/BTL&quot; in the slides that we discussed on 
<br>
the teleconference (were you on the teleconference?  I attached copies 
<br>
if you were not).  The short version is that you need to tell Open MPI 
<br>
to use the &quot;ob1&quot; pml component (3rd gen), not the default &quot;teg&quot; pml 
<br>
component (2nd gen).
<br>
<p>We'll eventually make the 3rd gen stuff be the default, and likely 
<br>
remove all the 2nd gen stuff (i.e., definitely before release) -- we 
<br>
just haven't done it yet because Tim and Galen are still polishing up 
<br>
the 3rd gen stuff.
<br>
<p><span class="quotelev1">&gt; I have disabled building OpenIB and to do so I have touched 
</span><br>
<span class="quotelev1">&gt; .ompi_ignore. This should not be a problem for MVAPI.
</span><br>
<p>If the Open IB headers / libraries are not located in compiler-known 
<br>
locations, then you shouldn't need to .ompi_ignore the tree (i.e., 
<br>
configure won't find the Open IB headers / libraries, and will 
<br>
therefore automatically skip those components).
<br>
<p>Again, it is our intention that users will neither know about nor have 
<br>
to touch files in the distribution -- they only need use appropriate 
<br>
options to &quot;configure&quot; and then &quot;make&quot;.
<br>
<p>I'm not sure if we have explicit options to disable a component in 
<br>
configure -- Brian, can you comment here?
<br>
<p><span class="quotelev1">&gt; I have run autogen.sh, configure and make all. The output of 
</span><br>
<span class="quotelev1">&gt; autogen.sh, configure and make all commands are &lt;&lt;ompi_out.tar.gz&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; gzip'ed in ompi_out.tar.gz file which is attached in this mail. This 
</span><br>
<span class="quotelev1">&gt; gzip file also contains the output of Pallas Benchmark results. At the 
</span><br>
<span class="quotelev1">&gt; end of Pallas Benchmark output, you can find the error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce_scatter.c, 79)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Request for 0 bytes (coll_basic_reduce.c, 193)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ..and Pallas just hung.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no clue about the above errors which are coming from Open MPI 
</span><br>
<span class="quotelev1">&gt; source code.
</span><br>
<p>The 2nd generation component has fallen into some disrepair -- I'd try 
<br>
re-running with ob1 and see what happens.  I have not seen such errors 
<br>
when running PMB before, but I can try running it again to see if we've 
<br>
broken something recently.
<br>
<p><span class="quotelev1">&gt; Is there any thing that I am missing while building btl mvapi? Also, 
</span><br>
<span class="quotelev1">&gt; is anyone built for mvapi and tested this OMPI stack. Please let me 
</span><br>
<span class="quotelev1">&gt; know.
</span><br>
<p>Galen Shipman and Tim Woodall are doing all the IB work.
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
<li><strong>Next message:</strong> <a href="0101.php">Gleb Natapov: "Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0099.php">Sridhar Chirravuri \(schirrav\): "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0098.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Reply:</strong> <a href="0102.php">Brian Barrett: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
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
