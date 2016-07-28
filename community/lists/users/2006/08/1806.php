<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 31 17:19:44 2006" -->
<!-- isoreceived="20060831211944" -->
<!-- sent="Thu, 31 Aug 2006 16:19:40 -0500" -->
<!-- isosent="20060831211940" -->
<!-- name="Robert Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pvfs2 and romio" -->
<!-- id="20060831211940.GI12671_at_mcs.anl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71F43528-5BFD-4284-A0CC-46254A607C9E_at_umich.edu" -->
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
<strong>From:</strong> Robert Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-31 17:19:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1805.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<li><strong>In reply to:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 14, 2006 at 10:57:34AM -0400, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; We will be evaluating pvfs2 (www.pvfs.org) in the future.  Is their  
</span><br>
<span class="quotelev1">&gt; any special considerations to take to get romio support with openmpi  
</span><br>
<span class="quotelev1">&gt; with pvfs2 ?
</span><br>
<p>Hi
<br>
<p>Since I wrote the ad_pvfs2 driver for ROMIO, and spend a lot of time
<br>
on PVFS2 in general, I've got a special interest in this thread :&gt;  I
<br>
hope your evaluation went well.
<br>
<p>I don't know how well the PVFS2 support in OpenMPI has tracked
<br>
&quot;upstream&quot;.  The last official ROMIO release was 1.2.5.1 (and that was
<br>
... gosh, 3 years ago at least. sorry!).  In the meantime, ROMIO's
<br>
PVFS2 driver has seen a lot of changes.  the two codes (ROMIO in
<br>
OpenMPI vs ROMIO in MPICH2) are laid out differently enough that it's
<br>
hard to compare directly (too bad 'diff' isn't smarter about renamed
<br>
files), but I think OpenMPI has got at least the biggest bug fixes. 
<br>
<p>Do follow up on this thread to let us (or at least me) know how well
<br>
OpenMPI works with PVFS2.  If you run into problems, I may be able to
<br>
provide a patch. 
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division    A215 0178 EA2D B059 8CDF
Argonne National Labs, IL USA                B29D F333 664A 4280 315B
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1807.php">Brian Barrett: "Re: [OMPI users] Dynamic loading of libmpi.dylib on Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="1805.php">Tobias Graf: "[OMPI users] Problem with C++ Binding"</a>
<li><strong>In reply to:</strong> <a href="1742.php">Brock Palen: "[OMPI users] pvfs2 and romio"</a>
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
