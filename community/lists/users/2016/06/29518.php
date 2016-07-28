<?
$subject_val = "Re: [OMPI users] Continuous integration question...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 14:10:56 2016" -->
<!-- isoreceived="20160622181056" -->
<!-- sent="Wed, 22 Jun 2016 18:10:53 +0000" -->
<!-- isosent="20160622181053" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous integration question..." -->
<!-- id="816B8A0A-4838-4D00-A6B9-5A4E169E004F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576AD393.1020303_at_giref.ulaval.ca" -->
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
<strong>Date:</strong> 2016-06-22 14:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 22, 2016, at 2:06 PM, Eric Chamberland &lt;Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a similar mechanism already (that is used by the Open MPI community for nightly regression testing), but with the advantage that it will give you a unique download filename (vs. &quot;openmpi-v2.x-latest.bz2&quot; every night).  Do this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt">https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/openmpi-`cat">https://www.open-mpi.org/nightly/v2.x/openmpi-`cat</a> latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The nightly snapshots are created each night starting around 9pm US Eastern.  New snapshots are created if there were commits to the tree that day.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nice!  But I have a concern about taking the nightly: it it &quot;just&quot; a snapshot, or is it &quot;somewhat validated&quot; before beeing a snapshot?
</span><br>
<p>It's just a snapshot.
<br>
<p><span class="quotelev1">&gt; Or I could ask: is this snapshot stable enough to be tested by &quot;outsiders&quot;?  Is there any more &quot;stable&quot; branch to wget?
</span><br>
<p>This is a different branch than our head of development (master).  It tends to be pretty stable, but it does break sometimes.
<br>
<p><span class="quotelev1">&gt; If not, I would ask if there is a similar wget trick to get the latest &quot;release candidate&quot; or something more &quot;stable&quot; than a snapshot of the repository...
</span><br>
<p>Release candidates move much more slowly than the nightly snapshots -- they're released at controlled points (e.g., we just did v2.0.0rc3, and we're likely to do a v2.0.0rc4 shortly with just a few more cleanups beyond rc3).  Those are found here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/">https://www.open-mpi.org/software/ompi/v2.x/downloads/</a>
<br>
<p>I.e., you can do the same latest_snapshot.txt thing there:
<br>
<p>wget <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt">https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt</a>
<br>
wget <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat">https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat</a> latest_snapshot.txt`.tar.bz2
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
<li><strong>Next message:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29517.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
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
