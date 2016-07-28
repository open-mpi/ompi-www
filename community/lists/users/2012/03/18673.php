<?
$subject_val = "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 14:50:21 2012" -->
<!-- isoreceived="20120302195021" -->
<!-- sent="Fri, 2 Mar 2012 12:50:13 -0700" -->
<!-- isosent="20120302195013" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes" -->
<!-- id="5B798CB5-1374-4BDC-9451-562D0C911562_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7022BEF-1342-4914-9292-D2D7088798F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 14:50:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>In reply to:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2012, at 10:50 AM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 2, 2012, at 9:48 AM, Yiguang Yan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (All with the same test script test.bash I post in my previous emails, so run with app file fed to mpirun command.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (1) If I put the --prefix in the app file, on each line of it, it works fine as Jeff said.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (2) Since in the manual, it is said that the full path of mpirun is the same as setting &quot;--prefix&quot;. However, with app file, 
</span><br>
<span class="quotelev2">&gt;&gt; this is not the case. Without &quot;--prefix&quot; on each line of the app file, the full path of mpirun does not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph and I just had a phone conversation about this.  We consider it a bug -- you shouldn't need to put --prefix in the app file.  Meaning: --prefix is currently being ignored if you use an app file (and therefore you have to put --prefix in the app file).  We're going to fix that.
</span><br>
<p>Updated in the developer's trunk. I don't think we'll bring this to the 1.5 branch, though I leave that up to Jeff.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Previous message:</strong> <a href="18672.php">Ralph Castain: "Re: [OMPI users] run orterun with more than 200 processes"</a>
<li><strong>In reply to:</strong> <a href="18668.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
<li><strong>Reply:</strong> <a href="18674.php">Jeffrey Squyres: "Re: [OMPI users] orted daemon not found! --- environment not passed to slave nodes"</a>
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
