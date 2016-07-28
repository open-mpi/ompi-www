<?
$subject_val = "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 23 13:47:39 2013" -->
<!-- isoreceived="20131023174739" -->
<!-- sent="Wed, 23 Oct 2013 12:47:18 -0500" -->
<!-- isosent="20131023174718" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED" -->
<!-- id="CAGKz=uJpYy0L9eKp6sFeVzMHHt7t-S83x0ZEaLJ-FMLz8CV9Qg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CE8D5C2A.14675%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED<br>
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-23 13:47:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>In reply to:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 23, 2013 at 12:02 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On 10/22/13 10:23 AM, &quot;Jai Dayal&quot; &lt;dayalsoap_at_[hidden]&gt; wrote:
</span><br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; I'm asking because I'm using an open_mpi build ontop of infiniband, and the
</span><br>
<span class="quotelev1">&gt; maximum thread mode is MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That doesn't seem right; which version of Open MPI are you using?
</span><br>
<p>The last time I looked at this, OpenMPI only supported
<br>
MPI_THREAD_SINGLE by default and if you ask for any higher thread
<br>
level, you get MPI_THREAD_MULTIPLE, which requires a configure-time
<br>
switch.
<br>
<p>Maybe something has changed dramatically more recently than I tested.
<br>
Squyres told me some thread-oriented refactoring was going on.  All of
<br>
this was over a year ago so it is entirely reasonable for me to be
<br>
wrong about all of this.
<br>
<p>Jeff
<br>
<p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Previous message:</strong> <a href="22824.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Get your Open MPI schwag!"</a>
<li><strong>In reply to:</strong> <a href="22822.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22826.php">Paul Kapinos: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
<li><strong>Reply:</strong> <a href="22827.php">Jai Dayal: "Re: [OMPI users] [EXTERNAL] MPI_THREAD_SINGLE vs. MPI_THREAD_FUNNELED"</a>
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
