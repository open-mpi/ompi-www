<?
$subject_val = "Re: [OMPI users] Continuous integration question...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 15:14:23 2016" -->
<!-- isoreceived="20160622191423" -->
<!-- sent="Wed, 22 Jun 2016 21:14:02 +0200" -->
<!-- isosent="20160622191402" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Continuous integration question..." -->
<!-- id="CAGKz=uJs2DBTWaR-oSxO1BCF55VUDG3hVntSAG9qMMyxRw1Qew_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="576AD92B.1060002_at_giref.ulaval.ca" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 15:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following may be a viable alternative.  Just a suggestion.
<br>
<p>git clone --depth 10 -b v2.x <a href="https://github.com/open-mpi/ompi-release.git">https://github.com/open-mpi/ompi-release.git</a>
<br>
open-mpi-v2.x
<br>
<p>Jeff
<br>
<p>On Wed, Jun 22, 2016 at 8:30 PM, Eric Chamberland &lt;
<br>
Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Excellent!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will put all in place, then try both URLs and see which one is
</span><br>
<span class="quotelev1">&gt; &quot;manageable&quot; for me!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 22/06/16 02:10 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 22, 2016, at 2:06 PM, Eric Chamberland &lt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric.Chamberland_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a similar mechanism already (that is used by the Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; community for nightly regression testing), but with the advantage that it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will give you a unique download filename (vs. &quot;openmpi-v2.x-latest.bz2&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every night).  Do this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt">https://www.open-mpi.org/nightly/v2.x/latest_snapshot.txt</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wget <a href="https://www.open-mpi.org/nightly/v2.x/openmpi-`cat">https://www.open-mpi.org/nightly/v2.x/openmpi-`cat</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="https://www.open-mpi.org/nightly/v2.x/openmpi-cat">https://www.open-mpi.org/nightly/v2.x/openmpi-cat</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The nightly snapshots are created each night starting around 9pm US
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eastern.  New snapshots are created if there were commits to the tree that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; day.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nice!  But I have a concern about taking the nightly: it it &quot;just&quot; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; snapshot, or is it &quot;somewhat validated&quot; before beeing a snapshot?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It's just a snapshot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or I could ask: is this snapshot stable enough to be tested by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;outsiders&quot;?  Is there any more &quot;stable&quot; branch to wget?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a different branch than our head of development (master).  It
</span><br>
<span class="quotelev2">&gt;&gt; tends to be pretty stable, but it does break sometimes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If not, I would ask if there is a similar wget trick to get the latest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;release candidate&quot; or something more &quot;stable&quot; than a snapshot of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repository...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Release candidates move much more slowly than the nightly snapshots --
</span><br>
<span class="quotelev2">&gt;&gt; they're released at controlled points (e.g., we just did v2.0.0rc3, and
</span><br>
<span class="quotelev2">&gt;&gt; we're likely to do a v2.0.0rc4 shortly with just a few more cleanups beyond
</span><br>
<span class="quotelev2">&gt;&gt; rc3).  Those are found here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/">https://www.open-mpi.org/software/ompi/v2.x/downloads/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I.e., you can do the same latest_snapshot.txt thing there:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wget
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt">https://www.open-mpi.org/software/ompi/v2.x/downloads/latest_snapshot.txt</a>
</span><br>
<span class="quotelev2">&gt;&gt; wget <a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat">https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-`cat</a>
</span><br>
<span class="quotelev2">&gt;&gt; &lt;<a href="https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-cat">https://www.open-mpi.org/software/ompi/v2.x/downloads/openmpi-cat</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; latest_snapshot.txt`.tar.bz2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29519.php">http://www.open-mpi.org/community/lists/users/2016/06/29519.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29520/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Previous message:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>In reply to:</strong> <a href="29519.php">Eric Chamberland: "Re: [OMPI users] Continuous integration question..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
<li><strong>Reply:</strong> <a href="29521.php">Gilles Gouaillardet: "Re: [OMPI users] Continuous integration question..."</a>
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
