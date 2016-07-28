<?
$subject_val = "Re: [OMPI users] Continuous integration question...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 13:49:43 2016" -->
<!-- isoreceived="20160622174943" -->
<!-- sent="Wed, 22 Jun 2016 17:49:39 +0000" -->
<!-- isosent="20160622174939" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous integration question..." -->
<!-- id="48617075-7CB3-4CF0-A705-4B11CF8E904E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576ACBD4.5020904_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Continuous integration question...<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 13:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2016, at 1:33 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to do compile+test our code each night with the &quot;latest&quot; openmpi v2 release (or nightly if enough stable).
</span><br>
<p>Cool!
<br>
<p><span class="quotelev1">&gt; Just to ease the process, I would like to &quot;wget&quot; the latest archive with a &quot;permanent&quot; link...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it feasible for you to just put a symlink or something like it so I can &quot;wget&quot; it each night?
</span><br>
<p>We have a similar mechanism already (that is used by the Open MPI community for nightly regression testing), but with the advantage that it will give you a unique download filename (vs. &quot;openmpi-v2.x-latest.bz2&quot; every night).  Do this:
<br>
<p>wget <a href="https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt">https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt</a>
<br>
wget <a href="https://www.open-mpi.org/nightly/v2.x/openmpi-`cat">https://www.open-mpi.org/nightly/v2.x/openmpi-`cat</a> latest_snapshot.txt`.tar.bz2
<br>
<p>The nightly snapshots are created each night starting around 9pm US Eastern.  New snapshots are created if there were commits to the tree that day.
<br>
<p>Does that help?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29515.php">Eric Chamberland: "[OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
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
