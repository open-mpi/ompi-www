<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 19 11:08:06 2007" -->
<!-- isoreceived="20070919150806" -->
<!-- sent="Wed, 19 Sep 2007 17:07:58 +0200" -->
<!-- isosent="20070919150758" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_bibw failing for message sizes 2097152 and	larger" -->
<!-- id="20070919150758.GG10571_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46F13187.5050008_at_Sun.COM" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-19 11:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2330.php">Dan Lacher: "[OMPI devel] osu_bibw failing for message sizes 2097152 and larger"</a>
<li><strong>In reply to:</strong> <a href="2330.php">Dan Lacher: "[OMPI devel] osu_bibw failing for message sizes 2097152 and larger"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Sep 19, 2007 at 10:26:15AM -0400, Dan Lacher wrote:
<br>
<span class="quotelev1">&gt; In doing some runs with the osu_bibw test on a single node, we have 
</span><br>
<span class="quotelev1">&gt; found that it hands when using the trunk for message sizes 2097152 or 
</span><br>
<span class="quotelev1">&gt; larger unless the mpool_sm_min_size is set to a number larger than the 
</span><br>
<span class="quotelev1">&gt; message size.  We are not seeing this issue in the 1.2 branch.  Just 
</span><br>
<span class="quotelev1">&gt; checking to see if I am missed something or if I should be filing a 
</span><br>
<span class="quotelev1">&gt; defect to trac this issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I can't reproduce this.  &quot;mpirun -np 2 ./osu_bibw&quot; works for me.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2332.php">Nikolay Piskun: "[OMPI devel] Message Queue debugging support for1.2.4"</a>
<li><strong>Previous message:</strong> <a href="2330.php">Dan Lacher: "[OMPI devel] osu_bibw failing for message sizes 2097152 and larger"</a>
<li><strong>In reply to:</strong> <a href="2330.php">Dan Lacher: "[OMPI devel] osu_bibw failing for message sizes 2097152 and larger"</a>
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
