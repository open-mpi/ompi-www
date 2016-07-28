<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug 27 10:56:17 2005" -->
<!-- isoreceived="20050827155617" -->
<!-- sent="Sat, 27 Aug 2005 10:56:09 -0500" -->
<!-- isosent="20050827155609" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  tar file name length limit" -->
<!-- id="7B612494-4CA7-4D9C-A52E-D8CB4F3C7548_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050827154916.GA5162_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-27 10:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
<li><strong>In reply to:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2005, at 10:49 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; From a recent ChangeLog entry:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; | Part 1 of 2 of a commit to reduce filenames in the romio component
</span><br>
<span class="quotelev1">&gt; | (because we kept bumping up against the max filename limit in &quot;tar&quot;
</span><br>
<span class="quotelev1">&gt; | when making tarballs, especially if the version number got long).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can allow to limit developers to Automake &gt;= 1.9, you should be
</span><br>
<span class="quotelev1">&gt; able to use longer file names by selecting a different tar format than
</span><br>
<span class="quotelev1">&gt; tar-v7, e.g., tar-pax or tar-ustar.  Automake docs suggest that ustar
</span><br>
<span class="quotelev1">&gt; should be widely usable, in contrast to the rather recent but POSIX  
</span><br>
<span class="quotelev1">&gt; pax
</span><br>
<span class="quotelev1">&gt; format.  ustar does not have the length limit.
</span><br>
<span class="quotelev1">&gt; If you want to stick to tar-v7, you might want to check out the
</span><br>
<span class="quotelev1">&gt; &quot;filename-length-max=99&quot; Automake option to tell you about long names
</span><br>
<span class="quotelev1">&gt; right away.
</span><br>
<p>The changes really weren't a big deal, and only happened in one place  
<br>
where (IMHO) Jeff got a little overboard with making really long file  
<br>
names ;).  Now I don't have to type as much when I go to maintain  
<br>
those files...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0262.php">Gleb Natapov: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
<li><strong>In reply to:</strong> <a href="0260.php">Ralf Wildenhues: "tar file name length limit"</a>
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
